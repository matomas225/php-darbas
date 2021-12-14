<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/create', [CreateController::class, 'index']);
Route::post('/create', [CreateController::class, 'create']);
Route::delete('/delete/{company}', [CreateController::class, 'destroy'])->name('delete');

Route::get('/edit/{company}', [CreateController::class, 'editView'])->name('editView');
Route::patch('/edit', [CreateController::class, 'edit'])->name('edit');


