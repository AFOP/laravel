<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemController;

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

Route::get('/', [ProfileController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'show']);

Route::post('/profile', [ProfileController::class, 'store'])->name('profile');

Route::get('/item', [ItemController::class, 'show']);

Route::post('/item', [ItemController::class, 'store'])->name('item');

Route::get('/item', [ItemController::class, 'index']);

Route::put('/item/{id}', [ItemController::class, 'update'])->name('item.update');

Route::delete('/item/{id}', [ItemController::class, 'destroy'])->name('item.destroy');
