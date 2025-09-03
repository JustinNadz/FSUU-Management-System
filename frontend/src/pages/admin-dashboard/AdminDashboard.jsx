import React, { useState, useEffect, useMemo } from 'react'
import { useNavigate } from 'react-router-dom'
import Icon from '../../components/AppIcon'
import { signOut } from '../../utils/auth'
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

  // All static sample data removed. Real data should be fetched from API later.
  const stats = useMemo(() => ({
    totalStudents: studentData.length,
    totalFaculty: facultyData.length,
    totalCourses: courseData.length,
    totalDepartments: deptData.length,
    activeAcademicYear: '2025-2026',
    pendingEnrollments: 0,
    systemStatus: 'OK'
  }), [])

  // State for filters / search
  const [facultyDeptFilter, setFacultyDeptFilter] = useState('')
  const [facultySearch, setFacultySearch] = useState('')
  const [studentDeptFilter, setStudentDeptFilter] = useState('')
  const [studentCourseFilter, setStudentCourseFilter] = useState('')
  const [studentSearch, setStudentSearch] = useState('')

  const departments = deptData.map(d => d.code)
  const courses = courseData.map(c => c.code)

  const filteredFaculty = facultyData.filter(f => {
    return (
      (!facultyDeptFilter || f.dept === facultyDeptFilter) &&
      (!facultySearch || f.name.toLowerCase().includes(facultySearch.toLowerCase()) || f.id.toLowerCase().includes(facultySearch.toLowerCase()))
    )
  })

  const filteredStudents = studentData.filter(s => {
    return (
      (!studentDeptFilter || s.dept === studentDeptFilter) &&
      (!studentCourseFilter || s.course === studentCourseFilter) &&
      (!studentSearch || s.name.toLowerCase().includes(studentSearch.toLowerCase()) || s.studentNumber.includes(studentSearch))
    )
  })

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
        className={`${
          sidebarCollapsed ? 'w-16' : 'w-56 md:w-60'
        } ${
          isMobile && !sidebarCollapsed ? 'fixed left-0 top-0 z-40' : 'relative'
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
            className={`${
              sidebarCollapsed
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
                className={`w-full text-left ${sidebarCollapsed ? 'px-2 py-3' : 'px-3 py-3'} rounded-lg flex items-center ${sidebarCollapsed ? 'justify-center' : 'gap-3'} transition-all duration-200 border-l-2 group relative ${
                  isActive ? 'bg-white/20 border-white shadow-sm' : 'border-transparent hover:bg-white/10 hover:border-white/30'
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
            className={`w-full text-left ${sidebarCollapsed ? 'px-2 py-3' : 'px-3 py-3'} rounded-lg flex items-center ${sidebarCollapsed ? 'justify-center' : 'gap-3'} transition-all duration-200 border-l-2 border-transparent hover:bg-red-500/20 hover:border-red-400 group relative ${
              loading ? 'opacity-50' : ''
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
      <div className={`flex-1 flex flex-col min-w-0 h-screen overflow-y-auto ${
        isMobile && !sidebarCollapsed ? 'ml-0' : ''
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
                <span>A</span>
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
                    <select value={facultyDeptFilter} onChange={e=>setFacultyDeptFilter(e.target.value)} className="h-9 border border-gray-300 rounded px-2 text-sm">
                      <option value="">All</option>
                      {departments.map(d => <option key={d} value={d}>{d}</option>)}
                    </select>
                  </div>
                  <div className="flex flex-col gap-1 sm:col-span-2">
                    <label className="text-xs font-medium text-gray-600">Search</label>
                    <input value={facultySearch} onChange={e=>setFacultySearch(e.target.value)} placeholder="Search faculty" className="h-9 border border-gray-300 rounded px-2 text-sm" />
                  </div>
                </div>
                <button className="h-9 px-4 bg-blue-600 text-white rounded text-sm whitespace-nowrap">Add Faculty</button>
              </div>
              <div className="border border-gray-200 rounded-lg overflow-hidden">
                <table className="w-full text-sm">
                  <thead className="bg-gray-50">
                    <tr>
                      {['ID','Name','Department','Status','Actions'].map(col => <th key={col} className="text-left px-3 py-2 font-medium text-gray-600 text-xs">{col}</th>)}
                    </tr>
                  </thead>
                  <tbody>
                    {filteredFaculty.length === 0 && (
                      <tr><td colSpan={5} className="text-center text-gray-400 text-xs py-6">No faculty records</td></tr>
                    )}
                    {filteredFaculty.map(f => (
                      <tr key={f.id} className="border-t border-gray-100 hover:bg-gray-50">
                        <td className="px-3 py-2 text-xs font-medium">{f.id}</td>
                        <td className="px-3 py-2 text-xs">{f.name}</td>
                        <td className="px-3 py-2 text-xs">{f.dept}</td>
                        <td className="px-3 py-2 text-xs">
                          <StatusBadge status={f.status} />
                        </td>
                        <td className="px-3 py-2 text-xs flex gap-2">
                          <button className="text-blue-600 hover:underline">Edit</button>
                          <button className="text-yellow-600 hover:underline">Archive</button>
                        </td>
                      </tr>
                    ))}
                  </tbody>
                </table>
              </div>
            </SectionWrapper>
          )}

          {/* STUDENTS SECTION */}
          {active === 'students' && (
            <SectionWrapper title="Student Management" icon="Users" subtitle="Add, edit, archive, filter & search students">
              <div className="flex flex-col md:flex-row gap-3 md:items-end mb-4">
                <div className="flex-1 grid grid-cols-1 sm:grid-cols-4 gap-3">
                  <div className="flex flex-col gap-1">
                    <label className="text-xs font-medium text-gray-600">Department</label>
                    <select value={studentDeptFilter} onChange={e=>setStudentDeptFilter(e.target.value)} className="h-9 border border-gray-300 rounded px-2 text-sm">
                      <option value="">All</option>
                      {departments.map(d => <option key={d} value={d}>{d}</option>)}
                    </select>
                  </div>
                  <div className="flex flex-col gap-1">
                    <label className="text-xs font-medium text-gray-600">Course</label>
                    <select value={studentCourseFilter} onChange={e=>setStudentCourseFilter(e.target.value)} className="h-9 border border-gray-300 rounded px-2 text-sm">
                      <option value="">All</option>
                      {courses.map(c => <option key={c} value={c}>{c}</option>)}
                    </select>
                  </div>
                  <div className="flex flex-col gap-1 sm:col-span-2">
                    <label className="text-xs font-medium text-gray-600">Search</label>
                    <input value={studentSearch} onChange={e=>setStudentSearch(e.target.value)} placeholder="Search student" className="h-9 border border-gray-300 rounded px-2 text-sm" />
                  </div>
                </div>
                <button className="h-9 px-4 bg-blue-600 text-white rounded text-sm whitespace-nowrap">Add Student</button>
              </div>
              <div className="border border-gray-200 rounded-lg overflow-hidden">
                <table className="w-full text-sm">
                  <thead className="bg-gray-50">
                    <tr>
                      {['Student #','Name','Course','Dept','Status','Actions'].map(col => <th key={col} className="text-left px-3 py-2 font-medium text-gray-600 text-xs">{col}</th>)}
                    </tr>
                  </thead>
                  <tbody>
                    {filteredStudents.length === 0 && (
                      <tr><td colSpan={6} className="text-center text-gray-400 text-xs py-6">No student records</td></tr>
                    )}
                    {filteredStudents.map(s => (
                      <tr key={s.studentNumber} className="border-t border-gray-100 hover:bg-gray-50">
                        <td className="px-3 py-2 text-xs font-medium">{s.studentNumber}</td>
                        <td className="px-3 py-2 text-xs">{s.name}</td>
                        <td className="px-3 py-2 text-xs">{s.course}</td>
                        <td className="px-3 py-2 text-xs">{s.dept}</td>
                        <td className="px-3 py-2 text-xs"><StatusBadge status={s.status} /></td>
                        <td className="px-3 py-2 text-xs flex gap-2">
                          <button className="text-blue-600 hover:underline">Edit</button>
                          <button className="text-yellow-600 hover:underline">Archive</button>
                        </td>
                      </tr>
                    ))}
                  </tbody>
                </table>
              </div>
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
                  <button className="h-9 px-4 bg-blue-600 text-white rounded text-sm">Generate</button>
                </div>
                <div className="border border-gray-200 rounded-lg p-4">
                  <h3 className="font-semibold text-sm mb-3 flex items-center gap-2"><Icon name="GraduationCap" size={16} /> Faculty Reports</h3>
                  <div className="flex flex-col gap-2 mb-3">
                    <select className="h-9 border border-gray-300 rounded px-2 text-sm">
                      <option value="">Department (All)</option>
                      {departments.map(d => <option key={d}>{d}</option>)}
                    </select>
                  </div>
                  <button className="h-9 px-4 bg-blue-600 text-white rounded text-sm">Generate</button>
                </div>
              </div>
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
                <div className="pt-4">
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
                  />
                </div>
                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                  <input 
                    type="password"
                    placeholder="Enter new password"
                    className="w-full h-9 px-3 border rounded text-xs" 
                  />
                </div>
                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                  <input 
                    type="password"
                    placeholder="Confirm new password"
                    className="w-full h-9 px-3 border rounded text-xs" 
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
                    onClick={() => {
                      alert('Password changed successfully!');
                      setActive('profile');
                    }}
                    className="h-9 px-4 bg-blue-600 text-white rounded text-xs hover:bg-blue-700 transition-colors"
                  >
                    Update Password
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
          <p className={`text-2xl font-bold ${text.replace('600','900')}`}>{value}</p>
          <p className={`text-xs ${text}`}>{label}</p>
        </div>
      </div>
    </div>
  )
}

function MiniCard({ icon, label, value, color }) {
  const palette = {
    gray: ['bg-gray-50','border-gray-200','text-gray-600','text-gray-900'],
    orange: ['bg-orange-50','border-orange-200','text-orange-600','text-orange-900'],
    emerald: ['bg-emerald-50','border-emerald-200','text-emerald-600','text-emerald-900']
  }
  const [bg,border,text,textBold] = palette[color] || palette.gray
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
          <button key={t.id} onClick={() => setTab(t.id)} className={`h-9 px-4 rounded text-xs font-medium border ${tab===t.id ? 'bg-blue-600 text-white border-blue-600':'bg-white text-gray-600 hover:bg-gray-50 border-gray-300'}`}>{t.label}</button>
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
  return (
    <div className="border border-gray-200 rounded-lg p-4 mb-6">
      <div className="flex justify-between items-center mb-3">
        <h3 className="font-semibold text-sm">Courses</h3>
        <button className="h-8 px-3 bg-blue-600 text-white rounded text-xs">Add Course</button>
      </div>
      <div className="overflow-auto border border-gray-200 rounded">
        <table className="w-full text-sm">
          <thead className="bg-gray-50">
            <tr>{['Code','Name','Department','Status','Actions'].map(h=> <th key={h} className="text-left px-3 py-2 font-medium text-gray-600 text-xs">{h}</th>)}</tr>
          </thead>
          <tbody>
            {courseData.map(c => (
              <tr key={c.code} className="border-t border-gray-100 hover:bg-gray-50">
                <td className="px-3 py-2 text-xs font-medium">{c.code}</td>
                <td className="px-3 py-2 text-xs">{c.name}</td>
                <td className="px-3 py-2 text-xs">{c.dept}</td>
                <td className="px-3 py-2 text-xs"><StatusBadge status={c.status} /></td>
                <td className="px-3 py-2 text-xs flex gap-2"><button className="text-blue-600 hover:underline">Edit</button><button className="text-yellow-600 hover:underline">Archive</button></td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  )
}

function SettingsDepartments() {
  return (
    <div className="border border-gray-200 rounded-lg p-4 mb-6">
      <div className="flex justify-between items-center mb-3">
        <h3 className="font-semibold text-sm">Departments</h3>
        <button className="h-8 px-3 bg-blue-600 text-white rounded text-xs">Add Department</button>
      </div>
      <div className="overflow-auto border border-gray-200 rounded">
        <table className="w-full text-sm">
          <thead className="bg-gray-50">
            <tr>{['Code','Name','Status','Actions'].map(h=> <th key={h} className="text-left px-3 py-2 font-medium text-gray-600 text-xs">{h}</th>)}</tr>
          </thead>
          <tbody>
            {deptData.map(d => (
              <tr key={d.code} className="border-t border-gray-100 hover:bg-gray-50">
                <td className="px-3 py-2 text-xs font-medium">{d.code}</td>
                <td className="px-3 py-2 text-xs">{d.name}</td>
                <td className="px-3 py-2 text-xs"><StatusBadge status={d.status} /></td>
                <td className="px-3 py-2 text-xs flex gap-2"><button className="text-blue-600 hover:underline">Edit</button><button className="text-yellow-600 hover:underline">Archive</button></td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  )
}

function SettingsAcademicYears() {
  return (
    <div className="border border-gray-200 rounded-lg p-4 mb-6">
      <div className="flex justify-between items-center mb-3">
        <h3 className="font-semibold text-sm">Academic Years</h3>
        <button className="h-8 px-3 bg-blue-600 text-white rounded text-xs">Add Academic Year</button>
      </div>
      <div className="overflow-auto border border-gray-200 rounded">
        <table className="w-full text-sm">
          <thead className="bg-gray-50">
            <tr>{['Year','Status','Actions'].map(h=> <th key={h} className="text-left px-3 py-2 font-medium text-gray-600 text-xs">{h}</th>)}</tr>
          </thead>
          <tbody>
            {academicYears.map(y => (
              <tr key={y.year} className="border-t border-gray-100 hover:bg-gray-50">
                <td className="px-3 py-2 text-xs font-medium">{y.year}</td>
                <td className="px-3 py-2 text-xs"><StatusBadge status={y.status} /></td>
                <td className="px-3 py-2 text-xs flex gap-2"><button className="text-blue-600 hover:underline">Edit</button><button className="text-yellow-600 hover:underline">Archive</button></td>
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