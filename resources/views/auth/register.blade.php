<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        
        <!-- Choose role -->
        <div class="mt-4">
            <x-input-label for="role" :value="__('Select a Role')" />

            <label class="inline-flex items-center p-2">
                <input type="radio" name="role" value="landlord" class="form-radio" required> <!-- Assuming 1 is the ID for 'Landlord' -->
                <span class="ml-2">{{ __('Landlord') }}</span>
            </label>

            <label class="inline-flex items-center p-2">
                <input type="radio" name="role" value="guest" class="form-radio" required> <!-- Assuming 2 is the ID for 'User' -->
                <span class="ml-2">{{ __('Guest') }}</span>
            </label>
            @if (Auth::check() && Auth::user()->role == 'admin')
                <label class="inline-flex items-center p-2">
                    <input type="radio" name="role" value="admin" class="form-radio" required>
                    <span class="ml-2">{{ __('Admin') }}</span>
                </label>
            @endif

            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <!-- submit button -->
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>



    </form>
</x-guest-layout>