<x-app-layout title="Enquiry" :breadcrumbs="['Enquiry']">
    <div x-data="{ activeTab: 'enquiries' }" class="space-y-4">
        <div class="inline-flex rounded-xl bg-white p-1.5 shadow-sm border border-gray-200 gap-1">
            <button type="button"
                @click="activeTab = 'enquiries'"
                :style="activeTab === 'enquiries'
                    ? 'background-color: #059669; color: #ffffff;'
                    : 'background-color: transparent; color: #374151;'"
                class="px-4 py-2 text-sm font-semibold rounded-lg transition flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-envelope-open-text text-xs"></i>
                <span>All Enquiries</span>
            </button>

            <button type="button"
                @click="activeTab = 'blocked'"
                :style="activeTab === 'blocked'
                    ? 'background-color: #dc2626; color: #ffffff;'
                    : 'background-color: transparent; color: #374151;'"
                class="px-4 py-2 text-sm font-semibold rounded-lg transition flex items-center gap-2 cursor-pointer">
                <i class="fa-solid fa-ban text-xs"></i>
                <span>Blocked Users</span>
            </button>
        </div>

        <div x-show="activeTab === 'enquiries'" x-cloak>
            @livewire('enquiry-table')
        </div>

        <div x-show="activeTab === 'blocked'" x-cloak>
            @livewire('blocked-enquiry-users-table')
        </div>
    </div>
</x-app-layout>
