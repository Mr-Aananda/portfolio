@extends('layouts.frontend.app')

@section('title', 'Skills - MR. Aananda')

@section('content')
    <!-- Page Header -->
    <div class="pt-24 pb-16 bg-gradient-to-r from-blue-50 to-indigo-100">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 text-center">My Skills</h1>
            <p class="text-lg text-gray-600 text-center mt-4">Technologies and expertise I bring to the table</p>
        </div>
    </div>

    <!-- Skills Section -->
    @include('frontend.sections.skills')
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animate skill bars when page loads
        const skillBars = document.querySelectorAll('[data-percentage]');
        skillBars.forEach(bar => {
            const percentage = bar.getAttribute('data-percentage');
            setTimeout(() => {
                bar.style.width = percentage + '%';
            }, 300);
        });
    });
</script>
@endpush
