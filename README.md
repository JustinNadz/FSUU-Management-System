# FSUU Management System

Monorepo containing:
- **backend/** Laravel 8 API with Sanctum token authentication.
- **frontend/** React + Vite SPA (Tailwind, Ant Design) consuming the API.

## Features
- User roles: admin, faculty, student
- Login with email, username (name), employee_no (faculty), student_id (students)
- Sanctum personal access tokens (Bearer)
- Seeded demo accounts
- Dynamic CORS origin configuration (`FRONTEND_URL` / `FRONTEND_URLS`)
- Extended users table: role, employee_no, student_id

## Quick Start
Prerequisites: PHP 7.4+, Composer, Node 18+, MySQL 8+

```bash
# Backend
cd backend
cp .env.example .env  # if not present
# edit DB credentials then:
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve --host=127.0.0.1 --port=8000

# Frontend (new terminal)
cd frontend
npm install
npm run dev
```
Open http://localhost:5173/login

## Demo Accounts
| Role    | Identifier      | Password |
|---------|-----------------|----------|
| admin   | admin           | admin123 |
| faculty | F-001           | juan123  |
| student | S-2025-001      | anna123  |

You can also login with the seeded emails (admin@example.com, faculty_f001@example.com, student_s2025_001@example.com).

## Environment Variables
Backend `.env` additions:
```
FRONTEND_URL=http://localhost:5173
SANCTUM_STATEFUL_DOMAINS=localhost:5173
SESSION_DOMAIN=localhost
```
Multiple origins (optional):
```
FRONTEND_URLS=http://localhost:5173,http://127.0.0.1:5173
```
Frontend `.env`:
```
VITE_API_BASE_URL=http://localhost:8000/api
```

## Authentication Flow
1. Frontend sends POST /api/login with `{ username|email , password }`.
2. Backend `AuthController@login` accepts identifier (email, name, employee_no, student_id) & password.
3. On success returns `{ token, user }`.
4. Frontend stores in `localStorage.auth` and sets Authorization header `Bearer <token>` on each API request (see `src/utils/api.js`).
5. Logout: POST /api/logout invalidates current token.

## Key Backend Files
- `app/Http/Controllers/API/AuthController.php` – custom multi-identifier login & token issue.
- `app/Models/User.php` – includes Sanctum `HasApiTokens` + extra fillables.
- `database/migrations/*add_role*` & `*add_faculty_student_identifiers*` – schema changes.
- `database/seeders/AdminUserSeeder.php`, `FacultyStudentSeeder.php` – demo users.
- `config/cors.php` – dynamic origin handling.

## Key Frontend Files
- `src/utils/api.js` – Axios instance with token interceptor.
- `src/utils/auth.js` – signIn/signOut helpers.
- `src/pages/login/Login.jsx` – login form + redirect logic.
- `src/Routes.jsx` – central route definitions (root redirects to /login).

## Common Issues & Fixes
- 422 missing fields during CLI tests: ensure JSON body properly quoted in PowerShell (use hashtable | ConvertTo-Json).
- CORS error: confirm `FRONTEND_URL` matches the exact protocol/host/port you open in browser.
- Stuck on /login after successful login: hard refresh; ensured canonical route redirect implemented.

## Next Steps (Suggested Enhancements)
- Add role-based middleware on protected API routes.
- Replace mock dashboard data with real API endpoints.
- Implement password reset & profile update endpoints.
- Add automated tests (PHPUnit & React component tests).
- Dockerize for consistent local dev.

## License
MIT (framework components under their respective licenses)

---
Generated project README – update as features evolve.
