<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Logowanie admina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="col-md-4 mx-auto">

        <h3 class="mb-4 text-center">Panel admina</h3>

        @if($errors->any())
            <div class="alert alert-danger">Błędny login lub hasło</div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf

            <div class="mb-3">
                <label>Login</label>
                <input name="login" class="form-control">
            </div>

            <div class="mb-3">
                <label>Hasło</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="text-center mt-3">
                <a href="{{ route('home') }}" class="btn btn-outline-secondary w-100">
                    Powrót do strony głównej
                </a>
            </div>

            <button class="btn btn-primary w-100">Zaloguj</button>
        </form>

    </div>
</div>

</body>
</html>
