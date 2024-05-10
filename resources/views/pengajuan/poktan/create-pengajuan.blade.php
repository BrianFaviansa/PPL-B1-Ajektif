@extends('layouts.app-dashboard')

@section('content')
    <h2 class="text-4xl font-semibold dark:text-white mb-8">Tambah Pengajuan Bantuan Alsintan</h2>


    <form class="grid gap-6" action="{{ route('pengajuan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nama_alsintan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                Alsintan</label>
            <input type="text" id="nama_alsintan" name="nama_alsintan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Tuliskan nama alat mesin pertanian" required />
            @error('nama_alsintan')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="jenis_alsintan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                Alsintan</label>
            <select id="jenis_alsintan" name="jenis_alsintan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Alat Ringan">Alat Ringan</option>
                    <option value="Alat Berat">Alat Berat</option>
            </select>
        </div>
        <div>
            <label for="alasan_pengajuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alasan
                Pengajuan</label>
            <textarea id="alasan_pengajuan" name="alasan_pengajuan" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Tuliskan alasan pengajuan"></textarea>
            @error('alasan_pengajuan')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="dokumen_pengajuan">Dokumen
                Pendukung</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="dokumen_pengajuan_help" id="dokumen_pengajuan" name="dokumen_pengajuan" type="file" required>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="dokumen_pengajuan_help">*Upload pdf proposal
                pengajuan bantuan max 10 mb</p>
            @error('dokumen_pengajuan')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kelompok
                Tani</label>
            <input type="text" id="disabled-input" aria-label="disabled input"
                class=" bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $user->nama }}" disabled>
        </div>
        <div>
            <label
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Desa</label>
            <select disabled
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>{{ $user->desa->nama }}</option>
            </select>
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                Sekretariat</label></label>
            <input type="text" id="disabled-input" aria-label="disabled input"
                class=" bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $user->alamat }}" disabled>
        </div>
        <div>
            <a href="{{ route('pengajuan.index') }}"
                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</a>
            @include('layouts.partials.modal-ajukan')
        </div>
    </form>
@endsection
