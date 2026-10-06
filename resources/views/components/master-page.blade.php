@props([
    'title' => 'Best Bulk SMS Service Provider in India | Textora SMS',
    'description' => 'Textora SMS provides Bulk SMS, WhatsApp Business API, Bulk WhatsApp, RCS Messaging, Voice SMS, SMS API, Email Marketing, Website Development and Software Development services across India.',
    'noindex' => false

])
@php
    if (!function_exists('activeNav')) {
        function activeNav($path)
        {
            return Request::path() === $path
                ? 'text-green-700 font-semibold'
                : 'text-gray-700';
        }
    }
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-site-verification" content="XxRaKXlJ2msBDv_Unc_2jehpEwuiVZAUiIKQ5O_KV6M" />
    <meta name="description" content="{{ $description }}">
    <title>{{ $title }}</title>
    @livewireStyles
    <meta name="csrf-token" content="{{ csrf_token() }}">
   @if($noindex)
    <meta name="robots" content="noindex,nofollow,noarchive">
@endif
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    <!-- Standard favicon -->
    <link rel="icon" href="/images/favicon-48x48.png" sizes="48x48" type="image/png">

    <!-- High resolution -->
    <link rel="icon" href="/images/android-chrome-96x96.png" sizes="96x96" type="image/png">

    <!-- Apple devices -->
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">

    <!-- Legacy support -->
    <link rel="shortcut icon" href="/images/favicon.ico">


    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flowbite CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.css" rel="stylesheet" />

<!-- Flowbite JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.js"></script>
    {{-- Twitter Cards --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="{{ URL::asset('images/meta-tag-image.png') }}">
    {{-- Og tags --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:image" content="{{ URL::asset('images/meta-tag-image.png') }}">

    {{-- Canonical Tag --}}
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}?v=23">
    <link rel="stylesheet" href="{{ URL::asset('css/media.css') }}?v=24">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- AOS animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N76W5TV0XE"></script>
 {{--SEO tracking script  --}}
<script src="https://analytics.ahrefs.com/analytics.js" data-key="HZVhsmMj8E9Z2MuWHoyHRw" async></script>
 
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-N76W5TV0XE');
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WGK5KLN8');
    </script>
    <!-- End Google Tag Manager -->


    @stack('head-scripts')
   

</head>

<body>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGK5KLN8" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    {{-- header --}}
    @php
        $isAdmin = $isAdmin ?? false;
    @endphp

    <header class="bg-white shadow-md fixed w-full top-0 z-30">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="text-2xl font-extrabold text-[#049a3d] tracking-wider font-poppins">
                <img src="{{ URL::asset('/images/textorasms-svg-logo.svg') }}"
     alt="Textora SMS Logo"
     class="w-[180px]">
            </a>
            <!-- Desktop Menu -->
            <div class="hidden lg:flex space-x-6 items-center">
                <a href="{{ url('/') }}"
                    class="{{ Request::path() === '/' || Request::path() === '' ? 'text-green-700 font-semibold' : 'text-gray-600' }} text-gray-600 hover:text-[#049a3d] duration-300">Home</a>
                <a href="{{ url('about-us') }}"
                    class="{{ activeNav('about-us') }} text-gray-600 hover:text-[#049a3d] duration-300">About</a>
                <!-- Services Dropdown -->
                <div class="relative group">
                    <button class="text-gray-600 hover:text-[#049a3d] duration-300 flex items-center gap-1">
                        Services <i class="fa fa-angle-down"></i>
                    </button>
                    <div class="absolute left-0 hidden group-hover:block bg-white shadow-lg rounded-md py-2 w-72 z-40">
                        <a href="{{ url('/whatsapp-business-api') }}"
                            class="{{ activeNav('whatsapp-business-api') }} block px-4 py-2 hover:bg-gray-100 hover:text-[#049a3d]">
                            WhatsApp Business API
                        </a>
                        <a href="{{ url('/bulk-whatsapp') }}"
                            class="{{ activeNav('bulk-whatsapp') }} block px-4 py-2 hover:bg-gray-100 hover:text-[#049a3d]">
                            Bulk WhatsApp
                        </a>
                        <a href="{{ url('/bulk-sms') }}"
                            class="{{ activeNav('bulk-sms') }} block px-4 py-2 hover:bg-gray-100 hover:text-[#049a3d]">
                            Bulk SMS
                        </a>
                        <a href="{{ url('/rcs-messaging') }}"
                            class="{{ activeNav('rcs-messaging') }} block px-4 py-2 hover:bg-gray-100 hover:text-[#049a3d]">
                            RCS Messaging
                        </a>
                        <a href="{{ url('/voice-call') }}"
                            class="{{ activeNav('voice-call') }} block px-4 py-2 hover:bg-gray-100 hover:text-[#049a3d]">
                            Voice Call
                        </a>
                        <a href="{{ url('/sms-api') }}"
                            class="{{ activeNav('sms-api') }} block px-4 py-2 hover:bg-gray-100 hover:text-[#049a3d]">
                            SMS API
                        </a>
                        <a href="{{ url('/email-marketing') }}"
    class="{{ activeNav('email-marketing') }} block px-4 py-2 hover:bg-gray-100 hover:text-[#049a3d]">
    Email Marketing
</a>
<a href="{{ url('/website-development') }}"
class="{{ activeNav('website-development') }} block px-4 py-2 hover:bg-gray-100 hover:text-[#049a3d]">
    Website Development
</a>
                        <a href="{{ url('/reseller') }}"
                            class="{{ activeNav('reseller') }} block px-4 py-2 hover:bg-gray-100 hover:text-[#049a3d]">
                            Reseller
                        </a>
                    </div>
                </div>
                <a href="{{ url('pricing-web') }}"
                    class="{{ activeNav('pricing-web') }} text-gray-600 hover:text-[#049a3d] duration-300">Pricing</a>
                <a href="{{ url('contact-us') }}"
                    class="{{ activeNav('contact-us') }} text-gray-600 hover:text-[#049a3d] duration-300">Contact
                    Us</a>
                <a href="{{ url('blog_list') }}"
                    class="{{ activeNav('blog_list') }} text-gray-600 hover:text-[#049a3d] duration-300">Blogs</a>
                @if (Auth::guard('web')->user())
                    <a href="{{ url('/dashboard') }}"
                        class="flex items-center gap-2 bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white px-4 py-2 rounded-full shadow-md">
                        <i class="fa fa-user text-white text-lg"></i>
                        <span>{{ Auth::guard('web')->user()->name }}</span>
                    </a>
                @else
                    {{-- <a href="https://app.textorasms.com/" target="_blank" rel="noopener"
                        class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white px-4 py-2 rounded-lg shadow-md inline-block">Login</a>
                    --}}
                    <div class="relative inline-block group">
                        <!-- Main Button -->
                        <a href="javascript:void(0)" class="flex items-center gap-2 bg-gradient-to-r from-[#1d8b41] to-[#4eb86a]
                                                      text-white px-4 py-2 rounded-lg shadow-md">
                            Login
                            <!-- Dropdown Icon -->
                            <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>

                        <!-- Dropdown -->
                        <div class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-lg
                                                       opacity-0 invisible group-hover:opacity-100 group-hover:visible
                                                       transition-all duration-300 z-50">

                            <a href="https://app.textorasms.com/" target="_blank" rel="noopener"
                                class="block px-4 py-3 text-gray-700 hover:bg-green-50 hover:text-[#1d8b41] rounded-t-lg">
                                Login
                            </a>

                            <a href="http://Wa.textorasms.com" target="_blank" rel="noopener"
                                class="block px-4 py-3 text-gray-700 hover:bg-green-50 hover:text-[#1d8b41] rounded-b-lg">
                                Bulk WhatsApp Login
                            </a>
                        </div>
                    </div>
                @endif
            </div>
            <!-- Mobile Hamburger -->
            <button onclick="toggleSidebar()" class="lg:hidden text-3xl text-gray-700">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
        </nav>
    </header>
    <!-- Mobile Sidebar -->
    <div id="mobileMenu"
        class="fixed top-0 right-0 h-full w-72 bg-white shadow-xl transform translate-x-full transition-transform duration-300 z-50">
        <div class="flex justify-between items-center p-4 border-b">
            <h3 class="text-lg font-semibold">Menu</h3>
            <button onclick="toggleSidebar()" class="text-2xl"><i class="fa fa-times"></i></button>
        </div>
        <ul class="p-4 space-y-4 text-gray-700">
            <li><a href="{{ url('/') }}"
                    class="block {{ Request::path() === '/' || Request::path() === '' ? 'text-green-700 font-semibold' : 'text-gray-600' }}">Home</a>
            </li>
            <li><a href="{{ url('about-us') }}" class="block {{ activeNav('about-us') }}">About</a></li>
            <li>
                <details class="group">
                    <summary class="cursor-pointer py-2">Services</summary>
                    <div class="ml-4 space-y-2">
                        <a href="{{ url('/whatsapp-business-api') }}" class="block">WhatsApp Business API</a>
                        <a href="{{ url('/bulk-whatsapp') }}" class="block">Bulk WhatsApp</a>
                        <a href="{{ url('/bulk-sms') }}" class="block">Bulk SMS</a>
                        <a href="{{ url('/rcs-messaging') }}" class="block">RCS Messaging</a>
                        <a href="{{ url('/voice-call') }}" class="block">Voice Call</a>
                        <a href="{{ url('/sms-api') }}" class="block">SMS API</a>
                        <a href="{{ url('/email-marketing') }}" class="block">Email Marketing</a>
                        <a href="{{ url('/website-development') }}" class="block">Website Development</a>
                        <a href="{{ url('/reseller') }}" class="block">Reseller</a>
                    </div>
                </details>
            </li>
            <li><a href="{{ url('pricing-web') }}" class="{{ activeNav('pricing-web') }} block">Pricing</a></li>
            <li><a href="{{ url('contact-us') }}" class="{{ activeNav('contact-us') }} block">Contact Us</a></li>
            <li><a href="{{ url('blog_list') }}" class="{{ activeNav('blog_list') }} block">Blogs</a></li>
            <li class="pt-4">
                @if (Auth::guard('web')->user())
                    <a href="{{ url('/dashboard') }}"
                        class="bg-green-600 text-white px-4 py-2 block text-center rounded-md">
                        {{ Auth::guard('web')->user()->name }}
                    </a>
                @else
                    {{-- <a href="https://app.textorasms.com/" target="_blank"
                        class="bg-green-600 text-white px-4 py-2 w-fit rounded-md block text-center">Login</a> --}}
                    <div class="relative inline-block group">
                        <!-- Main Button -->
                        <a href="javascript:void(0)" class="flex items-center gap-2 bg-gradient-to-r from-[#1d8b41] to-[#4eb86a]
                                                      text-white px-4 py-2 rounded-lg shadow-md">
                            Login
                            <!-- Dropdown Icon -->
                            <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>

                        <!-- Dropdown -->
                        <div class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-lg
                                                       opacity-0 invisible group-hover:opacity-100 group-hover:visible
                                                       transition-all duration-300 z-50">

                            <a href="https://app.textorasms.com/" target="_blank" rel="noopener"
                                class="block px-4 py-3 text-gray-700 hover:bg-green-50 hover:text-[#1d8b41] rounded-t-lg">
                                Login
                            </a>

                            <a href="http://Wa.textorasms.com" target="_blank" rel="noopener"
                                class="block px-4 py-3 text-gray-700 hover:bg-green-50 hover:text-[#1d8b41] rounded-b-lg">
                                Bulk WhatsApp Login
                            </a>
                        </div>
                    </div>
                @endif
            </li>
        </ul>
    </div>
    {{ $slot }}


{{-- Bottom to Top Button --}}
<a id="button" class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white"></a>

{{-- Old WhatsApp Button (Disabled) --}}

<a href="https://wa.me/919187054466?text=Hello%20Textora%20Team"
   target="_blank"
   class="wa-fixed-btn bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white rounded-full">
    <i class="fa-brands fa-whatsapp"></i>
</a>

    <!-- Login Modal Overlay -->
    <div id="loginModal"
        class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center p-4 {{ $isAdmin ? '' : 'hidden' }} z-50">
        <!-- Modal Box -->
        <div class="w-full max-w-md bg-white rounded-xl shadow-2xl relative">
            <div class="login-card-bg md:p-8 p-4 rounded-xl">
                <!-- Close Button -->
                <button id="close-login-modal" onclick="closeModal()"
                    class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-2xl font-bold">
                    &times;
                </button>
                <div class="text-center mb-2">
                    <h2 class="md:text-3xl text-xl font-bold text-gray-900 mt-3" id="form-title">Start Sending Bulk
                        Messages</h2>
                    {{-- <p class="text-sm text-gray-500 mt-1">Scale your campaigns efficiently.</p> --}}
                </div>
                <h3 class="text-green-700 text-center text-2xl font-semibold mb-5">Admin Login</h3>
                <form method="POST" action="{{ route('login') }}" id="login-form" class="form-container space-y-4">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                            autocomplete="username"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-400 focus:border-green-500 @error('email') @enderror">
                        @error('email')
                            <p class="mt-1 text-sm text-green-700">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" required autocomplete="current-password"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-400 focus:border-green-500 @error('password') @enderror">
                        @error('password')
                            <p class="mt-1 text-sm text-green-700">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <label for="remember_me" class="flex items-center">
                            <input id="remember_me" type="checkbox" name="remember"
                                class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-gray-400">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-sm font-medium text-[#08963d] hover:text-green-800">
                                {{ __('Forgot password?') }}
                            </a>
                        @endif
                    </div>
                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full py-2 px-4 rounded-md text-white bg-green-600 hover:bg-[#076028] shadow-md transition duration-300">
                        {{ __('Log in') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- book a demo or contact Modal -->
    <div id="connectModal"
        class="fixed inset-0 bg-black/40 backdrop-blur-sm hidden items-center justify-center z-50 px-4">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl md:p-8 p-4 relative animate-fadeIn">
            <!-- Close button -->
            <button id="close-connect-modal" onclick="closeModall()"
                class="absolute top-3 right-3 text-gray-500 hover:text-black text-xl">
                ✕
            </button>
            <!-- Title -->
            <h2 class="md:text-3xl text-xl font-bold text-gray-900 mb-6">
                Book A Free Demo
            </h2>
            <!-- Form -->
            <form method="POST" action="{{ url('enquiry-web') }}" id="demo-form" class="space-y-4"
                onsubmit="return validateDemoForm()">
                @csrf
                <input type="hidden" name="isFormType" value="Demo">
                <div>
                    <input type="text" id="name" name="name" placeholder="Enter Name" required minlength="2"
                        maxlength="50"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-1 focus:ring-gray-600 focus:outline-none">
                </div>
                <div>
                    <input type="email" id="email" name="email" placeholder="Enter Email" required
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-1 focus:ring-gray-600 focus:outline-none">
                </div>
                <div>
                    <input type="tel" id="contact" name="contact" placeholder="Enter Phone Number" required
                        minlength="10" maxlength="15" pattern="[0-9]{10,15}"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-1 focus:ring-gray-600 focus:outline-none">
                </div>
                <div>
                    <input type="text" id="company_name" name="company_name" placeholder="Enter Company Name" required
                        minlength="2" maxlength="100"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-1 focus:ring-gray-600 focus:outline-none">
                </div>
                <div>
                    <select id="requirement" name="requirement" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-1 focus:ring-gray-600 outline-none bg-white"
                        onchange="toggleOtherService()">
                        <option value="" selected disabled>Select Requirement</option>
                        <option value="WhatsApp API">WhatsApp API</option>
                        <option value="Bulk SMS">Bulk SMS</option>
                        <option value="Bulk WhatsApp">Bulk WhatsApp</option>
                        <option value="Voice Call">Voice Call</option>
                        <option value="Chatbot">Chatbot</option>
                        <option value="Reseller">Reseller</option>
                        <option value="SMS API">SMS API</option>
                        <option value="OTP API">OTP API</option>
                        <option value="Email Marketing">Email Marketing</option>
                        <option value="website Development">website Development</option>
                        <option value="Other Services">Other Services</option>
                    </select>
                </div>
                <!-- Hidden additional field -->
                <div id="otherServiceBox" class="hidden">
                    <input type="text" id="other_service" name="other_service"
                        placeholder="Please Enter Your Other Service Requirement" minlength="2" maxlength="150"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-1 focus:ring-gray-600 focus:outline-none">
                </div>
                <div>
                    <textarea id="message" name="message" rows="3" placeholder="Write your message" required
                        minlength="10"
                        class="w-full mt-1 p-3 border border-gray-300 rounded-xl focus:ring-1 focus:ring-gray-600 focus:outline-none"></textarea>
                </div>
                <button type="submit"
                    class="w-full py-3 bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white rounded-xl font-medium shadow-md hover:bg-green-700 transition">
                    Submit
                </button>
            </form>
        </div>
    </div>

    @if (session('success'))
        <div id="laravelSuccessModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-lg shadow-xl max-w-md w-full mx-4 p-6 relative">
                <!-- Close Button -->
                <button onclick="document.getElementById('laravelSuccessModal').style.display='none'"
                    class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <!-- Header -->
                <div class="text-center mb-4">
                    <div class="text-green-500 text-6xl mb-2">✓</div>
                    <h5 class="text-xl font-bold text-green-600">Success!</h5>
                </div>

                <!-- Body -->
                <div class="text-center py-4">
                    <p class="text-gray-700 mb-0">{{ session('success') }}</p>
                </div>

                <!-- Footer -->
                <div class="flex justify-center">
                    <button onclick="document.getElementById('laravelSuccessModal').style.display='none'"
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-6 rounded">Close</button>
                </div>
            </div>
        </div>
    @endif
    <!-- Footer -->
    <footer class="bg-[#222] text-white footer-bg-img">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="grid md:grid-cols-3 grid-cols-1 lg:grid-cols-4 gap-8">
                <div class="col-span-2 md:col-span-1">
                    <img src="{{ URL::asset('images/textorasms-svg-white-logo.svg') }}" alt="Textora SMS Logo"
                        class="lg:w-[200px] w-[150px]">
                        <p class="text-gray-300 text-sm leading-6 max-w-sm"> Textora SMS is a trusted business communication and digital solutions partner, helping businesses connect, engage, and grow through WhatsApp, SMS, RCS, Voice, Email Marketing, Website Development, and custom technology solutions. </p>
                </div>
                <div class="md:ps-8 md:col-span-1">
                    <h4 class="font-semibold text-white mb-3 text-xl">Our Services</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ url('/whatsapp-business-api') }}"
                                class="text-gray-300 hover:text-white">WhatsApp Business
                                API</a></li>
                        <li><a href="{{ url('/bulk-whatsapp') }}" class="text-gray-300 hover:text-white"> Bulk
                                WhatsApp</a></li>
                        <li><a href="{{ url('/bulk-sms') }}" class="text-gray-300 hover:text-white"> Bulk SMS</a>
                        </li>
                        <li><a href="{{ url('/rcs-messaging') }}" class="text-gray-300 hover:text-white"> RCS
                                Messaging</a></li>
                        <li><a href="{{ url('/voice-call') }}" class="text-gray-300 hover:text-white"> Voice Call</a>
                        </li>
                        <li><a href="{{ url('/sms-api') }}" class="text-gray-300 hover:text-white">SMS API</a></li>
                        <li>
    <a href="{{ url('/email-marketing') }}" class="text-gray-300 hover:text-white">
        Email Marketing
    </a>
</li>
        
        <li>
    <a href="{{ url('/website-development') }}"
       class="text-gray-300 hover:text-white">
       Website Development
    </a>
</li>                <li><a href="{{ url('/reseller') }}" class="text-gray-300 hover:text-white">Reseller</a></li>
                    </ul>
                </div>
              <div>
    <h4 class="font-semibold text-white mb-3 text-xl">Quick Links</h4>

    <ul class="space-y-2 text-sm">

        <li>
            <a href="{{ url('term-and-Conditions') }}"
               class="text-gray-300 hover:text-white transition duration-300">
                Terms & Conditions
            </a>
        </li>

        <li>
            <a href="{{ url('privacy-policy') }}"
               class="text-gray-300 hover:text-white transition duration-300">
                Privacy Policy
            </a>
        </li>

        <li>
            <a href="{{ url('refund_policy') }}"
               class="text-gray-300 hover:text-white transition duration-300">
                Refund Policy
            </a>
        </li>

        <li>
            <a href="{{ url('/whatsapp-link-generator') }}"
               class="text-gray-300 hover:text-white transition duration-300">
                WhatsApp Link Generator
            </a>
        </li>

        <li>
            <a href="#"
               onclick="openModal()"
               id="footer-login-link"
               class="text-gray-300 hover:text-white transition duration-300">
                Login
            </a>
        </li>

    </ul>

    <h4 class="font-semibold text-white mb-3 text-xl mt-5">
        Follow Us
    </h4>

    <div class="flex space-x-4">
        <a href="https://www.facebook.com/profile.php?id=61584312038555"
           target="_blank"
           class="text-white w-7 h-7 p-2 flex items-center border border-white justify-center rounded-full bg-[#3b5998] hover:bg-[#2d4373] transition duration-300">
            <i class="fab fa-facebook-f fa-md"></i>
        </a>

        <a href="https://www.instagram.com/textoratech/"
           target="_blank"
           class="text-white w-7 h-7 p-2 flex items-center border border-white justify-center rounded-full bg-gradient-to-r from-[#feda75] via-[#d62976] to-[#4f5bd5] transition duration-300">
            <i class="fab fa-instagram fa-md"></i>
        </a>

        <a href="https://www.linkedin.com/company/textora-technologies-pvt-ltd/"
           target="_blank"
           class="text-white w-7 h-7 p-2 flex items-center border border-white justify-center rounded-full bg-[#1c6dc2] hover:bg-[#0a5eb6] transition duration-300">
            <i class="fab fa-linkedin-in fa-md"></i>
        </a>
    </div>
</div>
                <div class="col-span-1 md:col-span-1">
                    <h4 class="font-semibold text-white mb-3 text-xl">Let's Connect</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="https://maps.app.goo.gl/YZ6g564PG73fUGuq7" target="_blank"
                                class="text-gray-300 hover:text-white"><i
                                    class="fas fa-map-marker-alt text-white pe-3"></i> 5a, 1A Cross Rd, Dollar Scheme
                                Colony, 1st Stage, BTM 1st Stage, Bengaluru, Karnataka 560068</a></li>
                        <li><a href="tel:9187054466" class="text-gray-300 hover:text-white"><i
                                    class="fas fa-phone text-white pe-3"></i> +91 9187054466</a></li>
                        <li><a href="mailto:support@textorasms.com" class="text-gray-300 hover:text-white"
                                target="_blank"><i class="fas fa-envelope text-white pe-3"></i>
                                support@textorasms.com</a></li>
                    </ul>
                </div>
            </div>
            <div
                class="mt-10 pt-6 border-t border-gray-700 text-sm text-white md:flex md:justify-between grid justify-center">
                <p> &copy; {{ date('Y') }} Textora Technologies Pvt. Ltd. | All rights reserved.</p>
                <a href="https://textorasms.com/" target="_blank" class="flex">Designed & Developed by - <img
                        src="{{ URL::asset('images/textoratech2-logo.png') }}" alt="textorasmslogo" class="h-6 ps-3"></a>
            </div>
        </div>
    </footer>
@include('components.ai-chat')
@livewireScripts

    <script>
        // login modal script
        function openModal() {
            document.getElementById("loginModal").classList.remove("hidden");
        }

        function closeModal() {
            document.getElementById("loginModal").classList.add("hidden");
        }
        // cotact for service modal
        function openModall() {
            const modal = document.getElementById("connectModal");
            modal.classList.remove("hidden");
            modal.classList.add("flex");
        }

        function closeModall() {
            const modal = document.getElementById("connectModal");
            modal.classList.add("hidden");
            modal.classList.remove("flex");
        }
        // Demo form validation
        function validateDemoForm(event) {
            const form = document.getElementById('demo-form');
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                alert('Please fill in all fields correctly. Check for required fields, lengths, and formats.');
                form.reportValidity(); // This will show browser's native validation messages
                return false;
            }
            return true;
        }
        AOS.init();
        // Back to top
        var btn = $("#button");
        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass("show");
            } else {
                btn.removeClass("show");
            }
        });
        btn.on("click", function (e) {
            e.preventDefault();
            $("html, body").animate({
                scrollTop: 0
            }, "300");
        });
        // Close on click
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('toast-close')) {
                const toast = e.target.closest('.toast');
                hideToast(toast);
            }
        });
        // Check for success message on page load
        @if (session('success'))
            showToast('{{ session('success') }}');
        @endif
    </script>
    <script>
            function toggleSidebar() {
                const menu = document.getElementById("mobileMenu");
                menu.classList.toggle("translate-x-full");
            }

        function toggleOtherService() {
            let dropdown = document.getElementById("requirement");
            let box = document.getElementById("otherServiceBox");
            let input = document.getElementById("other_service");
            if (dropdown.value === "Other Services") {
                box.classList.remove("hidden");
                input.setAttribute("required", true);
            } else {
                box.classList.add("hidden");
                input.removeAttribute("required");
                input.value = "";
            }
        }
    </script>
    @stack('scripts')
</body>
  
</html>