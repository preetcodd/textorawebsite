<x-master-page 
    title="Best Bulk SMS Service Provider in India | WhatsApp Business API | Textora SMS"
    description="Textora SMS is India's trusted Bulk SMS Service Provider offering WhatsApp Business API, OTP SMS, SMS API, RCS Messaging, Voice SMS and business communication solutions."
    :isAdmin="$isAdmin">
    @push('head-scripts')
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "ProfessionalService",
          "name": "Textora SMS",
          "alternateName": "Textora Technologies Pvt. Ltd.",
          "image": "https://www.textorasms.com/images/home-services-img.png",
          "@id": "https://www.textorasms.com/#organization",
          "url": "https://www.textorasms.com/",
          "logo": "https://www.textorasms.com/images/textota-logo.png",
          "telephone": "+919187054466",
          
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "5A, 1st cross road, Dollar scheme colony, 1st stage, BTM Layout",
            "addressLocality": "Bengaluru",
            "addressRegion": "Karnataka",
            "postalCode": "560068",
            "addressCountry": "IN"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 12.9171,
            "longitude": 77.6225
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+919187054466",
            "contactType": "customer service",
            "areaServed": "IN",
            "availableLanguage": ["en", "Hindi"]
          },
          "email": "support@textorasms.com",
          "sameAs": [
            "https://www.facebook.com/profile.php?id=61584312038555",
            "https://www.linkedin.com/company/textora-technologies-pvt-ltd/",
            "https://www.instagram.com/textoratech/"
          ]
        }
        </script>

        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "name": "Textora SMS",
          "url": "https://www.textorasms.com/",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://www.textorasms.com/?s={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
        </script>

        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "ImageObject",
          "contentUrl": "https://www.textorasms.com/images/home-services-img.png",
          "license": "https://www.textorasms.com/terms-conditions",
          "acquireLicensePage": "https://www.textorasms.com/contact-us",
          "creditText": "Textora Technologies Pvt. Ltd.",
          "creator": {
            "@type": "Organization",
            "name": "Textora SMS"
          },
          "copyrightNotice": "Textora Technologies"
        }
        </script>

        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "SoftwareApplication",
          "name": "Textora SMS Dashboard",
          "operatingSystem": "Web-based",
          "applicationCategory": "BusinessApplication",
          "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "INR"
          },
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5",
            "ratingCount": "2"
          }
        }
        </script>
    @endpush
    @php
        function activeNav($path)
        {
            return Request::path() === $path ? 'text-green-700 font-semibold' : 'text-gray-700';
        }
    @endphp
<!-- =========================================================
     TEXTORA PREMIUM SAAS HERO
     Responsive • Mobile Optimized • Integrated Hero Image
     Image: public/images/allservice.png

     ORDER:
     Badge
     Heading
     Services
     Description
     Buttons
     Hero Image
     Trust Bar
========================================================= -->

<section
    id="hero"
    class="relative isolate overflow-hidden bg-white"
    aria-labelledby="hero-heading"
>

    <!-- =====================================================
         PREMIUM BACKGROUND
    ====================================================== -->

    <div
        class="pointer-events-none absolute inset-0 -z-20 overflow-hidden"
        aria-hidden="true"
    >

        <!-- Main Gradient -->
        <div
            class="absolute inset-0
                   bg-gradient-to-br
                   from-[#f3fff7]
                   via-white
                   to-[#ecfff4]"
        ></div>

        <!-- Top Right Glow -->
        <div
            class="absolute
                   -right-52
                   -top-52
                   h-[600px]
                   w-[600px]
                   rounded-full
                   bg-green-400/15
                   blur-[160px]"
        ></div>

        <!-- Bottom Left Glow -->
        <div
            class="absolute
                   -bottom-56
                   -left-52
                   h-[600px]
                   w-[600px]
                   rounded-full
                   bg-emerald-300/15
                   blur-[160px]"
        ></div>

        <!-- Center Glow -->
        <div
            class="absolute
                   left-1/2
                   top-1/2
                   h-[800px]
                   w-[800px]
                   -translate-x-1/2
                   -translate-y-1/2
                   rounded-full
                   bg-green-200/10
                   blur-[200px]"
        ></div>

        <!-- Premium Grid -->
        <div
            class="absolute inset-0 opacity-[0.025]"
            style="
                background-image:
                    linear-gradient(rgba(22,163,74,.25) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(22,163,74,.25) 1px, transparent 1px);
                background-size:70px 70px;
            "
        ></div>

    </div>


    <!-- =====================================================
         FLOATING GLOWS
    ====================================================== -->

    <div
        class="pointer-events-none absolute
               left-10
               top-24
               h-24
               w-24
               rounded-full
               bg-green-300/20
               blur-3xl"
        aria-hidden="true"
    ></div>

    <div
        class="pointer-events-none absolute
               bottom-20
               right-10
               h-32
               w-32
               rounded-full
               bg-emerald-300/20
               blur-3xl"
        aria-hidden="true"
    ></div>


    <!-- =====================================================
         MAIN CONTAINER
    ====================================================== -->

    <div
        class="relative z-10
               mx-auto
               max-w-7xl
               px-4
               sm:px-6
               lg:px-8"
    >

        <!-- =================================================
             HERO CONTENT
        ================================================== -->

        <div
            class="mx-auto
                   max-w-5xl
                   pt-10
                   text-center

                   sm:pt-14

                   md:pt-16

                   lg:pt-20"
        >


            <!-- =================================================
                 BADGE
            ================================================== -->

            <div
                class="mb-6
                       inline-flex
                       max-w-full
                       items-center
                       gap-2.5
                       rounded-full
                       border
                       border-green-200
                       bg-white/80
                       px-4
                       py-2
                       shadow-[0_8px_30px_rgba(34,197,94,.10)]
                       backdrop-blur-xl

                       sm:mb-7
                       sm:px-5
                       sm:py-2.5"
            >

                <span
                    class="relative
                           flex
                           h-2.5
                           w-2.5
                           shrink-0"
                >

                    <span
                        class="absolute
                               inline-flex
                               h-full
                               w-full
                               animate-ping
                               rounded-full
                               bg-green-400
                               opacity-75"
                    ></span>

                    <span
                        class="relative
                               inline-flex
                               h-2.5
                               w-2.5
                               rounded-full
                               bg-green-500"
                    ></span>

                </span>

                <span
                    class="text-[11px]
                           font-semibold
                           leading-4
                           text-green-800

                           sm:text-sm"
                >
                    India's Trusted Business Communication Platform
                </span>

            </div>


            <!-- =================================================
                 HEADING
            ================================================== -->

            <h1
                id="hero-heading"
                class="mx-auto
                       max-w-5xl
                       text-[38px]
                       font-black
                       leading-[1.04]
                       tracking-[-0.045em]
                       text-gray-950

                       sm:text-5xl

                       md:text-6xl

                       lg:text-[64px]

                       xl:text-[76px]"
            >

                Grow Smarter with

                <span
                    class="mt-1
                           block
                           bg-gradient-to-r
                           from-green-700
                           via-green-500
                           to-emerald-400
                           bg-clip-text
                           text-transparent"
                >
                    Digital Business Solutions
                </span>

            </h1>


            <!-- =================================================
                 SERVICES
            ================================================== -->

            <h2
                class="mx-auto
                       mt-5
                       max-w-4xl
                       text-base
                       font-semibold
                       leading-7
                       text-gray-700

                       sm:mt-6
                       sm:text-lg
                       sm:leading-8

                       lg:text-xl"
            >

                WhatsApp Business API
                <span class="mx-1 text-green-500">•</span>

                Bulk SMS
                <span class="mx-1 text-green-500">•</span>

                RCS Messaging

                <br class="hidden sm:block">

                Website Development
                <span class="mx-1 text-green-500">•</span>

                Software Development

            </h2>


            <!-- =================================================
                 DESCRIPTION
            ================================================== -->

            <p
                class="mx-auto
                       mt-5
                       max-w-3xl
                       text-sm
                       leading-7
                       text-gray-600

                       sm:mt-6
                       sm:text-base
                       sm:leading-8

                       lg:text-lg"
            >

                Empower your business with enterprise messaging,
                responsive websites, and scalable software solutions.
                Textora Technologies helps businesses automate
                communication, generate more leads, and accelerate growth
                with WhatsApp Business API, Bulk SMS, RCS Messaging,
                Email Marketing, Website Development, and Custom Software.

            </p>


            <!-- =================================================
                 CTA BUTTONS
            ================================================== -->

            <div
                class="mt-7
                       flex
                       flex-col
                       gap-3

                       sm:mt-9
                       sm:flex-row
                       sm:justify-center
                       sm:gap-4"
            >

                <!-- Primary CTA -->

                <a
                    href="{{ url('pricing-web') }}"
                    class="group
                           inline-flex
                           min-h-[52px]
                           w-full
                           items-center
                           justify-center
                           gap-3
                           rounded-xl
                           bg-gradient-to-r
                           from-green-600
                           via-green-500
                           to-emerald-500
                           px-7
                           py-3.5
                           text-sm
                           font-bold
                           text-white
                           shadow-[0_20px_40px_rgba(34,197,94,.30)]
                           transition-all
                           duration-300
                           hover:-translate-y-1
                           hover:shadow-[0_30px_60px_rgba(34,197,94,.40)]
                           focus:outline-none
                           focus:ring-4
                           focus:ring-green-500/20

                           sm:w-auto
                           sm:min-w-[210px]
                           sm:px-8
                           sm:text-base"
                >

                    Explore Solutions

                    <i
                        class="fas
                               fa-arrow-right
                               transition-transform
                               duration-300
                               group-hover:translate-x-1"
                        aria-hidden="true"
                    ></i>

                </a>


                <!-- Secondary CTA -->

                <button
                    type="button"
                    onclick="openModall()"
                    class="inline-flex
                           min-h-[52px]
                           w-full
                           items-center
                           justify-center
                           rounded-xl
                           border-2
                           border-green-600
                           bg-white
                           px-7
                           py-3.5
                           text-sm
                           font-bold
                           text-green-700
                           transition-all
                           duration-300
                           hover:-translate-y-1
                           hover:bg-green-600
                           hover:text-white
                           hover:shadow-xl
                           focus:outline-none
                           focus:ring-4
                           focus:ring-green-500/20

                           sm:w-auto
                           sm:min-w-[210px]
                           sm:px-8
                           sm:text-base"
                >

                    Book Free Demo

                </button>

            </div>


            <!-- =================================================
                 HERO IMAGE
                 IMAGE IS NOW BEFORE TRUST BAR
            ================================================== -->

            <div
                class="relative
                       mx-auto
                       mt-8
                       w-full
                       overflow-visible

                       sm:mt-10

                       md:mt-12

                       lg:mt-14"
            >

                <!-- Integrated Image Glow -->

                <div
                    class="pointer-events-none
                           absolute
                           left-1/2
                           top-1/2
                           -z-10
                           h-[180px]
                           w-[80%]
                           -translate-x-1/2
                           -translate-y-1/2
                           rounded-full
                           bg-emerald-300/15
                           blur-[70px]

                           sm:h-[260px]
                           sm:w-[70%]
                           sm:blur-[90px]

                           lg:h-[380px]
                           lg:w-[65%]
                           lg:blur-[120px]"
                    aria-hidden="true"
                ></div>


                <!-- Image -->

                <div
                    class="relative
                           mx-auto
                           flex
                           w-full
                           items-end
                           justify-center
                           overflow-visible"
                >

                    <img
                        src="{{ asset('images/allservice.png') }}"
                        alt="Textora business communication and digital services"
                        width="1536"
                        height="1024"
                        loading="eager"
                        fetchpriority="high"
                        decoding="async"
                        class="
                            block
                            h-auto
                            w-full
                            max-w-[500px]
                            object-contain
                            drop-shadow-[0_25px_55px_rgba(0,0,0,.13)]

                            sm:max-w-[680px]

                            md:max-w-[850px]

                            lg:max-w-[1050px]

                            xl:max-w-[1200px]
                        "
                    >

                </div>

            </div>


            <!-- =================================================
                 TRUST BAR
                 NOW BELOW IMAGE
            ================================================== -->

            <div
                class="mt-4
                       pb-10

                       sm:mt-5
                       sm:pb-14

                       lg:mt-6
                       lg:pb-20"
            >

                <div
                    class="grid
                           grid-cols-2
                           overflow-hidden
                           rounded-2xl
                           border
                           border-white/70
                           bg-white/70
                           shadow-[0_10px_35px_rgba(34,197,94,.10)]
                           backdrop-blur-xl

                           sm:grid-cols-4"
                >


                    <!-- =================================================
                         META API
                    ================================================== -->

                    <div
                        class="flex
                               min-w-0
                               items-center
                               gap-2
                               border-b
                               border-gray-100
                               px-3
                               py-4

                               sm:border-b-0
                               sm:px-4"
                    >

                        <div
                            class="flex
                                   h-9
                                   w-9
                                   shrink-0
                                   items-center
                                   justify-center
                                   rounded-xl
                                   bg-green-500/10"
                        >

                            <i
                                class="fab fa-whatsapp
                                       text-lg
                                       text-green-600"
                                aria-hidden="true"
                            ></i>

                        </div>

                        <span
                            class="text-[11px]
                                   font-semibold
                                   leading-4
                                   text-gray-800

                                   sm:text-sm"
                        >
                            Official Meta API
                        </span>

                    </div>


                    <!-- =================================================
                         DELIVERY
                    ================================================== -->

                    <div
                        class="flex
                               min-w-0
                               items-center
                               gap-2
                               border-b
                               border-gray-100
                               px-3
                               py-4

                               sm:border-b-0
                               sm:px-4"
                    >

                        <div
                            class="flex
                                   h-9
                                   w-9
                                   shrink-0
                                   items-center
                                   justify-center
                                   rounded-xl
                                   bg-blue-500/10"
                        >

                            <i
                                class="fas fa-paper-plane
                                       text-sm
                                       text-blue-600"
                                aria-hidden="true"
                            ></i>

                        </div>

                        <span
                            class="text-[11px]
                                   font-semibold
                                   leading-4
                                   text-gray-800

                                   sm:text-sm"
                        >
                            99.9% Delivery
                        </span>

                    </div>


                    <!-- =================================================
                         SECURITY
                    ================================================== -->

                    <div
                        class="flex
                               min-w-0
                               items-center
                               gap-2
                               px-3
                               py-4

                               sm:px-4"
                    >

                        <div
                            class="flex
                                   h-9
                                   w-9
                                   shrink-0
                                   items-center
                                   justify-center
                                   rounded-xl
                                   bg-emerald-500/10"
                        >

                            <i
                                class="fas fa-shield-alt
                                       text-sm
                                       text-emerald-600"
                                aria-hidden="true"
                            ></i>

                        </div>

                        <span
                            class="text-[11px]
                                   font-semibold
                                   leading-4
                                   text-gray-800

                                   sm:text-sm"
                        >
                            Enterprise Security
                        </span>

                    </div>


                    <!-- =================================================
                         SUPPORT
                    ================================================== -->

                    <div
                        class="flex
                               min-w-0
                               items-center
                               gap-2
                               px-3
                               py-4

                               sm:px-4"
                    >

                        <div
                            class="flex
                                   h-9
                                   w-9
                                   shrink-0
                                   items-center
                                   justify-center
                                   rounded-xl
                                   bg-orange-500/10"
                        >

                            <i
                                class="fas fa-headset
                                       text-sm
                                       text-orange-500"
                                aria-hidden="true"
                            ></i>

                        </div>

                        <span
                            class="text-[11px]
                                   font-semibold
                                   leading-4
                                   text-gray-800

                                   sm:text-sm"
                        >
                            24×7 Support
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- =====================================================
         BOTTOM FADE
    ====================================================== -->

    <div
        class="pointer-events-none
               absolute
               bottom-0
               left-0
               right-0
               h-12
               bg-gradient-to-t
               from-[#eafff4]/50
               to-transparent"
        aria-hidden="true"
    ></div>

</section>
{{-- about section --}}
        <div class="lg:py-32 md:py-16 py-8 bg-gradient-to-b from-gray-50 to-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="grid lg:grid-cols-2 gap-16 items-center">

                    <!-- Image Section -->
                    <div class="relative order-2 lg:order-1">
                        <div class="absolute inset-0 bg-[#049a3d]/10 rounded-3xl -rotate-2"></div>
                        <img src="{{ asset('images/about.jpg') }}" alt="About Textora SMS"
                            class="relative w-full h-full rounded-3xl shadow-xl object-cover">
                    </div>

                    <!-- Content Section -->
                    <div class="order-1 lg:order-2">
                        <span
                            class="inline-flex items-center gap-2 text-[#049a3d] font-semibold tracking-widest uppercase text-xs mb-4">
                            <span class="w-8 h-[2px] bg-[#049a3d]"></span>
                            About Us
                        </span>

                        <h2 class="text-3xl sm:text-4xl xl:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
                            The Team Behind India’s<br>
                            Most Reliable SMS Gateway
                        </h2>

                        <p class="text-gray-700 text-base sm:text-lg leading-relaxed mb-5">
                            Textora SMS was founded on a simple mission: to bridge the gap between businesses
                            and their customers through reliable, transparent, and affordable bulk SMS services
                            without compromising quality. As a leading Bulk Message Service Provider, we handle
                            over 10 million messages daily.
                        </p>

                        <p class="text-gray-700 text-base sm:text-lg leading-relaxed mb-8">
                            We aren’t just a vendor—we are your DLT Registration Service partner and communication
                            strategist. Our 24/7 support team ensures seamless Business SMS Solutions with
                            a proven 99.9% uptime record.
                        </p>

                        <!-- CTA Button -->
                        <a href="{{ url('/about-us') }}" class="inline-flex items-center gap-3 bg-[#049a3d] text-white px-7 py-3.5 rounded-lg font-semibold
                          hover:bg-[#037f32] transition duration-300 shadow-md">
                            Learn More About Our Journey
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
{{-- =========================================
    TRUSTED PARTNERS
========================================= --}}

<section class="py-12 lg:py-14 bg-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->

        <div class="text-center max-w-2xl mx-auto mb-8"
             data-aos="fade-up"
             data-aos-duration="1000">

            <span
                class="inline-flex items-center px-4 py-2 rounded-full bg-green-50 border border-green-100 text-[#049A3D] text-xs font-semibold uppercase tracking-wider">

                OUR TRUSTED PARTNERS

            </span>

            <h2 class="mt-4 text-3xl lg:text-4xl font-extrabold text-gray-900 leading-tight">

                Trusted by Businesses

                <span class="text-[#049A3D]">
                    Across Industries
                </span>

            </h2>

            <p class="mt-3 text-gray-500 text-lg">

                Organizations trust Textora Technologies for secure, scalable and reliable business communication.

            </p>

        </div>

        <!-- Logo Slider -->
<!-- Logo Slider -->
<div class="logo-slider w-full overflow-hidden"
     data-aos="fade-up"
     data-aos-duration="1500">

    <div class="logo-track">

        

                <!-- Logos -->

                <img src="/images/client-logo/btm.png" class="client-logo" alt="BTM">

                <img src="/images/client-logo/jablipuram.png" class="client-logo" alt="Jablipuram">

                <img src="/images/client-logo/dexam.png" class="client-logo logo-xxl" alt="DEXAM">

                <img src="/images/client-logo/reliable.png" class="client-logo logo-xxl" alt="Reliable">

                <img src="/images/client-logo/tax.png" class="client-logo" alt="Tax">

                <img src="/images/client-logo/surabhi.png" class="client-logo logo-xxl" alt="Surabhi">

                <img src="/images/client-logo/sahyogi.png" class="client-logo" alt="Sahyogi">

                <img src="/images/client-logo/aimt.png" class="client-logo logo-xxl" alt="AIMT">

                <img src="/images/client-logo/arihant.png" class="client-logo" alt="Arihant">

                <img src="/images/client-logo/shreeji.png" class="client-logo" alt="Shreeji">

                <img src="/images/client-logo/parkway.png" class="client-logo" alt="Parkway">

                <img src="/images/client-logo/rapiddrop.png" class="client-logo" alt="RapidDrop">

                <!-- Duplicate -->

                <img src="/images/client-logo/btm.png" class="client-logo" alt="BTM">

                <img src="/images/client-logo/jablipuram.png" class="client-logo" alt="Jablipuram">

                <img src="/images/client-logo/dexam.png" class="client-logo logo-xxl" alt="DEXAM">

                <img src="/images/client-logo/reliable.png" class="client-logo logo-xxl" alt="Reliable">

                <img src="/images/client-logo/tax.png" class="client-logo" alt="Tax">

                <img src="/images/client-logo/surabhi.png" class="client-logo logo-xxl" alt="Surabhi">

                <img src="/images/client-logo/sahyogi.png" class="client-logo" alt="Sahyogi">

                <img src="/images/client-logo/aimt.png" class="client-logo logo-xxl" alt="AIMT">

                <img src="/images/client-logo/arihant.png" class="client-logo" alt="Arihant">

                <img src="/images/client-logo/shreeji.png" class="client-logo" alt="Shreeji">

                <img src="/images/client-logo/parkway.png" class="client-logo" alt="Parkway">

                <img src="/images/client-logo/rapiddrop.png" class="client-logo" alt="RapidDrop">

            </div>

        </div>

    </div>

</section>
<!-- ==========================================
WHY CHOOSE TEXTORA
========================================== -->

<section class="py-20 bg-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid lg:grid-cols-7 gap-6 items-start">

            <!-- Left Content -->

            <div class="lg:col-span-2">

                <span
                    class="inline-flex items-center rounded-full bg-green-100 px-4 py-2 text-sm font-semibold text-[#049A3D]">

                    WHY CHOOSE TEXTORA?

                </span>

                <h2 class="mt-6 text-4xl lg:text-5xl font-extrabold text-gray-900 leading-tight">

                    Reliable.
                    <br>
                    Secure.
                    <br>
                    Scalable.

                </h2>

                <p class="mt-6 text-gray-600 leading-8">

                    We combine enterprise-grade messaging infrastructure with
                    WhatsApp Business API, Bulk SMS, RCS Messaging,
                    Email Marketing and Voice Solutions to help businesses
                    communicate faster, smarter and more securely.

                </p>

                <a href="{{ url('/about-us') }}"
                    class="inline-flex items-center gap-2 mt-8 rounded-xl bg-[#049A3D] px-6 py-3 font-semibold text-white hover:bg-green-700 transition duration-300 shadow-lg">

                    Learn More

                    <i class="fas fa-arrow-right"></i>

                </a>

            </div>

            <!-- Right Cards -->

            <div class="lg:col-span-5">

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                    <!-- =========================
CARD 1
========================= -->

<div class="group rounded-3xl border border-gray-200 bg-white p-7 transition-all duration-300 hover:-translate-y-2 hover:border-[#049A3D] hover:shadow-xl">

    <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center mb-5 group-hover:bg-[#049A3D] transition">

        <i class="fas fa-paper-plane text-[#049A3D] group-hover:text-white text-xl"></i>

    </div>

    <h3 class="text-lg font-bold text-gray-900 leading-6">

        High Delivery
        <br>
        Rates

    </h3>

    <p class="mt-3 text-sm text-gray-500 leading-6">

        Industry-leading infrastructure ensures fast and reliable message delivery.

    </p>

</div>


<!-- =========================
CARD 2
========================= -->

<div class="group rounded-3xl border border-gray-200 bg-white p-7 transition-all duration-300 hover:-translate-y-2 hover:border-[#049A3D] hover:shadow-xl">

    <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center mb-5 group-hover:bg-[#049A3D] transition">

        <i class="fas fa-shield-alt text-[#049A3D] group-hover:text-white text-xl"></i>

    </div>

    <h3 class="text-lg font-bold text-gray-900 leading-6">

        Enterprise
        <br>
        Security

    </h3>

    <p class="mt-3 text-sm text-gray-500 leading-6">

        Advanced security and compliance to protect your communication.

    </p>

</div>


<!-- =========================
CARD 3
========================= -->

<div class="group rounded-3xl border border-gray-200 bg-white p-7 transition-all duration-300 hover:-translate-y-2 hover:border-[#049A3D] hover:shadow-xl">

    <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center mb-5 group-hover:bg-[#049A3D] transition">

        <i class="fas fa-code text-[#049A3D] group-hover:text-white text-xl"></i>

    </div>

    <h3 class="text-lg font-bold text-gray-900 leading-6">

        Easy API
        <br>
        Integration

    </h3>

    <p class="mt-3 text-sm text-gray-500 leading-6">

        Developer-friendly APIs for quick integration and automation.

    </p>

</div>
<!-- =========================
CARD 4
========================= -->

<div class="group rounded-3xl border border-gray-200 bg-white p-7 transition-all duration-300 hover:-translate-y-2 hover:border-[#049A3D] hover:shadow-xl">

    <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center mb-5 group-hover:bg-[#049A3D] transition">

        <i class="fas fa-chart-line text-[#049A3D] group-hover:text-white text-xl"></i>

    </div>

    <h3 class="text-lg font-bold text-gray-900 leading-6">

        Real-Time
        <br>
        Analytics

    </h3>

    <p class="mt-3 text-sm text-gray-500 leading-6">

        Track campaigns, delivery reports and customer engagement with live insights.

    </p>

</div>


<!-- =========================
CARD 5
========================= -->

<div class="group rounded-3xl border border-gray-200 bg-white p-7 transition-all duration-300 hover:-translate-y-2 hover:border-[#049A3D] hover:shadow-xl">

    <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center mb-5 group-hover:bg-[#049A3D] transition">

        <i class="fas fa-file-shield text-[#049A3D] group-hover:text-white text-xl"></i>

    </div>

    <h3 class="text-lg font-bold text-gray-900 leading-6">

        Managed
        <br>
        DLT Support

    </h3>

    <p class="mt-3 text-sm text-gray-500 leading-6">

        Complete DLT registration, template approval and compliance assistance.

    </p>

</div>


<!-- =========================
CARD 6
========================= -->

<div class="group rounded-3xl border border-gray-200 bg-white p-7 transition-all duration-300 hover:-translate-y-2 hover:border-[#049A3D] hover:shadow-xl">

    <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center mb-5 group-hover:bg-[#049A3D] transition">

        <i class="fas fa-headset text-[#049A3D] group-hover:text-white text-xl"></i>

    </div>

    <h3 class="text-lg font-bold text-gray-900 leading-6">

        24×7 Expert
        <br>
        Support

    </h3>

    <p class="mt-3 text-sm text-gray-500 leading-6">

        Dedicated support team available whenever your business needs assistance.

    </p>

</div>

                </div>
            </div>

        </div>

    </div>

</section>

<!-- ==========================================
END WHY CHOOSE SECTION
========================================== -->

    
    <!-- =========================
     SERVICES SECTION
========================= -->
<section class="relative py-20 overflow-hidden bg-gradient-to-b from-[#f8fffb] via-white to-[#f5fff8]">

    <!-- Background Blur -->
    <div class="absolute -top-32 -left-24 w-96 h-96 bg-green-200/30 blur-3xl rounded-full"></div>
    <div class="absolute -bottom-32 -right-24 w-[28rem] h-[28rem] bg-emerald-100/40 blur-3xl rounded-full"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="text-center max-w-3xl mx-auto mb-16">

            <span
                class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-green-50 border border-green-200 text-green-700 font-semibold text-sm">

                <span class="w-2.5 h-2.5 rounded-full bg-green-500 animate-pulse"></span>

                SERVICES OFFERED BY TEXTORA

            </span>

            <h2 class="mt-6 text-4xl md:text-5xl font-bold text-gray-900 leading-tight">

                Powerful Communication Solutions
                <span class="text-green-600">
                    Built For Modern Businesses
                </span>

            </h2>

            <p class="mt-6 text-lg text-gray-600 leading-8">

                From WhatsApp Business API to Bulk SMS, Email Marketing,
                Voice Calls and Custom Software Development —
                everything your business needs under one platform.

            </p>

        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- CARD 1 -->
            <div class="group bg-white rounded-3xl border border-gray-200 p-8 hover:border-green-500 hover:-translate-y-3 hover:shadow-2xl transition duration-500">

                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500 to-green-700 text-white flex items-center justify-center shadow-lg group-hover:rotate-6 transition">

                    <i class="fab fa-whatsapp text-3xl"></i>

                </div>

                <h3 class="mt-7 text-2xl font-bold text-gray-900">

                    WhatsApp Business API

                </h3>

                <p class="mt-5 text-gray-600 leading-8">

                    Connect with customers using official WhatsApp Cloud API,
                    AI chatbots, automation, broadcasts,
                    template messaging and CRM integrations.

                </p>

                <div class="mt-8 pt-6 border-t border-gray-100">

                    <a href="{{ url('/whatsapp-business-api') }}"
                        class="inline-flex items-center gap-2 font-semibold text-green-600 group-hover:gap-4 transition-all">

                        Learn More

                        <i class="fas fa-arrow-right"></i>

                    </a>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="group bg-white rounded-3xl border border-gray-200 p-8 hover:border-green-500 hover:-translate-y-3 hover:shadow-2xl transition duration-500">

                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500 to-green-700 text-white flex items-center justify-center shadow-lg group-hover:rotate-6 transition">

                    <i class="fab fa-whatsapp text-3xl"></i>

                </div>

                <h3 class="mt-7 text-2xl font-bold text-gray-900">

                    Bulk WhatsApp

                </h3>

                <p class="mt-5 text-gray-600 leading-8">

                    Deliver promotional campaigns, images,
                    videos and PDFs instantly with high delivery
                    and anti-block routing.

                </p>

                <div class="mt-8 pt-6 border-t border-gray-100">

                    <a href="{{ url('/bulk-whatsapp') }}"
                        class="inline-flex items-center gap-2 font-semibold text-green-600 group-hover:gap-4 transition-all">

                        Learn More

                        <i class="fas fa-arrow-right"></i>

                    </a>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="group bg-white rounded-3xl border border-gray-200 p-8 hover:border-green-500 hover:-translate-y-3 hover:shadow-2xl transition duration-500">

                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500 to-green-700 text-white flex items-center justify-center shadow-lg group-hover:rotate-6 transition">

                    <i class="fas fa-comment-dots text-3xl"></i>

                </div>

                <h3 class="mt-7 text-2xl font-bold text-gray-900">

                    Bulk SMS

                </h3>

                <p class="mt-5 text-gray-600 leading-8">

                    Promotional, Transactional and OTP SMS
                    with lightning-fast delivery,
                    DLT compliance and enterprise reliability.

                </p>

                <div class="mt-8 pt-6 border-t border-gray-100">

                    <a href="{{ url('/bulk-sms') }}"
                        class="inline-flex items-center gap-2 font-semibold text-green-600 group-hover:gap-4 transition-all">

                        Learn More

                        <i class="fas fa-arrow-right"></i>

                    </a>

                </div>

            </div>
                        <!-- CARD 4 -->
            <div class="group bg-white rounded-3xl border border-gray-200 p-8 hover:border-green-500 hover:-translate-y-3 hover:shadow-2xl transition duration-500">

                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500 to-green-700 text-white flex items-center justify-center shadow-lg group-hover:rotate-6 transition">

                    <i class="fas fa-comments text-3xl"></i>

                </div>

                <h3 class="mt-7 text-2xl font-bold text-gray-900">
                    RCS Messaging
                </h3>

                <p class="mt-5 text-gray-600 leading-8">
                    Deliver interactive business messages with rich cards,
                    carousels, buttons, images and verified branding for
                    an app-like customer experience.
                </p>

                <div class="mt-8 pt-6 border-t border-gray-100">
                    <a href="{{ url('/rcs-messaging') }}"
                        class="inline-flex items-center gap-2 font-semibold text-green-600 group-hover:gap-4 transition-all">
                        Learn More
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

            </div>

            <!-- CARD 5 -->
            <div class="group bg-white rounded-3xl border border-gray-200 p-8 hover:border-green-500 hover:-translate-y-3 hover:shadow-2xl transition duration-500">

                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500 to-green-700 text-white flex items-center justify-center shadow-lg group-hover:rotate-6 transition">

                    <i class="fas fa-phone-volume text-3xl"></i>

                </div>

                <h3 class="mt-7 text-2xl font-bold text-gray-900">
                    Voice Call API
                </h3>

                <p class="mt-5 text-gray-600 leading-8">
                    Automate voice calls, IVR campaigns,
                    reminders, alerts and customer verification
                    with enterprise-grade voice infrastructure.
                </p>

                <div class="mt-8 pt-6 border-t border-gray-100">
                    <a href="{{ url('/voice-call') }}"
                        class="inline-flex items-center gap-2 font-semibold text-green-600 group-hover:gap-4 transition-all">
                        Learn More
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

            </div>

            <!-- CARD 6 -->
            <div class="group bg-white rounded-3xl border border-gray-200 p-8 hover:border-green-500 hover:-translate-y-3 hover:shadow-2xl transition duration-500">

                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500 to-green-700 text-white flex items-center justify-center shadow-lg group-hover:rotate-6 transition">

                    <i class="fas fa-shield-alt text-3xl"></i>

                </div>

                <h3 class="mt-7 text-2xl font-bold text-gray-900">
                    OTP API
                </h3>

                <p class="mt-5 text-gray-600 leading-8">
                    Secure user authentication with
                    high-speed OTP delivery,
                    priority routing and reliable
                    verification across all networks.
                </p>

                <div class="mt-8 pt-6 border-t border-gray-100">
                    <a href="{{ url('/otp-api') }}"
                        class="inline-flex items-center gap-2 font-semibold text-green-600 group-hover:gap-4 transition-all">
                        Learn More
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

            </div>
                        <!-- CARD 7 -->
            <div class="group bg-white rounded-3xl border border-gray-200 p-8 hover:border-green-500 hover:-translate-y-3 hover:shadow-2xl transition duration-500">

                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500 to-green-700 text-white flex items-center justify-center shadow-lg group-hover:rotate-6 transition">

                    <i class="fas fa-envelope text-3xl"></i>

                </div>

                <h3 class="mt-7 text-2xl font-bold text-gray-900">
                    Email Marketing
                </h3>

                <p class="mt-5 text-gray-600 leading-8">
                    Launch professional email campaigns,
                    newsletters and promotional emails with
                    advanced analytics, segmentation and high inbox delivery.
                </p>

                <div class="mt-8 pt-6 border-t border-gray-100">
                    <a href="{{ url('/email-marketing') }}"
                        class="inline-flex items-center gap-2 font-semibold text-green-600 group-hover:gap-4 transition-all">
                        Learn More
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

            </div>

            <!-- CARD 8 -->
            <div class="group bg-white rounded-3xl border border-gray-200 p-8 hover:border-green-500 hover:-translate-y-3 hover:shadow-2xl transition duration-500">

                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500 to-green-700 text-white flex items-center justify-center shadow-lg group-hover:rotate-6 transition">

                    <i class="fas fa-globe text-3xl"></i>

                </div>

                <h3 class="mt-7 text-2xl font-bold text-gray-900">
                    Website Development
                </h3>

                <p class="mt-5 text-gray-600 leading-8">
                    Build lightning-fast business websites,
                    landing pages and enterprise portals
                    optimized for SEO, speed and conversions.
                </p>

                <div class="mt-8 pt-6 border-t border-gray-100">
                    <a href="{{ url('/website-development') }}"
                        class="inline-flex items-center gap-2 font-semibold text-green-600 group-hover:gap-4 transition-all">
                        Learn More
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

            </div>

            <!-- CARD 9 -->
            <div class="group bg-white rounded-3xl border border-gray-200 p-8 hover:border-green-500 hover:-translate-y-3 hover:shadow-2xl transition duration-500">

                <div
                    class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500 to-green-700 text-white flex items-center justify-center shadow-lg group-hover:rotate-6 transition">

                    <i class="fas fa-laptop-code text-3xl"></i>

                </div>

                <h3 class="mt-7 text-2xl font-bold text-gray-900">
                    Software Development
                </h3>

                <p class="mt-5 text-gray-600 leading-8">
                    Develop scalable ERP, CRM, SaaS platforms
                    and custom software solutions tailored to
                    your business workflow and future growth.
                </p>

                <div class="mt-8 pt-6 border-t border-gray-100">
                    <a href="{{ url('/software-development') }}"
                        class="inline-flex items-center gap-2 font-semibold text-green-600 group-hover:gap-4 transition-all">
                        Learn More
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

            </div>

        </div>

    </div>

</section>
      {{-- OUR FEATURES --}}
        <section class="md:py-20 py-6 bg-white">
            <div class="max-w-7xl mx-auto px-6">

                <!-- Heading -->
                <div class="text-center mb-16">
                    <p class="text-green-600 font-semibold tracking-wide">OUR FEATURES</p>
                    <h2 class="text-3xl md:text-4xl font-bold mt-2">Everything You Need in One Platform</h2>
                    <p class="text-gray-600 mt-3">Build, manage, and scale your communication with enterprise-grade
                        tools.
                    </p>
                </div>

                <!-- Grid -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

                    <!-- Feature Box -->
                    <div class="feature-card">
                        <div class="icon-wrap">
                            <i class="fa-solid fa-paper-plane"></i>
                        </div>
                        <h4>High Delivery Rates</h4>
                    </div>

                    <div class="feature-card">
                        <div class="icon-wrap">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <h4>24/7 Customer Support</h4>
                    </div>

                    <div class="feature-card">
                        <div class="icon-wrap">
                            <i class="fa-solid fa-earth-asia"></i>
                        </div>
                        <h4>Pan India Service</h4>
                    </div>

                    <div class="feature-card">
                        <div class="icon-wrap">
                            <i class="fa-solid fa-plug-circle-check"></i>
                        </div>
                        <h4>Easy Integration</h4>
                    </div>

                    <div class="feature-card">
                        <div class="icon-wrap">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h4>Real-time Analytics</h4>
                    </div>

                    <div class="feature-card">
                        <div class="icon-wrap">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h4>Secure Platform</h4>
                    </div>

                    <div class="feature-card">
                        <div class="icon-wrap">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <h4>Website Setup</h4>
                    </div>

                    <div class="feature-card">
                        <div class="icon-wrap">
                            <i class="fa-solid fa-network-wired"></i>
                        </div>
                        <h4>Multi-Operator Service</h4>
                    </div>

                  
                    <div class="feature-card">
                        <div class="icon-wrap">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <h4>Blue Tick Provider</h4>
                    </div>

                    <div class="feature-card">
                        <div class="icon-wrap">
                            <i class="fa-solid fa-robot"></i>
                        </div>
                        <h4>Chat Bot</h4>
                    </div>

                </div>
            </div>
        </section>

        {{-- our industry section --}}
        <section class="bg-gray-50 py-20 px-4 sm:px-6 lg:px-8 overflow-hidden">
            <div class="max-w-[1400px] w-full mx-auto">

                <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up" data-aos-duration="1000">
                    <span
                        class="text-[#049a3d] font-bold tracking-wider uppercase text-sm bg-green-50 px-4 py-1.5 rounded-full border border-[#049a3d]/20">
                        Industries We Serve
                    </span>
                    <h2
                        class="mt-6 md:text-4xl sm:text-3xl text-3xl font-extrabold text-gray-900 tracking-tight leading-tight">
                        Scalable Business SMS Solutions <br class="hidden md:block" /> for Every Sector
                    </h2>
                    <p class="mt-4 text-gray-500 max-w-2xl mx-auto text-lg">
                        A unified communication platform designed to scale with your business needs, no matter the
                        niche.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                    <div class="group bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                        data-aos="fade-up" data-aos-delay="0">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#049a3d]/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110">
                        </div>
                        <div
                            class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mb-6 text-[#049a3d] group-hover:bg-[#049a3d] group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 text-xl mb-3 group-hover:text-[#049a3d] transition-colors">
                            Retail & FMCG</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Drive instant traffic with Promotional SMS for
                            flash sales, new arrivals, and festive discount codes that boost store footfall.</p>
                    </div>

                    <div class="group bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                        data-aos="fade-up" data-aos-delay="50">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#049a3d]/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110">
                        </div>
                        <div
                            class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mb-6 text-[#049a3d] group-hover:bg-[#049a3d] group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 text-xl mb-3 group-hover:text-[#049a3d] transition-colors">
                            Banking & Fintech</h3>
                        <p class="text-sm text-gray-500 leading-relaxed"> Secure accounts with our dedicated OTP SMS
                            Service delivering real-time transaction alerts and 2FA codes through high-priority routes.

                        </p>
                    </div>

                    <div class="group bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                        data-aos="fade-up" data-aos-delay="100">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#049a3d]/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110">
                        </div>
                        <div
                            class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mb-6 text-[#049a3d] group-hover:bg-[#049a3d] group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 text-xl mb-3 group-hover:text-[#049a3d] transition-colors">
                            E-commerce & D2C</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Automate your journey with our Transactional
                            SMS API for E-commerce for order tracking, shipping updates, and cart recovery alerts.</p>
                    </div>

                    <div class="group bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                        data-aos="fade-up" data-aos-delay="150">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#049a3d]/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110">
                        </div>
                        <div
                            class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mb-6 text-[#049a3d] group-hover:bg-[#049a3d] group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 text-xl mb-3 group-hover:text-[#049a3d] transition-colors">
                            Education & EdTech</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Keep parents informed with instant attendance
                            alerts, fee reminders, and exam schedules via our easy-to-use Group SMS Provider tool.
                        </p>
                    </div>

                    <div class="group bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                        data-aos="fade-up" data-aos-delay="200">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#049a3d]/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110">
                        </div>
                        <div
                            class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mb-6 text-[#049a3d] group-hover:bg-[#049a3d] group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 text-xl mb-3 group-hover:text-[#049a3d] transition-colors">
                            Healthcare & Clinics</h3>
                        <p class="text-sm text-gray-500 leading-relaxed"> Reduce no-shows by 30% with automated
                            appointment reminders and use Unicode Support for wellness tips in regional languages.</p>
                    </div>

                    <div class="group bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                        data-aos="fade-up" data-aos-delay="250">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#049a3d]/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110">
                        </div>
                        <div
                            class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mb-6 text-[#049a3d] group-hover:bg-[#049a3d] group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 text-xl mb-3 group-hover:text-[#049a3d] transition-colors">
                            Real Estate & Housing</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Reach high-value leads instantly with
                            Automated Text Messaging for new property launches, site visit invites, and lead nurturing.
                        </p>
                    </div>

                    <div class="group bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                        data-aos="fade-up" data-aos-delay="300">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#049a3d]/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110">
                        </div>
                        <div
                            class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mb-6 text-[#049a3d] group-hover:bg-[#049a3d] group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 text-xl mb-3 group-hover:text-[#049a3d] transition-colors">
                            Travel & Hospitality</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Enhance guest experiences with automated
                            booking confirmations, check-in details, and time-sensitive itinerary updates</p>
                    </div>

                    <div class="group bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                        data-aos="fade-up" data-aos-delay="350">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#049a3d]/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110">
                        </div>
                        <div
                            class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mb-6 text-[#049a3d] group-hover:bg-[#049a3d] group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 text-xl mb-3 group-hover:text-[#049a3d] transition-colors">
                            Logistics & Delivery</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Provide real-time transparency with live
                            tracking links and delivery OTPs using our scalable Messaging API for Developers.</p>
                    </div>

                    <div class="group bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                        data-aos="fade-up" data-aos-delay="400">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#049a3d]/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110">
                        </div>
                        <div
                            class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mb-6 text-[#049a3d] group-hover:bg-[#049a3d] group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 text-xl mb-3 group-hover:text-[#049a3d] transition-colors">
                            Automobile Dealers</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Boost service revenue with automated
                            maintenance reminders, test-drive invites, and new vehicle launch alerts for car owners.</p>
                    </div>

                    <div class="group bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                        data-aos="fade-up" data-aos-delay="450">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#049a3d]/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110">
                        </div>
                        <div
                            class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mb-6 text-[#049a3d] group-hover:bg-[#049a3d] group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 text-xl mb-3 group-hover:text-[#049a3d] transition-colors">
                            Government & Public</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Mobilize the masses during emergencies with
                            our
                            Broadcast SMS Service for reliable public health notices and weather alerts.</p>
                    </div>

                    <div class="group bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                        data-aos="fade-up" data-aos-delay="500">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#049a3d]/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110">
                        </div>
                        <div
                            class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mb-6 text-[#049a3d] group-hover:bg-[#049a3d] group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 17a2 2 0 11-4 0 2 2 0 014 0zM9 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 text-xl mb-3 group-hover:text-[#049a3d] transition-colors">
                            Event Management</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Ensure a full house with instant invites and
                            QR-code tickets sent via our Bulk SMS Software for PC for seamless attendee check-ins.
                        </p>
                    </div>

                    <div class="group bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                        data-aos="fade-up" data-aos-delay="550">
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-[#049a3d]/5 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110">
                        </div>
                        <div
                            class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mb-6 text-[#049a3d] group-hover:bg-[#049a3d] group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 text-xl mb-3 group-hover:text-[#049a3d] transition-colors">
                            Media & Entertainment</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Drive live audience engagement with voting
                            alerts, contest notifications, and "New Episode" updates that scale for primetime traffic.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        {{-- cta section --}}
        <section class="relative w-full md:py-20 py-10 overflow-hidden comn-cta-section">
            <!-- Content -->
            <div class="relative z-10 max-w-4xl mx-auto text-center px-5">
                <h2 class="text-white text-2xl md:text-4xl font-semibold mb-4">
                    Ready to Upgrade Your Business Communication?
                </h2>

                <p class="text-white text-md md:text-xl mb-8">
                    Connect with your customers effortlessly using WhatsApp, SMS, Voice, and RCS — all on one
                    reliable
                    and scalable platform.
                </p>

                <button id="ctaBtn" onclick="openModall()" class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] transition md:px-10 px-6 py-2 md:py-4 
                text-white font-semibold text-lg rounded shadow-lg">
                    Request A Free Demo
                </button>
            </div>
        </section>

<!-- Testimonials -->
<section class="py-20 bg-gradient-to-b from-white to-green-50">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">

            <span class="inline-flex items-center px-4 py-2 rounded-full bg-green-100 text-[#049a3d] font-semibold text-sm">
                ⭐ Trusted by 500+ Businesses
            </span>

            <h2 class="mt-5 text-4xl md:text-5xl font-bold">
                What Our Clients Say
            </h2>

            <p class="mt-4 text-gray-600 text-lg max-w-3xl mx-auto">
                Thousands of businesses trust Textora Technologies for Bulk SMS,
                WhatsApp API, RCS Messaging and Voice Communication.
            </p>

        </div>

        <div id="view" class="grid md:grid-cols-3 gap-8 items-center"></div>

        <div id="indicators" class="flex justify-center mt-10 gap-2"></div>

    </div>

</section>

        {{-- FAQ's section --}}

        <section class="md:py-20 py-10">
            <div class="w-full md:max-w-6xl mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto md:mb-16 mb-8" data-aos="fade-up" data-aos-duration="1000">
                    <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">FAQ's</span>
                    <h2
                        class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                        Frequently Asked Questions about Bulk Messaging
                    </h2>
                </div>

                <div class="grid grid-cols-12 md:gap-10 gap-4" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col-span-12 mb-10 md:mb-0">
                        <div class="space-y-4">

                            <!-- FAQ 1 -->
                            <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                                <button onclick="toggleAccordion(1)"
                                    class="w-full flex justify-between sm:text-lg text-md items-center py-5 text-slate-800">
                                    <span class="text-left">What exactly does a Bulk Message Service Provider do for my
                                        business?</span>
                                    <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                                        +
                                    </span>
                                </button>
                                <div id="content-1"
                                    class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="pb-5 text-sm text-slate-500">
                                        A Bulk Message Service Provider like Textora SMS offers a comprehensive SMS
                                        Gateway that allows you to send high volumes of messages to customers instantly.
                                        We provide a robust Cloud Communications Platform that handles everything from
                                        Transactional SMS alerts to creative SMS Marketing campaigns, ensuring your
                                        business stays connected.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                                <button onclick="toggleAccordion(2)"
                                    class="w-full flex justify-between sm:text-lg text-md items-center py-5 text-slate-800">
                                    <span class="text-left">Can I send both Promotional and Transactional SMS through
                                        your platform? </span>
                                    <span id="icon-2" class="text-slate-800 transition-transform duration-300">
                                        +
                                    </span>
                                </button>
                                <div id="content-2"
                                    class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="pb-5 text-sm text-slate-500">
                                        Yes, our platform supports both types of messaging. You can use our Promotional
                                        SMS route for high-conversion Mass Texting Service campaigns to drive sales, or
                                        utilize our Transactional SMS API for automated, time-sensitive alerts like
                                        order updates and booking confirmations.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                                <button onclick="toggleAccordion(3)"
                                    class="w-full flex justify-between sm:text-lg text-md items-center py-5 text-slate-800">
                                    <span class="text-left">What is the difference between Bulk SMS, Bulk WhatsApp, and
                                        RCS Messaging? </span>
                                    <span id="icon-3" class="text-slate-800 transition-transform duration-300">
                                        +
                                    </span>
                                </button>
                                <div id="content-3"
                                    class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="pb-5 text-sm text-slate-500">
                                        While Bulk SMS India is the standard for wide-reach text alerts, Bulk WhatsApp
                                        allows for rich-media Automated Text Messaging with images and videos. RCS
                                        Messaging is the next-gen Broadcast SMS Service that provides an app-like
                                        experience with interactive buttons directly in the native messaging inbox.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 4 -->
                            <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                                <button onclick="toggleAccordion(4)"
                                    class="w-full flex justify-between sm:text-lg text-md items-center py-5 text-slate-800">
                                    <span class="text-left">How do OTP API and Voice API help improve security and
                                        verification?</span>
                                    <span id="icon-4" class="text-slate-800 transition-transform duration-300">
                                        +
                                    </span>
                                </button>
                                <div id="content-4"
                                    class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="pb-5 text-sm text-slate-500">
                                        Our OTP SMS Service is recognized as the fastest OTP delivery service provider
                                        in India, ensuring codes arrive in seconds. For an extra layer of security, our
                                        Voice SMS Provider solutions offer Voice Call authentication, which is ideal for
                                        multi-factor verification and urgent alerts.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 5 -->
                            <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                                <button onclick="toggleAccordion(5)"
                                    class="w-full flex justify-between sm:text-lg text-md items-center py-5 text-slate-800">
                                    <span class="text-left">What do I need to get started with the WhatsApp Business
                                        API?</span>
                                    <span id="icon-5" class="text-slate-800 transition-transform duration-300">
                                        +
                                    </span>
                                </button>
                                <div id="content-5"
                                    class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="pb-5 text-sm text-slate-500">
                                        To begin, you simply need a registered business and a phone number. As a
                                        verified Meta Business Partner, we provide the Messaging API for Developers and
                                        a User-Friendly Interface to help you set up your profile, manage Alpha-numeric
                                        Sender IDs, and start sending messages immediately.

                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 6 -->
                            <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                                <button onclick="toggleAccordion(6)"
                                    class="w-full flex justify-between sm:text-lg text-md items-center py-5 text-slate-800">
                                    <span class="text-left">Is your platform suitable for both small and large
                                        businesses?
                                    </span>
                                    <span id="icon-6" class="text-slate-800 transition-transform duration-300">
                                        +
                                    </span>
                                </button>
                                <div id="content-6"
                                    class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="pb-5 text-sm text-slate-500">
                                        Absolutely. We offer Corporate Messaging Solutions that scale from small
                                        startups needing a Cheap bulk SMS service with API integration to large
                                        enterprises requiring massive A2P Messaging capacity. Our Custom Pricing ensures
                                        you only pay for what you use without any hidden Charge fees.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 7 -->
                            <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                                <button onclick="toggleAccordion(7)"
                                    class="w-full flex justify-between sm:text-lg text-md items-center py-5 text-slate-800">
                                    <span class="text-left">Do you offer a reseller or white-label program?</span>
                                    <span id="icon-7" class="text-slate-800 transition-transform duration-300">
                                        +
                                    </span>
                                </button>
                                <div id="content-7"
                                    class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                    <div class="pb-5 text-sm text-slate-500">
                                        Yes, we provide a complete Website Setup for entrepreneurs looking to start
                                        their own business. Our Bulk SMS Reseller program includes white-labeled Bulk
                                        SMS Software for PC and a dedicated Group SMS Provider panel, backed by our
                                        expert DLT Registration Service support.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#0e2a25] py-20">
            <div class="container max-w-7xl mx-auto px-4 flex justify-center items-center">

                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-2xl md:text-4xl  font-extrabold text-white  mb-6 leading-tight font-serif">
                        Stop Searching, Start Sending.
                    </h2>

                    <h3 class="text-[#2ecc71] text-lg md:text-xl font-semibold mb-6">
                        Join the most reliable Bulk Message Service Provider in India.
                    </h3>

                    <p class="text-gray-300 text-sm sm:text-base md:text-lg leading-relaxed mb-10">
                        Whether you need a robust Messaging API for Developers, a high-speed OTP SMS Service, or a
                        complete Bulk SMS Reseller solution, Textora SMS is built to scale with you.
                    </p>
                    <a href="/contact-us"
                        class="col-span-full px-6 sm:px-10 py-3 sm:py-4 bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white font-bold  rounded-lg shadow-md hover:shadow-xl hover:scale-[1.01] hover:bg-[#037f32] transition duration-300 text-base sm:text-lg">
                        Contact Us
                    </a>

                </div>

            </div>
        </section>
    </main>



    <script>
        const data = [{
            // img: "images/user-icon.png",
            title: "Ankit Jain",
                company: "Arham Enterprises",
              text: "Textora Technologies has been a trusted partner for our Bulk SMS and WhatsApp communication needs. Their service quality and support are truly outstanding."
        },
        {
            // img: "images/user-icon.png",
            title: "Shivam Trivedi ",
             company: "Rapid Drop Next Distributor Pvt. Ltd.",
            text: "We are highly satisfied with Textora Technologies WhatsApp API and Transactional OTP services. Their reliable platform and prompt support have significantly improved our business communication."
        },
        {
            // img: "images/user-icon.png",
            title: "Snehalkumar Shinde",
            company: "Design Exam Academy ",
            text:"Textora Technologies' WhatsApp API service has significantly improved our communication with students and parents. The platform is reliable, easy to use, and supported by an excellent team. We are extremely satisfied with their service."
            
        },
        {
            // img: "images/user-icon.png",
            title: "Shyam Kadam",
            company: "Reliable Properties ",
            text: "Textora Technologies' WhatsApp API service has transformed our property marketing. We can instantly connect with clients, share property updates, and improve engagement. Their service is reliable and backed by excellent support."
        },
        {
            // img: "images/user-icon.png",
            title: "Dr. Shashwath",
            company:"BTM Vet Clinic",
            text: "Textora Technologies SMS OTP and RCS services have improved our customer communication with reliable delivery and seamless integration. We are highly satisfied with their service and support."
        },
        ];

        let current = 0;
        const view = document.getElementById("view");
        const indicators = document.getElementById("indicators");

        function getSlidesToShow() {
            // < 768px (Tailwind md breakpoint) => 1 slide, otherwise 3
            return window.innerWidth < 768 ? 1 : 3;
        }

        // Render Indicators
        function renderIndicators() {
            indicators.innerHTML = "";
            data.forEach((_, i) => {
                const dot = document.createElement("div");
                dot.className =
"w-3 h-3 rounded-full bg-gray-300 transition-all duration-300";

                if (i === current) {
                   dot.classList.add(
    "w-8",
    "bg-[#049a3d]"
);
                }

                indicators.appendChild(dot);
            });
        }

        // Render Visible Slides
        function render() {
            view.innerHTML = "";
            const total = data.length;
            const slidesToShow = getSlidesToShow();

            let visible = [];

            if (slidesToShow === 1) {
                // Mobile: only current slide
                visible = [current];
            } else {
                // Desktop: left, center, right
                const left = (current - 1 + total) % total;
                const center = current % total;
                const right = (current + 1) % total;
                visible = [left, center, right];
            }

            visible.forEach((i, idx) => {
                const card = document.createElement("div");
                
card.className =
"slide w-[95%] mx-auto bg-white rounded-3xl border border-green-100 p-8 text-center transition-all duration-500 hover:shadow-2xl";
                if (slidesToShow === 1) {
                    // Mobile – normal scale
                    card.classList.add("scale-100", "opacity-100", "shadow-xl");
                } else {
                    // Desktop – center bigger
                    if (idx === 1) {
    card.classList.add(
        "scale-105",
        "opacity-100",
        "shadow-2xl",
        "border-2",
        "border-[#049a3d]"
    );
} else {
    card.classList.add(
        "scale-95",
        "opacity-80"
    );
}
                }

               card.innerHTML = `

<div class="flex justify-center mb-5">
    <div class="w-16 h-16 rounded-full bg-[#049a3d] text-white flex items-center justify-center text-2xl font-bold shadow-lg">
        ${data[i].title.charAt(0)}
    </div>
</div>

<div class="flex justify-center text-yellow-400 text-xl mb-4">
    ★★★★★
</div>

<p class="text-gray-600 italic leading-7 mb-6">
    "${data[i].text}"
</p>

<div class="border-t pt-5">

    <h3 class="text-xl font-bold text-gray-900">
        ${data[i].title}
    </h3>

    <p class="text-[#049a3d] font-semibold mt-1">
        ${data[i].company}
    </p>

</div>

`;

                view.appendChild(card);
            });

            renderIndicators();
        }

        // Move slider 1 step
        function nextSlide() {
            current = (current + 1) % data.length;
            render();
        }

        // Initial render
        render();

        // Autoplay
        setInterval(nextSlide, 2500);

        // Re-render on resize to switch between 1 & 3 slides
        window.addEventListener("resize", render);


        //    faq's 
        function toggleAccordion(index) {
            const content = document.getElementById(`content-${index}`);
            const icon = document.getElementById(`icon-${index}`);

            // SVG for Minus icon
            const minusSVG = `
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                    <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
                </svg>
                `;

            // SVG for Plus icon
            const plusSVG = `
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                    <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                </svg>
                `;

            // Toggle the content's max-height for smooth opening and closing
            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0';
                icon.innerHTML = plusSVG;
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.innerHTML = minusSVG;
            }
        }
    </script>

    @if ($errors->any() || session('status'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                @if ($errors->has('email') || $errors->has('password'))
                    document.getElementById('loginModal').classList.remove('hidden');
                @endif
                    });
        </script>
        @filamentScripts
@vite('resources/js/app.js')

<!-- Flowbite JS -->
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</body>
    @endif
</x-master-page>
