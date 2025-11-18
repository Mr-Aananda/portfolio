@props(['href' => '#', 'active' => false])

@php
    $baseClasses = 'flex items-center px-4 py-3 text-base font-medium transition-all duration-300 rounded-lg group';
    $activeClasses = 'text-blue-600 bg-blue-50/80 border-l-4 border-blue-600';
    $inactiveClasses = 'text-gray-600 hover:text-blue-600 hover:bg-gray-50/80 border-l-4 border-transparent';

    $classes = $active ? $baseClasses . ' ' . $activeClasses : $baseClasses . ' ' . $inactiveClasses;
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
