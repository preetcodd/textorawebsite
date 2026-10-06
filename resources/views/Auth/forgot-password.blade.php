<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" autocomplete="off">
        @csrf

        <!-- Email Address -->
        <x-grid class="gap-2 mt-5">
            <div>
                <x-input.label>Username</x-input.label>
                <x-input.wrapper>
                    <x-input id="email" type="email" name="email" :value="old('email')" required autofocus
                        placeholder="Email" />
                </x-input.wrapper>
                <x-input.error-message  class="mt-2" >{{ $errors->has('email') ? $errors->first('email') : '' }}</x-input.error-message>
            </div>
        </x-grid>

        <div class="flex items-center justify-end mt-4">
            <x-button type="submit">
                {{ __('Email Password Reset Link') }}
            </x-button>
        </div>
    </form>
</x-guest-layout>