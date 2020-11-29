<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('add-user', [UserController::class, 'addUser']);
Route::post('/create', [UserController::class, 'create'])->name('user.create');
Route::get('/users', [UserController::class, 'get']);
Route::get('edit-users/{id}', [UserController::class, 'getUserById']);
Route::get('delete-users/{id}', [UserController::class, 'deleteUserById']);
Route::post('/update', [UserController::class, 'update'])->name('user.update');
