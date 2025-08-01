# Student & Faculty Profile Management System

A comprehensive web-based application designed to store, manage, and update personal and academic/professional profiles of students and faculty members within a school, college, or university.

## Features

### System Modules

1. **Dashboard**
   - Total number of students and faculty
   - Charts: number of students per course and number of faculty per department
   - Recent activity overview

2. **My Profile**
   - Can edit signed in profile
   - Can log out signed in profile

3. **System Settings**
   - Can add, edit, and archived course information
   - Can add, edit, and archived department information
   - Can add, edit, and archived academic year information

4. **Students**
   - Can add, edit, and archived student information
   - Can filter student by course and department
   - Can search student

5. **Faculty**
   - Can add, edit, and archived faculty member information
   - Can filter faculty member by department
   - Can search faculty member

6. **Reports**
   - Can generate reports filter by course for the students
   - Can generate reports filter by department for the faculty

## Database Schema

The system uses a normalized database design that satisfies 1NF, 2NF, and 3NF:

### Tables
- `users` - User authentication and roles
- `departments` - Academic departments
- `faculty` - Faculty member profiles
- `students` - Student profiles
- `courses` - Course information
- `faculty_courses` - Faculty-course assignments
- `student_courses` - Student course enrollments
- `reports` - System reports

## Installation

### Prerequisites
- PHP 7.4 or higher
- Composer
- MySQL/MariaDB
- Web server (Apache/Nginx)

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd student-faculty-system
   ```

2. **Install dependencies**
   ```bash
   composer install --ignore-platform-req=ext-fileinfo
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database**
   Edit `.env` file and set your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=student_faculty_system
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Run migrations**
   ```bash
   php artisan migrate
   ```

6. **Seed the database**
   ```bash
   php artisan db:seed
   ```

7. **Start the development server**
   ```bash
   php artisan serve
   ```

## Default Login Credentials

After running the seeder, you can login with:

### Admin User
- Username: `admin`
- Password: `password`
- Role: Administrator

### Faculty User
- Username: `faculty`
- Password: `password`
- Role: Faculty

### Student User
- Username: `student`
- Password: `password`
- Role: Student

## System Requirements

- **PHP**: 7.4 or higher
- **Laravel**: 7.x
- **Database**: MySQL 5.7+ or MariaDB 10.2+
- **Web Server**: Apache/Nginx
- **Extensions**: 
  - BCMath PHP Extension
  - Ctype PHP Extension
  - JSON PHP Extension
  - Mbstring PHP Extension
  - OpenSSL PHP Extension
  - PDO PHP Extension
  - Tokenizer PHP Extension
  - XML PHP Extension

## Database Normalization

The system's database design follows proper normalization:

### 1NF (First Normal Form) ✅
- All tables have primary keys
- All attributes contain atomic values
- Each column contains a single value
- No duplicate rows

### 2NF (Second Normal Form) ✅
- Already in 1NF
- All non-key attributes are fully dependent on the entire primary key
- No partial dependencies

### 3NF (Third Normal Form) ✅
- Already in 2NF
- No transitive dependencies
- Non-key attributes don't depend on other non-key attributes

## Technology Stack

- **Backend**: Laravel 7.x
- **Frontend**: Bootstrap 5, Chart.js
- **Database**: MySQL/MariaDB
- **Authentication**: Laravel's built-in authentication
- **Charts**: Chart.js for data visualization

## Security Features

- Password hashing using bcrypt
- CSRF protection
- SQL injection prevention through Eloquent ORM
- Input validation and sanitization
- Role-based access control

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests if applicable
5. Submit a pull request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For support and questions, please contact the development team or create an issue in the repository.
