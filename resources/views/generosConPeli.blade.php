<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    {{$genero->name}}
    <br>
    <ul>
      @if ($genero->movies)
        @foreach ($genero->movies as $pelicula)
          <li> <a href="pelicula/{{$pelicula->id}}">{{$pelicula->title}}</a></li>
          <br>
        @endforeach
      @endif
    </ul>

  </body>
</html>
