<section id="faq" class="max-w-5xl mx-auto px-4 py-24">
  <h2 class="text-3xl font-bold mb-8">Pertanyaan Umum</h2>

  @php
    $faqs = [
      ['q'=>'Bagaimana menuju Desa Kunjir?',
       'a'=>'Dari Bandar Lampung menuju Kalianda (±2 jam), lanjut ke arah Gunung Rajabasa hingga Kunjir.'],
      ['q'=>'Kapan waktu terbaik berkunjung?',
       'a'=>'Musim kemarau (Mei–Sep) untuk pantai & snorkeling; subuh untuk sunrise.'],
      ['q'=>'Ada penginapan?',
       'a'=>'Ada homestay warga & penginapan kecil di sekitar desa.'],
      ['q'=>'Apakah bisa sewa alat snorkeling?',
       'a'=>'Umumnya tersedia sewa sederhana dari warga setempat.']
    ];
  @endphp

  <div class="divide-y">
    @foreach($faqs as $f)
      <details class="py-5 group">
        <summary class="cursor-pointer list-none flex justify-between items-center">
          <span class="font-medium">{{ $f['q'] }}</span>
          <span class="text-green-700 group-open:rotate-180 transition">⌵</span>
        </summary>
        <p class="mt-2 text-sm text-gray-600">{{ $f['a'] }}</p>
      </details>
    @endforeach
  </div>
</section>
