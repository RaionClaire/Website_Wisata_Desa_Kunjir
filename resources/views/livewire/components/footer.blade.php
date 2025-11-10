    <footer class="bg-gray-900 text-gray-300 pt-12 pb-8">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">

            <!-- Brand -->
            <div>
                <h3 class="text-emerald-400 text-lg font-semibold mb-3">Desa Wisata Kunjir</h3>
                <p class="text-sm leading-relaxed mb-4">
                    Destinasi pesisir selatan Lampung dengan pesona alam, kuliner, dan budaya khas yang memikat.
                    Temukan pengalaman wisata yang autentik di Desa Kunjir.
                </p>
                <a href={{ url('/#plan') }}
                    class="inline-block mt-2 px-4 py-2 bg-emerald-500 text-white rounded-lg text-sm hover:bg-emerald-600 transition">
                    Rencanakan Perjalanan
                </a>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-semibold mb-3">Navigasi</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href={{ url('/#explore') }} class="hover:text-emerald-400 transition">Eksplorasi</a></li>
                    <li><a href={{ url('/#plan') }} class="hover:text-emerald-400 transition">Rencana Perjalanan</a>
                    </li>
                    <li><a href={{ url('/#articles') }} class="hover:text-emerald-400 transition">Artikel & Berita</a>
                    </li>
                    <li><a href={{ url('/#maps') }} class="hover:text-emerald-400 transition">Peta Lokasi</a></li>
                    <li><a href={{ url('/#faq') }} class="hover:text-emerald-400 transition">FAQ</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-white font-semibold mb-3">Kontak</h4>
                <ul class="space-y-2 text-sm">
                    <li><span class="text-gray-400">Alamat:</span> Desa Kunjir, Lampung Selatan</li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h4 class="text-white font-semibold mb-3">Ikuti Kami</h4>
                <div class="flex space-x-4 text-xl">
                    <a href="https://www.instagram.com/wisata_kunjir/" target="_blank"
                        class="hover:text-emerald-400 transition">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </a>
                </div>
                </p>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-700 mt-10 pt-6 text-center text-sm text-gray-500">
            © {{ date('Y') }} <span class="text-white">Desa Wisata Kunjir</span> - Lampung Selatan.
        </div>
    </footer>
