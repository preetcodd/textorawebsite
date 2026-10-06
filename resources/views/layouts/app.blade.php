<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} | {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome-all.min.css') }}">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <!-- Scripts -->
    @vite('resources/css/app.css')
    @filamentStyles

    {{-- Change theme by linking theme file (optional) --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/theme/teal.css') }}"> --}}
</head>

<body class="font-sans antialiased relative">

    <nav class="fixed top-0 z-30 w-full bg-white border-b border-gray-200">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                        <span class="sr-only">Open sidebar</span>
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>

                    <a href="{{ url('dashboard') }}" class="flex ms-2 md:me-24">
                        <x-application-logo class="w-10 h-10 fill-current text-gray-500 mr-3" />

                        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap w-48 h-10">
                            <img src="images/textota-logo.png" class="h-full" alt="">
                        </span>
                    </a>
                </div>

                <div class="flex items-center">
                    <div class="flex items-center gap-3 ms-3">
                        <a href="https://app.textorasms.com/"
                           target="_blank" rel="noopener"
                           style="color: #fff; background-color: #7367f0;"
                           class="flex items-center gap-2 px-4 py-2 rounded-full font-medium transition duration-300 shadow-md">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                            </svg>
                            <span>Service Dashboard</span>
                        </a>
                        <a href="{{ url('/') }}"
                           class="flex items-center gap-2 bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white px-4 py-2 rounded-full font-medium hover:from-[#166e35] hover:to-[#3da557] transition duration-300 shadow-md">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                            </svg>
                            <span>Website</span>
                        </a>

                        {{-- Dark Mode Toggle Removed --}}

                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                     src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&color=FFFFFF&background=09090b"
                                     alt="user photo">
                            </button>
                        </div>

                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow max-w-48"
                            id="dropdown-user">
                            <div class="px-4 py-3">
                                <p class="text-sm text-gray-900">{{ auth()->user()->name }}</p>
                                <p class="text-sm font-medium text-gray-900 truncate">{{ auth()->user()->email }}</p>
                            </div>

                            <ul class="py-1">
                                <li>
                                    <a href="{{ route('profile.edit') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                                </li>

                                <li>
                                    <form class="min-w-full" action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-start">
                                            Sign out
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </nav>

    <x-aside.side-nav />

    <div class="p-4 sm:ml-64 bg-slate-50 min-h-screen">
        <div class="mt-16" x-data="{ show: false }">
            <x-breadcrumbs :breadcrumbs="$breadcrumbs" />
            {{ $slot }}
        </div>
    </div>

    @filamentScripts
    @vite('resources/js/app.js')
</body>

<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

<script>
    // ⭐ ALWAYS FORCE LIGHT MODE ⭐
    document.documentElement.classList.remove('dark');
    localStorage.setItem('color-theme', 'light');

    // Keep your Livewire refresh listener
    window.addEventListener('refreshTable', () => {
        Livewire.emit('refreshTable');
    });
</script>

</html>
