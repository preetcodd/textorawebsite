<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <x-grid default="2" class="gap-4">

            <div>
                <x-input.label :required="true">Name</x-input.label>
                <x-input.wrapper :valid="!$errors->has('name')">
                    <x-input name="name" type="text" :value="old('name', $user->name)" required autofocus autocomplete="name" placeholder="Name" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->has('name') ? $errors->first('name') : '' }}</x-input.error-message>
            </div>

            <div>
                <x-input.label :required="true">Email</x-input.label>
                <x-input.wrapper :valid="!$errors->has('email')">
                    <x-input name="email" type="email" :value="old('email', $user->email)" required autocomplete="username" placeholder="Email" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->has('email') ? $errors->first('email') : '' }}</x-input.error-message>
            </div>

        </x-grid>

        <div class="flex items-center gap-4">
            <x-button type="submit">
                {{ __('Save') }}
            </x-button>

            @if (session('status') === 'profile-updated')
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