@extends('layout')

@section('content')
    <div class="col-8 offset-2">
        <h4 class="text-center mt-3">Product Detail</h4>
        <hr>

        <h5 class="text-primary">Id</h5>
        <p>{{ $product->id }}</p>
        <hr>

        <h5 class="text-primary">Name</h5>
        <p>{{ $product->name }}</p>
        <hr>

        <h5 class="text-primary">Description</h5>
        <p>{{ $product->description }}</p>
        <hr>

        <h5 class="text-primary">stock</h5>
        <p>{{ $product->stock }}</p>
        <hr>

        <a href="{{ route('products.index') }}" class="btn btn-outline-primary float-right">
            <i class="fas fa-undo-alt"></i> Back To List
        </a>
    </div>
@endsection
