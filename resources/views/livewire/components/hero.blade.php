<section class="relative w-full h-screen overflow-hidden bg-black">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-cover bg-center animate-fade1"
            style="background-image: url('{{ asset('images/kunjir_pantai_1.webp') }}');"></div>

        <div class="absolute inset-0 bg-cover bg-center animate-fade2"
            style="background-image: url('{{ asset('images/coastal_kunjir.webp') }}');"></div>

        <div class="absolute inset-0 bg-cover bg-center animate-fade3"
            style="background-image: url('{{ asset('images/air_terjun2.jpg') }}');"></div>
        
        <div class="absolute inset-0 bg-cover bg-center animate-fade4"
            style="background-image: url('{{ asset('images/jalantepipantai.jpg') }}');"></div>

        <div class="absolute inset-0 bg-cover bg-center animate-fade5" 
            style="background-image: url('{{ asset('images/mataair.jpg') }}');"></div>
    </div>

    <div class="absolute inset-0 bg-black/30 z-10"></div>

    <div class="relative z-20 flex flex-col items-center justify-center text-center h-full px-6">
        <h1 class="text-white font-extrabold text-4xl md:text-6xl lg:text-7xl leading-tight max-w-4xl drop-shadow-lg">
            Mari menjelajahi keindahan wisata Desa Kunjir
        </h1>
    </div>

    <!-- Tombol Scroll -->
    <div class="absolute bottom-6 inset-x-0 flex justify-center z-20">
        <a href="#explore"
            class="w-10 h-10 border-2 border-white rounded-full flex items-center justify-center hover:bg-white/20 transition">
            <svg class="w-4 h-4 text-white animate-bounce" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M19 9l-7 7-7-7" />
            </svg>
        </a>
    </div>
</section>
