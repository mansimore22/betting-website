<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WithdrawalController;
use App\Http\Controllers\client\HomeController;


// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/id', [HomeController::class, 'id'])->name('id');
Route::prefix('client')->group(function () {
    Route::get('/loginform', [LoginController::class, 'create'])->name('loginform');
    Route::post('/sendOtp', [LoginController::class, 'sendOtp'])->name('sendOtp');
    Route::post('/verify-otp', [LoginController::class, 'verifyOtp']);
    Route::post('/resend-otp', [LoginController::class, 'resendOtp']);
});

// Protected routes
Route::middleware(['auth.alert'])->group(function () {
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/withdrawal', [HomeController::class, 'withdrawal'])->name('withdrawal');
    Route::get('/passbook', [HomeController::class, 'passbook'])->name('passbook');
    
    // Route::post('/deposite', [DepositController::class, 'storeDeposit'])->name('deposite');
    Route::get('withdraw', [WithdrawalController::class, 'showWithdrawForm'])->name('withdraw.form');
    Route::post('withdraw', [WithdrawalController::class, 'withdraw'])->name('withdraw');
    Route::post('/deposits/store', [DepositController::class, 'store'])->name('deposits.store');
});










//-------------------------------------------------Admin part-------------------------------------------------//
Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('signIn');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    // Protected Admin Routes
    Route::middleware(['auth', 'checkAdmin'])->group(function () {
        // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        //------------------------Banner---------------------------------//
    });
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/bannerlist', [BannerController::class, 'index'])->name('banner.List');
Route::get('/create', [BannerController::class, 'create'])->name('create.banner');
Route::post('/addbanner', [BannerController::class, 'store'])->name('banner.store');
Route::get('/banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
Route::put('/banner/update/{id}', [BannerController::class, 'update'])->name('updatebanner');
Route::delete('/banner/{id}', [BannerController::class, 'destroy'])->name('banner.delete');
// --------------------------------------------------------------------------------------------------------//


// cache clear and optimize
Route::get('/refresh', function () {
    // Artisan::call('optimize');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return back();
})->name('refresh');

























// Route::prefix('client')->group(function () {
// Route::get('/login', [EmployeeAuthController::class, 'showLoginForm'])->name('clientloginform');
// Route::post('/login', [EmployeeAuthController::class, 'login'])->name('clientlogin');
// Route::post('/logout', [EmployeeAuthController::class, 'logout'])->name('clientlogout');
// });















// // Employee Dashboard with Middleware
// Route::middleware(['checkEmployee'])->group(function () {
//     Route::get('/employee/dashboard', [DashboardController::class, 'client'])->name('employee.dashboard');

//     // Leave Routes
//     Route::get('/Leave/list', [LeaveController::class, 'index'])->name('list_leave');
//     Route::get('/Leave/create', [LeaveController::class, 'create'])->name('add_leave');
//     Route::post('/Leave/store', [LeaveController::class, 'store'])->name('store_leave');
//     Route::get('/Leave/edit/{id}', [LeaveController::class, 'edit'])->name('edit_leave');
//     Route::post('/Leave/update/{id}', [LeaveController::class, 'update'])->name('update_leave');
//     Route::get('/Leave/destroy/{id}', [LeaveController::class, 'destroy'])->name('delete_leave');
//     Route::get('/Leave/csv', [LeaveController::class, 'exportCsv'])->name('leave.export.csv');
//     Route::get('/Leave/reportpdf', [LeaveController::class, 'exportPdf'])->name('leave.export.pdf');

//     // Attendance Routes
//     Route::get('/attendance/list', [AttendanceController::class, 'index'])->name('attendance.index');
//     Route::get('/attendance/create', [AttendanceController::class, 'create'])->name('add_attendance');
//     Route::post('/attendance/store', [AttendanceController::class, 'store'])->name('store_attendance');
//     Route::get('/attendance/edit/{id}', [AttendanceController::class, 'edit'])->name('edit_attendance');
//     Route::put('/attendance/update/{id}', [AttendanceController::class, 'update'])->name('update_attendance');
//     Route::delete('/attendance/destroy/{id}', [AttendanceController::class, 'destroy'])->name('delete_attendance');
//     Route::get('/attendance/csv', [AttendanceController::class, 'exportCsv'])->name('attendance.export.csv');
//     Route::get('/attendance/reportpdf', [AttendanceController::class, 'exportPdf'])->name('attendance.export.pdf');
// });
