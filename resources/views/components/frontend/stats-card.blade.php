@props(['number', 'text', 'bgColor' => 'bg-brand-50', 'icon' => 'fas fa-star', 'iconColor' => 'text-brand-500'])

<div {{ $attributes->merge(['class' => "$bgColor p-5 rounded-2xl text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg flex flex-col justify-center items-center min-h-[130px] border border-white/60"]) }}>
    <div class="w-10 h-10 rounded-xl bg-white/70 flex items-center justify-center mx-auto mb-3 shadow-sm">
        <i class="{{ $icon }} {{ $iconColor }} text-lg"></i>
    </div>
    <div class="text-3xl font-extrabold gradient-text mb-1"
         data-count="{{ $number }}">{{ $number }}+</div>
    <div class="text-slate-600 font-medium text-sm">{{ $text }}</div>
</div>
