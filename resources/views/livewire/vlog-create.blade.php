<div>
    <x-modal id="create-vlog-modal" width="3xl">
        <x-slot name="heading">
            <span class="text-lg font-semibold text-gray-800">Create New Vlog</span>
        </x-slot>

        <x-grid default="2" class="gap-6">

            <!-- Image Upload -->
            <div class="col-span-2">
                <x-input.label :required="true">Upload Image</x-input.label>

                <div
                    class="border-2 border-dashed border-gray-300 rounded-xl p-4 flex flex-col items-center justify-center bg-gray-50 hover:bg-gray-100 transition cursor-pointer">
                    <x-input type="file" wire:model="image" accept="image/*" class="hidden" id="vlogImage" />

                    <label for="vlogImage" class="flex flex-col items-center cursor-pointer">
                        <span class="text-gray-600 mb-2">Click to upload</span>
                        <div class="w-20 h-20 flex items-center justify-center rounded-full bg-white shadow-sm border">
                            <i class="fa-solid fa-upload text-gray-500"></i>
                        </div>
                    </label>

                    @if ($image)
                        <div class="mt-4 flex justify-center">
                            <img src="{{ $image->temporaryUrl() }}"
                                class="w-[500px] h-[500px] rounded-xl shadow-md object-cover border-2 border-gray-200">
                        </div>
                    @endif

                </div>

                <x-input.error-message>
                    {{ $errors->has('image') ? $errors->first('image') : '' }}
                </x-input.error-message>
            </div>

            <!-- Date -->
            <div>
                <x-input.label :required="true">Date</x-input.label>
                <x-input.wrapper :valid="!$errors->has('date')">
                    <x-input type="date" wire:model="date" required />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->first('date') }}</x-input.error-message>
            </div>

            <!-- Title -->
            <div>
                <x-input.label :required="true">Title</x-input.label>
                <x-input.wrapper :valid="!$errors->has('title')">
                    <x-input wire:model="title" placeholder="Enter vlog title" required />
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->first('title') }}</x-input.error-message>
            </div>

            <!-- Description -->
            <div class="col-span-2">
                <x-input.label :required="true">Description</x-input.label>
                <x-input.wrapper :valid="!$errors->has('description')">
                    <textarea wire:model="description" rows="5"
                        class="w-full border rounded-lg p-3 focus:ring focus:ring-green-200 outline-none"
                        placeholder="Write your vlog description here..."></textarea>
                </x-input.wrapper>
                <x-input.error-message>{{ $errors->first('description') }}</x-input.error-message>
            </div>

            <!-- Publish Status -->
            <div class="col-span-2 flex items-center gap-3 p-3 bg-gray-50 border border-gray-200 rounded-lg">
                <input type="checkbox" id="vlogPublish" wire:model="is_published"
                    class="w-5 h-5 text-green-600 rounded focus:ring-green-500 cursor-pointer">
                <label for="vlogPublish" class="text-sm font-medium text-gray-800 cursor-pointer select-none">
                    Publish immediately (make visible on customer-facing Blog List)
                </label>
            </div>

        </x-grid>

        <x-slot name="footer">
            <x-button wire:click="createVlog" :loadingIndicator="true" wire:target="createVlog" class="px-6 py-2">
                Create Vlog
            </x-button>
        </x-slot>
    </x-modal>
</div>
