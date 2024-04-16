@extends('layouts.app-dashboard')

@section('content')
    <h2 class="text-4xl font-semibold dark:text-white mb-8">Daftar Akun BPP</h2>
    <div class="my-5">
        @include('daftar-akun.table-bppz')
    </div>
@endsection
