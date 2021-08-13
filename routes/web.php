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


Route::get('login', function(){
    return view('login');
});

Route::get('memberlist', function(){
    return view('member');
});

Route::get('manpower',function(){
    return view('manpower');
});

Route::get('store',function(){
    return view('store');
});


Auth::routes();

// Route::get('/', [HomeController::class, 'login'])->name('login');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/efranchise', [HomeController::class, 'efranchise'])->name('efranchise');
Route::get('/rider', [HomeController::class, 'rider'])->name('rider');
Route::get('/payoutprocessing', [HomeController::class, 'payoutprocessing'])->name('payoutprocessing');
Route::get('/reports', [HomeController::class, 'reports'])->name('reports');