<?php

use App\Http\Controllers\MeController;
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

// HTTP METHODS

// GET
// POST
// PUT | PATCH
// DELETE