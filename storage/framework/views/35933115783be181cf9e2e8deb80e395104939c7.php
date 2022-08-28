<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        *{
            font-family: 'Roboto', sans-serif;
            margin: 0;
        }

        body {
            background-color: gray;
        }


        header {
            width: 100%;
        }

        .contenido {
            padding: 15px 15px 10px 10px;
        }

        footer {
            background-color: black;
            color: white; 
            position: bottom;
        }

        footer p{
            margin: 0;
            padding: 12px;
            color: rgb(100,100,100);
        }

        footer > .pull-right {
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }

    </style>

</head>
<body>
    <!-- Nav-bar star -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo e(route('altaProducto')); ?>">Alta de producto</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('producto')); ?>">Bandeja de productos</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a href="<?php echo e(route('cerrarSesion')); ?>" class="btn btn-info"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                    </form>
                </div>
            </div>
        </nav>
    </header>  
    <!-- Nav-bar end -->
    <!-- Contenido star -->
    <div class="contenido">    
        <div class="row">
            <section class="row">
                <?php echo $__env->yieldContent('contenido'); ?>
            </section>    
        </div>
    </div>
    <!-- Contenido end -->
    <!-- Footer start -->
    <footer>
        <div class="pull-right">
            <p>Angel Eduardo Osoños Gomez</p>  
        </div>
    </footer>
    <!-- Footer end -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4bdbb2299a.js" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH /smart/System-inven/resources/views/index.blade.php ENDPATH**/ ?>