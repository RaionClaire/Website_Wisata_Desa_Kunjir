<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan | Desa Kunjir</title>
    @php
        $manifestCandidates = [
            public_path('build/manifest.json'),
            base_path('public/build/manifest.json'),
            base_path('../public_html/build/manifest.json'),
        ];

        $manifestPath = null;
        foreach ($manifestCandidates as $candidate) {
            if (file_exists($candidate)) {
                $manifestPath = $candidate;
                break;
            }
        }
    @endphp

    @if ($manifestPath)
        @php
            $manifest = json_decode(file_get_contents($manifestPath), true);
        @endphp

        @if (isset($manifest['resources/css/app.css']['file']))
            <link rel="stylesheet" href="{{ url('build/' . $manifest['resources/css/app.css']['file']) }}">
        @endif

        @if (isset($manifest['resources/js/app.js']['file']))
            <script type="module" src="{{ url('build/' . $manifest['resources/js/app.js']['file']) }}"></script>
        @endif
    @else
        @viteReactRefresh
        @vite(['resources/js/app.jsx', 'resources/css/app.css'])
    @endif
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }

        .delay-1 {
            animation-delay: 0.1s;
            opacity: 0;
        }

        .delay-2 {
            animation-delay: 0.2s;
            opacity: 0;
        }

        .delay-3 {
            animation-delay: 0.3s;
            opacity: 0;
        }
    </style>
</head>

<body class="bg-white">

    <div class="min-h-screen flex items-center justify-center px-6 py-12">

        <div class="max-w-xl w-full">

            <!-- 404 Number - Minimalist -->
            <div class="fade-in delay-1 mb-12">
                <h1
                    class="text-[120px] md:text-[180px] font-bold text-emerald-600 leading-none tracking-tight text-center">
                    404
                </h1>
            </div>

            <!-- Content -->
            <div class="text-center space-y-6 fade-in delay-2">
                <h2 class="text-2xl md:text-3xl font-semibold text-gray-900">
                    Halaman Tidak Ditemukan
                </h2>

                <p class="text-gray-600 text-base md:text-lg leading-relaxed max-w-md mx-auto">
                    Halaman yang Anda cari mungkin telah dipindahkan atau tidak tersedia.
                </p>
            </div>

            <!-- Buttons - Clean & Simple -->
            <div class="mt-10 flex flex-col sm:flex-row gap-3 justify-center fade-in delay-3">

                <button onclick="window.history.back()"
                    class="px-6 py-3 text-gray-700 font-medium rounded-lg border-2 border-gray-200 hover:border-gray-300 hover:bg-gray-50 transition-all duration-200">
                    ← Kembali
                </button>

                <a href="{{ url('/') }}"
                    class="px-6 py-3 bg-emerald-600 text-white font-medium rounded-lg hover:bg-emerald-700 transition-all duration-200 text-center">
                    Halaman Utama
                </a>

            </div>

            <!-- Minimal Divider -->
            <div class="mt-16 pt-8 border-t border-gray-100">
                <div class="flex flex-wrap gap-6 justify-center text-sm">
                    <a href="{{ url('/#explore') }}" class="text-gray-500 hover:text-emerald-600 transition-colors">
                        Jelajahi
                    </a>
                    <a href="{{ url('/#plan') }}" class="text-gray-500 hover:text-emerald-600 transition-colors">
                        Rencana
                    </a>
                    <a href="{{ url('/#faq') }}" class="text-gray-500 hover:text-emerald-600 transition-colors">
                        FAQ
                    </a>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
