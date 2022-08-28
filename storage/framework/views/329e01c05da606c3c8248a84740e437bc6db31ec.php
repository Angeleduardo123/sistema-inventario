<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        body {
            background-color: gray;
        }
        .container {
            background-color: white;
            width: 500px;
            padding: 15px 15px 15px 15px; 
            display: block;
            justify-content: center;
            border-radius: 15px;
            border: 1px black;
        }
    </style>

</head>
<body>
    <br> <br> <br> <br> <br> <br> <br> <br> 
    <form>
        <div class="container  justify-content-center">
        
            <div class="form-group">
                <label for="" class="form-label">Correo</label>
                <input type="email" class="form-control w-75 p-2" id="" aria-describedby="emailHelp">
            <br>
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control w-75 p-2" id="">
            </div>
            <br>
            <a href="<?php echo e(route('producto')); ?>" class="btn btn-primary">Acceder</button>
        </div>    
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html><?php /**PATH /smart/System-inven/resources/views/login.blade.php ENDPATH**/ ?>