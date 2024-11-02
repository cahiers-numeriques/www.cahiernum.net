<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', function () {return view('welcome');})->name('welcome');

Route::get('/cahier-creer/{cahier_id?}', function ($cahier_id = null) {return view('cahier-creer')->with(['cahier_id' => $cahier_id]);})->name('cahier-creer-get');

Route::post('/cahier-creer', [SiteController::class, 'cahier_creer_post'])->name('cahier-creer-post');

Route::get('/cahier-console/{jeton_secret}', function ($jeton_secret) {return view('cahier-console')->with(['jeton_secret' => $jeton_secret]);});

Route::get('/{jeton_public}', function($jeton_public) {return view("cahier", ["jeton_public"=>$jeton_public]);})->name('cahier');
