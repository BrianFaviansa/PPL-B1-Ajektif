@extends('layouts.app-dashboard')

@section('content')
    <h2 class="text-4xl font-semibold dark:text-white mb-8">Tambah Informasi Bantuan Alsintan</h2>


    <form class="grid gap-6" action="{{ route('info-bantuan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                Informasi Bantuan</label>
            <input type="text" id="nama" name="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Tuliskan nama alat mesin pertanian" value="{{ old('nama') }}" required />
            @error('nama')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="ringkasan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ringkasan
                Informasi</label>
            <textarea id="ringkasan" name="ringkasan" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Tuliskan ringkasan informasi" value={{ old('ringkasan') }}></textarea>
            @error('ringkasan')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="syarat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Syarat dan
                Ketentuan</label>
            <input id="x" type="hidden" name="syarat">
            <trix-editor value="{{ old('syarat') }}" input="x"></trix-editor>
            @error('syarat')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="dokumen_pengajuan">Penanggung
                Jawab</label>
            <input type="text" id="penanggung_jawab" name="penanggung_jawab"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Tuliskan penanggung_jawab alat mesin pertanian" value="{{ $user->nama }}" required />
            @error('penanggung_jawab')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="my-4">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Upload Informasi Bantuan</label>
            <input type="text" id="disabled-input" aria-label="disabled input"
                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ now()->format('d F Y') }}" disabled>
        </div>
        <div>
            <a href="{{ route('info-bantuan.index') }}"
                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</a>
            <button type="submit"
                class="max-w-xs focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan
                dan Ajukan</button>
        </div>
    </form>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
