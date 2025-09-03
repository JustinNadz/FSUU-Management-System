// Static mock data for development (no backend yet)
// You can replace this later with API calls.

export const departments = [
  { code: 'CCS', name: 'College of Computer Studies', status: 'Active' },
  { code: 'CBA', name: 'College of Business Administration', status: 'Active' },
  { code: 'CAS', name: 'College of Arts & Sciences', status: 'Active' }
]

export const courses = [
  { code: 'BSIT', name: 'BS Information Technology', dept: 'CCS', status: 'Active' },
  { code: 'BSCS', name: 'BS Computer Science', dept: 'CCS', status: 'Active' },
  { code: 'BSBA', name: 'BS Business Administration', dept: 'CBA', status: 'Active' }
]

export const academicYears = [
  { year: '2024-2025', status: 'Inactive' },
  { year: '2025-2026', status: 'Active' }
]

// Added back student & faculty mock data for admin modules

export const faculty = [
  { id: 1, employeeNo: 'F-001', name: 'Juan Dela Cruz', department: 'CCS', status: 'Active' },
  { id: 2, employeeNo: 'F-002', name: 'Maria Santos', department: 'CBA', status: 'Active' },
  { id: 3, employeeNo: 'F-003', name: 'Pedro Reyes', department: 'CAS', status: 'Inactive' }
]

export const students = [
  { id: 1, studentNo: 'S-2025-001', name: 'Anna Flores', course: 'BSIT', department: 'CCS', yearLevel: 1, status: 'Active' },
  { id: 2, studentNo: 'S-2025-002', name: 'Ben Cruz', course: 'BSIT', department: 'CCS', yearLevel: 2, status: 'Active' },
  { id: 3, studentNo: 'S-2025-003', name: 'Carla Mendoza', course: 'BSCS', department: 'CCS', yearLevel: 3, status: 'Active' },
  { id: 4, studentNo: 'S-2025-004', name: 'David Garcia', course: 'BSBA', department: 'CBA', yearLevel: 1, status: 'Inactive' }
]

