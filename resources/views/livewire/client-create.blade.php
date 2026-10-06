<div>
    <x-modal id="create-client-modal" width="2xl">
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

            <div>
                <x-input.label :required="true">Business Email</x-input.label>
                <x-input.wrapper :valid="!$errors->has('business_email')">
                    <x-input wire:model="business_email" label="Business Email" required placeholder="Business Email" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->has('business_email') ? $errors->first('business_email') : '' }}</x-input.error-message>
            </div>

            <div>
                <x-input.label :required="true">Contact</x-input.label>
                <x-input.wrapper :valid="!$errors->has('contact')">
                    <x-input wire:model="contact" label="Contact" required placeholder="Contact" maxlength="10" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->has('contact') ? $errors->first('contact') : '' }}</x-input.error-message>
            </div>

            <div>
                <x-input.label :required="true">Business Contact</x-input.label>
                <x-input.wrapper :valid="!$errors->has('business_contact')">
                    <x-input wire:model="business_contact" label="Business Contact" required placeholder="Business Contact"  maxlength="10" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->has('business_contact') ? $errors->first('business_contact') : '' }}</x-input.error-message>
            </div>

            <div>
                <x-input.label :required="true">Company Name</x-input.label>
                <x-input.wrapper :valid="!$errors->has('company')">
                    <x-input wire:model="company" label="Company Name" required placeholder="Company Name" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->has('company') ? $errors->first('company') : '' }}</x-input.error-message>
            </div>

            <div>
                <x-input.label :required="true">Address</x-input.label>
                <x-input.wrapper :valid="!$errors->has('address')">
                    <x-input wire:model="address" label="Address" required placeholder="Address" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->has('address') ? $errors->first('address') : '' }}</x-input.error-message>
            </div>

            <div class="col-span-2">
                <x-input.label :required="true">Password</x-input.label>
                <x-input.wrapper :valid="!$errors->has('password')">
                    <x-input wire:model="password" type="password" label="Password" required placeholder="Password" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->has('password') ? $errors->first('password') : '' }}</x-input.error-message>
            </div>

        </x-grid>

        <x-slot name="footer">
            <x-button wire:click="createClient" :loadingIndicator="true" wire:target="createClient">
                Create User
            </x-button>
        </x-slot>
    </x-modal>
</div>