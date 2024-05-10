@extends('layouts.app-dashboard')

@section('content')
    <h2 class="text-4xl font-semibold dark:text-white mb-8">Data Pendaftar Kelas</h2>

    <div class="mt-6">
        @include('pendaftar.table')
    </div>

@endsection
