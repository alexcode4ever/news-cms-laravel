<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// === Public =====

Route::get('/', function () {
    return redirect('/news');
});
// Route::resource('news', NewsController::class)->only(['index','store','create','show'])->middleware(['auth','verified']);
Route::resource('news', NewsController::class)->only('index','show');

// ===== Dashboard ====
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('admin', AdminController::class)->middleware(['auth','verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/dashboard/news', [AdminController::class, 'index'])->name('dashboard.index');
    // Route::get('/dashboard/news/edit', [AdminController::class, 'edit'])->name('dashboard.edit');
    // Route::get('/dashboard/news', [AdminController::class, 'create'])->name('dashboard.create');
    // Route::delete('/dashboard/news', [AdminController::class, 'index'])->name('dashboard.destroy');

});




require __DIR__.'/auth.php';
