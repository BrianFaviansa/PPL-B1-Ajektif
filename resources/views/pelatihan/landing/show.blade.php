@extends('layouts.app')

@section('content')
    <div class="py-6 mx-auto">
        <h2 class="text-3xl font-bold md:text-4xl md:font-extrabold dark:text-white">{{ $pelatihanOnline->nama }}</h2>
    </div>
    <video controls class="w-full h-auto max-w-5xl mx-auto">
        <source src="{{ asset('storage/video_pelatihans/' . $pelatihanOnline->video) }}" type="video/mp4">
        Maaf browser anda tidak support tag video.
    </video>
    <p class="mb-3 text-gray-500 dark:text-gray-400 text-justify text-base md:text-2xl">{!! $pelatihanOnline->ringkasan !!}</p>
    <div class="max-w-5xl mt-6">
        <a href="{{ route('landing.pelatihan.index') }}"
            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Kembali</a>
    </div>
@endsection
