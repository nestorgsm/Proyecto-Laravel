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


// Route::get('home/{nombre?}/{apellido?}', function($nombre = 'Amig@', $apellido = "Apellido") {
//     //ejem 1
//     // $name = "Nes";
//     // return view("home")->with("nombre",$name);

//     //ejem 2
//     // return view("home")->with("nombre",$nombre)->with("apellido",$apellido);

//     //ejemp 3
//     $paraFor = ['Name1', 'Name2', 'Name3'];
//     // $arr2 = ['Name1' => 'nestor', 'Name2' => 'juan', 'Name3' => 'Carlos'];
//     $data = ['nombre' => $nombre, 'apellido' => $apellido, 'nombres' => $paraFor];
//     return view("home", $data );

// })->name("inicio");
