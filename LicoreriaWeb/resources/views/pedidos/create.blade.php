FORMULARIO PEDIDOS

<form action="{{url('\pedidos')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<br>

<label for="Usuario_id">{{'Usuario Asociado'}}</label>
<input type="text"  name="Usuario_id" id="Usuario_id" value="">
<br><br>

<label for="FechaEmision">{{'Fecha de Emisión'}}</label>
<input type="date"  name="FechaEmision" id="FechaEmision" value="">
<br><br>

<label for="FechaEntrega">{{'Fecha de Entrega'}}</label>
<input type="date" name="FechaEntrega" id="FechaEntrega" value="">
<br><br>

<input type="submit" value="Agregar">
</form>