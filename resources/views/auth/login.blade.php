<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - Perpustakaan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, .35);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card p-4">
                    <div class="text-center mb-4">
                        <i class="fas fa-book-reader fa-2x text-primary"></i>
                        <h4 class="mt-2 font-weight-bold">Sistem Perpustakaan</h4>
                        <p class="text-muted">Silakan login untuk melanjutkan</p>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login.submit') }}">
                        @csrf
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Ingat saya</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                        <hr>
                        <div class="text-center text-gray-500">
                            Akun : admin@perpustakaan.com / password
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
