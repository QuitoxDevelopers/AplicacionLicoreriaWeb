FORMULARIO PEDIDOS

<form action="{{url('/pedidos/'.$pedido->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
<br>

<label for="Usuario_id">{{'Usuario Asociado'}}</label>
<input type="text"  name="Usuario_id" id="Usuario_id" value="{{$pedido->usuario_id}}">
<br><br>

<label for="FechaEmision">{{'Fecha de Emisión'}}</label>
<input type="date"  name="FechaEmision" id="FechaEmision" value="{{$pedido->FechaEmision}}">
<br><br>

<label for="FechaEntrega">{{'Fecha de Entrega'}}</label>
<input type="date" name="FechaEntrega" id="FechaEntrega" value="{{$pedido->FechaEntrega}}">
<br><br>

<input type="submit" value="Agregar">
</form>