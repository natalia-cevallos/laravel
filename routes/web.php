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
    return view('welcome');
});

// Route::get('decimeTuNombre/{nombre}/{apellido?}', function($nombre, $apellido = null ) {
//     if ($apellido == null) {
//       return "Tu nombre es " . $nombre . " sin apellido.";
//     } else {
//       return "Tu nombre es " . $nombre . " " . $apellido;
//     }
//
// });

// Route::get('/miPrimerRuta',function (){
//   return "Cree mi primera ruta en Laravel";
// });
//
// Route::get('/resultado/{numero}/{numerodos?}',function ($numero, $numerodos = null){
//   if ($numerodos == null) {
//     if ($numero%2=== 0) {
//       return "El número es par";
//     } else {
//       return "El número es impar";
//     }
//   } else {
//     return $numero*$numerodos;
//   }
// });



// Route::get('/peliculas/{id}', 'PeliculasController@buscarPeliculasId');
// Route::get('/peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre');


// Route::get('/actores', 'ActorController@directory');
// Route::get('/actores/{id}', 'ActorController@show');
Route::get('/actores', 'ActorController@search');
Route::post('/actores', 'ActorController@busqueda');



Route::get('/peliculas', 'PeliculasController@getPeliculas')->name('todas_las_pelis');
Route::get('/agregarPelicula', 'PeliculasController@agregarPelicula');
Route::post('/agregarPelicula', 'PeliculasController@nuevaPelicula');

Route::get('/peliculas/{id}', 'PeliculasController@show');

Route::get('editarPelicula/{id}', 'PeliculasController@editarPeli');
Route::put('editarPelicula/{id}', 'PeliculasController@edicionFinal')->name('edicionFinal');

Route::delete ('borrarPelicula/{id}', 'PeliculasController@delete')->name('borrarPeli');


Route::get('/genre/{id}', 'GenreController@show');

Route::get('test', function(){
  $products = App\Product::with('category')->get();
  dd($products);
});
