<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-sm md:text-base text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nomer Registrasi
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Desa
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    No Telpon
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bpps as $bpp)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-sm md:text-base hover:bg-gray-100">
                    <td scope="row" class="px-6 py-4">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $bpp->no_reg }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $bpp->nama }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $bpp->desa->nama }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $bpp->alamat }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $bpp->no_telpon }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center text-slate-700 text-base">Tidak ada data bpp.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
