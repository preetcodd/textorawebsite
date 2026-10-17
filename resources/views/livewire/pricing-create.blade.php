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

    <div>
        <x-input.label :required="false">OTP / Authentication Price</x-input.label>
        <x-input 
            wire:model="authentication_price"
            type="number"
            step="0.01"
            label="OTP Price"
            placeholder="0.00"
            min="0"
        />
    </div>

    <div>
        <x-input.label :required="false">Service Price</x-input.label>
        <x-input 
            wire:model="service_price"
            type="number"
            step="0.01"
            label="Service Price"
            placeholder="0.00"
            min="0"
        />
    </div>

</div>

<div class="mt-4 pt-3 border-t border-gray-200">
    <div class="flex items-center justify-between mb-2">
        <label class="text-sm font-semibold text-gray-700">Additional / Custom Extra Costs</label>
        <button wire:click="addExtraCost" type="button" class="text-xs bg-green-50 text-green-700 hover:bg-green-100 font-semibold px-2.5 py-1 rounded border border-green-300 cursor-pointer">
            + Add Extra Cost
        </button>
    </div>
    @if(!empty($extra_costs))
        <div class="space-y-2">
            @foreach($extra_costs as $cIdx => $cost)
                <div class="flex items-center space-x-2 bg-gray-50 p-2 rounded border border-gray-200">
                    <input wire:model="extra_costs.{{ $cIdx }}.label" placeholder="Cost Name (e.g. OTP, Service, Setup)" class="flex-1 rounded-md border border-gray-300 px-3 py-1.5 text-sm bg-white" />
                    <input wire:model="extra_costs.{{ $cIdx }}.price" placeholder="Rate (e.g. ₹0.15/Conversation)" class="flex-1 rounded-md border border-gray-300 px-3 py-1.5 text-sm bg-white" />
                    <div class="flex space-x-1">
                        <button wire:click="moveExtraCostUp({{ $cIdx }})" type="button" title="Move Up" class="px-2 py-1 text-xs rounded bg-white border border-gray-300 hover:bg-gray-100 cursor-pointer {{ $cIdx === 0 ? 'opacity-30 cursor-not-allowed' : '' }}" {{ $cIdx === 0 ? 'disabled' : '' }}>
                            ▲
                        </button>
                        <button wire:click="moveExtraCostDown({{ $cIdx }})" type="button" title="Move Down" class="px-2 py-1 text-xs rounded bg-white border border-gray-300 hover:bg-gray-100 cursor-pointer {{ $cIdx === count($extra_costs)-1 ? 'opacity-30 cursor-not-allowed' : '' }}" {{ $cIdx === count($extra_costs)-1 ? 'disabled' : '' }}>
                            ▼
                        </button>
                    </div>
                    <button wire:click="removeExtraCost({{ $cIdx }})" type="button" title="Remove" class="text-red-500 hover:text-red-700 p-1 cursor-pointer">
                        ✕
                    </button>
                </div>
            @endforeach
        </div>
    @endif
</div>
                    </div>
                </x-input.wrapper>
            </div>

            <div class="md:col-span-2">
                <div class="flex items-center justify-between mb-1">
                    <x-input.label :required="true">Features (Arrange using ▲ / ▼)</x-input.label>
                    <span class="text-xs text-gray-500">Order saved here matches website display</span>
                </div>
                <x-input.wrapper :valid="!$errors->has('features')">
                    <div class="space-y-2">
                        @foreach($features as $index => $feature)
                            <div class="flex items-center space-x-2 bg-gray-50 p-1.5 rounded-md border border-gray-200">
                                <div class="flex flex-col space-y-0.5">
                                    <button wire:click="moveFeatureUp({{ $index }})" type="button" title="Move Up"
                                        class="text-gray-500 hover:text-blue-600 disabled:opacity-20 px-1 text-xs font-bold leading-none cursor-pointer"
                                        {{ $index === 0 ? 'disabled' : '' }}>
                                        ▲
                                    </button>
                                    <button wire:click="moveFeatureDown({{ $index }})" type="button" title="Move Down"
                                        class="text-gray-500 hover:text-blue-600 disabled:opacity-20 px-1 text-xs font-bold leading-none cursor-pointer"
                                        {{ $index === count($features) - 1 ? 'disabled' : '' }}>
                                        ▼
                                    </button>
                                </div>
                                <span class="text-xs font-semibold text-gray-400 w-5 text-center">{{ $index + 1 }}.</span>
                                <div class="flex-1">
                                    <x-input wire:model="features.{{ $index }}" placeholder="Enter a feature"
                                        class="w-full bg-white" />
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
                            class="text-green-600 hover:text-green-700 bg-transparent hover:bg-transparent p-2 rounded transition-colors cursor-pointer flex items-center space-x-1"
                            wire:loading.attr="disabled">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <span class="text-sm font-medium">Add Feature</span>
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