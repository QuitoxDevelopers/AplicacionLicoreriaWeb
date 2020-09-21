USUARIOS
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#<th>
            <th>Nombres<th>
            <th>Apellidos<th>
            <th>Cédula<th>
            <th>Teléfono<th>
            <th>Dirección<th>
            <th>Correo<th> 
            <th>Acciones<th>  
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($usuario->Nombres); ?></td>
            <td><?php echo e($usuario->Apellidos); ?></td>
            <td><?php echo e($usuario->Cedula); ?></td>
            <td><?php echo e($usuario->Telefono); ?></td>
            <td><?php echo e($usuario->Direccion); ?></td>
            <td><?php echo e($usuario->Correo); ?></td>
            <td>

            <a href="<?php echo e(url('/usuarios/'.$usuario->id.'/edit')); ?>">Editar</a>
            
            <form method="post" action="<?php echo e(url('/usuarios/'.$usuario->id)); ?>">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <button type="submit" onclick="return confirm('¿Está seguro que desea eliminar?')">Eliminar</button>
            </form>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\Users\danic\OneDrive\Escritorio\6to\NTProgramacion\AplicacionLicoreriaWeb\LicoreriaWeb\resources\views/usuarios/index.blade.php ENDPATH**/ ?>