<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-sm md:text-base text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Surat Perjanjian
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Upload Surat
                </th>
                <th scope="col" class="px-6 py-3">
                    Surat SPKO Tingkat 2
                </th>
                <th scope="col" class="px-6 py-3">
                    Surat SPKO Poktan
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Disetujui
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pengajuans as $pengajuan)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-sm md:text-base">
                    <td scope="row" class="px-6 py-4">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-6 py-4">
                        Surat Perjanjian Kerjasama Operasi Bantuan Alsintan {{ $pengajuan->jenis_alsintan }}
                        {{ $pengajuan->nama_alsintan }}
                    </td>
                    <td class="px-6 py-4">
                        @if ($pengajuan->surat_poktan_uploaded_at)
                            @php
                                $uploadedAt = DateTime::createFromFormat(
                                    'Y-m-d H:i:s',
                                    $pengajuan->surat_poktan_uploaded_at,
                                );
                            @endphp
                            {{ $uploadedAt->format('d F Y') }}
                        @else
                            -
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @if ($pengajuan->surat_dinas)
                            <a href="{{ asset('storage/surat_dinass/' . $pengajuan->surat_dinas) }}" target="_blank"
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
                    </td>
                    <td class="px-6 py-4">
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
                    </td>
                    <td class="px-6 py-4">
                        @if ($pengajuan->disetujui_at)
                            {{ $pengajuan->disetujui_at->format('d F Y') }}
                        @else
                            -
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @if ($pengajuan->surat_dinas)
                        <a href="{{ route('perjanjian.show', $pengajuan) }}"
                            class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <svg class="w-[18px] h-[18px] text-white dark:text-white mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Detail
                        </a>
                        @else
                            belum ada surat SPKO dari Dinas
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center text-slate-700 text-base">Tidak ada data pengajuan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

