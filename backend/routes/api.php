<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\StudentController;
use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\ReportController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Authentication endpoints
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/me', [AuthController::class, 'me']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

// Student self-profile
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/students/me', [StudentController::class, 'me']);
    Route::put('/students/me', [StudentController::class, 'updateMe']);
    Route::post('/students/me/avatar', [StudentController::class, 'uploadAvatar']);
    Route::post('/profile/change-password', [StudentController::class, 'changePassword']);
    // Detailed student personal profile
    Route::get('/students/profile', [StudentController::class, 'getProfile']);
    Route::put('/students/profile', [StudentController::class, 'updateProfile']);
    // Generic profile endpoints usable by faculty/admin as well
    Route::get('/profile/me', [StudentController::class, 'me']);
    Route::put('/profile/me', [StudentController::class, 'updateMe']);
    Route::post('/profile/me/avatar', [StudentController::class, 'uploadAvatar']);

    // Admin management endpoints (could be further protected via policies)
    Route::get('/admin/students', [AdminController::class, 'listStudents']);
    Route::post('/admin/students', [AdminController::class, 'createStudent']);
    Route::put('/admin/students/{user}', [AdminController::class, 'updateStudent']);
    Route::post('/admin/students/{user}/archive', [AdminController::class, 'archiveStudent']);
    Route::post('/admin/students/{user}/restore', [AdminController::class, 'restoreStudent']);

    Route::get('/admin/faculty', [AdminController::class, 'listFaculty']);
    Route::post('/admin/faculty', [AdminController::class, 'createFaculty']);
    Route::put('/admin/faculty/{user}', [AdminController::class, 'updateFaculty']);
    Route::post('/admin/faculty/{user}/archive', [AdminController::class, 'archiveFaculty']);
    Route::post('/admin/faculty/{user}/restore', [AdminController::class, 'restoreFaculty']);

    // CSV reports
    Route::get('/reports/faculty.csv', [ReportController::class, 'faculty']);
    Route::get('/reports/students.csv', [ReportController::class, 'students']);

    // Settings: departments, courses, academic years
    Route::post('/admin/departments', [AdminController::class, 'createDepartment']);
    Route::post('/admin/courses', [AdminController::class, 'createCourse']);
    Route::post('/admin/academic-years', [AdminController::class, 'createAcademicYear']);
    Route::get('/admin/departments', [AdminController::class, 'listDepartments']);
    Route::get('/admin/courses', [AdminController::class, 'listCourses']);
    Route::get('/admin/academic-years', [AdminController::class, 'listAcademicYears']);
});
