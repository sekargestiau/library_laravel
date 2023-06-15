<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;


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
Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);
// Route::get('/home/show_home', [HomeController::class, 'show_home']);
Route::get('/home/table', [HomeController::class, 'table']);
Route::get('/home/form', [HomeController::class, 'form']);
Route::get('home/books',[HomeController::class, 'books']);
Route::resource('/books',BooksController::class);
Route::post('/books', [BooksController::class, 'store']);
Route::resource('home/form',PinjamController::class);
Route::post('home/form', [PinjamController::class, 'store']);
