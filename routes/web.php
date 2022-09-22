<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ArticleController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['roleverfication'])->name('dashboard');
// ->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/accueil',[AccueilController::class,'index'])->middleware(['auth'])->name('accueil');


Route::get('/articles',[ArticleController::class,'index'])->middleware(['auth'])->name('articles');
// ->middleware(['roleverfication'])->name('articles');
