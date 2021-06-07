<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />
    <link href={{ asset('css/app.css') }} rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body class="d-flex flex-column">

<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('timesheets.index')}}">Учет рабочего времени </a>
    </nav>
</header>

<main class="flex-grow-1">
    @yield('content')
</main>
</body>
</html>
