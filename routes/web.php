<?php

use App\Http\Controllers\CurrencyController;
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

Route::get('/', [CurrencyController::class, 'index']);
Route::get('/Dashboard', [CurrencyController::class, 'index'])->name('dashboard');
Route::get('/About', function () {return view('About');})->name("About");
Route::get('/Dumps', function () {return view('Dumps');})->name("Dumps");
Route::get('/FAQ', function () {return view('FAQ');})->name("FAQ");
Route::get('/Dumps', function () {return view('Dumps');})->name("Dumps");
Route::get('/export/{category}/{type}', [CurrencyController::class, 'export'])->name('export');
Route::get('/{category}', [CurrencyController::class, 'search'])->name('search');
Route::get('/Category/{category}', [CurrencyController::class, 'categoryCurrency'])->name('category');
Route::get('/Category/{category}/{symbol}', [CurrencyController::class, 'currencyHistory'])->name('history');
