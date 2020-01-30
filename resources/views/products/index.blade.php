@extends('layout')

@section('content')
    <div class="col-10 offset-1 table-responsive-sm">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <h5>Product List</h5>
            </div>
            <div>
                <a href="{{ route('products.pdf') }}" class="btn btn-outline-danger btn-sm">
                    <i class="fas fa-file-pdf"></i> PDF
                </a>
                <a href="{{ route('products.excel') }}" class="btn btn-outline-success btn-sm">
                    <i class="fas fa-file-excel"></i> EXCEL
                </a>
                <a href="{{ route('products.create') }}" class="btn btn-outline-primary btn-sm">
                    <i class="fas fa-plus"></i> Add Product
                </a>
            </div> 
        </div>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <table class="table table-hover">
            <thead class="thead-light">
            <tr class="text-center">
                <th>Id</th>
                <th>Name</th>
                <th>Stock</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('products.show',$product->id) }}" class="btn btn-sm btn-info mr-1">
                                <i class="fas fa-eye"></i> Details
                            </a>
                            <a href="{{ route('products.edit',$product->id) }}" class="btn btn-sm btn-warning mr-1">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('products.destroy',$product->id) }}" class="d-inline" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger mr-1">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    <div class="col-8 offset-2 d-flex justify-content-center">
        {{ $list->links() }}
    </div>
@endsection
