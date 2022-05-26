<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <label for="email">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus />

            <!-- Password -->
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required />

            <!-- Confirm Password -->
            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required />
            <hr>
            <button>{{ __('Reset Password') }}</button>

        </form>
    </x-auth-card>
</x-guest-layout>
