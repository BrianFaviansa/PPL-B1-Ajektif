@extends('layouts.app-dashboard')

@section('content')
    <div class="grid grid-cols-2 max-w-5xl gap-x-10 gap-y-6 ml-10">
        <div>
            <p class="text-xl font-semibold text-gray-900 dark:text-white">Nama Surat Perjanjian</p>
        </div>
        <div>
            <p class="text-xl text-gray-900 dark:text-white"> Surat Perjanjian Kerjasama Operasi Bantuan Alsintan
                {{ $pengajuan->jenis_alsintan }}
                {{ $pengajuan->nama_alsintan }}</p>
        </div>
        <div>
            <p class="text-xl font-semibold text-gray-900 dark:text-white">Tanggal Upload Surat</p>
        </div>
        <div>
            <p class="text-xl text-gray-900 dark:text-white">
                @if ($pengajuan->surat_poktan_uploaded_at)
                    {{ $pengajuan->surat_poktan_uploaded_at }}
                @else
                    -
                @endif
            </p>
        </div>
        <div>
            <p class="text-xl font-semibold text-gray-900 dark:text-white">Surat SPKO Poktan</p>
        </div>
        <div>
            @if ($pengajuan->surat_poktan)
                <a href="{{ asset('storage/surat_poktans/' . $pengajuan->surat_poktan) }}" target="_blank"
                    class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg class="w-[18px] h-[18px] text-white dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            @else
                -
            @endif
        </div>

        <form action="{{ route('perjanjian.unggahSuratDinas', $pengajuan) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class=>
                <p class="text-xl font-semibold text-gray-900 dark:text-white">Unggah Surat SPKO Tingkat 2</p>
            </div>
            <div class="mt-4 mb-5">
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="surat_dinas_help" id="surat_dinas" name="surat_dinas" type="file" required>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="surat_dinas_help">*Upload surat SPKO Tingkat 2
                </p>
                @error('surat_dinas')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <a href="{{ route('perjanjian.index') }}" type="button"
                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Kembali</a>
                @include('layouts.partials.modal-surat')
            </div>
        </form>
    </div>
@endsection
