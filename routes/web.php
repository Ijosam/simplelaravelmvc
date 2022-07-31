<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersInfoAppController;


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

Route::view('/adduser', 'users');
Route::get('/users', [UsersInfoAppController::class, 'showusers']);
Route::post('/adduser', [UsersInfoAppController::class, 'adduser']);
Route::get('/show', [UsersInfoAppController::class, 'showusers']);
Route::get('/delete/{id}', [UsersInfoAppController::class, 'delete']);
Route::get('/view/{id}', [UsersInfoAppController::class, 'edit']);
Route::post('/update', [UsersInfoAppController::class, 'update']);

