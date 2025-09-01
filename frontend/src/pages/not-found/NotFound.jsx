import React from 'react'
import { Link } from 'react-router-dom'

export default function NotFound() {
  return (
    <div className="min-h-screen flex flex-col items-center justify-center gap-6 text-center p-6">
      <div>
        <h1 className="text-6xl font-bold text-gray-800 dark:text-gray-100">404</h1>
        <p className="mt-4 text-lg text-gray-600 dark:text-gray-300">The page you are looking for doesn’t exist or was moved.</p>
      </div>
      <div className="flex gap-4">
        <Link
          to="/"
          className="px-5 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors text-sm font-medium"
        >
          Go to Login
        </Link>
        <Link
          to="/admin-dashboard"
          className="px-5 py-2 rounded-md bg-gray-200 dark:bg-gray-700 dark:text-gray-100 text-gray-800 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors text-sm font-medium"
        >
          Dashboard
        </Link>
      </div>
    </div>
  )
}
