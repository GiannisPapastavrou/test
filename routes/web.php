<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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



Route::controller(PostController::class)->prefix('post')->group(function(){
    Route::get('/display', 'display');
    Route::get('/view/{id}','view');
    Route::get('/create','create');
    Route::post('/store','store');
    Route::get('/edit/{id}','edit');
    Route::post('/update/{id}','update');
    Route::get('/delete/{id}', 'delete');

});





