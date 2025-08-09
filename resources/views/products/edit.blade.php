@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->pid) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" 
                   class="form-control" 
                   id="title" 
                   name="title" 
                   value="{{ old('title', $product->title) }}" 
                   required>
        </div>

        <div class="form-group mb-3">
            <label for="price">Price</label>
            <input type="number" 
                   step="0.01"
                   class="form-control" 
                   id="price" 
                   name="price" 
                   value="{{ old('price', $product->price) }}" 
                   required>
        </div>

        <div class="form-group mb-3">
            <label for="qty">Quantity</label>
            <input type="number" 
                   class="form-control" 
                   id="qty" 
                   name="qty" 
                   value="{{ old('qty', $product->qty) }}" 
                   required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
