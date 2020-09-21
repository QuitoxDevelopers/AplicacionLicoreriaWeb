productoS
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>ID<th>
            <th>Tipo<th>
            <th>Marca<th>
            <th>Presentación<th>
            <th>Precio<th>
            <th>Imagen<th>
        </tr>
    </thead>
    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{{$producto->Id}}</td>
            <td>{{$producto->Tipo}}</td>
            <td>{{$producto->Marca}}</td>
            <td>{{$producto->Presentacion}}</td>
            <td>{{$producto->Precio}}</td>

            <td>
                <img src="{{ asset('storage').'/'.$producto->Imagen}}" alt="" width="200">
            </td>
            <td>

            <a href="{{ url('/productos/'.$producto->Id.'/edit')}}">Editar</a>

            <form method="post" action="{{url('/productos/'.$producto->Id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Está seguro que desea eliminar?')">Eliminar</button>
            </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
