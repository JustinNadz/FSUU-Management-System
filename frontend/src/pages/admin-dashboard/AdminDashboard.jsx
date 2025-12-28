import React, { useState, useEffect, useMemo, useRef } from 'react'
import { useNavigate } from 'react-router-dom'
import Icon from '../../components/AppIcon'
import { signOut } from '../../utils/auth'
import api from '../../utils/api'
import { students as studentData, faculty as facultyData, departments as deptData, courses as courseData, academicYears } from '../../data/mockData'

const ADMIN_MENU = [
  { id: 'dashboard', label: 'DASHBOARD', icon: 'BarChart3' },
  { id: 'faculty', label: 'FACULTY', icon: 'GraduationCap' },
  { id: 'students', label: 'STUDENTS', icon: 'Users' },
  { id: 'reports', label: 'REPORTS', icon: 'FileText' },
  { id: 'settings', label: 'SYSTEM\nSETTINGS', icon: 'Settings' }
]

export default function AdminDashboard() {
  const navigate = useNavigate()
  const [active, setActive] = useState('dashboard')
  const [loading, setLoading] = useState(false)
  const [sidebarCollapsed, setSidebarCollapsed] = useState(false)
  const [isMobile, setIsMobile] = useState(false)
  const [showProfileMenu, setShowProfileMenu] = useState(false)
  const [profileImage, setProfileImage] = useState(() => {
    const saved = localStorage.getItem('adminProfileImage');
    return saved || null;
  })
  const fileInputRef = useRef(null)
  const [previewUrl, setPreviewUrl] = useState(null)

  useEffect(() => {
    let mounted = true
      ; (async () => {
        try { const { data } = await api.get('/profile/me'); if (!mounted) return; if (data?.avatar_url) setProfileImage(data.avatar_url) } catch { }
      })()
    return () => { mounted = false }
  }, [])

  // Dashboard stats (dynamic)
  const [stats, setStats] = useState({
    totalStudents: 0,
    totalFaculty: 0,
    totalCourses: 0,
    totalDepartments: 0,
    activeAcademicYear: '2025-2026',
    pendingEnrollments: 0,
    systemStatus: 'OK'
  })

  const extractCount = (payload) => {
    if (Array.isArray(payload)) return payload.length
    if (payload && Array.isArray(payload?.data)) return payload.data.length
    if (payload && typeof payload === 'object') {
      for (const v of Object.values(payload)) { if (Array.isArray(v)) return v.length }
    }
    return 0
  }

  const refreshCounts = async () => {
    try {
      const [sRes, fRes, cRes, dRes] = await Promise.all([
        api.get('/admin/students'),
        api.get('/admin/faculty'),
        api.get('/admin/courses'),
        api.get('/admin/departments'),
      ])
      setStats(prev => ({
        ...prev,
        totalStudents: extractCount(sRes.data),
        totalFaculty: extractCount(fRes.data),
        totalCourses: extractCount(cRes.data),
        totalDepartments: extractCount(dRes.data),
      }))
    } catch { }
  }

  useEffect(() => { refreshCounts() }, [])

  // State for filters / search
  const [facultyDeptFilter, setFacultyDeptFilter] = useState('')
  const [facultySearch, setFacultySearch] = useState('')
  const [studentDeptFilter, setStudentDeptFilter] = useState('')
  const [studentCourseFilter, setStudentCourseFilter] = useState('')
  const [studentSearch, setStudentSearch] = useState('')

  // Live collections from API
  const [faculty, setFaculty] = useState([])
  const [students, setStudents] = useState([])
  const [loadingList, setLoadingList] = useState(false)
  const [pwdCurrent, setPwdCurrent] = useState('')
  const [pwdNew, setPwdNew] = useState('')
  const [pwdConfirm, setPwdConfirm] = useState('')
  const [pwdSaving, setPwdSaving] = useState(false)

  // Add modals state
  const [showAddFacultyModal, setShowAddFacultyModal] = useState(false)
  const [showAddStudentModal, setShowAddStudentModal] = useState(false)
  const [facultyForm, setFacultyForm] = useState({ name: '', email: '', employee_no: '', department_code: '', password: '', password_confirm: '' })
  const [studentForm, setStudentForm] = useState({ name: '', email: '', student_id: '', department_code: '', course_code: '', password: '', password_confirm: '' })

  // Pagination state
  const [facultyPage, setFacultyPage] = useState(1)
  const [facultyPageSize, setFacultyPageSize] = useState(10)
  const [studentsPage, setStudentsPage] = useState(1)
  const [studentsPageSize, setStudentsPageSize] = useState(10)

  const departments = deptData.map(d => d.code)
  const courses = courseData.map(c => c.code)

  // Field resolvers (robust against varying API shapes)
  const resolveFacultyId = (r) => {
    if (!r || typeof r !== 'object') return ''
    return r.employee_no || r.id || r.user_id || r.uid || Object.values(r).find(v => typeof v === 'number' || (/^\d+$/.test(String(v)))) || ''
  }
  const resolveFacultyName = (r) => {
    if (!r || typeof r !== 'object') return ''
    const byKey = r.name || r.full_name || r.username || r.email
    if (byKey) return byKey
    const nameLikeKey = Object.keys(r).find(k => /name/i.test(k))
    if (nameLikeKey) return r[nameLikeKey]
    const firstStr = Object.values(r).find(v => typeof v === 'string' && v.length)
    return firstStr || ''
  }
  const resolveDept = (r) => {
    if (!r || typeof r !== 'object') return ''
    const byKey = r.department_code || r.dept || r.department
    if (byKey) return byKey
    const deptKey = Object.keys(r).find(k => /dept|department/i.test(k))
    return deptKey ? r[deptKey] : ''
  }
  const resolveStudentId = (r) => {
    if (!r || typeof r !== 'object') return ''
    return r.student_id || r.studentNumber || r.sid || r.id || ''
  }

  // CSV download helper (uses axios instance to include auth headers)
  const downloadCsv = async (path, params, filename) => {
    try {
      const res = await api.get(path, { params, responseType: 'blob' })
      const url = window.URL.createObjectURL(new Blob([res.data]))
      const a = document.createElement('a')
      a.href = url
      a.download = filename
      document.body.appendChild(a)
      a.click()
      a.remove()
      window.URL.revokeObjectURL(url)
    } catch (e) {
      alert(e?.response?.data?.message || 'Failed to download report')
    }
  }

  // Helper to robustly extract array of rows from any response shape
  const extractRows = (payload) => {
    if (Array.isArray(payload)) return payload
    if (payload && Array.isArray(payload.data)) return payload.data
    if (payload && Array.isArray(payload.results)) return payload.results
    if (payload && typeof payload === 'object') {
      for (const v of Object.values(payload)) {
        if (Array.isArray(v) && v.length && typeof v[0] === 'object') return v
      }
    }
    return []
  }

  // Fetch lists from API when filters change
  useEffect(() => {
    const load = async () => {
      if (active !== 'faculty') return
      setLoadingList(true)
      try {
        const { data } = await api.get('/admin/faculty', {
          params: {
            department: facultyDeptFilter || undefined,
            search: facultySearch || undefined,
          }
        })
        const arr = extractRows(data)
        setFaculty(arr)
        // Reset page if current page is out of range
        const maxPage = Math.max(1, Math.ceil((arr?.length || 0) / facultyPageSize))
        if (facultyPage > maxPage) setFacultyPage(maxPage)
      } catch {
        setFaculty([])
      } finally { setLoadingList(false) }
    }
    load()
  }, [active, facultyDeptFilter, facultySearch, facultyPageSize])

  useEffect(() => {
    const load = async () => {
      if (active !== 'students') return
      setLoadingList(true)
      try {
        const { data } = await api.get('/admin/students', {
          params: {
            department: studentDeptFilter || undefined,
            course: studentCourseFilter || undefined,
            search: studentSearch || undefined,
          }
        })
        const arr = extractRows(data)
        setStudents(arr)
        const maxPage = Math.max(1, Math.ceil((arr?.length || 0) / studentsPageSize))
        if (studentsPage > maxPage) setStudentsPage(maxPage)
      } catch {
        setStudents([])
      } finally { setLoadingList(false) }
    }
    load()
  }, [active, studentDeptFilter, studentCourseFilter, studentSearch, studentsPageSize])

  // CRUD handlers
  const addFaculty = () => { setShowAddFacultyModal(true); setFacultyForm({ name: '', email: '', employee_no: '', department_code: facultyDeptFilter || '', password: '', password_confirm: '' }) }

  const submitAddFaculty = async () => {
    if (!facultyForm.name || !facultyForm.email || !facultyForm.employee_no) { alert('Please fill name, email, and employee #'); return }
    if (facultyForm.password) {
      if (facultyForm.password.length < 6) { alert('Password must be at least 6 characters.'); return }
      if (facultyForm.password !== facultyForm.password_confirm) { alert('Passwords do not match.'); return }
    }
    try {
      const payload = {
        name: facultyForm.name,
        email: facultyForm.email,
        employee_no: facultyForm.employee_no,
        department_code: facultyForm.department_code || null,
        ...(facultyForm.password ? { password: facultyForm.password } : {}),
      }
      const resp = await api.post('/admin/faculty', payload)
      const created = resp?.data?.user?.data || resp?.data?.user || resp?.data?.data || resp?.data || null
      const initialPassword = resp?.data?.initial_password || (facultyForm.password || null)
      const localRow = created && (created.id || created.employee_no || created.name) ? created : { ...payload, status: 'Active' }
      setFaculty(prev => [localRow, ...prev.filter(x => (x.id || x.employee_no) !== (localRow.id || localRow.employee_no))])
      const { data } = await api.get('/admin/faculty', { params: { department: facultyDeptFilter || undefined, search: facultySearch || undefined } })
      const arr = extractRows(data)
      if (arr && arr.length) setFaculty(arr)
      refreshCounts()
      setShowAddFacultyModal(false)
      if (created) {
        const loginId = created.email || created.employee_no
        if (initialPassword) {
          alert(`Faculty account created.\n\nLogin: ${loginId}\nPassword: ${initialPassword}`)
        } else {
          alert('Faculty account updated/created.')
        }
      }
    } catch (e) {
      alert(e?.response?.data?.message || 'Failed to add faculty')
    }
  }

  const editFaculty = async (u) => {
    const name = window.prompt('Name', u.name)
    if (!name && name !== '') return
    const email = window.prompt('Email', u.email)
    if (!email && email !== '') return
    try {
      await api.put(`/admin/faculty/${u.id}`, { name, email })
      const { data } = await api.get('/admin/faculty', { params: { department: facultyDeptFilter || undefined, search: facultySearch || undefined } })
      setFaculty(Array.isArray(data?.data) ? data.data : [])
    } catch (e) { alert(e?.response?.data?.message || 'Failed to update faculty') }
  }

  const archiveFaculty = async (u) => {
    if (!window.confirm(`Archive ${u.name}?`)) return
    try {
      await api.post(`/admin/faculty/${u.id}/archive`)
      const { data } = await api.get('/admin/faculty', { params: { department: facultyDeptFilter || undefined, search: facultySearch || undefined } })
      const arr = extractRows(data)
      setFaculty(arr)
      refreshCounts()
      refreshCounts()
    } catch (e) { alert(e?.response?.data?.message || 'Failed to archive') }
  }

  const restoreFaculty = async (u) => {
    try {
      await api.post(`/admin/faculty/${u.id}/restore`)
      const { data } = await api.get('/admin/faculty', { params: { department: facultyDeptFilter || undefined, search: facultySearch || undefined } })
      const arr = extractRows(data)
      setFaculty(arr)
    } catch (e) { alert(e?.response?.data?.message || 'Failed to restore') }
  }

  const addStudent = () => { setShowAddStudentModal(true); setStudentForm({ name: '', email: '', student_id: '', department_code: studentDeptFilter || '', course_code: studentCourseFilter || '', password: '', password_confirm: '' }) }

  const submitAddStudent = async () => {
    if (!studentForm.name || !studentForm.email || !studentForm.student_id) { alert('Please fill name, email, and student #'); return }
    if (studentForm.password) {
      if (studentForm.password.length < 6) { alert('Password must be at least 6 characters.'); return }
      if (studentForm.password !== studentForm.password_confirm) { alert('Passwords do not match.'); return }
    }
    try {
      const payload = {
        name: studentForm.name,
        email: studentForm.email,
        student_id: studentForm.student_id,
        department_code: studentForm.department_code || null,
        course_code: studentForm.course_code || null,
        ...(studentForm.password ? { password: studentForm.password } : {}),
      }
      const resp = await api.post('/admin/students', payload)
      const created = resp?.data?.user?.data || resp?.data?.user || resp?.data?.data || resp?.data || null
      const initialPassword = resp?.data?.initial_password || (studentForm.password || null)
      if (created && (created.id || created.student_id || created.name)) {
        setStudents(prev => [created, ...prev.filter(x => (x.id || x.student_id) !== (created.id || created.student_id))])
      }
      const { data } = await api.get('/admin/students', { params: { department: studentDeptFilter || undefined, course: studentCourseFilter || undefined, search: studentSearch || undefined } })
      const arr = extractRows(data)
      setStudents(arr)
      refreshCounts()
      refreshCounts()
      setShowAddStudentModal(false)
      if (created) {
        const loginId = created.email || created.student_id
        if (initialPassword) {
          alert(`Student account created.\n\nLogin: ${loginId}\nPassword: ${initialPassword}`)
        } else {
          alert('Student account updated/created.')
        }
      }
    } catch (e) {
      alert(e?.response?.data?.message || 'Failed to add student')
    }
  }

  const editStudent = async (u) => {
    const name = window.prompt('Name', u.name)
    if (!name && name !== '') return
    const email = window.prompt('Email', u.email)
    if (!email && email !== '') return
    try {
      await api.put(`/admin/students/${u.id}`, { name, email })
      const { data } = await api.get('/admin/students', { params: { department: studentDeptFilter || undefined, course: studentCourseFilter || undefined, search: studentSearch || undefined } })
      setStudents(Array.isArray(data?.data) ? data.data : [])
    } catch (e) { alert(e?.response?.data?.message || 'Failed to update student') }
  }

  const archiveStudent = async (u) => {
    if (!window.confirm(`Archive ${u.name}?`)) return
    try {
      await api.post(`/admin/students/${u.id}/archive`)
      const { data } = await api.get('/admin/students', { params: { department: studentDeptFilter || undefined, course: studentCourseFilter || undefined, search: studentSearch || undefined } })
      const arr = extractRows(data)
      setStudents(arr)
    } catch (e) { alert(e?.response?.data?.message || 'Failed to archive') }
  }

  const restoreStudent = async (u) => {
    try {
      await api.post(`/admin/students/${u.id}/restore`)
      const { data } = await api.get('/admin/students', { params: { department: studentDeptFilter || undefined, course: studentCourseFilter || undefined, search: studentSearch || undefined } })
      const arr = extractRows(data)
      setStudents(arr)
    } catch (e) { alert(e?.response?.data?.message || 'Failed to restore') }
  }

  // Auto-collapse sidebar on mobile
  useEffect(() => {
    const handleResize = () => {
      const mobile = window.innerWidth < 768
      setIsMobile(mobile)
      if (mobile) {
        setSidebarCollapsed(true)
      }
    }

    handleResize()
    window.addEventListener('resize', handleResize)
    return () => window.removeEventListener('resize', handleResize)
  }, [])

  // Close profile menu when clicking outside
  useEffect(() => {
    const handleClickOutside = (event) => {
      if (showProfileMenu && !event.target.closest('.profile-menu-container')) {
        setShowProfileMenu(false)
      }
    }

    document.addEventListener('mousedown', handleClickOutside)
    return () => document.removeEventListener('mousedown', handleClickOutside)
  }, [showProfileMenu])

  const handleNavigation = (sectionId) => {
    // Only dashboard remains
    setActive(sectionId)
  }

  const handleLogout = () => {
    signOut()
    navigate('/login')
  }

  const current = ADMIN_MENU.find(m => m.id === active) || ADMIN_MENU[0]

  return (
    <div className="h-screen bg-background flex relative">
      {/* Mobile Overlay */}
      {!sidebarCollapsed && isMobile && (
        <div
          className="fixed inset-0 bg-black/50 z-30 md:hidden"
          onClick={() => setSidebarCollapsed(true)}
        />
      )}

      {/* Sidebar */}
      <aside
        className={`${sidebarCollapsed ? 'w-16' : 'w-56 md:w-60'
          } ${isMobile && !sidebarCollapsed ? 'fixed left-0 top-0 z-40' : 'relative'
          } text-white flex flex-col border-r border-white/10 sticky top-0 h-screen transition-all duration-300`}
        style={{
          backgroundImage:
            'linear-gradient(180deg, #1E4DB3 0%, #1C3F9A 35%, #24308F 60%, #2B1E88 100%)',
        }}
      >
        {/* Header with logo */}
        <div className={`${sidebarCollapsed ? 'px-2' : 'px-4'} pt-4 pb-6 grid place-items-center min-h-[90px] md:min-h-[110px] relative`}>
          <img
            src="/images/326319243_1186313552001605_2507428058393999247_n-removebg-preview.png"
            alt="FSUU"
            className={`${sidebarCollapsed
                ? 'w-16 h-16'
                : 'w-56 md:w-64'
              } object-contain transition-all duration-300`}
            style={{ clipPath: 'inset(0 0 26% 0)' }}
          />
        </div>

        {/* Navigation */}
        <nav className={`flex-1 ${sidebarCollapsed ? 'px-1' : 'px-2'} space-y-2`}>
          {ADMIN_MENU.map(item => {
            const isActive = active === item.id
            return (
              <button
                key={item.id}
                onClick={() => handleNavigation(item.id)}
                disabled={loading}
                className={`w-full text-left ${sidebarCollapsed ? 'px-2 py-3' : 'px-3 py-3'} rounded-lg flex items-center ${sidebarCollapsed ? 'justify-center' : 'gap-3'} transition-all duration-200 border-l-2 group relative ${isActive ? 'bg-white/20 border-white shadow-sm' : 'border-transparent hover:bg-white/10 hover:border-white/30'
                  } ${loading ? 'opacity-50' : ''}`}
                title={sidebarCollapsed ? item.label.replace('\n', ' ') : ''}
              >
                <Icon name={item.icon} size={18} className="opacity-90 text-white flex-shrink-0" />

                {!sidebarCollapsed && (
                  <span className="text-[12px] font-semibold tracking-wide whitespace-pre-line text-white">
                    {item.label}
                  </span>
                )}

                {/* Tooltip for collapsed state */}
                {sidebarCollapsed && (
                  <div className="absolute left-full ml-2 px-2 py-1 bg-gray-900 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none whitespace-nowrap z-50">
                    {item.label.replace('\n', ' ')}
                  </div>
                )}
              </button>
            )
          })}
        </nav>

        {/* Logout Button */}
        <div className={`${sidebarCollapsed ? 'px-1' : 'px-2'} pb-6`}>
          <div className={`h-px bg-white/20 ${sidebarCollapsed ? 'mx-2' : 'mx-3'} mb-4`}></div>
          <button
            onClick={handleLogout}
            disabled={loading}
            className={`w-full text-left ${sidebarCollapsed ? 'px-2 py-3' : 'px-3 py-3'} rounded-lg flex items-center ${sidebarCollapsed ? 'justify-center' : 'gap-3'} transition-all duration-200 border-l-2 border-transparent hover:bg-red-500/20 hover:border-red-400 group relative ${loading ? 'opacity-50' : ''
              }`}
            title={sidebarCollapsed ? 'Logout' : ''}
          >
            <Icon name="LogOut" size={18} className="opacity-90 text-red-300 flex-shrink-0" />
            {!sidebarCollapsed && (
              <span className="text-[12px] font-semibold tracking-wide text-red-300">LOGOUT</span>
            )}
            {/* Tooltip for collapsed state */}
            {sidebarCollapsed && (
              <div className="absolute left-full ml-2 px-2 py-1 bg-gray-900 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none whitespace-nowrap z-50">
                Logout
              </div>
            )}
          </button>
        </div>
      </aside>

      {/* Main */}
      <div className={`flex-1 flex flex-col min-w-0 h-screen overflow-y-auto ${isMobile && !sidebarCollapsed ? 'ml-0' : ''
        }`}>
        {/* Topbar */}
        <header className="h-14 bg-white/95 backdrop-blur border-b border-border sticky top-0 z-10 px-3 sm:px-4 md:px-6 flex items-center justify-between">
          <div className="flex items-center gap-1 sm:gap-2 text-primary">
            {/* Hamburger Menu Button */}
            <button
              onClick={() => setSidebarCollapsed(!sidebarCollapsed)}
              className="p-1.5 sm:p-2 hover:bg-gray-100 rounded-md transition-colors mr-1"
              title="Toggle Menu"
            >
              <div className="flex flex-col gap-1 w-4 h-4 sm:w-5 sm:h-5 items-center justify-center">
                <div className="w-3 h-0.5 sm:w-4 sm:h-4 bg-primary rounded-full"></div>
                <div className="w-3 h-0.5 sm:w-4 sm:h-4 bg-primary rounded-full"></div>
                <div className="w-3 h-0.5 sm:w-4 sm:h-4 bg-primary rounded-full"></div>
              </div>
            </button>
            <Icon name={current.icon} size={18} className="sm:text-xl" />
            <span className="font-bold tracking-wide text-xs sm:text-sm">{String(current.label).replace(/\n/g, ' ')}</span>
          </div>

          <div className="relative profile-menu-container">
            <button
              onClick={() => setShowProfileMenu(!showProfileMenu)}
              className="flex items-center gap-1.5 sm:gap-2 hover:bg-gray-50 rounded-lg p-1.5 sm:p-2 transition-colors duration-200"
            >
              <div className="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-red-600 text-white grid place-items-center text-xs font-medium overflow-hidden">
                {profileImage ? (
                  <img
                    src={profileImage}
                    alt="Profile"
                    className="w-full h-full object-cover"
                  />
                ) : (
                  <span>A</span>
                )}
              </div>
              <span className="text-xs font-medium hidden sm:block">ADMINISTRATOR</span>
              <Icon name="ChevronDown" size={14} className={`sm:text-base transition-transform duration-200 ${showProfileMenu ? 'rotate-180' : ''}`} />
            </button>

            {/* Profile Dropdown Menu */}
            {showProfileMenu && (
              <div className="absolute right-0 top-full mt-2 w-48 sm:w-56 bg-white border border-gray-200 rounded-lg shadow-xl z-50 animate-fade-in-up">
                <div className="py-2">
                  <button
                    onClick={() => { setActive('profile'); setShowProfileMenu(false) }}
                    className="w-full flex items-center gap-2 sm:gap-3 px-3 sm:px-4 py-2.5 sm:py-3 text-left hover:bg-gray-50 hover:text-gray-800 transition-colors duration-150 group"
                  >
                    <Icon name="User" size={16} className="sm:text-lg text-gray-600 group-hover:text-gray-800" />
                    <span className="text-xs sm:text-sm font-medium text-gray-700 group-hover:text-gray-800">My Profile</span>
                  </button>
                  <div className="border-t border-gray-200 my-1"></div>
                  <button
                    onClick={handleLogout}
                    className="w-full flex items-center gap-2 sm:gap-3 px-3 sm:px-4 py-2.5 sm:py-3 text-left hover:bg-red-50 hover:text-red-700 transition-colors duration-150 group"
                  >
                    <Icon name="LogOut" size={16} className="sm:text-lg text-gray-600 group-hover:text-red-600" />
                    <span className="text-xs sm:text-sm font-medium text-gray-700 group-hover:text-red-700">Logout</span>
                  </button>
                </div>
              </div>
            )}
          </div>
        </header>

        {/* Content */}
        <main className="p-2 sm:p-4 md:p-6 relative">
          {/* DASHBOARD SECTION */}
          {active === 'dashboard' && (
            <div className="space-y-4 sm:space-y-6">
              <div className="bg-white border border-border rounded-lg p-4 sm:p-6">
                <div className="flex items-center gap-4 mb-6">
                  <div className="w-12 h-12 sm:w-16 sm:h-16 bg-red-600 text-white grid place-items-center rounded-full">
                    <Icon name="Shield" size={24} className="sm:text-2xl" />
                  </div>
                  <div>
                    <h1 className="text-lg sm:text-xl font-bold text-gray-900">Welcome to Admin Portal</h1>
                    <p className="text-sm text-gray-600">System overview</p>
                  </div>
                </div>
                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                  <StatCard icon="Users" label="Total Students" value={stats.totalStudents} color="blue" />
                  <StatCard icon="GraduationCap" label="Total Faculty" value={stats.totalFaculty} color="green" />
                  <StatCard icon="BookOpen" label="Total Courses" value={stats.totalCourses} color="yellow" />
                  <StatCard icon="Building" label="Departments" value={stats.totalDepartments} color="purple" />
                </div>
                <div className="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                  <MiniCard icon="Calendar" label="Academic Year" value={stats.activeAcademicYear} />
                  <MiniCard icon="AlertCircle" label="Pending Enrollments" value={stats.pendingEnrollments} color="orange" />
                  <MiniCard icon="CheckCircle" label="System Status" value={stats.systemStatus} color="emerald" />
                </div>
              </div>
            </div>
          )}

          {/* FACULTY SECTION */}
          {active === 'faculty' && (
            <SectionWrapper title="Faculty Management" icon="GraduationCap" subtitle="Add, edit, archive, filter & search faculty members">
              <div className="flex flex-col md:flex-row gap-3 md:items-end mb-4">
                <div className="flex-1 grid grid-cols-1 sm:grid-cols-3 gap-3">
                  <div className="flex flex-col gap-1">
                    <label className="text-xs font-medium text-gray-600">Department</label>
                    <select value={facultyDeptFilter} onChange={e => setFacultyDeptFilter(e.target.value)} className="h-9 border border-gray-300 rounded px-2 text-sm">
                      <option value="">All</option>
                      {departments.map(d => <option key={d} value={d}>{d}</option>)}
                    </select>
                  </div>
                  <div className="flex flex-col gap-1 sm:col-span-2">
                    <label className="text-xs font-medium text-gray-600">Search</label>
                    <input value={facultySearch} onChange={e => setFacultySearch(e.target.value)} placeholder="Search faculty" className="h-9 border border-gray-300 rounded px-2 text-sm" />
                  </div>
                </div>
                <button onClick={addFaculty} className="h-9 px-4 bg-blue-600 text-white rounded text-sm whitespace-nowrap">Add Faculty</button>
              </div>
              <div className="border border-gray-200 rounded-lg overflow-hidden">
                <table className="w-full text-sm">
                  <thead className="bg-gray-50">
                    <tr>
                      {['ID', 'Name', 'Department', 'Status', 'Actions'].map(col => <th key={col} className="text-left px-3 py-2 font-medium text-gray-600 text-xs">{col}</th>)}
                    </tr>
                  </thead>
                  <tbody>
                    {loadingList && (
                      <tr><td colSpan={5} className="text-center text-gray-400 text-xs py-6">Loading...</td></tr>
                    )}
                    {!loadingList && faculty.length === 0 && (
                      <tr><td colSpan={5} className="text-center text-gray-400 text-xs py-6">No faculty records</td></tr>
                    )}
                    {!loadingList && faculty.slice((facultyPage - 1) * facultyPageSize, (facultyPage - 1) * facultyPageSize + facultyPageSize).map((f, i) => (
                      <tr key={(f && (f.id || f.email || f.employee_no)) ?? `fac-${(facultyPage - 1) * facultyPageSize + i}`} className="border-t border-gray-100 hover:bg-gray-50">
                        <td className="px-3 py-2 text-xs font-medium">{resolveFacultyId(f) || '-'}</td>
                        <td className="px-3 py-2 text-xs">{resolveFacultyName(f) || '-'}</td>
                        <td className="px-3 py-2 text-xs">{resolveDept(f) || '-'}</td>
                        <td className="px-3 py-2 text-xs">
                          <StatusBadge status={f.status || 'Active'} />
                          {String(f.status || 'Active').toLowerCase() !== 'active' && (
                            <span className="ml-2 text-[10px] text-gray-500" title="Login disabled">🔒</span>
                          )}
                        </td>
                        <td className="px-3 py-2 text-xs flex gap-2">
                          <button onClick={() => editFaculty(f)} className="text-blue-600 hover:underline">Edit</button>
                          {String(f.status).toLowerCase() === 'inactive' ? (
                            <button onClick={() => restoreFaculty(f)} className="text-green-600 hover:underline">Restore</button>
                          ) : (
                            <button onClick={() => archiveFaculty(f)} className="text-yellow-600 hover:underline">Archive</button>
                          )}
                        </td>
                      </tr>
                    ))}
                  </tbody>
                </table>
              </div>
              {showAddFacultyModal && (
                <Modal onClose={() => setShowAddFacultyModal(false)} title="Add Faculty">
                  <div className="space-y-3">
                    <TextField label="Name" value={facultyForm.name} onChange={v => setFacultyForm(f => ({ ...f, name: v }))} />
                    <TextField label="Email" value={facultyForm.email} onChange={v => setFacultyForm(f => ({ ...f, email: v }))} />
                    <TextField label="Employee #" value={facultyForm.employee_no} onChange={v => setFacultyForm(f => ({ ...f, employee_no: v }))} />
                    <TextField label="Department Code" value={facultyForm.department_code} onChange={v => setFacultyForm(f => ({ ...f, department_code: v }))} placeholder="e.g., CCS" />
                    <div className="grid grid-cols-1 sm:grid-cols-2 gap-3">
                      <TextField type="password" label="Initial Password (optional)" value={facultyForm.password} onChange={v => setFacultyForm(f => ({ ...f, password: v }))} />
                      <TextField type="password" label="Confirm Password" value={facultyForm.password_confirm} onChange={v => setFacultyForm(f => ({ ...f, password_confirm: v }))} />
                    </div>
                    <div className="flex justify-end gap-2 pt-2">
                      <button onClick={() => setShowAddFacultyModal(false)} className="h-9 px-4 bg-gray-600 text-white rounded text-sm">Cancel</button>
                      <button onClick={submitAddFaculty} className="h-9 px-4 bg-blue-600 text-white rounded text-sm">Create</button>
                    </div>
                  </div>
                </Modal>
              )}
            </SectionWrapper>
          )}

          {/* STUDENTS SECTION */}
          {active === 'students' && (
            <SectionWrapper title="Student Management" icon="Users" subtitle="Add, edit, archive, filter & search students">
              <div className="flex flex-col md:flex-row gap-3 md:items-end mb-4">
                <div className="flex-1 grid grid-cols-1 sm:grid-cols-4 gap-3">
                  <div className="flex flex-col gap-1">
                    <label className="text-xs font-medium text-gray-600">Department</label>
                    <select value={studentDeptFilter} onChange={e => setStudentDeptFilter(e.target.value)} className="h-9 border border-gray-300 rounded px-2 text-sm">
                      <option value="">All</option>
                      {departments.map(d => <option key={d} value={d}>{d}</option>)}
                    </select>
                  </div>
                  <div className="flex flex-col gap-1">
                    <label className="text-xs font-medium text-gray-600">Course</label>
                    <select value={studentCourseFilter} onChange={e => setStudentCourseFilter(e.target.value)} className="h-9 border border-gray-300 rounded px-2 text-sm">
                      <option value="">All</option>
                      {courses.map(c => <option key={c} value={c}>{c}</option>)}
                    </select>
                  </div>
                  <div className="flex flex-col gap-1 sm:col-span-2">
                    <label className="text-xs font-medium text-gray-600">Search</label>
                    <input value={studentSearch} onChange={e => setStudentSearch(e.target.value)} placeholder="Search student" className="h-9 border border-gray-300 rounded px-2 text-sm" />
                  </div>
                </div>
                <button onClick={addStudent} className="h-9 px-4 bg-blue-600 text-white rounded text-sm whitespace-nowrap">Add Student</button>
              </div>
              <div className="border border-gray-200 rounded-lg overflow-hidden">
                <table className="w-full text-sm">
                  <thead className="bg-gray-50">
                    <tr>
                      {['Student #', 'Name', 'Course', 'Dept', 'Status', 'Actions'].map(col => <th key={col} className="text-left px-3 py-2 font-medium text-gray-600 text-xs">{col}</th>)}
                    </tr>
                  </thead>
                  <tbody>
                    {loadingList && (
                      <tr><td colSpan={6} className="text-center text-gray-400 text-xs py-6">Loading...</td></tr>
                    )}
                    {!loadingList && students.length === 0 && (
                      <tr><td colSpan={6} className="text-center text-gray-400 text-xs py-6">No student records</td></tr>
                    )}
                    {!loadingList && students.slice((studentsPage - 1) * studentsPageSize, (studentsPage - 1) * studentsPageSize + studentsPageSize).map((s, i) => (
                      <tr key={(s && (s.id || s.student_id || s.email)) ?? `stu-${(studentsPage - 1) * studentsPageSize + i}`} className="border-t border-gray-100 hover:bg-gray-50">
                        <td className="px-3 py-2 text-xs font-medium">{resolveStudentId(s) || '-'}</td>
                        <td className="px-3 py-2 text-xs">{resolveFacultyName(s) || '-'}</td>
                        <td className="px-3 py-2 text-xs">{s?.course_code || s?.course || '-'}</td>
                        <td className="px-3 py-2 text-xs">{resolveDept(s) || '-'}</td>
                        <td className="px-3 py-2 text-xs">
                          <StatusBadge status={s.status || 'Active'} />
                          {String(s.status || 'Active').toLowerCase() !== 'active' && (
                            <span className="ml-2 text-[10px] text-gray-500" title="Login disabled">🔒</span>
                          )}
                        </td>
                        <td className="px-3 py-2 text-xs flex gap-2">
                          <button onClick={() => editStudent(s)} className="text-blue-600 hover:underline">Edit</button>
                          {String(s.status).toLowerCase() === 'inactive' ? (
                            <button onClick={() => restoreStudent(s)} className="text-green-600 hover:underline">Restore</button>
                          ) : (
                            <button onClick={() => archiveStudent(s)} className="text-yellow-600 hover:underline">Archive</button>
                          )}
                        </td>
                      </tr>
                    ))}
                  </tbody>
                </table>
              </div>
              {showAddStudentModal && (
                <Modal onClose={() => setShowAddStudentModal(false)} title="Add Student">
                  <div className="space-y-3">
                    <TextField label="Name" value={studentForm.name} onChange={v => setStudentForm(f => ({ ...f, name: v }))} />
                    <div className="grid grid-cols-1 sm:grid-cols-2 gap-3">
                      <TextField label="Email" value={studentForm.email} onChange={v => setStudentForm(f => ({ ...f, email: v }))} />
                      <TextField label="Student #" value={studentForm.student_id} onChange={v => setStudentForm(f => ({ ...f, student_id: v }))} />
                    </div>
                    <div className="grid grid-cols-1 sm:grid-cols-2 gap-3">
                      <TextField label="Department Code" value={studentForm.department_code} onChange={v => setStudentForm(f => ({ ...f, department_code: v }))} placeholder="e.g., CCS" />
                      <TextField label="Course Code" value={studentForm.course_code} onChange={v => setStudentForm(f => ({ ...f, course_code: v }))} placeholder="e.g., BSIT" />
                    </div>
                    <div className="grid grid-cols-1 sm:grid-cols-2 gap-3">
                      <TextField type="password" label="Initial Password (optional)" value={studentForm.password} onChange={v => setStudentForm(f => ({ ...f, password: v }))} />
                      <TextField type="password" label="Confirm Password" value={studentForm.password_confirm} onChange={v => setStudentForm(f => ({ ...f, password_confirm: v }))} />
                    </div>
                    <div className="flex justify-end gap-2 pt-2">
                      <button onClick={() => setShowAddStudentModal(false)} className="h-9 px-4 bg-gray-600 text-white rounded text-sm">Cancel</button>
                      <button onClick={submitAddStudent} className="h-9 px-4 bg-blue-600 text-white rounded text-sm">Create</button>
                    </div>
                  </div>
                </Modal>
              )}
            </SectionWrapper>
          )}

          {/* REPORTS SECTION */}
          {active === 'reports' && (
            <SectionWrapper title="Reports" icon="FileText" subtitle="Generate filtered reports for students & faculty">
              <div className="grid md:grid-cols-2 gap-6">
                <div className="border border-gray-200 rounded-lg p-4">
                  <h3 className="font-semibold text-sm mb-3 flex items-center gap-2"><Icon name="Users" size={16} /> Student Reports</h3>
                  <div className="flex flex-col gap-2 mb-3">
                    <select className="h-9 border border-gray-300 rounded px-2 text-sm">
                      <option value="">Course (All)</option>
                      {courses.map(c => <option key={c}>{c}</option>)}
                    </select>
                    <select className="h-9 border border-gray-300 rounded px-2 text-sm">
                      <option value="">Department (All)</option>
                      {departments.map(d => <option key={d}>{d}</option>)}
                    </select>
                  </div>
                  <button
                    onClick={() => downloadCsv('/reports/students.csv', { department: studentDeptFilter || undefined, course: studentCourseFilter || undefined, search: studentSearch || undefined }, 'students_report.csv')}
                    className="h-9 px-4 bg-blue-600 text-white rounded text-sm"
                  >
                    Download CSV
                  </button>
                </div>
                <div className="border border-gray-200 rounded-lg p-4">
                  <h3 className="font-semibold text-sm mb-3 flex items-center gap-2"><Icon name="GraduationCap" size={16} /> Faculty Reports</h3>
                  <div className="flex flex-col gap-2 mb-3">
                    <select className="h-9 border border-gray-300 rounded px-2 text-sm">
                      <option value="">Department (All)</option>
                      {departments.map(d => <option key={d}>{d}</option>)}
                    </select>
                  </div>
                  <button
                    onClick={() => downloadCsv('/reports/faculty.csv', { department: facultyDeptFilter || undefined, search: facultySearch || undefined }, 'faculty_report.csv')}
                    className="h-9 px-4 bg-blue-600 text-white rounded text-sm"
                  >
                    Download CSV
                  </button>
                </div>
              </div>
              {/* Faculty Pagination Controls */}
              {!loadingList && faculty.length > 0 && (
                <div className="flex items-center justify-between mt-3 text-xs text-gray-600">
                  <div>
                    Showing {(facultyPage - 1) * facultyPageSize + 1}-{Math.min(faculty.length, facultyPage * facultyPageSize)} of {faculty.length}
                  </div>
                  <div className="flex items-center gap-2">
                    <button disabled={facultyPage === 1} onClick={() => setFacultyPage(p => Math.max(1, p - 1))} className="px-2 py-1 border rounded disabled:opacity-50">Prev</button>
                    <span>Page {facultyPage}</span>
                    <button disabled={facultyPage * facultyPageSize >= faculty.length} onClick={() => setFacultyPage(p => p + 1)} className="px-2 py-1 border rounded disabled:opacity-50">Next</button>
                    <select value={facultyPageSize} onChange={e => { setFacultyPageSize(Number(e.target.value)); setFacultyPage(1); }} className="border rounded px-1 py-1">
                      {[5, 10, 20, 50].map(n => <option key={n} value={n}>{n}/page</option>)}
                    </select>
                  </div>
                </div>
              )}
              {/* Students Pagination Controls */}
              {!loadingList && students.length > 0 && (
                <div className="flex items-center justify-between mt-3 text-xs text-gray-600">
                  <div>
                    Showing {(studentsPage - 1) * studentsPageSize + 1}-{Math.min(students.length, studentsPage * studentsPageSize)} of {students.length}
                  </div>
                  <div className="flex items-center gap-2">
                    <button disabled={studentsPage === 1} onClick={() => setStudentsPage(p => Math.max(1, p - 1))} className="px-2 py-1 border rounded disabled:opacity-opacity-50">Prev</button>
                    <span>Page {studentsPage}</span>
                    <button disabled={studentsPage * studentsPageSize >= students.length} onClick={() => setStudentsPage(p => p + 1)} className="px-2 py-1 border rounded disabled:opacity-50">Next</button>
                    <select value={studentsPageSize} onChange={e => { setStudentsPageSize(Number(e.target.value)); setStudentsPage(1); }} className="border rounded px-1 py-1">
                      {[5, 10, 20, 50].map(n => <option key={n} value={n}>{n}/page</option>)}
                    </select>
                  </div>
                </div>
              )}
            </SectionWrapper>
          )}

          {/* SYSTEM SETTINGS SECTION */}
          {active === 'settings' && (
            <SectionWrapper title="System Settings" icon="Settings" subtitle="Manage courses, departments & academic years">
              <SettingsTabs />
            </SectionWrapper>
          )}

          {/* PROFILE SECTION */}
          {active === 'profile' && (
            <div className="bg-white border border-border rounded-lg p-4 sm:p-6">
              <h2 className="text-lg font-semibold text-gray-900 mb-4">My Profile</h2>
              <div className="space-y-4 max-w-sm">
                {/* Profile Picture Section */}
                <div className="flex items-center gap-4 mb-6">
                  <div className="relative">
                    <div className="w-20 h-20 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden">
                      {(previewUrl || profileImage) ? (
                        <img
                          src={previewUrl || profileImage}
                          alt="Profile"
                          className="w-full h-full object-cover"
                        />
                      ) : (
                        <div className="w-full h-full bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center text-white text-xl font-bold">
                          A
                        </div>
                      )}
                    </div>
                    <input
                      ref={fileInputRef}
                      type="file"
                      accept="image/*"
                      onChange={async (e) => {
                        const file = e.target.files?.[0]
                        if (!file) return
                        // Instant preview
                        const tempUrl = URL.createObjectURL(file)
                        setPreviewUrl(tempUrl)
                        try {
                          const form = new FormData()
                          form.append('avatar', file)
                          const { data } = await api.post('/profile/me/avatar', form)
                          if (data?.avatar_url) {
                            setProfileImage(data.avatar_url)
                            try { localStorage.setItem('adminProfileImage', data.avatar_url) } catch { }
                          }
                        } catch { }
                        finally {
                          // Revoke object URL after a short delay to ensure img swaps
                          setTimeout(() => { try { URL.revokeObjectURL(tempUrl) } catch { } }, 1000)
                          setPreviewUrl(null)
                        }
                      }}
                      className="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                    />
                  </div>
                  <div>
                    <h3 className="text-sm font-medium text-gray-900">Profile Picture</h3>
                    <p className="text-xs text-gray-500">Click to upload a new photo</p>
                    <button
                      onClick={() => fileInputRef.current?.click()}
                      className="mt-1 text-xs text-blue-600 hover:text-blue-700"
                    >
                      Choose File
                    </button>
                  </div>
                </div>

                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-1">Name</label>
                  <input
                    value="SYSTEM ADMINISTRATOR"
                    disabled
                    className="w-full h-9 px-3 border rounded text-xs bg-gray-50"
                  />
                </div>
                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-1">Admin ID</label>
                  <input
                    value="admin"
                    disabled
                    className="w-full h-9 px-3 border rounded text-xs bg-gray-50"
                  />
                </div>
                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-1">Role</label>
                  <input
                    value="Administrator"
                    disabled
                    className="w-full h-9 px-3 border rounded text-xs bg-gray-50"
                  />
                </div>
                <div className="flex gap-2 pt-4">
                  <button
                    onClick={() => {
                      alert('Profile picture saved successfully!');
                    }}
                    className="h-9 px-4 bg-green-600 text-white rounded text-xs hover:bg-green-700 transition-colors"
                  >
                    Save Changes
                  </button>
                  <button
                    onClick={() => setActive('change-password')}
                    className="h-9 px-4 bg-blue-600 text-white rounded text-xs hover:bg-blue-700 transition-colors"
                  >
                    Change Password
                  </button>
                </div>
              </div>
            </div>
          )}

          {/* CHANGE PASSWORD SECTION */}
          {active === 'change-password' && (
            <div className="bg-white border border-border rounded-lg p-4 sm:p-6">
              <h2 className="text-lg font-semibold text-gray-900 mb-4">Change Password</h2>
              <div className="space-y-4 max-w-sm">
                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                  <input
                    type="password"
                    placeholder="Enter current password"
                    className="w-full h-9 px-3 border rounded text-xs"
                    value={pwdCurrent}
                    onChange={e => setPwdCurrent(e.target.value)}
                  />
                </div>
                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                  <input
                    type="password"
                    placeholder="Enter new password"
                    className="w-full h-9 px-3 border rounded text-xs"
                    value={pwdNew}
                    onChange={e => setPwdNew(e.target.value)}
                  />
                </div>
                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                  <input
                    type="password"
                    placeholder="Confirm new password"
                    className="w-full h-9 px-3 border rounded text-xs"
                    value={pwdConfirm}
                    onChange={e => setPwdConfirm(e.target.value)}
                  />
                </div>
                <div className="flex gap-2 pt-4">
                  <button
                    onClick={() => setActive('profile')}
                    className="h-9 px-4 bg-gray-600 text-white rounded text-xs hover:bg-gray-700 transition-colors"
                  >
                    Cancel
                  </button>
                  <button
                    onClick={async () => {
                      try {
                        setPwdSaving(true)
                        await api.post('/profile/change-password', { current_password: pwdCurrent, password: pwdNew, password_confirmation: pwdConfirm })
                        alert('Password changed successfully!')
                        setPwdCurrent(''); setPwdNew(''); setPwdConfirm('')
                        setActive('profile')
                      } catch (e) {
                        alert(e?.response?.data?.message || 'Failed to change password')
                      } finally {
                        setPwdSaving(false)
                      }
                    }}
                    disabled={pwdSaving}
                    className="h-9 px-4 bg-blue-600 text-white rounded text-xs hover:bg-blue-700 transition-colors disabled:opacity-60"
                  >
                    {pwdSaving ? 'Updating…' : 'Update Password'}
                  </button>
                </div>
              </div>
            </div>
          )}
        </main>
      </div>
    </div>
  )
}

// SMALL COMPONENTS --------------------------------------------------
function StatCard({ icon, label, value, color }) {
  const colors = {
    blue: 'bg-blue-50 border-blue-200 text-blue-600 text-blue-900',
    green: 'bg-green-50 border-green-200 text-green-600 text-green-900',
    yellow: 'bg-yellow-50 border-yellow-200 text-yellow-600 text-yellow-900',
    purple: 'bg-purple-50 border-purple-200 text-purple-600 text-purple-900'
  }
  const c = colors[color] || colors.blue
  const [bg, border, text] = c.split(' ')
  return (
    <div className={`${bg} border ${border} rounded-lg p-4`}>
      <div className="flex items-center gap-3">
        <Icon name={icon} size={20} className={text} />
        <div>
          <p className={`text-2xl font-bold ${text.replace('600', '900')}`}>{value}</p>
          <p className={`text-xs ${text}`}>{label}</p>
        </div>
      </div>
    </div>
  )
}

function MiniCard({ icon, label, value, color }) {
  const palette = {
    gray: ['bg-gray-50', 'border-gray-200', 'text-gray-600', 'text-gray-900'],
    orange: ['bg-orange-50', 'border-orange-200', 'text-orange-600', 'text-orange-900'],
    emerald: ['bg-emerald-50', 'border-emerald-200', 'text-emerald-600', 'text-emerald-900']
  }
  const [bg, border, text, textBold] = palette[color] || palette.gray
  return (
    <div className={`${bg} border ${border} rounded-lg p-4`}>
      <div className="flex items-center gap-3">
        <Icon name={icon} size={20} className={text} />
        <div>
          <p className={`text-lg font-bold ${textBold}`}>{value}</p>
          <p className={`text-xs ${text}`}>{label}</p>
        </div>
      </div>
    </div>
  )
}

function SectionWrapper({ title, subtitle, icon, children }) {
  return (
    <div className="space-y-4 sm:space-y-6">
      <div className="bg-white border border-border rounded-lg p-4 sm:p-6">
        <div className="flex items-start sm:items-center gap-4 mb-6 flex-col sm:flex-row">
          <div className="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-blue-600 to-indigo-600 text-white grid place-items-center rounded-full">
            <Icon name={icon} size={26} />
          </div>
          <div>
            <h1 className="text-lg sm:text-xl font-bold text-gray-900 leading-tight">{title}</h1>
            {subtitle && <p className="text-xs sm:text-sm text-gray-600 mt-1">{subtitle}</p>}
          </div>
        </div>
        {children}
      </div>
    </div>
  )
}

function PlaceholderTable({ columns, rows, empty }) {
  return (
    <div className="border border-gray-200 rounded-lg overflow-hidden">
      <table className="w-full text-sm">
        <thead className="bg-gray-50">
          <tr>
            {columns.map(col => <th key={col} className="text-left px-3 py-2 font-medium text-gray-600 text-xs">{col}</th>)}
          </tr>
        </thead>
        <tbody>
          {rows === 0 && (
            <tr>
              <td colSpan={columns.length} className="text-center text-gray-400 text-xs py-6">{empty}</td>
            </tr>
          )}
        </tbody>
      </table>
    </div>
  )
}

function SettingsTabs() {
  const [tab, setTab] = React.useState('courses')
  const tabs = [
    { id: 'courses', label: 'Courses' },
    { id: 'departments', label: 'Departments' },
    { id: 'academic', label: 'Academic Year' }
  ]
  return (
    <div>
      <div className="flex gap-2 mb-4 flex-wrap">
        {tabs.map(t => (
          <button key={t.id} onClick={() => setTab(t.id)} className={`h-9 px-4 rounded text-xs font-medium border ${tab === t.id ? 'bg-blue-600 text-white border-blue-600' : 'bg-white text-gray-600 hover:bg-gray-50 border-gray-300'}`}>{t.label}</button>
        ))}
      </div>
      {tab === 'courses' && <SettingsCourses />}
      {tab === 'departments' && <SettingsDepartments />}
      {tab === 'academic' && <SettingsAcademicYears />}
    </div>
  )
}

function SettingsBlock({ title, addLabel, columns, empty }) {
  return (
    <div className="border border-gray-200 rounded-lg p-4 mb-6 last:mb-0">
      <div className="flex justify-between items-center mb-3">
        <h3 className="font-semibold text-sm">{title}</h3>
        <button className="h-8 px-3 bg-blue-600 text-white rounded text-xs">{addLabel}</button>
      </div>
      <PlaceholderTable columns={columns} rows={0} empty={empty} />
    </div>
  )
}

function SettingsCourses() {
  const [list, setList] = React.useState([])
  React.useEffect(() => { (async () => { try { const { data } = await api.get('/admin/courses'); setList(Array.isArray(data) ? data : []) } catch { } })() }, [])
  const add = async () => {
    const code = window.prompt('Course code (e.g., BSIT)')
    if (!code) return
    const name = window.prompt('Course name')
    if (!name) return
    const dept = window.prompt('Department code (optional)')
    try {
      const resp = await api.post('/admin/courses', { code, name, department_code: dept || undefined })
      const newItem = resp?.data?.data || resp?.data || { code, name, department_code: dept, status: 'Active' }
      setList(prev => [newItem, ...prev.filter(c => c.code !== code)])
    } catch (e) { alert(e?.response?.data?.message || 'Failed to add course') }
  }
  return (
    <div className="border border-gray-200 rounded-lg p-4 mb-6">
      <div className="flex justify-between items-center mb-3">
        <h3 className="font-semibold text-sm">Courses</h3>
        <button onClick={add} className="h-8 px-3 bg-blue-600 text-white rounded text-xs">Add Course</button>
      </div>
      <div className="overflow-auto border border-gray-200 rounded">
        <table className="w-full text-sm">
          <thead className="bg-gray-50">
            <tr>{['Code', 'Name', 'Department', 'Status', 'Actions'].map(h => <th key={h} className="text-left px-3 py-2 font-medium text-gray-600 text-xs">{h}</th>)}</tr>
          </thead>
          <tbody>
            {list.map(c => (
              <tr key={c.id || c.code} className="border-t border-gray-100 hover:bg-gray-50">
                <td className="px-3 py-2 text-xs font-medium">{c.code}</td>
                <td className="px-3 py-2 text-xs">{c.name}</td>
                <td className="px-3 py-2 text-xs">{c.department_code || '-'}</td>
                <td className="px-3 py-2 text-xs"><StatusBadge status={c.status || 'Active'} /></td>
                <td className="px-3 py-2 text-xs">-</td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  )
}

function SettingsDepartments() {
  const [list, setList] = React.useState([])
  React.useEffect(() => { (async () => { try { const { data } = await api.get('/admin/departments'); setList(Array.isArray(data) ? data : []) } catch { } })() }, [])
  const add = async () => {
    const code = window.prompt('Department code (e.g., CCS)')
    if (!code) return
    const name = window.prompt('Department name')
    if (!name) return
    try {
      const resp = await api.post('/admin/departments', { code, name })
      const newItem = resp?.data?.data || resp?.data || { code, name, status: 'Active' }
      setList(prev => [newItem, ...prev.filter(d => d.code !== code)])
    } catch (e) { alert(e?.response?.data?.message || 'Failed to add department') }
  }
  return (
    <div className="border border-gray-200 rounded-lg p-4 mb-6">
      <div className="flex justify-between items-center mb-3">
        <h3 className="font-semibold text-sm">Departments</h3>
        <button onClick={add} className="h-8 px-3 bg-blue-600 text-white rounded text-xs">Add Department</button>
      </div>
      <div className="overflow-auto border border-gray-200 rounded">
        <table className="w-full text-sm">
          <thead className="bg-gray-50">
            <tr>{['Code', 'Name', 'Status', 'Actions'].map(h => <th key={h} className="text-left px-3 py-2 font-medium text-gray-600 text-xs">{h}</th>)}</tr>
          </thead>
          <tbody>
            {list.map(d => (
              <tr key={d.id || d.code} className="border-t border-gray-100 hover:bg-gray-50">
                <td className="px-3 py-2 text-xs font-medium">{d.code}</td>
                <td className="px-3 py-2 text-xs">{d.name}</td>
                <td className="px-3 py-2 text-xs"><StatusBadge status={d.status || 'Active'} /></td>
                <td className="px-3 py-2 text-xs">-</td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  )
}

function SettingsAcademicYears() {
  const [list, setList] = React.useState([])
  React.useEffect(() => { (async () => { try { const { data } = await api.get('/admin/academic-years'); setList(Array.isArray(data) ? data : []) } catch { } })() }, [])
  const add = async () => {
    const year = window.prompt('Academic Year (e.g., 2025-2026)')
    if (!year) return
    try {
      const resp = await api.post('/admin/academic-years', { year })
      const newItem = resp?.data?.data || resp?.data || { year, status: 'Active' }
      setList(prev => [newItem, ...prev.filter(y => y.year !== year)])
    } catch (e) { alert(e?.response?.data?.message || 'Failed to add academic year') }
  }
  return (
    <div className="border border-gray-200 rounded-lg p-4 mb-6">
      <div className="flex justify-between items-center mb-3">
        <h3 className="font-semibold text-sm">Academic Years</h3>
        <button onClick={add} className="h-8 px-3 bg-blue-600 text-white rounded text-xs">Add Academic Year</button>
      </div>
      <div className="overflow-auto border border-gray-200 rounded">
        <table className="w-full text-sm">
          <thead className="bg-gray-50">
            <tr>{['Year', 'Status', 'Actions'].map(h => <th key={h} className="text-left px-3 py-2 font-medium text-gray-600 text-xs">{h}</th>)}</tr>
          </thead>
          <tbody>
            {list.map(y => (
              <tr key={y.id || y.year} className="border-t border-gray-100 hover:bg-gray-50">
                <td className="px-3 py-2 text-xs font-medium">{y.year}</td>
                <td className="px-3 py-2 text-xs"><StatusBadge status={y.status || 'Active'} /></td>
                <td className="px-3 py-2 text-xs">-</td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  )
}

function StatusBadge({ status }) {
  const active = status?.toLowerCase() === 'active'
  return (
    <span className={`px-2 py-0.5 rounded-full text-[10px] font-semibold tracking-wide ${active ? 'bg-green-100 text-green-700' : 'bg-gray-200 text-gray-600'}`}>{status || '--'}</span>
  )
}

function Modal({ title, onClose, children }) {
  return (
    <div className="fixed inset-0 z-50 flex items-center justify-center">
      <div className="absolute inset-0 bg-black/40" onClick={onClose}></div>
      <div className="relative bg-white w-[95%] max-w-lg rounded-lg shadow-xl border border-gray-200 p-4 sm:p-6">
        <div className="flex justify-between items-center mb-3">
          <h3 className="text-sm font-semibold">{title}</h3>
          <button onClick={onClose} className="text-gray-500 hover:text-gray-700">✕</button>
        </div>
        {children}
      </div>
    </div>
  )
}

function TextField({ label, value, onChange, type = 'text', placeholder }) {
  return (
    <div>
      {label && <label className="block text-xs font-medium text-gray-600 mb-1">{label}</label>}
      <input
        type={type}
        value={value}
        placeholder={placeholder}
        onChange={e => onChange(e.target.value)}
        className="w-full h-9 border border-gray-300 rounded px-2 text-sm"
      />
    </div>
  )
}