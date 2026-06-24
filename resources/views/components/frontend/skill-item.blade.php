@props(['name', 'percentage', 'icon' => 'fas fa-code', 'color' => 'from-brand-500 to-accent-500'])

<div class="group flex items-center gap-3 p-3 rounded-xl hover:bg-slate-50/50 transition-all duration-300">
    {{-- Icon --}}
    <div class="w-10 h-10 flex-shrink-0 bg-gradient-to-br {{ $color }} rounded-xl
                flex items-center justify-center shadow-sm
                group-hover:scale-110 transition-transform duration-300">
        <i class="{{ $icon }} text-white text-sm"></i>
    </div>

    {{-- Name + Bar --}}
    <div class="flex-1 min-w-0">
        <div class="flex items-center justify-between mb-2">
            <h4 class="font-semibold text-slate-200 text-sm truncate">{{ $name }}</h4>
            <span class="text-xs font-bold text-slate-400 ml-2 flex-shrink-0">{{ $percentage }}%</span>
        </div>
        <div class="skill-bar relative">
            <div class="skill-bar-fill bg-gradient-to-r {{ $color }} relative overflow-hidden"
                 data-percentage="{{ $percentage }}" style="width:0%">
                <div class="progress-shimmer absolute inset-0 rounded-full pointer-events-none"></div>
            </div>
        </div>
    </div>
</div>
