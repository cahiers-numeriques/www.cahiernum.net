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
Route::post('/', [SiteController::class, 'creer_cahier_post'])->name('creer-cahier-post');

Route::get('/modifier', function () {return view('modifier');})->name('modifier');
Route::post('/modifier', [SiteController::class, 'modifier_cahier_post'])->name('modifier-cahier-post');

Route::get('/{jeton}', function($jeton_public) {return view("cahier", ["jeton_public"=>$jeton_public]);})->name('cahier');
