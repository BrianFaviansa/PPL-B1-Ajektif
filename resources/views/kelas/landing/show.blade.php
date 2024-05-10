@extends('layouts.app')

@section('content')
    <div class="">
        <img class="h-auto max-w-full mx-auto pt-8" src="{{ asset('storage/poster_kelass/' . $kelasOffline->poster) }}"
            alt="Poster Kelas">
    </div>
    <div class="py-6 mx-auto">
        <h2 class="text-3xl font-bold md:text-4xl md:font-extrabold dark:text-white">{{ $kelasOffline->nama }}</h2>
    </div>
    <div class="mt-4 md:flex md:flex-row md:gap-x-24 lg:gap-x-32 grid grid-cols-2 gap-4 ml-6 md:ml-0">
        <div class="flex flex-row justify-start">
            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span class="font-normal md:text-lg text-slate-950 dark:text-gray-400 text-center">
                {{ $kelasOffline->jam_pelaksanaan }}</span>
        </div>
        <div class="flex flex-row justify-start">
            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
            </svg>
            <span class="font-normal md:text-lg text-slate-950 dark:text-gray-400 text-center">
                {{ $kelasOffline->tgl_pelaksanaan->format('d F Y') }}</span>
        </div>
        <div class="flex flex-row justify-start">
            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
            </svg>
            <span class="font-normal md:text-lg text-slate-950 dark:text-gray-400 text-center">
                {{ $kelasOffline->lokasi_pelaksanaan }}</span>
        </div>
        <div class="flex flex-row justify-start">
            <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white mr-2" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M15.583 8.445h.01M10.86 19.71l-6.573-6.63a.993.993 0 0 1 0-1.4l7.329-7.394A.98.98 0 0 1 12.31 4l5.734.007A1.968 1.968 0 0 1 20 5.983v5.5a.992.992 0 0 1-.316.727l-7.44 7.5a.974.974 0 0 1-1.384.001Z" />
            </svg>
            <span class="font-normal md:text-lg text-slate-950 dark:text-gray-400 text-center">
                {{ $kelasOffline->penanggung_jawab->nama }}</span>
        </div>
    </div>
    <div class="container mx-auto w-full h-auto border border-black rounded-lg text-justify py-3 px-3 mt-8 mb-8">
        <h3 class="text-3xl font-bold text-gray-950">Ringkasan Kelas</h3>
        <p class="mb-3 text-gray-500 dark:text-gray-400 text-justify text-base md:text-2xl">{!! $kelasOffline->ringkasan !!}</p>
    </div>
    <div class="max-w-5xl mt-6 mb-6">
        <a href="{{ route('landing.pelatihan.index') }}"
            class="py-2.5 px-5 me-2 mb-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Kembali</a>
    </div>
@endsection
