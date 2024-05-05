@extends('layouts.app-dashboard')

@section('content')
    <h2 class="text-4xl font-semibold dark:text-white mb-8">Daftar Akun BPP</h2>
    <a href="{{ route('daftar-akun.index') }}"
    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-4 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Kembali</a>

    <div class="my-5">
        @include('daftar-akun.table-bpp')
    </div>
@endsection
