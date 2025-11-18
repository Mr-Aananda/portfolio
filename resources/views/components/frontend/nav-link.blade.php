@props(['href' => '#', 'active' => false])

@php
    $baseClasses = 'flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-300 rounded-xl group relative';
    $activeClasses = 'text-blue-600 bg-blue-50/80 shadow-sm';
    $inactiveClasses = 'text-gray-600 hover:text-blue-600 hover:bg-gray-50/80';

    $classes = $active ? $baseClasses . ' ' . $activeClasses : $baseClasses . ' ' . $inactiveClasses;
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}

    <!-- Animated underline for active state -->
    @if($active)
    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1/2 h-0.5 bg-blue-600 rounded-full"></span>
    @endif
</a>
