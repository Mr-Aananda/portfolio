@props(['href' => '#', 'active' => false])

@php
    $base     = 'flex items-center px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 border-l-[3px]';
    $active_c = 'text-brand-600 bg-brand-50/80 border-brand-500 font-semibold';
    $inactive  = 'text-slate-600 hover:text-brand-600 hover:bg-slate-50 border-transparent';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => "$base " . ($active ? $active_c : $inactive)]) }}>
    {{ $slot }}
</a>
