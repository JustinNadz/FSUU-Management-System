## Backend (Laravel API)

This is the Laravel 8 backend API for the FSUU Management System.

### Tech Stack
Laravel 8, Sanctum (token auth), MySQL, PHP 7.4.

### Setup
```bash
composer install
cp .env.example .env   # if needed
# configure DB, FRONTEND_URL, SANCTUM_STATEFUL_DOMAINS
php artisan key:generate
php artisan migrate --seed
php artisan serve --host=127.0.0.1 --port=8000
```

### Auth Endpoints
| Method | Path        | Body / Headers                         | Description        |
|--------|-------------|----------------------------------------|--------------------|
| POST   | /api/login  | { username/email, password }           | Issue token        |
| GET    | /api/me     | Authorization: Bearer <token>          | Current user info  |
| POST   | /api/logout | Authorization: Bearer <token>          | Revoke current token |

Accepted identifiers: email, name (admin), employee_no (faculty), student_id (student).

### Seeded Demo Users
| Role    | Identifier  | Password  |
|---------|-------------|-----------|
| admin   | admin       | admin123  |
| faculty | F-001       | juan123   |
| student | S-2025-001  | anna123   |

Emails also available: admin@example.com, faculty_f001@example.com, student_s2025_001@example.com

### Key Files
- `app/Http/Controllers/API/AuthController.php` – multi-identifier login + token issuance
- `app/Models/User.php` – Sanctum `HasApiTokens` and extra fillable fields
- `database/seeders/AdminUserSeeder.php`, `FacultyStudentSeeder.php` – demo users
- `database/migrations/*add_role*`, `*add_faculty_student_identifiers*` – schema extensions
- `config/cors.php` – dynamic CORS origins via FRONTEND_URL / FRONTEND_URLS

### Relevant .env Variables
```
FRONTEND_URL=http://localhost:5173
SANCTUM_STATEFUL_DOMAINS=localhost:5173
SESSION_DOMAIN=localhost
```
Optional multi-origin:
```
FRONTEND_URLS=http://localhost:5173,http://127.0.0.1:5173
```

### Development Tips
- If login returns 422 from CLI, ensure JSON body is properly formed (PowerShell: use a hashtable piped to ConvertTo-Json).
- CORS issues: confirm browser origin matches FRONTEND_URL exactly (protocol/host/port).
- To reseed users: `php artisan migrate:fresh --seed` (WARNING: wipes data).

### Next Enhancements
- Role-based route groups & policies
- Real persistence for dashboard data (currently mock on frontend)
- Password reset / email verification
- PHPUnit & feature tests
- Docker & CI pipeline

### License
MIT
