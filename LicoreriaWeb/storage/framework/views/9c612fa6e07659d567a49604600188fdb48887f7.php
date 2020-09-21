PEDIDOS
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#<th>
            <th>Usuario Asociado<th>
            <th>Fecha Emisión<th>
            <th>Fecha Entrega<th>  
            <th>Acciones<th> 
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($pedido->usuario_id); ?></td>
            <td><?php echo e($pedido->FechaEmision); ?></td>
            <td><?php echo e($pedido->FechaEntrega); ?></td>
            <td>
            <a href="<?php echo e(url('/pedidos/'.$pedido->id.'/edit')); ?>">Editar</a>
            
            <form method="post" action="<?php echo e(url('/pedidos/'.$pedido->id)); ?>">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <button type="submit" onclick="return confirm('¿Está seguro que desea eliminar?')">Eliminar</button>
            </form>
            
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody> 
</table>
<?php /**PATH C:\Users\danic\OneDrive\Escritorio\6to\NTProgramacion\AplicacionLicoreriaWeb\LicoreriaWeb\resources\views/pedidos/index.blade.php ENDPATH**/ ?>