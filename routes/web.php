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
Route::post('delete-header{id}', [BackEndController::class, 'destroy']);
Route::post('delete-nav/{id}',[BackEndController::class, 'destroy']);
Route::post('delete-titreAbout/{id}',[BackEndController::class, 'destroy']);
Route::post('delete-aboutInfo/{id}',[BackEndController::class, 'destroy']);
Route::post('delete-endFutur/{id}',[BackEndController::class, 'destroy']);
Route::post('delete-cta/{id}',[BackEndController::class, 'destroy']);
Route::post('delete-service/{id}',[BackEndController::class, 'destroy']);
Route::post('delete-portfolio/{id}',[BackEndController::class, 'destroy']);
Route::post('delete-faq/{id}', [BackEndController::class, 'destroy']);

// EDIT
Route::get('edit-nav/{id}',[BackEndController::class, 'edit']);


// Route::post('delete-titre/{id}',[BackEndController::class, 'destroy']);

