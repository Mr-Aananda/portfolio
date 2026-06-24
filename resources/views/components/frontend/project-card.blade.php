@props(['title', 'description', 'technologies', 'githubUrl', 'demoUrl', 'gradient'])

<div class="group card-premium flex flex-col h-full overflow-hidden">
    {{-- Gradient Header --}}
    <div class="h-40 sm:h-44 bg-gradient-to-br {{ $gradient }} relative overflow-hidden flex-shrink-0">
        {{-- Background pattern --}}
        <div class="absolute inset-0 opacity-20"
             style="background-image: radial-gradient(circle at 20% 80%, rgba(255,255,255,0.4) 0%, transparent 50%),
                                      radial-gradient(circle at 80% 20%, rgba(255,255,255,0.3) 0%, transparent 50%);">
        </div>
        {{-- Icon --}}
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="w-16 h-16 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center
                        group-hover:scale-110 transition-transform duration-500">
                <i class="fas fa-code text-white text-2xl"></i>
            </div>
        </div>
        {{-- Links overlay on hover --}}
        <div class="absolute inset-0 bg-black/50 flex items-center justify-center gap-4
                    opacity-0 group-hover:opacity-100 transition-all duration-300">
            @if($githubUrl !== '#')
            <a href="{{ $githubUrl }}" target="_blank"
               class="w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center
                      text-white hover:bg-white hover:text-slate-900 transition-all duration-200"
               title="View Code">
                <i class="fab fa-github"></i>
            </a>
            @endif
            <a href="{{ $demoUrl }}" target="_blank"
               class="w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center
                      text-white hover:bg-white hover:text-slate-900 transition-all duration-200"
               title="Live Demo">
                <i class="fas fa-external-link-alt text-sm"></i>
            </a>
        </div>
    </div>

    {{-- Content --}}
    <div class="p-5 sm:p-6 flex flex-col flex-1">
        <h3 class="text-base sm:text-lg font-bold text-slate-800 mb-2 leading-snug">{{ $title }}</h3>
        <p class="text-slate-500 text-sm leading-relaxed mb-4 flex-1">{{ $description }}</p>

        {{-- Tech Tags --}}
        <div class="flex flex-wrap gap-1.5 mb-4">
            @foreach($technologies as $tech)
                <span class="px-2.5 py-1 bg-brand-50 text-brand-700 text-xs font-semibold rounded-lg border border-brand-100">
                    {{ $tech }}
                </span>
            @endforeach
        </div>

        {{-- Action Links --}}
        <div class="flex items-center gap-3 pt-3 border-t border-slate-100">
            @if($githubUrl !== '#')
            <a href="{{ $githubUrl }}" target="_blank"
               class="flex items-center gap-1.5 text-sm font-semibold text-slate-600 hover:text-slate-900 transition-colors duration-200">
                <i class="fab fa-github"></i> Code
            </a>
            @endif
            <a href="{{ $demoUrl }}" target="_blank"
               class="flex items-center gap-1.5 text-sm font-semibold text-brand-600 hover:text-brand-700 transition-colors duration-200 ml-auto">
                Live Demo <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
    </div>
</div>
