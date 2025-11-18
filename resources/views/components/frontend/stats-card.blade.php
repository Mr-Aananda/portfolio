@props(['number', 'text', 'bgColor' => 'bg-blue-50'])

<div {{ $attributes->merge(['class' => "$bgColor p-6 rounded-xl text-center transition duration-300 flex flex-col justify-center items-center min-h-[140px]"]) }}>
    <div class="text-3xl font-bold text-blue-600 mb-3">{{ $number }}+</div>
    <div class="text-gray-700 font-semibold text-sm md:text-base">{{ $text }}</div>
</div>
