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
    return view('welcome');
});

Route::get('variables', function(){

    $mensaje = 10;
    var_dump($mensaje);
    echo "<hr >";
    $mensaje = true;
    var_dump($mensaje);
} );

Route::get("arreglos", function(){

    $estudiantes = [ "Ana", "Maria", "Jorge"  ];
    echo "<pre>";
    print_r($estudiantes);
    echo "</pre>";

} );

Route::get('paises', function(){

    $paises = [
            "COLOMBIA" => [
                    "capital" => "Bogota D.C",
                    "moneda"  => "Peso",
                    "poblacion"=> 50.34
            ],
            "PERU" => [
                "capital" => "Lima",
                "moneda"  => "Sol",
                "poblacion"=> 32.84
        ],
            "PARAGUAY" =>[
                "capital" => "Asuncion",
                "moneda"  => "Guaraní paraguayo",
                "poblacion"=> 7.05
        ],

    ];

    return view("paises")->with("naciones", $paises);

});

Route::get('formulario_buscador', "MetabuscadorController@formulario_buscador");
Route::post('buscar', "MetabuscadorController@buscar");





