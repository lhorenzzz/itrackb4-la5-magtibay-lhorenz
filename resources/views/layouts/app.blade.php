<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'BOOKS')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="p-3 mb-2 bg-light text-dark" style="font-family: 'Arial', sans-serif;">
        <h5>Good Day, Lhorenz T. Magtibay!</h5>
        <br>
        @yield('content')

        {{-- @include('partials._nav') --}}

    </div>


</body>

</html>
