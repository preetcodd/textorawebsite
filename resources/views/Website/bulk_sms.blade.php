<x-master-page title="Send Bulk SMS Online with Textora | Reliable Bulk SMS Gateway"
    description="Send mass SMS online instantly with our secure bulk SMS gateway. Get fast OTP delivery, API integration, and DLT compliant promotional & transactional SMS.">
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
      "name": "Bulk SMS Gateway Service",
      "serviceType": "SMS Marketing & Transactional Alerts",
      "provider": {
        "@type": "Organization",
        "name": "Textora Bulk SMS",
        "url": "https://textorasms.com/bulk-sms"
      },
      "description": "India's most reliable Bulk SMS gateway for promotional campaigns, transactional alerts, and lightning-fast OTP delivery with 98% open rates.",
      "offers": {
        "@type": "Offer",
        "availability": "https://schema.org/InStock",
        "areaServed": "IN"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Bulk SMS Solutions",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Promotional SMS Service"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Transactional SMS API"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Fast OTP SMS Delivery"
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
          "name": "Can I send bulk SMS directly from my computer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes! You can send bulk SMS online using our cloud-based dashboard. Simply log in through your web browser, upload your contacts via Excel or CSV, and hit send. No software installation is required."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Promotional and Transactional SMS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Promotional SMS is used for marketing and sales (like discounts) and cannot be sent to DND-registered numbers. Transactional SMS is used for critical alerts (like order updates or OTPs) and can reach both DND and non-DND numbers."
          }
        },
        {
          "@type": "Question",
          "name": "Is your SMS gateway DLT compliant?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. Textora is 100% TRAI and DLT compliant. Our platform includes built-in DLT scrubbing and we provide full support for registering your business entity and templates."
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
          "name": "Bulk SMS",
          "item": "https://textorasms.com/bulk-sms"
        }
      ]
    }
  ]
}
</script>
    @endpush
    <!-- ===================== HERO SECTION ===================== -->
    <section class="relative overflow-hidden bulk-sms-banner md:block hidden">
        <div class="relative max-w-8xl mx-auto px-6 text-white">
            <h1 class="xl:text-4xl lg:text-3xl text-2xl font-bold drop-shadow-lg lg:w-[50%] md:w-[60%]">
                Send Bulk SMS Online Instantly with India’s Most Reliable SMS Gateway
            </h1>

            <p class="mt-4  lg:text-base text-sm opacity-90 lg:w-[50%] md:w-[60%]">
                Connect with your audience in seconds. Whether you need to run high-converting promotional campaigns,
                send critical transactional alerts, or trigger lightning-fast OTPs, Textora’s enterprise bulk SMS
                gateway ensures your messages are delivered securely and on time.
            </p>

            <a href="{{ url('pricing-web') }}"
                class="mt-3 lg:mt-8 inline-block border border-white text-white lg:px-8 px-4 py-3 rounded-xl shadow-lg lg:text-lg  text-sm  font-semibold hover:scale-105 transition">
                Purchase Now <i class="fa-solid fa-arrow-right"></i>
            </a>
            <button onclick="openModall()"
                class="border border-white text-white md:w-auto w-fit lg:px-8 px-4 py-3 mx-auto xl:mt-0 mt-3 lg:ms-5 md:ms-2 rounded-lg lg:text-lg  text-sm  font-semibold hover:bg-white hover:text-black transition duration-300 shadow-lg transform hover:scale-105">
                Book a Free Demo
            </button>
        </div>
    </section>
    {{-- mob banner section --}}
    <div class="mob-banner block md:hidden relative bg-cover bg-center"
        style="background-image: url('{{ URL::asset('/images/banners/sms-bulk-mob.jpg') }}');height: 100vh;">
        <div class="relative z-10 h-full flex flex-col items-center justify-start pt-[110px] px-4 text-center">
            <h6 class="text-white sm:text-3xl text-2xl font-bold drop-shadow-lg">
                Send Bulk SMS Online Instantly with India’s Most Reliable SMS Gateway
            </h6>
            <p class="mt-2 text-md text-white opacity-90 line-clamp-2">
                Connect with your audience in seconds. Whether you need to run high-converting promotional campaigns,
                send critical transactional alerts, or trigger lightning-fast OTPs, Textora’s enterprise bulk SMS
                gateway ensures your messages are delivered securely and on time.
            </p>
            <a href="{{ url('pricing-web') }}"
                class="mt-4 inline-block border border-white text-white px-4 py-2 rounded-xl shadow-lg text-sm font-semibold hover:scale-105 transition">
                Purchase Now <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>

    <!-- ============================ BULK SMS OVERVIEW ============================ -->
    <section class="lg:py-20 md:py-10 py-6">
        <div class="max-w-7xl mx-auto md:px-4 px-8 text-center">
            <h5 class="md:text-3xl text-2xl font-bold lg:mb-20 md:mb-10 mb-8 mx-auto">A Complete Bulk SMS Platform Built
                for <br class="md:block hidden"> Your Business
                Needs </h5>
        </div>

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div>
                <h2 class="md:text-3xl text-2xl font-bold mb-4">What is a Bulk SMS Gateway?
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    A bulk SMS gateway is a powerful software platform that allows businesses to send large volumes of
                    text messages to mobile phones simultaneously. By integrating an automated text message system,
                    companies can bypass manual texting to instantly deliver OTPs, marketing campaigns, and
                    transactional alerts directly to their customers, achieving an average open rate of 98% within the
                    first three minutes of delivery.
                </p>

                {{-- <ul class="mt-6 space-y-3 text-gray-700">
                    <li><span class="text-[#0c963c]">✔</span> Send 1,000 to 10 lakh+ SMS instantly</li>
                    <li><span class="text-[#0c963c]">✔</span> High throughput routes for best delivery</li>
                    <li><span class="text-[#0c963c]">✔</span> Multi-language support (Unicode SMS)</li>
                    <li><span class="text-[#0c963c]">✔</span> Perfect for marketing, updates & alerts</li>
                </ul> --}}
            </div>

            <div>
                <img src="{{ URL::asset('images/bulk-sms-service.png') }}"
                    alt="Send Bulk SMS Online using SMS Bulk Sender platform
" class="rounded-xl">
            </div>

        </div>
    </section>


    <!-- ============================ PROMOTIONAL SMS ============================ -->
    <section class="lg:py-20 md:py-10 py-6 bg-[#f6f6f6]">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div class="md:order-1 order-2">
                <img src="{{ URL::asset('images/promotional-sms.png') }}" class="rounded-xl"
                    alt="Bulk SMS Gateway platform for businesses and developers">
            </div>

            <div class="md:order-2 order-1">
                <h3 class="lg:text-3xl text-2xl font-bold mb-4">Promotional SMS Service (Drive Sales & Engagement)</h3>
                <p class="text-gray-600">
                    Cut through the digital noise and land right in your customer's pocket. Our promotional SMS service
                    is the perfect way to announce flash sales, festive discounts, and new product launches.
                </p>

                <ul class="mt-6 space-y-3 text-gray-700">
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] shrink-0 mt-0.5">✔</span>
                        <span>Maximum Reach: Target non-DND numbers with localized, highly engaging offers.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] shrink-0 mt-0.5">✔</span>
                        <span>Easy Scheduling: Plan your campaigns in advance using our intuitive web dashboard.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] shrink-0 mt-0.5">✔</span>
                        <span>Smart Tracking: Measure your campaign’s success with real-time click-through data.</span>
                    </li>
                </ul>
            </div>

        </div>
    </section>


    <!-- ============================ TRANSACTIONAL SMS ============================ -->
    <section class="lg:py-20 md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div>
                <h3 class="lg:text-3xl text-2xl font-bold mb-4"> Transactional SMS Service (Keep Customers Informed
                    24/7)
                </h3>
                <p class="text-gray-600">
                    Build trust through transparency. Use our high-priority transactional SMS service to send essential
                    updates like order confirmations, shipping alerts, and booking reminders.
                </p>

                <ul class="mt-6 space-y-3 text-gray-700">
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] shrink-0 mt-0.5">✔</span>
                        <span>Unrestricted Delivery: Authorized to deliver critical
                            alerts to both DND and non-DND numbers.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] shrink-0 mt-0.5">✔</span>
                        <span>Zero Latency: Direct connectivity with Tier-1 telecom
                            operators ensures your messages arrive instantly.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] shrink-0 mt-0.5">✔</span>
                        <span>Pre-Approved Templates: Seamlessly manage your
                            TRAI-mandated templates directly from our portal.</span>
                    </li>
                </ul>
            </div>

            <div>
                <img src="{{ URL::asset('images/transactional-sms.png') }}" class="rounded-xl"
                    alt="Fast OTP SMS provider with secure transactional SMS service">
            </div>

        </div>
    </section>

    <!-- ============================ OTP DELIVERY ============================ -->
    <section class="lg:py-20 md:py-10 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div class="md:order-1 order-2">
                <img src="{{ URL::asset('images/otp-sms.jpg') }}" class="rounded-xl"
                    alt="Send promotional SMS to customers using bulk SMS gateway">
            </div>

            <div class="md:order-2 order-1">
                <h3 class="lg:text-3xl text-2xl font-bold mb-4">Fast OTP SMS Delivery (Because Every Second Counts)
                </h3>
                <p class="text-gray-600">
                    When a user is trying to log in or make a payment, they won't wait around. As a dedicated OTP SMS
                    provider, we prioritize security and speed above all else.
                </p>

                <ul class="mt-6 space-y-3 text-gray-700">
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] shrink-0 mt-0.5">✔</span>
                        <span>Lightning Fast: Guaranteed delivery in under 3 to 5 seconds.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] shrink-0 mt-0.5">✔</span>
                        <span>Intelligent Fallback: If one route is congested, our
                            system automatically switches to another, ensuring a 99.9% delivery success rate for
                            two-factor
                            authentication (2FA) and secure logins.
                        </span>
                    </li>
                </ul>
            </div>

        </div>
    </section>


    <!-- ============================ Sim Base SMS  ============================ -->
    <section class="lg:py-20 md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div>
                <h3 class="lg:text-3xl text-2xl font-bold mb-4">SIM Based SMS Solutions (Hyper-Local & Flexible)
                </h3>
                <p class="text-gray-600">
                    Looking for an alternative routing method? Our SIM based SMS service allows you to send important
                    updates and local offers without the strict limitations of traditional DLT coverage.
                </p>
                <ul class="mt-6 space-y-3 text-gray-700">
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] shrink-0 mt-0.5">✔</span>
                        <span>Bypass Network Filters: Reliable delivery even in regions with strict carrier
                            restrictions.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] shrink-0 mt-0.5">✔</span>
                        <span>Cost-Effective Local Reach: The perfect solution for small businesses running hyper-local
                            awareness campaigns.</span>
                    </li>
                </ul>
            </div>

            <div>
                <img src="{{ URL::asset('images/sim-base-astral-promotion.png') }}" class="rounded-xl"
                    alt="Send bulk SMS online from Excel using bulk SMS API platform">
            </div>

        </div>
    </section>

    <!-- ============================ SMS API Integration ============================ -->
    <section class="lg:py-20 md:py-10 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div class="md:order-1 order-2">
                <img src="{{ URL::asset('images/sms-api-ntegration.jpg') }}" class="rounded-xl"
                    alt="Bulk SMS API integration in PHP and Python for automated SMS delivery">
            </div>

            <div class="md:order-2 order-1">
                <h2 class="lg:text-3xl text-2xl font-bold mb-4">Seamless Bulk SMS API Integration for Developers</h2>

                <p class="text-gray-600">
                    We’ve made it incredibly easy to automate your communications. Our robust, developer-friendly bulk
                    SMS API allows you to embed secure texting capabilities directly into your website, mobile app, CRM,
                    or ERP software.
                </p>

                <ul class="mt-6 space-y-3 text-gray-700">
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] shrink-0 mt-0.5">✔</span>
                        <span>Code in Your Language: We fully support REST API integration with comprehensive,
                            easy-to-read documentation for PHP, Node.js, Python, and Java.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] shrink-0 mt-0.5">✔</span>
                        <span>Automate Everything: Trigger instant OTPs, password resets, and account notifications
                            without any manual human input.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] shrink-0 mt-0.5">✔</span>
                        <span>Real-Time Webhooks: Get instant delivery receipts, bounce statuses, and engagement
                            analytics fed directly back to your own server.</span>
                    </li>
                </ul>
            </div>

        </div>
    </section>

    {{-- Feature --}}
    <section class="lg:py-20 md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto md:mb-16 mb-10">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">Features</span>
                <h2 class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                    Core Features That Power Your Campaigns
                </h2>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-2 lg:gap-6 md:gap-6 gap-4">

                <!-- High Delivery Rates -->
                <div
                    class=" lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i
                        class="fa-solid fa-envelope-circle-check lg:text-4xl md:md:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl">100% TRAI & DLT Compliant</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">
                        Don't let compliance slow you down. We assist with full DLT registration, Sender ID
                        whitelisting, and template approvals to keep your messaging strictly within Indian telecom
                        regulations.

                    </p>
                </div>

                <!-- Quick & Easy Setup -->
                <div
                    class=" lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i
                        class="fa-solid fa-bolt lg:text-4xl md:md:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl">High Throughput Routing</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">
                        Need to send 10 lakh+ messages at once? Our infrastructure handles massive volumes without
                        server bottlenecking.

                    </p>
                </div>

                <!-- Multi-Language Messaging -->
                <div
                    class=" lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i
                        class="fa-solid fa-chart-line  lg:text-4xl md:md:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl">Smart Excel Plugin</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">
                        No technical skills required. Simply upload your .csv or .xlsx contact lists to our web-to-SMS
                        dashboard and send personalized messages (like "Hi [Name]") in just three clicks.

                    </p>
                </div>

                <!-- API Integration -->
                <div
                    class=" lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i
                        class="fa-solid fa-language  lg:text-4xl md:md:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl">Multi-Language (Unicode) Support</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">
                        Speak your customer's language. Send beautifully formatted messages in Hindi, Marathi,
                        Tamil, Telugu, and other regional languages.

                    </p>
                </div>



            </div>

        </div>
    </section>


    <!-- ===================== Benefits ===================== -->
    <section class="md:py-10 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12">

            <!-- LEFT SIDE -->
            <div class="flex flex-col justify-center">
                <p class="text-sm text-[#4eb86a] font-semibold mb-2">Benefits</p>
                <h2 class="md:text-4xl sm:text-3xl text-2xl font-bold leading-snug mb-4">
                    The Business Benefits of SMS Marketing
                </h2>
                <p class="text-gray-600 mb-8">Switching to a reliable mass texting platform isn't just a technical
                    upgrade; it is a revenue driver.

                </p>

                <a href="{{ url('pricing-web') }}"
                    class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white font-semibold px-6 py-3 rounded-lg flex items-center gap-2 w-fit">
                    View WhatsApp Pricing
                    <span class="text-xl">→</span>
                </a>
            </div>

            <!-- RIGHT SIDE CARDS -->
            <div class="grid sm:grid-cols-2 gap-6">

                <!-- Card 1 -->
                <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl  hover:border-green-700">
                    <i class="fas fa-bolt text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl mb-3"></i>
                    <h4 class="font-semibold text-lg mb-2">Unbeatable Open Rates</h4>
                    <p class="text-gray-600 text-sm"> Unlike emails that sit in spam folders, 98% of text messages are
                        opened and read.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fas fa-shield-halved text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl mb-3"></i>
                    <h4 class="font-semibold text-lg mb-2">Incredible ROI</h4>
                    <p class="text-gray-600 text-sm"> With fractions of a rupee per message, SMS offers one of the
                        lowest Customer Acquisition Costs (CAC) in the digital marketing space.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fas fa-chart-line text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl mb-3"></i>
                    <h4 class="font-semibold text-lg mb-2">Instant Action</h4>
                    <p class="text-gray-600 text-sm"> SMS creates urgency, driving faster click-throughs for
                        limited-time offers and flash sales.</p>
                </div>


            </div>
        </div>
    </section>


    <!-- How It Works Section -->
    <section class="lg:py-20 py-10 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Heading -->
            <div class="text-center mb-14">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">How It
                    Works</span>
                <h2 class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                    Your WhatsApp API Service Setup
                    Starts With 3 Easy Steps
                </h2>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-1/2 w-0.5 bg-gray-200 hidden md:block transform -translate-x-1/2">
                </div>

                <ul class="space-y-4">
                    <li class="relative md:flex items-start md:justify-start justify-center">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            01
                        </div>

                        <div
                            class="group bg-service-1 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Sign Up</h4>
                            <p class="text-gray-600">Create an account on our platform.</p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-end">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            02
                        </div>

                        <div
                            class="group bg-service-2 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Choose Your
                                Plan</h4>
                            <p class="text-gray-600">Select a pricing plan based on your messaging needs.</p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-start">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            03
                        </div>

                        <div
                            class="group bg-service-3 lg:p-6 p-3 rounded-xl shadow-lg border text-center md:text-left border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Upload
                                Contacts</h4>
                            <p class="text-gray-600">Import your recipient list securely</p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-end">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            04
                        </div>

                        <div
                            class="group bg-service-4 lg:p-6 p-3 rounded-xl shadow-lg border text-center md:text-left border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Compose Your
                                Message </h4>
                            <p class="text-gray-600">Create personalized messages for your campaign.</p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-start">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            05
                        </div>

                        <div
                            class="group bg-service-5 lg:p-6 p-3 rounded-xl shadow-lg border text-center md:text-left border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Send & Track
                            </h4>
                            <p class="text-gray-600">Launch your campaign and monitor performance in real-time.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ===================== INDUSTRIES ===================== -->
    <section class="lg:py-20 md:py-10 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto md:mb-16 mb-10">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">Industry</span>
                <h2 class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                    Send Bulk SMS Online for Every Industry

                </h2>
                <p class="text-center text-gray-600 max-w-2xl mx-auto mb-16 mt-2">
                    Textora adapts to the unique demands of your specific sector:
                </p>
            </div>

            <!-- Grid : 3 x 2 -->
            <div class="flex flex-wrap justify-center gap-4">

                <div
                    class="w-full md:w-[calc((100%-2rem)/3)] bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-cart-shopping md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">E-commerce & Retail</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Send abandoned cart reminders, order dispatch alerts, and exclusive coupon codes.
                    </p>
                </div>

                <div
                    class="w-full md:w-[calc((100%-2rem)/3)] bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-heart-pulse md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2"> Healthcare & Clinics</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Reduce no-shows by automating appointment reminders and sharing lab result links.
                    </p>
                </div>

                <div
                    class="w-full md:w-[calc((100%-2rem)/3)] bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-graduation-cap md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Schools & Education</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Instantly notify parents about emergency closures, fee deadlines, and exam schedules.
                    </p>
                </div>

                <div
                    class="w-full md:w-[calc((100%-2rem)/3)] bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-landmark md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Banking & Fintech</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Protect your users with secure, encrypted OTPs and instant low-balance warnings
                    </p>
                </div>

                <div
                    class="w-full md:w-[calc((100%-2rem)/3)] bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-house md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Real Estate</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Broadcast new property listings to a segmented list of interested buyers.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- WHY CHOOSE US --}}
    <section class="lg:py-20 md:py-16 py-10">
        <div class="max-w-7xl mx-auto px-6">

            <p class="text-sm font-semibold tracking-widest text-green-700 uppercase text-center mb-2">
                WHY CHOOSE US
            </p>
            <h2
                class="md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 text-center max-w-4xl mx-auto mb-16">
                Seamless Communication with a Reliable SMS Service Provider
            </h2>

            <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-4 lg:gap-8 text-center">

                <div
                    class="group bg-service-1 lg:p-8 p-4 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">

                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-list-check text-2xl text-green-700"></i>
                        </div>
                    </div>

                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Comprehensive Services</h3>

                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>

                    <p class="text-gray-600">
                        Covering Promotional, Transactional, Service and SIM-Based SMS.
                    </p>
                </div>

                <div
                    class="group bg-service-2 lg:p-8 p-4 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-circle-check text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Trusted by Thousands</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600">
                        Proven track record with businesses across industries.
                    </p>
                </div>

                <div
                    class="group bg-service-3 lg:p-8 p-4 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-gear text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Affordable Plans</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600">
                        Competitive pricing with no hidden costs.
                    </p>
                </div>

                <div
                    class="group bg-service-4 lg:p-8 p-4 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-life-ring text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Dedicated Support</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600">
                        24/7 assistance from our expert team.
                    </p>
                </div>

                <div
                    class="group bg-service-5 lg:p-8 p-4 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">

                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-lock text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Secure Communication</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600">
                        End-to-end encryption ensures message privacy.
                    </p>
                </div>

                <div
                    class="group bg-service-6 lg:p-8 p-4 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-dollar-sign text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Affordable Pricing</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600">
                        Transparent plans with no hidden fees.
                    </p>
                </div>

            </div>
        </div>
    </section>


    {{-- cta section --}}
    <section class="relative w-full lg:py-20 md:py-10 py-6 overflow-hidden comn-cta-section">

        <!-- Background overlay icons (optional) -->
        <div class="absolute inset-0 opacity-20">
            <img src="your-background-image.png" alt="SIM based SMS solution for local business marketing"
                class="w-full h-full object-cover">
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-4xl mx-auto text-center px-5">
            <h2 class="text-white md:lg:text-4xl md:md:text-3xl text-2xl font-semibold mb-4">
                Ready to Transform Your Customer Engagement with RCS Messaging?
            </h2>

            <p class="text-white text-lg md:text-xl mb-8">
                Deliver Rich Media Messages, Interactive Buttons, and Verified Branding with
                our Secure & Scalable RCS Platform.
            </p>

            <button id="ctaBtn" onclick="openModall()"
                class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] transition md:px-10 px-4 md:py-4 py-2 
               text-white font-semibold text-lg rounded shadow-lg">
                Request A Free Demo
            </button>
        </div>
    </section>


    <!-- ===================== FAQ ===================== -->
    <section class="lg:py-20 md:py-10 py-6 bg-white">
        <div class="w-full md:max-w-6xl mx-auto px-6">
            <h2 class="lg:text-4xl md:md:text-3xl text-2xl font-bold text-center mb-12">Get your Questions and Answers
            </h2>
            <div class="md:grid grid-cols-12 gap-10 block">
                <div class="col-span-12 mb-10 md:mb-0">
                    <div class="space-y-4">
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(1)"
                                class="w-full text-lg flex justify-between items-center py-5 text-slate-800">
                                <span class="text-left">Can I send bulk SMS directly from my computer?
                                </span>
                                <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                                    +
                                </span>
                            </button>
                            <div id="content-1"
                                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">
                                    Yes! You can send bulk SMS online using our cloud-based dashboard. Simply log in
                                    through your web browser, upload your contacts via Excel or CSV, compose your
                                    message, and hit send. No software installation is required.
                                </div>
                            </div>
                        </div>

                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(2)"
                                class="w-full text-lg flex justify-between items-center py-5 text-slate-800">
                                <span class="text-left">What is the difference between Promotional and Transactional
                                    SMS?
                                </span>
                                <span id="icon-2" class="text-slate-800 transition-transform duration-300">
                                    +
                                </span>
                            </button>
                            <div id="content-2"
                                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">
                                    Promotional SMS is used for marketing and sales (like discounts) and cannot be sent
                                    to DND-registered numbers. Transactional SMS is used for critical alerts (like order
                                    updates or OTPs) and is legally allowed to reach both DND and non-DND numbers.
                                </div>
                            </div>
                        </div>

                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(3)"
                                class="w-full text-lg flex justify-between items-center py-5 text-slate-800">
                                <span class="text-left">Is your SMS gateway DLT compliant? </span>
                                <span id="icon-3" class="text-slate-800 transition-transform duration-300">
                                    +
                                </span>
                            </button>
                            <div id="content-3"
                                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">
                                    Absolutely. Textora is 100% TRAI and DLT compliant. Our platform includes built-in
                                    DLT scrubbing, and our support team will guide you through the process of
                                    registering your business entity, headers (Sender IDs), and message templates.
                                </div>
                            </div>
                        </div>

                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(4)"
                                class="w-full text-lg flex justify-between items-center py-5 text-slate-800">
                                <span class="text-left"> How long does API integration take?
                                </span>
                                <span id="icon-4" class="text-slate-800 transition-transform duration-300">
                                    +
                                </span>
                            </button>
                            <div id="content-4"
                                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">For an experienced developer, our bulk SMS API
                                    can be integrated and tested in under 30 minutes. We provide clear documentation and
                                    ready-to-use code snippets to make the process as smooth as possible.

                                </div>
                            </div>
                        </div>
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(5)"
                                class="w-full text-lg flex justify-between items-center py-5 text-slate-800">
                                <span class="text-left">How fast will my messages be delivered?
                                </span>
                                <span id="icon-5" class="text-slate-800 transition-transform duration-300">
                                    +
                                </span>
                            </button>
                            <div id="content-5"
                                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">We pride ourselves on zero-latency routing.
                                    Standard promotional campaigns are processed and delivered to thousands of users
                                    within minutes. For critical communications, our fast OTP SMS provider routes and
                                    transactional SMS channels guarantee that one-time passwords, secure logins, and
                                    payment alerts reach your customers' phones in under 3 to 5 seconds.

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
</x-master-page>
