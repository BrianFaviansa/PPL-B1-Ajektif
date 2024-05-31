<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo ajektif.png') }}" type="image/x-icon">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">
    @include('layouts.landing.nav')
    <div class="container mx-auto mt-[69px] min-h-screen">
        @yield('content')
    </div>

    <div class="md:static md:bottom-0 w-full">
        @include('layouts.landing.footer')
    </div>
</body>

</html>
