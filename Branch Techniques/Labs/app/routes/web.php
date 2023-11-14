<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiaireController;

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
    return view('home');
})->name('add.stagiaire');

Route::post('/', [StagiaireController::class, 'addStagiaire'])->name('add.stagiaire');
Route::get('/listStagiaire', [StagiaireController::class, 'show'])->name('show.stagiaire');
Route::get('/edit/{id}', [StagiaireController::class, 'edit'])->name('edit.stagiaire');
Route::PATCH('/edit/{id}', [StagiaireController::class, 'updateStagiaire'])->name('update.stagiaire');
Route::post('/search-stagiaire', [StagiaireController::class, 'searchStagiaire'])->name('search.stagiaire');








