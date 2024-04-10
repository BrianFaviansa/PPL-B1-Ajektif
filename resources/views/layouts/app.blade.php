<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('layouts.landing.nav')
    <div class="container mx-auto mt-[69px]">
        @yield('content')
    </div>

    @include('layouts.landing.footer')
</body>
</html>
