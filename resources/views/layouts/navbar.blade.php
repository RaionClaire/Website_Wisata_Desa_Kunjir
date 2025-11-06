<nav class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b">
  <div class="max-w-7xl mx-auto px-4 lg:px-6 h-16 flex items-center justify-between">
    <a href="/" class="font-extrabold text-lg text-green-700">Desa Kunjir</a>

    <button class="md:hidden p-2" id="navToggle" aria-label="Menu">
      ☰
    </button>

    <ul class="hidden md:flex gap-8 text-sm font-medium text-gray-700" id="navMenu">
      <li><a href="/" class="hover:text-green-700">Beranda</a></li>
      <li><a href="{{ route('articles.index') }}" class="hover:text-green-700">Artikel</a></li>
      <li><a href="#faq" class="hover:text-green-700">FAQ</a></li>
    </ul>
  </div>

  <ul class="md:hidden px-4 pb-4 space-y-2 hidden" id="navMenuMobile">
    <li><a href="/" class="block py-2">Beranda</a></li>
    <li><a href="{{ route('articles.index') }}" class="block py-2">Artikel</a></li>
    <li><a href="#faq" class="block py-2">FAQ</a></li>
  </ul>
</nav>
