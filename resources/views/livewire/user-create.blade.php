<div>
    <x-modal id="create-user-modal" width="2xl">
        <x-slot name="heading">
            New User
        </x-slot>

        <x-grid default="2" class="gap-4">

            <div>
                <x-input.label :required="true">Name</x-input.label>
                <x-input.wrapper :valid="!$errors->has('name')">
                    <x-input wire:model="name" label="Name" required placeholder="Name" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->has('name') ? $errors->first('name') : '' }}</x-input.error-message>
            </div>

            <div>
                <x-input.label :required="true">Email</x-input.label>
                <x-input.wrapper :valid="!$errors->has('email')">
                    <x-input wire:model="email" label="Email" required placeholder="Email" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->has('email') ? $errors->first('email') : '' }}</x-input.error-message>
            </div>

        </x-grid>

        <x-slot name="footer">
            <x-button wire:click="createUser" :loadingIndicator="true" wire:target="createUser">
                Create User
            </x-button>
        </x-slot>
    </x-modal>
</div>
