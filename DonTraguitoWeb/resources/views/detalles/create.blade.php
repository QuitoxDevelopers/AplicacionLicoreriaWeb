FORMULARIO DETALLES

<form action="{{url('\detalles')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <br>

    <label for="pedido_id">{{'# Pedido'}}</label>
    <input type="number" name="pedido_id" id="pedido_id" value="">
    <br><br>

    <label for="producto_id">{{'Producto'}}</label>
    <input type="text"  name="producto_id" id="producto_id" value="">
    <br><br>

    <label for="CantidadProducto">{{'Cantidad'}}</label>
    <input type="number" min="1" max="10"  name="Cantidad" id="Cantidad" value="1">
    <br><br>

    <input type="submit" value="Agregar">
</form>
