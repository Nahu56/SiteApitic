<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\accueil;

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


Route::get('accueil', ['uses' => 'App\Http\Controllers\accueil@index']);

// Route::get('accueil', function(){
//     return 'accueilController';
// });