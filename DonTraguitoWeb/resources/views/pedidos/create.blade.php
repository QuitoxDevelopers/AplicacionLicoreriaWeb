FORMULARIO PEDIDOS

<form action="{{url('/pedidos')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<br>

    <label for="CedulaRuc">{{'Cliente'}}</label>
    <select name="CedulaRuc" id="CedulaRuc">
        @foreach($clientes as $cliente)
            <option>{{$cliente->CedulaRuc}}</option>
        @endforeach
    </select>
    <br><br>

<label for="FechaEmision_Pedido">{{'Fecha de Emisión'}}</label>
<input type="date"  name="FechaEmision_Pedido" id="FechaEmision_Pedido" value="">
<br><br>

<label for="FechaEntrega_Pedido">{{'Fecha de Entrega'}}</label>
<input type="date" name="FechaEntrega_Pedido" id="FechaEntrega_Pedido" value="">
<br><br>

    <label for="PrecioTotal_Pedido">{{'Precio Total'}}</label>
    <input type="text" name="PrecioTotal_Pedido" id="PrecioTotal_Pedido" value="">
    <br><br>

    <label for="Descuento_Pedido">{{'Descuento'}}</label>
    <input type="text" name="Descuento_Pedido" id="Descuento_Pedido" value="">
    <br><br>

<input type="submit" value="Agregar">
</form>
