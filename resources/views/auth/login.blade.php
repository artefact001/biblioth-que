<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #000000;
            padding-top: 50px;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 30px;
            color: #343a40;
            text-align: center;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #000000;
            border-color: #000000;
        }
    </style>
</head>
<body>




<div class="container mt-5">
    <h1>Login</h1>
    <form method="POST" action="{{ route('auth.postLogin') }}" class="row g-3">
        @csrf

        <!-- Email Address -->
        <div class="col-md-12">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="col-md-12">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-primary mt-3">
                Login
            </button>
            <p>Vous n'avez pas de compte ?</p> <a href=""></a>
        </div>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


