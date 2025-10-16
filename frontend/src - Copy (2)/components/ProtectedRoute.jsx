import React from 'react'
import { Navigate } from 'react-router-dom'
import { isAuthenticated, getUser } from '../utils/auth'
import api from '../utils/api'

export default function ProtectedRoute({ children, roles }) {
  const authed = isAuthenticated()
  if (!authed) return <Navigate to="/login" replace />
  const stored = getUser()
  const role = stored?.role
  const user = stored?.user || stored
  if (user?.status && String(user.status).toLowerCase() !== 'active' && String(role).toLowerCase() !== 'admin') {
    try { localStorage.removeItem('auth') } catch {}
    return <Navigate to="/login" replace />
  }
  if (roles && roles.length > 0 && !roles.includes(role)) return <Navigate to="/login" replace />
  return children
}


