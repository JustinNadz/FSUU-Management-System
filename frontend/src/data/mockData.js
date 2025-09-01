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

export const faculty = [
  { id: 'T001', name: 'June Baldueza', dept: 'CCS', status: 'Active' },
  { id: 'T002', name: 'Ana Cruz', dept: 'CCS', status: 'Active' },
  { id: 'T010', name: 'Marco Reyes', dept: 'CBA', status: 'Inactive' }
]

export const students = [
  { studentNumber: '23100000758', name: 'Maria Luna Santos', course: 'BSIT', dept: 'CCS', status: 'Active' },
  { studentNumber: '23100000111', name: 'Janelle Mae Dela Cruz', course: 'BSIT', dept: 'CCS', status: 'Active' },
  { studentNumber: '23100000999', name: 'Kyle Miguel Ramos', course: 'BSCS', dept: 'CCS', status: 'Active' },
  { studentNumber: '23100000444', name: 'Peter John Dizon', course: 'BSBA', dept: 'CBA', status: 'Inactive' }
]

// Simple sample class assignments for teachers
export const teacherClasses = [
  {
    teacherId: 'T001',
    classId: 'IT101-A',
    subject: 'Introduction to IT',
    schedule: 'MWF 09:00-10:00',
    room: 'Lab 1',
    units: 3,
    studentNumbers: ['23100000758','23100000111','23100000999']
  }
]
