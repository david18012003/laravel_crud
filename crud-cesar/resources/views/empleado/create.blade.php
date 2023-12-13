@extends('layouts.plantillaBase');

@section('contenido')
<h2>CREAR REGISTRO</h2>

    <form  action="/empleados" method="POST">
        @csrf
        <div class="nb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
        </div>
        <div class="nb-3">
            <label for="" class="form-label">Cedula</label>
            <input id="cedula" name="cedula" type="text" class="form-control" tabindex="2">
        </div>
        <div class="nb-3">
            <label for="" class="form-label">Direccion</label>
            <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3">
        </div>
        <div class="nb-3">
            <label for="" class="form-label">Telefono</label>
            <input id="telefono" name="telefono" type="text" class="form-control" tabindex="3">
        </div>
        <a href="/empleados" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Crear</button>
        
    </form>
@endsection
