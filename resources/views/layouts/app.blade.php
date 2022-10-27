<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('/css/app.css') }}">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand bg-light navbar-light">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class='nav-link menu-link menu-link__active'>Главная страница</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class='nav-link menu-link'>Каталог статей</a>
                    </li>
                </ul>
                <a href="https://github.com/Jokand" class="d-flex justify-content-end">
                    <i class="bi bi-github" style="font-size: 2rem; color:black;"></i>
                </a>
            </div>
        </nav>
        @yield('hero')
        @yield('content')
        @yield('vue')
    </div>
</body>

</html>


