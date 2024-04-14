<div
class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 sm:container sm:mx-auto mb-6">
<ul class="justify-center md:gap-x-14 flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800"
    id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
    <li class="me-2">
        <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about"
            aria-selected="true"
            class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Informasi
            Bantuan</button>
    </li>
    <li class="me-2">
        <button id="services-tab" data-tabs-target="#services" type="button" role="tab"
            aria-controls="services" aria-selected="false"
            class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Syarat
            dan Ketentuan</button>
    </li>
</ul>
<div id="defaultTabContent">
    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel"
        aria-labelledby="about-tab">
        <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Informasi Pengadaan
            Bantuan</h2>
        <p class="mb-3 text-gray-500 dark:text-gray-400 text-justify">{{ $bantuan->ringkasan }}</p>
    </div>
    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="services" role="tabpanel"
        aria-labelledby="services-tab">
        <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Syarat dan Ketentuan
            Penerima Bantuan</h2>
        <p class="mb-3 text-gray-500 dark:text-gray-400 text-justify">{!! $bantuan->syarat !!}</p>
    </div>
    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="statistics" role="tabpanel"
        aria-labelledby="statistics-tab">
        <dl
            class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
            <div class="flex flex-col">
                <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                <dd class="text-gray-500 dark:text-gray-400">Developers</dd>
            </div>
            <div class="flex flex-col">
                <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                <dd class="text-gray-500 dark:text-gray-400">Public repositories</dd>
            </div>
            <div class="flex flex-col">
                <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                <dd class="text-gray-500 dark:text-gray-400">Open source projects</dd>
            </div>
        </dl>
    </div>
</div>
</div>
