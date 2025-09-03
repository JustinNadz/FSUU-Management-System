import React from 'react'
import { BrowserRouter, Routes as RouterRoutes, Route, Navigate } from 'react-router-dom'
import ScrollToTop from './components/ScrollToTop'
import ErrorBoundary from './components/ErrorBoundary'
import NotFound from './pages/not-found'
import DesignSystemOverviewDashboard from './pages/design-system-overview-dashboard'
<<<<<<< HEAD
import AdminDashboard from './pages/admin-dashboard'
import Login from './pages/login'
import ResetPassword from './pages/reset-password'
import { isAuthenticated, getUser } from './utils/auth'
import FacultyDashboard from './pages/faculty-dashboard'
import StudentDashboard from './pages/student-dashboard'
=======
import LMSDashboard from './pages/lms-dashboard'
import TeacherDashboard from './pages/teacher-dashboard'
import AdminDashboard from './pages/admin-dashboard'
import Login from './pages/login'
import ResetPassword from './pages/reset-password'
import { isAuthenticated } from './utils/auth'
>>>>>>> 0b4e87f ( frontend)

export default function Routes() {
  return (
    <BrowserRouter>
      <ErrorBoundary>
        <ScrollToTop />
        <RouterRoutes>
<<<<<<< HEAD
          {/* Always use /login for the login page; redirect root to /login to avoid duplicated component mount differences */}
          <Route path="/" element={<Navigate to="/login" replace />} />
          <Route path="/login" element={<Login />} />
          <Route path="/reset-password" element={<ResetPassword />} />
          <Route path="/admin-dashboard" element={isAuthenticated() && getUser()?.role==='admin' ? <AdminDashboard /> : <Navigate to="/login" replace />} />
          <Route path="/admin-dashboard/:section" element={isAuthenticated() && getUser()?.role==='admin' ? <AdminDashboard /> : <Navigate to="/login" replace />} />
          <Route path="/faculty-dashboard" element={isAuthenticated() && getUser()?.role==='faculty' ? <FacultyDashboard /> : <Navigate to="/login" replace />} />
          <Route path="/faculty-dashboard/:section" element={isAuthenticated() && getUser()?.role==='faculty' ? <FacultyDashboard /> : <Navigate to="/login" replace />} />
          <Route path="/student-dashboard" element={isAuthenticated() && getUser()?.role==='student' ? <StudentDashboard /> : <Navigate to="/login" replace />} />
          <Route path="/student-dashboard/:section" element={isAuthenticated() && getUser()?.role==='student' ? <StudentDashboard /> : <Navigate to="/login" replace />} />
=======
          <Route path="/" element={<Login />} />
          <Route path="/login" element={<Login />} />
          <Route path="/reset-password" element={<ResetPassword />} />
          <Route path="/lms-dashboard" element={isAuthenticated() ? <LMSDashboard /> : <Navigate to="/login" replace />} />
          <Route path="/lms-dashboard/:section" element={isAuthenticated() ? <LMSDashboard /> : <Navigate to="/login" replace />} />
          <Route path="/teacher-dashboard" element={isAuthenticated() ? <TeacherDashboard /> : <Navigate to="/login" replace />} />
          <Route path="/teacher-dashboard/:section" element={isAuthenticated() ? <TeacherDashboard /> : <Navigate to="/login" replace />} />
          <Route path="/admin-dashboard" element={isAuthenticated() ? <AdminDashboard /> : <Navigate to="/login" replace />} />
          <Route path="/admin-dashboard/:section" element={isAuthenticated() ? <AdminDashboard /> : <Navigate to="/login" replace />} />
>>>>>>> 0b4e87f ( frontend)
          <Route path="/design-system-overview-dashboard" element={<DesignSystemOverviewDashboard />} />
          <Route path="*" element={<NotFound />} />
        </RouterRoutes>
      </ErrorBoundary>
    </BrowserRouter>
  )
}

