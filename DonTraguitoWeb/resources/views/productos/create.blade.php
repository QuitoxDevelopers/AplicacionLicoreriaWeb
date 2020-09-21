FORMULARIO productoS

<form action="{{url('/productos')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<br>

<label for="Tipo">{{'Tipo'}}</label>
<input type="text" name="Tipo" id="Tipo" value="">
<br><br>

<label for="Marca">{{'Marca'}}</label>
<input type="text" name="Marca" id="Marca" value="">
<br><br>

<label for="Presentacion">{{'Presentacion'}}</label>
<input type="text" name="Presentacion" id="Presentacion" value="">
<br><br>

<label for="Precio">{{'Precio'}}</label>
<input type="text" name="Precio" id="Precio" value="">
<br><br>

<label for="Imagen">{{'Imagen'}}</label>
<input type="file" name="Imagen" id="Imagen" value="">
<br><br>


<input type="submit" value="Agregar">
</form>
