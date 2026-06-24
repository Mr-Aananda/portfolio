<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/assets/icons/icon.png') }}">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-slate-50 text-slate-800" x-data="{ sidebarOpen: true, mobileSidebarOpen: false }">
    <div class="min-h-screen flex overflow-hidden">
        
        <!-- Sidebar Navigation -->
        @include('layouts.navigation')

        <!-- Main Layout Area -->
        <div class="flex-1 flex flex-col min-h-screen overflow-y-auto transition-all duration-300 relative"
             :class="{ 'lg:pl-64': sidebarOpen, 'lg:pl-20': !sidebarOpen }">
             
            <!-- Top Navbar -->
            @include('layouts.topbar')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white border-b border-slate-200">
                    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="flex-grow p-4 sm:p-6 lg:p-8">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t border-slate-200 py-4 px-6 text-center text-xs text-slate-400">
                <div class="flex flex-col sm:flex-row justify-between items-center gap-2 max-w-7xl mx-auto">
                    <p>&copy; {{ date('Y') }} Mahmudur Rahman Ananda. All rights reserved.</p>
                    <p>Sleek SaaS Panel v1.0.0</p>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>
