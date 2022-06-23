@extends('layout')
@section('titulo', 'principal')
@section('contenido')
    <h1>{{$titulo}}</h1>

    <br>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="#nuevo" class="btn btn-primary" data-toggle="modal"><i class="fas fa-user-plus"></i> Nuevo Registro</a>
        </div>
    </div>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Cargo</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($empleados as $empleado)
            <tr>
                <th scope="row">{{$empleado->id}}</th>
                <td>{{$empleado->nombre}}</td>
                <td>{{$empleado->email}}</td>
                <td>{{$empleado->cargoEmpleado->nombre}}</td>
                <td>
                    <form action="#" method="post">
                        <a href="#"><i class="fas fa-info-circle fa-lg text-success"></i></a>
                        <a href="#"><i class="fas fa-user-edit fa-lg" style="margin-left: 20px; margin-right: 20px;"></i></a>

                        @csrf @method('DELETE')
                        <button type="submit " style="border: none"><i class="fas fa-trash-alt fa-lg text-danger"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            No hay empleados
        @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $empleados->links() }}
    </div>
@endsection()