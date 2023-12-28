<?php

use App\Http\Controllers\ProjectsController;
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

Route::get('/', [ProjectsController::class, 'index'])->name('index');

Route::get('/create', [ProjectsController::class, 'create'])->name('create');
Route::post('/store', [ProjectsController::class, 'store'])->name('store');

Route::get('{tasks}/edit', [ProjectsController::class, 'edit'])->name('edit');
Route::patch('{tasks}/update', [ProjectsController::class, 'update'])->name('update');

Route::delete('{tasks}/destroy', [ProjectsController::class, 'destroy'])->name('destroy');

