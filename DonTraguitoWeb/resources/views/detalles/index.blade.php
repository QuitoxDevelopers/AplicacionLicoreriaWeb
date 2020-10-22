Detalles
<table class="table table-light">
    <thead class="thead-light">
    <tr>
        <th># Pedido<th>
        <th>Cantidad<th>
        <th>dsaas<th>
        <th>Acciones<th>
    </tr>
    </thead>
    <tbody>
    @foreach($detalles as $detalle)
        <tr>
            <td>{{$detalle->pedido_id}}</td>
            <td>{{$detalle->producto_id}}</td>
            <td>{{$detalle->Cantidad}}</td>

            <td>
                <a href="{{ url('/detalles/'.$detalle->pedido_id.'/edit')}}">Editar</a>

                <form method="post" action="{{url('/detalles/'.$detalle->pedido_id)}}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('¿Está seguro que desea eliminar?')">Eliminar</button>
                </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
