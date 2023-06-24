<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\AdminHomeController;
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
Route::resource('/form',PinjamController::class);
Route::post('/form', [PinjamController::class, 'store']);
Route::get('/admin-home', [AdminHomeController::class, 'index']);
Route::get('/', [AdminHomeController::class, 'index']);
Route::get('/admin-books', [BooksController::class, 'index_admin']);
Route::get('/admin-user', [UserController::class, 'index_admin']);

