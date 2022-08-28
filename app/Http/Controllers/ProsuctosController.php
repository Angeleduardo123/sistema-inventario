<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsuctosController extends Controller
{
    public function producto(){
        return view ('bandeja-productos');
    }

    public function altaProducto(){
        return view ('registro-productos');
    }

    public function modificaProducto(){
        return view ('modifica-registro');
    }
}
