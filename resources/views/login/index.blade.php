<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
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
        .login-link {
            text-align: center;
            margin-top: 20px;
        }
        .login-link a {
            color: #0095f6;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="{{ route ('check') }}" method="POST">
                    {!! csrf_field() !!}

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    </div>

                    <div class="d-grid">
                        <input type="submit" value="Login" class="btn btn-success">
                    </div>
                </form>

                <div class="login-link">
                    <p>Belum punya akun? <a href="{{ route('reg') }}">Daftar</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-OTklS9m2pcAtyuPJyQOKretnzdz1gtZ5GH0A67aJ+um7rVZZp7ErYg7J2z0WrZh7" crossorigin="anonymous"></script>
</body>
</html>
