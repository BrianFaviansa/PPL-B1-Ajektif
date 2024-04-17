@extends('layouts.app-dashboard')

@section('content')
    <div class="-mt-4 grid grid-cols-2 max-w-5xl gap-x-10 gap-y-6 ml-10">
        <div>
            <p class="text-xl font-semibold text-gray-900 dark:text-white">Nomor Registrasi BPP</p>
        </div>
        <div>
            <p class="text-xl text-gray-900 dark:text-white">{{ $user->no_reg }}</p>
        </div>
        <div>
            <p class="text-xl font-semibold text-gray-900 dark:text-white">Nama BPP</p>
        </div>
        <div>
            <p class="text-xl text-gray-900 dark:text-white">{{ $user->nama }}</p>
        </div>
        <div>
            <p class="text-xl font-semibold text-gray-900 dark:text-white">Desa</p>
        </div>
        <div>
            <p class="text-xl text-gray-900 dark:text-white">{{ $user->desa->nama }}</p>
        </div>
        <div>
            <p class="text-xl font-semibold text-gray-900 dark:text-white">Alamat</p>
        </div>
        <div>
            <p class="text-xl text-gray-900 dark:text-white">{{ $user->alamat }}</p>
        </div>
        <div>
            <p class="text-xl font-semibold text-gray-900 dark:text-white">Nomor Telpon</p>
        </div>
        <div>
            <p class="text-xl text-gray-900 dark:text-white">{{ $user->no_telpon }}</p>
        </div>
        <div>
            <p class="text-xl font-semibold text-gray-900 dark:text-white">Username</p>
        </div>
        <div>
            <p class="text-xl text-gray-900 dark:text-white">{{ $user->username }}</p>
        </div>
        <div>
            <a href="{{ route('pengajuan.index') }}" type="button"
                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Kembali</a>
        </div>
    @endsection
