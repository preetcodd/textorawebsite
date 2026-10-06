<x-master-page title="Best Bulk SMS Reseller Service in India | Textora SMS"
    description="Launch a profitable Bulk SMS Reseller Service with zero investment. Get a complete white label SMS reseller platform in India with DLT support & API.">
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
      "name": "Bulk SMS Reseller Program",
      "serviceType": "White Label SMS Business Opportunity",
      "provider": {
        "@type": "Organization",
        "name": "Textora Bulk SMS Reseller Service",
        "url": "https://textorasms.com/reseller"
      },
      "description": "Start your own messaging business with our high-profit Bulk SMS Reseller Service. Get a 100% white-label platform with custom branding, wholesale credit rates, and a powerful admin control panel.",
      "offers": {
        "@type": "Offer",
        "availability": "https://schema.org/InStock",
        "areaServed": "IN"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Reseller Program Features",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "White Label SMS Software"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Multi-level Reseller Hierarchy"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Wholesale SMS Pricing"
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
          "name": "What exactly is a Bulk SMS Reseller Service?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It is a business model where you buy text messaging credits in bulk from an SMS Gateway provider like Textora SMS and resell them to your own customers at your own price point using a white-label platform."
          }
        },
        {
          "@type": "Question",
          "name": "Is this a good SMS reseller platform for digital agencies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes! Agencies use our reseller panel with API integration to manage multiple client accounts, allocate credits, and automate messaging campaigns from one central dashboard."
          }
        },
        {
          "@type": "Question",
          "name": "What features are included in the white-label software?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The platform includes custom branding (logo and domain), user credit management, real-time delivery reports, and dedicated transactional/promotional routes."
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
          "name": "Reseller Program",
          "item": "https://textorasms.com/reseller"
        }
      ]
    }
  ]
}
</script>





    @endpush

    <!-- ===================== HERO SECTION ===================== -->
    <section class="overflow-hidden bg-reseller-banner md:block hidden">
        <div class="relative max-w-7xl mx-auto px-6 text-white">
            <div class="grid grid-cols-12">
                <div class="col-span-5">
                    <h1 class="xl:text-4xl lg:text-3xl text-2xl font-extrabold drop-shadow-lg pt-0 lg:pt-4">
                        Launch a Highly Profitable Bulk SMS Reseller Service

                    </h1>

                    <p class="mt-1 lg:mt-4 lg:text-base text-sm  text-[13px] opacity-90 max-w-3xl">
                        Start your own messaging business today without worrying about servers or telecom headaches.
                        With TextorASMS, you get a premium Bulk SMS Reseller Service that lets you buy credits at
                        wholesale rates and sell them directly to your clients. If you are looking for a reliable white
                        label SMS reseller platform to grow your recurring revenue, we offer a highly profitable SMS
                        business opportunity designed specifically for the Indian market.
                    </p>

                    <a href="{{ url('pricing-web') }}"
                        class="xl:mt-8 mt-2 inline-block border border-white text-white xl:px-8 px-3 py-2 lg:py-3 rounded-xl shadow-lg lg:text-lg md:text-md text-sm font-semibold hover:scale-105 transition">
                        Purchase Now <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <button onclick="openModall()"
                        class="border border-white text-white md:w-auto w-fit px-3 xl:px-8 py-2 lg:py-3 mx-auto xl:mt-0 mt-3 md:ms-2 lg:ms-5 rounded-lg lg:text-lg md:text-md text-sm font-semibold hover:bg-white hover:text-black transition duration-300 shadow-lg transform hover:scale-105">
                        Book a Free Demo
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- mob banner section --}}
    <div class="mob-banner block md:hidden relative bg-cover bg-center"
        style="background-image: url('{{ URL::asset('/images/banners/reseller-mob.jpg') }}');height: 100vh;">
        <div class="relative z-10 h-full flex flex-col items-center justify-start pt-[150px] px-4 text-center">
            <h6 class="text-white text-2xl sm:text-3xl font-bold drop-shadow-lg">
                Launch a Highly Profitable Bulk SMS Reseller Service

            </h6>
            <p class="mt-2 text-md text-white opacity-90 line-clamp-2">
                Start your own messaging business today without worrying about servers or telecom headaches. With
                TextorASMS, you get a premium Bulk SMS Reseller Service that lets you buy credits at wholesale rates and
                sell them directly to your clients. If you are looking for a reliable white label SMS reseller platform
                to grow your recurring revenue, we offer a highly profitable SMS business opportunity designed
                specifically for the Indian market.
            </p>
            <a href="{{ url('pricing-web') }}"
                class="mt-4 inline-block border border-white text-white px-4 py-2 rounded-xl shadow-lg text-sm font-semibold hover:scale-105 transition">
                Purchase Now <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>

    {{-- what is service section --}}
    <section class="lg:py-20 md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 md:gap-12 gap-4 items-center">
            <div class="flex flex-col justify-center">
                <h2 class="xl:text-4xl lg:text-3xl text-2xl font-bold leading-snug mb-4">
                    Partner with the Best Bulk SMS Reseller in Bangalore and Across India
                </h2>

                <p class="text-gray-600 text-sm lg:text-base mb-3">
                    Whether you are a local startup or an established tech company, choosing
                    the right SMS gateway reseller program is the foundation of your success.
                    Are you looking for the best SMS reseller platform for digital agencies? You can easily bundle bulk
                    messaging with your existing SEO or social media packages. Plus, with our bulk SMS reseller panel
                    with API integration, your developers can plug messaging directly into your clients' websites, apps,
                    and CRMs.
                </p>
                <p class="text-gray-600 text-sm lg:text-base mb-8">
                    Telecom rules in India can be tough to navigate, which is exactly why you
                    need a cheap bulk SMS reseller with DLT support. As your backend SMS distributor service, we handle
                    the heavy lifting of TRAI regulations, ensuring smooth template approvals so your clients' messages
                    actually get delivered.
                </p>
            </div>

            <div class="flex justify-center w-full">
                <img src="{{ URL::asset('images/reseller.png') }}"
                    alt="Bulk SMS Reseller Service platform for starting your own messaging business"
                    class="max-h-[300px] md:max-h-[400px] xl:max-h-[440px] w-auto object-contain mx-auto">
            </div>
        </div>
    </section>


    <!-- ===================== WHY OTP API ===================== -->
    <section class="lg:py-20 md:py-10 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="lg:text-4xl md:text-3xl text-2xl font-bold text-center mb-4">Why Choose Our Enterprise SMS
                Reseller Solutions?

            </h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto md:mb-16 mb-6">
                Joining an SMS partnership program shouldn't mean settling for a basic, clunky messaging panel. We
                provide our partners with a complete suite of custom branded SMS reseller software.

            </p>

            <div class="grid  xl:grid-cols-4 md:grid-cols-2 lg:gap-6 md:gap-6 gap-4 text-center">

                <!-- Sell Under Your Brand -->
                <div
                    class=" lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition group hover:text-white hover:bg-black">
                    <i
                        class="fa-solid fa-building lg:text-4xl md:text-3xl text-2xl text-green-600 group-hover:text-white mb-3"></i>
                    <h3 class="text-xl font-semibold">100% Your Brand</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white"> Run a true white label texting platform. Your
                        clients log in through your custom domain and only ever interact with your logo and brand
                        colors.</p>
                </div>

                <!-- High-Profit Margins -->
                <div
                    class=" lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition group hover:text-white hover:bg-black">
                    <i
                        class="fa-solid fa-chart-line lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3 group-hover:text-white"></i>
                    <h3 class="text-xl font-semibold">Grow Your Network</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Why stop at end-users? Our advanced admin
                        control panel features include a multi-level reseller hierarchy, allowing you to build a massive
                        bulk messaging franchise by bringing sub-resellers on board under you.
                    </p>
                </div>

                <!-- Advanced Reseller Dashboard -->
                <div
                    class=" lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition group hover:text-white hover:bg-black">
                    <i
                        class="fa-solid fa-gauge-high lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3 group-hover:text-white"></i>
                    <h3 class="text-xl font-semibold">Flawless Delivery</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white"> Keep your clients happy and campaigns running
                        smoothly with dedicated transactional and promotional routes for rapid OTPs and marketing blasts
                    </p>
                </div>

                <!-- Seamless API Integration -->
                <div
                    class=" lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition group hover:text-white hover:bg-black">
                    <i
                        class="fa-solid fa-code-branch lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3 group-hover:text-white"></i>
                    <h3 class="text-xl font-semibold">Advanced Tools</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white"> Stand out from the competition by offering
                        premium add-ons like virtual mobile number (VMN) services for interactive, two-way
                        communication.</p>
                </div>



            </div>
        </div>
    </section>


    <!-- How It Works Section -->
    <section class="lg:py-20 md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Heading -->
            <div class="text-center mb-14">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">How It
                    Works</span>
                <h2 class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                    How to Start a White Label SMS Business in India

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
                            class="group bg-service-1 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">Get
                                Access</h4>
                            <p class="text-gray-600"> Sign up for our Bulk SMS reseller panel India.</p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-end">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            02
                        </div>

                        <div
                            class="group bg-service-2 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">Make
                                it Yours</h4>
                            <p class="text-gray-600"> Add your branding, logo, and domain to your new text message
                                reseller dashboard.</p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-start">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            03
                        </div>

                        <div
                            class="group bg-service-3 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Set Your Margins </h4>
                            <p class="text-gray-600"> Buy credits from us at lowest market rates, set your own markup,
                                and keep 100% of the profit.
                            </p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-end">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            04
                        </div>

                        <div
                            class="group bg-white lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Scale Up</h4>
                            <p class="text-gray-600"> Give your clients access to our robust SMS API for resellers so
                                they can automate their campaigns, driving up your daily volume and revenue.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!-- ===================== FEATURES ===================== -->
    <section class="lg:py-20 md:py-10 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-14">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">Powerful OTP API
                    Features</span>
                <h2 class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                    Designed for secure, fast, and reliable <br> OTP verification across apps & websites.
                </h2>
            </div>

            <div class="flex flex-wrap justify-center  md:gap-6 gap-4">

                <div
                    class="w-full md:w-[calc((100%-3rem)/2)] lg:w-[calc((100%-5rem)/3)] xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <h3 class="font-semibold text-xl">100% White-Label Solution</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Personalize the platform with your brand name,
                        logo, and domain. Maintain complete control over pricing.</p>
                </div>

                <div
                    class="w-full md:w-[calc((100%-3rem)/2)] lg:w-[calc((100%-5rem)/3)] xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <h3 class="font-semibold text-xl">Bulk SMS, OTP, and Transactional Messaging</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Cover all messaging needs with our flexible SMS
                        services, from promotional messages to secure OTPs and real-time alerts.</p>
                </div>

                <div
                    class="w-full md:w-[calc((100%-3rem)/2)] lg:w-[calc((100%-5rem)/3)] xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <h3 class="font-semibold text-xl">Real-Time Delivery Reports</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Track the status of your SMS campaigns with
                        instant updates and performance analytics.</p>
                </div>

                <div
                    class="w-full md:w-[calc((100%-3rem)/2)] lg:w-[calc((100%-5rem)/3)] xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <h3 class="font-semibold text-xl">API and Automation Integration</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Seamlessly connect with CRM systems, websites,
                        and mobile apps to automate bulk messaging and enhance efficiency.</p>
                </div>

                <div
                    class="w-full md:w-[calc((100%-3rem)/2)] lg:w-[calc((100%-5rem)/3)] xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <h3 class="font-semibold text-xl">User and Credit Management</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Manage your clients, monitor usage, and
                        allocate credits through a centralized dashboard. Ensure full visibility and control over your
                        reseller network.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ===================== INDUSTRIES ===================== -->
    <section class="lg:py-20 md:py-10 py-6 bg-gray-50 hidden">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="lg:text-4xl md:text-3xl text-2xl font-bold text-center mb-10">Unlock the Most Competitive Bulk
                SMS Reseller Pricing</h2>
            <div class="grid md:grid-cols-4">
                <!-- Flexible Plans -->
                <div class="bg-white shadow-md lg:p-6 md:p-4 p-3 md:text-center border">
                    <i class="fa-solid fa-layer-group lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3"></i>
                    <p class="text-gray-600 mt-2">Choose from flexible reseller plans that scale with your business</p>
                </div>

                <!-- Custom Pricing -->
                <div class="bg-white shadow-md lg:p-6 md:p-4 p-3 md:text-center border">
                    <i class="fa-solid fa-sliders lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3"></i>
                    <p class="text-gray-600 mt-2">Get customized pricing based on your monthly SMS volume</p>
                </div>

                <!-- High-Volume Discounts -->
                <div class="bg-white shadow-md lg:p-6 md:p-4 p-3 md:text-center border">
                    <i class="fa-solid fa-percent lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3"></i>
                    <p class="text-gray-600 mt-2">Enjoy special discounts for high-volume and enterprise resellers</p>
                </div>

                <!-- Payment Options -->
                <div class="bg-white shadow-md lg:p-6 md:p-4 p-3 md:text-center border">
                    <i class="fa-solid fa-wallet lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3"></i>
                    <p class="text-gray-600 mt-2">Pay-as-you-go or prepaid packages — your choice</p>
                </div>

            </div>
        </div>
    </section>

    {{-- cta section --}}
    <section class="relative w-full lg:py-20 md:py-10 py-6 overflow-hidden comn-cta-section">

        <!-- Background overlay icons (optional) -->
        <div class="absolute inset-0 opacity-20">
            <img src="your-background-image.png"
                alt="White label SMS reseller platform with custom branded SMS reseller software"
                class="w-full h-full object-cover">
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-4xl mx-auto text-center px-5">
            <h2 class="text-white text-3xl md:lg:text-4xl md:text-3xl text-2xl font-semibold mb-4">
                Ready to Start Your Own SMS Business?
            </h2>

            <p class="text-white text-lg md:text-xl mb-8">
                Leverage Our Platform & Build a Profitable Reseller Business
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
            <h2 class="lg:text-4xl md:text-3xl text-2xl font-bold text-center mb-12">Frequently Asked Questions</h2>

            <div class="grid grid-cols-12 lg:gap-10 ma:gap-6 gap-4">
                <div class="col-span-12 mb-10 md:mb-0">
                    <div class="space-y-4">

                        <!-- FAQ 1 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(1)"
                                class="w-full flex text-lg justify-between items-center py-5 text-slate-800">
                                <span class="text-left">What exactly is a Bulk SMS Reseller Service?
                                </span>
                                <span id="icon-1" class="text-slate-800">+</span>
                            </button>
                            <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    It is a straightforward business model. You buy text messaging credits in bulk from
                                    an SMS Gateway provider like Textora SMS. You then use a secure White Label platform
                                    to resell those credits to your own customers at whatever price point you choose.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(2)"
                                class="w-full flex text-lg justify-between items-center py-5 text-slate-800">
                                <span class="text-left"> Is this the best SMS reseller platform for digital agencies?
                                </span>
                                <span id="icon-2" class="text-slate-800">+</span>
                            </button>
                            <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    We certainly think so! Agencies love our bulk SMS reseller panel with API
                                    integration because it allows them to manage dozens of separate client accounts,
                                    allocate credits, and automate campaigns from one central admin dashboard.

                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(3)"
                                class="w-full text-lg flex justify-between items-center py-5 text-slate-800">
                                <span class="text-left"> How do I start a bulk SMS business with zero investment?
                                </span>
                                <span id="icon-3" class="text-slate-800">+</span>
                            </button>
                            <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    You don't need to buy servers, software, or deal with telecom operators. Just join
                                    our SMS gateway reseller program, grab your first batch of credits, and start
                                    selling immediately. We handle the technology; you handle the sales.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(4)"
                                class="w-full text-lg flex justify-between items-center py-5 text-slate-800">
                                <span class="text-left"> What features are included in the custom branded SMS reseller
                                    software? </span>
                                <span id="icon-4" class="text-slate-800">+</span>
                            </button>
                            <div id="content-4" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    Your platform comes fully loaded with advanced admin control panel features. You get
                                    complete visibility to manage user credits, track real-time delivery reports, assign
                                    dedicated transactional and promotional routes, and generate invoices. It is a
                                    complete "business in a box" that operates entirely under your own domain and logo.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(5)"
                                class="w-full text-lg flex justify-between items-center py-5 text-slate-800">
                                <span class="text-left">Is this a profitable SMS business opportunity if I am just
                                    starting out?
                                </span>
                                <span id="icon-5" class="text-slate-800">+</span>
                            </button>
                            <div id="content-5" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    Absolutely. Because we operate as a cheap bulk SMS reseller with DLT support, you
                                    purchase your initial messaging credits at deep wholesale rates. You can then define
                                    your own pricing tiers for local clients in Bangalore or scale nationally across
                                    India, ensuring high profit margins on every single message your clients send.

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