<x-master-page
    title="Best Website Development Company in Bangalore | Textora Technologies"
    description="Textora Technologies provides professional Website Development Services including Business Websites, Corporate Websites, eCommerce Websites, Laravel, React, WordPress and Custom Web Applications across India.">

    @push('head-scripts')
    <script type="application/ld+json">
    {
        "@context":"https://schema.org",
        "@graph":[
            {
                "@type":"Service",
                "@id":"https://textorasms.com/website-development#service",
                "name":"Website Development Services",
                "serviceType":"Website Design and Development",
                "url":"https://textorasms.com/website-development",
                "provider":{
                    "@type":"Organization",
                    "name":"Textora Technologies Pvt. Ltd.",
                    "url":"https://textorasms.com",
                    "logo":"https://textorasms.com/images/logo.png"
                },
                "areaServed":"India",
                "description":"Professional Website Development Company offering Business Websites, Corporate Websites, Ecommerce Websites, Landing Pages, WordPress Development, Laravel Development, React Development and Custom Web Applications.",
                "offers":{
                    "@type":"Offer",
                    "availability":"https://schema.org/InStock",
                    "priceCurrency":"INR"
                },
                "hasOfferCatalog":{
                    "@type":"OfferCatalog",
                    "name":"Website Development Services",
                    "itemListElement":[
                        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Business Website Development"}},
                        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Corporate Website Development"}},
                        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Ecommerce Website Development"}},
                        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Custom Web Application Development"}},
                        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Laravel Website Development"}},
                        {"@type":"Offer","itemOffered":{"@type":"Service","name":"React JS Development"}},
                        {"@type":"Offer","itemOffered":{"@type":"Service","name":"WordPress Website Development"}}
                    ]
                }
            },
            {
                "@type":"FAQPage",
                "mainEntity":[
                    {
                        "@type":"Question",
                        "name":"How long does website development take?",
                        "acceptedAnswer":{"@type":"Answer","text":"A standard business website generally takes 7 to 15 working days. Ecommerce and custom web applications may require additional development time depending on project requirements."}
                    },
                    {
                        "@type":"Question",
                        "name":"Will my website be mobile responsive?",
                        "acceptedAnswer":{"@type":"Answer","text":"Yes. Every website developed by Textora Technologies is fully responsive and optimized for desktop, tablet and mobile devices."}
                    },
                    {
                        "@type":"Question",
                        "name":"Do you provide SEO-friendly website development?",
                        "acceptedAnswer":{"@type":"Answer","text":"Yes. All websites are built with SEO best practices including clean code, fast loading speed, mobile responsiveness and search engine friendly URLs."}
                    },
                    {
                        "@type":"Question",
                        "name":"Can you redesign my existing website?",
                        "acceptedAnswer":{"@type":"Answer","text":"Yes. We redesign outdated websites into modern, responsive and SEO optimized websites with improved performance."}
                    },
                    {
                        "@type":"Question",
                        "name":"Which technologies do you use for website development?",
                        "acceptedAnswer":{"@type":"Answer","text":"We develop websites using Laravel, React JS, PHP, WordPress, MySQL, HTML5, Tailwind CSS and other modern technologies."}
                    },
                    {
                        "@type":"Question",
                        "name":"Do you provide website maintenance after launch?",
                        "acceptedAnswer":{"@type":"Answer","text":"Yes. We provide website maintenance, security updates, backups, bug fixes and ongoing technical support."}
                    }
                ]
            },
            {
                "@type":"BreadcrumbList",
                "itemListElement":[
                    {"@type":"ListItem","position":1,"name":"Home","item":"https://textorasms.com/"},
                    {"@type":"ListItem","position":2,"name":"Website Development","item":"https://textorasms.com/website-development"}
                ]
            }
        ]
    }
    </script>
    @endpush

    <!-- ================= WEBSITE DEVELOPMENT HERO ================= -->

    <section class="relative overflow-hidden bg-white">

        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-40 -right-32 w-[500px] h-[500px] bg-green-100/60 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-[350px] h-[350px] bg-emerald-50 rounded-full blur-3xl"></div>
            <div class="absolute inset-0 opacity-[0.035]"
                 style="background-image:radial-gradient(#087849 1px,transparent 1px);background-size:24px 24px;">
            </div>
        </div>

        <div class="relative max-w-[1450px] mx-auto px-5 sm:px-8 lg:px-12 py-16 sm:py-20 lg:py-28">

            <div class="grid lg:grid-cols-2 gap-14 lg:gap-16 items-center">

                <!-- LEFT CONTENT -->

                <div class="max-w-2xl">

                    <h1 class="text-[40px] sm:text-5xl lg:text-[64px] font-extrabold text-slate-950 leading-[1.08] tracking-tight">
                        We Build Websites
                        <span class="block mt-2">
                            That
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-emerald-400">
                                Grow Your Business.
                            </span>
                        </span>
                    </h1>

                    <p class="mt-7 text-base sm:text-lg text-slate-600 leading-8 max-w-xl">
                        Transform your business with powerful, modern and high-performing websites.
                        From corporate websites to eCommerce platforms and custom web applications,
                        we build digital experiences designed to move your business forward.
                    </p>

                    <div class="flex flex-wrap gap-2.5 mt-7">
                        <span class="px-3.5 py-2 rounded-lg bg-slate-100 text-slate-700 text-xs sm:text-sm font-semibold">Business Websites</span>
                        <span class="px-3.5 py-2 rounded-lg bg-slate-100 text-slate-700 text-xs sm:text-sm font-semibold">eCommerce</span>
                        <span class="px-3.5 py-2 rounded-lg bg-slate-100 text-slate-700 text-xs sm:text-sm font-semibold">Laravel Development</span>
                        <span class="px-3.5 py-2 rounded-lg bg-slate-100 text-slate-700 text-xs sm:text-sm font-semibold">Custom Web Apps</span>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 mt-9">

                        <a href="{{ url('/contact-us') }}"
                           class="group inline-flex items-center justify-center gap-3 px-7 py-4 rounded-xl bg-green-700 text-white font-bold shadow-lg shadow-green-700/20 hover:bg-green-800 hover:-translate-y-1 transition duration-300">
                            Get a Free Consultation
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-6-6 6 6-6 6"/>
                            </svg>
                        </a>

                        <a href="{{ url('/portfolio') }}"
                           class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-xl border border-slate-300 text-slate-800 font-bold hover:border-green-600 hover:text-green-700 hover:bg-green-50 transition duration-300">
                            View Our Work
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>

                    </div>

                    <div class="mt-12 pt-8 border-t border-slate-200 grid grid-cols-3 gap-4 max-w-lg">
                        <div>
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-950">100%</h3>
                            <p class="mt-1 text-xs sm:text-sm text-slate-500">Responsive Design</p>
                        </div>
                        <div>
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-950">SEO</h3>
                            <p class="mt-1 text-xs sm:text-sm text-slate-500">Friendly Structure</p>
                        </div>
                        <div>
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-950">24/7</h3>
                            <p class="mt-1 text-xs sm:text-sm text-slate-500">Digital Presence</p>
                        </div>
                    </div>

                </div>

                <!-- RIGHT WEBSITE PREVIEW PANEL -->

                <div class="relative">

                    <div class="relative rounded-[28px] bg-white border border-slate-200 shadow-[0_25px_80px_rgba(15,23,42,0.12)] p-4 sm:p-6">

                        <!-- Browser Header -->

                        <div class="flex items-center justify-between border-b border-slate-100 pb-4">

                            <div class="flex gap-2">
                                <span class="w-3 h-3 rounded-full bg-red-400"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                                <span class="w-3 h-3 rounded-full bg-green-500"></span>
                            </div>

                            <div class="hidden sm:flex items-center gap-2 px-5 py-2 rounded-lg bg-slate-100 text-xs text-slate-500">
                                <i class="fa-solid fa-lock text-green-600"></i>
                                yourbusiness.com
                            </div>

                            <div class="text-xs font-semibold text-green-700">LIVE PREVIEW</div>

                        </div>

                        <!-- Preview Navigation -->

                        <div class="mt-5 rounded-t-2xl overflow-hidden border border-slate-100">

                            <div class="flex items-center justify-between px-4 sm:px-6 py-4 bg-white">

                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-lg bg-green-700 flex items-center justify-center">
                                        <span class="text-white font-bold text-sm">T</span>
                                    </div>
                                    <span class="font-extrabold text-slate-900 text-sm">YourBrand</span>
                                </div>

                                <div class="hidden sm:flex gap-5 text-[10px] font-semibold text-slate-500">
                                    <span>Home</span>
                                    <span>About</span>
                                    <span>Services</span>
                                    <span>Contact</span>
                                </div>

                                <div class="px-3 py-2 bg-green-700 text-white rounded-lg text-[10px] font-bold">
                                    Get Started
                                </div>

                            </div>

                            <!-- BUILDING VISUAL HERO -->

                            <div class="relative min-h-[280px] sm:min-h-[350px] overflow-hidden bg-gradient-to-br from-[#001f18] via-[#003d2b] to-[#00150f]">

                                <div class="absolute -top-20 -right-10 w-72 h-72 bg-green-500/30 rounded-full blur-3xl"></div>
                                <div class="absolute bottom-0 left-0 w-64 h-40 bg-emerald-400/20 rounded-full blur-3xl"></div>

                                <div class="absolute -right-16 -top-28 w-80 h-80 rounded-full border border-green-400/40 shadow-[0_0_35px_rgba(34,197,94,0.25)]"></div>

                                <!-- BUILDING SVG -->

                                <div class="absolute inset-0 flex items-end justify-end">

                                    <svg viewBox="0 0 650 380"
                                         class="w-full h-full"
                                         preserveAspectRatio="xMidYMid slice"
                                         xmlns="http://www.w3.org/2000/svg">

                                        <defs>
                                            <linearGradient id="buildingGlass" x1="0" y1="0" x2="1" y2="1">
                                                <stop offset="0%" stop-color="#9be8ff"/>
                                                <stop offset="45%" stop-color="#176b78"/>
                                                <stop offset="100%" stop-color="#092e3c"/>
                                            </linearGradient>

                                            <linearGradient id="buildingSide" x1="0" y1="0" x2="1" y2="1">
                                                <stop offset="0%" stop-color="#247c8b"/>
                                                <stop offset="100%" stop-color="#041d2c"/>
                                            </linearGradient>

                                            <linearGradient id="buildingLight" x1="0" y1="0" x2="0" y2="1">
                                                <stop offset="0%" stop-color="#fff6c5"/>
                                                <stop offset="100%" stop-color="#e5a947"/>
                                            </linearGradient>

                                            <filter id="buildingGlow">
                                                <feGaussianBlur stdDeviation="8"/>
                                            </filter>
                                        </defs>

                                        <ellipse cx="390" cy="345" rx="245" ry="20"
                                                 fill="#22c55e" opacity=".35" filter="url(#buildingGlow)"/>

                                        <!-- Main building -->
                                        <path d="M245 100 L445 35 L570 95 L570 315 L245 315 Z"
                                              fill="#062b36" stroke="#65d9e8" stroke-width="2"/>

                                        <!-- Front glass -->
                                        <path d="M245 100 L445 35 L445 315 L245 315 Z"
                                              fill="url(#buildingGlass)"/>

                                        <!-- Side facade -->
                                        <path d="M445 35 L570 95 L570 315 L445 315 Z"
                                              fill="url(#buildingSide)"/>

                                        <!-- Window structure -->
                                        <g stroke="#b8f4ff" stroke-width="3" opacity=".8">
                                            <path d="M275 90 V315"/>
                                            <path d="M315 77 V315"/>
                                            <path d="M355 64 V315"/>
                                            <path d="M395 50 V315"/>
                                            <path d="M245 145 L445 90"/>
                                            <path d="M245 195 L445 150"/>
                                            <path d="M245 245 L445 210"/>
                                            <path d="M245 290 L445 270"/>
                                        </g>

                                        <!-- Illuminated windows -->
                                        <g fill="url(#buildingLight)" opacity=".9">
                                            <path d="M283 111 L303 105 V139 L283 145 Z"/>
                                            <path d="M323 99 L343 93 V127 L323 133 Z"/>
                                            <path d="M363 86 L383 80 V114 L363 120 Z"/>
                                            <path d="M403 73 L425 66 V100 L403 107 Z"/>

                                            <path d="M283 160 L303 155 V185 L283 191 Z"/>
                                            <path d="M323 150 L343 145 V175 L323 180 Z"/>
                                            <path d="M363 140 L383 135 V165 L363 170 Z"/>
                                            <path d="M403 128 L425 122 V153 L403 159 Z"/>

                                            <path d="M283 210 L303 206 V235 L283 240 Z"/>
                                            <path d="M323 200 L343 195 V225 L323 230 Z"/>
                                            <path d="M363 190 L383 185 V215 L363 220 Z"/>
                                            <path d="M403 178 L425 173 V203 L403 208 Z"/>
                                        </g>

                                        <!-- Side windows -->
                                        <g fill="#b9edee" opacity=".75">
                                            <path d="M465 75 L490 87 V120 L465 108 Z"/>
                                            <path d="M505 94 L530 106 V139 L505 127 Z"/>
                                            <path d="M465 130 L490 142 V175 L465 163 Z"/>
                                            <path d="M505 149 L530 161 V194 L505 182 Z"/>
                                            <path d="M465 185 L490 197 V230 L465 218 Z"/>
                                            <path d="M505 204 L530 216 V249 L505 237 Z"/>
                                        </g>

                                        <!-- Entrance -->
                                        <rect x="335" y="258" width="58" height="57" rx="2"
                                              fill="#082b35" stroke="#d8f5f0" stroke-width="2"/>
                                        <rect x="342" y="266" width="21" height="49" fill="#e6bd73"/>
                                        <rect x="367" y="266" width="19" height="49" fill="#8ed7dc"/>

                                        <path d="M245 100 L445 35 L570 95"
                                              fill="none" stroke="#b8f7ff" stroke-width="4"/>

                                        <!-- Landscape -->
                                        <path d="M0 325 Q130 300 245 320 Q400 290 650 320 V380 H0 Z"
                                              fill="#05251b"/>

                                        <g fill="#087849">
                                            <circle cx="210" cy="300" r="19"/>
                                            <circle cx="190" cy="310" r="17"/>
                                            <circle cx="230" cy="312" r="20"/>
                                            <circle cx="550" cy="300" r="23"/>
                                            <circle cx="580" cy="310" r="20"/>
                                            <circle cx="615" cy="305" r="25"/>
                                        </g>

                                        <g fill="#22c55e">
                                            <circle cx="205" cy="295" r="10"/>
                                            <circle cx="225" cy="306" r="11"/>
                                            <circle cx="558" cy="292" r="12"/>
                                            <circle cx="605" cy="297" r="13"/>
                                        </g>

                                        <g fill="#e9c47a">
                                            <rect x="250" y="323" width="4" height="18"/>
                                            <rect x="445" y="322" width="4" height="18"/>
                                            <rect x="535" y="325" width="4" height="16"/>
                                        </g>

                                    </svg>

                                </div>

                                <!-- Text Overlay -->

                                <div class="relative z-10 px-5 sm:px-8 py-8 sm:py-10 max-w-[55%] sm:max-w-[48%]">

                                    <span class="text-[8px] sm:text-[10px] uppercase tracking-[2px] text-green-300 font-bold">
                                        Welcome to the future
                                    </span>

                                    <h3 class="mt-3 text-xl sm:text-3xl font-extrabold text-white leading-tight">
                                        Build Your
                                        <span class="text-green-400">Digital</span>
                                        Future.
                                    </h3>

                                    <p class="mt-3 text-[9px] sm:text-xs leading-5 text-slate-200">
                                        Smart solutions for modern businesses.
                                        Create. Connect. Grow.
                                    </p>

                                    <div class="mt-4 inline-flex items-center gap-2 px-3 sm:px-4 py-2 sm:py-2.5 bg-green-600 rounded-lg text-white text-[9px] sm:text-[10px] font-bold shadow-lg shadow-green-500/30">
                                        Explore More
                                        <span>→</span>
                                    </div>

                                </div>

                            </div>

                            <!-- Preview Service Cards -->

                            <div class="grid grid-cols-3 gap-3 p-4 sm:p-5 bg-slate-50">

                                <div class="bg-white rounded-xl p-3 border border-slate-100 text-center">
                                    <div class="w-9 h-9 mx-auto rounded-lg bg-green-50 flex items-center justify-center text-green-700">
                                        <i class="fa-solid fa-laptop text-lg"></i>
                                    </div>
                                    <p class="mt-2 text-[9px] sm:text-[10px] font-bold text-slate-700">Web Design</p>
                                </div>

                                <div class="bg-white rounded-xl p-3 border border-slate-100 text-center">
                                    <div class="w-9 h-9 mx-auto rounded-lg bg-blue-50 flex items-center justify-center text-blue-700">
                                        <i class="fa-solid fa-code text-lg"></i>
                                    </div>
                                    <p class="mt-2 text-[9px] sm:text-[10px] font-bold text-slate-700">Development</p>
                                </div>

                                <div class="bg-white rounded-xl p-3 border border-slate-100 text-center">
                                    <div class="w-9 h-9 mx-auto rounded-lg bg-purple-50 flex items-center justify-center text-purple-700">
                                        <i class="fa-solid fa-magnifying-glass-chart text-lg"></i>
                                    </div>
                                    <p class="mt-2 text-[9px] sm:text-[10px] font-bold text-slate-700">SEO Ready</p>
                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Floating Card -->

                    <div class="absolute -left-5 sm:-left-9 top-20 bg-white rounded-2xl shadow-xl border border-slate-100 p-4 hidden sm:block">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center">
                                <i class="fa-solid fa-check text-green-700"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-900">Mobile Responsive</p>
                                <p class="text-[10px] text-slate-500">Across all devices</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Bottom Card -->

                    <div class="absolute -right-3 sm:-right-6 -bottom-7 bg-white rounded-2xl shadow-xl border border-slate-100 px-5 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center">
                                <i class="fa-solid fa-rocket text-blue-700"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-900">Built for Growth</p>
                                <p class="text-[10px] text-slate-500">Modern technology</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ================= WHY CHOOSE TEXTORA ================= -->

    <section class="relative overflow-hidden bg-white py-16 lg:py-24">

        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-32 -right-32 w-96 h-96 bg-green-100/50 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-emerald-50 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-14 lg:mb-16">

                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-green-50 border border-green-100 mb-5">
                    <span class="w-2 h-2 rounded-full bg-green-600"></span>
                    <span class="text-xs sm:text-sm font-bold tracking-wider uppercase text-green-700">Why Choose Textora</span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-950 leading-tight tracking-tight">
                    Why Businesses
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-emerald-400">Choose Us</span>
                </h2>

                <p class="mt-5 text-base sm:text-lg text-slate-600 leading-8">
                    We create websites that don't just look beautiful — they help your business grow.
                    Experience the perfect combination of technology, performance and creativity.
                </p>

            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-6">

                @php
                    $features = [
                        ['icon'=>'fa-code','title'=>'Custom Development','description'=>'Tailor-made websites and web applications designed around your unique business requirements.','tag'=>'Built Around You'],
                        ['icon'=>'fa-mobile-screen-button','title'=>'Mobile Responsive','description'=>'Seamless browsing experiences across smartphones, tablets, laptops and desktop devices.','tag'=>'Every Screen Ready'],
                        ['icon'=>'fa-gauge-high','title'=>'High Performance','description'=>'Fast-loading websites built with performance-focused development and Core Web Vitals best practices.','tag'=>'Speed Matters'],
                        ['icon'=>'fa-shield-halved','title'=>'Secure Platform','description'=>'Security-focused development practices with SSL integration, reliable backups and secure architecture.','tag'=>'Security First']
                    ];
                @endphp

                @foreach($features as $feature)
                    <div class="group relative bg-white rounded-3xl border border-slate-200 p-7 sm:p-8 transition-all duration-500 hover:-translate-y-2 hover:border-green-300 hover:shadow-[0_20px_50px_rgba(22,163,74,0.12)] overflow-hidden">

                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-green-500 to-emerald-300 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>

                        <div class="w-16 h-16 rounded-2xl bg-green-50 border border-green-100 flex items-center justify-center mb-7 group-hover:bg-green-700 group-hover:border-green-700 transition-all duration-300">
                            <i class="fa-solid {{ $feature['icon'] }} text-3xl text-green-700 group-hover:text-white transition-colors duration-300"></i>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-green-700 transition-colors">
                            {{ $feature['title'] }}
                        </h3>

                        <p class="text-sm text-slate-600 leading-7">{{ $feature['description'] }}</p>

                        <div class="mt-7 flex items-center gap-2 text-sm font-bold text-green-700">
                            <span>{{ $feature['tag'] }}</span>
                            <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                        </div>

                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <!-- ================= SERVICES ================= -->

    <section class="relative overflow-hidden bg-white lg:py-24 py-16">

        <div class="absolute top-0 right-0 w-72 h-72 bg-green-100/50 blur-3xl rounded-full pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 relative">

            <div class="text-center max-w-3xl mx-auto mb-14">

                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-green-50 border border-green-100 text-green-700 text-sm font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-layer-group"></i>
                    Our Services
                </span>

                <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 mt-5 leading-tight">
                    Website Development Services
                    <span class="text-green-600">We Offer</span>
                </h2>

                <p class="text-gray-600 mt-5 text-base md:text-lg leading-relaxed">
                    From business websites to advanced web applications, we build digital solutions
                    designed to strengthen your brand and accelerate business growth.
                </p>

            </div>

            @php
                $services = [
                    ['icon'=>'fa-globe','title'=>'Business Website','description'=>'Professional websites for startups, SMEs and enterprises to establish a strong digital presence.','number'=>'01'],
                    ['icon'=>'fa-cart-shopping','title'=>'E-Commerce Website','description'=>'Feature-rich online stores with product management, secure payment gateway and shopping experience.','number'=>'02'],
                    ['icon'=>'fa-laptop-code','title'=>'Custom Web Application','description'=>'Custom CRM, ERP, business portals and web-based software built around your business needs.','number'=>'03'],
                    ['icon'=>'fa-graduation-cap','title'=>'Education Website','description'=>'Modern websites for schools, colleges and coaching institutes with essential digital features.','number'=>'04'],
                    ['icon'=>'fa-hospital','title'=>'Healthcare Website','description'=>'Professional hospital, clinic and doctor websites with appointment booking functionality.','number'=>'05'],
                    ['icon'=>'fa-building','title'=>'Corporate Website','description'=>'Enterprise-grade websites that communicate your brand identity and build customer trust.','number'=>'06']
                ];
            @endphp

            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6">

                @foreach($services as $service)
                    <div class="group relative bg-white border border-gray-100 rounded-3xl p-8 transition-all duration-500 hover:-translate-y-2 hover:border-green-200 hover:shadow-2xl hover:shadow-green-900/10 overflow-hidden">

                        <div class="absolute top-5 right-6 text-5xl font-black text-gray-100 group-hover:text-green-50 transition-colors">
                            {{ $service['number'] }}
                        </div>

                        <div class="relative z-10">

                            <div class="w-16 h-16 flex items-center justify-center rounded-2xl bg-green-50 text-green-600 text-2xl mb-6 group-hover:bg-green-600 group-hover:text-white group-hover:scale-110 transition-all duration-300">
                                <i class="fa-solid {{ $service['icon'] }}"></i>
                            </div>

                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-700 transition-colors">
                                {{ $service['title'] }}
                            </h3>

                            <p class="text-gray-600 leading-7 text-sm md:text-base">
                                {{ $service['description'] }}
                            </p>

                            <div class="mt-6 flex items-center gap-2 text-green-600 font-semibold text-sm">
                                <span>Explore Solution</span>
                                <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- ================= TECHNOLOGIES ================= -->

    <section class="relative bg-gray-50 lg:py-24 py-16 overflow-hidden">

        <div class="absolute -left-32 top-20 w-80 h-80 bg-green-100/60 blur-3xl rounded-full pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 relative">

            <div class="text-center max-w-3xl mx-auto mb-14">

                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-green-100 text-green-700 text-sm font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-code"></i>
                    Technologies
                </span>

                <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 mt-5">
                    Technologies <span class="text-green-600">We Work With</span>
                </h2>

                <p class="text-gray-600 mt-5 text-base md:text-lg leading-relaxed">
                    We use modern and reliable technologies to develop secure, scalable,
                    high-performance websites and web applications.
                </p>

            </div>

            @php
                $technologies = [
                    ['name'=>'Laravel','icon'=>'fa-brands fa-laravel'],
                    ['name'=>'React JS','icon'=>'fa-brands fa-react'],
                    ['name'=>'Node JS','icon'=>'fa-brands fa-node-js'],
                    ['name'=>'WordPress','icon'=>'fa-brands fa-wordpress'],
                    ['name'=>'PHP','icon'=>'fa-brands fa-php'],
                    ['name'=>'MySQL','icon'=>'fa-solid fa-database'],
                    ['name'=>'HTML5','icon'=>'fa-brands fa-html5'],
                    ['name'=>'Tailwind CSS','icon'=>'fa-solid fa-wind']
                ];
            @endphp

            <div class="grid grid-cols-2 md:grid-cols-4 gap-5">

                @foreach($technologies as $technology)
                    <div class="group bg-white border border-gray-100 rounded-2xl p-7 text-center transition-all duration-300 hover:-translate-y-2 hover:border-green-200 hover:shadow-xl hover:shadow-green-900/10">

                        <div class="w-16 h-16 mx-auto rounded-2xl bg-green-50 text-green-600 flex items-center justify-center text-3xl mb-5 group-hover:bg-green-600 group-hover:text-white transition-all duration-300">
                            <i class="{{ $technology['icon'] }}"></i>
                        </div>

                        <h3 class="text-lg font-bold text-gray-900 group-hover:text-green-700 transition-colors">
                            {{ $technology['name'] }}
                        </h3>

                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <!-- ================= DEVELOPMENT PROCESS ================= -->

    <section class="relative bg-white lg:py-24 py-16 overflow-hidden">

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center max-w-3xl mx-auto mb-16">

                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-green-50 border border-green-100 text-green-700 text-sm font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-diagram-project"></i>
                    Development Process
                </span>

                <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 mt-5">
                    Our Website Development
                    <span class="text-green-600">Process</span>
                </h2>

                <p class="text-gray-600 mt-5 text-base md:text-lg leading-relaxed">
                    We follow a structured development process to transform your ideas
                    into secure, scalable and business-focused digital solutions.
                </p>

            </div>

            @php
                $processSteps = [
                    ['number'=>'01','icon'=>'fa-file-lines','title'=>'Requirement Analysis','description'=>'Understand your business goals, target audience and project requirements.'],
                    ['number'=>'02','icon'=>'fa-pen-ruler','title'=>'UI / UX Design','description'=>'Create attractive, responsive and user-friendly website layouts.'],
                    ['number'=>'03','icon'=>'fa-code','title'=>'Development','description'=>'Build secure, scalable and high-performance websites using modern technologies.'],
                    ['number'=>'04','icon'=>'fa-vial-circle-check','title'=>'Testing','description'=>'Test website functionality, speed, security and browser compatibility.'],
                    ['number'=>'05','icon'=>'fa-rocket','title'=>'Launch & Support','description'=>'Launch your website with ongoing maintenance and technical support.']
                ];
            @endphp

            <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-6">

                @foreach($processSteps as $step)
                    <div class="relative group">

                        <div class="h-full bg-gray-50 border border-gray-100 rounded-3xl p-7 transition-all duration-300 hover:bg-white hover:border-green-200 hover:shadow-xl hover:shadow-green-900/10 hover:-translate-y-2">

                            <div class="flex items-center justify-between mb-7">

                                <div class="w-14 h-14 rounded-2xl bg-green-600 text-white flex items-center justify-center text-xl shadow-lg shadow-green-600/20 group-hover:scale-110 transition-transform">
                                    <i class="fa-solid {{ $step['icon'] }}"></i>
                                </div>

                                <span class="text-3xl font-black text-gray-200 group-hover:text-green-100 transition-colors">
                                    {{ $step['number'] }}
                                </span>

                            </div>

                            <h3 class="text-lg font-bold text-gray-900 mb-3">{{ $step['title'] }}</h3>
                            <p class="text-sm text-gray-600 leading-7">{{ $step['description'] }}</p>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- ================= INDUSTRIES WE SERVE ================= -->

    <section class="relative bg-gray-50 lg:py-24 py-16 overflow-hidden">

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center max-w-3xl mx-auto mb-14">

                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-green-100 text-green-700 text-sm font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-industry"></i>
                    Industries We Serve
                </span>

                <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 mt-5">
                    Website Solutions
                    <span class="text-green-600">For Every Industry</span>
                </h2>

                <p class="text-gray-600 mt-5 text-base md:text-lg leading-relaxed">
                    We create industry-focused website solutions that help businesses
                    improve their digital presence and connect with customers.
                </p>

            </div>

            @php
                $industries = [
                    ['icon'=>'fa-cart-shopping','title'=>'Retail & eCommerce','description'=>'Online stores with product management and secure payment gateway integration.'],
                    ['icon'=>'fa-hospital','title'=>'Hospital, Clinic & Doctor','description'=>'Healthcare websites with appointment booking and essential patient information.'],
                    ['icon'=>'fa-graduation-cap','title'=>'School & College','description'=>'Digital platforms for schools, colleges and coaching institutes.'],
                    ['icon'=>'fa-building','title'=>'Corporate Business','description'=>'Professional websites for companies, brands and enterprises.'],
                    ['icon'=>'fa-house','title'=>'Real Estate','description'=>'Property listing and real estate websites to showcase available properties.'],
                    ['icon'=>'fa-utensils','title'=>'Restaurant & Food','description'=>'Restaurant websites with menus, online ordering and delivery features.']
                ];
            @endphp

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach($industries as $industry)
                    <div class="group bg-white rounded-3xl border border-gray-100 p-8 transition-all duration-300 hover:-translate-y-2 hover:border-green-200 hover:shadow-xl hover:shadow-green-900/10">

                        <div class="flex items-start gap-5">

                            <div class="shrink-0 w-14 h-14 rounded-2xl bg-green-50 text-green-600 flex items-center justify-center text-2xl group-hover:bg-green-600 group-hover:text-white transition-all duration-300">
                                <i class="fa-solid {{ $industry['icon'] }}"></i>
                            </div>

                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-green-700 transition-colors">
                                    {{ $industry['title'] }}
                                </h3>

                                <p class="text-sm text-gray-600 leading-7">
                                    {{ $industry['description'] }}
                                </p>
                            </div>

                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- ================= FINAL CTA ================= -->

    <section class="relative overflow-hidden bg-gray-950 py-20 lg:py-24">

        <div class="absolute -top-40 -left-40 w-96 h-96 bg-green-600/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-green-500/20 rounded-full blur-3xl"></div>

        <div class="max-w-5xl mx-auto px-6 text-center relative z-10">

            <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-green-500/30 bg-green-500/10 text-green-400 text-sm font-bold uppercase tracking-wider mb-7">
                <i class="fa-solid fa-lightbulb"></i>
                Let's Get Started
            </span>

            <h2 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-6">
                Let's Build Something
                <span class="text-green-400">Amazing Together</span>
            </h2>

            <p class="text-gray-300 text-base md:text-xl max-w-3xl mx-auto leading-relaxed mb-10">
                Whether you need a Business Website, eCommerce Store, Corporate Portal
                or Custom Web Application, our expert developers are ready to help.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">

                <button onclick="openModall()"
                    class="inline-flex items-center justify-center gap-3 bg-green-600 hover:bg-green-500 text-white px-9 py-4 rounded-xl font-bold text-base md:text-lg shadow-xl shadow-green-600/20 transition-all duration-300 hover:-translate-y-1">
                    Request Free Consultation
                    <i class="fa-solid fa-arrow-right"></i>
                </button>

                <a href="{{ url('/contact-us') }}"
                    class="inline-flex items-center justify-center gap-3 border border-gray-600 hover:border-white text-white hover:bg-white hover:text-gray-900 px-9 py-4 rounded-xl font-bold text-base md:text-lg transition-all duration-300">
                    Contact Us
                    <i class="fa-solid fa-phone"></i>
                </a>

            </div>
        </div>
    </section>

    <!-- ================= FAQ ================= -->

    <section class="relative bg-white lg:py-24 py-16 overflow-hidden">

        <div class="absolute right-0 top-20 w-72 h-72 bg-green-100/40 blur-3xl rounded-full pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-6 relative">

            <div class="text-center mb-14">

                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-green-50 border border-green-100 text-green-700 text-sm font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-circle-question"></i>
                    FAQs
                </span>

                <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 mt-5">
                    Frequently Asked
                    <span class="text-green-600">Questions</span>
                </h2>

                <p class="text-gray-600 mt-5 text-base md:text-lg leading-relaxed max-w-3xl mx-auto">
                    Find answers to common questions about our website development
                    services, technologies and support.
                </p>

            </div>

            <div class="space-y-4">

                @php
                    $faqs = [
                        ['question'=>'How long does it take to develop a business website?','answer'=>'A standard business website usually takes 7–15 working days. Larger eCommerce websites or custom web applications may take 3–8 weeks depending on features and project requirements.'],
                        ['question'=>'Will my website be mobile-friendly and responsive?','answer'=>'Yes. Every website we develop is fully responsive and optimized for desktop, tablet and mobile devices to provide the best user experience.'],
                        ['question'=>'Do you provide SEO-friendly website development?','answer'=>'Yes. Our websites include SEO-friendly URLs, fast loading speed, mobile responsiveness, clean code, schema-ready structure and Core Web Vitals optimization for better Google rankings.'],
                        ['question'=>'Can you redesign my existing website?','answer'=>'Absolutely. We redesign outdated websites into modern, responsive, SEO-friendly and high-performance websites that improve user experience and lead generation.'],
                        ['question'=>'Which technologies do you use for website development?','answer'=>'We develop websites using Laravel, PHP, React JS, Node JS, WordPress, MySQL, HTML5, CSS3 and Tailwind CSS based on your project requirements.'],
                        ['question'=>'Do you provide website maintenance and support?','answer'=>'Yes. We provide regular website maintenance, security updates, backups, bug fixes, performance optimization and technical support after the website goes live.']
                    ];
                @endphp

                @foreach($faqs as $faq)
                    <details class="group bg-gray-50 border border-gray-100 rounded-2xl open:bg-white open:border-green-200 open:shadow-lg transition-all duration-300">

                        <summary class="flex items-center justify-between gap-5 cursor-pointer list-none p-5 md:p-6">

                            <h3 class="text-base md:text-lg font-bold text-gray-900">
                                {{ $faq['question'] }}
                            </h3>

                            <span class="shrink-0 w-9 h-9 rounded-full bg-green-100 text-green-700 flex items-center justify-center transition-all group-open:bg-green-600 group-open:text-white">
                                <i class="fa-solid fa-plus group-open:rotate-45 transition-transform"></i>
                            </span>

                        </summary>

                        <div class="px-5 md:px-6 pb-6 text-gray-600 leading-7 text-sm md:text-base">
                            {{ $faq['answer'] }}
                        </div>

                    </details>
                @endforeach

            </div>

            <div class="text-center mt-10">

                <p class="text-gray-600 mb-4">
                    Still have questions about your project?
                </p>

                <a href="{{ url('/contact-us') }}"
                    class="inline-flex items-center gap-2 text-green-700 font-bold hover:text-green-800 transition-colors">
                    Talk to Our Team
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </div>
    </section>

    <!-- ================= FAQ STYLE ================= -->

    <style>
        summary::-webkit-details-marker {
            display: none;
        }

        summary {
            list-style: none;
        }

        details[open] summary {
            border-bottom: 1px solid #f0fdf4;
        }
    </style>

</x-master-page>