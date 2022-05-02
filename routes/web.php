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
