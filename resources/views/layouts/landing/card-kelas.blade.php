<div
    class="max-w-sm bg-white border border-gray-300 rounded-xl shadow-md dark:bg-gray-800 dark:border-gray-700 overflow-y-clip flex justify-between flex-col">
    <div class="overflow-y-clip max-h-52 flex justify-center grow">
        <img class="w-auto object-center h-full" src="{{ asset('storage/poster_kelass/' . $kelasOffline->poster) }}"
            alt="" />
    </div>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                {{ $kelasOffline->nama }}</h5>
        </a>
        <div class="flex flex-row justify-start ml-10 my-4">
            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span class="font-normal text-slate-950 dark:text-gray-400 text-center">
                {{ $kelasOffline->jam_pelaksanaan }}</span>
        </div>
        <div class="flex flex-row justify-start ml-10 my-4">
            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
            </svg>
            <span class="font-normal text-slate-950 dark:text-gray-400 text-center">
                {{ $kelasOffline->tgl_pelaksanaan->format('d F Y') }}</span>
        </div>
        <div class="flex flex-row justify-start ml-10 my-4">
            <svg class="w-6 h-6 text-gray-800 dark:text-white mr-2" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
            </svg>
            <span class="font-normal text-slate-950 dark:text-gray-400 text-center">
                {{ $kelasOffline->lokasi_pelaksanaan }}</span>
        </div>
        <div class="flex flex-row justify-start ml-10 my-4">
            <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white mr-2" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M15.583 8.445h.01M10.86 19.71l-6.573-6.63a.993.993 0 0 1 0-1.4l7.329-7.394A.98.98 0 0 1 12.31 4l5.734.007A1.968 1.968 0 0 1 20 5.983v5.5a.992.992 0 0 1-.316.727l-7.44 7.5a.974.974 0 0 1-1.384.001Z" />
            </svg>
            <span class="font-normal text-slate-950 dark:text-gray-400 text-center">
                {{ $kelasOffline->penanggung_jawab->nama }}</span>
        </div>
        <div class="flex justify-center">
            <a href="{{ route('landing.kelas.show', $kelasOffline) }}"
                class="inline-flex items-center text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mt-2 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                @guest
                    Daftar Sekarang
                @endguest

                @auth
                    @role('poktan')
                        Daftar Sekarang
                        @elserole('bpp|dinas')
                        Detail
                    @endrole
                @endauth
        </a>
    </div>
</div>
</div>
