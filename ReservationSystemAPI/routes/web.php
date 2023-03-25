<?php

use App\Http\Controllers\ConcertController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailsSaleController;

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

Auth::routes();

Route::resource('concerts', ConcertController::class);
Route::resource('tickets', TicketController::class);
Route::resource('sales', SaleController::class);
Route::resource('details', DetailsSaleController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
