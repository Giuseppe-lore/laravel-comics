<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Title --}}
    <title>laravel-comics</title>
</head>

<body>

    {{-- Header --}}
    @include('partials.header')

    {{-- Main --}}
    <main>

        {{-- Jumbotron --}}
        @include('partials.jumbotron')

        @yield('main_content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')
</body>
</html>