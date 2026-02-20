@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h1>Products list</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add a product</a>

    @if ($products->count())
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ $product->name }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="fw-bold">{{ $product->price }} грн</p>
                            <a href="{{ route('products.show', parameters: $product->id) }}" class="btn btn-info">Discover more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>There are no products!</p>
    @endif
@endsection