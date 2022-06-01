<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo />
            </a>
        </x-slot>

        <p>
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </p>

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="current-password"/>
            <hr>
            <button>{{ __('Confirm') }}</button>

        </form>
    </x-auth-card>
</x-guest-layout>
