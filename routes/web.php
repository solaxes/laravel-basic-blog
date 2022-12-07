<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Home\AboutController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// admin all routes
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('admin/profile', 'profile')->name('admin.profile');
    Route::get('admin/profile/edit', 'editProfile')->name('admin.edit.profile');
    Route::post('admin/store/profile', 'storeProfile' )->name('admin.store.profile');
    Route::get('admin/change/password', 'changePassword' )->name('admin.change.password');
    Route::post('admin/update/password', 'updatePassword')->name('update.password');


});

Route::controller(HomeSliderController::class)->group(function(){
   Route::get('/home/slide', 'HomeSlider')->name('home.slide');
   Route::post('/update/slider', 'updateSlider')->name('home.slide.store');
});

Route::controller(AboutController::class)->group(function(){
   Route::get('/about/page', 'aboutPage')->name('about.page');
   Route::post('/about/page/update', 'updateAboutPage')->name('about.page.update');
});

require __DIR__.'/auth.php';
