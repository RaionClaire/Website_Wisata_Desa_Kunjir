<section id="explore" class="relative min-h-screen flex items-center justify-center py-20 overflow-hidden">

    <div class="absolute inset-0 bg-cover bg-center lg:bg-fixed bg-scroll bg-no-repeat transition-transform duration-700"
        style="background-image: url('{{ asset('images/coastal2.webp') }}')">
    </div>

    <div class="absolute inset-0 bg-gradient-to-br from-black/50 via-black/40 to-emerald-900/30"></div>

    <!-- Decorative elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-emerald-500/10 rounded-full blur-xl"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-500/10 rounded-full blur-xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 md:px-12 z-10 w-full">

        <!-- Header Section -->
        <div class="text-center mb-12 animate-fade-in">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 drop-shadow-lg">
                Jelajahi Desa Kunjir
            </h2>

            <p class="text-white/80 text-lg max-w-2xl mx-auto">
                Keindahan alam yang memukau di kaki Gunung Rajabasa
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">

            <div class="group relative animate-slide-in-left">
                <!-- Decorative gradient border -->
                <div class="absolute -inset-1 rounded-2xl opacity-70 blur-md transition-opacity duration-500 pointer-events-none"
                    aria-hidden="true">
                    <div class="w-full h-full rounded-2xl bg-gradient-to-r from-emerald-500 to-blue-500 opacity-30">
                    </div>
                </div>

                <div class="relative bg-white/95 backdrop-blur-md rounded-2xl overflow-hidden shadow-2xl transform transition-all duration-500 hover:scale-[1.02] hover:shadow-emerald-lg cursor-pointer"
                    onclick="openImageModal()">
                    <div class="overflow-hidden">
                        <img id="mapImage" src="{{ asset('images/peta_geowisata.webp') }}"
                            alt="Peta Geowisata Desa Kunjir"
                            class="w-full h-auto max-h-[600px] object-contain transform transition-transform duration-700 group-hover:scale-105">
                    </div>

                    <div class="px-4 py-3 bg-gradient-to-r from-emerald-50 to-blue-50 border-t border-gray-200">
                        <div class="flex items-center gap-2 text-gray-700">
                            <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-medium">Peta Geowisata Desa Kunjir</span>
                        </div>
                    </div>

                    <!-- Zoom Icon Hint -->
                    <div
                        class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full p-2 shadow-lg">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                            </svg>
                        </div>
                    </div>

                    <!-- Click to Zoom Badge -->
                    <div
                        class="absolute bottom-16 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="bg-emerald-600 text-white text-xs font-semibold px-3 py-1.5 rounded-full shadow-lg">
                            Klik untuk zoom
                        </div>
                    </div>
                </div>
            </div>

            <!-- Info Card -->
            <div class="animate-slide-in-right">
                <div
                    class="bg-gradient-to-br from-emerald-600/95 to-emerald-700/95 backdrop-blur-md rounded-2xl p-8 lg:p-10 shadow-2xl border border-white/10 transform transition-all duration-500 hover:shadow-emerald-500/30">

                    <h3 class="text-3xl lg:text-4xl font-bold text-white mb-4 leading-tight">
                        Pesona Kunjir Menanti
                    </h3>

                    <p class="text-white/90 text-base lg:text-lg leading-relaxed mb-6">
                        Menghadap Teluk Lampung di kaki Gunung Rajabasa, Kunjir menawarkan pantai pasir putih,
                        snorkeling terumbu karang, sunrise menawan, dan kearifan khas daerah pesisir.
                    </p>

                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm">Pemandangan</p>
                                <p class="text-white/70 text-xs">Laut & Gunung</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-8 h-8 bg-white/20 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm">Aktivitas</p>
                                <p class="text-white/70 text-xs">Snorkeling & Wisata</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        @include('livewire.components.button', [
                            'href' => '#plan',
                            'label' => 'Pelajari Lebih Lanjut',
                            'variant' => 'secondary',
                            'size' => 'lg',
                        ])
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Image Zoom Modal -->
<div id="imageModal"
    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/95 backdrop-blur-sm p-4 transition-opacity duration-300">
    <!-- Close Button -->
    <button onclick="closeImageModal()"
        class="absolute top-4 right-4 z-50 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white rounded-full p-2 transition-all duration-300 group">
        <svg class="w-6 h-6 transform group-hover:rotate-90 transition-transform duration-300" fill="none"
            stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Zoom Controls -->
    <div class="absolute top-4 left-4 z-50 flex gap-2">
        <button onclick="zoomIn()"
            class="bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white rounded-full p-2 transition-all duration-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6" />
            </svg>
        </button>
        <button onclick="zoomOut()"
            class="bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white rounded-full p-2 transition-all duration-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
            </svg>
        </button>
        <button onclick="resetZoom()"
            class="bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white rounded-lg px-3 py-2 text-sm font-medium transition-all duration-300">
            Reset
        </button>
    </div>

    <!-- Image Container with Pan & Zoom -->
    <div id="imageContainer" class="relative max-w-7xl max-h-[90vh] overflow-hidden cursor-move">
        <img id="zoomedImage" src="{{ asset('images/peta_geowisata.webp') }}" alt="Peta Geowisata Desa Kunjir"
            class="w-full h-auto object-contain transition-transform duration-300 select-none" draggable="false">
    </div>

    <!-- Instructions -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-white/70 text-sm text-center">
        <p class="hidden md:block">Gunakan scroll mouse atau tombol zoom • Drag untuk menggeser gambar</p>
        <p class="md:hidden">Pinch untuk zoom • Drag untuk menggeser gambar</p>
    </div>
</div>

<style>
    #imageModal {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    #zoomedImage {
        transform-origin: center center;
    }
</style>
