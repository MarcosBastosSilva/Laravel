<?php

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

Route::get('/', function () {

    $nome = "Marcos";
    $idade = 24;
    $profissão = "Programador";
    $arr = [1,2,3,4,5,6,7,8,9,10];
    $nomes = ["Matheus","Maria","Joao","Marcos"];

    return view('welcome',
    ['nome' => $nome, 
    'idade' => $idade, 
    'profissão' => $profissão,
    'arr' => $arr,
    'nomes'=> $nomes]);
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/produtos', function () {
    return view('produtos');
});
