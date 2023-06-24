<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminBooksController;
use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);
// Route::get('/home/show_home', [HomeController::class, 'show_home']);
// Route::get('/home/table', [HomeController::class, 'table']);
// Route::get('/home/form', [HomeController::class, 'form']);
// Route::get('home/books',[HomeController::class, 'books']);
Route::resource('/books',BooksController::class);
Route::post('/books', [BooksController::class, 'store']);
Route::post('/form', [PinjamController::class, 'store']);
Route::get('/admin-home', [AdminHomeController::class, 'index']);
Route::get('/', [AdminHomeController::class, 'index']);
Route::get('/admin-books', [AdminBooksController::class, 'index']);
Route::get('/admin-user', [UserController::class, 'index_admin']);
Route::get('/admin-books/create', [AdminBooksController::class, 'index_create'])->name('books-create');
// Route::post('/admin-books', [AdminBooksController::class, 'store']);
Route::resource('/admin-edit',AdminBooksController::class);
Route::post('/add-books', [AdminBooksController::class, 'store'])->name('books.store');
Route::delete('/{book}', [AdminBooksController::class, 'destroy'])->name('books.destroy');
// Route::put('/admin-books/{id}/edit', [AdminBooksController::class, 'edit'])->name('books.edit');
// Route::delete('/{id}', [AdminBooksController::class, 'destroy'])->name('books.destroy');

Route::get('/admin-books/{id}/edit', [AdminBooksController::class, 'edit'])->name('books.edit');
Route::put('/admin-books/{id}', [AdminBooksController::class, 'update'])->name('admin-books.update');
Route::delete('/admin-user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

// DATA USER
Route::get('/admin-user', [UserController::class, 'index_admin']);
Route::get('/admin-user/create', [UserController::class, 'index_create'])->name('user-create');
// Route::post('/admin-books', [AdminBooksController::class, 'store']);
Route::resource('/admin-edit-user',UserController::class);
Route::post('/add-user', [UserController::class, 'store'])->name('user.store');
// Route::delete('/{user}', [UserController::class, 'destroy'])->name('user.destroy');
// Route::put('/admin-books/{id}/edit', [AdminBooksController::class, 'edit'])->name('books.edit');
// Route::delete('/{id}', [AdminBooksController::class, 'destroy'])->name('books.destroy');

Route::get('/admin-user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/admin-user/{id}', [UserController::class, 'update'])->name('admin-user.update');

