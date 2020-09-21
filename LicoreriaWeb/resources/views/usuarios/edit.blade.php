FORMULARIO USUARIOS

<form action="{{url('/usuarios/'.$usuario->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
<br>

<label for="Cedula">{{'Cédula'}}</label>
<input type="text" name="Cedula" id="Cedula" value="{{$usuario->Cedula}}">
<br><br>

<label for="Nombres">{{'Nombres'}}</label>
<input type="text" name="Nombres" id="Nombres" value="{{$usuario->Nombres}}">
<br><br>

<label for="Apellidos">{{'Apellidos'}}</label>
<input type="text" name="Apellidos" id="Apellidos" value="{{$usuario->Apellidos}}">
<br><br>

<label for="Telefono">{{'Teléfono'}}</label>
<input type="text" name="Telefono" id="Telefono" value="{{$usuario->Telefono}}">
<br><br>

<label for="Direccion">{{'Dirección'}}</label>
<input type="text" name="Direccion" id="Direccion" value="{{$usuario->Direccion}}">
<br><br>

<label for="Correo">{{'Correo'}}</label>
<input type="email" name="Correo" id="Correo" value="{{$usuario->Correo}}">
<br><br>

<label for="Contraseña">{{'Contraseña'}}</label>
<input type="password" name="Contraseña" id="Contraseña" value="{{$usuario->Contraseña}}">
<br><br>

<input type="submit" value="Guardar">
</form>