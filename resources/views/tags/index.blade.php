@extends('layouts.app')

@section('title', 'Tags')

@section('content')
    <h1>Tags</h1>
    <div class="d-flex flex-wrap gap-2 mb-3 mt-3">
        @foreach ($tags as $tag)
            <a class="btn btn-primary" href="{{ route('tags.show', $tag->id) }}">
                {{ $tag->name }}
            </a>
        @endforeach
    </div>
@endsection