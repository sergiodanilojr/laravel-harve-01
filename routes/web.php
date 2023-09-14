<?php

use App\Http\Controllers\MeController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('me', [MeController::class, 'name']);

Route::get('sobrenome', [MeController::class, 'lastname']);
Route::get('artigos', [PostController::class, 'index'])->name('posts.index');
Route::get('artigos/criar', [PostController::class, 'create']);
Route::post('posts',[PostController::class, 'store'])->name('posts.store');

// HTTP METHODS

// GET
// POST
// PUT | PATCH
// DELETE