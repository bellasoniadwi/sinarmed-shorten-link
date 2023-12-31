<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ThumbnailActiveController;
use App\Http\Controllers\ThumbnailGalleryController;
use App\Http\Controllers\ThumbnailGroupController;
use App\Http\Controllers\ThumbnailNonactiveController;
use App\Http\Controllers\ThumbnailSocialmediaController;
use App\Http\Controllers\ThumbnailInboxController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/sinarmed', [PublicController::class, 'index'])->name('user.index');
Route::get('/sinarmed-galery', [PublicController::class, 'galery'])->name('user.galery');
Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
// Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('thumbnail/inbox', [PublicController::class, 'inbox'])->name('thumbnail.inbox');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::resource('product', ProductController::class);
    Route::resource('thumbnail-nonactive', ThumbnailNonactiveController::class);
    Route::resource('thumbnail-active', ThumbnailActiveController::class);
    Route::resource('thumbnail-group', ThumbnailGroupController::class);
    Route::resource('thumbnail-gallery', ThumbnailGalleryController::class);
    Route::resource('thumbnail-socialmedia', ThumbnailSocialmediaController::class);
    Route::resource('thumbnail-inbox', ThumbnailInboxController::class);

    Route::post('thumbnail/updateNonactive/{id}', [ThumbnailNonactiveController::class, 'updateStatus'])->name('thumbnail.updateNonactive');
    Route::post('thumbnail/updateActive/{id}', [ThumbnailActiveController::class, 'updateStatus'])->name('thumbnail.updateActive');
    Route::post('thumbnail/updateGroup/{id}', [ThumbnailGroupController::class, 'updateStatus'])->name('thumbnail.updateGroup');
    Route::post('thumbnail/updateGallery/{id}', [ThumbnailGalleryController::class, 'updateStatus'])->name('thumbnail.updateGallery');
    Route::post('thumbnail/updateSocialmedia/{id}', [ThumbnailSocialmediaController::class, 'updateStatus'])->name('thumbnail.updateSocialmedia');
});



