FORMULARIO PEDIDOS

<form action="<?php echo e(url('\pedidos')); ?>" method="post" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<br>

<label for="Usuario_id"><?php echo e('Usuario Asociado'); ?></label>
<input type="text"  name="Usuario_id" id="Usuario_id" value="">
<br><br>

<label for="FechaEmision"><?php echo e('Fecha de Emisión'); ?></label>
<input type="date"  name="FechaEmision" id="FechaEmision" value="">
<br><br>

<label for="FechaEntrega"><?php echo e('Fecha de Entrega'); ?></label>
<input type="date" name="FechaEntrega" id="FechaEntrega" value="">
<br><br>

<input type="submit" value="Agregar">
</form><?php /**PATH C:\Users\danic\OneDrive\Escritorio\6to\NTProgramacion\AplicacionLicoreriaWeb\LicoreriaWeb\resources\views/pedidos/create.blade.php ENDPATH**/ ?>