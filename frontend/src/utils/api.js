import axios from 'axios'

const api = axios.create({
  baseURL: import.meta.env.VITE_API_BASE_URL || 'http://localhost:8000/api',
  headers: { 'Accept': 'application/json' },
  withCredentials: true,
  timeout: 10000
})

api.interceptors.request.use(cfg => {
  const auth = JSON.parse(localStorage.getItem('auth') || 'null')
  if (auth?.token) cfg.headers.Authorization = `Bearer ${auth.token}`
  // Debug: log minimal request info (omit in production)
  if (import.meta.env.DEV) console.log('[API request]', cfg.method?.toUpperCase(), cfg.url, cfg.data)
  return cfg
})

api.interceptors.response.use(
  res => {
    if (import.meta.env.DEV) console.log('[API response]', res.config.url, res.status)
    return res
  },
  err => {
    if (import.meta.env.DEV) console.warn('[API error]', err.config?.url, err.response?.status, err.response?.data)
    if (err?.response?.status === 401 || err?.response?.status === 403) {
      try { localStorage.removeItem('auth') } catch {}
      // optional: redirect to login if in browser context
      if (typeof window !== 'undefined') window.location.replace('/login')
    }
    return Promise.reject(err)
  }
)

export default api

// CSRF helper for Sanctum cookie-based auth
export async function ensureCsrfCookie() {
  try {
    const base = (api.defaults.baseURL || '').replace(/\/$/, '')
    const root = base.endsWith('/api') ? base.slice(0, -4) : base
    const csrfUrl = `${root}/sanctum/csrf-cookie`
    await axios.get(csrfUrl, { withCredentials: true })
  } catch (e) {
    if (import.meta.env.DEV) console.warn('CSRF init failed', e?.response || e)
    throw e
  }
}
