<?php

use App\Http\Controllers\AjouterController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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


Route::post("/Ajouter", [AjouterController::class, 'AjouterUser'])->name("users.AjouterUser");
Route::delete("/Delete/{id}", [DeleteController::class, 'DeleteUser'])->name('user.delete');


Route::get('/Update/{id}', [UpdateController::class, 'Get_data'])->name('user.data');

Route::put('/Update/{user}', [UpdateController::class, 'UpdateUser'])->name('user.update');

Route::get("/Ajouter", [AjouterController::class, 'ajouter'])->name("users.ajouter");
Route::get("/index", [UsersController::class, 'index'])->name("users.index");
