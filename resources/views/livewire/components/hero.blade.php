<section class="relative w-full h-screen overflow-hidden bg-black">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-cover bg-center animate-[fade1_15s_infinite]"
            style="background-image: url('{{ asset('images/kunjir_pantai_1.jpeg') }}');"></div>
        <div class="absolute inset-0 bg-cover bg-center animate-[fade2_15s_infinite]"
            style="background-image: url('{{ asset('images/coastal_kunjir.jpg') }}');"></div>
        <div class="absolute inset-0 bg-cover bg-center animate-[fade3_15s_infinite]"
            style="background-image: url('{{ asset('images/view_laut_gunung.jpg') }}');"></div>
    </div>

    <div class="absolute inset-0 bg-black/30 z-10"></div>

    <div class="relative z-20 flex flex-col items-center justify-center text-center h-full px-6">
        <h1 class="text-white font-extrabold text-4xl md:text-6xl lg:text-7xl leading-tight max-w-4xl">
            Mari menjelajahi keindahan wisata Desa Kunjir
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

@push('styles')
    <style>
        @keyframes fade1 {
            0% {
                opacity: 1;
            }

            30% {
                opacity: 1;
            }

            33% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes fade2 {
            0% {
                opacity: 0;
            }

            30% {
                opacity: 0;
            }

            33% {
                opacity: 1;
            }

            63% {
                opacity: 1;
            }

            66% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes fade3 {
            0% {
                opacity: 0;
            }

            63% {
                opacity: 0;
            }

            66% {
                opacity: 1;
            }

            96% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }
    </style>
@endpush
