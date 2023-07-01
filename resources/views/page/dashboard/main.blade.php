@extends('layouts/dashboard')
@section('content')
    <div class="container">
        <h1>Data Store</h1>
        @if (session('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <a href="/products/create" class="btn btn-success">Add Product</a>
        @foreach ($data as $d)
            <div class="card text-center mt-5">
                <div class="card-body">
                    <h5 class="card-title">{{ $d->nama }}</h5>
                    <p class="card-text">{{ $d->capt }}</p>
                    <p class="card-text">Rp. {{ $d->harga }}</p>

                    <a href="{{ route('products.edit', $d->id) }}" class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                    <form action="{{ route('products.destroy', $d->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </form>
                </div>
                <div class="card-footer text-body-secondary">
                    {{ $d->created_at }}
                </div>
            </div>
        @endforeach
    </div>
@endsection
