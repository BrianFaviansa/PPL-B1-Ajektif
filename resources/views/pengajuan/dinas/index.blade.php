@extends('layouts.app-dashboard')

@section('content')
    <h2 class="text-4xl font-semibold dark:text-white mb-8">Usulan Pengajuan Bantuan Alsintan</h2>

    @if (session()->has('success'))
        <div class="my-5">
            @include('pengajuan.partials.success-message')
        </div>
    @endif


    <div class="mt-6">
        @include('pengajuan.dinas.table')
    </div>

@endsection


