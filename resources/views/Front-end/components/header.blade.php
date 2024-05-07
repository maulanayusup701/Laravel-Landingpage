<nav class="bg-green-100 px-4 py-4 fixed w-full z-50">
    <div class="flex justify-between items-center lg:container lg:mx-auto">
        <a href="#home" id="logo" class="cursor-pointer">
            <img src="{{ asset('Front-end/assets/img/logo.png') }}" alt="logo" />
        </a>
        <div class="hidden lg:flex" id="menu">
            <ul class="flex justify-center items-center gap-6">
                <li class="border-b-2 hover:border-black"><a href="#home"><span class="text-medium font-bold">Home</span></a></li>
                <li class="border-b-2 hover:border-black"><a href="#FAQ"><span class="text-medium font-bold">FAQ</span></a></li>
                <li class="border-b-2 hover:border-black"><a href="#Paket"><span class="text-medium font-bold">Paket</span></a></li>
            </ul>
        </div>
        <a href="#" id="option" class="cursor-pointer lg:hidden">
            <img src="{{ asset('Front-end/assets/img/option.png') }}" alt="option" class="border border-green-600 rounded-lg" />
        </a>
        <a href="#Konsultasi"
            class="hidden lg:flex gap-2 px-6 lg:py-2 lg:bg-green-700 lg:hover:bg-green-600 lg:hover:transition ease-in-out delay-100 lg:hover:scale-105 lg:rounded-lg">
            <i class="bi bi-headset text-white"></i>
            <span class="text-white text-medium font-bold">Konsultasi</span>
        </a>
    </div>
</nav>
<div id="mobile-menu" class="fixed bottom-0 bg-white right-0 left-0 py-4 px-8 border-t-2 border-slate-200 lg:hidden hidden transform transition-transform ease-in-out duration-300">
    <ul class="flex justify-between md:px-4">
        <li>
            <a href="#home" class="flex justify-center flex-col items-center text-green-secondary">
                <i class="bi bi-house-door-fill"></i>
                <span class="text-base font-medium">Home</span>
            </a>
        </li>
        <li>
            <a href="#FAQ" class="flex justify-center flex-col items-center">
                <i class="bi bi-archive-fill"></i>
                <span class="text-base font-medium">FAQ</span>
            </a>
        </li>
        <li>
            <a href="#Paket" class="flex justify-center flex-col items-center">
                <i class="bi bi-chat-left-dots-fill"></i>
                <span class="text-base font-medium">Paket</span>
            </a>
        </li>
        <li>
            <a href="#Konsultasi" class="flex justify-center flex-col items-center">
                <i class="bi bi-headset"></i>
                <span class="text-base font-medium">Konsultasi</span>
            </a>
        </li>
    </ul>
</div>