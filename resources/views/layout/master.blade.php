<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>

<body>

<header>
    <p>my header</p>
</header>

@yield('body')

<footer>
    <p>my footer</p>
</footer>

@yield('test')
</body>

</html>
