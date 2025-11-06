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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans text-gray-900 antialiased scroll-smooth">
    @include('layouts.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white text-sm text-center py-8">
        © {{ date('Y') }} Desa Wisata Kunjir — Lampung Selatan
    </footer>

    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>

</html>
