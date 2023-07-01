@extends('layouts/main')
@section('content')

<div class="container mt-3">
    <div class="row">
        {{-- @for ($i = 0; $i < 15; $i++)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card bg-dark text-light">
                    <img src="img/ipun.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Product</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-outline-light">Order Now</a>
                    </div>
                </div>
            </div>
        @endfor --}}
        @foreach ($products as $product)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card bg-dark text-light">
                <img src="img/ipun.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->nama }}</h5>
                    <p class="card-text">{{ $product->capt }}</p>
                    <p class="card-text">{{ $product->harga }}</p>
                    <a href="#" class="btn btn-outline-light">Order Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection
<style>
    .card:hover {
        transform: scale(105%);
        transition: transform 0.2s ease;
    }
</style>