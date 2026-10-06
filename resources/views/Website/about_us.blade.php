<x-master-page title="About Us | Textora SMS">
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
      "@type": "AboutPage",
      "@id": "https://textorasms.com/about-us/#webpage",
      "url": "https://textorasms.com/about-us",
      "name": "About Textora Technologies Pvt. Ltd. | Founder, Vision & Mission",
      "description": "Founded by Praveen Kumar Dubey (Founder & CEO) and Abhilasha Dubey (Co-Founder & Director), Textora Technologies Pvt. Ltd. provides enterprise-grade WhatsApp Business API, Bulk SMS, Voice, RCS Messaging, OTP, DLT Compliance, and communication API solutions. Our mission is to simplify business communication through reliable, secure, scalable, and innovative messaging services.",
      "publisher": {
        "@type": "Organization",
        "name": "Textora Technologies Pvt. Ltd.",
        "logo": {
          "@type": "ImageObject",
          "url": "https://textorasms.com/images/textorasms-svg-logo.svg"
        }
      },
      "founder": 
  {
    "@type": "Person",
    "name": "Praveen Kumar Dubey",
    "jobTitle": "Founder & CEO"
  },
  {
    "@type": "Person",
    "name": "Abhilasha Dubey",
    "jobTitle": "Co-Founder & Director"
  }
],
      "mainEntity": {
        "@type": "Organization",
        "name": "Textora Technologies",
        "slogan": "Bridge the gap between businesses and their customers through reliable messaging.",
        "knowsAbout": [
          "WhatsApp Business API",
          "Bulk SMS",
          "RCS Messaging",
          "Voice Call",
          "DLT Compliance",
          "A2P Messaging"
        ]
      }
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
          "name": "About Us",
          "item": "https://textorasms.com/about-us"
        }
      ]
    }
  ]
}
</script>



    @endpush
<!-- =========================================
PREMIUM HERO SECTION
========================================== -->

<section class="about-page relative min-h-[720px] overflow-hidden">

    <!-- Premium Background -->
    <div class="absolute inset-0 overflow-hidden">

        <div
            class="absolute -top-40 -left-40 w-[620px] h-[620px] rounded-full bg-emerald-300/20 blur-[180px]">
        </div>

        <div
            class="absolute top-0 right-0 w-[520px] h-[520px] rounded-full bg-green-200/25 blur-[180px]">
        </div>

        <div
            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[700px] h-[250px] rounded-full bg-lime-200/20 blur-[170px]">
        </div>

        <!-- Grid Pattern -->
        <div
            class="absolute inset-0 opacity-[0.03]"
            style="background-image:linear-gradient(to right,#16a34a 1px,transparent 1px),linear-gradient(to bottom,#16a34a 1px,transparent 1px);background-size:60px 60px;">
        </div>

    </div>
    <!-- Blur Background -->

    <div class="absolute -top-40 -left-40 w-[500px] h-[500px] bg-green-300/15 blur-[170px] rounded-full"></div>

    <div class="absolute top-0 right-0 w-[450px] h-[450px] bg-emerald-300/15 blur-[170px] rounded-full"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-12 lg:py-14">

        <div class="grid lg:grid-cols-2 gap-10 items-center">

            <!-- LEFT -->

            <div>

<span class="inline-flex items-center mt-4 lg:mt-6 px-5 py-2 rounded-full bg-white border border-green-200 text-green-700 text-sm font-semibold shadow-md">
    ABOUT US
</span>

                

                <h1 class="mt-5 text-4xl lg:text-[58px] font-black leading-[1.05] tracking-tight text-slate-900">

                    About

                    <span class="bg-gradient-to-r from-green-500 via-emerald-500 to-green-700 bg-clip-text text-transparent">

                        Textora Technologies

                    </span>

                    Pvt Ltd

                </h1>

                <h2 class="mt-6 text-2xl lg:text-3xl font-bold text-slate-800">

                    Creators of Textora SMS

                </h2>

                <p class="mt-2 inline-flex items-center text-base font-semibold text-green-700 bg-green-50 border border-green-200 rounded-full px-4 py-2 w-fit">

                    <i class="fa-solid fa-bolt mr-2 text-green-600"></i>
Business Communication Platform

                </p>

                <p class="mt-6 max-w-xl text-gray-600 text-lg leading-8">

                   Helping businesses connect, engage and scale with Official WhatsApp Business API, Bulk SMS, RCS Messaging, Voice Broadcasting, Email Marketing and enterprise communication solutions built for modern businesses.

                </p>
<!-- =========================================
FEATURES
========================================= -->

<div class="grid grid-cols-2 lg:grid-cols-4 gap-5 mt-10">

    <!-- Reliable Platform -->

    <div class="group text-center">

        <div
            class="mx-auto w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500 to-emerald-600 shadow-lg shadow-green-300/40 flex items-center justify-center transition-all duration-300 group-hover:-translate-y-2 group-hover:scale-105 duration-300">

            <i class="fa-solid fa-circle-check text-white text-3xl"></i>

        </div>

        <h4 class="mt-3 text-base lg:text-lg font-bold text-slate-900">
            Reliable
        </h4>

        <p class="mt-1 text-sm text-slate-500">
            Platform
        </p>

    </div>

    <!-- Enterprise Grade -->

    <div class="group text-center">

        <div
            class="mx-auto w-16 h-16 rounded-2xl bg-gradient-to-br from-sky-500 to-blue-600 shadow-lg shadow-blue-300/40 flex items-center justify-center transition-all duration-300 group-hover:-translate-y-2 group-hover:scale-105 duration-300">

            <i class="fa-solid fa-database text-white text-3xl"></i>

        </div>

        <h4 class="mt-3 text-base lg:text-lg font-bold text-slate-900">
            Enterprise
        </h4>

        <p class="mt-1 text-sm text-slate-500">
            Grade
        </p>

    </div>

    <!-- Innovation -->

    <div class="group text-center">

        <div
            class="mx-auto w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-400 to-orange-500 shadow-lg shadow-orange-300/40 flex items-center justify-center transition-all duration-300 group-hover:-translate-y-2 group-hover:scale-105 duration-300">

            <i class="fa-solid fa-wand-magic-sparkles text-white text-3xl"></i>

        </div>

        <h4 class="mt-3 text-base lg:text-lg font-bold text-slate-900">
            Smart
        </h4>

        <p class="mt-1 text-sm text-slate-500">
            Innovation
        </p>

    </div>

    <!-- Support -->

    <div class="group text-center">

        <div
            class="mx-auto w-16 h-16 rounded-2xl bg-gradient-to-br from-fuchsia-500 to-purple-600 shadow-lg shadow-purple-300/40 flex items-center justify-center transition-all duration-300 group-hover:-translate-y-2 group-hover:scale-105 duration-300">

            <i class="fa-solid fa-headset text-white text-3xl"></i>

        </div>

        <h4 class="mt-3 text-base lg:text-lg font-bold text-slate-900">
            24×7
        </h4>

        <p class="mt-1 text-sm text-slate-500">
            Support
        </p>

    </div>

</div>
<!-- Buttons -->

                <div class="flex flex-wrap gap-4 mt-12">

                    <a href="/contact-us"
                        class="px-8 py-4 rounded-xl bg-gradient-to-r from-green-600 to-green-500 text-white font-semibold shadow-lg hover:scale-105 transition duration-300">

                        Contact Us

                    </a>

                    <a href="https://textorasms.com/pricing-web"
                        class="px-8 py-4 rounded-xl border-2 border-green-600 text-green-700 font-semibold hover:bg-green-600 hover:text-white transition duration-300">

                        Explore Our services

                    </a>

                </div>

            </div>

            <!-- RIGHT -->

        <!-- RIGHT -->

<div class="relative flex justify-center lg:justify-end">

    <!-- Green Glow -->
    <div class="absolute -inset-6 bg-gradient-to-r from-green-400/20 via-emerald-300/10 to-green-400/20 blur-3xl rounded-[40px]"></div>

    <!-- Main Image Card -->
    <div class="relative overflow-hidden rounded-[32px]
        border border-green-200/70
        bg-gradient-to-br from-white via-green-50 to-white
        shadow-[0_30px_80px_rgba(22,163,74,0.18)]">

        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-30"
            style="background-image:radial-gradient(circle at 1px 1px,#22c55e 1px,transparent 0);background-size:24px 24px;">
        </div>

        <img
            src="{{ asset('images/about-home.jpeg') }}"
            alt="Textora Technologies"
            class="relative w-full max-w-[620px] object-cover">

    </div>
    

    <!-- WhatsApp -->
    <div class="absolute top-8 right-4 bg-white/90 backdrop-blur-xl border border-green-100 rounded-2xl shadow-xl p-4 hover:-translate-y-1 transition">

        <i class="fab fa-whatsapp text-green-600 text-3xl"></i>

    </div>

    <!-- Chat -->
    <div class="absolute left-0 top-36 bg-white/90 backdrop-blur-xl border border-green-100 rounded-2xl shadow-xl p-4 hover:-translate-y-1 transition">

        <i class="fas fa-comments text-green-600 text-2xl"></i>

    </div>

    <!-- Analytics -->
    <div class="absolute left-6 bottom-20 bg-white/90 backdrop-blur-xl border border-green-100 rounded-2xl shadow-xl p-4 hover:-translate-y-1 transition">

        <i class="fas fa-chart-line text-green-600 text-2xl"></i>

    </div>

    <!-- Email -->
    <div class="absolute right-4 bottom-10 bg-white/90 backdrop-blur-xl border border-green-100 rounded-2xl shadow-xl p-4 hover:-translate-y-1 transition">

        <i class="fas fa-envelope text-green-600 text-2xl"></i>

    </div>

</div>

<!-- =========================================
OUR JOURNEY (LEFT)
========================================= -->
<div class="grid lg:grid-cols-[380px_1fr] gap-14 items-center">

<div class="bg-white rounded-[32px] border border-green-100 shadow-[0_25px_60px_rgba(22,163,74,.08)] p-10 sticky top-28">

    <span class="inline-flex items-center gap-2 text-green-700 text-sm font-bold uppercase tracking-[2px]">

        OUR JOURNEY SO FAR

    </span>

    <div class="relative mt-10">

        <!-- Timeline Line -->

        <div class="absolute left-[22px] top-5 bottom-5 w-[2px] bg-green-200"></div>

        <!-- Item -->

        <div class="relative flex gap-6 pb-10">

            <div class="relative z-10">

                <div class="w-11 h-11 rounded-full bg-white border-2 border-green-500 shadow-md flex items-center justify-center">

                    <i class="fas fa-calendar-alt text-green-600 text-lg"></i>

                </div>

            </div>

            <div>

                <span class="text-green-600 text-sm font-bold">

                    3 December 2025

                </span>

                <h4 class="mt-1 text-lg font-bold text-gray-900">

                    Textora Technologies Pvt Ltd Incorporated

                </h4>

                <p class="mt-2 text-gray-500 leading-7">

                    Our company was officially incorporated, laying the foundation for a modern business communication platform.

                </p>

            </div>

        </div>

        <!-- Item -->

        <div class="relative flex gap-6 pb-10">

            <div class="relative z-10">

                <div class="w-11 h-11 rounded-full bg-white border-2 border-green-500 shadow-md flex items-center justify-center">

                    <i class="fas fa-rocket text-green-600 text-lg"></i>

                </div>

            </div>

            <div>

                <span class="text-green-600 text-sm font-bold">

                    December 2025

                </span>

                <h4 class="mt-1 text-lg font-bold text-gray-900">

                    Textora SMS Platform Launched

                </h4>

                <p class="mt-2 text-gray-500 leading-7">

                    We launched our own communication platform to help businesses automate customer engagement.

                </p>

            </div>

        </div>

        <!-- Item -->

        <div class="relative flex gap-6 pb-10">

            <div class="relative z-10">

                <div class="w-11 h-11 rounded-full bg-white border-2 border-green-500 shadow-md flex items-center justify-center">

                    <i class="fab fa-whatsapp text-green-600 text-xl"></i>

                </div>

            </div>

            <div>

                <span class="text-green-600 text-sm font-bold">

                    2026

                </span>

                <h4 class="mt-1 text-lg font-bold text-gray-900">

                    WhatsApp Business API & RCS Messaging

                </h4>

                <p class="mt-2 text-gray-500 leading-7">

                    Expanded our communication solutions with official WhatsApp Business API and RCS Messaging.

                </p>

            </div>

        </div>

        <!-- Item -->

        <div class="relative flex gap-6 pb-10">

            <div class="relative z-10">

                <div class="w-11 h-11 rounded-full bg-white border-2 border-green-500 shadow-md flex items-center justify-center">

                    <i class="fas fa-users text-green-600"></i>

                </div>

            </div>

            <div>

                <span class="text-green-600 text-sm font-bold">

                    2026

                </span>

                <h4 class="mt-1 text-lg font-bold text-gray-900">

                    Serving Businesses Across India

                </h4>

                <p class="mt-2 text-gray-500 leading-7">

                    Trusted by businesses from multiple industries across the country.

                </p>

            </div>

        </div>

        <!-- Item -->

        <div class="relative flex gap-6">

            <div class="relative z-10">

                <div class="w-11 h-11 rounded-full bg-white border-2 border-green-500 shadow-md flex items-center justify-center">

                    <i class="far fa-star text-green-600"></i>

                </div>

            </div>

            <div>

                <span class="text-green-600 text-sm font-bold">

                    Future

                </span>

                <h4 class="mt-1 text-lg font-bold text-gray-900">

                    Building AI-Powered Communication Solutions

                </h4>

                <p class="mt-2 text-gray-500 leading-7">

                    Continuously innovating to build smarter, faster and more impactful communication products.

                </p>

            </div>

        </div>

    </div>

</div>
<!-- RIGHT SIDE -->
<div class="grid lg:grid-cols-[1fr_430px] gap-10 items-center">

    <!-- =========================================
    OUR STORY
    ========================================= -->

    <div class="max-w-2xl">

        <!-- Badge -->

        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-green-50 border border-green-200 text-green-700 text-sm font-semibold">

            <i class="fas fa-book-open"></i>

            Our Story

        </span>

        <!-- Heading -->

        <h2 class="mt-7 text-5xl lg:text-6xl font-black leading-tight text-gray-900">

            Building India's

            <span class="bg-gradient-to-r from-green-600 via-emerald-500 to-green-400 bg-clip-text text-transparent">

                Trusted Communication

            </span>

            Platform.

        </h2>

        <p class="mt-8 text-lg lg:text-xl leading-9 text-gray-600">

            At <strong>Textora Technologies Pvt Ltd</strong>, we believe business communication should be simple, reliable and powerful. That's why we built an enterprise messaging platform that enables businesses to connect with customers instantly across multiple channels.

        </p>

        <p class="mt-6 text-lg leading-8 text-gray-600">

            Our platform offers WhatsApp Business API, Bulk SMS, RCS Messaging, Voice SMS and Email Marketing—helping businesses automate conversations, notifications and customer engagement from one dashboard.

        </p>

        <!-- Features -->

        <div class="grid sm:grid-cols-2 gap-6 mt-10">

            <div class="flex gap-4">

                <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center">
                    <i class="fas fa-check text-green-600"></i>
                </div>

                <div>
                    <h4 class="font-bold text-gray-900">Official Meta API</h4>
                    <p class="text-sm text-gray-500 mt-1">Verified WhatsApp Business Solutions.</p>
                </div>

            </div>

            <div class="flex gap-4">

                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center">
                    <i class="fas fa-shield-alt text-blue-600"></i>
                </div>

                <div>
                    <h4 class="font-bold text-gray-900">Enterprise Security</h4>
                    <p class="text-sm text-gray-500 mt-1">Reliable & secure infrastructure.</p>
                </div>

            </div>

            <div class="flex gap-4">

                <div class="w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center">
                    <i class="fas fa-paper-plane text-orange-500"></i>
                </div>

                <div>
                    <h4 class="font-bold text-gray-900">High Speed Delivery</h4>
                    <p class="text-sm text-gray-500 mt-1">Millions of messages every month.</p>
                </div>

            </div>

            <div class="flex gap-4">

                <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center">
                    <i class="fas fa-headset text-purple-600"></i>
                </div>

                <div>
                    <h4 class="font-bold text-gray-900">24×7 Support</h4>
                    <p class="text-sm text-gray-500 mt-1">Expert assistance whenever needed.</p>
                </div>

            </div>

        </div>

        <!-- Quote -->

        <div class="mt-10 border-l-4 border-green-600 pl-6">

            <p class="italic text-lg leading-8 text-gray-700">

                "Our mission is to empower businesses with intelligent communication solutions that drive growth and customer engagement."

            </p>

        </div>

        <!-- Signature -->

        <div class="mt-10 flex items-center gap-5">

            <img src="{{ asset('images/signature.png') }}"
                class="w-36 object-contain">

            <div>

                <h4 class="text-2xl font-bold text-gray-900">

                    Praveen Kumar Dubey

                </h4>

                <p class="text-green-600 font-semibold">

                    Founder & CEO

                </p>

                <p class="text-gray-500">

                    Textora Technologies Pvt Ltd

                </p>

            </div>

        </div>

    </div>
<!-- =========================================
FOUNDER IMAGE PREMIUM (UPDATED)
========================================= -->

<div class="relative flex items-center justify-center lg:justify-end min-h-[640px] overflow-hidden">

    <!-- Background Glow -->
    <div class="absolute w-[620px] h-[620px] rounded-full bg-green-500/20 blur-[180px]"></div>

    <!-- Outer Ring -->
    <div class="absolute w-[540px] h-[540px] rounded-full border border-green-400/20"></div>

    <!-- Floating Lights -->
    <div class="absolute top-16 left-10 w-3 h-3 rounded-full bg-green-400 shadow-[0_0_20px_#22c55e] animate-pulse"></div>
    <div class="absolute bottom-24 right-10 w-3 h-3 rounded-full bg-lime-300 shadow-[0_0_18px_#84cc16] animate-pulse"></div>
    <div class="absolute top-1/2 right-0 w-2 h-2 rounded-full bg-green-300 animate-ping"></div>

    <!-- Back Card -->
    <div
        class="absolute
        w-[420px]
        h-[520px]
        rounded-[42px]
        rotate-[8deg]
        bg-gradient-to-br
        from-green-700
        via-green-600
        to-emerald-500
        opacity-40
        shadow-[0_0_70px_rgba(34,197,94,.45)]">
    </div>

    <!-- Glass Card -->
    <div
        class="absolute
        w-[420px]
        h-[520px]
        rounded-[42px]
        rotate-[3deg]
        border
        border-green-300/70
        bg-gradient-to-br
        from-green-700/70
        via-green-600/45
        to-green-900/70
        backdrop-blur-xl
        shadow-[0_35px_90px_rgba(0,0,0,.35)]">

        <!-- Gloss -->
        <div
            class="absolute
            top-0
            left-0
            w-full
            h-28
            rounded-t-[42px]
            bg-gradient-to-b
            from-white/30
            to-transparent">
        </div>

        <!-- Dot Pattern -->
        <div class="absolute left-8 top-10 grid grid-cols-6 gap-3 opacity-25">

            <span class="w-1.5 h-1.5 rounded-full bg-green-200"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-green-200"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-green-200"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-green-200"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-green-200"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-green-200"></span>

            <span class="w-1.5 h-1.5 rounded-full bg-green-200"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-green-200"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-green-200"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-green-200"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-green-200"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-green-200"></span>

        </div>

    </div>

    <!-- Founder Image -->
    <div class="relative z-20">

        <img
            src="{{ asset('images/praveendubey.png') }}"
            alt="Praveen Kumar Dubey"
            class="w-[430px] lg:w-[460px] max-w-full object-contain drop-shadow-[0_40px_60px_rgba(0,0,0,.45)]">

        <!-- Premium White Badge -->
        <div
            class="absolute
            left-1/2
            -translate-x-1/2
            -bottom-10
            w-[390px]
            rounded-[28px]
            bg-white/95
            backdrop-blur-xl
            border
            border-green-200
            shadow-[0_20px_60px_rgba(255,255,255,.18),0_0_45px_rgba(34,197,94,.30)]
            px-6
            py-5">

            <div class="flex items-center gap-5">

             

                <div class="flex-1">

                    <h4 class="text-[30px] leading-none font-bold text-gray-900">
                        Praveen Kumar Dubey
                    </h4>

                    <div class="w-full h-px bg-green-300 my-3"></div>

                    <p class="text-green-600 font-semibold text-lg">
                        Founder & CEO
                    </p>

                </div>

            </div>

        </div>

    </div>

</div></div> <!-- Right Side Grid -->

</div> <!-- Main Grid -->

</section> <!-- About Section -->

<!-- =========================================
OUR VALUES
========================================= -->

<section class="py-28 bg-gradient-to-b from-white via-[#f7fcf8] to-white relative overflow-hidden">

    <!-- Background Blur -->

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[650px] h-[650px] bg-green-100 rounded-full blur-[180px] opacity-40"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

        <!-- Heading -->

        <div class="text-center max-w-3xl mx-auto">

            <span class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-green-50 border border-green-200 text-green-700 font-semibold">

                <i class="fas fa-gem text-green-600"></i>

                OUR VALUES

            </span>

            <h2 class="mt-7 text-4xl lg:text-5xl font-black text-gray-900 leading-tight">

                What Drives

                <span class="bg-gradient-to-r from-green-600 via-emerald-500 to-green-400 bg-clip-text text-transparent">

                    Textora

                </span>

            </h2>

            <p class="mt-6 text-lg text-gray-600 leading-8">

                Every communication solution we build is powered by innovation,
                customer success, trust and enterprise-grade security.

            </p>

        </div>


        <!-- Cards -->

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-20">

            <!-- Card 1 -->

            <div class="group relative rounded-[28px] bg-white border border-green-100 p-8 overflow-hidden transition duration-500 hover:-translate-y-4 hover:shadow-[0_30px_70px_rgba(22,163,74,.18)]">

                <div class="absolute inset-0 bg-gradient-to-br from-green-50 via-white to-green-100 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="relative z-10">

                    <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center shadow-lg transition duration-500 group-hover:rotate-6 group-hover:scale-110">

                        <i class="fas fa-lightbulb text-white text-3xl"></i>

                    </div>

                    <h3 class="mt-8 text-2xl font-bold text-gray-900">

                        Innovation

                    </h3>

                    <p class="mt-4 text-gray-600 leading-8">

                        Building smarter communication platforms powered by modern technology and AI-driven automation.

                    </p>

                </div>

            </div>



            <!-- Card 2 -->

            <div class="group relative rounded-[28px] bg-white border border-blue-100 p-8 overflow-hidden transition duration-500 hover:-translate-y-4 hover:shadow-[0_30px_70px_rgba(59,130,246,.18)]">

                <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-blue-100 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="relative z-10">

                    <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center shadow-lg transition duration-500 group-hover:rotate-6 group-hover:scale-110">

                        <i class="fas fa-shield-virus text-white text-3xl"></i>

                    </div>

                    <h3 class="mt-8 text-2xl font-bold text-gray-900">

                        Reliability

                    </h3>

                    <p class="mt-4 text-gray-600 leading-8">

                        Enterprise-grade infrastructure delivering maximum uptime, scalability and dependable messaging.

                    </p>

                </div>

            </div>



            <!-- Card 3 -->

            <div class="group relative rounded-[28px] bg-white border border-orange-100 p-8 overflow-hidden transition duration-500 hover:-translate-y-4 hover:shadow-[0_30px_70px_rgba(249,115,22,.18)]">

                <div class="absolute inset-0 bg-gradient-to-br from-orange-50 via-white to-orange-100 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="relative z-10">

                    <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-orange-400 to-orange-500 flex items-center justify-center shadow-lg transition duration-500 group-hover:rotate-6 group-hover:scale-110">

                        <i class="fas fa-handshake text-white text-3xl"></i>

                    </div>

                    <h3 class="mt-8 text-2xl font-bold text-gray-900">

                        Customer First

                    </h3>

                    <p class="mt-4 text-gray-600 leading-8">

                        Every product is designed around customer success, better engagement and long-term business growth.

                    </p>

                </div>

            </div>



            <!-- Card 4 -->

            <div class="group relative rounded-[28px] bg-white border border-purple-100 p-8 overflow-hidden transition duration-500 hover:-translate-y-4 hover:shadow-[0_30px_70px_rgba(147,51,234,.18)]">

                <div class="absolute inset-0 bg-gradient-to-br from-purple-50 via-white to-purple-100 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="relative z-10">

                    <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-purple-500 to-fuchsia-600 flex items-center justify-center shadow-lg transition duration-500 group-hover:rotate-6 group-hover:scale-110">

                        <i class="fas fa-user-shield text-white text-3xl"></i>

                    </div>

                    <h3 class="mt-8 text-2xl font-bold text-gray-900">

                        Security

                    </h3>

                    <p class="mt-4 text-gray-600 leading-8">

                        Advanced encryption, secure cloud infrastructure and compliance to protect every customer interaction.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- =========================================
WHY BUSINESSES TRUST TEXTORA
========================================= -->

<section class="py-20 lg:py-24 bg-gradient-to-b from-white via-[#f8fcf9] to-white relative overflow-hidden">

    <!-- Background Glow -->

    <div class="absolute -top-20 left-1/2 -translate-x-1/2 w-[700px] h-[700px] bg-green-100 rounded-full blur-[180px] opacity-40"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

        <!-- Heading -->

        <div class="text-center max-w-3xl mx-auto">

            <span class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-green-50 border border-green-200 text-green-700 font-semibold">

                <i class="fas fa-award"></i>

                WHY TEXTORA

            </span>

            <h2 class="mt-6 text-4xl lg:text-6xl font-black text-gray-900 leading-tight">

                Why Businesses

                <span class="bg-gradient-to-r from-green-600 via-emerald-500 to-green-400 bg-clip-text text-transparent">

                    Trust Textora

                </span>

            </h2>

            <p class="mt-6 text-lg leading-8 text-gray-600">

                Businesses across India rely on Textora for secure,
                scalable and enterprise-grade communication solutions.

            </p>

        </div>



        <!-- Cards -->

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-14">
            <!-- Card -->

            <div class="group relative bg-white rounded-[30px] p-6 border border-gray-100 overflow-hidden transition-all duration-500 hover:-translate-y-4 hover:border-green-500 hover:shadow-[0_35px_90px_rgba(22,163,74,.18)]">

                <div class="absolute inset-0 bg-gradient-to-br from-green-50 via-white to-green-100 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="relative z-10">

                    <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center shadow-xl group-hover:rotate-6 group-hover:scale-110 transition">

                        <i class="fas fa-server text-white text-3xl"></i>

                    </div>

                    <h3 class="mt-6 text-4xl font-black text-gray-900">

                        99.9%

                    </h3>

                    <p class="mt-3 text-gray-600 leading-7">

                        Platform Uptime with enterprise reliability and uninterrupted messaging.

                    </p>

                </div>

            </div>



            <!-- Card -->

            <div class="group relative bg-white rounded-[30px] p-6 border border-gray-100 overflow-hidden transition-all duration-500 hover:-translate-y-4 hover:border-blue-500 hover:shadow-[0_35px_90px_rgba(59,130,246,.18)]">

                <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-blue-100 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="relative z-10">

                    <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center shadow-xl group-hover:rotate-6 group-hover:scale-110 transition">

                        <i class="fas fa-headset text-white text-3xl"></i>

                    </div>

                    <h3 class="mt-6 text-4xl font-black text-gray-900">

                        24×7

                    </h3>

                    <p class="mt-3 text-gray-600 leading-7">

                        Dedicated technical support to help your business anytime.

                    </p>

                </div>

            </div>



            <!-- Card -->

            <div class="group relative bg-white rounded-[30px] p-6 border border-gray-100 overflow-hidden transition-all duration-500 hover:-translate-y-4 hover:border-orange-500 hover:shadow-[0_35px_90px_rgba(249,115,22,.18)]">

                <div class="absolute inset-0 bg-gradient-to-br from-orange-50 via-white to-orange-100 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="relative z-10">

                    <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-orange-400 to-orange-500 flex items-center justify-center shadow-xl group-hover:rotate-6 group-hover:scale-110 transition">

                        <i class="fas fa-comments text-white text-3xl"></i>

                    </div>

                    <h3 class="mt-6 text-xl font-black text-gray-900">

                        Multi Channel

                    </h3>

                    <p class="mt-3 text-gray-600 leading-7">

                        WhatsApp Business API, Bulk SMS, RCS Messaging, Voice SMS & Email.

                    </p>

                </div>

            </div>



            <!-- Card -->

            <div class="group relative bg-white rounded-[30px] p-6 border border-gray-100 overflow-hidden transition-all duration-500 hover:-translate-y-4 hover:border-purple-500 hover:shadow-[0_35px_90px_rgba(147,51,234,.18)]">

                <div class="absolute inset-0 bg-gradient-to-br from-purple-50 via-white to-purple-100 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="relative z-10">

                    <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-purple-500 to-fuchsia-600 flex items-center justify-center shadow-xl group-hover:rotate-6 group-hover:scale-110 transition">

                        <i class="fas fa-lock text-white text-3xl"></i>

                    </div>

                    <h3 class="mt-6 text-4xl font-black text-gray-900">

                        Enterprise

                    </h3>

                    <p class="mt-6 text-gray-600 leading-7">

                        Secure cloud infrastructure built for startups, SMEs and enterprise businesses.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- =========================================
OUR LEADERSHIP
========================================= -->

<section class="py-16 lg:py-20 bg-[#08130D] relative overflow-hidden">

    <!-- Background Glow -->

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[700px] bg-green-500/10 blur-[180px] rounded-full"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

        <!-- Heading -->

        <div class="text-center mb-12">

            <span class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-green-500/10 border border-green-500/20 text-green-400 text-sm font-semibold tracking-wider">

                <i class="fas fa-users"></i>

                OUR LEADERSHIP

            </span>

            <h2 class="mt-6 text-4xl lg:text-5xl font-black text-white">

                Meet Our

                <span class="bg-gradient-to-r from-green-400 to-emerald-300 bg-clip-text text-transparent">

                    Founders

                </span>

            </h2>

            <p class="mt-4 text-gray-400 text-lg">

                Passionate leaders building the future of business communication.

            </p>

        </div>



        <!-- Founder Cards -->

        <div class="grid lg:grid-cols-2 gap-6">



     <!-- Founder -->

<div class="group relative overflow-hidden rounded-[28px] border border-white/10 bg-white/5 backdrop-blur-xl p-6 transition-all duration-500 hover:-translate-y-2 hover:border-green-500/40 hover:shadow-[0_20px_60px_rgba(34,197,94,.20)]">

    <!-- Hover Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

    <div class="relative flex items-center gap-5 founder-card">

        <!-- Image -->
        <div class="relative flex-shrink-0">

            <!-- Glow -->
            <div class="absolute inset-0 rounded-full bg-green-500 blur-xl opacity-30"></div>

            <!-- Circle Image -->
       <div class="relative w-32 h-32 rounded-full overflow-hidden border-4 border-green-500">

    <img
        src="{{ asset('images/praveen.png') }}"
        alt="Praveen Kumar Dubey"
        class="founder-img w-full h-full object-cover object-top">

</div>

        </div>

        <!-- Content -->
        <div>

            <span class="text-green-400 text-sm font-semibold uppercase tracking-wider">
                Founder & CEO
            </span>

            <h3 class="mt-2 text-2xl font-bold text-white">
                Praveen Kumar Dubey
            </h3>

            <p class="text-green-300 mt-2 text-sm">
                Vision • Technology • Innovation
            </p>

            <p class="text-gray-400 mt-4 leading-6 text-sm">
                Passionate entrepreneur helping businesses automate customer communication through Official WhatsApp Business API, Bulk SMS and RCS Messaging.
            </p>

        </div>

    </div>

</div>      
<!-- Director -->

            <div class="group relative overflow-hidden rounded-[28px] border border-white/10 bg-white/5 backdrop-blur-xl p-6 transition-all duration-500 hover:-translate-y-2 hover:border-green-500/40 hover:shadow-[0_20px_60px_rgba(34,197,94,.20)]">

                <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="relative flex items-center gap-5">

                    <div class="relative flex-shrink-0">

                        

                        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-green-500">

                            <img
                               
    src="{{ asset('images/abhilasha.png') }}"
    class="founder-img w-full h-full object-cover object-top">

                        </div>

                    </div>

                    <div>

                        <span class="text-green-400 text-sm font-semibold uppercase tracking-wider">

                            Co-Founder & Director

                        </span>

                        <h3 class="mt-2 text-2xl font-bold text-white">

                            Abhilasha Dubey

                        </h3>

                        <p class="text-green-300 mt-2 text-sm">

                            Strategy • Growth • Operations

                        </p>

                        <p class="text-gray-400 mt-4 leading-6 text-sm">

                            Driving business growth, customer success and operational excellence while strengthening Textora's vision across India.

                        </p>

                    </div>

                </div>

            </div>



        </div>

    </div>

</section>

<!-- =========================================
ABOUT US FAQ
========================================= -->

<section class="py-20 bg-gradient-to-b from-[#f8fcf9] to-white">

    <div class="max-w-5xl mx-auto px-6">

        <!-- Heading -->

        <div class="text-center">

            <span class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-green-50 border border-green-200 text-green-700 text-sm font-semibold">

                <i class="fas fa-circle-question"></i>

                FAQs

            </span>

            <h2 class="mt-6 text-4xl lg:text-5xl font-black text-gray-900">

                Frequently Asked

                <span class="bg-gradient-to-r from-green-600 to-emerald-500 bg-clip-text text-transparent">

                    Questions

                </span>

            </h2>

            <p class="mt-5 text-lg text-gray-600 max-w-2xl mx-auto leading-8">

                Learn more about Textora Technologies, our communication platform,
                services and how we help businesses connect with customers.

            </p>

        </div>

        <!-- FAQ -->

        <div class="mt-16 space-y-5">

            <!-- 1 -->

            <details open
                class="group bg-white rounded-3xl border border-gray-200 shadow-sm hover:shadow-xl transition duration-300">

                <summary
                    class="flex justify-between items-center cursor-pointer list-none p-7 text-lg font-bold text-gray-900">

                    <span>
                        What is Textora Technologies?
                    </span>

                    <i class="fas fa-plus text-green-600 group-open:rotate-45 transition duration-300"></i>

                </summary>

                <div class="px-7 pb-7">

                    <p class="text-gray-600 leading-8">

                        Textora Technologies Pvt. Ltd. is a business communication
                        company that provides Official WhatsApp Business API,
                        Bulk SMS, RCS Messaging, Voice SMS, Email Marketing,
                        Website Development and Software Development solutions
                        for businesses across India.

                    </p>

                </div>

            </details>

            <!-- 2 -->

            <details
                class="group bg-white rounded-3xl border border-gray-200 shadow-sm hover:shadow-xl transition duration-300">

                <summary
                    class="flex justify-between items-center cursor-pointer list-none p-7 text-lg font-bold text-gray-900">

                    <span>
                        What industries does Textora serve?
                    </span>

                    <i class="fas fa-plus text-green-600 group-open:rotate-45 transition duration-300"></i>

                </summary>

                <div class="px-7 pb-7">

                    <p class="text-gray-600 leading-8">

                        Our solutions are trusted by Healthcare, Education,
                        Finance, Retail, Real Estate, E-commerce,
                        Manufacturing, Logistics, Hospitality,
                        Startups and Enterprise businesses.

                    </p>

                </div>

            </details>

            <!-- 3 -->

            <details
                class="group bg-white rounded-3xl border border-gray-200 shadow-sm hover:shadow-xl transition duration-300">

                <summary
                    class="flex justify-between items-center cursor-pointer list-none p-7 text-lg font-bold text-gray-900">

                    <span>
                        Why do businesses choose Textora?
                    </span>

                    <i class="fas fa-plus text-green-600 group-open:rotate-45 transition duration-300"></i>

                </summary>

                <div class="px-7 pb-7">

                    <p class="text-gray-600 leading-8">

                        Businesses choose Textora because of our reliable
                        infrastructure, enterprise-grade security,
                        official communication channels, fast message delivery,
                        expert technical support and scalable messaging platform.

                    </p>

                </div>

            </details>

            <!-- 4 -->

            <details
                class="group bg-white rounded-3xl border border-gray-200 shadow-sm hover:shadow-xl transition duration-300">

                <summary
                    class="flex justify-between items-center cursor-pointer list-none p-7 text-lg font-bold text-gray-900">

                    <span>
                        Do you provide API integration and automation?
                    </span>

                    <i class="fas fa-plus text-green-600 group-open:rotate-45 transition duration-300"></i>

                </summary>

                <div class="px-7 pb-7">

                    <p class="text-gray-600 leading-8">

                        Yes. We provide WhatsApp Business API integration,
                        SMS API integration, CRM integration,
                        ERP integration, automation workflows,
                        webhooks and custom software solutions.

                    </p>

                </div>

            </details>

            <!-- 5 -->

            <details
                class="group bg-white rounded-3xl border border-gray-200 shadow-sm hover:shadow-xl transition duration-300">

                <summary
                    class="flex justify-between items-center cursor-pointer list-none p-7 text-lg font-bold text-gray-900">

                    <span>
                        Does Textora provide customer support?
                    </span>

                    <i class="fas fa-plus text-green-600 group-open:rotate-45 transition duration-300"></i>

                </summary>

                <div class="px-7 pb-7">

                    <p class="text-gray-600 leading-8">

                        Yes. Our experienced support team assists you with
                        onboarding, API setup, campaign management,
                        technical troubleshooting and ongoing platform support
                        to ensure smooth business communication.

                    </p>

                </div>

            </details>

            <!-- 6 -->

            <details
                class="group bg-white rounded-3xl border border-gray-200 shadow-sm hover:shadow-xl transition duration-300">

                <summary
                    class="flex justify-between items-center cursor-pointer list-none p-7 text-lg font-bold text-gray-900">

                    <span>
                        What is the mission of Textora Technologies?
                    </span>

                    <i class="fas fa-plus text-green-600 group-open:rotate-45 transition duration-300"></i>

                </summary>

                <div class="px-7 pb-7">

                    <p class="text-gray-600 leading-8">

                        Our mission is to empower businesses with secure,
                        intelligent and scalable communication solutions
                        that simplify customer engagement,
                        improve operational efficiency and accelerate growth.

                    </p>

                </div>

            </details>

        </div>

    </div>

</section>
<!-- =========================================
COMPACT PREMIUM CTA
========================================= -->

<section class="relative py-12 lg:py-14 overflow-hidden bg-[#0F172A]">

    <!-- Background Glow -->

    <div class="absolute inset-0 bg-gradient-to-r from-[#0D3D2C] via-[#145A40] to-[#0D3D2C] opacity-95"></div>

    <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[420px] h-[420px] bg-green-500/20 rounded-full blur-[140px]"></div>

    <div class="relative max-w-4xl mx-auto px-6">

        <div class="rounded-[28px] border border-white/10 bg-white/5 backdrop-blur-xl px-8 lg:px-12 py-10 text-center">

            <!-- Badge -->

            <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-green-500/10 border border-green-400/20 text-green-300 text-sm font-semibold">

                <i class="fas fa-rocket"></i>

                Let's Connect

            </span>

            <!-- Heading -->

            <h2 class="mt-5 text-3xl lg:text-4xl font-black text-white leading-tight">

                Ready to Build

                <span class="text-green-400">

                    Stronger Connections?

                </span>

            </h2>

            <!-- Description -->

            <p class="mt-4 max-w-2xl mx-auto text-base lg:text-lg text-gray-300 leading-7">

                Thousands of businesses trust
                <strong class="text-white">
                    Textora Technologies Pvt. Ltd. (TextoraSMS)
                </strong>
                for reliable business communication solutions.

            </p>

            <!-- Buttons -->

            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">

                <a href="/contact-us"
                    class="px-8 py-3.5 rounded-xl bg-green-500 hover:bg-green-600 text-white font-semibold transition duration-300 shadow-lg">

                    Get Free Demo

                </a>

                <a href="{{ url('/pricing-web') }}"
                    class="px-8 py-3.5 rounded-xl border border-white/20 bg-white/5 hover:bg-white hover:text-green-700 text-white font-semibold transition duration-300">

                    View Pricing

                </a>

            </div>

        </div>

    </div>

</section>
</x-master-page>