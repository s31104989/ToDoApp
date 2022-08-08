<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
    return view('welcome');
});

Route::get('/dashboard', [TaskController::class, 'show'])->middleware(['auth'])->name('dashboard');
Route::post('/store', [TaskController::class, 'store'])->middleware(['auth'])->name('store');
Route::post('/delete/{id}', [TaskController::class, 'delete'])->middleware(['auth'])->name('delete'); // 追記

require __DIR__.'/auth.php';
