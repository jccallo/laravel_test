@extends('layouts.template')

@section('title', 'Create Customer')

@section('content')
    <div class="container">
        <div class="row align-items-center mb-2">
            <div class="col-sm-6 col-12">
                <div class="h1">
                    Create Customer
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <div class="form-row form-inline justify-content-end">
                    <div class="col-auto my-1">
                        <a href="{{ route('customers.index') }}" class="btn btn-link">Back to list</a>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Firstname:</label>
                <input type="text" class="form-control" name="first_name">
            </div>
            <div class="form-group">
                <label>Lastname:</label>
                <input type="text" class="form-control" name="last_name">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Document:</label>
                <input type="text" class="form-control" name="document">
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
