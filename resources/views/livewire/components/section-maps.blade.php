<section id="maps" class="relative w-full py-20 bg-gradient-to-b from-blue-50 to-emerald-50 overflow-hidden">
    <!-- Decorative Blur Backgrounds -->
    <div class="absolute -top-20 -left-20 w-96 h-96 bg-emerald-400/10 blur-3xl rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-[30rem] h-[30rem] bg-blue-400/10 blur-3xl rounded-full"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">

        <!-- Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Mari Berkunjung ke <span class="text-emerald-600">Desa Kunjir</span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Temukan lokasi kami di peta interaktif berikut dan rencanakan perjalananmu ke tempat penuh pesona ini.
            </p>
        </div>

        <!-- Map Container -->
        <div
            class="relative group rounded-3xl overflow-hidden shadow-2xl transition-all duration-500 hover:shadow-emerald-500/20">

            <div
                class="absolute -inset-0.5 bg-gradient-to-r from-emerald-500 to-blue-500 opacity-20 rounded-3xl blur-lg group-hover:opacity-40 transition-opacity duration-500">
            </div>

            <!-- Actual Map -->
            <div class="relative bg-white rounded-3xl overflow-hidden">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15876.88896467063!2d105.64057324022579!3d-5.824254559476181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e410cdd62dfe651%3A0xecf7b5efa86065cc!2sKunjir%2C%20Rajabasa%2C%20South%20Lampung%20Regency%2C%20Lampung!5e0!3m2!1sen!2sid!4v1762440550127!5m2!1sen!2sid"
                    class="w-full h-[500px] md:h-[600px] border-0 grayscale-[40%] hover:grayscale-0 transition duration-300 ease-out"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <!-- Overlay Info Card -->
                <div
                    class="absolute bottom-6 right-6 bg-white/90 backdrop-blur-sm rounded-xl shadow-lg px-6 py-4 flex items-center gap-3 border border-emerald-100 transition-transform duration-500 hover:translate-y-[-2px]">
                    <div class="bg-emerald-600 text-white p-2 rounded-full shadow-md">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 12.414a4 4 0 10-1.414 1.414l4.243 4.243a1 1 0 001.414-1.414zM11 14a3 3 0 110-6 3 3 0 010 6z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-700">Lokasi:</p>
                        <p class="text-xs text-gray-600">Desa Kunjir, Rajabasa, Lampung Selatan</p>
                    </div>
                </div>

                <!-- Hover Hint -->
                <div
                    class="absolute top-4 left-1/2 -translate-x-1/2 bg-emerald-600 text-white text-xs font-medium px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500">
                    Interaktif — kamu bisa zoom dan drag peta
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="https://maps.app.goo.gl/s5ezDpNVo8Uivpa37" target="_blank"
                class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-full shadow-lg hover:shadow-emerald-500/30 transition duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 10H7m0 0l4-4m-4 4l4 4" />
                </svg>
                Buka di Google Maps
            </a>
        </div>

    </div>
</section>
