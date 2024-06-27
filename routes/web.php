<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\UserRoleController;
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


Route::get('/', [AuthController::class,'load_login']);
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');


// ********** administrator Routes *********
Route::group(['prefix' => 'administrator','middleware'=>['web','isAdministrator']],function(){
    Route::get('/dashboard',[AdministratorController::class,'dashboard'])->name('administrator.dashboard');
    // ==============start-employee create====================
    Route::get('/employee-list',[AdministratorController::class,'employee_index'])->name('administrator.employee.list');
    Route::get('/employee-create',[AdministratorController::class,'employee_create'])->name('administrator.employee.create');
    Route::post('/employee-store',[AdministratorController::class,'employee_store'])->name('administrator.employee.store');
            // ***********file-uploads**********
    Route::post('/employee-file-upload-1',[AdministratorController::class,'employee_file_upload_1'])->name('administrator.employee.fileUpload.1');
    Route::post('/employee-file-upload-2',[AdministratorController::class,'employee_file_upload_2'])->name('administrator.employee.fileUpload.2');
    Route::post('/employee-file-upload-3',[AdministratorController::class,'employee_file_upload_3'])->name('administrator.employee.fileUpload.3');
    Route::post('/employee-file-upload-4',[AdministratorController::class,'employee_file_upload_4'])->name('administrator.employee.fileUpload.4');
    Route::post('/employee-file-upload-5',[AdministratorController::class,'employee_file_upload_5'])->name('administrator.employee.fileUpload.5');
    Route::post('/employee-file-upload-6',[AdministratorController::class,'employee_file_upload_6'])->name('administrator.employee.fileUpload.6');

    // ==============end-employee create====================


    // ==============start-application create====================
    Route::get('/application-list',[AdministratorController::class,'application_index'])->name('administrator.application.list');
    Route::get('/application-create',[AdministratorController::class,'application_create'])->name('administrator.application.create');
    Route::post('/application-store',[AdministratorController::class,'application_store'])->name('administrator.application.store');
    // ==============end-application create====================

    // ==============start-department create====================
    Route::get('/department-list',[DepartmentController::class,'department_index'])->name('administrator.department.list');
    Route::get('/department-create',[DepartmentController::class,'department_create'])->name('administrator.department.create');
    Route::post('/department-store',[DepartmentController::class,'department_store'])->name('administrator.department.store');
    // ==============end-department create====================

    // ==============start-designation create====================
    Route::get('/designation-list',[DesignationController::class,'designation_index'])->name('administrator.designation.list');
    Route::get('/designation-create',[DesignationController::class,'designation_create'])->name('administrator.designation.create');
    Route::post('/designation-store',[DesignationController::class,'designation_store'])->name('administrator.designation.store');
    // ==============end-designation create====================

    // ==============start-leave_type create====================
    Route::get('/leave_type-list',[AdministratorController::class,'leave_type_index'])->name('administrator.leave_type.list');
    Route::get('/leave_type-create',[AdministratorController::class,'leave_type_create'])->name('administrator.leave_type.create');
    Route::post('/leave_type-store',[AdministratorController::class,'leave_type_store'])->name('administrator.leave_type.store');
    // ==============end-leave_type create====================

     // ==============start-user create====================
     Route::get('/user-list',[UserRoleController::class,'user_index'])->name('administrator.user.list');
     Route::get('/user-create',[UserRoleController::class,'user_create'])->name('administrator.user.create');
     Route::post('/user-store',[UserRoleController::class,'user_store'])->name('administrator.user.store');
     // ==============end-user create====================

     Route::get('/reports',[AdministratorController::class,'reports'])->name('administrator.reports');


});

// ********** supervisor Routes ***
Route::group(['prefix' => 'supervisor','middleware'=>['web','isSupervisor']],function(){
    Route::get('/dashboard',[SupervisorController::class,'dashboard'])->name('supervisor.dashboard');
});

// ********** employee Routes ********
Route::group(['prefix' => 'employee','middleware'=>['web','isEmployee']],function(){
    Route::get('/dashboard',[EmployeeController::class,'dashboard'])->name('employee.dashboard');
});





























//