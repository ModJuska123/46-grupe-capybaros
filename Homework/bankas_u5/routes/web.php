<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController AS C;
use App\Http\Controllers\IbanController AS I;

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

//Clients CRUD Group:
Route::prefix('clients')->name('clients-')->group(function () {
    Route::get('/', [C::class, 'index'])->name('index');
    Route::get('/create', [C::class, 'create'])->name('create');
    Route::post('/', [C::class, 'store'])->name('store');
    Route::get('/{client}', [C::class, 'show'])->name('show');
    Route::get('/{client}/edit', [C::class, 'edit'])->name('edit');
    Route::put('/{client}', [C::class, 'update'])->name('update');
    Route::get('/{client}/delete', [C::class, 'delete'])->name('delete');
    Route::delete('/{client}', [C::class, 'destroy'])->name('destroy');
});
//Ibans CRUD Group:
Route::prefix('ibans')->name('ibans-')->group(function () {
    Route::get('/', [I::class, 'index'])->name('index');
    Route::get('/create', [I::class, 'create'])->name('create');
    Route::post('/', [I::class, 'store'])->name('store');
    Route::get('/{iban}', [I::class, 'show'])->name('show');
    Route::get('/{iban}/edit', [I::class, 'edit'])->name('edit');
    Route::put('/{iban}', [I::class, 'update'])->name('update');
    Route::get('/{iban}/delete', [I::class, 'delete'])->name('delete');
    Route::delete('/{iban}', [I::class, 'destroy'])->name('destroy');
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
