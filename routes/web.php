<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CustomerdashboardController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::view('/', 'auth.login')->name('home');
// Route::view('/admin', 'admin.admin')->name('admin_dashboard');
// Route::view('/customer', 'customer.customer')->name('customer_dashboard');
Route::middleware('guest')->group(function () {
//register
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register']);

// login
Route::view('/','auth.login')->name('login');
Route::view('/login','auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
//dashboard Controller
Route::get('/admin_dashboard',[DashboardController::class, 'admin'])->name('admin_dash');
    Route::get('/admin_users',[DashboardController::class, 'admin_users'])->name('admin_users');
        //display users
        Route::get('/admin_users', [UserController::class, 'index'])->name('admin_users');
            Route::get('/admin_user_information/{id}', [UserController::class, 'admin_show_information'])->name('admin_user.information');
            Route::get('/admin_user_view_information/{id}', [UserController::class, 'admin_user_view_information'])->name('admin_user.view.information');
        //add user route
        Route::get('/admin_register', [DashboardController::class, 'admin_register_page'])->name('admin_registerpage');
        //post admin add a user
        Route::post('/admin_register_user', [DashboardController::class, 'admin_register_user'])->name('admin_add_user');
            //get the id from users
            
           
    Route::get('/admin_transactions',[DashboardController::class, 'admin_transactions'])->name('admin_transactions');
        //display transactions
        Route::get('/admin_transactions', [TransactionController::class, 'index'])->name('admin_transactions');
        //resource in transactions to generate 7 routes :)
        Route::resource('transaction', TransactionController::class);
        Route::get('/transaction/create/{id}', [TransactionController::class, 'create'])->name('transaction.create');

Route::get('/encoder_dashboard',[DashboardController::class, 'encoder'])->name('encoder_dash');
Route::get('/customer_dashboard',[DashboardController::class, 'customer'])->name('customer_dash');
    //customer 
        Route::get('/customer_transactions',[CustomerdashboardController::class, 'customer_transactions'])->name('customer_transactions');
});
//Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

