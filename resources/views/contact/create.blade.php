<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>register</title>
    <style>
        body {
            background-color: #fafafa;
        }
        .card {
            border: 1px solid #dbdbdb;
            box-shadow: none;
            margin-top: 50px;
            padding: 40px;
            max-width: 400px;
            border-radius: 8px;
        }
        .btn-success {
            background-color: #0095f6;
            border-color: #0095f6;
        }
        .btn-success:hover {
            background-color: #007bbd;
            border-color: #007bbd;
        }
        .form-control {
            background-color: #fafafa;
            border: 1px solid #dbdbdb;
            border-radius: 5px;
            height: 35px;
        }
        .card-header {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: #262626;
        }
        .register-link {
            text-align: center;
            margin-top: 20px;
        }
        .register-link a {
            color: #0095f6;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-header">Registrasi</div>
            <div class="card-body">
                <form action="{{ route ('register') }}" method="POST">
                    {!! csrf_field() !!}

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nama lengkap Anda" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    </div>

                    <div class="d-grid">
                        <input type="submit" value="Daftar" class="btn btn-success">
                    </div>
                </form>

                <div class="register-link">
                    <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-OTklS9m2pcAtyuPJyQOKretnzdz1gtZ5GH0A67aJ+um7rVZZp7ErYg7J2z0WrZh7" crossorigin="anonymous"></script>
</body>
</html>
