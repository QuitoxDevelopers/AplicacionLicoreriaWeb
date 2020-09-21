FORMULARIO USUARIOS

<form action="{{url('\usuarios')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<br>

<label for="Cedula">{{'Cédula'}}</label>
<input type="text" name="Cedula" id="Cedula" value="">
<br><br>

<label for="Nombres">{{'Nombres'}}</label>
<input type="text" name="Nombres" id="Nombres" value="">
<br><br>

<label for="Apellidos">{{'Apellidos'}}</label>
<input type="text" name="Apellidos" id="Apellidos" value="">
<br><br>

<label for="Telefono">{{'Teléfono'}}</label>
<input type="text" name="Telefono" id="Telefono" value="">
<br><br>

<label for="Direccion">{{'Dirección'}}</label>
<input type="text" name="Direccion" id="Direccion" value="">
<br><br>

<label for="Correo">{{'Correo'}}</label>
<input type="email" name="Correo" id="Correo" value="">
<br><br>

<label for="Contraseña">{{'Contraseña'}}</label>
<input type="password" name="Contraseña" id="Contraseña" value="">
<br><br>

<input type="submit" value="Agregar">
</form>