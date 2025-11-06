<section id="plan" class="max-w-7xl mx-auto px-4 py-20">
  <div class="grid md:grid-cols-2 gap-10 items-start mb-10">
    <h2 class="text-4xl font-bold">
      Rencanakan perjalananmu<br/>ke Desa Kunjir
    </h2>
    <p class="text-gray-600 text-sm">
      Pilihan sorotan musiman: spot terbaik, aktivitas, hingga kuliner khas. Geser kartu di bawah.
    </p>
  </div>

  <div class="relative">
    {{-- tombol prev/next --}}
    <button class="absolute -left-3 top-1/2 -translate-y-1/2 h-10 w-10 rounded-full bg-white shadow
                   grid place-items-center hover:bg-gray-100"
            data-snap-prev="#planTripCarousel" aria-label="Prev">‹</button>
    <button class="absolute -right-3 top-1/2 -translate-y-1/2 h-10 w-10 rounded-full bg-white shadow
                   grid place-items-center hover:bg-gray-100"
            data-snap-next="#planTripCarousel" aria-label="Next">›</button>

    {{-- carousel --}}
    <div id="planTripCarousel"
         class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-2 [scrollbar-width:none]"
         style="-ms-overflow-style:none;">
      @php
        $cards = [
          ['img'=>'/images/kunjir_pantai_1.jpeg','t'=>'Snorkeling Terumbu Karang','e'=>'Spot jernih dengan biota beragam; bawa alat atau sewa di warga.'],
          ['img'=>'/images/kunjir_pantai_1.jpeg','t'=>'Menikmati Sunrise','e'=>'Pagi di pesisir Kunjir: langit keemasan + siluet Rajabasa.'],
          ['img'=>'/images/kunjir_pantai_1.jpeg','t'=>'Kuliner Pesisir','e'=>'Ikan bakar, sate cumi, sambal tempoyak — favorit wisatawan.'],
          ['img'=>'/images/kunjir_pantai_1.jpeg','t'=>'Jalan Santai Tepi Pantai','e'=>'Track ringan di desa, cocok keluarga & foto-foto.'],
        ];
      @endphp

      @foreach($cards as $c)
        <article class="snap-start shrink-0 w-[300px] md:w-[360px] rounded-2xl overflow-hidden bg-white shadow">
          <img src="{{ $c['img'] }}" alt="{{ $c['t'] }}" class="h-56 w-full object-cover">
          <div class="p-4">
            <h3 class="font-semibold text-lg mb-1">{{ $c['t'] }}</h3>
            <p class="text-sm text-gray-600">{{ $c['e'] }}</p>
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section>
