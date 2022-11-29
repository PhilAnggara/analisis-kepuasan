<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [MainController::class, 'index'])->name('beranda');
Route::get('kusioner', [MainController::class, 'kusioner'])->name('kusioner');
Route::prefix('admin')->middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/', [MainController::class, 'admin'])->name('admin');
    Route::get('kusioner', [MainController::class, 'adminKusioner'])->name('admin-kusioner');
    Route::get('analisis', [MainController::class, 'analisis'])->name('analisis');
    Route::get('kelola-admin', [MainController::class, 'kelolaAdmin'])->name('kelola-admin')->middleware('role:Super Admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';