@extends('layouts.template')

@section('title', 'Crear Cliente')

@section('content')
    <div class="container">
        <div class="row align-items-center mb-2">
            <div class="col-sm-6 col-12">
                <div class="h1">
                    Crear Cliente
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <div class="form-row form-inline justify-content-end">
                    <div class="col-auto my-1">
                        <a href="{{ route('customers.index') }}" class="btn btn-link">Volver al Listado</a>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="first_name">
            </div>
            <div class="form-group">
                <label>Apellido:</label>
                <input type="text" class="form-control" name="last_name">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Dni:</label>
                <input type="text" class="form-control" name="dni">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
