<?php

use Illuminate\Support\Facades\Auth;
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
    // $date = Carbon\Carbon::now();
    // $datee = [Carbon\Carbon::now()->addMonths(3),Carbon\Carbon::now()->addMonths(6),Carbon\Carbon::now()->addMonths(9),Carbon\Carbon::now()->addMonths(12)];
    // dd($datee);
    // dd(explode('-',str_replace(' ','','gfgf-fff-fff-fff-fff')));
    return view('welcome');
});




///////////////////////////////////////////////
Route::get('test',[\App\Http\Controllers\ExampleController::class ,'index'])->name('test');
Route::get('create',[\App\Http\Controllers\ExampleController::class ,'create'])->name('create');
Route::post('store',[\App\Http\Controllers\ExampleController::class ,'store'])->name('test.store');


Route::get('test-det/{id}',[\App\Http\Controllers\ExampleController::class ,'show'])->name('test-details');
Route::get('test-edit/{id}',[\App\Http\Controllers\ExampleController::class ,'edit'])->name('test-edit');
Route::put('update',[\App\Http\Controllers\ExampleController::class ,'update'])->name('test.update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/updatetest', [App\Http\Controllers\HomeController::class, 'update'])->name('up');

Route::get('/mark-as-read', [App\Http\Controllers\HomeController::class, 'markNotification'])->name('markNotification');
Route::get('posts',[\App\Http\Controllers\PostController::class ,'index'])->name('posts');
Route::get('ajouter-posts',[\App\Http\Controllers\PostController::class ,'create'])->name('posts.create');
Route::post('store-posts',[\App\Http\Controllers\PostController::class ,'store'])->name('posts.store');
Route::get('edit-post/{id}',[\App\Http\Controllers\PostController::class ,'edit'])->name('posts.edit');
Route::put('update-post/{idd}',[\App\Http\Controllers\PostController::class ,'update'])->name('posts.update');
Route::get('delete-post/{id}',[\App\Http\Controllers\PostController::class ,'destroy'])->name('posts.destroy');
Route::get('export',[\App\Http\Controllers\PostController::class ,'exportexcel'])->name('posts.export');
Route::get('export-pdf/{id}',[\App\Http\Controllers\PostController::class ,'exportpdf'])->name('posts.exportpdf');

Route::get('car',[\App\Http\Controllers\CarController::class ,'index'])->name('car'); 
Route::get('add-car',[\App\Http\Controllers\CarController::class ,'create'])->name('car.create');
Route::post('ajouter-car',[\App\Http\Controllers\CarController::class ,'store'])->name('car.store');
Route::get('edit-car/{id}',[\App\Http\Controllers\CarController::class ,'edit'])->name('car.edit');
Route::get('delete-car/{id}',[\App\Http\Controllers\CarController::class ,'destroy'])->name('car.destroy');
Route::put('update-car/{idd}',[\App\Http\Controllers\CarController::class ,'update'])->name('car.update');
