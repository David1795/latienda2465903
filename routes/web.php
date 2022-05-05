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

// primera ruta

Route::get('hello' , function (){

    echo "hola 2465";

});

//rutas de arreglos
Route::get('arreglo' , function(){
    $estudiantes = [
        "CA" => 2,
        "JO" => true,
        "AN" => 1.78
    ];
    
    foreach($estudiantes as $e){
        echo $e."<hr />";

    }


    $estudiantes[] = "David";

var_dump($estudiantes);


});

Route::get('paises', function(){
 
    $paises = [
        "colombia" => [
            "capital" => "Bogota",
            "moneda" => "peso",
            "poblacion" => 51000000,
            "ciudades" => [
                "Medellin",
                "Barranquilla",
                "Bogota"
            ]
        ],
        "peru" => [
            "capital" => "Lima",
            "moneda" => "Sol",
            "poblacion" => 32000000,
            "ciudades" => [
                "Arequipa",
                "Trujiyo"
               
            ]
        ],
        "paraguay" =>[
            "capital" => "Asuncion",
            "moneda" => "Guarani",
            "poblacion" => 7000000,
            "ciudades" => [
                "Luque"
         
            ]
        ],
        "Ecuador" =>[
            "capital" => "Quito",
            "moneda" => "Dolar",
            "poblacion" => 17000000,
            "ciudades"=>[
                "Guayaquil"
            ]
        ],
        "España" =>[
            "capital" => "Madrid",
            "moneda" => "Euro",
            "poblacion" => 47500000,
            "ciudades" =>[
                "Cataluña",
                "Ibiza"

            ]
        ] 

    ];


//mostrar vista

return view('paises')
->with("paises", $paises);

    
});