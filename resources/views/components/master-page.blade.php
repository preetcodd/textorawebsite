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



    <!-- Google Fonts: Plus Jakarta Sans & Inter -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">



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

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}?v=26">

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



    <header class="bg-white/95 backdrop-blur-md border-b border-slate-100 shadow-sm fixed w-full top-0 z-40 transition-all duration-300">

        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2.5 sm:py-3.5 flex flex-row flex-nowrap justify-between items-center">

            <!-- Logo -->

            <a href="{{ url('/') }}" class="logo-link flex items-center flex-shrink-0 !w-auto">

                <img src="{{ URL::asset('/images/textorasms-svg-logo.svg') }}"

                     alt="Textora SMS Logo"

                     class="w-[140px] sm:w-[175px] h-auto object-contain">

            </a>

            <!-- Desktop Menu -->

            <div class="hidden lg:flex space-x-7 items-center">

                <a href="{{ url('/') }}"

                    class="{{ Request::path() === '/' || Request::path() === '' ? 'text-[#049a3d] font-bold' : 'text-slate-700' }} hover:text-[#049a3d] font-medium transition duration-200 text-sm">Home</a>

                <a href="{{ url('about-us') }}"

                    class="{{ activeNav('about-us') }} hover:text-[#049a3d] font-medium transition duration-200 text-sm">About</a>

                <!-- Services Dropdown (Curated 2-Column Mega Menu) -->

                <div class="relative group">

                    <button class="text-slate-700 group-hover:text-[#049a3d] font-medium transition duration-200 flex items-center gap-1.5 py-2 text-sm">

                        <span>Services</span>

                        <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180 text-slate-500 group-hover:text-[#049a3d]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />

                        </svg>

                    </button>

                    <!-- Mega Menu Dropdown -->

                    <div class="absolute left-1/2 -translate-x-1/2 hidden group-hover:grid grid-cols-2 gap-6 bg-white shadow-2xl rounded-2xl p-6 w-[640px] z-50 border border-slate-100 transition-all duration-200 top-full mt-1">

                        <!-- Column 1: Enterprise CPaaS & Messaging -->

                        <div class="space-y-1">

                            <div class="flex items-center gap-2 pb-2 border-b border-slate-100 mb-2">

                                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>

                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Enterprise Messaging (CPaaS)</span>

                            </div>



                            <a href="{{ url('/whatsapp-business-api') }}" class="group/item flex items-start gap-3 p-2 rounded-xl hover:bg-emerald-50/70 transition">

                                <div class="w-8 h-8 rounded-lg bg-emerald-100/70 text-emerald-700 flex items-center justify-center shrink-0 mt-0.5 group-hover/item:bg-emerald-600 group-hover/item:text-white transition">

                                    <i class="fa-brands fa-whatsapp text-base"></i>

                                </div>

                                <div>

                                    <div class="text-sm font-semibold text-slate-900 group-hover/item:text-emerald-700">WhatsApp Business API</div>

                                    <p class="text-[11px] text-slate-500 leading-tight">Official Meta Cloud API & Blue Tick</p>

                                </div>

                            </a>



                            <a href="{{ url('/bulk-whatsapp') }}" class="group/item flex items-start gap-3 p-2 rounded-xl hover:bg-emerald-50/70 transition">

                                <div class="w-8 h-8 rounded-lg bg-emerald-100/70 text-emerald-700 flex items-center justify-center shrink-0 mt-0.5 group-hover/item:bg-emerald-600 group-hover/item:text-white transition">

                                    <i class="fa-solid fa-bullhorn text-sm"></i>

                                </div>

                                <div>

                                    <div class="text-sm font-semibold text-slate-900 group-hover/item:text-emerald-700">Bulk WhatsApp</div>

                                    <p class="text-[11px] text-slate-500 leading-tight">High-throughput broadcast campaigns</p>

                                </div>

                            </a>



                            <a href="{{ url('/bulk-sms') }}" class="group/item flex items-start gap-3 p-2 rounded-xl hover:bg-emerald-50/70 transition">

                                <div class="w-8 h-8 rounded-lg bg-emerald-100/70 text-emerald-700 flex items-center justify-center shrink-0 mt-0.5 group-hover/item:bg-emerald-600 group-hover/item:text-white transition">

                                    <i class="fa-solid fa-comment-sms text-sm"></i>

                                </div>

                                <div>

                                    <div class="text-sm font-semibold text-slate-900 group-hover/item:text-emerald-700">Bulk SMS Gateway</div>

                                    <p class="text-[11px] text-slate-500 leading-tight">100% DLT compliant promotional & OTP</p>

                                </div>

                            </a>



                            <a href="{{ url('/rcs-messaging') }}" class="group/item flex items-start gap-3 p-2 rounded-xl hover:bg-emerald-50/70 transition">

                                <div class="w-8 h-8 rounded-lg bg-emerald-100/70 text-emerald-700 flex items-center justify-center shrink-0 mt-0.5 group-hover/item:bg-emerald-600 group-hover/item:text-white transition">

                                    <i class="fa-solid fa-message text-sm"></i>

                                </div>

                                <div>

                                    <div class="text-sm font-semibold text-slate-900 group-hover/item:text-emerald-700">RCS Messaging</div>

                                    <p class="text-[11px] text-slate-500 leading-tight">Rich cards & verified native branding</p>

                                </div>

                            </a>



                            <a href="{{ url('/sms-api') }}" class="group/item flex items-start gap-3 p-2 rounded-xl hover:bg-emerald-50/70 transition">

                                <div class="w-8 h-8 rounded-lg bg-emerald-100/70 text-emerald-700 flex items-center justify-center shrink-0 mt-0.5 group-hover/item:bg-emerald-600 group-hover/item:text-white transition">

                                    <i class="fa-solid fa-code text-sm"></i>

                                </div>

                                <div>

                                    <div class="text-sm font-semibold text-slate-900 group-hover/item:text-emerald-700">Developer APIs & OTP</div>

                                    <p class="text-[11px] text-slate-500 leading-tight">Sub-2.4s OTP REST API & webhooks</p>

                                </div>

                            </a>



                            <a href="{{ url('/voice-call') }}" class="group/item flex items-start gap-3 p-2 rounded-xl hover:bg-emerald-50/70 transition">

                                <div class="w-8 h-8 rounded-lg bg-emerald-100/70 text-emerald-700 flex items-center justify-center shrink-0 mt-0.5 group-hover/item:bg-emerald-600 group-hover/item:text-white transition">

                                    <i class="fa-solid fa-phone-volume text-sm"></i>

                                </div>

                                <div>

                                    <div class="text-sm font-semibold text-slate-900 group-hover/item:text-emerald-700">Voice Solutions & OBD</div>

                                    <p class="text-[11px] text-slate-500 leading-tight">Automated voice broadcast calls</p>

                                </div>

                            </a>

                        </div>



                        <!-- Column 2: Digital Growth & Tools (Separated) -->

                        <div class="space-y-1">

                            <div class="flex items-center gap-2 pb-2 border-b border-slate-100 mb-2">

                                <span class="w-2 h-2 rounded-full bg-blue-500"></span>

                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Digital & Web Solutions</span>

                            </div>



                            <a href="{{ url('/website-development') }}" class="group/item flex items-start gap-3 p-2 rounded-xl hover:bg-blue-50/70 transition">

                                <div class="w-8 h-8 rounded-lg bg-blue-100/70 text-blue-700 flex items-center justify-center shrink-0 mt-0.5 group-hover/item:bg-blue-600 group-hover/item:text-white transition">

                                    <i class="fa-solid fa-laptop-code text-sm"></i>

                                </div>

                                <div>

                                    <div class="text-sm font-semibold text-slate-900 group-hover/item:text-blue-700">Website Development</div>

                                    <p class="text-[11px] text-slate-500 leading-tight">High-converting corporate portals</p>

                                </div>

                            </a>



                            <a href="{{ url('/email-marketing') }}" class="group/item flex items-start gap-3 p-2 rounded-xl hover:bg-blue-50/70 transition">

                                <div class="w-8 h-8 rounded-lg bg-blue-100/70 text-blue-700 flex items-center justify-center shrink-0 mt-0.5 group-hover/item:bg-blue-600 group-hover/item:text-white transition">

                                    <i class="fa-solid fa-envelope-open-text text-sm"></i>

                                </div>

                                <div>

                                    <div class="text-sm font-semibold text-slate-900 group-hover/item:text-blue-700">Email Marketing</div>

                                    <p class="text-[11px] text-slate-500 leading-tight">Drip campaigns & high deliverability</p>

                                </div>

                            </a>



                            <a href="{{ url('/reseller') }}" class="group/item flex items-start gap-3 p-2 rounded-xl hover:bg-blue-50/70 transition">

                                <div class="w-8 h-8 rounded-lg bg-blue-100/70 text-blue-700 flex items-center justify-center shrink-0 mt-0.5 group-hover/item:bg-blue-600 group-hover/item:text-white transition">

                                    <i class="fa-solid fa-handshake text-sm"></i>

                                </div>

                                <div>

                                    <div class="text-sm font-semibold text-slate-900 group-hover/item:text-blue-700">Reseller Partner Program</div>

                                    <p class="text-[11px] text-slate-500 leading-tight">White-label portals & bulk margins</p>

                                </div>

                            </a>



                            <a href="{{ url('/whatsapp-link-generator') }}" class="group/item flex items-start gap-3 p-2 rounded-xl hover:bg-emerald-50/70 transition">

                                <div class="w-8 h-8 rounded-lg bg-emerald-100/70 text-emerald-700 flex items-center justify-center shrink-0 mt-0.5 group-hover/item:bg-emerald-600 group-hover/item:text-white transition">

                                    <i class="fa-solid fa-qrcode text-sm"></i>

                                </div>

                                <div>

                                    <div class="text-sm font-semibold text-slate-900 group-hover/item:text-emerald-700">WhatsApp Link & QR Tool</div>

                                    <p class="text-[11px] text-slate-500 leading-tight">Free instant link generator utility</p>

                                </div>

                            </a>



                            <!-- In-House Enterprise Products (CRM & HRMS) -->
                            <div class="pt-2 border-t border-slate-100 my-1">
                                <div class="text-[11px] font-bold text-emerald-700 uppercase tracking-wider mb-1 flex items-center gap-1.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> In-House Products (Available for Purchase)
                                </div>
                                <div class="grid grid-cols-2 gap-2">
                                    <a href="{{ url('/#enterprise-products') }}" class="group/item p-2 rounded-lg bg-emerald-50/70 hover:bg-emerald-100 transition border border-emerald-100 block">
                                        <div class="text-xs font-bold text-slate-900 group-hover/item:text-[#049a3d] flex items-center justify-between">
                                            <span>Textora CRM</span>
                                            <span class="text-[9px] bg-emerald-600 text-white font-bold px-1 rounded">NEW</span>
                                        </div>
                                        <p class="text-[10px] text-slate-500 leading-tight mt-0.5">WhatsApp lead pipeline & inbox</p>
                                    </a>
                                    <a href="{{ url('/#enterprise-products') }}" class="group/item p-2 rounded-lg bg-blue-50/70 hover:bg-blue-100 transition border border-blue-100 block">
                                        <div class="text-xs font-bold text-slate-900 group-hover/item:text-blue-700 flex items-center justify-between">
                                            <span>Textora HRMS</span>
                                            <span class="text-[9px] bg-blue-600 text-white font-bold px-1 rounded">NEW</span>
                                        </div>
                                        <p class="text-[10px] text-slate-500 leading-tight mt-0.5">Payroll & WhatsApp payslips</p>
                                    </a>
                                </div>
                            </div>

                            <!-- Highlight Box -->

                            <div class="mt-3 p-3 rounded-xl bg-gradient-to-br from-slate-900 to-slate-800 text-white">

                                <div class="text-[11px] font-bold text-emerald-400 uppercase tracking-wide">Enterprise Consultation</div>

                                <p class="text-xs text-slate-300 mt-1 leading-snug">Need custom volumes, DLT registration, or API integrations?</p>

                                <button onclick="openModall()" class="mt-2 text-xs font-semibold text-emerald-400 hover:text-emerald-300 flex items-center gap-1">

                                    <span>Speak with an Architect</span>

                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>

                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <a href="{{ url('portfolio') }}"
                    class="{{ activeNav('portfolio') }} hover:text-[#049a3d] font-medium transition duration-200 text-sm">Portfolio</a>

                <a href="{{ url('pricing-web') }}"

                    class="{{ activeNav('pricing-web') }} hover:text-[#049a3d] font-medium transition duration-200 text-sm">Pricing</a>

                <a href="{{ url('contact-us') }}"

                    class="{{ activeNav('contact-us') }} hover:text-[#049a3d] font-medium transition duration-200 text-sm">Contact Us</a>

                <a href="{{ url('blog_list') }}"

                    class="{{ activeNav('blog_list') }} hover:text-[#049a3d] font-medium transition duration-200 text-sm">Blogs</a>

                @if (Auth::guard('web')->user())

                    <a href="{{ url('/dashboard') }}"

                        class="flex items-center gap-2 bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white px-4 py-2 rounded-lg shadow-md text-sm font-semibold">

                        <i class="fa fa-user text-white text-sm"></i>

                        <span>{{ Auth::guard('web')->user()->name }}</span>

                    </a>

                @else

                    <div class="relative inline-block group">

                        <!-- Login Dropdown Button -->

                        <button class="flex items-center gap-1.5 text-slate-700 hover:text-[#049a3d] font-medium text-sm py-2 transition duration-200">

                            <span>Login</span>

                            <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180 text-slate-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />

                            </svg>

                        </button>



                        <!-- Dropdown Menu -->

                        <div class="absolute right-0 mt-1 w-56 bg-white rounded-xl shadow-xl border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 py-1">

                            <a href="https://app.textorasms.com/" target="_blank" rel="noopener"

                                class="flex items-center gap-2.5 px-4 py-2.5 text-sm text-slate-700 hover:bg-emerald-50 hover:text-[#049a3d] transition">

                                <i class="fa-solid fa-arrow-right-to-bracket text-xs text-slate-400"></i>

                                <span>Customer Portal Login</span>

                            </a>

                            <a href="http://Wa.textorasms.com" target="_blank" rel="noopener"

                                class="flex items-center gap-2.5 px-4 py-2.5 text-sm text-slate-700 hover:bg-emerald-50 hover:text-[#049a3d] transition">

                                <i class="fa-brands fa-whatsapp text-xs text-emerald-500"></i>

                                <span>Bulk WhatsApp Login</span>

                            </a>

                        </div>

                    </div>

                @endif



                <!-- Book Demo CTA Button -->

                <button onclick="openModall()"

                    class="bg-[#049a3d] hover:bg-[#037f32] text-white text-sm font-semibold px-4 py-2.5 rounded-xl shadow-md hover:shadow-lg transition duration-200 flex items-center gap-2">

                    <i class="fa-solid fa-calendar-check text-xs"></i>

                    <span>Book Demo</span>

                </button>

            </div>

            <!-- Mobile Action Buttons & Hamburger -->
            <div class="mobile-actions flex items-center gap-2 lg:hidden">
                <button onclick="openModall()"
                    class="bg-[#049a3d] hover:bg-[#037f32] text-white text-xs font-semibold px-3 py-1.5 rounded-lg shadow-sm transition flex items-center gap-1.5">
                    <i class="fa-solid fa-calendar-check text-[10px]"></i>
                    <span>Demo</span>
                </button>

                <button onclick="toggleSidebar()"
                    class="w-10 h-10 flex items-center justify-center text-slate-700 hover:text-[#049a3d] hover:bg-slate-100 rounded-lg transition"
                    aria-label="Toggle Navigation Menu">
                    <i class="fa-solid fa-bars-staggered text-xl"></i>
                </button>
            </div>

        </nav>

    </header>

    <!-- Mobile Sidebar -->
    <div id="mobileMenu"
        class="fixed top-0 right-0 h-full w-80 max-w-[85vw] bg-white shadow-2xl transform translate-x-full transition-transform duration-300 z-50 flex flex-col">
        <div class="flex justify-between items-center p-4 border-b border-slate-100">
            <img src="{{ URL::asset('/images/textorasms-svg-logo.svg') }}" alt="Textora" class="w-[140px]">
            <button onclick="toggleSidebar()" class="text-2xl text-slate-500 hover:text-slate-800 p-1" aria-label="Close Navigation">
                <i class="fa fa-times"></i>
            </button>
        </div>

        <div class="flex-1 overflow-y-auto p-4 space-y-3 text-slate-700 text-sm">
            <a href="{{ url('/') }}"
                class="block py-2 font-medium {{ Request::path() === '/' || Request::path() === '' ? 'text-[#049a3d] font-bold' : '' }}">
                Home
            </a>
            <a href="{{ url('about-us') }}" class="block py-2 font-medium {{ activeNav('about-us') }}">
                About Us
            </a>

            <!-- Mobile Services Accordion (Separated: CPaaS vs Digital) -->
            <details class="group border-y border-slate-100 py-2" open>
                <summary class="cursor-pointer font-medium py-1 flex items-center justify-between text-slate-800">
                    <span>Services</span>
                    <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200 group-open:rotate-180 text-slate-400"></i>
                </summary>

                <!-- CPaaS Category -->
                <div class="mt-3 pl-2 space-y-2">
                    <div class="text-[11px] font-bold uppercase tracking-wider text-emerald-700">Enterprise Messaging (CPaaS)</div>
                    <a href="{{ url('/whatsapp-business-api') }}" class="block py-1 pl-2 text-slate-600 hover:text-[#049a3d]">WhatsApp Business API</a>
                    <a href="{{ url('/bulk-whatsapp') }}" class="block py-1 pl-2 text-slate-600 hover:text-[#049a3d]">Bulk WhatsApp</a>
                    <a href="{{ url('/bulk-sms') }}" class="block py-1 pl-2 text-slate-600 hover:text-[#049a3d]">Bulk SMS Gateway</a>
                    <a href="{{ url('/rcs-messaging') }}" class="block py-1 pl-2 text-slate-600 hover:text-[#049a3d]">RCS Messaging</a>
                    <a href="{{ url('/sms-api') }}" class="block py-1 pl-2 text-slate-600 hover:text-[#049a3d]">SMS & OTP APIs</a>
                    <a href="{{ url('/voice-call') }}" class="block py-1 pl-2 text-slate-600 hover:text-[#049a3d]">Voice Solutions & OBD</a>
                </div>

                <!-- Digital Solutions Category (Separated) -->
                <div class="mt-4 pl-2 space-y-2">
                    <div class="text-[11px] font-bold uppercase tracking-wider text-emerald-700">In-House Products (Available for Purchase)</div>
                    <a href="{{ url('/#enterprise-products') }}" class="block py-1 pl-2 text-emerald-800 font-bold hover:text-[#049a3d]">Textora CRM Suite</a>
                    <a href="{{ url('/#enterprise-products') }}" class="block py-1 pl-2 text-blue-800 font-bold hover:text-[#049a3d]">Textora HRMS Suite</a>
                    <div class="text-[11px] font-bold uppercase tracking-wider text-blue-700 mt-2">Digital & Web Solutions</div>
                    <a href="{{ url('/website-development') }}" class="block py-1 pl-2 text-slate-600 hover:text-[#049a3d]">Website Development</a>
                    <a href="{{ url('/email-marketing') }}" class="block py-1 pl-2 text-slate-600 hover:text-[#049a3d]">Email Marketing</a>
                    <a href="{{ url('/reseller') }}" class="block py-1 pl-2 text-slate-600 hover:text-[#049a3d]">Reseller Partner Program</a>
                    <a href="{{ url('/whatsapp-link-generator') }}" class="block py-1 pl-2 text-slate-600 hover:text-[#049a3d]">WhatsApp Link Generator</a>
                </div>
            </details>

            <a href="{{ url('portfolio') }}" class="block py-2 font-medium {{ activeNav('portfolio') }}">
                Portfolio
            </a>
            <a href="{{ url('pricing-web') }}" class="block py-2 font-medium {{ activeNav('pricing-web') }}">
                Pricing
            </a>
            <a href="{{ url('contact-us') }}" class="block py-2 font-medium {{ activeNav('contact-us') }}">
                Contact Us
            </a>
            <a href="{{ url('blog_list') }}" class="block py-2 font-medium {{ activeNav('blog_list') }}">
                Blogs
            </a>

            <!-- Mobile Logins & Action -->
            <div class="pt-4 border-t border-slate-100 space-y-2">
                <a href="https://app.textorasms.com/" target="_blank" rel="noopener"
                    class="block w-full py-2.5 px-4 rounded-xl border border-slate-200 text-center font-medium text-slate-700 hover:bg-slate-50">
                    Customer Login
                </a>
                <a href="http://Wa.textorasms.com" target="_blank" rel="noopener"
                    class="block w-full py-2.5 px-4 rounded-xl border border-emerald-200 bg-emerald-50 text-center font-medium text-emerald-800 hover:bg-emerald-100">
                    Bulk WhatsApp Login
                </a>
                <button onclick="openModall(); toggleSidebar();"
                    class="block w-full py-3 px-4 rounded-xl bg-[#049a3d] text-center font-semibold text-white shadow-md">
                    Book Free Demo
                </button>
            </div>
        </div>
    </div>
    
    {{ $slot }}





{{-- Bottom to Top Button --}}

<a id="button" href="#" aria-label="Back to top" title="Scroll to top">
    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
    </svg>
</a>



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

            <div class="grid md:grid-cols-2 grid-cols-1 lg:grid-cols-5 gap-8">

                <div class="col-span-2 md:col-span-1">

                    <img src="{{ URL::asset('images/textorasms-svg-white-logo.svg') }}" alt="Textora SMS Logo"

                        class="lg:w-[200px] w-[150px]">

                        <p class="text-gray-300 text-sm leading-6 max-w-sm"> Textora SMS is a trusted business communication and digital solutions partner, helping businesses connect, engage, and grow through WhatsApp, SMS, RCS, Voice, Email Marketing, Website Development, and custom technology solutions. </p>

                </div>

                <div class="md:ps-6 md:col-span-1">

                    <h4 class="font-semibold text-white mb-3 text-base uppercase tracking-wider flex items-center gap-2">

                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>

                        <span>Enterprise CPaaS</span>

                    </h4>

                    <ul class="space-y-2 text-sm">

                        <li><a href="{{ url('/whatsapp-business-api') }}" class="text-gray-300 hover:text-white transition">WhatsApp Business API</a></li>

                        <li><a href="{{ url('/bulk-whatsapp') }}" class="text-gray-300 hover:text-white transition">Bulk WhatsApp Broadcast</a></li>

                        <li><a href="{{ url('/bulk-sms') }}" class="text-gray-300 hover:text-white transition">Bulk SMS & DLT Gateway</a></li>

                        <li><a href="{{ url('/rcs-messaging') }}" class="text-gray-300 hover:text-white transition">RCS Business Messaging</a></li>

                        <li><a href="{{ url('/sms-api') }}" class="text-gray-300 hover:text-white transition">Developer SMS & OTP API</a></li>

                        <li><a href="{{ url('/voice-call') }}" class="text-gray-300 hover:text-white transition">Voice OBD & Calls</a></li>

                    </ul>

                </div>



                <div class="md:col-span-1">

                    <h4 class="font-semibold text-white mb-3 text-base uppercase tracking-wider flex items-center gap-2">

                        <span class="w-2 h-2 rounded-full bg-blue-500"></span>

                        <span>Digital Solutions</span>

                    </h4>

                    <ul class="space-y-2 text-sm">

                        <li><a href="{{ url('/#enterprise-products') }}" class="text-emerald-400 font-bold hover:text-white transition">Textora CRM </a></li>
                        <li><a href="{{ url('/#enterprise-products') }}" class="text-blue-400 font-bold hover:text-white transition">Textora HRMS </a></li>
                        <li><a href="{{ url('/website-development') }}" class="text-gray-300 hover:text-white transition">Website Development</a></li>

                        <li><a href="{{ url('/email-marketing') }}" class="text-gray-300 hover:text-white transition">Email Marketing</a></li>

                        <li><a href="{{ url('/reseller') }}" class="text-gray-300 hover:text-white transition">Reseller Partner Portal</a></li>

                        <li><a href="{{ url('/whatsapp-link-generator') }}" class="text-gray-300 hover:text-white transition">WhatsApp Link Generator</a></li>

                        <li><a href="{{ url('pricing-web#whatsapp-calculator') }}" class="text-gray-300 hover:text-white transition">Pricing Calculator</a></li>

                    </ul>

                </div>

              <div>

    <h4 class="font-semibold text-white mb-3 text-xl">Quick Links</h4>



    <ul class="space-y-2 text-sm">



        <li>

            <li>
            <a href="{{ url('/portfolio') }}"
               class="text-gray-300 hover:text-white transition duration-300">
                Case Studies & Portfolio
            </a>
        </li>
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

            <a href="{{ route('login') }}"

               onclick="event.preventDefault(); openModal();"

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

        AOS.init({ once: true, duration: 650, easing: 'ease-out-cubic', offset: 50 });

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