<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\UsagerController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CategorieEntrepriseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\MrcController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\FavoriController;
use App\Models\Categorie;
use App\Models\Entreprise;
use App\Models\Transaction;
use App\Models\Usager;
use Symfony\Component\Console\Input\Input;

use function PHPUnit\Framework\returnSelf;

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
Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/lesacp', function () {
    return view('lesacp');
});
Route::get('/unacp', function () {
    return view('unacp');
});
Route::get('/souscategorie', function () {
    return view('souscategorie');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class,'dashboard'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard', [DashboardController::class,'dashboard'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Routes relatif au pages des ??v??nements, certaines routes seront probablement enlever plus tard car inutile.
Route::group(['prefix'=>'/admin', 'as'=>'admin.','middleware'=>['auth','admin']], function () {
    Route::group(['prefix'=>'/evenements', 'as'=>'evenements.', 'controller'=>EvenementController::class, 'where'=>['evenement'=>'[0-9]+']], function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{evenement}', 'show')->name('show');

        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store')->name('store');

        Route::get('/{evenement}/edit', 'edit')->name('edit');
        Route::post('/{evenement}/edit', 'update')->name('update');

        Route::get('/{evenement}/delete', 'delete')->name('delete');
        Route::post('/{evenement}/delete', 'destroy')->name('destroy');
    });
});
Route::group(['prefix'=>'/evenements', 'as'=>'evenements.', 'controller'=>EvenementController::class, 'where'=>['evenement'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{evenement}', 'show')->name('show');
});

//Route Forfait
Route::group(['prefix'=>'/forfaits', 'as'=>'forfaits.', 'controller'=>ForfaitController::class, 'where'=>['forfait'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');

    Route::get('/{categorie}', 'categorieShow')
        ->name('categorie.show')
        ->where(['categorie' => 'Escapade|D??couverte|D??tente|Famille']);

    Route::get('/{forfait}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{forfait}/edit', 'edit')->name('edit');
    Route::post('/{forfait}/edit', 'update')->name('update');

    Route::get('/{forfait}/delete', 'delete')->name('delete');
    Route::post('/{forfait}/delete', 'destroy')->name('destroy');
});

//mrc
// Route::group(['prefix'=>'/mrcs', 'as'=>'mrcs.', 'controller'=>MrcController::class, 'where'=>['mrc'=>'[0-9]+']], function () {
//     Route::get('/', 'index')->name('index');

//     Route::get('/{categorie}', 'regionShow')
//         ->name('show')
//         ->where(['categorie' => 'Les Laurentides|Antoine-Labelle|Th??r??se-De Blainville|ArgenteuilLes|Deux-Montagne|Les Pays-den-Haut|La Rivi??re-du-Nord']);

//     Route::get('/{mrc}', 'show')->name('show');

//     Route::get('/create', 'create')->name('create');
//     Route::post('/create', 'store')->name('store');

//     Route::get('/{mrc}/edit', 'edit')->name('edit');
//     Route::post('/{mrc}/edit', 'update')->name('update');

//     Route::get('/{mrc}/delete', 'delete')->name('delete');
//     Route::post('/{mrc}/delete', 'destroy')->name('destroy');
// });
Route::group(['prefix' => '/mrcs', 'as' => 'mrcs.', 'controller' => MrcController::class, 'where' => ['mrc' => '[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{mrc}', 'show')->name('show');
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
Route::group(['prefix'=>'/admin', 'as'=>'admin.','middleware'=>['auth','admin']], function () {
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
});
Route::group(['prefix'=>'/entreprises', 'as'=>'entreprises.', 'controller'=>EntrepriseController::class, 'where'=>['entreprise'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{entreprise}', 'show')->name('show');
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

//Route Transactions
Route::group(['prefix'=>'/transactions', 'as'=>'transactions.', 'controller'=>TransactionController::class, 'where'=>['transaction'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{transaction}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{transaction}/edit', 'edit')->name('edit');
    Route::post('/{transaction}/edit', 'update')->name('update');

    Route::get('/{transaction}/delete', 'delete')->name('delete');
    Route::post('/{transaction}/delete', 'destroy')->name('destroy');
});


Route::get('/accueil', function () {
    return view('Accueil');
});

Route::group(['prefix'=>'/groupes', 'as'=>'groupes.', 'controller'=>GroupeController::class, 'where'=>['groupe'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{groupe}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{groupe}/edit', 'edit')->name('edit');
    Route::post('/{groupe}/edit', 'update')->name('update');

    Route::get('/{groupe}/delete', 'delete')->name('delete');
    Route::post('/{groupe}/delete', 'destroy')->name('destroy');
});

Route::group(['prefix'=>'/categories', 'as'=>'categories.', 'controller'=>CategorieController::class, 'where'=>['categorie'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{categorie}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{categorie}/edit', 'edit')->name('edit');
    Route::post('/{categorie}/edit', 'update')->name('update');

    Route::get('/{categorie}/delete', 'delete')->name('delete');
    Route::post('/{categorie}/delete', 'destroy')->name('destroy');
});

Route::group(['prefix'=>'/paniers', 'as'=>'paniers.', 'controller'=>PanierController::class, 'where'=>['panier'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{panier}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{panier}/edit', 'edit')->name('edit');
    Route::post('/{panier}/edit', 'update')->name('update');

    Route::get('/{panier}/delete', 'delete')->name('delete');
    Route::post('/{panier}/delete', 'destroy')->name('destroy');
});
Route::group(['prefix'=>'/favoris', 'as'=>'favoris.', 'controller'=>FavoriController::class, 'where'=>['favori'=>'[0-9]+']], function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{favori}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/create', 'store')->name('store');

    Route::get('/{favori}/edit', 'edit')->name('edit');
    Route::post('/{favori}/edit', 'update')->name('update');

    Route::get('/{favori}/delete', 'delete')->name('delete');
    Route::post('/{favori}/delete', 'destroy')->name('destroy');
});
// Route::group(['prefix'=>'/paniers', 'as'=>'paniers.', 'controller'=>PanierController::class, 'where'=>['panier'=>'[0-9]+']], function () {
//     Route::get('/', 'index')->name('index');
//     Route::get('/{panier}', 'show')->name('show');

//     Route::get('/create', 'create')->name('create');
//     Route::post('/create', 'store')->name('store');

//     Route::get('/{panier}/edit', 'edit')->name('edit');
//     Route::post('/{panier}/edit', 'update')->name('update');

//     Route::get('/{panier}/delete', 'delete')->name('delete');
//     Route::post('/{panier}/delete', 'destroy')->name('destroy');
// });
//ajouter au panier
Route::post('/savepanier',[PanierController::class, 'store'])->middleware('auth');
//ajouter au favori
Route::post('/savefavori',[FavoriController::class, 'store'])->middleware('auth');
//Search bar cat??gorie
Route::get('/categories/search', [CategorieController::class, 'filterName']);
