import React, { useState, useMemo, useEffect } from 'react'
import { useNavigate, useParams } from 'react-router-dom'
import Icon from '../../components/AppIcon'
import { signOut, getUser } from '../../utils/auth'
import { courses as courseData, departments as deptData, students as studentData } from '../../data/mockData'



// Faculty dashboard (simplified view)
const MENU = [
  { id: 'dashboard', label: 'DASHBOARD', icon: 'LayoutGrid' },
  { id: 'classes', label: 'MY CLASSES', icon: 'NotebookPen' },
  { id: 'students', label: 'STUDENTS', icon: 'UserRound' }
]

export default function FacultyDashboard() {
  const navigate = useNavigate()
  const { section } = useParams()
  const [active, setActive] = useState(section || 'dashboard')
  const [sidebarCollapsed, setSidebarCollapsed] = useState(false)
  const [isMobile, setIsMobile] = useState(false)
  const [showProfileMenu, setShowProfileMenu] = useState(false)
  const user = getUser()

  useEffect(()=> { setActive(section || 'dashboard') }, [section])
  useEffect(()=> {
    const r = () => { const mobile = window.innerWidth < 768; setIsMobile(mobile); if(mobile) setSidebarCollapsed(true) }
    r(); window.addEventListener('resize', r); return () => window.removeEventListener('resize', r)
  },[])

  // Close profile menu when clicking outside
  useEffect(() => {
    const handleClickOutside = (e) => {
      if (showProfileMenu && !e.target.closest('.profile-menu-container')) {
        setShowProfileMenu(false)
      }
    }
    document.addEventListener('mousedown', handleClickOutside)
    return () => document.removeEventListener('mousedown', handleClickOutside)
  }, [showProfileMenu])

  // Hardcoded data for testing
  const myCourses = [
    { code: 'BSIT', name: 'BS Information Technology', dept: 'CCS', status: 'Active' },
    { code: 'BSCS', name: 'BS Computer Science', dept: 'CCS', status: 'Active' }
  ]
  
  const myStudents = [
    { studentNumber: '23100000758', name: 'Maria Luna Santos', course: 'BSIT', dept: 'CCS', status: 'Active' },
    { studentNumber: '23100000111', name: 'Janelle Mae Dela Cruz', course: 'BSIT', dept: 'CCS', status: 'Active' },
    { studentNumber: '23100000999', name: 'Kyle Miguel Ramos', course: 'BSCS', dept: 'CCS', status: 'Active' }
  ]

  const stats = {
    courses: myCourses.length,
    students: myStudents.length
  }
  


  const handleLogout = () => { signOut(); navigate('/login') }

  const current = active === 'profile' ? { id: 'profile', label: 'MY PROFILE', icon: 'User' } : (MENU.find(m=>m.id===active) || MENU[0])

  return (
    <div className="h-screen bg-background flex relative">
      {!sidebarCollapsed && isMobile && (<div className="fixed inset-0 bg-black/50 z-30 md:hidden" onClick={()=>setSidebarCollapsed(true)} />)}
      <aside className={`${sidebarCollapsed ? 'w-16' : 'w-56 md:w-60'} ${isMobile && !sidebarCollapsed ? 'fixed left-0 top-0 z-40' : 'relative'} text-white flex flex-col border-r border-white/10 sticky top-0 h-screen transition-all duration-300`} style={{backgroundImage:'linear-gradient(180deg,#1E4DB3,#1C3F9A 35%,#24308F 60%,#2B1E88)'}}>
        <div className={`${sidebarCollapsed ? 'px-2' : 'px-4'} pt-4 pb-6 grid place-items-center min-h-[90px] md:min-h-[110px]`}>
          <img src="/images/326319243_1186313552001605_2507428058393999247_n-removebg-preview.png" alt="FSUU" className={`${sidebarCollapsed?'w-16 h-16':'w-56 md:w-64'} object-contain transition-all duration-300`} style={{clipPath:'inset(0 0 26% 0)'}} />
        </div>
        <nav className={`flex-1 ${sidebarCollapsed ? 'px-1':'px-2'} space-y-2` }>
          {MENU.map(item => {
            const isActive = active === item.id
            return (
              <button key={item.id} onClick={()=>setActive(item.id)} className={`w-full text-left ${sidebarCollapsed?'px-2 py-3':'px-3 py-3'} rounded-lg flex items-center ${sidebarCollapsed?'justify-center':'gap-3'} transition-all duration-200 border-l-2 group relative ${isActive ? 'bg-white/20 border-white shadow-sm' : 'border-transparent hover:bg-white/10 hover:border-white/30'}`}> 
                <Icon name={item.icon} size={18} className="opacity-90 text-white" />
                {!sidebarCollapsed && (<span className="text-[12px] font-semibold tracking-wide whitespace-pre-line text-white">{item.label}</span>)}
                {sidebarCollapsed && (<div className="absolute left-full ml-2 px-2 py-1 bg-gray-900 text-white text-xs rounded opacity-0 group-hover:opacity-100 whitespace-nowrap z-50">{item.label}</div>)}
              </button>
            )
          })}
        </nav>
        <div className={`${sidebarCollapsed ? 'px-1':'px-2'} pb-6`}>
          <div className={`h-px bg-white/20 ${sidebarCollapsed ? 'mx-2':'mx-3'} mb-4`}></div>
          <button onClick={handleLogout} className={`w-full text-left ${sidebarCollapsed?'px-2 py-3':'px-3 py-3'} rounded-lg flex items-center ${sidebarCollapsed?'justify-center':'gap-3'} transition-all duration-200 border-l-2 border-transparent hover:bg-red-500/20 hover:border-red-400 group relative`}>
            <Icon name="LogOut" size={18} className="text-red-300" />
            {!sidebarCollapsed && (<span className="text-[12px] font-semibold tracking-wide text-red-300">LOGOUT</span>)}
          </button>
        </div>
      </aside>
      <div className="flex-1 flex flex-col min-w-0 h-screen overflow-y-auto">
        <header className="h-14 bg-white/95 backdrop-blur border-b border-border sticky top-0 z-10 px-3 sm:px-4 md:px-6 flex items-center justify-between">
          <div className="flex items-center gap-2 text-primary">
            <button onClick={()=>setSidebarCollapsed(!sidebarCollapsed)} className="p-1.5 sm:p-2 hover:bg-gray-100 rounded-md" title="Toggle Menu">
              <div className="flex flex-col gap-1 w-4 h-4 sm:w-5 sm:h-5">
                <div className="w-3 h-0.5 bg-primary" /><div className="w-3 h-0.5 bg-primary" /><div className="w-3 h-0.5 bg-primary" />
              </div>
            </button>
            <Icon name={current.icon} size={18} />
            <span className="font-bold tracking-wide text-xs sm:text-sm">{String(current.label).replace(/\n/g,' ')}</span>
          </div>
          <div className="relative profile-menu-container">
            <button
              onClick={() => setShowProfileMenu(!showProfileMenu)}
              className="flex items-center gap-1.5 sm:gap-2 hover:bg-gray-50 rounded-lg p-1.5 sm:p-2 transition-colors duration-200"
            >
              <div className="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-green-600 text-white grid place-items-center text-xs font-medium overflow-hidden">
                <span>{user?.name?.[0] || 'F'}</span>
              </div>
              <span className="text-xs font-medium hidden sm:block">{(user?.name || 'FACULTY').toUpperCase()}</span>
              <Icon name="ChevronDown" size={14} className={`sm:text-base transition-transform duration-200 ${showProfileMenu ? 'rotate-180' : ''}`} />
            </button>
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
        <main className="p-2 sm:p-4 md:p-6 space-y-6">
          {active==='dashboard' && (
            <div className="space-y-6">
              {/* Welcome Section */}
              <div className="bg-white border border-border rounded-lg p-6">
                <div className="flex items-center gap-4">
                  <div className="w-16 h-16 bg-gradient-to-br from-blue-600 to-indigo-600 text-white grid place-items-center rounded-full">
                    <Icon name="User" size={32} />
                  </div>
                  <div>
                    <h1 className="text-2xl font-bold text-gray-900">Welcome</h1>
                    <p className="text-lg text-gray-600">{user?.name || 'FACULTY'}</p>
                  </div>
                </div>
              </div>

              {/* Stats Grid */}
              <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div className="bg-blue-50 border border-blue-200 rounded-lg p-4">
                  <div className="flex items-center gap-3">
                    <Icon name="BookOpen" size={24} className="text-blue-600" />
                    <div>
                      <p className="text-2xl font-bold text-blue-900">{stats.courses}</p>
                      <p className="text-sm text-blue-600">My Courses</p>
                    </div>
                  </div>
                </div>
                <div className="bg-green-50 border border-green-200 rounded-lg p-4">
                  <div className="flex items-center gap-3">
                    <Icon name="UserRound" size={24} className="text-green-600" />
                    <div>
                      <p className="text-2xl font-bold text-green-900">{stats.students}</p>
                      <p className="text-sm text-green-600">My Students</p>
                    </div>
                  </div>
                </div>
                <div className="bg-purple-50 border border-purple-200 rounded-lg p-4">
                  <div className="flex items-center gap-3">
                    <Icon name="Calendar" size={24} className="text-purple-600" />
                    <div>
                      <p className="text-2xl font-bold text-purple-900">2025-2026</p>
                      <p className="text-sm text-purple-600">Academic Year</p>
                    </div>
                  </div>
                </div>
                <div className="bg-orange-50 border border-orange-200 rounded-lg p-4">
                  <div className="flex items-center gap-3">
                    <Icon name="GraduationCap" size={24} className="text-orange-600" />
                    <div>
                      <p className="text-2xl font-bold text-orange-900">CCS</p>
                      <p className="text-sm text-orange-600">Department</p>
                    </div>
                  </div>
                </div>
              </div>

              {/* Current Active Class */}
              <div className="bg-white border border-border rounded-lg p-6">
                <h2 className="text-lg font-semibold text-gray-900 mb-4">Current Active Class</h2>
                <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                  <div>
                    <label className="block text-sm font-medium text-gray-700 mb-1">Schedule</label>
                    <p className="text-sm text-gray-900">MWF 09:00-10:00</p>
                  </div>
                  <div>
                    <label className="block text-sm font-medium text-gray-700 mb-1">Room</label>
                    <p className="text-sm text-gray-900">Lab 1</p>
                  </div>
                  <div>
                    <label className="block text-sm font-medium text-gray-700 mb-1">Units</label>
                    <p className="text-sm text-gray-900">3</p>
                  </div>
                  <div>
                    <label className="block text-sm font-medium text-gray-700 mb-1">Students Enrolled</label>
                    <p className="text-sm text-gray-900">{stats.students}</p>
                  </div>
                </div>
              </div>

              {/* Quick Stats */}
              <div className="bg-white border border-border rounded-lg p-6">
                <h2 className="text-lg font-semibold text-gray-900 mb-4">Quick Stats</h2>
                <div className="grid grid-cols-1 md:grid-cols-3 gap-4">
                  <div className="text-center">
                    <p className="text-3xl font-bold text-blue-600">0</p>
                    <p className="text-sm text-gray-600">Assignments</p>
                  </div>
                  <div className="text-center">
                    <p className="text-3xl font-bold text-green-600">0</p>
                    <p className="text-sm text-gray-600">Quizzes</p>
                  </div>
                  <div className="text-center">
                    <p className="text-3xl font-bold text-purple-600">0</p>
                    <p className="text-sm text-gray-600">Projects</p>
                  </div>
                </div>
              </div>
            </div>
          )}
          {active==='classes' && (
            <Card title="My Classes" subtitle="List of courses you handle">
              <Table columns={['Code','Name','Department']} rows={myCourses.map(c=>[c.code,c.name,c.dept])} empty="No classes" />
            </Card>
          )}
          {active==='students' && (
            <Card title="Students" subtitle="Students enrolled in your courses">
              <Table columns={['Student #','Name','Course','Dept','Year','Status']} rows={myStudents.map(s=>[s.studentNumber,s.name,s.course,s.dept,'--',s.status])} empty="No students" />
            </Card>
          )}
          {active==='profile' && (
            <Card title="My Profile" subtitle="Edit signed in profile or logout">
              <FacultyProfile user={user} onLogout={handleLogout} />
            </Card>
          )}
        </main>
      </div>
    </div>
  )
}

function Card({ title, subtitle, children }) {
  return (
    <div className="bg-white border border-border rounded-lg p-4 sm:p-6">
      <div className="flex items-start sm:items-center gap-4 mb-6 flex-col sm:flex-row">
        <div className="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-blue-600 to-indigo-600 text-white grid place-items-center rounded-full">
          <Icon name="Sparkles" size={24} />
        </div>
        <div>
          <h1 className="text-lg sm:text-xl font-bold text-gray-900 leading-tight">{title}</h1>
          {subtitle && <p className="text-xs sm:text-sm text-gray-600 mt-1">{subtitle}</p>}
        </div>
      </div>
      {children}
    </div>
  )
}

function Stat({ icon, label, value, color }) {
  const palette = {
    blue:['bg-blue-50','border-blue-200','text-blue-600','text-blue-900'],
    green:['bg-green-50','border-green-200','text-green-600','text-green-900'],
    purple:['bg-purple-50','border-purple-200','text-purple-600','text-purple-900']
  }
  const [bg,border,text,textBold] = palette[color] || palette.blue
  return (
    <div className={`${bg} border ${border} rounded-lg p-4`}>
      <div className="flex items-center gap-3">
        <Icon name={icon} size={20} className={text} />
        <div>
          <p className={`text-2xl font-bold ${textBold}`}>{value}</p>
          <p className={`text-xs ${text}`}>{label}</p>
        </div>
      </div>
    </div>
  )
}

function Table({ columns, rows, empty }) {
  return (
    <div className="overflow-auto border border-gray-200 rounded">
      <table className="w-full text-sm">
        <thead className="bg-gray-50">
          <tr>{columns.map(c=> <th key={c} className="text-left px-3 py-2 font-medium text-gray-600 text-xs">{c}</th>)}</tr>
        </thead>
        <tbody>
          {rows.map((r,i) => (
            <tr key={i} className="border-t border-gray-100 hover:bg-gray-50">{r.map((cell,ci)=> <td key={ci} className="px-3 py-2 text-xs">{cell}</td>)}</tr>
          ))}
          {rows.length===0 && <tr><td className="px-3 py-6 text-center text-xs text-gray-400" colSpan={columns.length}>{empty}</td></tr>}
        </tbody>
      </table>
    </div>
  )
}

function FacultyProfile({ user, onLogout }) {
  const [profile, setProfile] = useState({ name: user?.name || '', email: user?.email || '', password: '' })
  const update = (k,v) => setProfile(p => ({ ...p, [k]: v }))
  const save = () => {
    const auth = { ...user, name: profile.name, email: profile.email }
    localStorage.setItem('auth', JSON.stringify(auth))
    alert('Profile saved (local only).')
  }
  return (
    <div className="space-y-4 max-w-sm">
      <div>
        <label className="block text-[11px] font-medium mb-1">Name</label>
        <input value={profile.name} onChange={e=>update('name', e.target.value)} className="w-full h-9 px-3 border rounded text-xs" />
      </div>
      <div>
        <label className="block text-[11px] font-medium mb-1">Email</label>
        <input value={profile.email} onChange={e=>update('email', e.target.value)} className="w-full h-9 px-3 border rounded text-xs" />
      </div>
      <div>
        <label className="block text-[11px] font-medium mb-1">Password</label>
        <input type="password" value={profile.password} onChange={e=>update('password', e.target.value)} placeholder="********" className="w-full h-9 px-3 border rounded text-xs" />
        <p className="text-[10px] text-gray-400 mt-1">Password change not persisted in demo.</p>
      </div>
      <div>
        <label className="block text-[11px] font-medium mb-1">Employee #</label>
        <input disabled value={user?.userId||''} className="w-full h-9 px-3 border rounded text-xs bg-gray-50" />
      </div>
      <div className="flex gap-2">
        <button onClick={save} className="h-9 px-4 bg-blue-600 text-white rounded text-xs">Save Changes</button>
        <button onClick={onLogout} className="h-9 px-4 bg-red-600 text-white rounded text-xs">Logout</button>
      </div>
    </div>
  )
}
