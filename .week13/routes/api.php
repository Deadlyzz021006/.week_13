<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiUsersController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(ApiUsersController::class)
  ->prefix('/users')
  ->group(function () {

    Route::get('/users', 'index');
    Route::get('/users{id}', 'show');
    Route::post('/users', 'store');
    Route::put('/users{id}', 'update');
    Route::delete('/{id}', 'destroy');
  });
  Route::resource('Api', 'ApiController');

