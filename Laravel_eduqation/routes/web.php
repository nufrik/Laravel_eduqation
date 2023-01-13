<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\GetSumController;

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

Route::get('/', function (){
   return 'hi';
});

Route::get('/users', [UserController::class, 'show']);
Route::match(['post', 'get'],'/user-update/{id}', [UserController::class, 'update']);
Route::get('/user-delete/{id}', [UserController::class, 'delete']);
Route::match(['post', 'get'],'/user-create', [UserController::class, 'form']);











