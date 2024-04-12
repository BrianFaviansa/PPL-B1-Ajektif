@extends('layouts.app-dashboard')

@section('content')
    <h2 class="text-4xl font-semibold dark:text-white mb-8">Daftar Surat Perjanjian</h2>

    @if (session()->has('success'))
        <div class="my-5">
            @include('pengajuan.partials.success-message')
        </div>
    @endif

    @if ($pengajuans ?? false)
        <div class="mt-6">
            @include('surat-perjanjian.poktan.table')
        </div>
    @endif
@endsection
