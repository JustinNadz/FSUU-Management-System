// Admin credentials are now provided via environment variables (Vite):
//   VITE_ADMIN_ID
//   VITE_ADMIN_PASSWORD
// Create a .env file (or use real backend auth) instead of hardcoding demo credentials.

const ADMIN_ID = (import.meta.env.VITE_ADMIN_ID || 'admin').trim()
const ADMIN_PASSWORD = (import.meta.env.VITE_ADMIN_PASSWORD || 'admin123').trim()

// Faculty demo credentials (Juan Dela Cruz - employee F-001)
const FACULTY_EMP_NO = 'F-001'
const FACULTY_PASSWORD = (import.meta.env.VITE_FACULTY_F001_PASSWORD || 'juan123').trim()

// Student demo credentials (Anna Flores - student S-2025-001)
const STUDENT_ID = 'S-2025-001'
const STUDENT_PASSWORD = (import.meta.env.VITE_STUDENT_S2025_001_PASSWORD || 'anna123').trim()

export function signIn(identifier, password) {
  const userId = String(identifier || '').trim()
  const pass = String(password || '').trim()

  if (userId === ADMIN_ID && pass === ADMIN_PASSWORD) {
    const auth = { userId: ADMIN_ID, role: 'admin', name: 'SYSTEM ADMINISTRATOR' }
    localStorage.setItem('auth', JSON.stringify(auth))
    return { ok: true, auth }
  }
  if (userId === FACULTY_EMP_NO && pass === FACULTY_PASSWORD) {
    const auth = { userId: FACULTY_EMP_NO, role: 'faculty', name: 'Juan Dela Cruz' }
    localStorage.setItem('auth', JSON.stringify(auth))
    return { ok: true, auth }
  }
  if (userId === STUDENT_ID && pass === STUDENT_PASSWORD) {
    const auth = { userId: STUDENT_ID, role: 'student', name: 'Anna Flores' }
    localStorage.setItem('auth', JSON.stringify(auth))
    return { ok: true, auth }
  }
  return { ok: false, error: 'Invalid credentials' }
}

export function signOut() {
  localStorage.removeItem('auth')
}

export function isAuthenticated() {
  try {
    return Boolean(JSON.parse(localStorage.getItem('auth') || 'null'))
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


