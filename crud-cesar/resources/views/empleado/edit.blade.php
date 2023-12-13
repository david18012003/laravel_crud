@extends('layouts.plantillaBase');

@section('contenido')
<h2>Editar Datos</h2>

    <form  action="/empleados/{{$empleado->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="nb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$empleado->nombre}}">
        </div>
        <div class="nb-3">
            <label for="" class="form-label">Cedula</label>
            <input id="cedula" name="cedula" type="text" class="form-control" value="{{$empleado->cedula}}">
        </div>
        <div class="nb-3">
            <label for="" class="form-label">Direccion</label>
            <input id="direccion" name="direccion" type="text" class="form-control" value="{{$empleado->direccion}}">
        </div>
        <div class="nb-3">
            <label for="" class="form-label">Telefono</label>
            <input id="telefono" name="telefono" type="text" class="form-control" value="{{$empleado->telefono}}">
        </div>
        <a href="/empleados" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
        
    </form>
@endsection