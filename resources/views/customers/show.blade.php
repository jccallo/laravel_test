@extends('layouts.template')

@section('title', 'Show Customer')

@section('content')
    <div class="container">
        <div class="row align-items-center mb-2">
            <div class="col-sm-6 col-12">
                <div class="h1">
                    Show Customer
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
        <div class="form-group">
            <label>Id:</label>
            <input type="text" class="form-control" value="{{ $customer->id }}" disabled>
        </div>
        <div class="form-group">
            <label>Firstname:</label>
            <input type="text" class="form-control" value="{{ $customer->first_name }}" disabled>
        </div>
        <div class="form-group">
            <label>Lastname:</label>
            <input type="text" class="form-control" value="{{ $customer->last_name }}" disabled>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" value="{{ $customer->email }}" disabled>
        </div>
        <div class="form-group">
            <label>Document:</label>
            <input type="text" class="form-control" value="{{ $customer->document }}" disabled>
        </div>
        <div class="form-group">
            <label>Phone:</label>
            <input type="text" class="form-control" value="{{ $customer->phone }}" disabled>
        </div>
    </div>
@endsection
