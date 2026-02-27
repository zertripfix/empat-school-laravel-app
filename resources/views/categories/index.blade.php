@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <h1>Categories</h1>
    <div class="d-flex flex-wrap gap-2 mb-3 mt-3">
        @foreach ($categories as $category)
            <a class="btn btn-primary" href="{{ route('categories.show', $category->id) }}">
                {{ $category->name }}
            </a>
        @endforeach
    </div>
@endsection