@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 mx-14 md:grid-cols-3 gap-4 mt-28">
        @forelse ($pelatihanOnlines as $pelatihanOnline)
            @include('layouts.landing.card-pelatihan')
        @empty
        @endforelse
    </div>

@endsection
