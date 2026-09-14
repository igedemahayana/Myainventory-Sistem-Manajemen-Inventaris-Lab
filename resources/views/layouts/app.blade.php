<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Myainventory — Sistem Manajemen Inventaris Lab Komputer</title>
    <link rel="icon" href="{{ asset('icons/Logo-Myainventory.svg') }}">

    {{-- Google Fonts: Plus Jakarta Sans & Cormorant Garmond Serif Italic --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,400;1,500;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- Boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- Instal Tailwind CSS v4 --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased overflow-x-hidden selection:bg-[#D4F933] selection:text-black">

    {{-- Memanggil Component Navbar --}}
    @include('components.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    {{-- Memanggil Component Footer --}}
    @include('components.footer')
</body>

</html>
