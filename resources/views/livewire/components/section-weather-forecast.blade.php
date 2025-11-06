@php
$latitude = -5.8355;
$longitude = 105.6531;
$url = "https://api.open-meteo.com/v1/forecast?latitude={$latitude}&longitude={$longitude}&hourly=temperature_2m,weathercode&daily=temperature_2m_max,temperature_2m_min,weathercode&timezone=auto&forecast_days=3";

try {
    $response = file_get_contents($url);
    $weatherData = json_decode($response, true);
    $hasData = true;
} catch (\Exception $e) {
    $hasData = false;
    $weatherData = null;
}

$weatherCodes = [
    0 => 'Cerah',
    1 => 'Cerah Sebagian',
    2 => 'Berawan Sebagian',
    3 => 'Berawan',
    45 => 'Berkabut',
    48 => 'Berkabut',
    51 => 'Gerimis Ringan',
    53 => 'Gerimis Sedang',
    55 => 'Gerimis Lebat',
    61 => 'Hujan Ringan',
    63 => 'Hujan Sedang',
    65 => 'Hujan Lebat',
    80 => 'Hujan Ringan',
    81 => 'Hujan Sedang',
    82 => 'Hujan Lebat',
    95 => 'Badai Petir',
];
@endphp

<section id="weather-forecast" class="relative bg-cover bg-center bg-no-repeat mt-20" style="background-image: url('/images/coastal2.jpg');">
  <div class="absolute inset-0 bg-black/40"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-20">
    <div class="text-center mb-16">
      <div class="inline-block">
        <svg class="w-16 h-16 mx-auto mb-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
        </svg>
      </div>
      <h2 class="text-4xl font-bold text-white mb-3">Prakiraan Cuaca Kunjir</h2>
      <p class="text-white text-lg">Prakiraan cuaca Kunjir untuk 3 hari ke depan</p>
    </div>

    @if($hasData && isset($weatherData['daily']))
      <div class="flex justify-center">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 max-w-3xl w-full">
        @foreach($weatherData['daily']['time'] as $index => $date)
          @php
            $maxTemp = round($weatherData['daily']['temperature_2m_max'][$index]);
            $minTemp = round($weatherData['daily']['temperature_2m_min'][$index]);
            $weatherCode = $weatherData['daily']['weathercode'][$index] ?? 0;
            $weatherDesc = $weatherCodes[$weatherCode] ?? 'Tidak Diketahui';
            $dateObj = \Carbon\Carbon::parse($date);
            $isToday = $index === 0;
          @endphp
        
          <div class="group relative">
            <div class="bg-[#22446c] bg-opacity-50 rounded-xl p-4 border border-white shadow-md w-full">
              @if($isToday)
                <div class="absolute -top-3 -right-3 bg-gradient-to-r from-cyan-400 to-teal-400 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                  Hari Ini
                </div>
              @endif

              <div class="text-center">
                <h3 class="font-bold text-lg text-white mb-1">
                  {{ $dateObj->translatedFormat('l') }}
                </h3>
                <p class="text-xs text-cyan-200 mb-4">
                  {{ $dateObj->format('d M Y') }}
                </p>
                
                <!-- Weather Icon -->
                <div class="mb-4 transform group-hover:scale-110 transition-transform duration-300">
                  @if($weatherCode == 0 || $weatherCode == 1)
                    <!-- Sun Icon -->
                    <div class="text-6xl">☀️</div>
                  @elseif($weatherCode >= 2 && $weatherCode <= 3)
                    <!-- Cloud Icon -->
                    <div class="text-6xl">☁️</div>
                  @elseif($weatherCode >= 45 && $weatherCode <= 55)
                    <!-- Drizzle/Fog Icon -->
                    <div class="text-6xl">🌫️</div>
                  @elseif($weatherCode >= 61 && $weatherCode <= 82)
                    <!-- Rain Icon -->
                    <div class="text-6xl">🌧️</div>
                  @elseif($weatherCode == 95)
                    <!-- Thunderstorm Icon -->
                    <div class="text-6xl">⛈️</div>
                  @else
                    <!-- Default Cloud -->
                    <div class="text-6xl">☁️</div>
                  @endif
                </div>
                
                <!-- Temperature -->
                <div class="mb-3">
                  <span class="text-4xl font-bold text-white drop-shadow-lg">{{ $maxTemp }}°</span>
                  <span class="text-xl text-cyan-200">/ {{ $minTemp }}°</span>
                </div>
                
                <!-- Weather Description -->
                <div class="inline-block bg-white bg-opacity-20 backdrop-blur-sm px-4 py-2 rounded-full">
                  <p class="text-sm font-medium text-white">{{ $weatherDesc }}</p>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      </div>
    @else
      <div class="text-center py-16 bg-white bg-opacity-10 backdrop-blur-lg rounded-3xl border border-white border-opacity-20">
        <svg class="w-16 h-16 mx-auto mb-4 text-cyan-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
        </svg>
        <p class="text-white-100 text-lg">Prakiraan cuaca tidak tersedia saat ini.</p>
        <p class="text-white-200 text-sm mt-2">Silakan coba lagi nanti.</p>
      </div>
    @endif
  </div>
</section>