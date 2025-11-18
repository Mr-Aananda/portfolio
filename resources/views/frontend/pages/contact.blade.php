@extends('layouts.frontend.app')

@section('title', 'Contact - MR. Aananda')

@section('content')
    <!-- Page Header -->
    <div class="pt-24 pb-16 bg-gradient-to-r from-blue-50 to-indigo-100">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 text-center">Get In Touch</h1>
            <p class="text-lg text-gray-600 text-center mt-4">
                Ready to start your next project? Let's discuss how we can work together to bring your ideas to life.
            </p>
        </div>
    </div>

        <!-- About Section -->
    @include('frontend.sections.contact')

@endsection
