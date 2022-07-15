@extends('layouts.template')

@section('title', 'Detalles Cliente')

@section('content')
    <div class="container">
        <div class="row align-items-center mb-2">
            <div class="col-sm-6 col-12">
                <div class="h1">
                    Detalles Cliente
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <div class="form-row form-inline justify-content-end">
                    <div class="col-auto my-1">
                        <a href="{{route("customers.index")}}" class="btn btn-link">Volver al Listado</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" class="form-control" name="first_name" value="{{ $customer->first_name }}" disabled>
        </div>
        <div class="form-group">
            <label>Apellido:</label>
            <input type="text" class="form-control" name="last_name" value="{{ $customer->last_name }}" disabled>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" value="{{ $customer->email }}" disabled>
        </div>
        <div class="form-group">
            <label>Dni:</label>
            <input type="text" class="form-control" name="dni" value="{{ $customer->dni }}" disabled>
        </div>
    </div>
@endsection
