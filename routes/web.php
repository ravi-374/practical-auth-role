<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
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

Route::get('/', function () {
    return redirect('login');
});

// Admin
Route::get('admin/login', [AdminLoginController::class, 'create']);
Route::post('admin/login', [AdminLoginController::class, 'store'])->name('admin.login');
Route::get('admin/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
