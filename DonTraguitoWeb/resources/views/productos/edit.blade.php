FORMULARIO productoS

<form action="{{url('/productos/'.$producto->Id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <br>
    <label for="Tipo">{{'Tipo'}}</label>
    <input type="text" name="Tipo" id="Tipo" value="{{$producto->Tipo}}">
    <br><br>

    <label for="Marca">{{'Marca'}}</label>
    <input type="text" name="Marca" id="Marca" value="{{$producto->Marca}}">
    <br><br>

    <label for="Presentacion">{{'Presentacion'}}</label>
    <input type="text" name="Presentacion" id="Presentacion" value="{{$producto->Presentacion}}">
    <br><br>

    <label for="Precio">{{'Precio'}}</label>
    <input type="text" name="Precio" id="Precio" value="{{$producto->Precio}}">
    <br><br>

    <label for="Imagen">{{'Imagen'}}</label>
    <br><br>
    <img src="{{ asset('storage').'/'. $producto->Imagen}}" alt="" width="200">
    <br><br>
    <input type="file" name="Imagen" id="Imagen" value="">
    <br><br>


    <input type="submit" value="Guardar">

</form>
