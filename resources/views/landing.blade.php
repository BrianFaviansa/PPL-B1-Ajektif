@extends('layouts.app')

@section('content')
    <div class="">
        @include('layouts.landing.hero')
    </div>
    <div class="sm:-mt-4">
        @include('layouts.landing.bantuan')
    </div>
    <div class="">
        @include('layouts.landing.alasan')
    </div>

    {{-- section kelas --}}
    <h2 class="text-4xl font-semibold dark:text-white mb-8 md:ml-14">Kelas Belajar</h2>
    <div class="grid grid-cols-1 md:mx-14 md:grid-cols-3 gap-4 mt-2" id="kelas-belajar">
        @forelse ($kelasOfflines as $kelasOffline)
            @include('layouts.landing.card-kelas')
        @empty
            Tidak ada kelas offline
        @endforelse
    </div>
    {{-- section kelas end --}}

    {{-- section pelatihan --}}
    <h2 class="text-4xl font-semibold dark:text-white md:mb-4 md:ml-14 md:mt-10">Pelatihan Online</h2>
    <div class="grid grid-cols-1 md:mx-14 md:grid-cols-3 gap-4 mt-12 mb-6">
        @forelse ($pelatihanOnlines as $pelatihanOnline)
            @include('layouts.landing.card-pelatihan')
        @empty
            Tidak ada pelatihan online
        @endforelse
    </div>
    {{-- section pelatihan end --}}
@endsection
