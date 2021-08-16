<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});
Route::get('/', function(){
    return view('auth.login');
});
Route::get('efranchiseelist', function(){
    return view('efranchise');
});

Route::get('memberlist', function(){
    return view('member');
});

Route::get('manpower',function(){
    return view('manpower');
});
Route::get('rider',function(){
    return view('rider');
});

Route::get('store',function(){
    return view('store');
});
Route::get('payoutprocessing',function(){
    return view('payoutprocessing');
});
Route::get('reports',function(){
    return view('reports');
});
Route::get('dashboard',function(){
    return view('dashboard');
});

Auth::routes();

// Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

