<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AmisController;

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

Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/demandes', [AmisController::class, 'afficherDemandesAmitie'])->name('afficherDemandesAmitie');
    Route::post('/envoyer-demande-amitie/{utilisateur_recepteur_id}', [UserController::class, 'envoyerDemandeAmitie'])->name('envoyerDemandeAmitie');
    Route::get('/Search',[UserController::class,'Search'])->name('Search');

    Route::post('/accepter-demande/{id}', [AmisController::class, 'accepterDemandeAmitie'])->name('accepterDemandeAmitie');
    Route::delete('/refuser-demande/{id}', [AmisController::class, 'refuserDemandeAmitie'])->name('refuserDemandeAmitie');
    Route::delete('/anuller-demande/{id}', [AmisController::class, 'AnnulerDemandeAmitie'])->name('AnnulerDemandeAmitie');
    Route::get('/list-Amis', [AmisController::class, 'showallamisaccepter'])->name('showallamis');

});


