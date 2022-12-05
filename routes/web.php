<?php

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

Route::get('/', [\App\Http\Controllers\MainController::class,'home']);
Route::get('/create',[\App\Http\Controllers\MainController::class, 'create']);
Route::POST('/create',[\App\Http\Controllers\MainController::class, 'store']);
Route::get('/list',[\App\Http\Controllers\MainController::class, 'list']);
Route::POST('edit',[\App\Http\Controllers\MainController::class, 'update']);
Route::POST('/delete',[\App\Http\Controllers\MainController::class, 'delete']);
