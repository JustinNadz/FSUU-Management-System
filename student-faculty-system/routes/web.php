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

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/faculty-dashboard', 'DashboardController@facultyDashboard')->name('faculty.dashboard');
    Route::get('/student-dashboard', 'DashboardController@studentDashboard')->name('student.dashboard');
    
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
    
    // System Settings Route
    Route::get('/system-settings', function() {
        return view('system-settings');
    })->name('system.settings');
    
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
