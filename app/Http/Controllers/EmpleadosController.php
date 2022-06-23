<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado\Empleado;


class EmpleadosController extends Controller
{
    public function index(){
        $titulo = "Vista principal de empleados";
        $empleados = Empleado::paginate();
        return view('Empleados.index', compact('titulo', 'empleados'));
    }
}