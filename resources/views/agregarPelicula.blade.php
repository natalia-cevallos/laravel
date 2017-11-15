<html>
    <head>
        <title>Agregar Pelicula</title>
    </head>
    <body>
        <form id="agregarPelicula" name="agregarPelicula" method="POST">
          {{ csrf_field() }}
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="title" id="title" value="{{old('title')}}"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating" value="{{old('rating')}}"/>
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="awards" id="awards" value="{{old('awards')}}"/>
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="length" id="length" value="{{old('length')}}"/>
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

            <div >
              <label>Genero de la pelicula </label>
              <select name="genero">
                <option> Genero </option>


              </select>
            </div>
              <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>

        @if (count($errors) > 0)
          <div style="color:red">
            <ul>
              @foreach ($errors->all() as $error)
                <li> {{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif




    </body>
</html>
