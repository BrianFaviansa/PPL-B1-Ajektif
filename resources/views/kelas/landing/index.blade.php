@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 mx-14 md:grid-cols-3 gap-4 mt-28">
        @forelse ($kelasOfflines as $kelasOffline)
            @include('layouts.landing.card-kelas')
        @empty
        @endforelse
    </div>

@endsection
