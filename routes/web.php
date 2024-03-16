<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PodcastsController;
use Barryvdh\Debugbar\Facades\Debugbar;
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

//Home route
Route::get('/', HomeController::class);

//Fallback page, if page doesn't exist
//NOTE: the fallback() method only takes one parameter, which is the class
Route::fallback(FallbackController::class);

//View routes
Route::prefix('blog')->group(function () {
    //POST Requests
    Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/', [BlogController::class, 'store'])->name('blog.store');
    
    //GET Requests
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [BlogController::class, 'show'])->name('blog.show');

    //PUT/PATCH Requests
    Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/{id}', [BlogController::class, 'update'])->name('blog.update');

    //DELETE Requests
    Route::delete('/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
});

// Route::resource('podcast', PodcastsController::class);
