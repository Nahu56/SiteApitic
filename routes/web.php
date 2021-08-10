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


Route::get('accueil', ['uses' => 'App\Http\Controllers\accueilController@index'])->name("accueil");
Route::get('accueil/create', ['uses' => 'App\Http\Controllers\accueilController@create'])->name("personnage.create");

Route::get('accueil/{personnage}', ['uses' => 'App\Http\Controllers\accueilController@edit'])->name("personnage.edit");

Route::post('accueil/create', ['uses' => 'App\Http\Controllers\accueilController@store'])->name("personnage.store");
Route::delete('accueil/{personnage}', ['uses' => 'App\Http\Controllers\accueilController@delete'])->name("personnage.delete");
Route::put('accueil/{personnage}', ['uses' => 'App\Http\Controllers\accueilController@update'])->name("personnage.update");

// Route::get('accueil', function(){
//     return 'accueilController';
// });