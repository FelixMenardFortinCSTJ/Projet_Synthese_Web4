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

//Route Forfait
Route::group(['prefix'=>'/forfaits', 'as'=>'forfaits.', 'controller'=>ForfaitController::class, 'where'=>['forfait'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{forfait}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{forfait}/edit', 'edit')->name('edit');
    Route::post('/{forfait}/edit', 'update')->name('update');

    Route::get('/{forfait}/delete', 'delete')->name('delete');
    Route::post('/{forfait}/delete', 'destroy')->name('destroy');
});

//Route Usager
Route::group(['prefix'=>'/usagers', 'as'=>'usagers.', 'controller'=>UsagerController::class, 'where'=>['usager'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{usager}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{usager}/edit', 'edit')->name('edit');
    Route::post('/{usager}/edit', 'update')->name('update');

    Route::get('/{usager}/delete', 'delete')->name('delete');
    Route::post('/{usager}/delete', 'destroy')->name('destroy');
});