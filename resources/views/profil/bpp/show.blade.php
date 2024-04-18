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
                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Kembali</a>
        </div>
    @endsection
