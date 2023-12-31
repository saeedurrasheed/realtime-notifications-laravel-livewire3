<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Posts\CreatePost;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Livewire custom settings
Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/realtime-notifications-laravel/public/livewire/update', $handle);
});
Livewire::setScriptRoute(function ($handle) {
    return Route::get('/realtime-notifications-laravel/public/livewire/livewire.js', $handle);
});

Route::middleware(['auth'])
    ->group(static function () {

    Route::group(['prefix' => 'post'], static function () {
        Route::view('/', 'admin.posts.index')->name('admin.posts.index');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
