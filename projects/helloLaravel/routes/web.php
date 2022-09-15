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

// Rota simples
Route::get('/', function () {
    // return view('welcome');

    echo "Página Principal";
});

// Rota com parametros
Route::get('/aluno/{nome}/{idade}', function ($nome, $idade) {
    $nome = ucfirst($nome);

    echo "
    <center>
        <h2>Olá $nome, seja bem vindo(a) à nossa página! 👾</h2>
        <p>Sei que você tem $idade anos, então você gosta de Hari Potter?<br></p>
    </center>
    ";

    echo "<br><br>";

    $n = 5;

    for ($i = 0; $i <= 10; $i++) { 
        echo "$i X $n"." = ".($i * $n)."<br>";
    }

});
