import React from 'react'
import { BrowserRouter, Routes as RouterRoutes, Route, Navigate } from 'react-router-dom'
import ProtectedRoute from './components/ProtectedRoute'
import ScrollToTop from './components/ScrollToTop'
import ErrorBoundary from './components/ErrorBoundary'
import NotFound from './pages/not-found'
import DesignSystemOverviewDashboard from './pages/design-system-overview-dashboard'
import AdminDashboard from './pages/admin-dashboard'
import Login from './pages/login'
import ResetPassword from './pages/reset-password'
import { isAuthenticated, getUser } from './utils/auth'
import FacultyDashboard from './pages/faculty-dashboard'
import StudentDashboard from './pages/student-dashboard'
import LMSDashboard from './pages/lms-dashboard'
import TeacherDashboard from './pages/teacher-dashboard'

export default function Routes() {
  return (
    <BrowserRouter>
      <ErrorBoundary>
        <ScrollToTop />
        <RouterRoutes>
          {/* Always use /login for the login page; redirect root to /login to avoid duplicated component mount differences */}
          <Route path="/" element={<Navigate to="/login" replace />} />
          <Route path="/login" element={<Login />} />
          <Route path="/reset-password" element={<ResetPassword />} />
          <Route path="/admin-dashboard" element={<ProtectedRoute roles={['admin']}><AdminDashboard /></ProtectedRoute>} />
          <Route path="/admin-dashboard/:section" element={<ProtectedRoute roles={['admin']}><AdminDashboard /></ProtectedRoute>} />
          <Route path="/faculty-dashboard" element={<ProtectedRoute roles={['faculty']}><FacultyDashboard /></ProtectedRoute>} />
          <Route path="/faculty-dashboard/:section" element={<ProtectedRoute roles={['faculty']}><FacultyDashboard /></ProtectedRoute>} />
          <Route path="/student-dashboard" element={<ProtectedRoute roles={['student']}><StudentDashboard /></ProtectedRoute>} />
          <Route path="/student-dashboard/:section" element={<ProtectedRoute roles={['student']}><StudentDashboard /></ProtectedRoute>} />
          <Route path="/lms-dashboard" element={<ProtectedRoute><LMSDashboard /></ProtectedRoute>} />
          <Route path="/lms-dashboard/:section" element={<ProtectedRoute><LMSDashboard /></ProtectedRoute>} />
          <Route path="/teacher-dashboard" element={<ProtectedRoute><TeacherDashboard /></ProtectedRoute>} />
          <Route path="/teacher-dashboard/:section" element={<ProtectedRoute><TeacherDashboard /></ProtectedRoute>} />
          <Route path="/teacher-dashboards" element={<ProtectedRoute><TeacherDashboard /></ProtectedRoute>} />
          <Route path="/teacher-dashboards/:section" element={<ProtectedRoute><TeacherDashboard /></ProtectedRoute>} />
          <Route path="/design-system-overview-dashboard" element={<DesignSystemOverviewDashboard />} />
          <Route path="*" element={<NotFound />} />
        </RouterRoutes>
      </ErrorBoundary>
    </BrowserRouter>
  )
}