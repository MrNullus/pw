<?php

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

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href={{ route("site.index") }}>Home</a>';
});


Route::get(
    '/', 'PrincipalController@index'
)->name('site.index');

Route::get(
    '/sobrenos', 'SobreNosController@index'
)->name('site.sobrenos');

Route::get(
    '/contato', 'ContatoController@index'
)->name('site.contato');

Route::get('/login', function () {
    return view('login');
})->name('site.login');


Route::prefix('/app')->group(function () {

    Route::get('/clientes', function () {
        return view('clientes');
    })->name('app.clientes');

    Route::get('/fornecedores', function () {
        return view('fornecedores');
    })->name('app.fornecedores');

    Route::get('/produtos', function () {
        return view('produtos');
    })->name('app.produtos');

});
