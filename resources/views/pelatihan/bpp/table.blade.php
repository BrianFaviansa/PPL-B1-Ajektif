<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Pelatihan Online
                </th>
                <th scope="col" class="px-6 py-3">
                    Video Pelatihan
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Upload Pelatihan
                </th>
                <th scope="col" class="px-6 py-3">
                    Penanggung Jawab
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pelatihanOnlines as $pelatihanOnline)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="px-6 py-4">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $pelatihanOnline->nama }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $pelatihanOnline->video }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $pelatihanOnline->created_at->format('d F Y') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $pelatihan->penanggung_jawab->nama }}
                    </td>
                    <td class="px-6 py-4">

                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('bpp.pelatihan.show', $pelatihanOnline) }}"
                            class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <svg class="w-[18px] h-[18px] text-white dark:text-white mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                    clip-rule="evenodd" />
                            </svg>
                            </svg>Detail
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center text-slate-700 text-base">Tidak ada data pelatihan online</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
