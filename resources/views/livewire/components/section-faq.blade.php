<section id="faq" class="relative max-w-5xl mx-auto px-6 py-24">
    <div class="mb-14">
        <h2 class="md:text-5xl text-3xl font-bold text-emerald-600 mb-4">Pertanyaan Umum</h2>
        <p class="text-gray-600 max-w-2xl">
            Temukan jawaban dari hal-hal yang paling sering ditanyakan sebelum berkunjung ke Desa Kunjir.
        </p>
    </div>

    @php
        $faqs = [
            [
                'q' => 'Bagaimana cara menuju Desa Kunjir?',
                'a' =>
                    'Dari Bandar Lampung menuju Kalianda (±2 jam), lalu lanjut ke arah Gunung Rajabasa hingga ke Desa Kunjir. Akses bisa menggunakan mobil pribadi atau angkutan lokal.',
            ],
            [
                'q' => 'Kapan waktu terbaik untuk berkunjung?',
                'a' =>
                    'Musim kemarau (Mei–September) ideal untuk menikmati pantai dan snorkeling, sementara waktu subuh adalah momen terbaik untuk menikmati sunrise.',
            ],
            [
                'q' => 'Apakah tersedia penginapan di sekitar lokasi?',
                'a' => 'Tersedia beberapa homestay milik warga serta penginapan kecil di sekitar area desa.',
            ],
            [
                'q' => 'Bisakah menyewa alat snorkeling di lokasi?',
                'a' => 'Ya, warga setempat menyediakan penyewaan alat snorkeling dengan harga terjangkau.',
            ],
        ];
    @endphp

    <div id="faq-accordion" class="space-y-4">
        @foreach ($faqs as $i => $f)
            <details
                class="group bg-white/70 backdrop-blur-md border border-emerald-100 hover:border-emerald-300 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 px-6 py-5 open:shadow-emerald-100"
                name="faq-group">
                <summary
                    class="cursor-pointer flex justify-between items-center text-gray-800 font-medium list-none select-none focus:outline-none">
                    <span>{{ $f['q'] }}</span>
                    <span
                        class="ml-4 flex-shrink-0 w-6 h-6 flex items-center justify-center rounded-full bg-emerald-100 text-emerald-700 transition-transform duration-300 group-open:rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </summary>

                <div
                    class="overflow-hidden transition-all duration-300 group-open:mt-3 group-open:opacity-100 opacity-0">
                    <p class="text-gray-600 text-sm leading-relaxed">{{ $f['a'] }}</p>
                </div>
            </details>
        @endforeach
    </div>
</section>
