<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class, 'index']);
Route::get('addproduct', [UserController::class, 'addproduct']);
Route::post('updateproduct', [UserController::class, 'updateproduct']);
Route::get('deleteproduct/{id}', [UserController::class, 'deleteproduct']);
Route::post('insertproduct', [UserController::class, 'insertproduct']);
Route::get('editproduct/{id}', [UserController::class, 'editproduct']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
