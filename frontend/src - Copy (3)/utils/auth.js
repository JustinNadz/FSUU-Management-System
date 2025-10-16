import api, { ensureCsrfCookie } from './api'

const DEMO_CREDENTIALS = {
  // Student Account
  student: {
    studentNumber: '23100000758',
    password: 'anna123',
    role: 'student'
  },
  // Teacher Account
  teacher: {
    teacherId: 'T-001',
    password: 'juan123',
    role: 'teacher'
  },
  // Admin Account
  admin: {
    adminId: 'admin',
    password: 'admin123',
    role: 'admin'
  }
}

export async function signIn(identifier, password) {
  try {
    const id = (identifier || '').trim()
    const pwd = (password || '').trim()
    
    // Try API login first
    const payload = id.includes('@') ? { email: id, password: pwd } : { username: id, password: pwd }
    // Initialize CSRF cookie for Sanctum when using proxy
    await ensureCsrfCookie()
    const resp = await api.post('/login', payload)
    const data = resp?.data || {}
    const token = data?.token || data?.access_token || data?.data?.token || 'session'
    const userPayload = data?.user?.data || data?.user || data?.data?.user || null
    if (!token && !userPayload) throw new Error('Invalid login response')
    const safeUser = userPayload || { name: (identifier || 'USER').toString(), role: (userPayload?.role) || 'user' }
    let auth = { token, user: safeUser, role: safeUser.role || 'user' }
    // Heuristic role inference when backend doesn't return role immediately
    const lowerId = (identifier || '').toString().toLowerCase()
    if (!auth.role || auth.role === 'user') {
      if (lowerId === 'admin' || safeUser?.email === 'admin@example.com' || safeUser?.name?.toLowerCase() === 'admin') {
        auth.role = 'admin'
      }
    }
    // Try to fetch fresh user to resolve accurate role from backend
    try {
      const me = await api.get('/me')
      const meUser = me?.data
      if (meUser) {
        const prevRole = (auth.role || '').toLowerCase()
        const resolvedRole = meUser.role || auth.role
        auth = { token, user: meUser, role: prevRole === 'admin' ? 'admin' : resolvedRole }
        const s = meUser?.status ? String(meUser.status).toLowerCase() : 'active'
        if (s !== 'active' && (auth.role || '').toLowerCase() !== 'admin') {
          return { ok: false, error: 'Account is inactive. Please contact the administrator.' }
        }
      }
    } catch (e) {
      if (e?.response?.status === 403) {
        return { ok: false, error: e?.response?.data?.message || 'Account is inactive. Please contact the administrator.' }
      }
    }

    // Final enforcement: if identifier is 'admin', force role to admin
    if (id.toLowerCase() === 'admin') {
      auth.role = 'admin'
      if (auth.user) auth.user.role = 'admin'
    }
    localStorage.setItem('auth', JSON.stringify(auth))
    return { ok: true, auth }
  } catch (e) {
    console.warn('Login failed', e?.response || e)
    return { ok: false, error: e?.response?.data?.message || 'Login failed' }
  }
}

export async function signOut() {
  try {
    const stored = JSON.parse(localStorage.getItem('auth') || 'null')
    if (stored?.token) await api.post('/logout')
  } catch {}
  localStorage.removeItem('auth')
}

export function isAuthenticated() {
  try {
    const stored = JSON.parse(localStorage.getItem('auth') || 'null')
    return Boolean(stored && stored.token)
  } catch {
    return false
  }
}

export function getUser() {
  try {
    return JSON.parse(localStorage.getItem('auth') || 'null')
  } catch {
    return null
  }
}

export function getRole() { 
  return getUser()?.role || null 
}