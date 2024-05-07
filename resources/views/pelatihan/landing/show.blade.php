@extends('layouts.app')

@section('content')
    <div class="py-6 mx-auto">
        <h2 class="text-3xl font-bold md:text-4xl md:font-extrabold dark:text-white">{{ $pelatihanOnline->nama }}</h2>
    </div>
    <video controls class="w-full h-auto max-w-6xl mx-auto">
        <source src="{{ asset('storage/video_pelatihans/' . $pelatihanOnline->video) }}" type="video/mp4">
        Maaf browser anda tidak support tag video.
    </video>


@endsection
