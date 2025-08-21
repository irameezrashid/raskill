<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Dashboard for Directorate of Skill Development, Government of Jammu and Kashmir">
    <meta name="author" content="Directorate of Skill Development">

    <title>@yield('title', 'Directorate of Skill Development, J&K')</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome & Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Styles -->
    @vite(['resources/css/site.css'])

    @stack('styles')
</head>

<body
    class="bg-gray-50 text-gray-800 flex flex-col min-h-screen"
    x-data
    x-init="$nextTick(() => {
        if (!$store.menu) return;
        $store.menu.activePath = location.pathname || '/';
    })"
>
    <!-- =========================
      HEADER (navbar + bars)
    ========================= -->
    <div class="fixed top-0 left-0 w-full z-50">
        {{-- Top Navbar --}}
        @include('components/layout.navbar')

        {{-- Orange Bar --}}
        @include('components/layout.orangebar')

        {{-- Teal Bar --}}
        @include('components/layout.tealbar')
    </div>

    <!-- Spacing so header doesn't overlap content -->
    <div class="pt-36"></div>

    <!-- Main Content -->
    <main class="flex-1 mt-[80px] md:mt-[125px] max-w-7xl mx-auto w-full px-4 space-y-12 py-8">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components/layout.footer')


    <!-- Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>

        <!-- Styles -->
    @vite(['resources/js/site.js'])
</body>
</html>
