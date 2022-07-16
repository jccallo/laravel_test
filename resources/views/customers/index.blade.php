@extends('layouts.template')

@section('title', 'Listado de Clientes')

@section('content')
    <div class="container">
        <div class="row align-items-center mb-2">
            <div class="col-sm-6 col-12">
                <div class="h1">
                    Listado de Clientes
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <div class="form-row form-inline justify-content-end">
                    <div class="col-auto my-1">
                        <a href="{{ route('customers.create') }}" class="btn btn-primary">
                            Nuevo Cliente
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Dni</th>
                    <th scope="col" class="text-right">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <th scope="row">{{ $customer->id }}</th>
                        <td>{{ $customer->first_name }}</td>
                        <td>{{ $customer->last_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->dni }}</td>
                        <td class="text-right">
                            <a href="{{ route('customers.show', $customer) }}" class="btn btn-secondary btn-sm">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('customers.edit', $customer) }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('customers.destroy', $customer) }}" method="POST"
                                style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
