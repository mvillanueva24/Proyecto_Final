<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/libros', [BookController::class, 'show']);

Route::get('/admin/libros/create', [BookController::class, 'show_create']);
Route::post('/admin/libros/create', [BookController::class, 'store'])->name('user.create'); 

Route::get('admin/usuarios', [UserController::class, 'show']);

Route::get('admin/categorias', function () {
    return view('categorias');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

