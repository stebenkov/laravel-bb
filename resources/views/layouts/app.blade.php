<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') :: Объявления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/main.css" type="text/css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a href="{{ route('index') }}" class="nacvbar-brand me-auto">Главная</a>
                <a href="{{ route('register') }}" class="nav-item nav-link">Регистрация</a>
                <a href="{{ route('login') }}" class="nav-item nav-link">Вход</a>
                <a href="{{ route('home') }}" class="nav-item nav-link">Мои объявления</a>
                <form action="{{ route('logout') }}" method="POST" class="form-inline">
                    @csrf
                    <input type="submit" class="btn btn-danger" value="Выход">
                </form>
            </div>
        </nav>
        <h1 class="my-3 text-center">Объявления</h1>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
