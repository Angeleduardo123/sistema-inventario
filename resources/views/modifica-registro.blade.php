@extends('index')
@section('contenido')

    <br><br>
    <div class="col-12 d-flex justify-content-center">    
        <h4 class="align-content-center">Modificar Producto</h4>
    </div>
        <div class="container col-8 justify-content-center">    
            <div class="form-control">
                <br>
                <label for="">Nombre del Producto: </label>
                <input type="text" class="form-control" name="" id="" Disabled >
                <br>    
                <label for="">Descripcíon:</label> <br>
                <textarea class="form-control" name="" id="" cols="20" rows="2" Disabled ></textarea>
                <br>
                <label for="">Categoría:</label>
                <select name="" id="" class="form-select" Disabled >
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <br>
                <label for="">Sucursal:</label>
                <select name="" id="" class="form-select" Disabled >
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <br>
                <label for="">Precio</label>
                <input class="" type="number" name="" id="" Disabled >

                <label for="">fecha de compra</label>
                <input type="date" name="" id="" Disabled > 
                <br>
                <label for="">Estado:</label>
                <select name="" id="" class="form-select" >
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <br>    
                <label for="">Comentarios:</label> <br>
                <textarea class="form-control" name="" id="" cols="30" rows="3"></textarea>

            </div>
            <br>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>

        </div>   
@endsection 