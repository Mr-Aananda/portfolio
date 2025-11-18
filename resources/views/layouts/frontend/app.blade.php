<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MR. Aananda - Full Stack Web Developer')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

     <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/assets/icons/icon.png') }}">

    <!-- Additional Fonts for Professional Look -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    @stack('styles')
</head>
<body class="bg-gray-50 font-sans antialiased">
    <!-- Navigation -->
    <x-frontend.navigation />

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <x-frontend.footer />

    <!-- Scripts -->
    @stack('scripts')
</body>
</html>
