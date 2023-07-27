<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\AlerteController;
use App\Http\Controllers\AnnuleralerteController;
use App\Http\Controllers\AnnulerCasController;
use App\Http\Controllers\AnnulerController;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\centre;
use App\Http\Controllers\EpidemieController;
use App\Http\Controllers\ZoneSanteController;
use App\Http\Controllers\CentreSanteController;
use App\Http\Controllers\ConfirmerController;
use App\Http\Controllers\DecesController;
use App\Http\Controllers\NewCaseController;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\Auth;

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

Route::get('/',[acceuilController::class,'index'])->name('accueil');

Route::get('/clean', [AcceuilController::class, 'index'])->name('clean');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// EPIDEMIE CRUD

Route::get('/epidemie',[EpidemieController::class, 'index'])->name('epidemie');
Route::get('/epidemie/create',[EpidemieController::class, 'create'])->name('epidemie.create');
Route::post('/epidemie/store', [EpidemieController::class, 'store'])->name('epidemie.store');
Route::get('/epidemie/edit/{epidemie}', [EpidemieController::class, 'edit'])->name('epidemie.edit');
Route::put('/epidemie/update/{epidemie}', [EpidemieController::class, 'update'])->name('epidemie.update');
Route::delete('/epidemie/destroy/{epidemie}', [EpidemieController::class, 'destroy'])->name('epidemie.destroy');

// ZOne de sante

Route::post('/zoneSante/store',[ZoneSanteController::class, 'store'])->name('zoneSante.store');
Route::get('/zoneSante/edit/{zoneSante}', [ZoneSanteController::class, 'edit'])->name('zoneSante.edit');
Route::put('/zoneSante/update/{zoneSante}',[ZoneSanteController::class, 'update'])->name('zoneSante.update');
Route::delete('/zoneSante/destroy/{zoneSante}', [ZoneSanteController::class, 'destroy'])->name('zoneSante.destroy');
Route::get('/zoneSante/create',[ZoneSanteController::class, 'create'])->name('zoneSante.create');
Route::get('/zoneSante',[ZoneSanteController::class, 'index'])->name('zoneSante');

// Centre de sante

Route::get('/centreSante',[CentreSanteController::class, 'index'])->name('centreSante');
Route::get('/centreSante/create',[CentreSanteController::class, 'create'])->name('centreSante.create');
Route::post('/centreSante/store',[CentreSanteController::class, 'store'])->name('centreSante.store');
Route::delete('/centreSante/destroy/{centreSante}',[CentreSanteController::class, 'destroy'])->name('centreSante.destroy');
Route::get('/centreSante/edit/{centreSante}', [CentreSanteController::class, 'edit'])->name('centreSante.edit');
Route::put('/centreSante/update/{centreSante}', [CentreSanteController::class, 'update'])->name('centreSante.update');


// deces

Route::get('/deces/create',[DecesController::class, 'create'])->name('deces.create');
Route::post('/deces/store',[DecesController::class, 'store'])->name('deces.store');
Route::delete('/deces/destroy/{deces}',[DecesController::class, 'destroy'])->name('deces.destroy');
Route::get('/deces/edit/{deces}',[DecesController::class, 'edit'])->name('deces.edit');
Route::put('/deces/update/{deces}', [DecesController::class, 'update'])->name('deces.update');
Route::get('/deces',[DecesController::class, 'index'])->name('deces');


// NewCase

Route::get('/newCase',[NewCaseController::class, 'index'])->name('newCase');
Route::get('/newCase/create',[NewCaseController::class, 'create'])->name('newCase.create');
Route::get('/newCase/store',[NewCaseController::class, 'strore'])->name('newCase.store');
Route::get('/newCase/edit/{deces}',[NewCaseController::class, 'edit'])->name('newCase.edit');
Route::delete('/newCase/destroy/{deces}',[NewCaseController::class, 'destroy'])->name('newCase.destroy');




// Confirmer
Route::get('/confirmer',[ConfirmerController::class, 'index'])->name('confirmer');
Route::get('/confirmer/create',[ConfirmerController::class, 'create'])->name('confirmer.create');
Route::get('/confirmer/store',[ConfirmerController::class, 'strore'])->name('confirmer.store');


// Annuler Alerte
Route::get('/Annuler-Alerte',[AnnuleralerteController::class, 'index'])->name('Annuler-Alerte');
Route::get('/Annuler-Alerte/create',[AnnuleralerteController::class, 'create'])->name('Annuler-Alerte.create');
Route::get('/Annuler-Alerte/store',[AnnuleralerteController::class, 'strore'])->name('Annuler-Alerte.store');



// Annuler un cas
Route::get('/Annuler-Cas',[AnnulerCasController::class, 'index'])->name('Annuler-Cas');
Route::get('/Annuler-Cas/create',[AnnulerCasController::class, 'create'])->name('Annuler-Cas.create');
Route::get('/Annuler-Cas/store',[AnnulerCasController::class, 'strore'])->name('Annuler-Cas.store');



// Alerter UNE EPIDEMIE
Route::get('/Alerter-Epidemie',[AlerteController::class, 'index'])->name('Alerter-Epidemie');
Route::get('/Alerter-Epidemie/create',[AlerteController::class, 'create'])->name('Alerter-Epidemie.create');



// Route::get('/centre',[centre::class, 'index'])->name('centre');
Route::get('/zone',[centre::class, 'index'])->name('zone');
Route::get('/annulerCas',[centre::class, 'index'])->name('annulerCas');








// annuler un new case

Route::get('annuler',[AnnulerController::class,'index'])->name('annuler');




Route::prefix('admin')->namespace('Back')->group(function () {
    Route::name('admin')->get('/admin', [AdminController::class, 'index']);
    
});

