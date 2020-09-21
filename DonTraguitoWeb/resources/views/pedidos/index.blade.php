PEDIDOS
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#<th>
            <th>Usuario Asociado<th>
            <th>Fecha Emisión<th>
            <th>Fecha Entrega<th>  
            <th>Acciones<th> 
        </tr>
    </thead>
    <tbody>
    @foreach($pedidos as $pedido)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$pedido->usuario_id}}</td>
            <td>{{$pedido->FechaEmision}}</td>
            <td>{{$pedido->FechaEntrega}}</td>
            <td>
            <a href="{{ url('/pedidos/'.$pedido->id.'/edit')}}">Editar</a>
            
            <form method="post" action="{{url('/pedidos/'.$pedido->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Está seguro que desea eliminar?')">Eliminar</button>
            </form>
            
            </td>
        </tr>
    @endforeach
    </tbody> 
</table>
