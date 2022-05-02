<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ForfaitControllerController;
use App\Http\Controllers\MembreControllerController;
use App\Http\Controllers\PaiementControllerController;
use App\Http\Controllers\UsagerControllerController;
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

Route::group(['prefix'=>'/elements', 'as'=>'elements.', 'controller'=>ElementController::class, 'where'=>['element'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{element}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{element}/edit', 'edit')->name('edit');
    Route::post('/{element}/edit', 'update')->name('update');

    Route::get('/{element}/delete', 'delete')->name('delete');
    Route::post('/{element}/delete', 'destroy')->name('destroy');
});

// Routes relatif au pages des événements, certaines routes seront probablement enlever plus tard car inutile.
Route::get('/evenements', [EvenementController::class, 'index'])->name("evenements.index");
Route::get('/evenements/{evenement}', [EvenementController::class, 'show'])->name("evenements.show")->where(['evenement'=>'[0-9]+']);
Route::get('/evenements/{evenement}/edit', [EvenementController::class, 'edit'])->name("evenements.edit");
Route::post('/evenements/{evenement}/edit', [EvenementController::class, 'update'])->name("evenements.update");
Route::get('/evenements/create', [EvenementController::class, 'create'])->name("evenements.create");
Route::post('/evenements/create', [EvenementController::class, 'store'])->name("evenements.store");
Route::get('/evenements/{evenement}/delete', [EvenementController::class, 'destroy'])->name("evenements.delete");