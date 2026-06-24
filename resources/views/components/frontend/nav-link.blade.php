@props(['href' => '#', 'active' => false])

@php
    $base = 'inline-flex items-center px-3.5 py-2 text-sm font-medium rounded-xl transition-all duration-200 relative';
    $active_cls = 'text-brand-600 bg-brand-50 font-semibold';
    $inactive_cls = 'text-slate-600 hover:text-brand-600 hover:bg-slate-50';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => "$base " . ($active ? $active_cls : $inactive_cls)]) }}>
    {{ $slot }}
    @if($active)
        <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-4 h-0.5 rounded-full
                     bg-gradient-to-r from-brand-500 to-accent-500"></span>
    @endif
</a>
