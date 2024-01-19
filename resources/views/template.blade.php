<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env('APP_NAME') }} - @yield('judul') </title>
</head>
<body>
    <header>
        <nav>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
        </nav>
    </header>

    @yield('content')

    <footer>
        <p>Copyright Intan Nuraini - 2024</p>
    </footer>
    
</body>
</html>