<x-master-page title="Best SMS API Service Provider in India | Textora SMS"
    description="Top-rated SMS API Service Provider for secure OTPs & alerts. Get 99.9% uptime, DLT support, and instant global delivery. Power your business today!">
    @php
        function activeNav($path)
        {
            return Request::path() === $path ? 'text-green-700 font-semibold' : 'text-gray-700';
        }
    @endphp

    @push('head-scripts')

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "SMS API & Gateway Service",
      "serviceType": "Programmable Messaging API",
      "provider": {
        "@type": "Organization",
        "name": "Textora SMS API",
        "url": "https://textorasms.com/sms-api"
      },
      "description": "Developer-first SMS API service provider offering high-speed RESTful APIs for OTP verification, transactional alerts, and global promotional campaigns with 99.9% uptime.",
      "offers": {
        "@type": "Offer",
        "availability": "https://schema.org/InStock",
        "areaServed": "IN"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "SMS API Features",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "High-Priority OTP SMS API"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Two-Way SMS Messaging"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "RESTful API Integration (Python, PHP, Node.js)"
            }
          }
        ]
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the OTP API used for?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The OTP SMS API is used for Two-Factor Authentication (2FA), secure account logins, and verifying high-value transactions to ensure user security."
          }
        },
        {
          "@type": "Question",
          "name": "How fast are OTPs delivered?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our high-priority routes are designed for speed, typically delivering OTPs within 5–10 seconds globally via our dedicated OTP Gateway."
          }
        },
        {
          "@type": "Question",
          "name": "Can I integrate the API with my existing software?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, Textora offers easy-to-use SDKs and RESTful APIs that seamlessly integrate with any modern CRM, ERP, or web application."
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://textorasms.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "SMS API",
          "item": "https://textorasms.com/sms-api"
        }
      ]
    }
  ]
}
</script>


    @endpush

    <!-- ===================== HERO SECTION ===================== -->
    <section class="overflow-hidden otp-api-banner md:block hidden">
        <div class="relative max-w-7xl mx-auto px-6 text-white">
            <div class="grid grid-cols-12">
                <div class="col-span-6 xl:col-span-5">
                    <h1 class="xl:text-4xl lg:text-3xl text-2xl font-extrabold drop-shadow-lg lg:pt-4 xl:pt-0">
                        Scale Your Customer Engagement with a Premium SMS API Service Provider

                    </h1>

                    <p class="mt-2 lg:mt-4 lg:text-base text-sm  opacity-90 max-w-3xl">
                        Stop worrying about undelivered messages. Textora provides a developer-first SMS gateway
                        designed for 99.9% uptime. Integrate our high-speed Messaging API in minutes to deliver secure
                        OTP for verification, transactional alerts, and global promotional campaigns in real time.
                    </p>

                    <a href="{{ url('pricing-web') }}"
                        class="mt-3 lg:mt-8 inline-block border border-white text-white xl:px-8 px-4 py-3 rounded-xl shadow-lg xl:text-md text-sm font-semibold hover:scale-105 transition">
                        Purchase Now <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <button onclick="openModall()"
                        class="border border-white text-white md:w-auto w-fit px-4 xl:px-8 py-3 mx-auto xl:mt-0 mt-3 lg:ms-5 ms-2 rounded-lg xl:text-md text-sm font-semibold hover:bg-white hover:text-black transition duration-300 shadow-lg transform hover:scale-105">
                        Book a Free Demo
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- mob banner section --}}
    <div class="mob-banner block md:hidden relative bg-cover bg-center"
        style="background-image: url('{{ URL::asset('/images/banners/otp-api-mob.jpg') }}');height: 100vh;">
        <div class="relative z-10 h-full flex flex-col items-center justify-start pt-[140px] px-4 text-center">
            <h6 class="text-white text-2xl sm:text-3xl font-bold drop-shadow-lg">
                Scale Your Customer Engagement with a Premium SMS API Service Provider

            </h6>
            <p class="mt-2 text-md text-white opacity-90 line-clamp-2">
                Stop worrying about undelivered messages. Textora provides a developer-first SMS gateway designed for
                99.9% uptime. Integrate our high-speed Messaging API in minutes to deliver secure OTP for verification,
                transactional alerts, and global promotional campaigns in real time.
            </p>
            <a href="{{ url('pricing-web') }}"
                class="mt-4 inline-block border border-white text-white px-4 py-2 rounded-xl shadow-lg text-sm font-semibold hover:scale-105 transition">
                Purchase Now <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>

    {{-- what is service section --}}
    <section class="lg:py-20 md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12">
            <div class="flex flex-col justify-center">
                <p class="text-sm text-[#4eb86a] font-semibold mb-2">SMS API</p>
                <h2 class="lg:text-4xl sm:text-3xl text-2xl font-bold leading-snug mb-4">
                    Why Your Business Needs a Programmable Text API
                </h2>

                <p class="text-gray-600 mb-3 text-sm lg:text-base">In today’s fast-paced market, a business SMS service is the essential
                    bridge between your backend software and your customers’ mobile devices. As a reliable SMS API
                    service provider, Textora offers a modern RESTful API that allows you to automate high-volume
                    communication directly from your existing CRM, ERP, or website.
                </p>
                <p class="text-gray-600 mb-8 text-sm lg:text-base">Whether you are handling a high-security OTP SMS API for user logins or
                    sending automated order updates, our carrier-grade infrastructure ensures your messages bypass
                    network congestion and land in the inbox instantly—no manual effort required.</p>
            </div>
            <img src="{{ URL::asset('images/sms-api-img.jpg') }}" alt="Two-way SMS Messaging">
        </div>
    </section>


    <!-- ===================== WHY OTP API ===================== -->
    <section class="lg:py-20 md:py-10 py-6 hidden">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="lg:text-4xl md:text-3xl text-2xl font-bold text-center mb-4">Why Choose Our OTP SMS API?</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto md:mb-16 mb-6">
                Secure, lightning-fast OTP delivery with priority SMS channels for instant verification.
            </p>

            <div class="grid md:grid-cols-3 lg:gap-10 ma:gap-6 gap-4 text-center">
                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition group hover:text-white hover:bg-black">
                    <i
                        class="fa-solid fa-bolt lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3 group-hover:text-white"></i>
                    <h3 class="text-xl font-semibold">Instant OTP Delivery</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Priority routing ensures your OTP reaches the
                        user in 3–5 seconds.</p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition group hover:text-white hover:bg-black">
                    <i
                        class="fa-solid fa-shield lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3 group-hover:text-white"></i>
                    <h3 class="text-xl font-semibold">Secure & Encrypted</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Bank-level security with DLT-approved routing &
                        encrypted channels.</p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition group hover:text-white hover:bg-black">
                    <i
                        class="fa-solid fa-clock lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3 group-hover:text-white"></i>
                    <h3 class="text-xl font-semibold">Auto Retry Mechanism</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">If an OTP fails, the system automatically
                        retries via alternate routes.</p>
                </div>

            </div>
        </div>
    </section>



    <!-- ===================== FEATURES ===================== -->
    <section class="lg:py-20 md:py-10 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto md:mb-16 mb-10">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">Features</span>
                <h2 class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                    High-Performance Features Built for Global Scale
                </h2>
            </div>

            <div class="grid md:grid-cols-3 lg:gap-10 ma:gap-6 gap-4">

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i class="fa-solid fa-globe text-3xl text-green-700 mb-3 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl">Unrivaled Global Reach</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">
                        Connect with audiences in 180+ countries through the direct carrier connections of your SMS API
                        service provider.
                    </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i class="fa-solid fa-bolt text-3xl text-green-700 mb-3 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl">Ultra-Fast Delivery</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">
                        Benefit from lightning-fast Transactional SMS Service with low-latency infrastructure designed
                        for massive scale </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i class="fa-solid fa-comments text-3xl text-green-700 mb-3 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl">Two-Way Messaging</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">
                        Go beyond one-way broadcasting and enable interactive customer support with automated two-way
                        SMS messaging.
                    </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i class="fa-solid fa-person text-3xl text-green-700 mb-3 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl">Dynamic Personalization</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">
                        Boost engagement by tailoring every interaction with names and unique offers using our
                        Programmable Messaging tools.
                    </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i class="fa-solid fa-bell text-3xl text-green-700 mb-3 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl">Event-Driven Notifications</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">
                        Trigger real-time alerts for appointments, shipping updates, and account activity automatically.
                    </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i class="fa-solid fa-shield-halved text-3xl text-green-700 mb-3 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl">OTP & Verification</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">
                        High-Priority Auth: Secure your platform with instant OTP SMS API delivery, optimized for 2FA
                        and user verification.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ===================== Benefits ===================== -->
    <section class="lg:py-20 md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12">

            <div class="flex flex-col justify-center">
                <p class="text-sm text-[#4eb86a] font-semibold mb-2">Benefits</p>
                <h2 class="md:text-4xl sm:text-3xl text-2xl font-bold leading-snug mb-4">
                    Maximize Your ROI with Our Bulk SMS Gateway India
                </h2>

                <p class="text-gray-600 mb-8">
                    Unlock reliable, secure, and high-speed messaging to enhance customer engagement and automate
                    critical notifications.
                </p>

                <a href="{{ url('pricing-web') }}"
                    class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white font-semibold px-6 py-3 rounded-lg flex items-center gap-2 w-fit">
                    View SMS Pricing
                    <span class="text-xl">→</span>
                </a>
            </div>

            <div class="grid sm:grid-cols-2 md:gap-6 gap-4">

                <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fa-solid fa-bolt text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl"></i>
                    <h4 class="font-semibold text-lg mb-2">Instant Delivery</h4>
                    <p class="text-gray-600 text-sm">
                        Beat the clock and deliver time-sensitive OTP SMS API alerts within seconds to ensure user
                        retention.
                    </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl md:mt-5 mt-0 hover:border-green-700">
                    <i class="fa-solid fa-chart-line text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl"></i>
                    <h4 class="font-semibold text-lg mb-2">98% Open Rates</h4>
                    <p class="text-gray-600 text-sm">
                        Unlike email, our Text Messaging API ensures your promotional messages are actually seen,
                        offering the power of a direct marketing channel.
                    </p>
                </div>

                <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fa-solid fa-shield text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl"></i>
                    <h4 class="font-semibold text-lg mb-2">Encrypted & Secure</h4>
                    <p class="text-gray-600 text-sm"> Protect your data with secure API protocols and DLT-compliant
                        routing for total peace of mind.

                    </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl md:mt-3 mt-0 hover:border-green-700">
                    <i class="fa-solid fa-bullhorn text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl"></i>
                    <h4 class="font-semibold text-lg mb-2">Drive Conversions</h4>
                    <p class="text-gray-600 text-sm">
                        Turn notifications into revenue with targeted Promotional SMS API campaigns that increase sales
                        instantly.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- How It Works Section -->
    <section class="md:py-20 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Heading -->
            <div class="text-center mb-14">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">How It
                    Works</span>
                <h2 class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                    How to Integrate Your SMS API Service Provider in 5 Simple Steps

                </h2>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-1/2 w-0.5 bg-gray-200 hidden md:block transform -translate-x-1/2">
                </div>

                <ul class="space-y-4">

                    <li class="relative md:flex items-start md:justify-start">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            01
                        </div>

                        <div
                            class="group bg-service-1 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Rapid Integration
                            </h4>
                            <p class="text-gray-600"> Access our clean RESTful API documentation to connect Textora with
                                Python, PHP, or Node.js in minutes.</p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-end">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            02
                        </div>

                        <div
                            class="group bg-service-2 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Craft Your Campaign</h4>
                            <p class="text-gray-600"> Use our dashboard to create personalized, DLT-approved templates
                                for any A2P messaging use case.</p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-start">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            03
                        </div>

                        <div
                            class="group bg-service-3 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Launch & Scale
                            </h4>
                            <p class="text-gray-600"> Send millions of messages globally or receive customer replies
                                through our robust SMS Portal.</p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-end">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            04
                        </div>

                        <div
                            class="group bg-service-4 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Automation & Scheduling </h4>
                            <p class="text-gray-600"> Set up recurring triggers or schedule marketing bursts to reach
                                customers at the perfect moment.
                            </p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-start">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            05
                        </div>

                        <div
                            class="group bg-service-5 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Advanced Analytics</h4>
                            <p class="text-gray-600"> Monitor delivery rates and engagement metrics through our
                                real-time SMS delivery reports.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>

    <!-- ===================== INDUSTRIES ===================== -->
    <section class="lg:py-20 md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto md:mb-16 mb-10">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">Industry</span>
                <h2 class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                    Custom Bulk SMS API Solutions for Every Sector

                </h2>

            </div>

            <!-- Grid : 3 x 2 -->
            <div class="grid md:grid-cols-3 gap-4">

                <!-- E-commerce & Retail -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-cart-shopping md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">E-commerce & Retail</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Automate your order confirmations, abandoned cart reminders, and flash sale alerts.
                    </p>
                </div>

                <!-- Healthcare -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-heart-pulse md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Healthcare</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Reduce no-shows with automated appointment reminders and secure Transactional SMS Service
                        updates.
                    </p>
                </div>

                <!-- Education -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-graduation-cap md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Education</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Keep parents and students informed with instant fee reminders, exam results, and emergency
                        alerts.

                    </p>
                </div>

                <!-- Banking & Finance -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-landmark md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2"> Fintech & Banking</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Deliver secure OTP for verification, transaction alerts, and fraud notifications instantly.

                    </p>
                </div>

                <!-- Events & Hospitality -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-house md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Travel & Hospitality</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Send booking confirmations and digital check-in links seamlessly via our Cloud Communications
                        Platform.

                    </p>
                </div>

                <!-- Customer Support -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-headset md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Customer Support</h3>
                    <p class="text-gray-600 group-hover:text-white"> Resolution is just a text away using our Automated
                        Texting Solution for two-way messaging. </p>
                </div>

            </div>
        </div>
    </section>


    {{-- WHY CHOOSE US --}}
    <section class="lg:py-20 md:py-16 py-10 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <p class="text-sm font-semibold tracking-widest text-green-700 uppercase text-center mb-2">
                WHY CHOOSE US
            </p>
            <h2
                class="md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 text-center max-w-4xl mx-auto mb-16">
                The SMS API Service Provider Your Business Can Trust

            </h2>

            <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6 text-center">

                <div class="group bg-service-1 lg:p-6 p-4 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">

                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-paper-plane text-2xl text-green-700"></i>
                        </div>
                    </div>

                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Direct Carrier Routing</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600"> We cut out the middleman to ensure higher delivery ratios and lower costs
                        for your business.
                    </p>
                </div>

                <div class="group bg-service-2 lg:p-6 p-4 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-globe text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Scalable Cloud Platform</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600"> Whether you send 100 or 100 million messages, our infrastructure scales
                        effortlessly with your growth.

                    </p>
                </div>

                <div class="group bg-service-3 lg:p-6 p-4 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-plug text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Developer-First Support</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600"> Get 24/7 technical assistance from engineers who understand your code and
                        your business goals.
                    </p>
                </div>

                <div class="group bg-service-4 lg:p-6 p-4 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-chart-line text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">DLT Compliance Help</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600"> We guide you through the Sender ID whitelisting process to ensure your
                        templates are approved fast.
                    </p>
                </div>



            </div>
        </div>
    </section>


    {{-- cta section --}}
    <section class="relative w-full lg:py-20 md:py-10 py-6 overflow-hidden comn-cta-section">

        <!-- Background overlay icons (optional) -->
        <div class="absolute inset-0 opacity-20">
            <img src="your-background-image.png" alt="SMS Gateway Provider" class="w-full h-full object-cover">
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-4xl mx-auto text-center px-5">
            <h2 class="text-white md:lg:text-4xl md:text-3xl text-2xl font-semibold mb-4">
                Ready to Upgrade Your OTP Delivery System?
            </h2>

            <p class="text-white text-lg md:text-xl mb-8">
                Deliver Fast, Secure & Reliable OTPs with Our High-Priority OTP API Platform
            </p>

            <button id="ctaBtn" onclick="openModall()" class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] transition md:px-10 px-4 md:py-4 py-2 
                   text-white font-semibold text-lg rounded shadow-lg">
                Request A Free Demo
            </button>
        </div>
    </section>

    <!-- ===================== FAQ ===================== -->
    <section class="lg:py-20 md:py-10 py-6 bg-white">
        <div class="w-full md:max-w-6xl mx-auto px-6">
            <h2 class="lg:text-4xl md:text-3xl text-2xl font-bold text-center md:mb-16 mb-6">Frequently Asked Questions
                for Your SMS API Service Provider
            </h2>
            <div class="grid grid-cols-12 lg:gap-10 ma:gap-6 gap-4">
                <div class="col-span-12 mb-10 md:mb-0">
                    <div class="space-y-4">

                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(1)"
                                class="w-full flex text-lg justify-between items-center py-5 text-slate-800">
                                <span class="text-left">What is the OTP API used for?
                                </span>
                                <span id="icon-1" class="text-slate-800">+</span>
                            </button>
                            <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    It is used for Two-Factor Authentication (2FA), secure account logins, and verifying
                                    high-value transactions.

                                </div>
                            </div>
                        </div>

                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(2)"
                                class="w-full flex text-lg justify-between items-center py-5 text-slate-800">
                                <span class="text-left">How fast are OTPs delivered?</span>
                                <span id="icon-2" class="text-slate-800">+</span>
                            </button>
                            <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    Our high-priority routes deliver OTPs within 5–10 seconds globally via our OTP
                                    Gateway.
                                </div>
                            </div>
                        </div>

                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(3)"
                                class="w-full flex text-lg justify-between items-center py-5 text-slate-800">
                                <span class="text-left">Can I integrate the API with my existing software?
                                </span>
                                <span id="icon-3" class="text-slate-800">+</span>
                            </button>
                            <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    Yes, Textora offers easy-to-use SDKs and REST APIs that integrate with any modern
                                    CRM or web application.
                                </div>
                            </div>
                        </div>

                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(4)"
                                class="w-full flex text-lg justify-between items-center py-5 text-slate-800">
                                <span class="text-left">Does Textora support DLT registration in India?</span>
                                <span id="icon-4" class="text-slate-800">+</span>
                            </button>
                            <div id="content-4" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    Absolutely. As a leading SMS API Service Provider, we provide end-to-end assistance
                                    for DLT and template registration.
                                </div>
                            </div>
                        </div>
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(5)"
                                class="w-full flex text-lg justify-between items-center py-5 text-slate-800">
                                <span class="text-left">How do you ensure high delivery rates for marketing campaigns?
                                </span>
                                <span id="icon-5" class="text-slate-800">+</span>
                            </button>
                            <div id="content-5" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    We use direct carrier routing and intelligent retry logic so your promotional SMS
                                    API campaigns bypass congestion and land in the inbox instantly.

                                </div>
                            </div>
                        </div>
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(6)"
                                class="w-full flex text-lg justify-between items-center py-5 text-slate-800">
                                <span class="text-left">Can you handle sudden spikes in message volume?</span>
                                <span id="icon-6" class="text-slate-800">+</span>
                            </button>
                            <div id="content-6" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    Yes, our Cloud Communications Platform scales effortlessly, allowing your A2P
                                    Messaging to handle millions of texts without compromising speed.

                                </div>
                            </div>
                        </div>
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(7)"
                                class="w-full flex text-lg justify-between items-center py-5 text-slate-800">
                                <span class="text-left">What technical support is offered during integration?
                                </span>
                                <span id="icon-7" class="text-slate-800">+</span>
                            </button>
                            <div id="content-7" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    Our engineers provide 24/7 assistance with RESTful API documentation to ensure your
                                    automated texting solution is live and functional in record time.


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <script>
        function toggleAccordion(index) {
            const content = document.getElementById(`content-${index}`);
            const icon = document.getElementById(`icon-${index}`);

            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0px';
                icon.textContent = '+';
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.textContent = '-';
            }
        }
    </script>
</x-master-page>