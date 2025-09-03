import api from './api'

const DEMO_CREDENTIALS = {
  // Student Account
  student: {
    studentNumber: '23100000758',
    password: '20031213',
    role: 'student'
  },
  // Teacher Account
  teacher: {
    teacherId: 'T001',
    password: 'teacher2024',
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
    
    // Check if it's a student login
    const isStudentValid =
      String(id) === DEMO_CREDENTIALS.student.studentNumber &&
      String(pwd) === DEMO_CREDENTIALS.student.password

    // Check if it's a teacher login
    const isTeacherValid =
      String(id) === DEMO_CREDENTIALS.teacher.teacherId &&
      String(pwd) === DEMO_CREDENTIALS.teacher.password

    // Check if it's an admin login
    const isAdminValid =
      String(id) === DEMO_CREDENTIALS.admin.adminId &&
      String(pwd) === DEMO_CREDENTIALS.admin.password

    if (isStudentValid) {
      const auth = {
        studentNumber: DEMO_CREDENTIALS.student.studentNumber,
        role: 'student',
        name: 'MARIA LUNA SANTOS'
      }
      localStorage.setItem('auth', JSON.stringify(auth))
      return { ok: true, auth }
    }

    if (isTeacherValid) {
      const auth = {
        teacherId: DEMO_CREDENTIALS.teacher.teacherId,
        role: 'teacher',
        name: 'JUNE BALDUEZA'
      }
      localStorage.setItem('auth', JSON.stringify(auth))
      return { ok: true, auth }
    }

    if (isAdminValid) {
      const auth = {
        adminId: DEMO_CREDENTIALS.admin.adminId,
        role: 'admin',
        name: 'SYSTEM ADMINISTRATOR'
      }
      localStorage.setItem('auth', JSON.stringify(auth))
      return { ok: true, auth }
    }

    // Try API login as fallback
    const payload = id.includes('@')
      ? { email: id, password: pwd }
      : { username: id, password: pwd }
    const { data } = await api.post('/login', payload)
    const auth = { token: data.token, user: data.user, role: data.user.role || 'user' }
    localStorage.setItem('auth', JSON.stringify(auth))
    return { ok: true, auth }
  } catch (e) {
    console.warn('Login failed', e?.response || e)
    return { ok: false, error: e.response?.data?.message || 'Login failed' }
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