{{-- <div
    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-y-clip flex justify-between flex-col">
    <div class="overflow-y-clip max-h-72 flex justify-center grow">
        <img class="w-auto object-center h-full" src="{{ asset('storage/poster_kelass/' . $kelasOffline->poster) }}"
            alt="" />
    </div>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">
                {{ $kelasOffline->nama }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><i class="fa-regular fa-clock"></i></p>
        <a href="{{ route('landing.kelas.show', $kelasOffline) }}"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
</div> --}}

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
            <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white mr-2" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M15.583 8.445h.01M10.86 19.71l-6.573-6.63a.993.993 0 0 1 0-1.4l7.329-7.394A.98.98 0 0 1 12.31 4l5.734.007A1.968 1.968 0 0 1 20 5.983v5.5a.992.992 0 0 1-.316.727l-7.44 7.5a.974.974 0 0 1-1.384.001Z" />
            </svg>
            <span class="font-normal text-gray-700 dark:text-gray-400 text-center">
                {{ $kelasOffline->jam_pelaksanaan }}</span>
        </div>
        <div class="flex flex-row justify-start ml-10 my-4">
            <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white mr-2" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M15.583 8.445h.01M10.86 19.71l-6.573-6.63a.993.993 0 0 1 0-1.4l7.329-7.394A.98.98 0 0 1 12.31 4l5.734.007A1.968 1.968 0 0 1 20 5.983v5.5a.992.992 0 0 1-.316.727l-7.44 7.5a.974.974 0 0 1-1.384.001Z" />
            </svg>
            <span class="font-normal text-gray-700 dark:text-gray-400 text-center">
                {{ $kelasOffline->tgl_pelaksanaan }}</span>
        </div>
        <div class="flex flex-row justify-start ml-10 my-4">
            <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white mr-2" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M15.583 8.445h.01M10.86 19.71l-6.573-6.63a.993.993 0 0 1 0-1.4l7.329-7.394A.98.98 0 0 1 12.31 4l5.734.007A1.968 1.968 0 0 1 20 5.983v5.5a.992.992 0 0 1-.316.727l-7.44 7.5a.974.974 0 0 1-1.384.001Z" />
            </svg>
            <span class="font-normal text-gray-700 dark:text-gray-400 text-center">
                {{ $kelasOffline->lokasi_pelaksanaan }}</span>
        </div>
        <div class="flex flex-row justify-start ml-10 my-4">
            <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white mr-2" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M15.583 8.445h.01M10.86 19.71l-6.573-6.63a.993.993 0 0 1 0-1.4l7.329-7.394A.98.98 0 0 1 12.31 4l5.734.007A1.968 1.968 0 0 1 20 5.983v5.5a.992.992 0 0 1-.316.727l-7.44 7.5a.974.974 0 0 1-1.384.001Z" />
            </svg>
            <span class="font-normal text-gray-700 dark:text-gray-400 text-center">
                {{ $kelasOffline->penanggung_jawab->nama }}</span>
        </div>
        <div class="flex justify-center">
            <a href="{{ route('landing.kelas.show', $kelasOffline) }}"
                class="inline-flex items-center text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Daftar Sekarang
            </a>
        </div>
    </div>
</div>
