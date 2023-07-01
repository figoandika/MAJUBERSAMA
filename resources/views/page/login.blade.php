<!DOCTYPE html>
<html>
<head>
  <title>Halaman Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    .login-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px;
      text-align: center;
      background-color: #f8f9fa;
      border: 1px solid #ddd;
      border-radius: 10px;
      margin-top: 100px;
    }
    
    .brand-logo {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 30px;
    }
  </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
          <img src="https://t4.ftcdn.net/jpg/04/83/90/95/360_F_483909563_Bupx0k1Nqdz2tXPs78semH3IoGEjehgF.jpg" alt="Logo" class="brand-logo">
          <form action="{{ route('prosesLogin') }}" method="POST">
            @csrf
            @if (session()->has('Error'))
                <p>{{ session()->get('Error') }}</p>
            @endif
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
        </div>
      </div>
    
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
