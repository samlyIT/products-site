@extends('layouts.app')

@section('content')
<a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th><th>Title</th><th>Price</th><th>Quantity</th><th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{ $p->pid }}</td>
            <td>{{ $p->title }}</td>
            <td>{{ $p->price }}</td>
            <td>{{ $p->qty }}</td>
            <td>
                <a href="{{ route('products.show', $p) }}" class="btn btn-primary btn-sm">View</a>
                <a href="{{ route('products.edit', $p) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('products.destroy', $p) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this product?');">
                    @csrf 
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection