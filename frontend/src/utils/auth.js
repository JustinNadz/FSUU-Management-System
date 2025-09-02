import api from './api'

export async function signIn(identifier, password) {
  try {
    const id = (identifier || '').trim()
    const pwd = (password || '').trim()
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
  try { return Boolean(JSON.parse(localStorage.getItem('auth') || 'null')?.token) } catch { return false }
}

export function getUser() {
  try { return JSON.parse(localStorage.getItem('auth') || 'null')?.user || null } catch { return null }
}

export function getRole() { return getUser()?.role || null }


