USUARIOS
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#<th>
            <th>Nombres<th>
            <th>Apellidos<th>
            <th>Cédula<th>
            <th>Teléfono<th>
            <th>Dirección<th>
            <th>Correo<th> 
            <th>Acciones<th>  
        </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$usuario->Nombres}}</td>
            <td>{{$usuario->Apellidos}}</td>
            <td>{{$usuario->Cedula}}</td>
            <td>{{$usuario->Telefono}}</td>
            <td>{{$usuario->Direccion}}</td>
            <td>{{$usuario->Correo}}</td>
            <td>

            <a href="{{ url('/usuarios/'.$usuario->id.'/edit')}}">Editar</a>
            
            <form method="post" action="{{url('/usuarios/'.$usuario->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Está seguro que desea eliminar?')">Eliminar</button>
            </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
