<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado\Cargo;
use App\Models\Empleado\Empleado;


class EmpleadosController extends Controller
{
    public function index(){
        $titulo = "Vista principal de empleados";
        $empleados = Empleado::orderBy('id','desc')->paginate(5);
        $cargos = Cargo::all();
        return view('Empleados.index', compact('titulo', 'empleados', 'cargos'));
    }
    public function Crear(){
        $titulo = "Vista de crear de empleados";
        return view('Empleados.crear');
    }
    public function Editar(){
        $titulo = "Vista de Editar de empleados";
        return view('Empleados.Editar');
    }
    public function Mostrar(){
        $titulo = "Vista de Mostrar de empleados";
        return view('Empleados.Mostrar');
    }
    public function guardar(){

        $campos=request()->validate([
            'nombre'=>'required|min:3',
            'edad'=>'required',
            'direccion'=>'required',
            'email'=>'required|email',
            'idCargo'=>'required'
    
        ]);
        Empleado::create($campos);
    
        return redirect('empleados')->with('mensaje', 'Empleado Registrado');
    
    }

    public function actualizar(Empleado $empleado){

        $campos=request()->validate([
            'nombre'=>'required|min:3',
            'edad'=>'required',
            'direccion'=>'required',
            'email'=>'required|email',
            'idCargo'=>'required'
    
        ]);
        $empleado->update($campos);
    
        return redirect('empleados')->with('mensaje', 'Empleado actualizado');
    }
 

     public function eliminar(Empleado $empleado)
    {
        $empleado->delete();
        return redirect('empleados')->with('mensaje', 'Empleado eliminado');
    }

    
}