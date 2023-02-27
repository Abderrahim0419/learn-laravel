<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::get('/mark-as-read', [App\Http\Controllers\HomeController::class, 'markNotification'])->name('markNotification');
Route::post('/Apistore', [App\Http\Controllers\ApiController::class, 'Apistore']);
Route::get('/getUser', [App\Http\Controllers\ApiController::class, 'getUser']);
Route::get('/getPost', [App\Http\Controllers\ApiController::class, 'getPost']);
Route::get('/getOnePost/{id}', [App\Http\Controllers\ApiController::class, 'getOnePost']);
Route::post('/UpdatePost/{id}', [App\Http\Controllers\ApiController::class, 'UpdatePost']);
Route::get('/DeletePost/{id}', [App\Http\Controllers\ApiController::class, 'DeletePost']);






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
});
