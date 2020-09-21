FORMULARIO USUARIOS

<form action="<?php echo e(url('/usuarios/'.$usuario->id)); ?>" method="post" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<?php echo e(method_field('PATCH')); ?>

<br>

<label for="Cedula"><?php echo e('Cédula'); ?></label>
<input type="text" name="Cedula" id="Cedula" value="<?php echo e($usuario->Cedula); ?>">
<br><br>

<label for="Nombres"><?php echo e('Nombres'); ?></label>
<input type="text" name="Nombres" id="Nombres" value="<?php echo e($usuario->Nombres); ?>">
<br><br>

<label for="Apellidos"><?php echo e('Apellidos'); ?></label>
<input type="text" name="Apellidos" id="Apellidos" value="<?php echo e($usuario->Apellidos); ?>">
<br><br>

<label for="Telefono"><?php echo e('Teléfono'); ?></label>
<input type="text" name="Telefono" id="Telefono" value="<?php echo e($usuario->Telefono); ?>">
<br><br>

<label for="Direccion"><?php echo e('Dirección'); ?></label>
<input type="text" name="Direccion" id="Direccion" value="<?php echo e($usuario->Direccion); ?>">
<br><br>

<label for="Correo"><?php echo e('Correo'); ?></label>
<input type="email" name="Correo" id="Correo" value="<?php echo e($usuario->Correo); ?>">
<br><br>

<label for="Contraseña"><?php echo e('Contraseña'); ?></label>
<input type="password" name="Contraseña" id="Contraseña" value="<?php echo e($usuario->Contraseña); ?>">
<br><br>

<input type="submit" value="Guardar">
</form><?php /**PATH C:\Bitnami\wampstack-7.4.7-0\apache2\htdocs\LicoreriaWeb\resources\views/usuarios/edit.blade.php ENDPATH**/ ?>