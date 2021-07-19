<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function github (){
        $datos['clientes']=Cliente::paginate(10);
        return view('admin.cliente.index', $datos);
        }
}
