<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
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
    return redirect('/login');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('admin.dashboard');
});

Route::get('/login', function () {
    return Inertia('auth/Login');
})->name('login');


Route::get('/register', function () {
    return Inertia('auth/Register');
})->name('login');