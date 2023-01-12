<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
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
Auth::routes();
Route::get('/home', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/logout', function () {
    return redirect('')->with(Auth::logout());
});
Route::get('/riedlentes', function () {
    return view('index');
});
Route::middleware(['auth', 'Administratorius'])->group(function () {
    Route::get('/admin', function () {
        return view('admin/index');
    })->name('admin');;
    Route::post('/database', function () {
        return view('admin/database');
    })->name('database');;
});

//Auth::routes();
//Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



