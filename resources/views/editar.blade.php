<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Editar </title>
  </head>
  <body>
    <form id="agregarPelicula" action="{{route('edicionFinal', $pelicula)}}"  name="agregarPelicula" method="POST">
   		{{csrf_field()}}
   		{{ method_field('PUT') }}

               <div>
                   <label for="titulo">Titulo</label>
                   <input type="text" name="title" id="titulo" value="{{old('title', $pelicula->title)}}"/>
               </div>
               <div>
                   <label for="rating">Rating</label>
                   <input type="text" name="rating" id="rating" value="{{$pelicula->rating}}"/>
               </div>
               <div>
                   <label for="premios">Premios</label>
                   <input type="text" name="awards" id="premios" value="{{$pelicula->awards}}"/>
               </div>
               <div>
                   <label for="duracion">Duracion</label>
                   <input type="text" name="length" id="duracion" value="{{$pelicula->length}}"/>
               </div>
               <div>
                   <label>Fecha de Estreno</label>

                   <select name="dia">
                     <option value="">Día</option>
                     @for($i=1; $i < 32; $i++)
                           @if ($i == old('dia'))
                             <option selected value="{{$i}}">{{$i}}</option>
                           @endif
                         <option value="{{$i}}">{{$i}}</option>
                      @endfor
                   </select>

                   <select name="mes">
                       <option value="">Mes</option>
                       @for ($i=1; $i < 13; $i++)
                         @if ($i == old('mes'))
                           <option selected value="{{$i}}">{{$i}}</option>
                         @endif
                           <option value="{{$i}}">{{$i}}</option>
                       @endfor
                   </select>

                   <select name="anio">
                       <option value="">Anio</option>
                       @for ($i=1900; $i < 2017; $i++)
                         @if ($i == old('anio'))
                           <option selected value="{{$i}}">{{$i}}</option>
                         @endif
                         <option value="{{$i}}">{{$i}}</option>
                       @endfor
                   </select>
               </div>
               <input type="submit" value="Editarpeliculacula" name="submit"/>
           </form>


             		@if (count($errors) > 0)
             			<ul style="color:red;">
                 			@foreach ($errors->all()  as $error)
                 				<li> {{$error}}  </li>
                 			@endforeach
             			</ul>
             		@endif

  </body>
</html>
