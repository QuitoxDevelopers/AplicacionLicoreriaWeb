FORMULARIO USUARIOS

<form action="<?php echo e(url('\usuarios')); ?>" method="post" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<br>

<label for="Cedula"><?php echo e('Cédula'); ?></label>
<input type="text" name="Cedula" id="Cedula" value="">
<br><br>

<label for="Nombres"><?php echo e('Nombres'); ?></label>
<input type="text" name="Nombres" id="Nombres" value="">
<br><br>

<label for="Apellidos"><?php echo e('Apellidos'); ?></label>
<input type="text" name="Apellidos" id="Apellidos" value="">
<br><br>

<label for="Telefono"><?php echo e('Teléfono'); ?></label>
<input type="text" name="Telefono" id="Telefono" value="">
<br><br>

<label for="Direccion"><?php echo e('Dirección'); ?></label>
<input type="text" name="Direccion" id="Direccion" value="">
<br><br>

<label for="Correo"><?php echo e('Correo'); ?></label>
<input type="email" name="Correo" id="Correo" value="">
<br><br>

<label for="Contraseña"><?php echo e('Contraseña'); ?></label>
<input type="password" name="Contraseña" id="Contraseña" value="">
<br><br>

<input type="submit" value="Agregar">
</form><?php /**PATH C:\Bitnami\wampstack-7.4.7-0\apache2\htdocs\LicoreriaWeb\resources\views/usuarios/create.blade.php ENDPATH**/ ?>