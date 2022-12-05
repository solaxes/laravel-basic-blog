<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;
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



Route::get('/', [DemoController::class, 'index']);

Route::controller(DemoController::class)->group(function(){
    Route::get('/about', 'about')->name('about.page')->middleware('check');

    Route::get('/contact', 'contact')->name('contact.page');

});

