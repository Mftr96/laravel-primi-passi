<?php

use Illuminate\Support\Facades\Route;

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

//provo a scrivere percorso per altro 
//nel get metto la rotta per la pagina che voglio mostrare
Route::get('/seconda',function(){
    //qui metto il nome del file 
return view('altro');
});
