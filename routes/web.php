<?php

use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DashboardController as BackendDashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\QuotationController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\TransactionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// frontend Route

Route::get('/login',[LoginController::class,'login'])->name('frontend.login');
Route::post('/login/store',[LoginController::class,'sto'])->name('customer.login');
Route::get('/logout',[LoginController::class,'logout'])->name('customer.logout');
Route::get('/registration',[LoginController::class,'registration'])->name('frontend.registration');
Route::post('/registration/store',[LoginController::class,'store'])->name('registration.store');
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/dashboard',[DashboardController::class,'index'])->name('frontend.dashboard');


// admin prefix
Route::group(['prefix'=>'admin'],function(){
Route::get('backend/dashboard',[BackendDashboardController::class,'dashboard'])->name('backend.dashboard');
Route::get('backend/transaction',[TransactionController::class,'transac'])->name('backend.transaction');
Route::get('transaction/form',[TransactionController::class,'transacform'])->name('transaction.form');
Route::post('transaction/store',[TransactionController::class,'store'])->name('transaction.store');
Route::get('/transaction/edit/{id}',[BackendDashboardController::class,'edit'])->name('transaction.edit');
Route::post('/transaction/update/{id}',[BackendDashboardController::class,'update'])->name('transaction.update');

// Quotation Route

// customer backend
Route::get('/backend/customer',[CustomerController::class,'customer'])->name('backend.customer');

// team
Route::get('/backend/team',[TeamController::class,'team'])->name('backend.team');
Route::get('/team/from',[TeamController::class,'form'])->name('team.form');
Route::post('/team/store',[TeamController::class,'store'])->name('team.store');


});
