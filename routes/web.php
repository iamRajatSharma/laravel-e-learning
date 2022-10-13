<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


Route::get('/', [UserController::class, 'index']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/faq', [UserController::class, 'faq']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
Route::get('/courses', [UserController::class, 'courses']);
Route::get('/course_details', [UserController::class, 'course_details']);
Route::get('/error', [UserController::class, 'error']);
Route::get('/blog', [UserController::class, 'blog']);
Route::get('/blog_details', [UserController::class, 'blog_details']);
Route::get('/forgot_password', [UserController::class, 'forgot_password']);




// admin urls
// admin urls get methods
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/error', [AdminController::class, 'error']);
Route::get('/admin/forgot_password', [AdminController::class, 'forgot_password']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/view_category', [AdminController::class, 'view_category']);
Route::get('/admin/add_category', [AdminController::class, 'add_category']);
Route::get('/admin/edit_category/{id}', [AdminController::class, 'edit_category']);
Route::get('/admin/delete_category/{id}', [AdminController::class, 'delete_category']);
Route::get('/admin/add_course', [AdminController::class, 'add_course']);
Route::get('/admin/view_course', [AdminController::class, 'view_course']);
Route::get('/admin/enrolled', [AdminController::class, 'enrolled']);
Route::get('/admin/review', [AdminController::class, 'review']);
Route::get('/admin/report_course', [AdminController::class, 'report_course']);
Route::get('/admin/report_student', [AdminController::class, 'report_student']);
Route::get('/admin/logout', [AdminController::class, 'logout']);

// admin urls post methods
// Route::post('/admin/save_category', [AdminController::class, 'save_category']);
// Route::post('/admin/update_category', [AdminController::class, 'update_category']);
// Route::post('/admin/save_course', [AdminController::class, 'save_course']);
