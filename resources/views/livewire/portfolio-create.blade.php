<div>
    <x-modal id="create-portfolio-modal" width="4xl">
        <x-slot name="heading">
            <span class="text-lg font-bold text-gray-900">Add Delivered Portfolio Case Study</span>
        </x-slot>

        <x-grid default="2" class="gap-5">

            <!-- Client Name -->
            <div>
                <x-input.label :required="true">Client / Company Name</x-input.label>
                <x-input.wrapper :valid="!$errors->has('client_name')">
                    <x-input wire:model="client_name" placeholder="e.g. Reliable Properties" required />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->first('client_name') }}</x-input.error-message>
            </div>

            <!-- Industry Badge -->
            <div>
                <x-input.label :required="true">Industry Badge</x-input.label>
                <x-input.wrapper :valid="!$errors->has('badge')">
                    <x-input wire:model="badge" placeholder="e.g. Real Estate CRM, Healthcare CPaaS" required />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->first('badge') }}</x-input.error-message>
            </div>

            <!-- Categories -->
            <div>
                <x-input.label :required="true">Filter Categories (space-separated)</x-input.label>
                <x-input.wrapper :valid="!$errors->has('category')">
                    <x-input wire:model="category" placeholder="web crm cpaas healthcare" required />
                </x-input.wrapper>
                <p class="text-[11px] text-gray-500 mt-1">Available filter slugs on website: <strong>web</strong>, <strong>crm</strong>, <strong>cpaas</strong>, <strong>healthcare</strong></p>
                <x-input.error-message>{{ $errors->first('category') }}</x-input.error-message>
            </div>

            <!-- Display Order -->
            <div>
                <x-input.label>Display Order (Priority)</x-input.label>
                <x-input.wrapper :valid="!$errors->has('sort_order')">
                    <x-input type="number" wire:model="sort_order" placeholder="e.g. 1, 2, 3..." />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->first('sort_order') }}</x-input.error-message>
            </div>

            <!-- Title -->
            <div class="col-span-2">
                <x-input.label :required="true">Case Study Headline</x-input.label>
                <x-input.wrapper :valid="!$errors->has('title')">
                    <x-input wire:model="title" placeholder="e.g. Reliable Properties: Lead Pipeline Hub & WhatsApp Automation" required />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->first('title') }}</x-input.error-message>
            </div>

            <!-- Description -->
            <div class="col-span-2">
                <x-input.label :required="true">Solution Summary / Description</x-input.label>
                <x-input.wrapper :valid="!$errors->has('description')">
                    <textarea wire:model="description" rows="3"
                        class="w-full border border-gray-300 rounded-lg p-3 text-sm focus:ring focus:ring-green-200 outline-none"
                        placeholder="Detail the problem solved and core functionality delivered..."></textarea>
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->first('description') }}</x-input.error-message>
            </div>

            <!-- Impact Highlight -->
            <div>
                <x-input.label :required="true">Impact Metric Highlight</x-input.label>
                <x-input.wrapper :valid="!$errors->has('impact_highlight')">
                    <x-input wire:model="impact_highlight" placeholder="e.g. +340% Lead Response Speed" required />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->first('impact_highlight') }}</x-input.error-message>
            </div>

            <!-- Impact Subtext -->
            <div>
                <x-input.label :required="true">Impact Subtext</x-input.label>
                <x-input.wrapper :valid="!$errors->has('impact_desc')">
                    <x-input wire:model="impact_desc" placeholder="e.g. 45,000+ Automated brochures sent" required />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->first('impact_desc') }}</x-input.error-message>
            </div>

            <!-- Tech Stack -->
            <div class="col-span-2">
                <x-input.label :required="true">Tech Stack Tags (comma-separated)</x-input.label>
                <x-input.wrapper :valid="!$errors->has('tech_stack')">
                    <x-input wire:model="tech_stack" placeholder="e.g. Laravel, WhatsApp Cloud API, MySQL, Tailwind CSS" required />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->first('tech_stack') }}</x-input.error-message>
            </div>

            <!-- Project URL -->
            <div>
                <x-input.label>Live Demo / Project URL (Optional)</x-input.label>
                <x-input.wrapper :valid="!$errors->has('project_url')">
                    <x-input wire:model="project_url" placeholder="https://example.com" />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->first('project_url') }}</x-input.error-message>
            </div>

            <!-- Is Published -->
            <div class="flex items-center pt-6">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" wire:model="is_published" class="sr-only peer">
                    <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-emerald-600"></div>
                    <span class="ms-3 text-sm font-medium text-gray-900">Publish Immediately on Website</span>
                </label>
            </div>

            <!-- Logo Upload -->
            <div class="col-span-2">
                <x-input.label>Client / Brand Logo</x-input.label>

                <div class="border-2 border-dashed border-gray-300 rounded-xl p-4 flex flex-col items-center justify-center bg-gray-50 hover:bg-gray-100 transition cursor-pointer">
                    <x-input type="file" wire:model="client_logo" accept="image/*" class="hidden" id="portfolioLogoInput" />

                    <label for="portfolioLogoInput" class="flex flex-col items-center cursor-pointer">
                        <span class="text-gray-600 mb-2 font-medium">Click to upload logo PNG / JPG / SVG</span>
                        <div class="w-16 h-16 flex items-center justify-center rounded-full bg-white shadow-sm border border-gray-200">
                            <i class="fa-solid fa-cloud-arrow-up text-emerald-600 text-xl"></i>
                        </div>
                    </label>

                    @if ($client_logo)
                        <div class="mt-4 flex flex-col items-center">
                            <p class="text-xs text-emerald-700 font-semibold mb-2">Selected Preview:</p>
                            <img src="{{ $client_logo->temporaryUrl() }}"
                                class="h-16 w-auto max-w-[200px] object-contain p-2 rounded-lg shadow-sm bg-white border border-gray-200">
                        </div>
                    @endif
                </div>

                <x-input.error-message>
                    {{ $errors->has('client_logo') ? $errors->first('client_logo') : '' }}
                </x-input.error-message>
            </div>

        </x-grid>

        <x-slot name="footer">
            <x-button wire:click="createPortfolio" :loadingIndicator="true" wire:target="createPortfolio" class="px-6 py-2">
                Save &amp; Publish Case Study
            </x-button>
        </x-slot>
    </x-modal>
</div>
