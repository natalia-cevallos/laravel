<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Movie;

class PeliculasController extends Controller {
  private $peliculas = [
        1 => "Toy Story",
        2 => "Bucando a Nemo",
        3 => "Avatar",
        4 => "Star Wars: Espisodio V",
        5 => "Up",
        6 => "Mary and Max"
      ];

  //  public function buscarPeliculasId($id) {
  //      return ($this->peliculas[$id]);
  //    }
   //
  //   public function buscarPeliculaNombre($nombre) {
  //     foreach ($this->peliculas as $pelicula) {
  //       if ($nombre == $pelicula){
  //         $result = $pelicula;
  //         break;
  //       } else {
  //         $result = "No se econtraton resultados";
  //       }
  //     }
  //     return $result;
  //   }


  public function getPeliculas(){
    $peliculas = Movie::all();
    return view('peliculas', compact('peliculas'));
  }

    public function show($id){
      $pelicula = Movie::find($id);
      return view('pelicula', compact ('pelicula'));
    }

    public function agregarPelicula(){
      return view('agregarPelicula');
    }


    public function nuevaPelicula(Request $request){
      $this->validate($request,
      [
        'title' => 'required|unique:movies,title',
        'rating' => 'required|numeric|between:1,10',
        'awards' => 'required',
        'length' => 'required',
        'dia' => 'required',
        'mes' => 'required',
        'anio' => 'required'
      ],
      [
        'title.required' => 'El campo titulo es requerido',
        'rating.required' => 'El campo rating es requerido',
        'rating.numeric' => 'El campo rating debe ser numerico',
        'rating.between:1,10' => 'El rating es del 1 a 10',
        'awards.required' => 'El campo premios es requerido',
        'length.required' => 'El campo duración es requerido'
      ]);

     $pelicula = new Movie($request->all());
     $released_date = $request->input('anio'). '-' .$request->input('mes'). '-' .$request->input('dia');

     $pelicula->release_date = date('Y-m-d', strtotime($released_date));
     $pelicula->save();
     return redirect()->route('todas_las_pelis');

   }
//EDITAR
   public function editarPeli($id) {
     $pelicula = Movie::find($id);
     return view('editar', compact ('pelicula'));
   }

   public function edicionFinal($id,Request $request){
		$this->validate($request,
			[
				'title' => 'required|unique:movies',
				'rating' => 'required|numeric|between:1,10',
				'awards' => 'required',
				'length' => 'required',
				'dia' => 'required',
				"mes" => 'required',
				"anio" => 'required'
			],
			[
				'title.required' => 'el campo titulo es requerido',
				'rating.required' => 'el campo rating es requerido',
				'rating.numeric' => 'el campo rating deben ser solo numeros'
			]
		);
		$pelicula = Movie::find($id);
		$pelicula->fill($request->all());
		$pelicula->save();
		return redirect()->route('todas_las_pelis');
	}

//ELIMINAR

       public function delete($id){
       		$pelicula = Movie::find($id);
       		$pelicula->delete();

       		return redirect()->route('todas_las_pelis');
       	}


      public function mostrarGenero(){
        
      }


}
