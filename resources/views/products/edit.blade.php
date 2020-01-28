@extends('layout')


@section('content')
    <div class="col-8 offset-2">
        <h4>Edit Product</h4>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control text-justify" id="desc" name="desc" rows="8" required>{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" min="1" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required>
            </div>
            <button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-save"></i> Update</button>
            <a href="{{ route('products.index') }}" class="btn btn-outline-primary float-right mr-2"><i class="fas fa-undo-alt"></i> Back To List</a>
        </form>
    </div>
@endsection
