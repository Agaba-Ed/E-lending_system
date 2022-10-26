<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('applyforloan/{id}', [App\Http\Controllers\LoanController::class, 'applyforloan'])->name('applyforloan');

                          
Route::post('submitapplication/{id}', [App\Http\Controllers\LoanController::class, 'submitapplication'])->name('submitapplication');


Route::get('loanprofile/{id}', [App\Http\Controllers\LoanController::class, 'loanprofile'])->name('loanprofile');

Route::get('settlebalance/{id}', [App\Http\Controllers\LoanController::class, 'settlebalance'])->name('settlebalance');

Route::post('settlebalance/{id}', [App\Http\Controllers\LoanController::class, 'settlebalance'])->name('settlebalance');

Route::get('loanhistory/{id}', [App\Http\Controllers\LoanController::class, 'loanhistory'])->name('loanhistory');

 