<x-master-page title="RCS Messaging Services | Scale Your Business with Textora SMS"
    description="Switch to RCS Messaging for higher engagement. Get verified business messaging, rich media, and carousels with our secure RCS API. Explore pricing now!">
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
      "name": "RCS Business Messaging Service",
      "serviceType": "Next-Gen Mobile Marketing",
      "provider": {
        "@type": "Organization",
        "name": "Textora RCS Business Messaging",
        "url": "https://textorasms.com/rcs-messaging"
      },
      "description": "Upgrade to SMS 2.0 with Rich Communication Services (RCS). Send fully branded experiences with high-res media, carousels, and interactive buttons directly to the native messaging app.",
      "offers": {
        "@type": "Offer",
        "availability": "https://schema.org/InStock",
        "areaServed": "IN"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "RCS Features",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Rich Cards & Carousels"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Verified Business Sender ID"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Interactive One-Tap Actions"
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
          "name": "What exactly is RCS, and why should my business care?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "RCS is 'SMS with superpowers.' It allows you to send high-res photos, videos, and clickable buttons directly to a customer's text inbox. It makes your brand look professional and verified, helping you stand out from plain-text spam."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if my customer has an older phone that doesn't support RCS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our system detects if a phone cannot handle rich media and automatically sends a standard SMS 'fallback' instead. Your message always gets through, no matter what device they use."
          }
        },
        {
          "@type": "Question",
          "name": "Do my customers need to install a special app to see these messages?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not at all. RCS works right inside the default messaging app already on their phones. There's nothing for them to download or set up—they just receive a more interactive experience automatically."
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
          "name": "RCS Messaging",
          "item": "https://textorasms.com/rcs-messaging"
        }
      ]
    }
  ]
}
</script>


   @endpush

    <!-- ===================== HERO SECTION ===================== -->
    <section class="overflow-hidden rcs-messaging-bg md:block hidden">
        <div class="relative max-w-7xl mx-auto px-6 text-white">
            <div class="grid grid-cols-12">
                <div class="col-span-6">
                    <h1 class="xl:text-4xl lg:text-3xl text-2xl font-extrabold drop-shadow-lg">
                        Stop Texting. Start Conversing with RCS Messaging.
                    </h1>
                    <p class="mt-4 lg:text-base text-sm  opacity-90 max-w-xl">
                        Why settle for 160 characters when you can send a fully branded experience? Rich Communication
                        Services turns every text into a powerful, interactive storefront. Build trust with a Verified
                        Business Sender ID and meet your customers where they already spend their time.
                    </p>

                    <a href="{{ url('pricing-web') }}"
                        class="mt-4 lg:mt-8 inline-block border border-white text-white lg:px-8 px-4 py-2 lg:py-3 rounded-xl shadow-lg text-sm lg:text-lg font-semibold hover:scale-105 transition">
                        Get Started Now <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <button onclick="openModall()"
                        class="border border-white text-white lg:w-auto w-fit px-8 py-2 lg:py-3 mx-auto xl:mt-0 mt-3 lg:ms-5 rounded-lg text-sm lg:text-lg text-md font-semibold hover:bg-white hover:text-black transition duration-300 shadow-lg transform hover:scale-105">
                        Book a Free Demo
                    </button>
                </div>
                {{-- <div class="col-span-6">
                    <img src="images/en-article43.png" alt="" class="w-full">
                </div> --}}
            </div>
        </div>
    </section>

    {{-- mob banner section --}}
    <div class="mob-banner block md:hidden relative bg-cover bg-center"
        style="background-image: url('{{ URL::asset('/images/banners/rcs-messaging-mob.jpg') }}');height: 100vh;">
        <div class="relative z-10 h-full flex flex-col items-center justify-start pt-[110px] px-4 text-center">
            <h6 class="text-white text-3xl sm:text-2xl font-bold drop-shadow-lg">
                Stop Texting. Start Conversing with RCS Messaging.

            </h6>
            <p class="mt-2 text-md text-white opacity-90 line-clamp-2">
                Why settle for 160 characters when you can send a fully branded experience? Rich Communication Services
                turns every text into a powerful, interactive storefront. Build trust with a Verified Business Sender ID
                and meet your customers where they already spend their time.
            </p>
            <a href="{{ url('pricing-web') }}"
                class="mt-4 inline-block border border-white text-white px-4 py-2 rounded-xl shadow-lg text-sm font-semibold hover:scale-105 transition">
                Get Started Now <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>


    {{-- what is service section --}}
    <section class="lg:py-20 md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 md:gap-12 gap-4 items-center">
            <div class="flex flex-col justify-center">
                <p class="text-sm text-[#4eb86a] font-semibold mb-2">Rich Communication Services</p>
                <h2 class="md:text-4xl sm:text-3xl text-2xl font-bold leading-snug mb-4">
                    What is RCS? It’s SMS, but with a personality.

                </h2>

                <p class="text-gray-600 mb-3">Think of RCS Business Messaging (RBM) as the bridge between a text message
                    and a mobile app. It’s "SMS 2.0"—no downloads, no logins, just seamless interaction.

                </p>
                <p class="text-gray-600 mb-8">While traditional texts feel like "noise," RCS Marketing feels like a
                    service. It allows your brand to send rich media, use real-time read receipts, and offer interactive
                    buttons that make life easier for your customers. From checking a flight to buying shoes, it all
                    happens inside the native messaging app.
                </p>
            </div>
            <img src="{{ URL::asset('images/rcs-service-img.jpg') }}"
                alt="RCS Messaging Platform for Rich Communication Services & RCS Business Messaging" class="mx-auto">
        </div>
    </section>

    <!-- ===================== WHY RCS ===================== -->
    <section class="lg:py-20 md:py-10 py-6 hidden">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="lg:text-4xl md:text-3xl text-2xl font-bold text-center mb-4">Why Choose RCS Messaging?</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-16">
                Deliver next-generation messaging experiences with rich media, branded communication, and interactive
                responses.
            </p>

            <div class="grid md:grid-cols-3 lg:gap-10 ma:gap-6 gap-4 text-center">

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition group hover:text-white hover:bg-black">
                    <i
                        class="fa-solid fa-layer-group lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3 group-hover:text-white"></i>
                    <h3 class="text-xl font-semibold">Rich Cards & Carousels</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Send images, product cards, descriptions, and
                        call-to-action buttons.
                    </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition group hover:text-white hover:bg-black">
                    <i
                        class="fa-solid fa-shield-halved lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3 group-hover:text-white"></i>
                    <h3 class="text-xl font-semibold">Verified Business Sender</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Brand identity with logo, business name &
                        secure messaging channel.
                    </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition group hover:text-white hover:bg-black">
                    <i
                        class="fa-solid fa-bolt lg:text-4xl md:text-3xl text-2xl text-green-600 mb-3 group-hover:text-white"></i>
                    <h3 class="text-xl font-semibold">Higher CTR & Engagement</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Up to 10× more interaction compared to normal
                        SMS.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- ===================== FEATURES ===================== -->
    <section class="lg:py-20 md:py-10 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center max-w-3xl mx-auto md:mb-16 mb-10">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">Powerful RCS
                    Features
                </span>
                <h2 class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                    Advanced Rich Communication Services Features Designed for Real People
                </h2>
                <p class="text-center text-gray-600 max-w-2xl mx-auto md:mb-16 mb-6 mt-2">
                    Transform customer communication with advanced, interactive RCS messaging capabilities.
                </p>
            </div>

            <div class="grid md:grid-cols-3 lg:gap-10 ma:gap-6 gap-4">

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i
                        class="fa-solid fa-image lg:text-4xl md:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl">Rich Media Support</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white"> Don't just tell them about your product; show
                        them. Send high-res photos and carousels that pop.
                    </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i
                        class="fa-solid fa-palette lg:text-4xl md:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl">Verified Branding</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">End the "is this a scam?" worry. Your logo and
                        Verified Business Sender ID prove you are the real deal.
                    </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i
                        class="fa-solid fa-square-check lg:text-4xl md:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl">One-Tap Actions</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white"> Whether it’s text message rcs iphone or
                        Android, give users interactive buttons to pay or track orders instantly.
                    </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i
                        class="fa-solid fa-eye lg:text-4xl md:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl"> Read Receipts</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white"> No more guessing. Know exactly when your Bulk
                        RCS Messaging campaign hits the mark.</p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i
                        class="fa-solid fa-comments lg:text-4xl md:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl">Conversational AI</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Integrate chatbot integration to handle FAQs
                        24/7 without losing the human touch.
                    </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <i
                        class="fa-solid fa-shield-halved lg:text-4xl md:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl">Secure Messaging</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white"> Built on a foundation of trust with end-to-end
                        encryption for every user.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ===================== Benefits ===================== -->
    <section class="lg:py-20 md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12">

            <!-- LEFT CONTENT -->
            <div class="flex flex-col justify-center">
                <p class="text-sm text-[#4eb86a] font-semibold mb-2">Benefits</p>

                <h2 class="lg:text-4xl md:text-3xl text-2xl font-bold leading-snug mb-4">
                    Why Your Brand Needs the RCS Advantage

                </h2>

                <p class="text-gray-600 mb-8">
                    In 2026, attention is the new currency. Standard SMS is easy to ignore; Rich Communication Services
                    are impossible to miss. By upgrading to the SMS 2.0 standard, you move your business from "sending
                    alerts" to "starting conversations.

                </p>

                <a href="{{ url('pricing-web') }}"
                    class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white font-semibold px-6 py-3 rounded-lg flex items-center gap-2 w-fit">
                    Explore Pricing
                    <span class="text-xl">→</span>
                </a>
            </div>

            <!-- RIGHT FEATURES -->
            <div class="grid sm:grid-cols-2 gap-6">

                <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fa-solid fa-comments text-[#4eb86a] lg:text-4xl md:text-3xl text-2xl mb-3"></i>
                    <h4 class="font-semibold text-lg mb-2">Universal Reach & Engagement </h4>
                    <p class="text-gray-600 text-sm">
                        Reach every Android and iPhone user with rich media that outperforms any standard SMS campaign.
                    </p>
                </div>

                <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fa-solid fa-shield-halved text-[#4eb86a] lg:text-4xl md:text-3xl text-2xl mb-3"></i>
                    <h4 class="font-semibold text-lg mb-2">Interactive App-Like Experience</h4>
                    <p class="text-gray-600 text-sm">
                        Drive instant actions with carousels and buttons that transform a simple text into a mini-app.
                    </p>
                </div>

                <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fa-solid fa-plug text-[#4eb86a] lg:text-4xl md:text-3xl text-2xl mb-3"></i>
                    <h4 class="font-semibold text-lg mb-2">Verified Brand Trust & Security</h4>
                    <p class="text-gray-600 text-sm">
                        Build instant credibility with a verified sender ID that ensures your customers feel safe and
                        secure.

                    </p>
                </div>

                <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fa-solid fa-chart-pie text-[#4eb86a] lg:text-4xl md:text-3xl text-2xl mb-3"></i>
                    <h4 class="font-semibold text-lg mb-2">High ROI Marketing at Scale</h4>
                    <p class="text-gray-600 text-sm">
                        Get the best RCS message price in India to drive conversions that beat email and social media
                        ads </p>
                </div>

            </div>
        </div>
    </section>


    <!-- How It Works Section -->
    <section class="lg:py-20 md:py-10 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Heading -->
            <div class="text-center mb-14">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">How To Get Started
                </span>
                <h2 class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                    Your Journey to Better Engagement in 5 Steps

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
                            class="group bg-service-1 lg:p-6 p-3 rounded-xl shadow-lg border text-center md:text-left  border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Seamless Integration</h4>
                            <p class="text-gray-600"> Use our RCS API for Business to plug directly into your current
                                workflow.
                            </p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-end">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            02
                        </div>

                        <div
                            class="group bg-service-2 lg:p-6 p-3 rounded-xl shadow-lg border text-center md:text-left  border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Get Verified </h4>
                            <p class="text-gray-600"> We help you navigate the paperwork to get your official Verified
                                Business Sender ID.
                            </p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-start">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            03
                        </div>

                        <div
                            class="group bg-service-3 lg:p-6 p-3 rounded-xl shadow-lg border text-center md:text-left  border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Design Your Experience
                            </h4>
                            <p class="text-gray-600"> Build rich cards and interactive flows that reflect your brand’s
                                voice.
                            </p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-end">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            04
                        </div>

                        <div
                            class="group bg-service-4 lg:p-6 p-3 rounded-xl shadow-lg border text-center md:text-left  border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Send & Engage</h4>
                            <p class="text-gray-600"> Reach millions of users with Bulk RCS Messaging that feels
                                personal.

                            </p>
                        </div>
                    </li>

                    <li class="relative md:flex items-start md:justify-start">
                        <div
                            class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                            05
                        </div>

                        <div
                            class="group bg-service-5 lg:p-6 p-3 rounded-xl shadow-lg border text-center md:text-left  border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Refine with Data
                            </h4>
                            <p class="text-gray-600"> Use real-time analytics to see what’s working and tweak your
                                strategy for better results.
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
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">Our Expertise in
                    Each Industry
                </span>
                <h2 class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                    Real Solutions for Every Industry

                </h2>
                <p class="text-center text-gray-600 max-w-2xl mx-auto md:mb-16 mb-6 mt-2">
                    RCS enhances customer experience across every industry with rich and interactive communication.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-4">

                <!-- E-commerce & Retail -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-cart-shopping md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">E-commerce & Retail</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Send "Back in Stock" alerts with high-res product carousels and "Buy Now" buttons for instant
                        sales. </p>
                </div>

                <!-- Healthcare -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-heart-pulse md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Healthcare</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Share rich media guides for post-op care and automated appointment reminders with easy
                        reschedule options.
                    </p>
                </div>

                <!-- Education -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-landmark md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Banking & Finance</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Deliver Verified Business Messaging for secure fraud alerts and interactive monthly bank
                        statements.
                    </p>
                </div>

                <!-- Banking & Finance -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-house  md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Travel & Hospitality</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Send digital tickets with QR codes and real-time flight updates via immersive Rich Communication
                        Services.
                    </p>
                </div>

                <!-- Events & Hospitality -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-graduation-cap   md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Education</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Notify parents about schedules and results with interactive buttons to download report cards or
                        pay fees. </p>
                </div>

                <!-- Event Management -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-layer-group md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Event Management</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Send ticket confirmations, venue maps, and promotional videos to drive excitement for upcoming
                        events.
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
                Trusted RCS Messaging Partner for Your Business
            </h2>

            <div class="flex flex-wrap justify-center gap-8 text-center">

                <div
                    class="w-full sm:w-[calc((100%-2rem)/2)] md:w-[calc((100%-4rem)/3)] group bg-service-1 lg:p-8 p-4 rounded-xl shadow-lg border-b-4 border-b-white hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-microchip text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Advanced Technology</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600">Stay ahead with next-generation RCS technology built for performance and
                        reliability.</p>
                </div>

                <div
                    class="w-full sm:w-[calc((100%-2rem)/2)] md:w-[calc((100%-4rem)/3)] group bg-service-2 lg:p-8 p-4 rounded-xl shadow-lg border-b-4 border-b-white hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-globe text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Global Reach</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600">Connect with millions of RCS-enabled users across multiple regions with
                        high accuracy.</p>
                </div>

                <div
                    class="w-full sm:w-[calc((100%-2rem)/2)] md:w-[calc((100%-4rem)/3)] group bg-service-3 lg:p-8 p-4 rounded-xl shadow-lg border-b-4 border-b-white hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-plug-circle-check text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Seamless Integration</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600">Developer-friendly APIs and tools for quick, smooth, and scalable
                        integration.</p>
                </div>

                <div
                    class="w-full sm:w-[calc((100%-2rem)/2)] md:w-[calc((100%-4rem)/3)] group bg-service-4 lg:p-8 p-4 rounded-xl shadow-lg border-b-4 border-b-white hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-chart-line text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Real-Time Insights</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600">Get powerful analytics and real-time engagement tracking for better
                        decision-making.</p>
                </div>

                <div
                    class="w-full sm:w-[calc((100%-2rem)/2)] md:w-[calc((100%-4rem)/3)] group bg-service-5 lg:p-8 p-4 rounded-xl shadow-lg border-b-4 border-b-white hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-headset text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Dedicated Support</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600">24/7 expert support for setup, troubleshooting, and campaign success.</p>
                </div>

            </div>
        </div>
    </section>


    {{-- Table --}}
  <section class="lg:py-24 md:py-16 py-10 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 flex flex-col items-center ">

        <div class="text-center w-full max-w-2xl">
           
              <p class="text-sm font-semibold uppercase tracking-widest text-green-700 uppercase text-center mb-2">
                 Messaging Evolution
            </p>
              <h2
                class="md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 text-center max-w-4xl mx-auto mb-16">
                Why the Switch to Next-Gen SMS Matters
            </h2>
           
        </div>

        <div class="w-full bg-white rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.08)] border border-gray-100 overflow-hidden">
            
            <div class="hidden sm:grid grid-cols-[1.5fr_1fr_1fr] bg-gray-50/80 border-b border-gray-200 text-xs uppercase tracking-widest font-extrabold text-gray-500">
                <div class="px-8 py-5 flex items-center">Feature</div>
                <div class="px-8 py-5 flex items-center justify-center">Standard SMS</div>
                <div class="px-8 py-5 flex items-center justify-center text-[#4eb86a] border-b-2 border-[#4eb86a]">
                    <i class="fa-solid fa-bolt mr-2"></i> RCS Messaging
                </div>
            </div>

            <div class="flex flex-col">
                
                <div class="group flex flex-col sm:grid sm:grid-cols-[1.5fr_1fr_1fr] border-b border-gray-100 last:border-0 transition-colors hover:bg-gray-50/50">
                    <div class="px-6 py-4 sm:px-8 sm:py-6 flex items-center">
                        <span class="text-base sm:text-lg font-bold text-gray-800">Trust & Security</span>
                    </div>
                    
                    <div class="px-6 pb-2 sm:p-0 flex sm:items-center sm:justify-center">
                        <span class="sm:hidden w-1/3 text-xs text-gray-400 font-bold uppercase tracking-wider flex items-center md:me-0 me-2">Standard:</span>
                        <span class="w-2/3 sm:w-auto text-gray-500 font-medium flex items-center">
                             Spam Risk
                        </span>
                    </div>
                    
                    <div class="px-6 pt-2 pb-5 sm:p-0 flex sm:items-center sm:justify-center sm:border-l sm:border-gray-50">
                        <span class="sm:hidden w-1/3 text-xs text-[#4eb86a] font-bold uppercase tracking-wider flex items-center me-4 md:me-0">RCS:</span>
                        <span class="w-2/3 sm:w-auto text-[#4eb86a] font-medium md:text-lg flex items-center">
                            Verified  <i class="fa-solid fa-circle-check ml-2"></i>

                        </span>
                    </div>
                </div>

                <div class="group flex flex-col sm:grid sm:grid-cols-[1.5fr_1fr_1fr] border-b border-gray-100 last:border-0 transition-colors hover:bg-gray-50/50">
                    <div class="px-6 py-4 sm:px-8 sm:py-6 flex items-center">
                        <span class="text-base sm:text-lg font-bold text-gray-800">Media Capabilities</span>
                    </div>
                    
                    <div class="px-6 pb-2 sm:p-0 flex sm:items-center sm:justify-center">
                        <span class="sm:hidden w-1/3 text-xs text-gray-400 font-bold uppercase tracking-wider flex items-center md:me-0 me-2">Standard:</span>
                        <span class="w-2/3 sm:w-auto text-gray-500 font-medium flex items-center">
                             Plain Text  
                        </span>
                    </div>
                    
                    <div class="px-6 pt-2 pb-5 sm:p-0 flex sm:items-center sm:justify-center sm:border-l sm:border-gray-50">
                        <span class="sm:hidden w-1/3 text-xs text-[#4eb86a] font-bold uppercase tracking-wider flex items-center me-4 md:me-0">RCS:</span>
                        <span class="w-2/3 sm:w-auto text-[#4eb86a] font-medium md:text-lg flex items-center">
                            Rich Media<i class="fa-solid fa-circle-check ml-2"></i>
                        </span>
                    </div>
                </div>

                <div class="group flex flex-col sm:grid sm:grid-cols-[1.5fr_1fr_1fr] border-b border-gray-100 last:border-0 transition-colors hover:bg-gray-50/50">
                    <div class="px-6 py-4 sm:px-8 sm:py-6 flex items-center">
                        <span class="text-base sm:text-lg font-bold text-gray-800">User Engagement</span>
                    </div>
                    
                    <div class="px-6 pb-2 sm:p-0 flex sm:items-center sm:justify-center">
                        <span class="sm:hidden w-1/3 text-xs text-gray-400 font-bold uppercase tracking-wider flex items-center md:me-0 me-2">Standard:</span>
                        <span class="w-2/3 sm:w-auto text-gray-500 font-medium flex items-center">
                             Static
                        </span>
                    </div>
                    
                    <div class="px-6 pt-2 pb-5 sm:p-0 flex sm:items-center sm:justify-center sm:border-l sm:border-gray-50">
                        <span class="sm:hidden w-1/3 text-xs text-[#4eb86a] font-bold uppercase tracking-wider flex items-center me-4 md:me-0">RCS:</span>
                        <span class="w-2/3 sm:w-auto text-[#4eb86a] font-medium md:text-lg flex items-center">
                            Interactive <i class="fa-solid fa-circle-check ml-2"></i>
                        </span>
                    </div>
                </div>

                <div class="group flex flex-col sm:grid sm:grid-cols-[1.5fr_1fr_1fr] border-b border-gray-100 last:border-0 transition-colors hover:bg-gray-50/50">
                    <div class="px-6 py-4 sm:px-8 sm:py-6 flex items-center">
                        <span class="text-base sm:text-lg font-bold text-gray-800">Apple/iOS Support</span>
                    </div>
                    
                    <div class="px-6 pb-2 sm:p-0 flex sm:items-center sm:justify-center">
                        <span class="sm:hidden w-1/3 text-xs text-gray-400 font-bold uppercase tracking-wider flex items-center md:me-0 me-2">Standard:</span>
                        <span class="w-2/3 sm:w-auto text-gray-500 font-medium flex items-center">
                             Basic
                        </span>
                    </div>
                    
                    <div class="px-6 pt-2 pb-5 sm:p-0 flex sm:items-center sm:justify-center sm:border-l sm:border-gray-50">
                        <span class="sm:hidden w-1/3 text-xs text-[#4eb86a] font-bold uppercase tracking-wider flex items-center me-4 md:me-0">RCS:</span>
                        <span class="w-2/3 sm:w-auto text-[#4eb86a] font-medium md:text-lg flex items-center">
                            Full Support <i class="fa-solid fa-circle-check ml-2"></i>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


    {{-- cta section --}}
    <section class="relative w-full lg:py-20 md:py-10 py-6 overflow-hidden comn-cta-section">

        <!-- Background overlay icons (optional) -->
        <div class="absolute inset-0 opacity-20">
            <img src="your-background-image.png" alt="Next-gen SMS platform for multimedia business messaging"
                class="w-full h-full object-cover">
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-4xl mx-auto text-center px-5">
            <h2 class="text-white md:lg:text-4xl md:text-3xl text-2xl font-semibold mb-4">
                Ready to humanize your brand’s communication?
            </h2>

            <p class="text-white text-lg md:text-xl mb-8">
                Don’t let your messages get lost in the noise. Switch to a secure & scalable Textora's RCS Platform
                today.

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
            <h2 class="lg:text-4xl md:text-3xl text-2xl font-bold text-center mb-12">Common Questions About RCS
                Messaging
            </h2>

            <div class="grid grid-cols-12 lg:gap-10 ma:gap-6 gap-4">
                <div class="col-span-12 mb-10 md:mb-0">
                    <div class="space-y-4">

                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(1)"
                                class="w-full text-lg flex justify-between items-center py-5 text-slate-800">
                                <span class="text-left">What exactly is RCS, and why should my business care?</span>
                                <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                                    +
                                </span>
                            </button>
                            <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">
                                    Think of RCS as "SMS with superpowers." It lets you send high-res photos, videos,
                                    and clickable buttons directly to a customer’s text inbox. It’s perfect because it
                                    makes your brand look professional and verified, helping you stand out from the sea
                                    of plain-text spam.

                                </div>
                            </div>
                        </div>

                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(2)"
                                class="w-full text-lg flex justify-between items-center py-5 text-slate-800">
                                <span class="text-left">What happens if my customer has an older phone that doesn't
                                    support RCS?
                                </span>
                                <span id="icon-2" class="text-slate-800 transition-transform duration-300">
                                    +
                                </span>
                            </button>
                            <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">
                                    Don't worry—no one gets left behind. Our system is smart enough to detect if a phone
                                    can't handle rich media. If it can't, it automatically sends a standard SMS
                                    "fallback" instead. Your message always gets through, no matter what device they
                                    use.
                                </div>
                            </div>
                        </div>

                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(3)"
                                class="w-full text-lg flex justify-between items-center py-5 text-slate-800">
                                <span class="text-left"> Is RCS actually safe for sending sensitive things like OTPs?
                                </span>
                                <span id="icon-3" class="text-slate-800 transition-transform duration-300">
                                    +
                                </span>
                            </button>
                            <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">
                                    It’s actually safer than traditional texting. RCS comes with "Verified Sender"
                                    profiles, which means your customers see your real brand name and logo instead of a
                                    random number. This builds instant trust and makes people much more likely to
                                    interact with your secure alerts.
                                </div>
                            </div>
                        </div>
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(4)"
                                class="w-full text-lg flex justify-between items-center py-5 text-slate-800">
                                <span class="text-left">Can I really see if someone has actually read my message?
                                </span>
                                <span id="icon-4" class="text-slate-800 transition-transform duration-300">
                                    +
                                </span>
                            </button>
                            <div id="content-4" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">
                                    Yes! Unlike basic SMS where you’re often left guessing, RCS gives you real "Read
                                    Receipts." You can see exactly when your message was opened and which buttons were
                                    clicked. It’s a game-changer for understanding what your customers actually like.
                                </div>
                            </div>
                        </div>
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(5)"
                                class="w-full text-lg flex justify-between items-center py-5 text-slate-800">
                                <span class="text-left"> Do my customers need to install a special app to see these
                                    messages?
                                </span>
                                <span id="icon-5" class="text-slate-800 transition-transform duration-300">
                                    +
                                </span>
                            </button>
                            <div id="content-5" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">
                                    Not at all. That’s the beauty of it! RCS works right inside the default messaging
                                    app already on their phones. There’s nothing for them to download or set up—they
                                    just receive a much better, more interactive experience from your brand
                                    automatically.

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
                content.style.maxHeight = '0';
                icon.textContent = '+';
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.textContent = '-';
            }
        }
    </script>

</x-master-page>