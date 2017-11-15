<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Actores </title>
  </head>
  <body>
    <h2> Lista de actores</h2>
    <ul>
{{--
      @foreach ($actores as $actor)
        <li> <a href="{{$actor->id}}">{{$actor->getNombreCompleto()}} </a></li>
      @endforeach --}}

      <form class="" method="post">
        {{csrf_field()}}
        <input type="text" name="search" value="">
        <button type="submit" name="button"> Buscar </button>
      </form>

      @forelse ($actores as $actor)
        <li> <a href="actores/{{$actor->id}}">{{$actor->getNombreCompleto()}} </a></li>
      @empty
        no hay actores
      @endforelse


      {{-- {{$actor->getNombreCompleto()}} PARA TRAER EL ACTOR CON EL ID--}}

    </ul>
  </body>
</html>
