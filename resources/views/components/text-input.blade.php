@props(['disabled' => false])

{{-- <input @disabled($disabled)
    {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}> --}}
<input
    {{ $attributes->merge(['class' => 'border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-xl shadow-sm transition duration-300']) }}>
