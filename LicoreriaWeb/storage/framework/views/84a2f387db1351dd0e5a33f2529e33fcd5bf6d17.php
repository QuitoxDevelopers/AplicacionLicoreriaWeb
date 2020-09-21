FORMULARIO PEDIDOS

<form action="<?php echo e(url('/pedidos/'.$pedido->id)); ?>" method="post" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<?php echo e(method_field('PATCH')); ?>

<br>

<label for="Usuario_id"><?php echo e('Usuario Asociado'); ?></label>
<input type="text"  name="Usuario_id" id="Usuario_id" value="<?php echo e($pedido->usuario_id); ?>">
<br><br>

<label for="FechaEmision"><?php echo e('Fecha de Emisión'); ?></label>
<input type="date"  name="FechaEmision" id="FechaEmision" value="<?php echo e($pedido->FechaEmision); ?>">
<br><br>

<label for="FechaEntrega"><?php echo e('Fecha de Entrega'); ?></label>
<input type="date" name="FechaEntrega" id="FechaEntrega" value="<?php echo e($pedido->FechaEntrega); ?>">
<br><br>

<input type="submit" value="Agregar">
</form><?php /**PATH C:\Users\danic\OneDrive\Escritorio\6to\NTProgramacion\AplicacionLicoreriaWeb\LicoreriaWeb\resources\views/pedidos/edit.blade.php ENDPATH**/ ?>