Listado de productos
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>ID<th>
            <th>Tipo<th>
            <th>Marca<th>
            <th>Presentación<th>
            <th>Precio<th>
            <th>Stock<th>
            <th>Imagen<th>
        </tr>
    </thead>
    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{{$producto->Id_Producto}}</td>
            <td>{{$producto->Tipo_Producto}}</td>
            <td>{{$producto->Marca_Producto}}</td>
            <td>{{$producto->Presentacion_Producto}}</td>
            <td>{{$producto->Precio_Producto}}</td>
            <td>{{$producto->Stock_Producto}}</td>

            <td>
                <img src="{{ asset('storage').'/'.$producto->Imagen_Producto}}" alt="" width="100">
            </td>
            <td>

                <a href="{{ url('/productos/'.$producto->Id_Producto.'/edit')}}">Editar</a>

                <form method="post" action="{{url('/productos/'.$producto->Id_Producto)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                <button type="submit" onclick="return confirm('¿Está seguro que desea eliminar?')">Eliminar </button>
                </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
