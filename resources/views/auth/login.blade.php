<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col justify-center -mt-10 items-center h-screen">
    <img class="rounded-full w-36 h-36" src="{{ asset('assets/img/logo ajektif.svg') }}" alt="">
    <h2 class="text-4xl font-bold dark:text-white mt-4 mb-6">Agro Jember Konektif</h2>
    <div class="container shadow-2xl rounded-lg p-16 max-w-md">
        <form action="{{ route('login') }}" method="post" class="mx-auto">
            @csrf
            <h2 class="text-4xl font-semibold dark:text-white text-left mb-2">Login</h2>
            <p class="text-gray-500 dark:text-gray-400 mb-4">Pastikan anda telah memiliki akun</p>
            <div class="mb-5">
                <label for="username"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                <input type="text" name="username" id="username" value="{{ old('username') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                    placeholder="Masukkan username anda....." required autofocus />
            </div>
            <div class="mb-5">
                <label for="password"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" name="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                    placeholder="Masukkan password anda....." required />
            </div>
            @if (session()->has('error'))
                @include('layouts.partials.error-message')
            @endif
            <button type="submit" href="{{ route('landing') }}"
                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Masuk</button>
        </form>
    </div>

    <div class="fixed bottom-0 w-full">
        @include('layouts.landing.footer')
    </div>
</body>
</html>
