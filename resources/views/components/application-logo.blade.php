@props(['class' => 'w-8 h-8'])

<div class="{{ $class }} bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg overflow-hidden">
    <img
        src="{{ Vite::asset('resources/assets/images/hero2.webp') }}"
        alt="MR. Aananda"
        class="w-full h-full object-cover"
        onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">
    <span class="text-white font-bold text-lg absolute" style="display: none;">AA</span>
</div>
