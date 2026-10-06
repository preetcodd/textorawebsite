<x-app-layout title="Profile" :breadcrumbs="['Profile']">
    <div class="p-4 sm:p-4 mb-4">
        <div class="max-w-xl">
            @include('profile.partials.update-profile-information-form')
        </div>
    </div>
    <hr class="dark:border-gray-700 border-2 border-gray-100">
    <div class="p-4 sm:p-4 mt-4">
        <div class="max-w-xl">
            @include('profile.partials.update-password-form')
        </div>
    </div>
</x-app-layout>
