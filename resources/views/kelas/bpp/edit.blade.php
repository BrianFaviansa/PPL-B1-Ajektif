@extends('layouts.app-dashboard')

@section('content')
    <h2 class="text-4xl font-semibold dark:text-white mb-8">Edit Kelas Offline</h2>

    <form action="{{ route('bpp.kelas.update', $kelasOffline) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="my-4">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kelas</label>
            <input type="text" id="nama" name="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required value="{{ $kelasOffline->nama }}" autofocus />
            @error('nama')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="my-4">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="poster">Poster
                Pelatihan</label>
            <input type="hidden" name="oldImage" value="{{ $kelasOffline->poster }}">
            @if ($kelasOffline->poster)
                <img src="{{  asset('storage/poster_kelass/' . $kelasOffline->poster) }}" class="h-auto max-w-md img-preview"
                    style="max-width: 300px;">
            @else
                <img class="h-auto max-w-md img-preview" style="max-width: 300px;">
            @endif
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="poster_help" id="poster" name="poster" type="file" onchange="previewPoster()"
                >
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="poster_help">*Upload Poster Kelas</p>
            @error('poster')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="my-4">
            <label for="ringkasan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ringkasan
                Kelas</label>
            <input id="x" value="{{ $kelasOffline->ringkasan }}" type="hidden" name="ringkasan">
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
                value="{{ $kelasOffline->jam_pelaksanaan }}" required placeholder="ex : 09.00" />
            @error('jam_pelaksanaan')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="my-4">
            <label for="tgl_pelaksanaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                Pelaksanaan</label>
            <input type="date" id="tgl_pelaksanaan" name="tgl_pelaksanaan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm max-w-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $kelasOffline->tgl_pelaksanaan ? \Carbon\Carbon::parse($kelasOffline->tgl_pelaksanaan)->format('Y-m-d') : '' }}"
                required />
            @error('tgl_pelaksanaan')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="my-4">
            <label for="lokasi_pelaksanaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi
                Pelaksanaan</label>
            <input type="text" id="lokasi_pelaksanaan" name="lokasi_pelaksanaan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required value="{{ $kelasOffline->lokasi_pelaksanaan }}" placeholder="Tuliskan lokasi pelaksanaan kelas" />
            @error('lokasi_pelaksanaan')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="my-4">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penanggung
                Jawab</label>
            <input type="text" id="disabled-input" aria-label="disabled input"
                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ $kelasOffline->penanggung_jawab->nama }}" disabled>
        </div>
        <a href="{{ route('bpp.kelas.index') }}"
            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Kembali</a>
        @include('layouts.partials.modal-edit')
    </form>

    <script>
        function previewPoster() {
            const image = document.querySelector('#poster');
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
