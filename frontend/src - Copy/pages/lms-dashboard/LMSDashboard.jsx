import React, { useState, useEffect } from 'react'
import { useNavigate, useLocation } from 'react-router-dom'
import Icon from '../../components/AppIcon'
import { signOut } from '../../utils/auth'
// Removed Enrollment, StudyLoad, Accounts, Clearance, MyClasses components

const MENU = [
  { id: 'dashboard', label: 'DASHBOARD', icon: 'Megaphone' },
  // Removed enrollment, study-load, accounts, e-clearance, my-classes menu items
  // Removed grades and evaluation menu items
]

export default function LMSDashboard() {
  const navigate = useNavigate()
  const location = useLocation()
  
  // Extract current section from URL path
  const getCurrentSection = () => {
    const path = location.pathname
  // Removed enrollment/study-load/accounts/e-clearance/my-classes path handling
  // Removed grades and evaluation path handling
    return 'announcement'
  }
  
  const [active, setActive] = useState(getCurrentSection())
  const [loading, setLoading] = useState(false)
  const [loadingSection, setLoadingSection] = useState(null)
  const [showProfileMenu, setShowProfileMenu] = useState(false)
  const [showChangePassword, setShowChangePassword] = useState(false)
  const [showHandbook, setShowHandbook] = useState(false)
  const [sidebarCollapsed, setSidebarCollapsed] = useState(false)
  const [isMobile, setIsMobile] = useState(false)

  // Auto-collapse sidebar on mobile
  useEffect(() => {
    const handleResize = () => {
      const mobile = window.innerWidth < 768
      setIsMobile(mobile)
      if (mobile) {
        setSidebarCollapsed(true)
      }
    }

    handleResize() // Check on initial load
    window.addEventListener('resize', handleResize)
    return () => window.removeEventListener('resize', handleResize)
  }, [])

  // Minimal user identity retained for avatar / greeting only after removing full Profile feature
  const [userName] = useState({ firstName: '--', lastName: '' })
  const current = MENU.find(m => m.id === active) || MENU[0]
  
  // Update active state when URL changes
  useEffect(() => {
    setActive(getCurrentSection())
    setLoading(false)
    setLoadingSection(null)
  }, [location.pathname])

  // Close profile menu when clicking outside
  useEffect(() => {
    const handleClickOutside = (event) => {
      if (showProfileMenu && !event.target.closest('.profile-menu-container')) {
        setShowProfileMenu(false)
      }
    }

    document.addEventListener('click', handleClickOutside)
    return () => document.removeEventListener('click', handleClickOutside)
  }, [showProfileMenu])
  
  // Handle navigation with loading effect
  const handleNavigation = (sectionId) => {
    if (sectionId === active) return // Don't reload if already on the same section
    
    setLoading(true)
    setLoadingSection(sectionId)
    
    // Simulate loading time (you can adjust this)
    setTimeout(() => {
      setActive(sectionId)
      if (sectionId === 'announcement') {
        navigate('/lms-dashboard')
      } else {
        navigate(`/lms-dashboard/${sectionId}`)
      }
    }, 800) // 800ms loading effect
  }

  // Handle logout
  const handleLogout = () => {
    signOut()
    navigate('/login')
  }

  // Handle profile menu actions (remaining items only)
  const handleChangePassword = () => {
    setShowChangePassword(true)
    setShowProfileMenu(false)
  }

  const handleHandbook = () => {
    setShowHandbook(true)
    setShowProfileMenu(false)
  }

  // Removed profile editing / photo capture functionality



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
          {MENU.map(item => {
            const isActive = active === item.id
            const isLoading = loadingSection === item.id
            return (
                             <button
                 key={item.id}
                 onClick={() => handleNavigation(item.id)}
                 disabled={loading}
                 className={`w-full text-left ${sidebarCollapsed ? 'px-2 py-3' : 'px-3 py-3'} rounded-lg flex items-center ${sidebarCollapsed ? 'justify-center' : 'gap-3'} transition-all duration-200 border-l-2 group relative ${
                   isActive ? 'bg-white/20 border-white shadow-sm' : 'border-transparent hover:bg-white/10 hover:border-white/30'
                 } ${loading && !isLoading ? 'opacity-50' : ''} ${isLoading ? 'bg-white/20' : ''}`}
                 title={sidebarCollapsed ? item.label.replace('\n', ' ') : ''}
               >
                {isLoading ? (
                  <div className="w-[18px] h-[18px] flex items-center justify-center">
                    <div className="w-3 h-3 border-2 border-white/30 border-t-white rounded-full animate-spin"></div>
                  </div>
                ) : (
                  <Icon name={item.icon} size={18} className="opacity-90 text-white flex-shrink-0" />
                )}
                
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
                
                {isLoading && !sidebarCollapsed && (
                  <div className="ml-auto">
                    <div className="w-1 h-1 bg-white rounded-full animate-pulse"></div>
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
                <span className="text-xs sm:text-sm">{userName.firstName.charAt(0)}{userName.lastName.charAt(0)}</span>
              </div>
              <span className="text-xs font-medium hidden sm:block">{userName.firstName} {userName.lastName}</span>
              <Icon name="ChevronDown" size={14} className={`sm:text-base transition-transform duration-200 ${showProfileMenu ? 'rotate-180' : ''}`} />
            </button>
            
            {/* Profile Dropdown Menu - Only Menu Items */}
            {showProfileMenu && (
              <div className="absolute right-0 top-full mt-2 w-48 sm:w-56 bg-white border border-gray-200 rounded-lg shadow-xl z-50 animate-fade-in-up">
                <div className="py-2">
                  {/* Event Attendance & Profile items removed */}
                  <button 
                    onClick={handleChangePassword}
                    className="w-full flex items-center gap-2 sm:gap-3 px-3 sm:px-4 py-2.5 sm:py-3 text-left hover:bg-blue-50 hover:text-blue-700 transition-colors duration-150 group"
                  >
                    <Icon name="Lock" size={16} className="sm:text-lg text-gray-600 group-hover:text-blue-600" />
                    <span className="text-xs sm:text-sm font-medium text-gray-700 group-hover:text-blue-700">Change Password</span>
                  </button>
                  <button
                    onClick={handleHandbook}
                    className="w-full flex items-center gap-2 sm:gap-3 px-3 sm:px-4 py-2.5 sm:py-3 text-left hover:bg-blue-50 hover:text-blue-700 transition-colors duration-150 group"
                  >
                    <Icon name="Book" size={16} className="sm:text-lg text-gray-600 group-hover:text-blue-600" />
                    <span className="text-xs sm:text-sm font-medium text-gray-700 group-hover:text-blue-700">Handbook</span>
                  </button>
                  <div className="border-t border-gray-200 my-1"></div>
                  <button
                    onClick={() => navigate('/teacher-dashboard')}
                    className="w-full flex items-center gap-2 sm:gap-3 px-3 sm:px-4 py-2.5 sm:py-3 text-left hover:bg-purple-50 hover:text-purple-700 transition-colors duration-150 group"
                  >
                    <Icon name="GraduationCap" size={16} className="sm:text-lg text-gray-600 group-hover:text-purple-600" />
                    <span className="text-xs sm:text-sm font-medium text-gray-700 group-hover:text-purple-700">Switch to Teacher</span>
                  </button>
                  <button
                    onClick={() => navigate('/admin-dashboard')}
                    className="w-full flex items-center gap-2 sm:gap-3 px-3 sm:px-4 py-2.5 sm:py-3 text-left hover:bg-red-50 hover:text-red-700 transition-colors duration-150 group"
                  >
                    <Icon name="Shield" size={16} className="sm:text-lg text-gray-600 group-hover:text-red-600" />
                    <span className="text-xs sm:text-sm font-medium text-gray-700 group-hover:text-red-700">Switch to Admin</span>
                  </button>

                </div>
              </div>
            )}
          </div>
        </header>

        {/* Content */}
        <main className="p-2 sm:p-4 md:p-6 relative">
          {loading ? (
            <div className="fixed inset-0 z-[9999] grid place-items-center" style={{ background: 'linear-gradient(180deg, #1E4DB3 0%, #1C3F9A 35%, #24308F 60%, #2B1E88 100%)' }}>
              <div className="text-center animate-fade-in">
                <img src="/images/326319243_1186313552001605_2507428058393999247_n-removebg-preview.png" alt="loading" className="w-40 sm:w-56 md:w-64 h-auto mx-auto mb-6 sm:mb-8 drop-shadow-[0_6px_16px_rgba(0,0,0,.45)]" />
                <div className="w-12 h-12 sm:w-16 sm:h-16 border-4 border-white/30 border-t-white rounded-full animate-spin mx-auto"></div>
              </div>
            </div>
          ) : null}
          
          <section className="bg-white border border-border rounded-lg overflow-hidden p-6 text-center text-sm text-gray-500">
            <p>-- No dashboard data yet --</p>
          </section>
        </main>
      </div>

      {/* Chat FAB */}
      <button className="fixed right-3 sm:right-6 bottom-6 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-[#1769AA] text-white grid place-items-center border border-white/10">
        <span className="absolute right-1 sm:right-1.5 bottom-1 sm:bottom-1.5 w-2 h-2 sm:w-2.5 sm:h-2.5 bg-red-500 rounded-full"></span>
        <Icon name="MessageSquare" size={16} className="sm:text-xl" />
      </button>

      {/* Change Password Modal */}
      {showChangePassword && (
        <div className="fixed inset-0 bg-black/50 backdrop-blur-sm z-[9999] grid place-items-center p-2 sm:p-4">
          <div className="bg-white rounded-lg w-full max-w-md p-4 sm:p-6 animate-fade-in-up">
            <div className="flex items-center justify-between mb-4">
              <h2 className="text-base sm:text-lg font-semibold text-gray-900 flex items-center gap-2">
                <Icon name="Lock" size={20} className="text-blue-600" />
                Change Password
              </h2>
              <button
                onClick={() => setShowChangePassword(false)}
                className="text-gray-400 hover:text-gray-600 transition-colors p-1"
              >
                <Icon name="X" size={20} />
              </button>
            </div>
            <form className="space-y-4">
              <div>
                <label className="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                <input
                  type="password"
                  className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                  placeholder="Enter current password"
                />
              </div>
              <div>
                <label className="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                <input
                  type="password"
                  className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                  placeholder="Enter new password"
                />
              </div>
              <div>
                <label className="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                <input
                  type="password"
                  className="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                  placeholder="Confirm new password"
                />
              </div>
              <div className="flex flex-col sm:flex-row gap-2 pt-2">
                <button
                  type="button"
                  onClick={() => setShowChangePassword(false)}
                  className="w-full sm:flex-1 px-4 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200 transition-colors"
                >
                  Cancel
                </button>
                <button
                  type="submit"
                  className="w-full sm:flex-1 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors"
                >
                  Update Password
                </button>
              </div>
            </form>
          </div>
        </div>
      )}

      {/* Handbook Modal */}
      {showHandbook && (
        <div className="fixed inset-0 bg-black/50 backdrop-blur-sm z-[9999] grid place-items-center p-2 sm:p-4">
          <div className="bg-white rounded-lg w-full max-w-md p-6 animate-fade-in-up text-center space-y-4">
            <h2 className="text-lg font-semibold flex items-center justify-center gap-2 text-gray-900"><Icon name="Book" size={20} className="text-blue-600" />Handbook</h2>
            <p className="text-sm text-gray-500">-- Content not available --</p>
            <button onClick={() => setShowHandbook(false)} className="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">Close</button>
          </div>
        </div>
      )}
    </div>
  )
}

