@props(['name', 'percentage', 'icon' => 'fas fa-code', 'color' => 'from-blue-500 to-blue-600'])

<div class="group p-2 rounded-lg hover:bg-gray-50 transition-all duration-300">
    <div class="flex items-center justify-between mb-2">
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-gradient-to-r {{ $color }} rounded-lg flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                <i class="{{ $icon }} text-white text-xs"></i>
            </div>
            <div class="min-w-0 flex-1">
                <h4 class="font-semibold text-gray-900 text-xs truncate">{{ $name }}</h4>
                <div class="flex items-center space-x-1 mt-0.5">
                    <div class="flex space-x-0.5">
                        @for($i = 1; $i <= 5; $i++)
                            <div class="w-1 h-1 rounded-full {{ $i * 20 <= $percentage ? 'bg-green-500' : 'bg-gray-300' }}"></div>
                        @endfor
                    </div>
                    <span class="text-gray-500 text-2xs">Expert</span>
                </div>
            </div>
        </div>
        <div class="text-right ml-1">
            <span class="text-sm font-bold text-gray-900">{{ $percentage }}%</span>
        </div>
    </div>

    <!-- Progress Bar -->
    <div class="w-full bg-gray-200 rounded-full h-1.5 overflow-hidden">
        <div
            class="h-1.5 rounded-full bg-gradient-to-r {{ $color }} transition-all duration-1000 ease-out transform origin-left"
            style="width: 0%"
            data-percentage="{{ $percentage }}"
        ></div>
    </div>
</div>
