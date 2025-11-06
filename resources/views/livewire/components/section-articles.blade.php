<section class="bg-blue-50 py-20">
  <div class="max-w-7xl mx-auto px-4">
    <div class="grid md:grid-cols-2 gap-8 items-start mb-10">
      <div>
        <h2 class="text-3xl font-bold">Artikel tentang Kunjir</h2>
        <a href="/articles" class="text-green-700 font-medium">Lihat semua artikel →</a>
      </div>
      <p class="text-sm text-gray-600">
        Kumpulan artikel terpopuler: hidden gems, tips perjalanan, hingga budaya lokal.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      @include('livewire.components.card-article',[
        'image'=>'/images/kunjir_pantai_1.jpeg',
        'title'=>'5 Spot Sunset Favorit di Kunjir',
        'excerpt'=>'Daftar lokasi terbaik menikmati matahari terbenam di pesisir Teluk Lampung.'
      ])
      @include('livewire.components.card-article',[
        'image'=>'/images/kunjir_pantai_1.jpeg',
        'title'=>'Panduan Snorkeling untuk Pemula',
        'excerpt'=>'Peralatan, etika di laut, dan tips keselamatan singkat.'
      ])
      @include('livewire.components.card-article',[
        'image'=>'/images/kunjir_pantai_1.jpeg',
        'title'=>'Kuliner Khas Pesisir',
        'excerpt'=>'Referensi kuliner lokal yang wajib dicoba saat berkunjung.'
      ])
    </div>
  </div>
</section>
