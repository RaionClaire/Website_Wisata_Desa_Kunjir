<section class="relative w-full h-screen bg-cover bg-center bg-no-repeat"
    style="background-image: url('/images/kunjir_pantai_1.jpeg')">
    <div class="absolute inset-0 bg-black/30"></div>

    <header id="mainNavbar"
        class="fixed top-0 left-0 w-full flex items-center justify-between px-6 md:px-10 py-5 z-50 transition-all duration-300 text-white">
        <div class="text-xl md:text-2xl font-semibold">Wisata Desa Kunjir</div>

        <nav class="hidden md:flex gap-10 font-medium">
            <a href="#" class="hover:underline">Artikel</a>
            <a href="#" class="hover:underline">About Us</a>
        </nav>

        <button id="mobileMenuBtn" class="md:hidden focus:outline-none">
            <svg id="menuIcon" class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </header>

    <div id="mobileMenu"
        class="fixed inset-0 bg-white text-gray-900 hidden opacity-0 pointer-events-none transition-all duration-300 z-40 flex-col items-center justify-center gap-10 text-2xl font-semibold">
        <a href="#" class="hover:text-primary">Artikel</a>
        <a href="#" class="hover:text-primary">About Us</a>
    </div>

    <div class="relative z-20 flex flex-col items-center justify-center text-center h-full px-6">
        <h1 class="text-white font-extrabold text-4xl md:text-6xl lg:text-7xl leading-tight max-w-4xl">
            Damai di Pesisir Selatan Lampung
        </h1>
    </div>

    <div class="absolute bottom-6 inset-x-0 flex justify-center z-20">
        <div class="w-10 h-10 border-2 border-white rounded-full flex items-center justify-center">
            <svg class="w-4 h-4 text-white animate-bounce" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </div>
</section>

<script>
    const navbar = document.getElementById('mainNavbar');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');

    // Change navbar style on scroll
    document.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('bg-white', 'shadow-md', 'text-gray-900');
            navbar.classList.remove('text-white');
        } else {
            navbar.classList.remove('bg-white', 'shadow-md', 'text-gray-900');
            navbar.classList.add('text-white');
        }
    });

    mobileMenuBtn.addEventListener('click', () => {
        const isOpened = !mobileMenu.classList.contains('hidden');

        if (isOpened) {
            mobileMenu.classList.add('opacity-0', 'pointer-events-none');
            setTimeout(() => mobileMenu.classList.add('hidden'), 300);
        } else {
            mobileMenu.classList.remove('hidden');
            setTimeout(() => mobileMenu.classList.remove('opacity-0', 'pointer-events-none'), 10);
        }
    });
</script>
