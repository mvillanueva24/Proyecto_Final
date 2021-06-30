<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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
    return view('cliente.index');
});

Route::get('/admin/user', [UserController::class, 'index'])->name('usuarios');
Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('user/{user}',[UserController::class, 'update'])->name('users.update');
Route::get('user/{user}',[UserController::class, 'destroy'])->name('users.delete');
Route::get('admin/user/create',[UserController::class, 'create'])->name('users.create');
Route::post('admin/user/store',[UserController::class, 'store'])->name('users.store');

Route::get('/admin/libros', [BookController::class, 'show'])->name('showBooks');
Route::get('/admin/libros/create', [BookController::class, 'create'])->name('books.create');
Route::post('/admin/libros/store', [BookController::class, 'store'])->name('books.store');
Route::get('/admin/libros/destroy/{id}', [BookController::class, 'destroy']);
Route::get('/admin/libros/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
Route::post('/admin/libros/edit/libro/{id}',[BookController::class, 'update'])->name('books.update');

Route::get('/admin/categorias', [CategoryController::class, 'show'])->name('showCategory');
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/admin/category/{id}', [CategoryController::class, 'deleteCategory']);
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/admin/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');

Route::get('/cliente', function () {
    return view('cliente.index');
});

Route::get('/cliente/shop', [BookController::class, 'show_books']);

/*
Route::get('/cliente/shop', function () {
    return view('cliente.shop');
});
*/
Route::get('/cliente/contact', function () {
    return view('cliente.contact');
});

Route::get('/cliente/prueba1', function () {
    return view('cliente.prueba1');
});

Route::get('/cliente/prueba2', function () {
    return view('cliente.prueba2');
});

Route::get('/cliente/register', function () {
    return view('cliente.register');
});

Route::get('/cliente/team', function () {
    return view('cliente.team');
});

Route::get('/cliente/sale', function () {
    return view('cliente.sale');
});

Route::get('/cliente/login', function () {
    return view('cliente.login');
});

//Falta automatizar
Route::get('cliente/accion', [BookController::class, 'show_accion_books']);

Route::get('cliente/terror', [BookController::class, 'show_terror_books']);

Route::get('cliente/cuento', [BookController::class, 'show_cuento_books']);

Route::get('cliente/drama', [BookController::class, 'show_drama_books']);

Route::get('cliente/juvenil', [BookController::class, 'show_juvenil_books']);

Route::get('cliente/literatura', [BookController::class, 'show_literatura_books']);

Route::get('cliente/single', [BookController::class, 'shopBook']); 

Route::get('cliente/shop/book/{id}', [BookController::class, 'shopBook'])->name('shop.book');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

