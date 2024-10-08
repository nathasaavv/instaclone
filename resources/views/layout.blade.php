<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Instagram ')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #fafafa;
        }

        .navbar {
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.1);
        }

        .bottom-nav {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: white;
            box-shadow: 0 -1px 6px rgba(0, 0, 0, 0.1);
        }

        .bottom-nav .nav-link {
            font-size: 24px;
        }

        .bottom-nav .nav-link.active {
            color: #007bff;
        }

        .content-area {
            padding-bottom: 60px; /* To avoid overlap with bottom navigation */
        }

        .search-bar {
            margin-top: 15px;
        }

        .search-input {
            width: 100%;
        }
    </style>
</head>
<body>

    

    <!-- Konten Dinamis -->
    <div class="container mt-3 content-area">
        @yield('content')  <!-- Tempat konten dinamis -->
    </div>

    <!-- Bottom Navigation -->
    <nav class="navbar bottom-nav navbar-light bg-white">
        <div class="container d-flex justify-content-around">

            <a class="nav-link" href="{{ route('home') }}"><i class="bi bi-house-door"></i></a>

            <a class="nav-link" href="{{ route('post.create') }}"><i class="bi bi-plus-square"></i></a>
            <a class="nav-link" href="{{ route('post.profile') }}"><i class="bi bi-person"></i></a>

        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-OTklS9m2pcAtyuPJyQOKretnzdz1gtZ5GH0A67aJ+um7rVZZp7ErYg7J2z0WrZh7" crossorigin="anonymous"></script>
</body>
</html>
