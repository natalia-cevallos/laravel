<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Pelicula </title>
  </head>
  <body>
    <h4> {{$pelicula->title}} </h4>

      <ul>
        <li> {{$pelicula->rating}} </li>
        <li> {{$pelicula->awards}} </li>
        <li> {{$pelicula->length}} </li>
      </ul>
  </body>
</html>
