import React, { useState, useEffect } from 'react'
import { useNavigate } from 'react-router-dom'
import Icon from '../../components/AppIcon'
import { signOut, getUser } from '../../utils/auth'
import { teacherClasses, students as allStudents } from '../../data/mockData'

const TEACHER_MENU = [
  { id: 'dashboard', label: 'DASHBOARD', icon: 'BarChart3' }
]

export default function TeacherDashboard() {
  const navigate = useNavigate()
  const [active, setActive] = useState('dashboard')
  const [loading, setLoading] = useState(false)
  const [sidebarCollapsed, setSidebarCollapsed] = useState(false)
  const [isMobile, setIsMobile] = useState(false)
  // Removed course materials feature

  const [showProfileMenu, setShowProfileMenu] = useState(false)
  const user = getUser()
  const teacherId = user?.teacherId || 'T001'
  const teacherName = user?.role === 'teacher' ? (user?.name || 'JUNE BALDUEZA') : 'JUNE BALDUEZA'
  const activeClass = teacherClasses.find(c => c.teacherId === teacherId) || null
  const classStudents = activeClass ? allStudents.filter(s => activeClass.studentNumbers.includes(s.studentNumber)) : []
  const [students] = useState(classStudents)

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
    setActive(sectionId)
    setLoading(true)
    setTimeout(() => setLoading(false), 500)
  }

  const handleLogout = () => {
    signOut()
    navigate('/login')
  }



  const current = TEACHER_MENU.find(m => m.id === active) || TEACHER_MENU[0]

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
          {TEACHER_MENU.map(item => {
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
                <div className="w-3 h-0.5 sm:w-4 sm:h-0.5 bg-primary rounded-full"></div>
                <div className="w-3 h-0.5 sm:w-4 sm:h-0.5 bg-primary rounded-full"></div>
                <div className="w-3 h-0.5 sm:w-4 sm:h-0.5 bg-primary rounded-full"></div>
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
              <div className="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-primary text-white grid place-items-center text-xs font-medium overflow-hidden">
                <span>T</span>
              </div>
              <span className="text-xs font-medium hidden sm:block">{teacherName}</span>
              <Icon name="ChevronDown" size={14} className={`sm:text-base transition-transform duration-200 ${showProfileMenu ? 'rotate-180' : ''}`} />
            </button>

            {/* Profile Dropdown Menu */}
            {showProfileMenu && (
              <div className="absolute right-0 top-full mt-2 w-48 sm:w-56 bg-white border border-gray-200 rounded-lg shadow-xl z-50 animate-fade-in-up">
                <div className="py-2">
                  <button
                    onClick={() => navigate('/lms-dashboard')}
                    className="w-full flex items-center gap-2 sm:gap-3 px-3 sm:px-4 py-2.5 sm:py-3 text-left hover:bg-blue-50 hover:text-blue-700 transition-colors duration-150 group"
                  >
                    <Icon name="User" size={16} className="sm:text-lg text-gray-600 group-hover:text-blue-600" />
                    <span className="text-xs sm:text-sm font-medium text-gray-700 group-hover:text-blue-700">Switch to Student</span>
                  </button>
                  <button
                    onClick={() => navigate('/admin-dashboard')}
                    className="w-full flex items-center gap-2 sm:gap-3 px-3 sm:px-4 py-2.5 sm:py-3 text-left hover:bg-red-50 hover:text-red-700 transition-colors duration-150 group"
                  >
                    <Icon name="Shield" size={16} className="sm:text-lg text-gray-600 group-hover:text-red-600" />
                    <span className="text-xs sm:text-sm font-medium text-gray-700 group-hover:text-red-700">Switch to Admin</span>
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
          {active === 'dashboard' && (
            <div className="space-y-4 sm:space-y-6">
              {/* Welcome Section */}
              <div className="bg-white border border-border rounded-lg p-4 sm:p-6">
                <div className="flex items-center gap-4 mb-6">
                  <div className="w-12 h-12 sm:w-16 sm:h-16 bg-primary text-white grid place-items-center rounded-full">
                    <Icon name="User" size={24} className="sm:text-2xl" />
                  </div>
                  <div>
                    <h1 className="text-lg sm:text-xl font-bold text-gray-900">Welcome</h1>
                    <p className="text-sm text-gray-600">{teacherName}</p>
                  </div>
                </div>

                {/* Current Class Information */}
                <div className="bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-lg p-4 mb-6">
                  <h3 className="text-lg font-semibold text-blue-900 mb-3">Current Active Class</h3>
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                      <h4 className="text-xl font-bold text-blue-800 mb-2">{activeClass ? activeClass.subject : '--'}</h4>
                      <div className="space-y-2 text-sm text-blue-700">
                        <p><strong>Schedule:</strong> {activeClass?.schedule || '--'}</p>
                        <p><strong>Room:</strong> {activeClass?.room || '--'}</p>
                        <p><strong>Units:</strong> {activeClass?.units ?? '--'}</p>
                        <p><strong>Students Enrolled:</strong> {students.length || '--'}</p>
                      </div>
                    </div>
                    <div className="flex flex-col justify-center">
                      <div className="bg-white rounded-lg p-3 border border-blue-200">
                        <p className="text-sm font-medium text-blue-900 mb-2">Quick Stats</p>
                        <div className="grid grid-cols-2 gap-3 text-xs">
                          <div>
                            <p className="text-blue-600">Assignments</p>
                            <p className="font-bold text-blue-900">0</p>
                          </div>
                          <div>
                            <p className="text-blue-600">Projects</p>
                            <p className="font-bold text-blue-900">0</p>
                          </div>
                          <div>
                            <p className="text-blue-600">Quizzes</p>
                            <p className="font-bold text-blue-900">0</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                {/* Stats Cards */}
                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">
                  <div className="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <div className="flex items-center gap-3">
                      <Icon name="Users" size={20} className="text-blue-600" />
                      <div>
                        <p className="text-2xl font-bold text-blue-900">{students.length}</p>
                        <p className="text-xs text-blue-600">Total Students</p>
                      </div>
                    </div>
                  </div>
                  <div className="bg-green-50 border border-green-200 rounded-lg p-4">
                    <div className="flex items-center gap-3">
                      <Icon name="BookOpen" size={20} className="text-green-600" />
                      <div>
                        <p className="text-2xl font-bold text-green-900">{activeClass ? activeClass.classId : '--'}</p>
                        <p className="text-xs text-green-600">Active Class</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              {/* Quick Actions */}
              <div className="bg-white border border-border rounded-lg p-4 sm:p-6">
                <h2 className="text-lg font-semibold mb-4">Quick Actions</h2>
                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">
                  <button
                    onClick={() => setActive('students')}
                    className="flex items-center gap-3 p-4 bg-green-50 hover:bg-green-100 rounded-lg transition-colors"
                  >
                    <Icon name="Users" size={24} className="text-green-600" />
                    <div className="text-left">
                      <p className="font-medium text-green-900">View Students</p>
                      <p className="text-xs text-green-600">Manage student records</p>
                    </div>
                  </button>
                </div>
              </div>
            </div>
          )}

          {/* Students section removed (dashboard only) */}

          {/* Removed attendance section */}

          {/* Removed course materials related sections (lessons, modules, assignments, projects, quizzes, exams) */}

          {/* Removed grade management section */}

          {/* Removed reports section */}
        </main>
      </div>
    </div>
  )
}
