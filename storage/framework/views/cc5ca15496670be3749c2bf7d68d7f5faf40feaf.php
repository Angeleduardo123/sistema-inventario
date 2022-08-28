<?php $__env->startSection('contenido'); ?>
    
    <div class="container">
        <br>
        <center><h4>Tabla de productos</h4></center>
        <br>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre de Producto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Sucursal</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo  ahsgdhasdgasdgasjdgagsh</td>
                    <td>
                        <a href="<?php echo e(route('modificaProducto')); ?>" class="btn btn-primary">Editar <i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="btn btn-danger">Eliminar <i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /smart/System-inven/resources/views/bandeja-productos.blade.php ENDPATH**/ ?>