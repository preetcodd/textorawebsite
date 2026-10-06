<div>
    <x-modal id="create-pricing-modal" width="5xl">
        <x-slot name="heading">
            Pricing Create
        </x-slot>

        <x-grid default="2" class="gap-4">

            <div>
                <x-input.label :required="true">Service Type</x-input.label>
                <x-input.select wire:model.live="service" required :valid="!$errors->has('service')"
                    class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Select Service</option>
                    <option value="SMS">SMS</option>
                    <option value="Whatsapp">Whatsapp</option>
                    {{-- <option value="Voice">Voice</option> --}}
                    <option value="RCS">RCS</option>
                    <option value="Email">Email Marketing</option>
                    {{-- <option value="Reseller">Reseller</option> --}}
                </x-input.select>
                <x-input.error-message>{{ $errors->has('service') ? $errors->first('service') : '' }}</x-input.error-message>
            </div>

            <div>
                <x-input.label :required="true">Subcategory</x-input.label>
                <x-input.select wire:model="subcategory" required :valid="!$errors->has('subcategory')"
                    class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Select Subcategory</option>
                    @foreach($subcategories as $key => $label)
                        <option value="{{ $key }}">{{ $label }}</option>
                    @endforeach
                </x-input.select>
                <x-input.error-message>{{ $errors->has('subcategory') ? $errors->first('subcategory') : '' }}</x-input.error-message>
            </div>

            <div>
                <x-input.label :required="true">Plan Type</x-input.label>
                <x-input.select wire:model="category" required
                    class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Select Plan Type</option>
                    <option value="STARTER PLAN">STARTER PLAN</option>
                    <option value="BUSINESS PLAN">BUSINESS PLAN</option>
                    <option value="ENTERPRISE PLAN">ENTERPRISE PLAN</option>
                </x-input.select>
                <x-input.error-message>{{ $errors->has('category') ? $errors->first('category') : '' }}</x-input.error-message>
            </div>

            <div>
                <x-input.label :required="true">Title</x-input.label>
                <x-input.wrapper :valid="!$errors->has('title')">
                    <x-input wire:model="title" label="Title" required placeholder="Title" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->has('title') ? $errors->first('title') : '' }}</x-input.error-message>
            </div>

            <div>
                <x-input.label :required="false">Sub Title</x-input.label>
                <x-input.wrapper :valid="!$errors->has('sub_title')">
                    <x-input wire:model="sub_title" label="Sub Title" placeholder="Sub Title" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->has('sub_title') ? $errors->first('sub_title') : '' }}</x-input.error-message>
            </div>

            <div class="md:col-span-2">
                <x-input.label :required="true">Price Configuration</x-input.label>
                <x-input.wrapper :valid="!$errors->has('monthly_price') && !$errors->has('monthly_total_messages') && !$errors->has('yearly_price') && !$errors->has('yearly_total_messages')">
                    <div class="space-y-4 p-3 border border-gray-300 rounded-md">
                        <div>
                            
                            {{-- <h3 class="text-base font-medium text-gray-900 mb-2">Monthly</h3> --}}
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                <div>
                                    <x-input.label :required="true">Price</x-input.label>
                                    <x-input.wrapper :valid="!$errors->has('monthly_price')">
                                        <x-input wire:model="monthly_price" type="number" step="0.01" label="Price"
                                            required placeholder="0.00" min="0" />
                                    </x-input.wrapper>
                                    <x-input.error-message>{{ $errors->has('monthly_price') ? $errors->first('monthly_price') : '' }}</x-input.error-message>
                                </div>
                                <div>
                                    <x-input.label :required="true">
                                        Total
                                        {{ (str_contains(strtolower($service ?? ''), 'whatsapp')) ? 'Messages' : 'SMS'}}
                                    </x-input.label>
                                    <x-input.wrapper :valid="!$errors->has('monthly_total_messages')">
                                        <x-input wire:model="monthly_total_messages" type="number"
                                            label="Total Messages" required placeholder="0" min="0" />
                                    </x-input.wrapper>
                                    <x-input.error-message>{{ $errors->has('monthly_total_messages') ? $errors->first('monthly_total_messages') : '' }}</x-input.error-message>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-4">

    <div>
        <x-input.label :required="false">Setup Cost</x-input.label>
        <x-input.wrapper>
            <x-input 
                wire:model="setup_cost"
                type="number"
                step="0.01"
                label="Setup Cost"
                placeholder="0.00"
                min="0"
            />
        </x-input.wrapper>
    </div>


    <div>
        <x-input.label :required="true">Billing Type</x-input.label>

        <x-input.select wire:model="billing_type">
            <option value="">Select Billing</option>
            <option value="MONTHLY">MONTHLY</option>
            <option value="YEARLY">YEARLY</option>
            <option value="ONE TIME">ONE TIME</option>
        </x-input.select>

    </div>


    <div>
        <x-input.label :required="false">Marketing Price</x-input.label>
        <x-input 
            wire:model="marketing_price"
            type="number"
            step="0.01"
            label="Marketing Price"
            placeholder="0.00"
            min="0"
        />
    </div>


    <div>
        <x-input.label :required="false">Utility Price</x-input.label>
        <x-input 
            wire:model="utility_price"
            type="number"
            step="0.01"
            label="Utility Price"
            placeholder="0.00"
            min="0"
        />
    </div>

</div>
                    </div>
                </x-input.wrapper>
            </div>

            <div class="md:col-span-2">
                <x-input.label :required="true">Features</x-input.label>
                <x-input.wrapper :valid="!$errors->has('features')">
                    <div class="space-y-2">
                        @foreach($features as $index => $feature)
                            <div class="flex items-center space-x-2">
                                <div class="flex-1">
                                    <x-input wire:model="features.{{ $index }}" placeholder="Enter a feature"
                                        class="w-full" />
                                    @error("features.{$index}")
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <x-button wire:click="removeFeature({{ $index }})" type="button"
                                    class="text-red-500 hover:text-red-600 bg-transparent hover:bg-transparent p-2 rounded transition-colors cursor-pointer"
                                    wire:loading.attr="disabled">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </x-button>
                            </div>
                        @endforeach
                    </div>
                    @error('features')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    <div class="mt-2">
                        <x-button wire:click="addFeature" type="button"
                            class="text-green-500 hover:text-green-600 bg-transparent hover:bg-transparent p-2 rounded transition-colors cursor-pointer"
                            wire:loading.attr="disabled">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </x-button>
                    </div>
                </x-input.wrapper>
            </div>

        </x-grid>

        <x-slot name="footer">
            <x-button wire:click="createPricing" :loadingIndicator="true" wire:target="createPricing">
                Create Pricing
            </x-button>
        </x-slot>
    </x-modal>
</div>