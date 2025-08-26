<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Test route to show system is working
Route::get('/test', function () {
    return view('test');
});

// Authentication Routes
Route::get('/login', 'AuthController@showLogin')->name('login');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout')->name('logout');

// Message Routes
Route::get('/messages', 'MessageController@index')->name('messages.index');
Route::get('/messages/compose', 'MessageController@compose')->name('messages.compose');
Route::post('/messages', 'MessageController@store')->name('messages.store');
Route::get('/messages/draft', 'MessageController@draft')->name('messages.draft');
Route::get('/messages/sent', 'MessageController@sent')->name('messages.sent');
Route::get('/messages/trash', 'MessageController@trash')->name('messages.trash');
Route::delete('/messages/{id}', 'MessageController@destroy')->name('messages.destroy');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    // Root route - redirect based on user role
    Route::get('/', function () {
        if (Auth::user()->role == 'student') {
            return redirect()->route('section.offering');
        } elseif (Auth::user()->role == 'faculty') {
            return redirect()->route('faculty.dashboard');
        } else {
            return redirect()->route('dashboard');
        }
    });
    
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/faculty-dashboard', 'DashboardController@facultyDashboard')->name('faculty.dashboard');
    Route::get('/section-offering', 'DashboardController@sectionOffering')->name('section.offering');
    
    // Registration Route
    Route::get('/registration', 'RegistrationController@index')->name('registration.index');
    
    // Student Routes
    Route::resource('students', 'StudentController');
    
    // Faculty Routes
    Route::resource('faculty', 'FacultyController');
    
    // Course Routes
    Route::resource('courses', 'CourseController');
    
    // Department Routes
    Route::resource('departments', 'DepartmentController');
    
    // Report Routes
    Route::resource('reports', 'ReportController');
    
    // Attendance Routes
    Route::resource('attendance', 'AttendanceController');
    Route::get('/attendance/student/{studentId}', 'AttendanceController@byStudent')->name('attendance.by-student');
    Route::get('/attendance/course/{courseId}', 'AttendanceController@byCourse')->name('attendance.by-course');
    
    // System Settings Routes
    Route::resource('system-settings', 'SystemSettingController');
    Route::get('/system-settings/get/{name}', 'SystemSettingController@getSetting')->name('system-settings.get');
    Route::put('/system-settings/update/{name}', 'SystemSettingController@updateSetting')->name('system-settings.update');
    
    // Academic Calendar Routes
    Route::resource('academic-calendar', 'AcademicCalendarController');
    Route::get('/academic-calendar/student/{studentId}', 'AcademicCalendarController@byStudent')->name('academic-calendar.by-student');
    Route::get('/academic-calendar/year/{yearId}', 'AcademicCalendarController@byYear')->name('academic-calendar.by-year');
    Route::get('/academic-calendar/view/calendar', 'AcademicCalendarController@calendar')->name('academic-calendar.calendar');
    
    // Course Prerequisites Routes
    Route::resource('course-prerequisites', 'CoursePrerequisiteController');
    
    // Admin Log Routes
    Route::get('/admin-logs', 'AdminLogController@index')->name('admin-logs.index');
    
    // Login History Routes
    Route::get('/login-history', 'LoginHistoryController@index')->name('login-history.index');
    Route::get('/login-history/user/{userId}', 'LoginHistoryController@byUser')->name('login-history.by-user');
    
    // Academic Year API Routes
    Route::prefix('api/academic-years')->group(function () {
        Route::get('/', 'AcademicYearController@index');
        Route::post('/', 'AcademicYearController@store');
        Route::get('/{academicYear}', 'AcademicYearController@show');
        Route::put('/{academicYear}', 'AcademicYearController@update');
        Route::delete('/{academicYear}', 'AcademicYearController@destroy');
        Route::post('/{academicYear}/set-current', 'AcademicYearController@setCurrent');
    });
});
