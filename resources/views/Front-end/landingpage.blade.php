@extends('Front-end.layouts.main')
@section('content')
    @include('Front-end.components.header')
    <div class="wrapper pb-20 lg:pb-0">
        <section id="hero-section" class="bg-[#ddfeee] pt-24 pb-10 px-4 lg:py-40">
            <div class="grid grid-rows-1 lg:grid-cols-2 gap-6 lg:container mx-auto">
                <div class="flex justify-center order-1 lg:order-2">
                    <img src="{{ asset('Front-end/assets/img/hero.png') }}" alt="hero" class="bg-cover lg:w-full" />
                </div>
                <div class="flex flex-col justify-center gap-4 lg:gap-8 order-2 lg:order-1">
                    <h1 class="text-4xl lg:text-6xl font-bold">Buat Website Mudah & Murah</h1>
                    <p class="text-base lg:text-2xl">Ciptakan pasar Anda sendiri, bangun databasemarket dengan website
                        sederhana, ringan dan menarik.</p>
                    <a href="#Paket"
                        class="w-full lg:w-1/3 py-2 bg-green-700 hover:bg-green-600 hover:transition ease-in-out delay-100 hover:scale-105 rounded-lg inline-block text-center">
                        <span class="text-base text-white font-bold md:text-xl">Coba Sekarang</span>
                    </a>
                </div>
            </div>
        </section>
        <section id="FAQ" class="bg-white py-10 px-4 lg:py-20 section">
            <div class="grid grid-rows-1 lg:grid-cols-2 gap-6 lg:container mx-auto">
                <div class="flex justify-center order-1 lg:order-2">
                    <img src="{{ asset('Front-end/assets/img/monitor.png') }}" alt=monitor" class=" lg:w-full lg:object-none" />
                </div>
                <div class="flex flex-col gap-4 lg:gap-8 order-2 lg:order-1">
                    <p class="py-2 w-20 rounded-full bg-[#ddfeee] text-center border border-green-700"><span class="text-sm lg:text-base font-bold">FAQ</span></p>
                    <h1 class="text-4xl md:text-5xl font-bold">Pertanyaan Populer 🧭</h1>
                    <p class="text-base md:text-2xl">Temukan pertanyaan yang ingin Anda ketahui seputar layanan.</p>
                    <div id="accordion-collapse" data-accordion="collapse">
                        @foreach ($qnas as $qna)
                        <h2 id="accordion-collapse-heading-{{ $qna->id }}">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-{{ $qna->id }}" aria-expanded="false"
                                aria-controls="accordion-collapse-body-{{ $qna->id }}">
                                <span>{{ $qna->question }}</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-{{ $qna->id }}" class="hidden"
                            aria-labelledby="accordion-collapse-heading-{{ $qna->id }}">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                    {{ $qna->answer }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section id="Paket" class="bg-[#ddfeee] dark:bg-gray-900 section">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                    <h2 class="mb-4 text-4xl lg:text-5xl tracking-tight font-bold dark:text-white">Pilihan Paket</h2>
                    <p class="mb-5 text-base md:text-2xl">Pilih paket layanan sesuai kebutuhan bisnis Anda, hitung dan bandingkan harga.</p>
                </div>
                <div class="space-y-4 lg:grid lg:grid-cols-3 sm:gap-4 xl:gap-6 lg:space-y-0">
                    <!-- Pricing Card -->
                    @foreach ($packages as $package)
                        <div
                            class="flex flex-col p-6 mx-auto max-w-lg text-center bg-white rounded-lg border border-gray-100 shadowxl:p-8  dark:text-white">
                            <img src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->image }}" class="w-36 mx-auto">
                            <h3 class="mb-4 text-2xl font-bold py-2 w-full border-4 border-green-400 rounded-full">{{ $package->name }}
                            </h3>
                            <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">{{ $package->description }}</p>
                            <div class="flex justify-center items-baseline my-8 gap-2">
                                <span class="text-gray-500 dark:text-gray-400">IDR</span>
                                <span class="text-4xl lg:text-5xl font-extrabold">{{ $package->price.'rb' }}</span>
                                <span class="text-gray-500 dark:text-gray-400">/month</span>
                            </div>
                            <!-- List -->
                            <ul role="list" class="mb-8 space-y-4 text-left">
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Individual configuration</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>No setup, or hidden fees</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Team size: <span class="font-semibold">1 developer</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Premium support: <span class="font-semibold">6 months</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Free updates: <span class="font-semibold">6 months</span></span>
                                </li>
                            </ul>
                            <a href="#"
                                class="text-white bg-green-700 focus:ring-4 focus:ring-green-200 font-medium rounded-lg text-base lg:text-xl  px-5 py-2.5 text-center dark:text-white  dark:focus:ring-green-900  hover:bg-green-600 hover:transition ease-in-out delay-100 hover:scale-105">Pilih Paket</a>
                        </div>      
                    @endforeach
            </div>
        </section>
        <section id="Konsultasi" class="lg:py-16 section">
            <div class="flex flex-col gap-6 pt-8 px-4 justify-center items-center lg:mx-auto lg:w-1/2">
                <div class="flex -space-x-4 rtl:space-x-reverse">
                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="http://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="http://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="http://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="http://flowbite.com/docs/images/people/profile-picture-4.jpg" alt="">
                </div>
            </div>
            <div class="flex flex-col gap-6 py-8 px-4 text-center lg:container lg:mx-auto lg:w-1/2">
                <span class="text-4xl md:text-5xl font-bold">Tumbuh Bersama Kami 🚀 Bangun Market Anda Sendiri!</span>
                <p class="text-base">Digital telah membawa banyak orang ke tempat terbaiknya, ciptakan database customer
                    potensial dengan website berkonversi tinggi dan desain yang menarik.</p>
                    <div class="div">
                        <a href="whatsapp://send?phone={{ $no_hp }}" class="py-3 px-8 bg-green-700 rounded-lg hover:bg-green-600 hover:transition ease-in-out delay-100 hover:scale-105">
                            <span class="text-base lg:text-xl text-white font-bold">Konsultasi Sekarang</span>
                        </a>
                    </div>
            </div>
        </section>
        @include('Front-end.components.footer')
    </div>
@endsection
