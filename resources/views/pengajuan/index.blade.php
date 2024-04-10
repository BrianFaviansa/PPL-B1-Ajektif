@extends('layouts.partials.dashboard-sidenav')

@section('content')
    <h2 class="text-4xl font-semibold dark:text-white mb-8">Pengajuan Bantuan Alsintan</h2>
    <a href="{{ route('pengajuan.create') }}" type="button"
        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-4 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah
        Pengajuan</a>

    @if (session()->has('success'))
        @include('pengajuan.partials.success-message')
    @endif
    @if ($pengajuans ?? false)
        @include('pengajuan.partials.table-poktan')
    @endif
@endsection
