@extends('layouts.app-dashboard')

@section('content')
<div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 sm:container sm:mx-auto mb-6">
    <ul class="justify-center md:gap-x-14 flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
        <li class="me-2">
            <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Informasi Bantuan</button>
        </li>
        <li class="me-2">
            <button id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Syarat dan Ketentuan</button>
        </li>
    </ul>
    <div id="defaultTabContent">
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
            <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Informasi Pengadaan Bantuan</h2>
            <p class="mb-3 text-gray-500 dark:text-gray-400 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ex nemo possimus sit earum iusto dolores! Provident cum explicabo, ex sapiente quidem, itaque, eius sequi eos doloremque maiores dolorem laboriosam nihil commodi et doloribus perferendis exercitationem quisquam? Enim incidunt nesciunt, numquam optio minima earum expedita doloribus vero et saepe soluta magni. Dolorum fugiat adipisci eveniet totam, nesciunt illo, aut odio voluptate libero maiores minima, dolore id maxime fuga harum sit mollitia deleniti debitis molestiae! Autem enim molestias quo, debitis quasi ullam alias nulla. Beatae, sapiente fugiat commodi iusto nihil est, earum, numquam possimus aut cumque doloremque ullam? Expedita, laboriosam eius aliquam, iure ipsa neque quibusdam reiciendis voluptatem est autem perspiciatis dolor voluptatum incidunt? Sequi voluptates itaque quas accusamus veritatis. Aliquam cum magnam ratione voluptate praesentium, dignissimos quidem asperiores magni id ullam, nisi doloribus, in similique! Illum delectus, velit incidunt adipisci, neque eos est accusamus quasi debitis consectetur ipsa ratione, repellat consequuntur quaerat atque quam nobis? Quis in debitis rem magnam voluptate, numquam fugit architecto. Iure ex, voluptas inventore rem consectetur est aspernatur laborum tempora nulla? Et placeat quaerat dicta natus praesentium asperiores sit ducimus dignissimos est excepturi quos nihil esse earum consectetur eveniet officiis dolor quidem incidunt officia, adipisci ipsa.</p>
        </div>
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="services" role="tabpanel" aria-labelledby="services-tab">
            <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Syarat dan Ketentuan Penerima Bantuan</h2>
            <p class="mb-3 text-gray-500 dark:text-gray-400 text-justify">1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore incidunt tempore, ducimus enim dolores laborum voluptates quae perferendis nemo illum?</p>
            <p class="mb-3 text-gray-500 dark:text-gray-400 text-justify">2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore incidunt tempore, ducimus enim dolores laborum voluptates quae perferendis nemo illum?</p>
            <p class="mb-3 text-gray-500 dark:text-gray-400 text-justify">3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore incidunt tempore, ducimus enim dolores laborum voluptates quae perferendis nemo illum?</p>
            <p class="mb-3 text-gray-500 dark:text-gray-400 text-justify">4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore incidunt tempore, ducimus enim dolores laborum voluptates quae perferendis nemo illum?</p>
            <p class="mb-3 text-gray-500 dark:text-gray-400 text-justify">5. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore incidunt tempore, ducimus enim dolores laborum voluptates quae perferendis nemo illum?</p>
        </div>
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
            <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
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

@role('poktan')
<div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
    <a href="{{ route('pengajuan.index') }}" type="button"
        class="text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm px-4 py-2 text-center dark:bg-green-800 dark:hover:bg-green-900 dark:focus:ring-green-800">Ajukan Bantuan</a>
    <button data-collapse-toggle="navbar-sticky" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
        aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15" />
        </svg>
    </button>
</div>
@endrole
@role('bpp')
<div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
    <a href="#" type="button"
        class="text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm px-4 py-2 text-center dark:bg-green-800 dark:hover:bg-green-900 dark:focus:ring-green-800">Kelola Informasi Bantuan</a>
    <button data-collapse-toggle="navbar-sticky" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
        aria-controls="navbar-sticky" aria-expanded="false">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15" />
        </svg>
    </button>
</div>
@endrole
@role('dinas')
    <h1>Halo dinas</h1>
@endrole

@endsection
