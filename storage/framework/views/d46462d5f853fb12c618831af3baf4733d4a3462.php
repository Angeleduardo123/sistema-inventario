<?php $__env->startSection('contenido'); ?>

    <br><br>
    <div class="col-12 d-flex justify-content-center">    
        <h4 class="align-content-center">Registro de Productos</h4>
    </div>
        <div class="container col-8 justify-content-center">    
            <div class="form-control">
                <br>
                <label for="">Nombre del Producto: </label>
                <input type="text" class="form-control" name="" id="">
                <br>    
                <label for="">Descripcíon:</label> <br>
                <textarea class="form-control" name="" id="" cols="20" rows="2"></textarea>
                <br>
                <label for="">Categoría:</label>
                <select name="" id="" class="form-select" >
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <br>
                <label for="">Sucursal:</label>
                <select name="" id="" class="form-select" >
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <br>
                <label for="">Precio</label>
                <input class="form-control" type="number" name="" id="">

                <label for="">fecha de compra</label>
                <input type="date" name="" id="">

            </div>
            <br>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>

        </div>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /smart/System-inven/resources/views/registro-productos.blade.php ENDPATH**/ ?>