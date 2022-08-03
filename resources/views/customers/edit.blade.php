@extends('layouts.template')

@section('title', 'Edit Customer')

@section('content')
    <div class="container">
        <div class="row align-items-center mb-2">
            <div class="col-sm-6 col-12">
                <div class="h1">
                    Edit Customer
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
        <form action="{{ route('customers.update', $customer) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label>Id:</label>
                <input type="text" class="form-control" value="{{ $customer->id }}" disabled>
            </div>
            <div class="form-group">
                <label>Firstname:</label>
                <input type="text" class="form-control" name="first_name" value="{{ $customer->first_name }}">
            </div>
            <div class="form-group">
                <label>Lastname:</label>
                <input type="text" class="form-control" name="last_name" value="{{ $customer->last_name }}">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" value="{{ $customer->email }}">
            </div>
            <div class="form-group">
                <label>Document:</label>
                <input type="text" class="form-control" name="document" value="{{ $customer->document }}">
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input type="text" class="form-control" name="phone" value="{{ $customer->phone }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
