<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CarController::class, 'index'])->name('car.index');
Route::get('/create', [CarController::class, 'create'])->name('car.create');
Route:: post('/', [CarController::class, 'store'])->name('car.store');
Route::get('/{car}/edit', [CarController::class, 'edit'])->name('car.edit');
Route::get('/{car}/update', [CarController::class, 'update'])->name('car.update');
Route::delete('/{car}/destroy', [CarController::class, 'destroy'])->name('car.destroy');