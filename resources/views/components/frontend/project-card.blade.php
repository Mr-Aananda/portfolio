@props(['title', 'description', 'technologies', 'githubUrl', 'demoUrl', 'gradient'])

<div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition duration-300 hover:shadow-xl">
    <div class="h-48 bg-gradient-to-r {{ $gradient }}"></div>
    <div class="p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ $title }}</h3>
        <p class="text-gray-600 mb-4 leading-relaxed">{{ $description }}</p>
        <div class="flex flex-wrap gap-2 mb-4">
            @foreach($technologies as $tech)
                <span class="bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full">{{ $tech }}</span>
            @endforeach
        </div>
        <div class="flex space-x-4">
            <a href="{{ $githubUrl }}" class="text-blue-600 hover:text-blue-800 transition duration-300 font-medium" target="_blank">
                <i class="fab fa-github mr-1"></i> Code
            </a>
            <a href="{{ $demoUrl }}" class="text-blue-600 hover:text-blue-800 transition duration-300 font-medium" target="_blank">
                <i class="fas fa-external-link-alt mr-1"></i> Live Demo
            </a>
        </div>
    </div>
</div>
