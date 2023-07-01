<!DOCTYPE html>
<html>

<head>
    <title>Halaman Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar li a {
            display: block;
            padding: 10px;
            background-color: #e9ecef;
            color: #343a40;
            text-decoration: none;
        }

        .sidebar li a:hover {
            background-color: #dee2e6;
        }

        .logout {
            position: fixed;
            bottom: 20px;
            left: 20px;
        }

        .content {
            margin-left: 250px;
            /* Menyesuaikan lebar sidebar */
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Store</a></li>
            <li><a href="#">Posts</a></li>
            <li><a href="/">Go to site</a></li>
        </ul>

        <a href="#" class="logout">Logout</a>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
