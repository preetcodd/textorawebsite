<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <x-grid default="1" class="gap-4">

            <div>
                <x-input.label :required="true">Current Password</x-input.label>
                <x-input.wrapper :valid="!$errors->updatePassword->has('current_password')">
                    <x-input name="current_password" type="password" required placeholder="Current Password" autocomplete="current-password" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->updatePassword->has('current_password') ? $errors->updatePassword->first('current_password') : '' }}</x-input.error-message>
            </div>

            <div>
                <x-input.label :required="true">New Password</x-input.label>
                <x-input.wrapper :valid="!$errors->updatePassword->has('password')">
                    <x-input name="password" type="password" required placeholder="New Password" autocomplete="new-password" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->updatePassword->has('password') ? $errors->updatePassword->first('password') : '' }}</x-input.error-message>
            </div>

            <div>
                <x-input.label :required="true">Confirm Password</x-input.label>
                <x-input.wrapper :valid="!$errors->updatePassword->has('password_confirmation')">
                    <x-input name="password_confirmation" type="password" required placeholder="Confirm Password" autocomplete="new-password" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->updatePassword->has('password_confirmation') ? $errors->updatePassword->first('password_confirmation') : '' }}</x-input.error-message>
            </div>

        </x-grid>

        <div class="flex items-center gap-4">
            <x-button type="submit">
                {{ __('Save') }}
            </x-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>