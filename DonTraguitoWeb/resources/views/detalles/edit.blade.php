FORMULARIO DETALLES
<form action="{{url('/detalles/'.$detalle->pedido_id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <br>

    <label for="pedido_id">{{'# Pedido'}}</label>
    <input type="text"  name="pedido_id" id="pedido_id" value="{{$detalle->pedido_id}}">
    <br><br>

    <label for="producto_id">{{'Producto'}}</label>
    <input type="text"  name="producto_id" id="producto_id" value="{{$detalle->producto_id}}">
    <br><br>

    <label for="Cantidad">{{'Cantidad'}}</label>
    <input type="text"  name="Cantidad" id="Cantidad" value="{{$detalle->Cantidad}}">
    <br><br>

    <input type="submit" value="Guardar">
</form>
