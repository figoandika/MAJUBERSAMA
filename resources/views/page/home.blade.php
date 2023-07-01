@extends('layouts/main')
@section('content')
<!--Gambar slider-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/image1.png" class="d-block w-100" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img src="img/image2.png" class="d-block w-100" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img src="img/image3.png" class="d-block w-100" alt="Image 3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!--Home-->

<!--Sample product utama-->
<div class="container mt-3">
  <h1 class="gradient-heading">Ｔｅｍｕｋａｎ Ｐｒｏｄｕｋ Ｕｎｇｇｕｌａｎ Ｋａｍｉ</h1>
</div>
<div class="container mt-3">
    <div class="row">
        @for ($i = 0; $i < 3; $i++)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card bg-dark text-light">
                    <img src="img/ipun.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Product</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-outline-light">Visit</a>
                    </div>
                </div>                  
            </div>
        @endfor
    </div>
</div>
  

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
@endsection

<style>
  .card:hover {
      transform: scale(105%);
      transition: transform 0.2s ease;
  }
  .gradient-heading {
      background: linear-gradient(to right, #007bff, #e100ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-align: center;
    }
</style>