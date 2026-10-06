<x-app-layout title="Dashboard" :breadcrumbs="[]">
    {{-- <x-card class="hidden">
        {{ __("You're logged in!") }}
        <div style="text-align: center">
            <img src="{{ asset('images/logo/Primary_logo_100.jpg') }}" alt="Primary Logo" height="50" width="150">
        </div>
    </x-card> --}}


   <header class="bg-white shadow-sm sticky top-0 z-10">
        <div class="px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            
            <!-- Logo and User Status Group -->
            <div class="flex items-center space-x-4 justify-between w-full">
                <!-- Primary Logo Placeholder -->
                <div class="flex items-center">
                    <!-- A stylized logo text for a modern look -->
                    <img src="images/textota-logo.png" class="w-48 h-10" alt="Real-time bulk SMS delivery reports dashboard
">
                </div>
                
                <!-- Login Status as a subtle badge/pill -->
                <span class="sm:inline-block bg-green-100 text-green-800 text-xs font-medium px-3 py-1 rounded-full">
                    You're logged in!
                </span>
            </div>
            
            <!-- Profile/Action Area Placeholder -->
            <div>
                <!-- Retaining a simple placeholder for potential future additions -->
                <div class="h-6 w-6"></div>
            </div>
        </div>
    </header>

    <!-- MAIN DASHBOARD CONTENT -->
    <main class="px-4 sm:px-6 lg:px-8 py-8">
        
        <h1 class="text-3xl font-extrabold text-gray-900 mb-6 mt-5">Dashboard Overview</h1>

        <!-- 
            METRIC CARDS SECTION 
            Uses a responsive grid: 1 column on small screens, 3 columns on larger screens.
        -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">

            <!-- Card Template (Metric 1) -->
            <div class="bg-card-bg p-6 rounded-2xl bg-white shadow-xl border border-gray-100 transition duration-300 hover:shadow-2xl hover:scale-[1.02]">
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Total Views</p>
                <h2 class="text-6xl font-extrabold text-gray-900 leading-tight">100</h2>
                <p class="text-sm text-green-500 font-medium mt-2">+5% since last week</p>
            </div>

            <!-- Card Template (Metric 2) -->
            <div class="bg-card-bg p-6 rounded-2xl bg-white shadow-xl border border-gray-100 transition duration-300 hover:shadow-2xl hover:scale-[1.02]">
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">New Users</p>
                <h2 class="text-6xl font-extrabold text-gray-900 leading-tight">100</h2>
                <p class="text-sm text-primary-500 font-medium mt-2">Target reached</p>
            </div>

            <!-- Card Template (Metric 3) -->
            <div class="bg-card-bg p-6 rounded-2xl bg-white shadow-xl border border-gray-100 transition duration-300 hover:shadow-2xl hover:scale-[1.02]">
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Open Tasks</p>
                <h2 class="text-6xl font-extrabold text-gray-900 leading-tight">100</h2>
                <p class="text-sm text-red-500 font-medium mt-2">Needs attention</p>
            </div>

        </div>

    </main>
</x-app-layout>