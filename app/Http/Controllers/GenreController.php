<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;

class GenreController extends Controller
{
    public function show($id){
      $genero = Genre::find($id);
      return view('generosConPeli', compact('genero'));
    }

    

}
