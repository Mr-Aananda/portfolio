<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Header -->
        <div class="text-center mb-8">
            <div class="flex justify-center mb-4">
                <x-application-logo class="w-16 h-16" />
            </div>
            <h2 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                Admin Access
            </h2>
            <p class="text-gray-600 mt-2">Portfolio Management Panel</p>
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-700 font-semibold" />
            <x-text-input
                id="email"
                class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-xl shadow-sm transition-all duration-300 px-4 py-3"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                autocomplete="username"
                placeholder="admin@portfolio.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-semibold" />
            <x-text-input
                id="password"
                class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-xl shadow-sm transition-all duration-300 px-4 py-3"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500 shadow-sm transition duration-300" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Login Button -->
        <div class="flex items-center justify-end mt-6">
            <x-primary-button class="ms-3 bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 border-0">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
