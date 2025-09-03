import axios from 'axios'

const api = axios.create({
  baseURL: import.meta.env.VITE_API_BASE_URL || 'http://localhost:8000/api',
  headers: { 'Accept': 'application/json' },
  // withCredentials not needed for pure token auth; removing avoids any cookie-origin edge cases
  withCredentials: false,
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
    return Promise.reject(err)
  }
)

export default api
