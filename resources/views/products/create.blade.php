@extends('layout')

@section('content')
    <div class="col-8 offset-2">
        <h5>Product Create</h5>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" id="desc" name="desc" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" min="1" class="form-control" id="stock" name="stock" required>
            </div>
            <button type="submit" class="btn btn-outline-success float-right"><i class="fas fa-save"></i> Store</button>
            <a href="{{ route('products.index') }}" class="btn btn-outline-primary float-right mr-2"><i class="fas fa-undo-alt"></i> Back To List</a>
        </form>
    </div>

@endsection
