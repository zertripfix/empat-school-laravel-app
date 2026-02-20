@extends('layouts.app')

@section('title', 'Add product')

@section('content')

    <a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">Back to list</a>

    <card class="card col-md-4">

        <div class="card-header">
            <h1>Add product</h1>
        </div>

        <form method="post" action="{{ route('products.store') }}">
            @csrf
            <div class="card-body">

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name"
                        name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control @error('description') is-invalid @enderror"
                        id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"  id="price"
                        name="price" value="{{ old('price') }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success w-100">Save</button>
            </div>
        </form>

    </card>

@endsection