<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ForestController;
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

Route::get('/bebras/miskinis/{color}/{size}', [ForestController::class, 'labas']);

//zebras
Route::get('/zebras', function () {
    return 'Labas Zebras!';
});

//cia prasideda ##2 uzduotis, kuri vadinasi calaculiatorius
// --------------------------------------------


Route::get('/count', [ForestController::class, 'showCount'])->name('count');
Route::post('/count', [ForestController::class, 'count'])->name('do-count');

//cia prasideda ##3 uzduotis, kuri vadinasi parodyk kvadratukus
// --------------------------------------------

Route::get('/squares', [ForestController::class, 'showSquares'])->name('squares');
Route::post('/squares', [ForestController::class, 'squares'])->name('do-squares');
Route::put('/squares', [ForestController::class, 'addSquares'])->name('add-squares');
