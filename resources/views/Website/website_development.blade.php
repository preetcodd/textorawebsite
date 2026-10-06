<x-master-page
    title="Best Website Development Company in Bangalore | Textora Technologies"
    description="Textora Technologies provides professional Website Development Services including Business Websites, Corporate Websites, eCommerce Websites, Laravel, React, WordPress and Custom Web Applications across India.">

    @php
        function activeNav($path)
        {
            return Request::path() === $path ? 'text-green-700 font-semibold' : 'text-gray-700';
        }
    @endphp

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

          {
            "@type":"Offer",
            "itemOffered":{
              "@type":"Service",
              "name":"Business Website Development"
            }
          },

          {
            "@type":"Offer",
            "itemOffered":{
              "@type":"Service",
              "name":"Corporate Website Development"
            }
          },

          {
            "@type":"Offer",
            "itemOffered":{
              "@type":"Service",
              "name":"Ecommerce Website Development"
            }
          },

          {
            "@type":"Offer",
            "itemOffered":{
              "@type":"Service",
              "name":"Custom Web Application Development"
            }
          },

          {
            "@type":"Offer",
            "itemOffered":{
              "@type":"Service",
              "name":"Laravel Website Development"
            }
          },

          {
            "@type":"Offer",
            "itemOffered":{
              "@type":"Service",
              "name":"React JS Development"
            }
          },

          {
            "@type":"Offer",
            "itemOffered":{
              "@type":"Service",
              "name":"WordPress Website Development"
            }
          }

        ]
      }
    },

    {
      "@type":"FAQPage",
      "mainEntity":[

        {
          "@type":"Question",
          "name":"How long does website development take?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"A standard business website generally takes 7 to 15 working days. Ecommerce and custom web applications may require additional development time depending on project requirements."
          }
        },

        {
          "@type":"Question",
          "name":"Will my website be mobile responsive?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes. Every website developed by Textora Technologies is fully responsive and optimized for desktop, tablet and mobile devices."
          }
        },

        {
          "@type":"Question",
          "name":"Do you provide SEO-friendly website development?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes. All websites are built with SEO best practices including clean code, fast loading speed, mobile responsiveness and search engine friendly URLs."
          }
        },

        {
          "@type":"Question",
          "name":"Can you redesign my existing website?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes. We redesign outdated websites into modern, responsive and SEO optimized websites with improved performance."
          }
        },

        {
          "@type":"Question",
          "name":"Which technologies do you use for website development?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"We develop websites using Laravel, React JS, PHP, WordPress, MySQL, HTML5, Tailwind CSS and other modern technologies."
          }
        },

        {
          "@type":"Question",
          "name":"Do you provide website maintenance after launch?",
          "acceptedAnswer":{
            "@type":"Answer",
            "text":"Yes. We provide website maintenance, security updates, backups, bug fixes and ongoing technical support."
          }
        }

      ]
    },

    {
      "@type":"BreadcrumbList",
      "itemListElement":[

        {
          "@type":"ListItem",
          "position":1,
          "name":"Home",
          "item":"https://textorasms.com/"
        },

        {
          "@type":"ListItem",
          "position":2,
          "name":"Website Development",
          "item":"https://textorasms.com/website-development"
        }

      ]
    }

  ]
}
</script>

    @endpush
<!-- ================= PREMIUM HERO SECTION PART-1 ================= -->
<section class="relative overflow-hidden min-h-screen flex items-center bg-[#071320]">

    <!-- Animated Background -->
    <div class="absolute inset-0">

        <div
            class="absolute -top-40 -left-40 w-[500px] h-[500px] rounded-full bg-green-500/20 blur-[150px] animate-pulse">
        </div>

        <div
            class="absolute -bottom-40 -right-40 w-[500px] h-[500px] rounded-full bg-cyan-500/20 blur-[160px] animate-pulse">
        </div>

        <div class="absolute inset-0 opacity-10"
            style="background-image:radial-gradient(#ffffff 1px,transparent 1px);background-size:35px 35px;">
        </div>

    </div>

    <div class="relative max-w-[1450px] mx-auto px-6 lg:px-10 py-20">

        <div class="grid lg:grid-cols-12 gap-8 items-center">

            <!-- LEFT CONTENT -->
            <div class="lg:col-span-6 text-white">

                <div
                    class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-xl border border-white/20 rounded-full px-5 py-2 mb-7">

                    <span class="w-2 h-2 rounded-full bg-green-400 animate-ping"></span>

                    <span class="text-sm">
                        India's Trusted Website Development Company
                    </span>

                </div>

                <h1
                    class="text-5xl md:text-6xl xl:text-7xl font-extrabold leading-[1.05] tracking-tight">

                    Build

                    <span class="text-green-400">

                        Premium Websites

                    </span>

                    That Grow Your Business

                </h1>

                <p
                    class="mt-7 text-lg lg:text-xl text-gray-300 leading-8 max-w-2xl">

                    We design and develop lightning-fast business websites,
                    ecommerce stores, CRM systems and custom web applications
                    that increase leads, improve customer experience and grow
                    your revenue.

                </p>

                <!-- Features -->

                <div class="grid grid-cols-2 gap-5 mt-10">

                    <div class="flex items-center gap-3">

                        <div
                            class="w-11 h-11 rounded-xl bg-green-500/20 flex items-center justify-center">

                            <i class="fa-solid fa-bolt text-green-400"></i>

                        </div>

                        <span>Lightning Fast</span>

                    </div>

                    <div class="flex items-center gap-3">

                        <div
                            class="w-11 h-11 rounded-xl bg-green-500/20 flex items-center justify-center">

                            <i class="fa-solid fa-mobile-screen text-green-400"></i>

                        </div>

                        <span>Responsive Design</span>

                    </div>

                    <div class="flex items-center gap-3">

                        <div
                            class="w-11 h-11 rounded-xl bg-green-500/20 flex items-center justify-center">

                            <i class="fa-solid fa-chart-line text-green-400"></i>

                        </div>

                        <span>SEO Optimized</span>

                    </div>

                    <div class="flex items-center gap-3">

                        <div
                            class="w-11 h-11 rounded-xl bg-green-500/20 flex items-center justify-center">

                            <i class="fa-solid fa-shield-halved text-green-400"></i>

                        </div>

                        <span>Highly Secure</span>

                    </div>

                </div>

                <!-- Buttons -->

                <div class="flex flex-wrap gap-5 mt-12">

                    <a href="#contact-form"
                        class="group px-9 py-4 rounded-2xl bg-gradient-to-r from-green-500 to-green-600 font-semibold shadow-2xl hover:scale-105 duration-300">

                        Get Free Consultation

                        <i
                            class="fa-solid fa-arrow-right ml-2 group-hover:translate-x-1 duration-300"></i>

                    </a>

                    <a href="{{ url('/contact-us') }}"
                        class="px-9 py-4 rounded-2xl border border-white/20 bg-white/5 backdrop-blur-xl hover:bg-white hover:text-gray-900 duration-300">

                        View Portfolio

                    </a>

                </div>

                <!-- Stats -->

                <div class="grid grid-cols-4 gap-5 mt-14">

                    <div
                        class="rounded-2xl border border-white/10 bg-white/5 backdrop-blur-xl p-5 text-center">

                        <h3 class="text-3xl font-bold text-green-400">

                            50+

                        </h3>

                        <p class="text-sm text-gray-300 mt-2">

                            Projects

                        </p>

                    </div>

                    <div
                        class="rounded-2xl border border-white/10 bg-white/5 backdrop-blur-xl p-5 text-center">

                        <h3 class="text-3xl font-bold text-green-400">

                            100+

                        </h3>

                        <p class="text-sm text-gray-300 mt-2">

                            Clients

                        </p>

                    </div>

                    <div
                        class="rounded-2xl border border-white/10 bg-white/5 backdrop-blur-xl p-5 text-center">

                        <h3 class="text-3xl font-bold text-green-400">

                            99%

                        </h3>

                        <p class="text-sm text-gray-300 mt-2">

                            Satisfaction

                        </p>

                    </div>

                    <div
                        class="rounded-2xl border border-white/10 bg-white/5 backdrop-blur-xl p-5 text-center">

                        <h3 class="text-3xl font-bold text-green-400">

                            24×7

                        </h3>

                        <p class="text-sm text-gray-300 mt-2">

                            Support

                        </p>

                    </div>

                </div>

            </div>

            <!-- RIGHT SIDE START -->
            <div class="lg:col-span-6 relative flex justify-center lg:justify-end">
                <!-- RIGHT IMAGE -->

<div class="relative">

    <!-- Glow -->

    <div
        class="absolute inset-0 bg-green-500/20 blur-[120px] rounded-full scale-125">
    </div>

    <!-- Laptop -->

    <img
        src="{{ asset('images/banners/website.png') }}"
        alt="Website Development"
        class="relative z-20 w-full max-w-[780px] xl:max-w-[900px] animate-float drop-shadow-[0_35px_70px_rgba(0,0,0,.45)]">

    <!-- Card 1 -->

    <div
        class="hidden lg:block absolute top-10 -left-10 z-30 bg-white rounded-2xl shadow-2xl px-5 py-4 animate-float2">

        <div class="flex items-center gap-3">

            <div
                class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center">

                <i class="fa-solid fa-chart-line text-green-600 text-xl"></i>

            </div>

            <div>

                <h4 class="font-bold text-gray-900">

                    SEO Ready

                </h4>

                <p class="text-sm text-gray-500">

                    Google Optimized

                </p>

            </div>

        </div>

    </div>

    <!-- Card 2 -->

    <div
        class="hidden lg:block absolute top-44 right-0 z-30 bg-white rounded-2xl shadow-2xl px-5 py-4 animate-float3">

        <div class="flex items-center gap-3">

            <div
                class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center">

                <i class="fa-solid fa-bolt text-blue-600 text-xl"></i>

            </div>

            <div>

                <h4 class="font-bold text-gray-900">

                    98 Performance

                </h4>

                <p class="text-sm text-gray-500">

                    Core Web Vitals

                </p>

            </div>

        </div>

    </div>

    <!-- Card 3 -->

    <div
        class="hidden lg:block absolute bottom-14 -left-6 z-30 bg-white rounded-2xl shadow-2xl px-5 py-4 animate-float">

        <div class="flex items-center gap-3">

            <div
                class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center">

                <i class="fa-solid fa-shield-halved text-purple-600 text-xl"></i>

            </div>

            <div>

                <h4 class="font-bold text-gray-900">

                    Secure Development

                </h4>

                <p class="text-sm text-gray-500">

                    SSL + Security

                </p>

            </div>

        </div>

    </div>

    <!-- Card 4 -->

    <div
        class="hidden lg:block absolute bottom-0 right-10 z-30 bg-white rounded-2xl shadow-2xl px-5 py-4 animate-float2">

        <div class="flex items-center gap-3">

            <div
                class="w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center">

                <i class="fa-solid fa-mobile-screen-button text-orange-500 text-xl"></i>

            </div>

            <div>

                <h4 class="font-bold text-gray-900">

                    100% Responsive

                </h4>

                <p class="text-sm text-gray-500">

                    Mobile Friendly

                </p>

            </div>

        </div>

    </div>

</div>

</div>

</div>

</section>

<!-- Floating Animation -->

<style>

@keyframes float{

0%,100%{

transform:translateY(0px);

}

50%{

transform:translateY(-15px);

}

}

@keyframes float2{

0%,100%{

transform:translateY(0px);

}

50%{

transform:translateY(18px);

}

}

@keyframes float3{

0%,100%{

transform:translateX(0px);

}

50%{

transform:translateX(15px);

}

}

.animate-float{

animation:float 5s ease-in-out infinite;

}

.animate-float2{

animation:float2 6s ease-in-out infinite;

}

.animate-float3{

animation:float3 5s ease-in-out infinite;

}

</style>
                <!-- ===================== WHY CHOOSE US ===================== -->

<section class="bg-gray-50 lg:py-20 py-10">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">

            <span class="text-green-600 font-semibold uppercase">
                Why Choose Textora
            </span>

            <h2 class="text-4xl font-bold mt-3">
                Why Businesses Choose Us
            </h2>

            <p class="text-gray-600 mt-4 max-w-3xl mx-auto">
                We create websites that don't just look beautiful—they help your business grow.
            </p>

        </div>

        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6">

            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-code text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">
                    Custom Development
                </h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    Tailor-made websites according to your business requirements.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-mobile-screen-button text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">
                    Mobile Responsive
                </h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    Perfectly optimized for desktop, tablet and mobile devices.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-gauge-high text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">
                    High Performance
                </h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    Fast loading websites with Core Web Vitals optimization.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-shield-halved text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">
                    Secure Platform
                </h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    SSL, security, backup and best development practices.
                </p>
            </div>

        </div>

    </div>

</section>

<!-- ===================== SERVICES ===================== -->

<section class="lg:py-20 py-10">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">
            <span class="text-green-600 font-semibold uppercase">
                Our Services
            </span>

            <h2 class="text-4xl font-bold mt-3">
                Website Development Services We Offer
            </h2>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6">

            <!-- Business Website -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-globe text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">Business Website</h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    Professional websites for startups, SMEs and enterprises.
                </p>
            </div>

            <!-- E-Commerce -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-cart-shopping text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">E-Commerce Website</h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    Online shopping websites with payment gateway integration.
                </p>
            </div>

            <!-- Custom Web Application -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-laptop-code text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">Custom Web Application</h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    CRM, ERP, Portals and customized business software.
                </p>
            </div>

            <!-- Education -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-graduation-cap text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">Education Website</h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    School, College and Coaching Institute websites.
                </p>
            </div>

            <!-- Healthcare -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-hospital text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">Healthcare Website</h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    Hospital, Clinic and Doctor websites with appointment booking.
                </p>
            </div>

            <!-- Corporate -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-building text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">Corporate Website</h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    Enterprise-grade websites for brands and large organizations.
                </p>
            </div>

        </div>

    </div>

</section>
<!-- ===================== TECHNOLOGIES ===================== -->

<section class="lg:py-20 py-10">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">
            <span class="text-green-600 font-semibold uppercase">
                Technologies
            </span>

            <h2 class="text-4xl font-bold mt-3">
                Technologies We Work With
            </h2>
        </div>

        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 gap-6">

            <!-- Laravel -->
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-brands fa-laravel text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold">Laravel</h3>
            </div>

            <!-- React -->
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-brands fa-react text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold">React JS</h3>
            </div>

            <!-- Node JS -->
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-brands fa-node-js text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold">Node JS</h3>
            </div>

            <!-- WordPress -->
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-brands fa-wordpress text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold">WordPress</h3>
            </div>

            <!-- PHP -->
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-brands fa-php text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold">PHP</h3>
            </div>

            <!-- MySQL -->
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-database text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold">MySQL</h3>
            </div>

            <!-- HTML5 -->
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-brands fa-html5 text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold">HTML5</h3>
            </div>

            <!-- Tailwind CSS -->
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-wind text-5xl text-green-600 mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold">Tailwind CSS</h3>
            </div>

        </div>

    </div>

</section>
<!-- ===================== DEVELOPMENT PROCESS ===================== -->
<section class="bg-gray-50 lg:py-20 py-10">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-16">

            <span class="text-green-600 font-semibold uppercase tracking-wider">
                Development Process
            </span>

            <h2 class="text-4xl font-bold mt-3">
                Our Website Development Process
            </h2>

            <p class="text-gray-600 mt-4 max-w-3xl mx-auto">
                We follow a proven step-by-step development process to build
                secure, scalable and business-focused websites.
            </p>

        </div>

        <!-- Process -->
        <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 gap-8">

            <!-- Step 1 -->
            <div class="relative group">

                <div class="bg-white rounded-2xl shadow-xl p-6 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl">

                    <div class="w-16 h-16 mx-auto rounded-full bg-green-600 text-white flex items-center justify-center text-2xl mb-5 transition-all duration-300 group-hover:bg-white group-hover:text-green-600">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>

                    <h3 class="text-xl font-semibold mb-3">
                        Requirement Analysis
                    </h3>

                    <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                        Understand business goals, audience and project requirements.
                    </p>

                </div>

                <div class="hidden lg:block absolute top-8 left-full w-8 h-1 bg-green-500"></div>

            </div>

            <!-- Step 2 -->
            <div class="relative group">

                <div class="bg-white rounded-2xl shadow-xl p-6 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl">

                    <div class="w-16 h-16 mx-auto rounded-full bg-green-600 text-white flex items-center justify-center text-2xl mb-5 transition-all duration-300 group-hover:bg-white group-hover:text-green-600">
                        <i class="fa-solid fa-pen-ruler"></i>
                    </div>

                    <h3 class="text-xl font-semibold mb-3">
                        UI / UX Design
                    </h3>

                    <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                        Create attractive, responsive and user-friendly layouts.
                    </p>

                </div>

                <div class="hidden lg:block absolute top-8 left-full w-8 h-1 bg-green-500"></div>

            </div>

            <!-- Step 3 -->
            <div class="relative group">

                <div class="bg-white rounded-2xl shadow-xl p-6 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl">

                    <div class="w-16 h-16 mx-auto rounded-full bg-green-600 text-white flex items-center justify-center text-2xl mb-5 transition-all duration-300 group-hover:bg-white group-hover:text-green-600">
                        <i class="fa-solid fa-code"></i>
                    </div>

                    <h3 class="text-xl font-semibold mb-3">
                        Development
                    </h3>

                    <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                        Build secure, scalable and high-performance websites.
                    </p>

                </div>

                <div class="hidden lg:block absolute top-8 left-full w-8 h-1 bg-green-500"></div>

            </div>

            <!-- Step 4 -->
            <div class="relative group">

                <div class="bg-white rounded-2xl shadow-xl p-6 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl">

                    <div class="w-16 h-16 mx-auto rounded-full bg-green-600 text-white flex items-center justify-center text-2xl mb-5 transition-all duration-300 group-hover:bg-white group-hover:text-green-600">
                        <i class="fa-solid fa-vial-circle-check"></i>
                    </div>

                    <h3 class="text-xl font-semibold mb-3">
                        Testing
                    </h3>

                    <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                        Test speed, security and browser compatibility before launch.
                    </p>

                </div>

                <div class="hidden lg:block absolute top-8 left-full w-8 h-1 bg-green-500"></div>

            </div>

            <!-- Step 5 -->
            <div class="relative group">

                <div class="bg-white rounded-2xl shadow-xl p-6 text-center transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl">

                    <div class="w-16 h-16 mx-auto rounded-full bg-green-600 text-white flex items-center justify-center text-2xl mb-5 transition-all duration-300 group-hover:bg-white group-hover:text-green-600">
                        <i class="fa-solid fa-rocket"></i>
                    </div>

                    <h3 class="text-xl font-semibold mb-3">
                        Launch & Support
                    </h3>

                    <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                        Deploy your website with continuous maintenance and technical support.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- ===================== Industrieswe serve ===================== -->

<section class="bg-gray-50 lg:py-20 py-10">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">
            <span class="text-green-600 font-semibold uppercase">
                Industries We Serve
            </span>

            <h2 class="text-4xl font-bold mt-3">
                Website Solutions For Every Industry
            </h2>
        </div>

        <div class="grid md:grid-cols-3 lg:gap-10 gap-6 text-center">

            <!-- Card 1 -->
            <div class="xl:p-8 lg:p-6 md:p-5 p-5 bg-white rounded-2xl shadow-xl transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-cart-shopping text-green-600 text-4xl mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">
                    Retail & eCommerce
                </h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    Online stores with secure payment gateway integration.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="xl:p-8 lg:p-6 md:p-5 p-5 bg-white rounded-2xl shadow-xl transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-hospital text-green-600 text-4xl mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">
                    Hospital, Clinic & Doctor
                </h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    Appointment booking and healthcare websites.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="xl:p-8 lg:p-6 md:p-5 p-5 bg-white rounded-2xl shadow-xl transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-graduation-cap text-green-600 text-4xl mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">
                    School & College
                </h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    School, college and coaching institute websites.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="xl:p-8 lg:p-6 md:p-5 p-5 bg-white rounded-2xl shadow-xl transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-building text-green-600 text-4xl mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">
                    Corporate Business
                </h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    Professional websites for companies and enterprises.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="xl:p-8 lg:p-6 md:p-5 p-5 bg-white rounded-2xl shadow-xl transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-house text-green-600 text-4xl mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">
                    Real Estate
                </h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    Property listing and real estate business websites.
                </p>
            </div>

            <!-- Card 6 -->
            <div class="xl:p-8 lg:p-6 md:p-5 p-5 bg-white rounded-2xl shadow-xl transition-all duration-300 hover:bg-black hover:text-white hover:-translate-y-2 hover:shadow-2xl group">
                <i class="fa-solid fa-utensils text-green-600 text-4xl mb-4 group-hover:text-white transition-all duration-300"></i>
                <h3 class="text-xl font-semibold mb-2">
                    Restaurant & Food
                </h3>
                <p class="text-gray-600 group-hover:text-gray-200 transition-all duration-300">
                    Restaurant websites with online ordering and delivery.
                </p>
            </div>

        </div>

    </div>

</section>
<!-- ===================== FINAL CTA ===================== -->

<section class="py-20 bg-gray-900 text-white">

    <div class="max-w-5xl mx-auto text-center px-6">

        <h2 class="text-5xl font-bold mb-5">
            Let's Build Something Amazing Together
        </h2>

        <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-10">
            Whether you need a Business Website,
            eCommerce Store, Corporate Portal or Custom Web Application,
            our expert developers are ready to help.
        </p>

        <div class="flex flex-wrap justify-center gap-5">

            <button onclick="openModall()"
                class="bg-green-600 hover:bg-green-700 px-10 py-4 rounded-xl text-lg font-semibold transition">

                Request Free Consultation

            </button>

            <a href="{{ url('/contact-us') }}"
                class="border border-white px-10 py-4 rounded-xl text-lg font-semibold hover:bg-white hover:text-black transition">

                Contact Us

            </a>

        </div>

    </div>

</section>

<!-- ===================== FAQ ===================== -->
<section class="py-20 bg-gray-50">

    <div class="max-w-5xl mx-auto px-6">

        <div class="text-center mb-14">

            <span class="text-green-600 font-semibold uppercase">
                FAQs
            </span>

            <h2 class="text-4xl font-bold mt-3">
                Frequently Asked Questions
            </h2>

            <p class="text-gray-600 mt-4 max-w-3xl mx-auto">
                Find answers to the most common questions about our website development services.
            </p>

        </div>

        <div class="space-y-5">

            <!-- FAQ 1 -->
            <details class="group bg-white rounded-2xl shadow-lg border hover:shadow-xl transition-all duration-300">
                <summary class="flex items-center justify-between cursor-pointer p-6 list-none">
                    <h3 class="text-lg font-semibold">
                        How long does it take to develop a business website?
                    </h3>

                    <span class="text-3xl font-bold text-green-600 group-open:hidden">+</span>
                    <span class="text-3xl font-bold text-red-500 hidden group-open:block">−</span>
                </summary>

                <div class="px-6 pb-6 text-gray-600 leading-7">
                    A standard business website usually takes <strong>7–15 working days</strong>.
                    Larger eCommerce websites or custom web applications may take 3–8 weeks depending
                    on features and project requirements.
                </div>
            </details>

            <!-- FAQ 2 -->
            <details class="group bg-white rounded-2xl shadow-lg border hover:shadow-xl transition-all duration-300">
                <summary class="flex items-center justify-between cursor-pointer p-6 list-none">
                    <h3 class="text-lg font-semibold">
                        Will my website be mobile-friendly and responsive?
                    </h3>

                    <span class="text-3xl font-bold text-green-600 group-open:hidden">+</span>
                    <span class="text-3xl font-bold text-red-500 hidden group-open:block">−</span>
                </summary>

                <div class="px-6 pb-6 text-gray-600 leading-7">
                    Yes. Every website we develop is fully responsive and optimized for
                    desktop, tablet and mobile devices to provide the best user experience.
                </div>
            </details>

            <!-- FAQ 3 -->
            <details class="group bg-white rounded-2xl shadow-lg border hover:shadow-xl transition-all duration-300">
                <summary class="flex items-center justify-between cursor-pointer p-6 list-none">
                    <h3 class="text-lg font-semibold">
                        Do you provide SEO-friendly website development?
                    </h3>

                    <span class="text-3xl font-bold text-green-600 group-open:hidden">+</span>
                    <span class="text-3xl font-bold text-red-500 hidden group-open:block">−</span>
                </summary>

                <div class="px-6 pb-6 text-gray-600 leading-7">
                    Yes. Our websites include SEO-friendly URLs, fast loading speed,
                    mobile responsiveness, clean code, schema-ready structure and
                    Core Web Vitals optimization for better Google rankings.
                </div>
            </details>

            <!-- FAQ 4 -->
            <details class="group bg-white rounded-2xl shadow-lg border hover:shadow-xl transition-all duration-300">
                <summary class="flex items-center justify-between cursor-pointer p-6 list-none">
                    <h3 class="text-lg font-semibold">
                        Can you redesign my existing website?
                    </h3>

                    <span class="text-3xl font-bold text-green-600 group-open:hidden">+</span>
                    <span class="text-3xl font-bold text-red-500 hidden group-open:block">−</span>
                </summary>

                <div class="px-6 pb-6 text-gray-600 leading-7">
                    Absolutely. We redesign outdated websites into modern,
                    responsive, SEO-friendly and high-performance websites
                    that improve user experience and lead generation.
                </div>
            </details>

            <!-- FAQ 5 -->
            <details class="group bg-white rounded-2xl shadow-lg border hover:shadow-xl transition-all duration-300">
                <summary class="flex items-center justify-between cursor-pointer p-6 list-none">
                    <h3 class="text-lg font-semibold">
                        Which technologies do you use for website development?
                    </h3>

                    <span class="text-3xl font-bold text-green-600 group-open:hidden">+</span>
                    <span class="text-3xl font-bold text-red-500 hidden group-open:block">−</span>
                </summary>

                <div class="px-6 pb-6 text-gray-600 leading-7">
                    We develop websites using Laravel, PHP, React JS, Node JS,
                    WordPress, MySQL, HTML5, CSS3 and Tailwind CSS based on your project requirements.
                </div>
            </details>

            <!-- FAQ 6 -->
            <details class="group bg-white rounded-2xl shadow-lg border hover:shadow-xl transition-all duration-300">
                <summary class="flex items-center justify-between cursor-pointer p-6 list-none">
                    <h3 class="text-lg font-semibold">
                        Do you provide website maintenance and support?
                    </h3>

                    <span class="text-3xl font-bold text-green-600 group-open:hidden">+</span>
                    <span class="text-3xl font-bold text-red-500 hidden group-open:block">−</span>
                </summary>

                <div class="px-6 pb-6 text-gray-600 leading-7">
                    Yes. We provide regular website maintenance, security updates,
                    backups, bug fixes, performance optimization and technical support
                    after the website goes live.
                </div>
            </details>

        </div>

    </div>

</section>

<style>
summary::-webkit-details-marker{
display:none;
}
summary{
list-style:none;
}
</style>
</x-layout>