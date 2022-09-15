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

Route::get('/', function () {
    /* 
        # Sem view retornada
    echo '<center>';
    echo '<h1>Página Principal</h1>';
    echo '<img src="https://media2.giphy.com/media/mDFpdL1UxdVZRBN2V4/giphy.gif" />';
    echo '</center>';
    */

    # Com retorno de uma view
    return view('welcome');
});

Route::get('/contato', function () {
    /* 
        # Sem view retornada
    echo '<center>';
    echo '<h1>Página Contato</h1>';
    echo '<img src="https://i0.wp.com/iphaids.org/wp-content/uploads/2021/03/meme-sapinho.gif?resize=450%2C338&ssl=1" />';
    echo '</center>';
    */

    # Com retorno de uma view
    return view('contato');
});

Route::get('/sobrenos', function () {
    /* 
        # Sem view retornada
    echo '<center>';
    echo '<h1>Página Sobre Nós</h1>';
    echo '<img src="https://s2.glbimg.com/rsxOyujjm17bnXKKkZiz7Gj0F3I=/e.glbimg.com/og/ed/f/original/2021/11/30/giphy.gif" />';
    echo '</center>';
    */

    # Com retorno de uma view
    return view('sobrenos');
});
