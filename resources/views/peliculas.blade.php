<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Peliculas </title>
  </head>
  <body>
    <h1> Lista de peliculas </h1>
    <ul>
      @forelse ($peliculas as $pelicula)
        <li> <a href="peliculas/{{$pelicula->id}}">{{$pelicula->title}}</a> </li>
        
        <a style="text-decoration: none" href="editarPelicula/{{$pelicula->id}}">Editar!</a>

        <form class="" action="{{route('borrarPeli', $pelicula)}}" method="post">
                 {{csrf_field()}}
                 {{ method_field('DELETE') }} {{-- se agrega solo para borrar --}}
              <button type="submit" name="delete"> Eliminar </button>
        </form>

      @empty
        No hay peliculas
      @endforelse
    </ul>


  </body>
</html>
