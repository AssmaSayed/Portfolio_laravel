<?php

use App\Http\Controllers\BackEndController;
use App\Http\Controllers\FrontEndController;
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


// PAGE 
Route::get('/', [FrontEndController::class, 'index']);
Route::get('/backEnd',[BackEndController::class, 'index']);


// DELETE
Route::post('delete-header{id}', [BackEndController::class, 'destroyHeader']);
Route::post('delete-nav/{id}',[BackEndController::class, 'destroyNav']);
Route::post('delete-titreAbout/{id}',[BackEndController::class, 'destroyTitreAbout']);
Route::post('delete-aboutInfo/{id}',[BackEndController::class, 'destroyAboutInfo']);
Route::post('delete-endFutur/{id}',[BackEndController::class, 'destroyEndFutur']);
Route::post('delete-cta/{id}',[BackEndController::class, 'destroyCta']);
Route::post('delete-service/{id}',[BackEndController::class, 'destroyService']);
Route::post('delete-portfolio/{id}',[BackEndController::class, 'destroyPortfolio']);
Route::post('delete-faq/{id}', [BackEndController::class, 'destroyFaq']);
Route::post('delete-titre/{id}', [BackEndController::class, 'destroyTitre']);
// EDIT
Route::get('edit-header/{id}',[BackEndController::class, 'editHeader']);

//UPDATE
Route::post('update-header/{id}', [BackEndController::class, 'updateHeader']);

// Route::post('users/{id}', function ($id) {
    
// });


// Route::post('delete-titre/{id}',[BackEndController::class, 'destroy']);

