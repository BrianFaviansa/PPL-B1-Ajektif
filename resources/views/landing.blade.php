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
    <h2 class="text-4xl font-bold dark:text-white mb-2 md:ml-14">Kelas Belajar</h2>
    <div class="justify-end flex my-2 md:my-4 md:mr-36 mr-16">
        <a href="{{ route('landing.kelas.index') }}" class="text-lg md:text-xl text-green-800 font-medium">Selengkapnya</a>
    </div>
    <div class="grid grid-cols-1 mx-14 md:grid-cols-3 gap-4 mt-2" id="kelas-belajar">
        @forelse ($kelasOfflines as $kelasOffline)
            @include('layouts.landing.card-kelas')
        @empty
            Tidak ada kelas offline
        @endforelse
    </div>
    {{-- section kelas end --}}

    {{-- section pelatihan --}}

    <h2 class="text-4xl font-bold dark:text-white md:mb-4 mb-2 md:ml-14 mt-10 md:mt-10">Pelatihan Online</h2>
    <div class="justify-end flex my-2 md:my-4 md:mr-36 mr-16">
        <a href="{{ route('landing.pelatihan.index') }}" class="text-lg md:text-xl text-green-800 font-medium">Selengkapnya</a>
    </div>

    <div class="grid grid-cols-1 mx-14 md:grid-cols-3 gap-4 mb-6 md:mb-10">
        @forelse ($pelatihanOnlines as $pelatihanOnline)
            @include('layouts.landing.card-pelatihan')
        @empty
            Tidak ada pelatihan online
        @endforelse
    </div>
    {{-- section pelatihan end --}}
@endsection
