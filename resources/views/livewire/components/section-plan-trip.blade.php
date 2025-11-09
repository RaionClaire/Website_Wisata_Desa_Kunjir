<section id="plan" class="relative max-w-7xl mx-auto px-4 py-16 md:py-24 overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute top-0 right-0 w-72 h-72 bg-emerald-100 rounded-full blur-3xl opacity-30 -z-10"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-teal-100 rounded-full blur-3xl opacity-20 -z-10"></div>

    <!-- Header -->
    <div class="grid md:grid-cols-2 gap-10 items-start mb-10">
        <h2 class="text-4xl font-bold">
            Rencanakan perjalananmu ke<br><span class="text-emerald-600">Desa Kunjir</span>
        </h2>
        <p class="text-gray-600 text-sm">
            Pilihan sorotan musiman: spot terbaik, aktivitas, hingga kuliner khas. Geser kartu di bawah.
        </p>
    </div>

    <!-- Carousel Wrapper -->
    <div class="relative w-full">
        <!-- Tombol Prev -->
        <button
            class="absolute left-2 md:-left-4 top-1/2 -translate-y-1/2 z-10 w-8 h-8 md:w-10 md:h-10 rounded-full bg-white shadow-lg flex items-center justify-center text-gray-800 hover:bg-emerald-500 hover:text-white transition-all duration-300 hover:scale-110 disabled:opacity-50 disabled:cursor-not-allowed"
            data-snap-prev="#planTripCarousel" aria-label="Prev">
            <span class="text-lg font-bold">&lt;</span>
        </button>

        <!-- Carousel -->
        <div id="planTripCarousel"
            class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-4 scrollbar-hide"
            style="scrollbar-width: none; -ms-overflow-style: none;">
            @foreach ($cards as $index => $c)
                <article wire:click="openModal({{ $index }})"
                    class="cursor-pointer snap-start shrink-0 w-[280px] sm:w-[320px] md:w-[360px] group">
                    <div
                        class="relative rounded-2xl overflow-hidden bg-white shadow-sm transition-all duration-500 transform hover:-translate-y-2">
                        <div class="relative h-56 overflow-hidden bg-gray-200">
                            <img src="{{ $c['img'] }}" alt="{{ $c['t'] }}"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-300">
                            </div>
                        </div>
                        <div class="p-5">
                            <h3
                                class="font-bold text-lg text-gray-900 mb-2 line-clamp-2 group-hover:text-emerald-600 transition-colors duration-300">
                                {{ $c['t'] }}
                            </h3>
                            <p class="text-sm text-gray-600 leading-relaxed line-clamp-3 mb-4">
                                {{ $c['e'] }}
                            </p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Tombol Next -->
        <button
            class="absolute right-2 md:-right-4 top-1/2 -translate-y-1/2 z-10 w-8 h-8 md:w-10 md:h-10 rounded-full bg-white shadow-lg flex items-center justify-center text-gray-800 hover:bg-emerald-500 hover:text-white transition-all duration-300 hover:scale-110 disabled:opacity-50 disabled:cursor-not-allowed"
            data-snap-next="#planTripCarousel" aria-label="Next">
            <span class="text-lg font-bold">&gt;</span>
        </button>
    </div>

    @if ($showModal && $selectedCard)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">
            <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full mx-4 overflow-hidden animate-fadeIn">
                <div class="relative">
                    <img src="{{ $selectedCard['img'] }}" alt="{{ $selectedCard['t'] }}"
                        class="w-full h-64 object-cover">
                    <button wire:click="closeModal"
                        class="absolute top-4 right-4 bg-white/90 rounded-full p-2 text-gray-700 hover:bg-red-500 hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-emerald-700 mb-2">{{ $selectedCard['t'] }}</h3>
                    <p class="text-gray-700 mb-4">{{ $selectedCard['desc'] }}</p>
                </div>
            </div>
        </div>
    @endif
</section>
