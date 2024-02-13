<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController AS C;

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






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
