<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BDDSeewebController;
use App\Http\Controllers\SeewebController;
use App\Http\Controllers\AddController;

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


Route::get('/listeBDD', [SeewebController::class, 'index']); //Affiche le contenue de la base de donnée
Route::get('delete/{id}', [SeewebController::class, 'delete']);


Route::get('/AddBDD', [AddController::class, 'index']);  //AddBDD est le fichier view (peux être remplacé le nom de dossier si il est dedans)
                                                         //AddController est la class controller qu'on lui associe
                                                         //index est la fonction que l'on utilise
Route::post('add', [AddController::class, 'add']);

Route::get('/', function () {
    return view('welcome'); //Page d'accueil qui permet d'accèder à l'index ou la création de données'
});