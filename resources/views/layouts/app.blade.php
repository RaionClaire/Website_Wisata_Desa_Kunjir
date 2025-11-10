<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- Meta tag --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website Wisata Desa Kunjir Lampung selatan">
    <meta name="keywords" content="pariwisata, pantai, desa, lampung, lampung selatan">
    <meta name="author" content="Wisata Desa Kunjir">

    <title>@yield('title', 'Desa Wisata Kunjir')</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap"
        rel="stylesheet">

    {{-- Styles / Scripts --}}
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

    @livewireStyles
</head>


<body class="font-sans text-gray-900 antialiased">
    @include('livewire.components.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('livewire.components.footer')

    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>

</html>
