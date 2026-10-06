<x-master-page title="Best Bulk Voice Call Service Provider India | Textora SMS"
    description="Scale with Textora, the best bulk voice call service provider in India. Get Voice OTPs & broadcasting with DLT compliance and per-second billing. Demo!">
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
      "name": "Bulk Voice Call & Voice SMS Service",
      "serviceType": "Automated Voice Broadcasting",
      "provider": {
        "@type": "Organization",
        "name": "Textora Bulk Voice Call & Voice SMS Service",
        "url": "https://textorasms.com/voice-call"
      },
      "description": "India's reliable Bulk Voice Call service provider for automated voice broadcasting, Voice OTP services, and marketing alerts with Neural Text-to-Speech (TTS) technology.",
      "offers": {
        "@type": "Offer",
        "availability": "https://schema.org/InStock",
        "areaServed": "IN"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Voice Call Solutions",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Automated Voice OTP Service"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Neural Text-to-Speech (TTS) Messaging"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Outbound Dialer Software"
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
          "name": "Is Textora the best bulk voice call software for election campaigns?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes! We are a top choice for political strategists due to our high-capacity throughput, automated dialer software, and support for over 10 regional Indian languages."
          }
        },
        {
          "@type": "Question",
          "name": "What makes you a top voice OTP service provider with 100% delivery?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We use direct carrier routing and intelligent failover paths to ensure your Voice OTPs bypass network congestion and reach users in under 5 seconds."
          }
        },
        {
          "@type": "Question",
          "name": "Can I integrate the Voice API with my existing CRM?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. Our developer-friendly Voice SMS Gateway API supports easy integration with popular CRMs like Salesforce, Zoho, and HubSpot for automated reminders and alerts."
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
          "name": "Voice Call",
          "item": "https://textorasms.com/voice-call"
        }
      ]
    }
  ]
}
</script>




    @endpush

    <!-- ===================== HERO SECTION ===================== -->
    <section class="overflow-hidden voice-api-banner md:block hidden">
        <div class="relative max-w-7xl mx-auto px-6 text-white">
            <div class="grid grid-cols-12">
                <div class="col-span-6">
                    <h1
                        class="xl:text-4xl lg:text-3xl text-2xl font-extrabold drop-shadow-lg  md:pt-4 lg:pt-10  max-w-4xl">
                        India’s Most Reliable Bulk Voice Call Service Provider for Growing Businesses
                    </h1>

                    <p class="mt-2 lg:mt-4 lg:text-base text-sm  opacity-90 max-w-3xl">
                        Scaling your outreach shouldn't be a headache. With Textora, you can deliver high-priority Voice
                        OTP services, marketing blasts, and reminders that actually get heard. Our Voice SMS Gateway API
                        is built for speed, transparency, and 100% DLT and TRAI compliance, so you can focus on your
                        customers while we handle the dialer.

                    </p>

                    <a href="{{ url('pricing-web') }}"
                        class="lg:mt-8 mt-3 inline-block border border-white text-white lg:px-8 px-3 py-2 lg:py-3 rounded-xl shadow-lg text-sm xl:text-lg font-semibold hover:scale-105 transition">
                        Purchase Now <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <button onclick="openModall()"
                        class="border border-white text-white lg:w-auto w-fit px-3 lg:px-8 py-2 lg:py-3 mx-auto xl:mt-0 mt-3 md:ms-2 lg:ms-5 rounded-lg text-sm xl:text-lg text-md font-semibold hover:bg-white hover:text-black transition duration-300 shadow-lg transform hover:scale-105">
                       Book a Free Demo
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- mob banner section --}}
    <div class="mob-banner block md:hidden relative bg-cover bg-center"
        style="background-image: url('{{ URL::asset('/images/banners/voice-api-mob.jpg') }}');height: 100vh;">
        <div class="relative z-10 h-full flex flex-col items-center justify-start pt-[150px] px-4 text-center">
            <h6 class="text-white text-3xl sm:text-2xl font-bold drop-shadow-lg">
                India’s Most Reliable Bulk Voice Call Service Provider for Growing Businesses
            </h6>
            <p class="mt-2 text-md text-white opacity-90 line-clamp-2">
                Scaling your outreach shouldn't be a headache. With Textora, you can deliver high-priority Voice OTP
                services, marketing blasts, and reminders that actually get heard. Our Voice SMS Gateway API is built
                for speed, transparency, and 100% DLT and TRAI compliance, so you can focus on your customers while we
                handle the dialer.

            </p>
            <a href="{{ url('pricing-web') }}"
                class="mt-4 inline-block border border-white text-white px-4 py-2 rounded-xl shadow-lg text-sm font-semibold hover:scale-105 transition">
                Get Started Today <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>

    {{-- what is service section --}}
    <section class="lg:py-20 md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12">

            <div class="flex flex-col justify-center">
                <p class="text-sm text-[#4eb86a] font-semibold mb-2">Voice Call</p>

                <h2 class="lg:text-4xl sm:text-3xl text-2xl font-bold leading-snug mb-4">
                    What are voice broadcasting services?

                </h2>

                <p class="text-gray-600 mb-3 text-sm md:text-base">
                    In a world of ignored texts and silent notifications, a phone call still holds power. Voice
                    Broadcasting Services by Textora allow your business to skip the digital noise and speak directly to
                    your audience. Whether you’re sending a pre-recorded voice message service for a flash sale or an
                    urgent alert, our platform ensures your voice is the first thing they hear.

                </p>

                <p class="text-gray-600 text-sm md:text-base">
                    We have optimized our automated voice call marketing to ensure your messages bypass the clutter.
                    It’s the most effective automated voice call service for payment reminders and customer surveys,
                    working on every mobile handset across India—no internet required.
                </p>
            </div>

            <img src="{{ URL::asset('images/voice-call.jpg') }}"
                alt="Bulk Voice Call Service Provider in India for Automated Voice Broadcasting" class="rounded-xl">
        </div>
    </section>



    <!-- ===================== WHY VOICE API ===================== -->
    <section class="lg:py-20 md:py-10 py-6 bg-gray-50 hidden">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="lg:text-4xl md:text-3xl text-2xl font-bold text-center mb-4">Why Choose Voice API?</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto md:mb-16 mb-8">
                Reach customers instantly with automated voice calls, and real-time alerts.
            </p>

            <div class="grid md:grid-cols-3 xl:gap-10 lg:gap-8 ma:gap-6 gap-4 text-center">

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl hover:-translate-y-2 transition group hover:text-white hover:bg-black">
                    <i
                        class="fa-solid fa-microphone-lines lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3 group-hover:text-white"></i>
                    <h3 class="text-xl font-semibold">Automated Voice Calls</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Deliver thousands of pre-recorded voice
                        notifications instantly.</p>
                </div>
                {{--
                <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl hover:-translate-y-2 transition">
                    <i class="fa-solid fa-network-wired lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3"></i>
                    <h3 class="text-xl font-semibold">Interactive IVR System</h3>
                    <p class="text-gray-600 mt-2">Enable customers to press keys for automated menus and responses.</p>
                </div> --}}

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl hover:-translate-y-2 transition group hover:text-white hover:bg-black">
                    <i
                        class="fa-solid fa-person-chalkboard lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3 group-hover:text-white"></i>
                    <h3 class="text-xl font-semibold">Text-to-Speech Engine</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Convert text into natural-sounding voice
                        messages instantly.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- ===================== FEATURES ===================== -->
    <section class="lg:py-20 md:py-10 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto md:mb-16 mb-10">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">
                    Features
                </span>

                <h2 class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                    Next-Gen Outbound Dialer Software Features

                </h2>

                <p class="text-center text-gray-600 max-w-2xl mx-auto md:mb-16 mb-6 mt-2">
                    At Textora, we’ve built the tools we wanted to use: powerful, intuitive, and developer-friendly.

                </p>
            </div>

            <!-- Features Grid -->
           <div class="flex flex-wrap justify-center xl:gap-10 lg:gap-8 md:gap-6 gap-4">

    <div class="w-full md:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4rem)/3)] xl:w-[calc((100%-5rem)/3)] xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
        <i class="fa-solid fa-robot text-3xl text-[#049a3d] mb-3 group-hover:text-white"></i>
        <h3 class="font-semibold text-xl"> Intelligent Outbound Dialer Software</h3>
        <p class="text-gray-600 mt-2 group-hover:text-white">
            Our system uses smart algorithms to manage thousands of concurrent calls, ensuring your campaign hits its target with zero lag.
        </p>
    </div>

    <div class="w-full md:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4rem)/3)] xl:w-[calc((100%-5rem)/3)] xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
        <i class="fa-solid fa-language text-3xl text-[#049a3d] mb-3 group-hover:text-white"></i>
        <h3 class="font-semibold text-xl">Neural Text-to-Speech (TTS) Technology</h3>
        <p class="text-gray-600 mt-2 group-hover:text-white">
            Say goodbye to robotic voices. Use our Text-to-Speech (TTS) technology to create natural-sounding, friendly messages in Hindi, English, and 10+ regional Indian languages.
        </p>
    </div>

    <div class="w-full md:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4rem)/3)] xl:w-[calc((100%-5rem)/3)] xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
        <i class="fa-solid fa-volume-high text-3xl text-[#049a3d] mb-3 group-hover:text-white"></i>
        <h3 class="font-semibold text-xl">Developer-First Voice SMS Gateway API</h3>
        <p class="text-gray-600 mt-2 group-hover:text-white">
            Integration shouldn’t take weeks. Our Voice SMS Gateway API is lean, well-documented, and ready to plug into your CRM in minutes.
        </p>
    </div>

    <div class="w-full md:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4rem)/3)] xl:w-[calc((100%-5rem)/3)] xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
        <i class="fa-solid fa-id-card text-3xl text-[#049a3d] mb-3 group-hover:text-white"></i>
        <h3 class="font-semibold text-xl">Verified Customizable Caller ID</h3>
        <p class="text-gray-600 mt-2 group-hover:text-white">
            Don’t be another "Unknown Number." Use verified customizable caller IDs to show your brand name and improve your answer rates instantly.
        </p>
    </div>

    <div class="w-full md:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4rem)/3)] xl:w-[calc((100%-5rem)/3)] xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
        <i class="fa-solid fa-chart-line text-3xl text-[#049a3d] mb-3 group-hover:text-white"></i>
        <h3 class="font-semibold text-xl">Real-Time Call Analytics</h3>
        <p class="text-gray-600 mt-2 group-hover:text-white">
            Get the full picture of your campaign with real-time call analytics. Track everything from pickup rates to call scheduling and retries through our live dashboard.
        </p>
    </div>

</div>
        </div>
    </section>


    <!-- ===================== WHY BUSINESSES PREFER US ===================== -->
    <section class="lg:py-20 md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12">

            <!-- LEFT CONTENT -->
            <div class="flex flex-col justify-center">
                <p class="text-sm text-[#4eb86a] font-semibold mb-2">Benefits</p>

                <h2 class="lg:text-4xl md:text-3xl text-2xl font-bold leading-snug mb-4">
                    How Automated Voice Call Marketing Grows Your Brand

                </h2>

                <p class="text-gray-600 mb-8">
                    Bulk Voice Call Services enable businesses to communicate faster, more personally, and at scale.
                    Whether you're sending alerts, reminders, promotions, or support messages, voice communication
                    creates
                    stronger engagement and ensures your message is heard—literally. Reach thousands in seconds with
                    high-quality, automated calls designed to drive response and action.
                </p>

                <a href="{{ url('pricing-web') }}"
                    class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white font-semibold px-6 py-3 rounded-lg flex items-center gap-2 w-fit">
                    Explore Pricing
                    <span class="text-xl">→</span>
                </a>
            </div>

            <!-- RIGHT BENEFITS -->
            <div class="grid sm:grid-cols-2 gap-6">

                <div class="xl:p-6 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fas fa-bolt text-[#4eb86a] lg:text-4xl md:text-3xl text-2xl mb-3"></i>
                    <h4 class="font-semibold text-lg mb-2">Connect with India’s Heartlands</h4>
                    <p class="text-gray-600 text-sm">
                        Reach users in Tier 2 and Tier 3 cities where a voice message in a local dialect builds more
                        trust than a simple text.

                    </p>
                </div>

                <div class="xl:p-6 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fas fa-headset text-[#4eb86a] lg:text-4xl md:text-3xl text-2xl mb-3"></i>
                    <h4 class="font-semibold text-lg mb-2">Cost-Effective Scalability</h4>
                    <p class="text-gray-600 text-sm">
                        Use a cheap voice broadcasting service for small business needs that doesn't compromise on
                        quality. With per-second billing, you only pay for what your customers actually hear.
                    </p>
                </div>

                <div class="xl:p-6 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fas fa-chart-line text-[#4eb86a] lg:text-4xl md:text-3xl text-2xl mb-3"></i>
                    <h4 class="font-semibold text-lg mb-2">Higher Engagement & Recall</h4>
                    <p class="text-gray-600 text-sm">
                        Voice messages have a 3x higher recall rate than SMS, giving you a better ROI on every audio
                        marketing campaign.
                    </p>
                </div>

                <div class="xl:p-6 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fas fa-microphone-lines text-[#4eb86a] lg:text-4xl md:text-3xl text-2xl mb-3"></i>
                    <h4 class="font-semibold text-lg mb-2"> Seamless Automation</h4>
                    <p class="text-gray-600 text-sm">
                        Use an Interactive voice response (IVR) call service for surveys to get instant feedback and
                        data without manual follow-up.
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
                    5 Simple Steps to Launch Your Textora Voice Campaign

                </h2>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-1/2 w-0.5 bg-gray-200 hidden md:block transform -translate-x-1/2">
                </div>

                <ul class="md:space-y-6 lg:space-y-8 space-y-4">

                    <li class="relative md:flex items-start md:justify-start">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            01
                        </div>

                        <div
                            class="group bg-service-1 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Prepare Your Script</h4>
                            <p class="text-gray-600"> Record your audio or type it into our TTS engine.
                            </p>
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
                                Sync Your Contacts </h4>
                            <p class="text-gray-600"> Securely upload your list or connect via our Voice SMS Gateway
                                API.
                            </p>
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
                                Customize Your Flow</h4>
                            <p class="text-gray-600"> Define your call scheduling and retries to reach people at the
                                perfect time.</p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-end">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            04
                        </div>

                        <div
                            class="group bg-service-4 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Instant Launch</h4>
                            <p class="text-gray-600"> Our high-speed enterprise messaging solutions handle the heavy
                                lifting</p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-start">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            05
                        </div>

                        <div
                            class="group bg-service-5 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Audit the Results</h4>
                            <p class="text-gray-600"> Monitor success instantly with our real-time call analytics
                                dashboard.
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
                    Voice Call Solutions Tailored for Indian Businesses
                </h2>

            </div>

            <!-- Grid : 3 x 2 -->
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-4">

                <!-- E-commerce & Retail -->
                <div
                    class="bg-white shadow-md lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-landmark  md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2"> Banking & Fintech</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        As a leading voice OTP service provider with 100% delivery, we ensure your security codes and
                        automated voice call service for payment reminders arrive in seconds.
                    </p>
                </div>
                <!-- Political Campaigns -->
                <div
                    class="bg-white shadow-md lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-layer-group md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Political Campaigns</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Deploy the best bulk voice call software for election campaigns to connect with voters
                        personally and authentically.
                    </p>
                </div>
                <!-- Healthcare -->
                <div
                    class="bg-white shadow-md lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-heart-pulse md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Education & Healthcare</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Share schedules, results, and appointment reminders using our automated voice broadcasting
                        services.
                    </p>
                </div>



                <!-- Banking & Finance -->
                <div
                    class="bg-white shadow-md lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-cart-shopping md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2"> E-commerce & Retail</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Send order updates and flash sale alerts through a reliable pre-recorded voice message service.
                    </p>
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
                Why Choose Textora’s Bulk Voice Call Services?

            </h2>

            <div class="grid lg:grid-cols-3 md:grid-cols-3 gap-6 lg:gap-8 text-center">

                <!-- Card 1 -->
                <div class="group bg-service-1 lg:p-8 p-4 rounded-xl shadow-lg border-b-4 border-b-white 
                hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-microchip text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Future-Proof Cloud Telephony</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600"> Our infrastructure is built for massive scale, handling over 10,000 calls
                        per second without a glitch.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="group bg-service-2 lg:p-8 p-4 rounded-xl shadow-lg border-b-4 border-b-white 
                hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-sliders text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Regulatory Peace of Mind</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600"> We are fully DLT and TRAI compliant, using the latest 160-series numbering
                        to ensure your transactional calls never hit a block.</p>
                </div>

                <!-- Card 3 -->
                <div class="group bg-service-3 lg:p-8 p-4 rounded-xl shadow-lg border-b-4 border-b-white 
                hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-headset text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">24/7 Human Support</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600"> If you ever need a hand optimizing your mass calling strategies, our
                        expert support team is always a call away.</p>
                </div>



            </div>
        </div>
    </section>


    {{-- cta section --}}
    <section class="relative w-full lg:py-20 md:py-10 py-6 overflow-hidden comn-cta-section">

        <!-- Background overlay icons (optional) -->
        <div class="absolute inset-0 opacity-20">
            <img src="your-background-image.png"
                alt="Voice Broadcasting Services platform for automated voice call marketing"
                class="w-full h-full object-cover">
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-4xl mx-auto text-center px-5">
            <h2 class="text-white md:lg:text-4xl md:text-3xl text-2xl font-semibold mb-4">
                Ready to start a conversation that actually converts?

            </h2>

            <p class="text-white text-lg md:text-xl mb-8">
                Automate Calls, TTS & Alerts with a Powerful and Scalable Voice Call API Platform
            </p>


            <button id="ctaBtn" onclick="openModall()" class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] transition md:px-10 px-4 md:py-4 py-2
                   text-white font-semibold text-lg rounded shadow-lg">
                Request Your Free Demo
            </button>
        </div>
    </section>

    <!-- ===================== FAQ ===================== -->
    <section class="lg:py-20 md:py-10 py-6 bg-white">
        <div class="w-full md:max-w-6xl mx-auto px-6">
            <h2 class="lg:text-4xl md:text-3xl text-2xl font-bold text-center mb-8">Frequently Asked Questions</h2>

            <div class="grid grid-cols-12 xl:gap-10 lg:gap-8 ma:gap-6 gap-4">
                <div class="col-span-12 mb-10 md:mb-0 md:mt-10">
                    <div class="space-y-4">

                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(1)"
                                class="w-full flex justify-between text-lg items-center py-5 text-slate-800">
                                <span class="text-left">Is Textora the best bulk voice call software for election
                                    campaigns?
                                </span>
                                <span id="icon-1" class="text-slate-800">+</span>
                            </button>
                            <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    Yes! We are the go-to choice for political strategists due to our high-capacity
                                    throughput and regional language support.

                                </div>
                            </div>
                        </div>

                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(3)"
                                class="w-full flex justify-between text-lg items-center py-5 text-slate-800">
                                <span class="text-left">Is there a cheap voice broadcasting service for small business?
                                </span>
                                <span id="icon-3" class="text-slate-800">+</span>
                            </button>
                            <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    Absolutely. We offer competitive pricing with per-second billing so you can grow
                                    your business without breaking the bank.
                                </div>
                            </div>
                        </div>

                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(4)"
                                class="w-full flex justify-between text-lg items-center py-5 text-slate-800">
                                <span class="text-left">What makes you a top voice OTP service provider with 100%
                                    delivery?
                                </span>
                                <span id="icon-4" class="text-slate-800">+</span>
                            </button>
                            <div id="content-4" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    We use direct carrier routing and failover paths to ensure your OTPs bypass network
                                    congestion every single time.
                                </div>
                            </div>
                        </div>

                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(5)"
                                class="w-full flex justify-between text-lg items-center py-5 text-slate-800">
                                <span class="text-left">How does Textora ensure compliance with the latest TRAI
                                    guidelines?
                                </span>
                                <span id="icon-5" class="text-slate-800">+</span>
                            </button>
                            <div id="content-5" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    Staying compliant shouldn't be your burden. Textora is a fully DLT and TRAI
                                    compliant platform. We proactively manage the transition to the 160-numbering series
                                    for transactional calls and the 140-series for promotional outreach. Our system
                                    automatically scrubs numbers against the National Do Not Call (NDNC) registry in
                                    real-time, ensuring your automated voice call marketing remains ethical and legal.

                                </div>
                            </div>
                        </div>

                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(6)"
                                class="w-full flex justify-between text-lg items-center py-5 text-slate-800">
                                <span class="text-left">Can I integrate the Voice API with my existing CRM?

                                </span>
                                <span id="icon-6" class="text-slate-800">+</span>
                            </button>
                            <div id="content-6" class="max-h-0 overflow-hidden transition-all duration-300">
                                <div class="pb-5 text-sm text-slate-500">
                                    Absolutely. Textora is built for seamless connectivity. Our Voice SMS Gateway API is
                                    developer-friendly and supports easy integration with popular CRMs like Salesforce,
                                    Zoho, and HubSpot. Whether you need to trigger an automated voice call service for
                                    payment reminders or a Voice OTP service directly from your application, our robust
                                    documentation and 99.9% uptime ensure a "plug-and-play" experience for your tech
                                    team.


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
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const cta = document.getElementById("ctaBtn");
            cta.style.opacity = 0;
            setTimeout(() => {
                cta.style.transition = "opacity 1s ease-in-out";
                cta.style.opacity = 1;
            }, 300);
        });
    </script>

</x-master-page>