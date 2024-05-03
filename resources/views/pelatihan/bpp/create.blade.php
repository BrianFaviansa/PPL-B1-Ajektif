@extends('layouts.app-dashboard')

@section('content')
    <h2 class="text-4xl font-semibold dark:text-white mb-8">Tambah Video Pelatihan</h2>

    <form action="{{ route('bpp.pelatihan.store') }}" method="POST" enctype="multipart/form-data" id="upload-form">
        @csrf
        <div class="my-4">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pelatihan
                Online</label>
            <input type="text" id="nama" name="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required autofocus />
            @error('nama')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="my-4">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="video">Video
                Pelatihan</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="video_help" id="video" name="video" type="file" required>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="video_help">*Upload video pelatihan max 100 mb</p>
            @error('video')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-center mb-1">
            <span class="text-sm font-medium text-blue-700 dark:text-white percent">0%</span>
        </div>
        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
            <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 h-2.5 leading-none rounded-full progress-bar"
                style="width: 0%;"></div>
        </div>

        <div class="my-4">
            <label for="ringkasan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ringkasan
                Pelatihan</label>
            <input id="x" type="hidden" name="ringkasan">
            <trix-editor input="x"></trix-editor>
            @error('ringkasan')
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
        <button type="submit" id="submit-btn" disabled
            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan
            Perubahan</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const progressBar = $('.progress-bar');
            const percent = $('.percent');
            const submitBtn = $('#submit-btn');

            $('#video').on('change', function() {
                const file = this.files[0];
                if (file) {
                    const formData = new FormData();
                    formData.append('video', file);

                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', '{{ route('bpp.pelatihan.store') }}', true);
                    xhr.upload.onprogress = function(e) {
                        const percentComplete = Math.round((e.loaded / e.total) * 100);
                        const percentVal = percentComplete + '%';
                        progressBar.width(percentVal);
                        percent.html(percentVal);
                    };
                    xhr.onload = function() {
                        progressBar.width('100%');
                        percent.html('100%');
                        submitBtn.prop('disabled', false);
                    };
                    xhr.send(formData);
                }
            });
        });
    </script>
@endsection
