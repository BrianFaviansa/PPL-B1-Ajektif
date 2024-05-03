@extends('layouts.app-dashboard')

@section('content')
    <h2 class="text-4xl font-semibold dark:text-white mb-8">Tambah Kelas Offline</h2>

    <form action="{{ route('bpp.kelas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="my-4">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kelas</label>
            <input type="text" id="nama" name="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required autofocus />
            @error('nama')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="my-4">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="poster">Poster
                Pelatihan</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="poster_help" id="poster" name="poster" type="file" required>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="poster_help">*Upload Poster Pelatihan</p>
            @error('poster')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="my-4">
            <label for="ringkasan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ringkasan
                Kelas</label>
            <input id="x" type="hidden" name="ringkasan">
            <trix-editor input="x"></trix-editor>
            @error('ringkasan')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="my-4">
            <label for="jam_pelaksanaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam
                Pelaksanaan</label>
            <input type="text" id="jam_pelaksanaan" name="jam_pelaksanaan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required autofocus placeholder="ex : 09.00" />
            @error('jam_pelaksanaan')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>


        <label for="tgl_pelaksanaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
            Pelaksanaan</label>
        <div class="relative max-w-sm mb-4">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                </svg>
            </div>
            <input datepicker datepicker-autohide datepicker-buttons datepicker-autoselect-today type="text"
                name="tgl_pelaksanaan" id="tgl_pelaksanaan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Select date">
            @error('jam_pelaksanaan')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>


        <div class="my-4">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penanggung
                Jawab</label>
            <input type="text" id="disabled-input" aria-label="disabled input"
                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $user->nama }}" disabled>
        </div>
        <a href="{{ route('bpp.pelatihan.index') }}"
            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Kembali</a>
        <button type="submit" id="submit-btn"
            class="focus:outline-none text-white bg-green-700 hover:cursor-pointer hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan
            Perubahan</button>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
@endsection
