<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// admin controller
Route::get('admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('admin/all_user', [AdminController::class, 'all_user']);

// group's crud operation --> admin controller
Route::get('admin/all_groups', [AdminController::class, 'all_groups']);
Route::get('admin/approve/{userId}', [AdminController::class, 'approve']);
Route::get('admin/group_approval/{userId}', [AdminController::class, 'group_approval']);
Route::get('/group_info/{id}', [AdminController::class, 'group_info']);
Route::post('/update_group/{id}', [AdminController::class, 'update_group']);
Route::get('/delete_group/{id}', [AdminController::class, 'delete_group']);


// instructor crud operation --> admin controller
Route::get('admin/instructor', [AdminController::class, 'instructor']);
Route::get('/delete_instructor/{id}', [AdminController::class, 'delete_instructor']);
Route::get('/edit_instructor/{id}', [AdminController::class, 'edit_instructor']);
Route::post('/update_instructor/{id}', [AdminController::class, 'update_instructor']);

// student crud operation --> admin controller
Route::get('admin/student', [AdminController::class, 'student']);
Route::get('/delete_student/{id}', [AdminController::class, 'delete_student']);
Route::get('/edit_student/{id}', [AdminController::class, 'edit_student']);
Route::post('/update_student/{id}', [AdminController::class, 'update_student']);

// auth controller
Route::get('admin/add_admin', [AuthController::class, 'add_admin']);
// this is a login form for supervisor and admin
Route::post('admin/admin-register', [AuthController::class, 'adminRegister']);
Route::get('admin/login', [AuthController::class, 'admin_login']);
Route::post('admin/adminLogin', [AuthController::class, 'adminLogin']);

// Route::get('supervisor/login', [AuthController::class, 'supervisor_login']);
Route::get('supervisor/register', [AuthController::class, 'supervisor_register']);
Route::post('supervisor/super-register', [AuthController::class, 'superRegister']);
Route::post('supervisor/SuperLogin', [AuthController::class, 'SuperLogin']);

Route::get('student/register', [AuthController::class, 'student_register']);
Route::get('student/login', [AuthController::class, 'student_login']);
Route::post('student/registration', [AuthController::class, 'studentRegistration']);
Route::post('student/loginForm',[AuthController::class,'loginForm']);


Route::middleware(['LoggedIn'])->group(function () {

    Route::middleware(['Teacher'])->group(function () {
        Route::get('supervisor/student', [SupervisorController::class, 'student']);
    });
    Route::middleware(['Admin'])->group(function () {
        Route::get('admin/all_groups', [AdminController::class, 'all_groups']);
    });
    Route::get('student/group', [StudentController::class, 'group']);
});

// supervisor controller
Route::get('supervisor/dashboard', [SupervisorController::class, 'dashboard']);
Route::get('supervisor/group_info', [SupervisorController::class, 'group_info']);
Route::get('supervisor/completed', [SupervisorController::class, 'completed']);
Route::get('supervisor/running', [SupervisorController::class, 'running']);
Route::get('supervisor/student', [SupervisorController::class, 'student']);
Route::get('/new_task/{id}', [SupervisorController::class, 'new_task']);
Route::post('/crate_assignment', [SupervisorController::class, 'create_assignment']);

Route::get('/completed_group_info/{id}', [SupervisorController::class, 'completed_group_info']);
Route::get('/running_group_info/{id}', [SupervisorController::class, 'running_group_info']);
Route::get('/assignment_info/{id}', [SupervisorController::class, 'assignment_info']);
// Route::get('/new_task/{id}', [SupervisorController::class, 'new_task']);

Route::get('/view_ans/{id}',[SupervisorController::class,'view']);


// student controller
Route::get('student/dashboard', [StudentController::class, 'dashboard']);
Route::get('student/group', [StudentController::class, 'group']);
Route::get('student/assignment', [StudentController::class, 'assignment']);
Route::get('student/create_group', [StudentController::class, 'create_group']);
Route::get('/view/{id}', [StudentController::class, 'view']);
Route::get('student/addMember', [StudentController::class, 'addMember']);

Route::post('student/newGroup', [StudentController::class, 'newGroup']);
Route::post('student/add_members', [StudentController::class, 'add_members']);

Route::post('/submit_assignment/{id}', [StudentController::class, 'submit_assignment']);
