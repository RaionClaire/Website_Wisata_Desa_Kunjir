@php
    $isHome = request()->is('/');
@endphp

<header id="mainNavbar"
    class="{{ $isHome ? 'absolute' : 'fixed' }} top-0 left-0 w-full flex items-center justify-between 
           px-6 md:px-10 py-4 z-50 transition-all duration-300 ease-in-out
           {{ $isHome ? 'bg-transparent text-white' : 'bg-white text-gray-900 shadow-sm' }}">

    <div class="text-xl md:text-2xl font-bold transition-colors duration-300 {{ $isHome ? 'text-white' : 'text-emerald-600' }}"
        id="brandName">
        Wisata Desa Kunjir
    </div>

    <nav class="hidden md:flex gap-8 font-medium">
        <ul class="flex gap-8 list-none">
            <li>
                <a href="/"
                    class="nav-link {{ $isHome ? 'text-white' : 'text-gray-900' }} hover:text-emerald-600 transition-colors duration-300">
                    Beranda
                </a>
            </li>
            <li>
                <a href="{{ route('articles.index') }}"
                    class="nav-link {{ $isHome ? 'text-white' : 'text-gray-900' }} hover:text-emerald-600 transition-colors duration-300">
                    Artikel
                </a>
            </li>
            <li>
                <a href="{{ $isHome ? '#faq' : url('/#faq') }}"
                    class="nav-link {{ $isHome ? 'text-white' : 'text-gray-900' }} hover:text-emerald-600 transition-colors duration-300">
                    FAQ
                </a>
            </li>
        </ul>
    </nav>

    <button id="mobileMenuBtn" class="md:hidden focus:outline-none z-50" aria-label="Toggle menu">
        <svg id="menuIcon"
            class="w-8 h-8 {{ $isHome ? 'text-white' : 'text-gray-900' }} transition-colors duration-300" fill="none"
            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <div id="mobileMenu"
        class="hidden fixed inset-0 bg-white text-gray-900 opacity-0 pointer-events-none transition-all duration-200 z-40 flex flex-col items-center justify-center gap-8 text-2xl font-semibold">
        <ul class="flex flex-col items-center gap-8 list-none">
            <li><a href="/" class="block hover:text-emerald-600 transition-colors">Beranda</a></li>
            <li><a href="{{ route('articles.index') }}"
                    class="block hover:text-emerald-600 transition-colors">Artikel</a></li>
            <li><a href="{{ $isHome ? '#faq' : url('/#faq') }}"
                    class="block hover:text-emerald-600 transition-colors">FAQ</a></li>
        </ul>
    </div>
</header>
