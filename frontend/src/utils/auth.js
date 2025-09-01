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

export function signIn(identifier, password) {
  // Check if it's a student login
  const isStudentValid =
    String(identifier).trim() === DEMO_CREDENTIALS.student.studentNumber &&
    String(password).trim() === DEMO_CREDENTIALS.student.password

  // Check if it's a teacher login
  const isTeacherValid =
    String(identifier).trim() === DEMO_CREDENTIALS.teacher.teacherId &&
    String(password).trim() === DEMO_CREDENTIALS.teacher.password

  // Check if it's an admin login
  const isAdminValid =
    String(identifier).trim() === DEMO_CREDENTIALS.admin.adminId &&
    String(password).trim() === DEMO_CREDENTIALS.admin.password

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

  return { ok: false }
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


