<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/taches', [TaskController::class, 'index'])->name('index');

Route::get('create', [TaskController::class,'create'])->name('create');

Route::post('store', [TaskController::class, 'store'])->name('store');

Route::get('{task}/edit', [TaskController::class, 'edit'])->name('edit');
Route::put('{task}/update', [TaskController::class, 'update'])->name('update');

Route::delete('{task}/destroy', [TaskController::class, 'destroy'])->name('destroy');
Route::get('{task}/show',[TaskController::class,'show'])->name('show');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


