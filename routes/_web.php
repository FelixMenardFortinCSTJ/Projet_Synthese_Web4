<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\UsagerController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\GroupeController;
use App\Models\Entreprise;

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

Route::get('/admin', function () {
    return view('tableauDeBordAdmin');
});

Route::get('/profil', function () {
    return view('tableauDeBordProfil');
});

// Routes relatif au pages des événements, certaines routes seront probablement enlever plus tard car inutile.
Route::get('/evenements', [EvenementController::class, 'index'])->name("evenements.index");
Route::get('/evenements/{evenement}', [EvenementController::class, 'show'])->name("evenements.show")->where(['evenement'=>'[0-9]+']);
Route::get('/evenements/{evenement}/edit', [EvenementController::class, 'edit'])->name("evenements.edit");
Route::post('/evenements/{evenement}/edit', [EvenementController::class, 'update'])->name("evenements.update");
Route::get('/evenements/create', [EvenementController::class, 'create'])->name("evenements.create");
Route::post('/evenements/create', [EvenementController::class, 'store'])->name("evenements.store");
Route::get('/evenements/{evenement}/delete', [EvenementController::class, 'destroy'])->name("evenements.delete");


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

//Route entreprises
Route::group(['prefix'=>'/entreprises', 'as'=>'entreprises.', 'controller'=>EntrepriseController::class, 'where'=>['entreprise'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{entreprise}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{entreprise}/edit', 'edit')->name('edit');
    Route::post('/{entreprise}/edit', 'update')->name('update');

    Route::get('/{entreprise}/delete', 'delete')->name('delete');
    Route::post('/{entreprise}/delete', 'destroy')->name('destroy');
});

//Route Paiements
Route::group(['prefix'=>'/paiements', 'as'=>'paiements.', 'controller'=>PaiementController::class, 'where'=>['paiement'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{paiement}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{paiement}/edit', 'edit')->name('edit');
    Route::post('/{paiement}/edit', 'update')->name('update');

    Route::get('/{paiement}/delete', 'delete')->name('delete');
    Route::post('/{paiement}/delete', 'destroy')->name('destroy');
});

Route::get('/accueil', function () {
    return view('Accueil.html');
});