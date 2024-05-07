<div
    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-clip relative">
    <video class="h-auto w-full">
        <source src="{{ asset('storage/video_pelatihans/' . $pelatihanOnline->video) }}" type="video/mp4">
        Maaf browser anda tidak support tag video.
    </video>
    <div class="p-5 flex flex-col mb-10">
        <a href="#">
            <h5 class="mb-2 text-xl font-bold tracking-normal text-gray-900 dark:text-white text-center">
                {{ $pelatihanOnline->nama }}
            </h5>
        </a>
        <div class="flex justify-center align-bottom mb-4">
            <svg class="w-[18px] h-[18px] text-gray-800 dark:text-white mr-2" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M15.583 8.445h.01M10.86 19.71l-6.573-6.63a.993.993 0 0 1 0-1.4l7.329-7.394A.98.98 0 0 1 12.31 4l5.734.007A1.968 1.968 0 0 1 20 5.983v5.5a.992.992 0 0 1-.316.727l-7.44 7.5a.974.974 0 0 1-1.384.001Z" />
            </svg>
            <p class="font-normal text-gray-700 dark:text-gray-400 text-center">
                {{ $pelatihanOnline->penanggung_jawab->nama }}</p>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 flex justify-center p-4">
        <a href="{{ route('landing.pelatihan.show', $pelatihanOnline) }}"
            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 inline-flex">
            Belajar Sekarang
        </a>
    </div>
</div>
