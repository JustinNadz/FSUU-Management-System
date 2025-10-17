## FSUU Management System

### Quick Start

1. Copy envs and configure:
   - Backend: `cp backend/.env.example backend/.env` then set DB creds and `FRONTEND_URL`, `SANCTUM_STATEFUL_DOMAINS`.
   - Frontend: `cp frontend/.env.example frontend/.env` and adjust `VITE_API_BASE_URL`.
2. Docker: `docker compose up -d --build`
3. Local dev:
   - Backend: `cd backend && composer install && php artisan key:generate && php artisan migrate --seed && php artisan serve`
   - Frontend: `cd frontend && npm install && npm run dev`

### Auth
- Laravel Sanctum SPA with stateful middleware enabled; CORS reads `FRONTEND_URL(S)` and supports credentials.
- Login: POST `/api/login` ({ email/password or username/password })

### Frontend
- Vite React app with route guards and 401 auto-logout redirect.

### Quality & CI
- ESLint/Prettier (`npm run lint`, `npm run format`)
- GitHub Actions CI for backend and frontend builds.

### Testing
- Backend: PHPUnit feature tests (`backend/tests/Feature/AuthTest.php`).
- Frontend: Vitest + RTL (`npm run test`).

### Observability
- Backend: optional Sentry (`SENTRY_LARAVEL_DSN`), dev-only Telescope (toggle `TELESCOPE_ENABLED=true`).
- Frontend: optional Sentry (`VITE_SENTRY_DSN`).

yawa
