<!DOCTYPE html>
<html>
<head>
  <title>Card Postingan</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #333;
      color: #fff;
    }

    .card {
      background-color: #222;
      border: none;
      margin-bottom: 20px;
    }

    .card img {
      max-width: 100%;
    }

    .card-title {
      font-weight: bold;
      font-size: 18px;
      margin-bottom: 10px;
    }

    .card-description {
      margin-bottom: 10px;
    }

    .card-button {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img src="image1.jpg" alt="Card Image">
          <div class="card-body">
            <h2 class="card-title">Judul Postingan 1</h2>
            <p class="card-description">Ini adalah paragraf singkat untuk postingan pertama.</p>
            <a href="#" class="btn btn-primary card-button">Buat Postingan</a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <img src="image2.jpg" alt="Card Image">
          <div class="card-body">
            <h2 class="card-title">Judul Postingan 2</h2>
            <p class="card-description">Ini adalah paragraf singkat untuk postingan kedua.</p>
            <a href="#" class="btn btn-primary card-button">Buat Postingan</a>
          </div>
        </div>
      </div>

      <!-- Menambahkan card-postingan lainnya di sini -->

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
