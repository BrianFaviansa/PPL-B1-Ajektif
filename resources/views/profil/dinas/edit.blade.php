@extends('layouts.app-dashboard')

@section('content')
    <h2 class="text-4xl font-semibold dark:text-white mb-8 -mt-4">Ubah Profil</h2>


    <form action="{{ route('akun.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="my-4">
            <label for="no_reg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Registrasi
                Dinas Pertanian</label>
            <input type="text" id="disabled-input" aria-label="disabled input"
                class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $user->no_reg }}" disabled>
            <input type="hidden" name="no_reg" value="{{ $user->no_reg }}">
        </div>
        <div class="my-4">

            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Dinas</label>
            <input type="text" id="nama" name="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $user->nama }}" required />
        </div>
        <input type="hidden" name="jml_anggota" value=0>
        <div class="my-4">
            <label for="daerah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Daerah</label>
            <input type="text" id="daerah" name="daerah"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $user->daerah }}" required />
        </div>
        <div class="my-4">
            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                Instansi</label>
            <textarea id="alamat" name="alamat" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Tuliskan alasan pengajuan">{{ $user->alamat }}</textarea>
        </div>
        <div class="my-4">
            <label for="no_telpon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                Telepon</label>
            <input type="text" id="no_telpon" name="no_telpon"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $user->no_telpon }}" required />
        </div>
        <div class="my-4">
            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
            <input type="text" id="username" name="username"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $user->username }}" required />
        </div>
        <div class="my-4">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="text" name="password" id="password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            <p id="helper-text-explanation" class="mt-1 text-sm text-gray-500 dark:text-gray-400">Biarkan kosong jika tidak
                ingin mengubah password</p>

        </div>
        <a href="{{ route('dashboard') }}" type="button"
            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Kembali</a>
        @include('layouts.partials.modal-edit')
    </form>
@endsection
