Editar productos

<form action="{{url('/productos/'.$producto->Id_Producto)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <br>
    <label for="Tipo_Producto">{{'Tipo'}}</label>
    <input type="text" name="Tipo_Producto" id="Tipo_Producto" value="">
    <br><br>

    <label for="Marca_Producto">{{'Marca'}}</label>
    <input type="text" name="Marca_Producto" id="Marca_Producto" value="">
    <br><br>

    <label for="Presentacion_Producto">{{'Presentacion'}}</label>
    <input type="text" name="Presentacion_Producto" id="Presentacion_Producto" value="">
    <br><br>

    <label for="Precio_Producto">{{'Precio'}}</label>
    <input type="text" name="Precio_Producto" id="Precio_Producto" value="">
    <br><br>

    <label for="Stock_Producto">{{'Stock'}}</label>
    <input type="text" name="Stock_Producto" id="Stock_Producto" value="">
    <br><br>

    <label for="Imagen_Producto">{{'Imagen'}}</label>
    <br><br>
    <img src="{{ asset('storage').'/'. $producto->Imagen_Producto}}" alt="" width="200">
    <br><br>
    <input type="file" name="Imagen_Producto" id="Imagen_Producto" value="">
    <br><br>


    <input type="submit" value="Guardar">

</form>
