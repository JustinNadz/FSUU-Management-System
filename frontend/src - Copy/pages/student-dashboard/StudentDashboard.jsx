import React, { useState, useEffect, useRef } from 'react'
import { useNavigate, useParams } from 'react-router-dom'
import Icon from '../../components/AppIcon'
import { signOut, getUser } from '../../utils/auth'
import api from '../../utils/api'

// Simple student dashboard for Anna
const MENU = [
  { id: 'dashboard', label: 'DASHBOARD', icon: 'LayoutGrid' },
  { id: 'my-course', label: 'MY COURSE', icon: 'BookOpen' }
]

export default function StudentDashboard() {
  const navigate = useNavigate()
  const { section } = useParams()
  const [active, setActive] = useState(section || 'dashboard')
  const [sidebarCollapsed, setSidebarCollapsed] = useState(false)
  const [isMobile, setIsMobile] = useState(false)
  const [showProfileMenu, setShowProfileMenu] = useState(false)
  const [profileImage, setProfileImage] = useState(() => {
    const saved = localStorage.getItem('studentProfileImage');
    return saved || null;
  })
  const fileInputRef = useRef(null)
  const [previewUrl, setPreviewUrl] = useState(null)
  const user = getUser()
  const [me, setMe] = useState(null)
  const [courseName, setCourseName] = useState('')

  // Change password state
  const [pwdCurrent, setPwdCurrent] = useState('')
  const [pwdNew, setPwdNew] = useState('')
  const [pwdConfirm, setPwdConfirm] = useState('')
  const [pwdSaving, setPwdSaving] = useState(false)

  useEffect(()=> { setActive(section || 'dashboard') }, [section])
  useEffect(()=> { const r=()=>{const m=window.innerWidth<768; setIsMobile(m); if(m) setSidebarCollapsed(true)}; r(); window.addEventListener('resize',r); return ()=>window.removeEventListener('resize',r)},[])
  useEffect(()=> { const h=e=> { if(showProfileMenu && !e.target.closest('.profile-menu-container')) setShowProfileMenu(false) }; document.addEventListener('mousedown',h); return ()=>document.removeEventListener('mousedown',h)},[showProfileMenu])

  // Load live student profile and course name
  useEffect(() => {
    let mounted = true
    ;(async () => {
      try {
        const resp = await api.get('/students/me')
        if (!mounted) return
        const userData = (resp?.data && typeof resp.data === 'object' && 'data' in resp.data) ? resp.data.data : resp?.data
        setMe(userData)
        const code = userData?.course_code
        if (code) {
          try {
            const cr = await api.get('/admin/courses')
            const list = Array.isArray(cr?.data) ? cr.data : (Array.isArray(cr?.data?.data) ? cr.data.data : [])
            const found = list.find(x => (x.code || '').toUpperCase() === String(code).toUpperCase())
            if (found?.name) setCourseName(found.name)
          } catch {}
        }
      } catch {}
    })()
    return () => { mounted = false }
  }, [])

  const handleLogout = () => { signOut(); navigate('/login') }

  const current = active === 'profile' ? { id:'profile', label:'MY PROFILE', icon:'User'} : (MENU.find(m=>m.id===active) || MENU[0])

  return (
    <div className="h-screen bg-background flex relative">
      {!sidebarCollapsed && isMobile && (<div className="fixed inset-0 bg-black/50 z-30 md:hidden" onClick={()=>setSidebarCollapsed(true)} />)}
      <aside className={`${sidebarCollapsed?'w-16':'w-56 md:w-60'} ${isMobile && !sidebarCollapsed?'fixed left-0 top-0 z-40':'relative'} text-white flex flex-col border-r border-white/10 sticky top-0 h-screen transition-all duration-300`} style={{backgroundImage:'linear-gradient(180deg,#1E4DB3,#1C3F9A 35%,#24308F 60%,#2B1E88)'}}>
        <div className={`${sidebarCollapsed?'px-2':'px-4'} pt-4 pb-6 grid place-items-center min-h-[90px] md:min-h-[110px]`}>
          <img src="/images/326319243_1186313552001605_2507428058393999247_n-removebg-preview.png" alt="FSUU" className={`${sidebarCollapsed?'w-16 h-16':'w-56 md:w-64'} object-contain transition-all duration-300`} style={{clipPath:'inset(0 0 26% 0)'}} />
        </div>
        <nav className={`flex-1 ${sidebarCollapsed?'px-1':'px-2'} space-y-2`}>
          {MENU.map(item=> { const isActive = active===item.id; return (
            <button key={item.id} onClick={()=>setActive(item.id)} className={`w-full text-left ${sidebarCollapsed?'px-2 py-3':'px-3 py-3'} rounded-lg flex items-center ${sidebarCollapsed?'justify-center':'gap-3'} transition-all duration-200 border-l-2 group relative ${isActive?'bg-white/20 border-white shadow-sm':'border-transparent hover:bg-white/10 hover:border-white/30'}`}>
              <Icon name={item.icon} size={18} className="opacity-90 text-white" />
              {!sidebarCollapsed && (<span className="text-[12px] font-semibold tracking-wide whitespace-pre-line text-white">{item.label}</span>)}
              {sidebarCollapsed && (<div className="absolute left-full ml-2 px-2 py-1 bg-gray-900 text-white text-xs rounded opacity-0 group-hover:opacity-100 whitespace-nowrap z-50">{item.label}</div>)}
            </button>) })}
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
              <div className="flex flex-col gap-1 w-4 h-4 sm:w-5 sm:h-5"><div className="w-3 h-0.5 bg-primary"/><div className="w-3 h-0.5 bg-primary"/><div className="w-3 h-0.5 bg-primary"/></div>
            </button>
            <Icon name={current.icon} size={18} />
            <span className="font-bold tracking-wide text-xs sm:text-sm">{String(current.label).replace(/\n/g,' ')}</span>
          </div>
          <div className="flex items-center gap-2">
            <button
              type="button"
              className="h-8 sm:h-9 px-3 bg-blue-600 text-white rounded text-xs hover:bg-blue-700 transition-colors"
              title="Message"
            >
              Message
            </button>
            <div className="relative profile-menu-container">
              <button onClick={()=>setShowProfileMenu(!showProfileMenu)} className="flex items-center gap-1.5 sm:gap-2 hover:bg-gray-50 rounded-lg p-1.5 sm:p-2 transition-colors duration-200">
              <div className="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-blue-600 text-white grid place-items-center text-xs font-medium overflow-hidden">
                {(previewUrl || profileImage) ? (
                  <img 
                    src={previewUrl || profileImage} 
                    alt="Profile" 
                    className="w-full h-full object-cover"
                  />
                ) : (
                  <span>{(me?.name || user?.user?.name || 'S')?.[0]?.toUpperCase()}</span>
                )}
              </div>
              <span className="text-xs font-medium hidden sm:block">{(me?.name || user?.user?.name || 'STUDENT').toUpperCase()}</span>
              <Icon name="ChevronDown" size={14} className={`sm:text-base transition-transform duration-200 ${showProfileMenu?'rotate-180':''}`} />
              </button>
              {showProfileMenu && (
                <div className="absolute right-0 top-full mt-2 w-48 sm:w-56 bg-white border border-gray-200 rounded-lg shadow-xl z-50 animate-fade-in-up">
                  <div className="py-2">
                    <button onClick={() => { setActive('profile'); setShowProfileMenu(false) }} className="w-full flex items-center gap-2 sm:gap-3 px-3 sm:px-4 py-2.5 sm:py-3 text-left hover:bg-gray-50 transition-colors duration-150 group">
                      <Icon name="User" size={16} className="sm:text-lg text-gray-600 group-hover:text-gray-800" />
                      <span className="text-xs sm:text-sm font-medium text-gray-700 group-hover:text-gray-800">My Profile</span>
                    </button>
                    <div className="border-t border-gray-200 my-1" />
                    <button onClick={handleLogout} className="w-full flex items-center gap-2 sm:gap-3 px-3 sm:px-4 py-2.5 sm:py-3 text-left hover:bg-red-50 group">
                      <Icon name="LogOut" size={16} className="sm:text-lg text-gray-600 group-hover:text-red-600" />
                      <span className="text-xs sm:text-sm font-medium text-gray-700 group-hover:text-red-700">Logout</span>
                    </button>
                  </div>
                </div>) }
            </div>
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
                    <p className="text-lg text-gray-600">{me?.name || user?.name || 'STUDENT'}</p>
                  </div>
                </div>
              </div>

              {/* Stats Grid */}
              <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div className="bg-blue-50 border border-blue-200 rounded-lg p-4">
                  <div className="flex items-center gap-3">
                    <Icon name="UserRound" size={24} className="text-blue-600" />
                    <div>
                      <p className="text-2xl font-bold text-blue-900">{me?.student_id || '--'}</p>
                      <p className="text-sm text-blue-600">Student ID</p>
                    </div>
                  </div>
                </div>
                <div className="bg-green-50 border border-green-200 rounded-lg p-4">
                  <div className="flex items-center gap-3">
                    <Icon name="BookOpen" size={24} className="text-green-600" />
                    <div>
                      <p className="text-2xl font-bold text-green-900">{me?.course_code || '--'}</p>
                      <p className="text-sm text-green-600">Course</p>
                    </div>
                  </div>
                </div>
                <div className="bg-purple-50 border border-purple-200 rounded-lg p-4">
                  <div className="flex items-center gap-3">
                    <Icon name="GraduationCap" size={24} className="text-purple-600" />
                    <div>
                      <p className="text-2xl font-bold text-purple-900">{me?.department_code || '--'}</p>
                      <p className="text-sm text-purple-600">Department</p>
                    </div>
                  </div>
                </div>
                <div className="bg-orange-50 border border-orange-200 rounded-lg p-4">
                  <div className="flex items-center gap-3">
                    <Icon name="Shield" size={24} className="text-orange-600" />
                    <div>
                      <p className="text-2xl font-bold text-orange-900">{me?.status || '--'}</p>
                      <p className="text-sm text-orange-600">Status</p>
                    </div>
                  </div>
                </div>
              </div>

              {/* Course Information */}
              <div className="bg-white border border-border rounded-lg p-6">
                <h2 className="text-lg font-semibold text-gray-900 mb-4">Current Course Information</h2>
                <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                  <div>
                    <label className="block text-sm font-medium text-gray-700 mb-1">Course Code</label>
                    <p className="text-sm text-gray-900">{me?.course_code || '--'}</p>
                  </div>
                  <div>
                    <label className="block text-sm font-medium text-gray-700 mb-1">Course Name</label>
                    <p className="text-sm text-gray-900">{courseName || '--'}</p>
                  </div>
                  <div>
                    <label className="block text-sm font-medium text-gray-700 mb-1">Department</label>
                    <p className="text-sm text-gray-900">{me?.department_code || '--'}</p>
                  </div>
                  <div>
                    <label className="block text-sm font-medium text-gray-700 mb-1">Academic Year</label>
                    <p className="text-sm text-gray-900">2025-2026</p>
                  </div>
                </div>
              </div>
            </div>
          )}
          {active==='my-course' && (
            <Card title="My Course" subtitle="Course information">
              <div className="space-y-4">
                <div className="bg-blue-50 border border-blue-200 rounded-lg p-4">
                  <h3 className="text-lg font-semibold text-blue-900 mb-3">{courseName || (me?.course_code ? `Course ${me.course_code}` : 'No Course Assigned')}</h3>
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                    <div>
                      <p><strong>Course Code:</strong> {me?.course_code || '--'}</p>
                      <p><strong>Department:</strong> {me?.department_code || '--'}</p>
                    </div>
                    <div>
                      <p><strong>Status:</strong> {me?.status || '--'}</p>
                      <p><strong>Academic Year:</strong> 2025-2026</p>
                    </div>
                  </div>
                </div>
                
                <div className="bg-gray-50 border border-gray-200 rounded-lg p-4">
                  <h4 className="text-md font-semibold text-gray-900 mb-2">Student Information</h4>
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                    <div>
                      <p><strong>Student Number:</strong> {me?.student_id || '--'}</p>
                      <p><strong>Name:</strong> {me?.name || '--'}</p>
                    </div>
                    <div>
                      <p><strong>Status:</strong> {me?.status || '--'}</p>
                      <p><strong>Department:</strong> {me?.department_code || '--'}</p>
                    </div>
                  </div>
                </div>
              </div>
            </Card>
          )}
          {active==='profile' && (
            <div className="bg-white border border-border rounded-lg p-4 sm:p-6">
              <h2 className="text-lg font-semibold text-gray-900 mb-4">My Profile</h2>
              <StudentProfile 
                me={me}
                courseName={courseName}
                user={user}
                setActive={setActive}
                profileImage={profileImage}
                setProfileImage={setProfileImage}
                fileInputRef={fileInputRef}
                setPreviewUrl={setPreviewUrl}
              />
              <div className="mt-6"><PersonalInfoForm /></div>
            </div>
          )}

          {/* Change Password Section */}
          {active==='change-password' && (
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
                    onChange={e=>setPwdCurrent(e.target.value)}
                  />
                </div>
                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                  <input 
                    type="password"
                    placeholder="Enter new password"
                    className="w-full h-9 px-3 border rounded text-xs"
                    value={pwdNew}
                    onChange={e=>setPwdNew(e.target.value)}
                  />
                </div>
                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                  <input 
                    type="password"
                    placeholder="Confirm new password"
                    className="w-full h-9 px-3 border rounded text-xs"
                    value={pwdConfirm}
                    onChange={e=>setPwdConfirm(e.target.value)}
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
  const palette = { blue:['bg-blue-50','border-blue-200','text-blue-600','text-blue-900'], green:['bg-green-50','border-green-200','text-green-600','text-green-900'], purple:['bg-purple-50','border-purple-200','text-purple-600','text-purple-900'] }
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

function StudentProfile({ me, user, courseName, setActive, profileImage, setProfileImage, fileInputRef, setPreviewUrl }) {
  const initialName = me?.name || user?.user?.name || ''
  const initialEmail = me?.email || user?.user?.email || ''
  const [profile, setProfile] = useState({ name: initialName, email: initialEmail })
  const [saving, setSaving] = useState(false)

  useEffect(() => {
    let mounted = true
    ;(async () => {
      try {
        const resp = await api.get('/students/me')
        if (!mounted) return
        const data = (resp?.data && typeof resp.data === 'object' && 'data' in resp.data) ? resp.data.data : resp?.data
        setProfile({ name: data?.name || '', email: data?.email || '' })
        if (data?.avatar_url) {
          setProfileImage(data.avatar_url)
          try { localStorage.setItem('studentProfileImage', data.avatar_url) } catch {}
        }
      } catch {}
    })()
    return () => { mounted = false }
  }, [setProfileImage])
  const update = (k,v) => setProfile(p=>({...p,[k]:v}))
  const save = async () => {
    try {
      setSaving(true)
      await api.put('/students/me', { name: profile.name, email: profile.email })
      // Sync stored auth user fields
      try {
        const stored = JSON.parse(localStorage.getItem('auth') || 'null')
        if (stored?.user) {
          stored.user.name = profile.name
          stored.user.email = profile.email
        } else if (stored) {
          stored.name = profile.name
          stored.email = profile.email
        }
        if (stored) localStorage.setItem('auth', JSON.stringify(stored))
      } catch {}
      alert('Profile saved successfully.')
    } catch (e) {
      alert(e?.response?.data?.message || 'Failed to save profile')
    } finally {
      setSaving(false)
    }
  }
  
  return (
    <div className="space-y-4 max-w-sm">
      {/* Profile Picture Section */}
      <div className="flex items-center gap-4 mb-6">
        <div className="relative">
          <div className="w-20 h-20 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden">
            {profileImage ? (
              <img 
                src={profileImage} 
                alt="Profile" 
                className="w-full h-full object-cover"
              />
            ) : (
              <div className="w-full h-full bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center text-white text-xl font-bold">
                {(profile?.name || 'M').charAt(0).toUpperCase()}
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
              const tempUrl = URL.createObjectURL(file)
              setPreviewUrl(tempUrl)
              try {
                const form = new FormData()
                form.append('avatar', file)
                const { data } = await api.post('/students/me/avatar', form)
                if (data?.avatar_url) {
                  setProfileImage(data.avatar_url)
                  try {
                    localStorage.setItem('studentProfileImage', data.avatar_url)
                    const stored = JSON.parse(localStorage.getItem('auth') || 'null')
                    if (stored?.user) stored.user.avatar_url = data.avatar_url
                    else if (stored) stored.avatar_url = data.avatar_url
                    if (stored) localStorage.setItem('auth', JSON.stringify(stored))
                  } catch {}
                }
              } catch (err) {
                alert(err?.response?.data?.message || 'Failed to upload avatar')
              } finally {
                setTimeout(() => { try { URL.revokeObjectURL(tempUrl) } catch {} }, 1000)
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
        <input value={profile.name} onChange={e=>update('name', e.target.value)} className="w-full h-9 px-3 border rounded text-xs" />
      </div>
      <div>
        <label className="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input value={profile.email} onChange={e=>update('email', e.target.value)} className="w-full h-9 px-3 border rounded text-xs" />
      </div>
      <div>
        <label className="block text-sm font-medium text-gray-700 mb-1">Student Number</label>
        <input disabled value={me?.student_id || ''} className="w-full h-9 px-3 border rounded text-xs bg-gray-50" />
      </div>
      <div>
        <label className="block text-sm font-medium text-gray-700 mb-1">Course</label>
        <input disabled value={courseName || (me?.course_code || '')} className="w-full h-9 px-3 border rounded text-xs bg-gray-50" />
      </div>
      <div>
        <label className="block text-sm font-medium text-gray-700 mb-1">Status</label>
        <input disabled value={me?.status || ''} className="w-full h-9 px-3 border rounded text-xs bg-gray-50" />
      </div>
      <div className="flex gap-2 pt-4">
        <button onClick={save} disabled={saving} className="h-9 px-4 bg-blue-600 text-white rounded text-xs hover:bg-blue-700 transition-colors disabled:opacity-60">
          {saving ? 'Saving...' : 'Save Changes'}
        </button>
        <button onClick={() => setActive('change-password')} className="h-9 px-4 bg-green-600 text-white rounded text-xs hover:bg-green-700 transition-colors">Change Password</button>
      </div>
    </div>
  )
}

function PersonalInfoForm() {
  const [loading, setLoading] = useState(true)
  const [saving, setSaving] = useState(false)
  const [form, setForm] = useState({})

  useEffect(() => {
    let mounted = true
    ;(async () => {
      try {
        const resp = await api.get('/students/profile')
        const data = (resp?.data && typeof resp.data === 'object' && 'data' in resp.data) ? resp.data.data : resp?.data || {}
        if (!mounted) return
        setForm(data || {})
      } catch {
        setForm({})
      } finally {
        if (mounted) setLoading(false)
      }
    })()
    return () => { mounted = false }
  }, [])

  const u = (k, v) => setForm(prev => ({ ...prev, [k]: v }))

  const onSave = async () => {
    try {
      setSaving(true)
      await api.put('/students/profile', { data: form })
      alert('Personal information saved.')
    } catch (e) {
      alert(e?.response?.data?.message || 'Failed to save personal information')
    } finally {
      setSaving(false)
    }
  }

  if (loading) return <div className="text-sm text-gray-500">Loading personal information…</div>

  return (
    <div className="bg-white border border-border rounded-lg p-4 sm:p-6">
      <h3 className="text-md font-semibold text-gray-900 mb-4">Personal Information</h3>
      <div className="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs">
        <div>
          <label className="block text-gray-700 mb-1">Family Name</label>
          <input value={form.family_name || ''} onChange={e=>u('family_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Given Name</label>
          <input value={form.given_name || ''} onChange={e=>u('given_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Middle Name</label>
          <input value={form.middle_name || ''} onChange={e=>u('middle_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Gender</label>
          <select value={form.gender || ''} onChange={e=>u('gender', e.target.value)} className="w-full h-9 px-3 border rounded">
            <option value="">--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Blood Type</label>
          <input value={form.blood_type || ''} onChange={e=>u('blood_type', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Date of Birth (mm/dd/yyyy)</label>
          <input value={form.birth_date || ''} onChange={e=>u('birth_date', e.target.value)} className="w-full h-9 px-3 border rounded" placeholder="12/13/2003" />
        </div>
        <div className="md:col-span-2">
          <label className="block text-gray-700 mb-1">Place of Birth</label>
          <input value={form.birth_place || ''} onChange={e=>u('birth_place', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div className="md:col-span-2">
          <label className="block text-gray-700 mb-1">House#/Street Name & Barangay</label>
          <input value={form.address_line || ''} onChange={e=>u('address_line', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Region</label>
          <input value={form.region || ''} onChange={e=>u('region', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Province</label>
          <input value={form.province || ''} onChange={e=>u('province', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Municipality</label>
          <input value={form.municipality || ''} onChange={e=>u('municipality', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Religion</label>
          <input value={form.religion || ''} onChange={e=>u('religion', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Citizenship</label>
          <input value={form.citizenship || ''} onChange={e=>u('citizenship', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Contact Phone</label>
          <input value={form.phone || ''} onChange={e=>u('phone', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Mobile #</label>
          <input value={form.mobile || ''} onChange={e=>u('mobile', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div className="md:col-span-2">
          <label className="block text-gray-700 mb-1">Languages Spoken</label>
          <input value={form.languages || ''} onChange={e=>u('languages', e.target.value)} className="w-full h-9 px-3 border rounded" placeholder="English, Filipino, Cebuano" />
        </div>
        <div className="md:col-span-2">
          <label className="block text-gray-700 mb-1">Email</label>
          <input value={form.email || ''} onChange={e=>u('email', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
      </div>

      {/* Parent Profile */}
      <h3 className="text-md font-semibold text-gray-900 mt-8 mb-3">Parent Profile</h3>
      <div className="grid grid-cols-1 md:grid-cols-2 gap-6 text-xs">
        <div>
          <div className="font-semibold text-gray-800 mb-2">Mother</div>
          <div className="space-y-3">
            <div>
              <label className="block text-gray-700 mb-1">Maiden Name</label>
              <input value={form.mother_maiden_name || ''} onChange={e=>u('mother_maiden_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
            </div>
            <div>
              <label className="block text-gray-700 mb-1">First Name</label>
              <input value={form.mother_first_name || ''} onChange={e=>u('mother_first_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
            </div>
            <div>
              <label className="block text-gray-700 mb-1">Middle Name</label>
              <input value={form.mother_middle_name || ''} onChange={e=>u('mother_middle_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
            </div>
            <div>
              <label className="block text-gray-700 mb-1">Occupation</label>
              <input value={form.mother_occupation || ''} onChange={e=>u('mother_occupation', e.target.value)} className="w-full h-9 px-3 border rounded" />
            </div>
          </div>
        </div>
        <div>
          <div className="font-semibold text-gray-800 mb-2">Father</div>
          <div className="space-y-3">
            <div>
              <label className="block text-gray-700 mb-1">Family Name</label>
              <input value={form.father_family_name || ''} onChange={e=>u('father_family_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
            </div>
            <div>
              <label className="block text-gray-700 mb-1">Given Name</label>
              <input value={form.father_given_name || ''} onChange={e=>u('father_given_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
            </div>
            <div>
              <label className="block text-gray-700 mb-1">Middle Name</label>
              <input value={form.father_middle_name || ''} onChange={e=>u('father_middle_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
            </div>
            <div>
              <label className="block text-gray-700 mb-1">Occupation</label>
              <input value={form.father_occupation || ''} onChange={e=>u('father_occupation', e.target.value)} className="w-full h-9 px-3 border rounded" />
            </div>
          </div>
        </div>
      </div>

      <div className="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs mt-4">
        <div>
          <label className="block text-gray-700 mb-1">No. of Brother</label>
          <input value={form.siblings_brothers || ''} onChange={e=>u('siblings_brothers', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">No. of Sister</label>
          <input value={form.siblings_sisters || ''} onChange={e=>u('siblings_sisters', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div className="md:col-span-2">
          <label className="block text-gray-700 mb-1">Home Address: No. & Street</label>
          <input value={form.parent_address || ''} onChange={e=>u('parent_address', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">(Town / City)</label>
          <input value={form.parent_city || ''} onChange={e=>u('parent_city', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">(Province)</label>
          <input value={form.parent_province || ''} onChange={e=>u('parent_province', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Zip Code</label>
          <input value={form.parent_zip || ''} onChange={e=>u('parent_zip', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Mobile #</label>
          <input value={form.parent_mobile || ''} onChange={e=>u('parent_mobile', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
      </div>

      {/* Guardian */}
      <h3 className="text-md font-semibold text-gray-900 mt-8 mb-3">Guardian</h3>
      <div className="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs">
        <div>
          <label className="block text-gray-700 mb-1">Family Name</label>
          <input value={form.guardian_family_name || ''} onChange={e=>u('guardian_family_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Given Name</label>
          <input value={form.guardian_given_name || ''} onChange={e=>u('guardian_given_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Middle Name</label>
          <input value={form.guardian_middle_name || ''} onChange={e=>u('guardian_middle_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Relationship</label>
          <input value={form.guardian_relationship || ''} onChange={e=>u('guardian_relationship', e.target.value)} className="w-full h-9 px-3 border rounded" placeholder="Father / Mother / ..." />
        </div>
        <div className="md:col-span-2">
          <label className="block text-gray-700 mb-1">Others (specify)</label>
          <input value={form.guardian_relationship_other || ''} onChange={e=>u('guardian_relationship_other', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div className="md:col-span-2">
          <label className="block text-gray-700 mb-1">Home Address</label>
          <input value={form.guardian_home_address || ''} onChange={e=>u('guardian_home_address', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Contact Number(s) Phone</label>
          <input value={form.guardian_phone || ''} onChange={e=>u('guardian_phone', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Mobile #</label>
          <input value={form.guardian_mobile || ''} onChange={e=>u('guardian_mobile', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
      </div>

      {/* Spouse */}
      <h3 className="text-md font-semibold text-gray-900 mt-8 mb-3">Spouse</h3>
      <div className="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs">
        <div>
          <label className="block text-gray-700 mb-1">Family Name</label>
          <input value={form.spouse_family_name || ''} onChange={e=>u('spouse_family_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Given Name</label>
          <input value={form.spouse_given_name || ''} onChange={e=>u('spouse_given_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Middle Name</label>
          <input value={form.spouse_middle_name || ''} onChange={e=>u('spouse_middle_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">No. of Children</label>
          <input value={form.spouse_children || ''} onChange={e=>u('spouse_children', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div className="md:col-span-2">
          <label className="block text-gray-700 mb-1">Occupation</label>
          <input value={form.spouse_occupation || ''} onChange={e=>u('spouse_occupation', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
      </div>

      {/* Insurance */}
      <h3 className="text-md font-semibold text-gray-900 mt-8 mb-3">For Insurance Purposes</h3>
      <div className="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs">
        <div>
          <label className="block text-gray-700 mb-1">Who support/sponsor studies</label>
          <input value={form.insurance_sponsor || ''} onChange={e=>u('insurance_sponsor', e.target.value)} className="w-full h-9 px-3 border rounded" placeholder="Father / Mother / ..." />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Monthly Income of Parents/Sponsor</label>
          <select value={form.insurance_monthly_income || ''} onChange={e=>u('insurance_monthly_income', e.target.value)} className="w-full h-9 px-3 border rounded">
            <option value="">--</option>
            <option value="10,000 and below">10,000 and below</option>
            <option value="10,001-20,000">10,001-20,000</option>
            <option value="20,001 and above">20,001 and above</option>
          </select>
        </div>
      </div>
      <div className="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs mt-2">
        <div className="md:col-span-2 font-semibold text-gray-800">Name of Insurance Beneficiary/Breadwinner</div>
        <div>
          <label className="block text-gray-700 mb-1">Family Name</label>
          <input value={form.insurance_beneficiary_family_name || ''} onChange={e=>u('insurance_beneficiary_family_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Given Name</label>
          <input value={form.insurance_beneficiary_given_name || ''} onChange={e=>u('insurance_beneficiary_given_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Middle Name</label>
          <input value={form.insurance_beneficiary_middle_name || ''} onChange={e=>u('insurance_beneficiary_middle_name', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Date of Birth</label>
          <input value={form.insurance_beneficiary_dob || ''} onChange={e=>u('insurance_beneficiary_dob', e.target.value)} className="w-full h-9 px-3 border rounded" placeholder="mm/dd/yyyy" />
        </div>
      </div>

      {/* Academic Profile */}
      <h3 className="text-md font-semibold text-gray-900 mt-8 mb-3">Academic Profile</h3>
      <div className="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs">
        <div className="md:col-span-2 font-semibold text-gray-800">For Second Courser Only</div>
        <div>
          <label className="block text-gray-700 mb-1">Intended degree program</label>
          <select value={form.second_courser_program || ''} onChange={e=>u('second_courser_program', e.target.value)} className="w-full h-9 px-3 border rounded">
            <option value="">--</option>
            <option value="Graduate">Graduate</option>
            <option value="Baccalaureate">Baccalaureate</option>
            <option value="Law">Law</option>
            <option value="Voc-Tech">Voc-Tech</option>
          </select>
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Are you a working student?</label>
          <select value={String(form.working_student || '')} onChange={e=>u('working_student', e.target.value === 'true')} className="w-full h-9 px-3 border rounded">
            <option value="">--</option>
            <option value="true">Yes</option>
            <option value="false">No</option>
          </select>
        </div>
        <div className="md:col-span-2">
          <label className="block text-gray-700 mb-1">If yes, most recent employer (name and address)</label>
          <input value={form.recent_employer || ''} onChange={e=>u('recent_employer', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
      </div>

      <div className="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs mt-6">
        <div className="md:col-span-2 font-semibold text-gray-800">For Transferee Only</div>
        <div className="md:col-span-2">
          <label className="block text-gray-700 mb-1">Universities/Colleges attended (separate with commas)</label>
          <input value={form.transferee_schools || ''} onChange={e=>u('transferee_schools', e.target.value)} className="w-full h-9 px-3 border rounded" placeholder="School A, School B" />
        </div>
        <div className="md:col-span-2">
          <label className="block text-gray-700 mb-1">Years attended (align with schools, comma-separated)</label>
          <input value={form.transferee_years || ''} onChange={e=>u('transferee_years', e.target.value)} className="w-full h-9 px-3 border rounded" placeholder="2019-2020, 2020-2021" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Applied to FSUU before? Year of application</label>
          <input value={form.fsuu_applied_year || ''} onChange={e=>u('fsuu_applied_year', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Were you accepted?</label>
          <select value={String(form.fsuu_accepted || '')} onChange={e=>u('fsuu_accepted', e.target.value === 'true')} className="w-full h-9 px-3 border rounded">
            <option value="">--</option>
            <option value="true">Yes</option>
            <option value="false">No</option>
          </select>
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Did you attend?</label>
          <select value={String(form.fsuu_attended || '')} onChange={e=>u('fsuu_attended', e.target.value === 'true')} className="w-full h-9 px-3 border rounded">
            <option value="">--</option>
            <option value="true">Yes</option>
            <option value="false">No</option>
          </select>
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Year attended</label>
          <input value={form.fsuu_year_attended || ''} onChange={e=>u('fsuu_year_attended', e.target.value)} className="w-full h-9 px-3 border rounded" />
        </div>
      </div>

      {/* Additional Information */}
      <h3 className="text-md font-semibold text-gray-900 mt-8 mb-3">Additional Information</h3>
      <div className="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs">
        <div>
          <label className="block text-gray-700 mb-1">Are you a member of an Indigenous Peoples?</label>
          <div className="flex gap-2">
            <select value={String(form.ip_member || '')} onChange={e=>u('ip_member', e.target.value === 'true')} className="h-9 px-3 border rounded">
              <option value="">--</option>
              <option value="true">Yes</option>
              <option value="false">No</option>
            </select>
            <input value={form.ip_tribe || ''} onChange={e=>u('ip_tribe', e.target.value)} className="flex-1 h-9 px-3 border rounded" placeholder="Tribe" />
          </div>
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Are you dependent on a single/solo parent?</label>
          <select value={String(form.single_parent_dependent || '')} onChange={e=>u('single_parent_dependent', e.target.value === 'true')} className="w-full h-9 px-3 border rounded">
            <option value="">--</option>
            <option value="true">Yes</option>
            <option value="false">No</option>
          </select>
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Do you have a disability?</label>
          <div className="flex gap-2">
            <select value={String(form.disability || '')} onChange={e=>u('disability', e.target.value === 'true')} className="h-9 px-3 border rounded">
              <option value="">--</option>
              <option value="true">Yes</option>
              <option value="false">No</option>
            </select>
            <input value={form.disability_type || ''} onChange={e=>u('disability_type', e.target.value)} className="flex-1 h-9 px-3 border rounded" placeholder="Type" />
          </div>
        </div>
        <div>
          <label className="block text-gray-700 mb-1">Are you a student with special needs?</label>
          <div className="flex gap-2">
            <select value={String(form.special_needs || '')} onChange={e=>u('special_needs', e.target.value === 'true')} className="h-9 px-3 border rounded">
              <option value="">--</option>
              <option value="true">Yes</option>
              <option value="false">No</option>
            </select>
            <input value={form.special_needs_specify || ''} onChange={e=>u('special_needs_specify', e.target.value)} className="flex-1 h-9 px-3 border rounded" placeholder="Please specify" />
          </div>
        </div>
      </div>
      <div className="flex gap-2 mt-4">
        <button onClick={onSave} disabled={saving} className="h-9 px-4 bg-blue-600 text-white rounded text-xs hover:bg-blue-700 transition-colors disabled:opacity-60">
          {saving ? 'Saving…' : 'Save changes'}
        </button>
      </div>
    </div>
  )
}
