@extends('layouts.app-dashboard')

@section('content')
    <h2 class="text-4xl font-semibold dark:text-white mb-8">Daftar Pelatihan Online</h2>
    <a href="{{ route('bpp.pelatihan.create') }}"
        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-4 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah
        Pengajuan</a>
    @if (session()->has('success'))
        <div class="my-5">
            @include('pengajuan.partials.success-message')
        </div>
    @endif


    <div class="mt-6">
        @include('pelatihan.bpp.table')
    </div>

    <div class="mt-6">
        @forelse ($pelatihanOnlines as $pelatihanOnline)
            {!! OEmbed::get($pelatihanOnline->video)->html() !!}
        @empty
            tidak ada video
        @endforelse
    </div>
@endsection
