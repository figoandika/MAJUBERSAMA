@extends('layouts/dashboard')
@section('content')
    <div class="container">
        <h1>Data Store</h1>
        <form action="/products" method="POST">
            @csrf
            @method('POST')
            <div class="mb-2 w-50">
                <label for="nama_product" class="form-label">Nama Product</label>
                <input name="nama_product" type="text" class="form-control" id="nama_product">
            </div>
            <div class="mb-2 w-50">
                <label for="caption" class="form-label">Caption</label>
                <input name="capt" type="text" class="form-control" id="caption">
            </div>
            <div class="mb-2 w-50">
                <label for="harga" class="form-label">Harga</label>
                <input name="harga" type="number" class="form-control" id="harga">
            </div>
            <button type="submit" class="btn btn-success">Add</button>
        </form>
        <a href="/dashboard/main" class="btn btn-danger my-5">Back</a>
    </div>
@endsection
