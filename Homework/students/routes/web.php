<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController AS S;

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

// Students CRUD Group        //perrasiau viska ant studentų, vietoje mechanics
Route::prefix('students')->name('students-')->group(function () {           //prefixas prefiksina visus studentus
    Route::get('/', [S::class, 'index'])->name('index');
    Route::get('/create', [S::class, 'create'])->name('create');
    Route::post('/', [S::class, 'store'])->name('store');
    Route::get('/{student}', [S::class, 'show'])->name('show');
    Route::get('/{student}/edit', [S::class, 'edit'])->name('edit');
    Route::put('/{student}', [S::class, 'update'])->name('update');
    Route::get('/{student}/delete', [S::class, 'delete'])->name('delete');
    Route::delete('/{student}', [S::class, 'destroy'])->name('destroy');
});












Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
