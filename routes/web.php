<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index']);
Route::get('/faits', [SiteController::class, 'faits']);
Route::post('/faits', [SiteController::class, 'store']);
Route::post('/faits/modifier', [SiteController::class, 'storeUpdate']);
Route::get('/ajout', [SiteController::class, 'create']);
Route::get('/modifier/{id}', [SiteController::class, 'update']);
Route::get('/supprimer/{id}', [SiteController::class, 'destroy']);
