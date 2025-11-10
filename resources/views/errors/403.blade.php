<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Akses Ditolak | Desa Kunjir</title>
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

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                transform: translateX(-5px);
            }

            20%,
            40%,
            60%,
            80% {
                transform: translateX(5px);
            }
        }

        .fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }

        .shake-animation {
            animation: shake 0.5s ease-in-out;
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

            <!-- 403 Number with Lock Icon -->
            <div class="fade-in delay-1 mb-8 text-center">
                <div
                    class="inline-flex items-center justify-center w-20 h-20 bg-amber-100 rounded-full mb-6 shake-animation">
                    <svg class="w-10 h-10 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h1 class="text-[120px] md:text-[180px] font-bold text-amber-600 leading-none tracking-tight">
                    403
                </h1>
            </div>

            <!-- Content -->
            <div class="text-center space-y-6 fade-in delay-2">
                <h2 class="text-2xl md:text-3xl font-semibold text-gray-900">
                    Akses Ditolak
                </h2>

                <p class="text-gray-600 text-base md:text-lg leading-relaxed max-w-md mx-auto">
                    Maaf, Anda tidak memiliki izin untuk mengakses halaman ini. Silakan hubungi administrator jika Anda
                    merasa ini adalah kesalahan.
                </p>

                <!-- User Info (if authenticated) -->
                @auth
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 bg-amber-50 border border-amber-200 rounded-lg text-sm">
                        <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="text-amber-700">
                            Login sebagai: <strong>{{ auth()->user()->name ?? 'User' }}</strong>
                            @if (auth()->user()->role ?? false)
                                <span class="text-amber-600">({{ ucfirst(auth()->user()->role) }})</span>
                            @endif
                        </span>
                    </div>
                @endauth
            </div>

            <!-- Buttons -->
            <div class="mt-10 flex flex-col sm:flex-row gap-3 justify-center fade-in delay-3">

                <button onclick="window.history.back()"
                    class="px-6 py-3 text-gray-700 font-medium rounded-lg border-2 border-gray-200 hover:border-gray-300 hover:bg-gray-50 transition-all duration-200">
                    ← Kembali
                </button>

                @auth
                    <!-- Back to Dashboard (sesuaikan route) -->
                    <a href="{{ url('/dashboard') }}"
                        class="px-6 py-3 bg-amber-600 text-white font-medium rounded-lg hover:bg-amber-700 transition-all duration-200 text-center">
                        Dashboard Saya
                    </a>
                @else
                    <!-- Login if not authenticated -->
                    <a href="{{ route('login') }}"
                        class="px-6 py-3 bg-amber-600 text-white font-medium rounded-lg hover:bg-amber-700 transition-all duration-200 text-center">
                        Login
                    </a>
                @endauth

            </div>

            <!-- Permission Required Info -->
            <div class="mt-12 p-4 bg-gray-50 rounded-lg fade-in delay-3">
                <div class="flex items-start gap-3 text-sm">
                    <svg class="w-5 h-5 text-gray-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="text-gray-600">
                        <p class="font-medium text-gray-700 mb-1">Halaman ini memerlukan izin khusus</p>
                        <p class="text-xs">Jika Anda merasa seharusnya memiliki akses, silakan hubungi administrator
                            sistem untuk meminta izin yang sesuai.</p>
                    </div>
                </div>
            </div>

            <!-- Links -->
            <div class="mt-16 pt-8 border-t border-gray-100">
                <div class="flex flex-wrap gap-6 justify-center text-sm">
                    <a href="{{ url('/') }}" class="text-gray-500 hover:text-amber-600 transition-colors">
                        Beranda
                    </a>
                    @auth
                        <a href="{{ url('/admin') }}" class="text-gray-500 hover:text-amber-600 transition-colors">
                            Dashboard
                        </a>
                    @endauth
                </div>
            </div>

        </div>
    </div>

</body>

</html>
