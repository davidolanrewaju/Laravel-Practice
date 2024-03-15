<?php

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
Route::prefix('podcast')->group(function () {
    //GET Requests
    Route::get('/', [PodcastsController::class, 'index'])->name('podcast.index');
    Route::get('/{id}', [PodcastsController::class, 'show'])->name('podcast.show');

    //POST Requests
    Route::get('/create', [PodcastsController::class, 'create'])->name('podcast.create');
    Route::post('/', [PodcastsController::class, 'store'])->name('podcast.store');

    //PUT/PATCH Requests
    Route::get('/edit/{id}', [PodcastsController::class, 'edit'])->name('podcast.edit');
    Route::put('/{id}', [PodcastsController::class, 'update'])->name('podcast.update');

    //DELETE Requests
    Route::delete('/delete/{id}', [PodcastsController::class, 'destroy'])->name('podcast.destroy');
});

// Route::resource('podcast', PodcastsController::class);
