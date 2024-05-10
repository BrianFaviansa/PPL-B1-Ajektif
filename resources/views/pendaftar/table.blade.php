<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-sm md:text-base text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    NIK
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    No Telpon
                </th>
                <th scope="col" class="px-6 py-3">
                    Motivasi
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Kelas
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pendaftars as $pendaftar)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-sm md:text-base hover:bg-gray-100">
                    <td scope="row" class="px-6 py-4">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $pendaftar->nik }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $pendaftar->nama }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $pendaftar->no_telpon }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $pendaftar->motivasi }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $pendaftar->kelas->nama }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-slate-700 text-base">Tidak ada data pendaftar kelas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
