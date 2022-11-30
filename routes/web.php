<?php

use App\Http\Controllers\AdminController;
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
Route::get('kusioner-harapan-{item:id}', [MainController::class, 'harapan'])->name('kusioner-harapan');
Route::post('kusioner-harapan', [MainController::class, 'harapanStore'])->name('kusioner-harapan.store');
Route::get('kusioner-persepsi-{item:id}', [MainController::class, 'persepsi'])->name('kusioner-persepsi');
Route::post('kusioner-persepsi', [MainController::class, 'persepsiStore'])->name('kusioner-persepsi.store');
Route::prefix('admin')->middleware(['auth', 'role:Admin,Super Admin'])->group(function () {
    Route::get('/', [MainController::class, 'admin'])->name('admin');
    Route::get('kusioner', [MainController::class, 'adminKusioner'])->name('admin-kusioner');
    Route::get('analisis', [MainController::class, 'analisis'])->name('analisis');
    Route::get('analisis/{item:id}', [MainController::class, 'analisisDetail'])->name('analisis.detail');
    Route::resource('kelola-admin', AdminController::class)->middleware('role:Super Admin');
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
