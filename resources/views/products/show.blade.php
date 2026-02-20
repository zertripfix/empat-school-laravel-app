@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">Back to list</a>
    <card class="card col-md-5">
        <div class="card-header">
            <h1>{{ $product->name }}</h1>
        </div>
        <div class="card-body">
            <p><strong>Desctiption: </strong>{{ $product->description }}</p>
            <p><strong>Created at: </strong>{{ $product->created_at->format('d.m.Y H.i') }}</p>
            <p><strong>Price: </strong>{{ $product->price }} грн</p>
        </div>
        <div class="card-footer">
            <form method="post" action="{{ route('products.delete', $product->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">
                    Delete product</button>
            </form>
        </div>
    </card>
@endsection