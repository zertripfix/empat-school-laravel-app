@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <h1>Category name: {{ $category->name }}</h1>

    <h2 class="mt-5">Products</h2>

    @if ($category->products->count())
        <div class="row">
            @foreach ($category->products as $product)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ $product->name }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Category:
                                <a href="{{ route('categories.show', $product->category->id) }}">
                                    {{ $product->category->name }}
                                </a>
                            </p>
                            <p class="fw-bold">Price: {{ $product->price }} грн</p>

                            <p class="card-text">
                                Tags:
                                @foreach($product->tags as $tag)
                                    <a href="{{ route('tags.show', $tag->id) }}" class="badge bg-secondary">{{ $tag->name }}</a>
                                @endforeach
                            </p>
                            <a href="{{ route('products.show', parameters: $product->id) }}" class="btn btn-info">Discover more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>There are not Products in this Category!</p>
    @endif

@endsection