<x-master-page title="Best Email Marketing Service | Textora SMS"
    description="Use our Email Marketing Service for mass media-rich broadcasts. Send your promotional campaigns via our secure web panel. Grow your reach now!">
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
      "name": "Bulk Email Marketing Service",
      "serviceType": "Email Marketing Solution",
      "provider": {
        "@type": "Organization",
        "name": "Textora Email Marketing",
        "url": "https://textorasms.com/email-marketing"
      },
      "description": "Send high-impact Email promotional Mails, alerts, and media-rich campaigns to thousands of users instantly with a 98% open rate.",
      "offers": {
        "@type": "Offer",
        "availability": "https://schema.org/InStock",
        "areaServed": "IN"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Email Marketing Features",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Large-scale WhatsApp Outreach"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Email Broadcast Software"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Regional Language (Unicode) Support"
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
          "name": "Is Bulk Email Marketing legal in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, it is a widely used marketing practice. Our service provides a professional platform that allows you to send informational and promotional messages to your opted-in customer base following standard business guidelines."
          }
        },
        {
          "@type": "Question",
          "name": "How can I send 100,000 Emails without getting blocked?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Using a professional Bulk Email Sender Tool is key. Our platform uses advanced routing and virtual numbers to manage high volumes safely, ensuring your primary business number remains protected."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need to save the Email ID in my Laptop to send bulk Emails?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Our software allows you to upload thousands of Email ID via Excel or CSV. You can send to both saved and unsaved Email Id directly from our online web panel."
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
          "name": "Bulk Email Marketing",
          "item": "https://textorasms.com/email-marketing"
        }
      ]
    }
  ]
}
</script>
    @endpush



    <!-- ===================== HERO SECTION ===================== -->
    <section class="relative overflow-hidden email-banner md:block hidden">
        <div class="relative max-w-7xl mx-auto px-6 text-white">
            <div class="grid grid-cols-12">
                <div class="col-span-7">
                    <h1 class="xl:text-4xl lg:text-3xl text-2xl font-bold drop-shadow-lg pt-8 lg:pt-12">
Grow Your Business with Bulk Email Marketing                    </h1>

                    <p class="mt-2 md:mt-4 lg:text-base text-sm opacity-90 max-w-3xl">
Grow your business with powerful Bulk Email Marketing. Send promotional emails, newsletters, product updates, and automated campaigns with high deliverability, advanced analytics, and real-time tracking.</p>

                    <a href="{{ url('pricing-web') }}"
                        class="mt-4 lg:mt-8 inline-block border me-4 border-white text-white lg:px-8 px-3 py-2 lg:py-3 rounded-xl shadow-lg lg:text-lg text-md font-semibold hover:scale-105 transition">
                        Purchase Now <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <button onclick="openModall()"
                        class="border border-white text-white md:w-auto w-fit px-3 lg:px-8 py-2 lg:py-3 mx-auto xl:mt-0 mt-3 rounded-lg lg:text-lg text-md font-semibold hover:bg-white hover:text-black transition duration-300 shadow-lg transform hover:scale-105">
                        Book a Free Demo
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- mob banner section --}}
   <div class="mob-banner block md:hidden relative bg-cover bg-center"
     style="background-image: url('{{ URL::asset('images/banners/bulk-email-mobile.png') }}');
            min-height:100vh;
            background-size:cover;
            background-position:center top;">

    <div class="relative z-10 h-full flex flex-col items-center justify-start pt-[100px] px-4 text-center">

        <h3 class="text-white text-2xl font-bold drop-shadow-lg">
            Grow Your Business with Bulk Email Marketing                    </h1>

        </h3>

        <h6 class="mt-3 text-white text-sm leading-6">
            Grow your business with powerful Bulk Email Marketing. Send promotional emails, newsletters, product updates, and automated campaigns with high deliverability, advanced analytics, and real-time tracking..
        </h6>

        <div class="flex flex-col gap-3 mt-15 w-fIT">

           <a href="{{ url('pricing-web') }}"
   class="mt-8 inline-flex items-center justify-center border border-white text-white px-6 py-3 rounded-full text-sm font-semibold w-fit mx-auto">
    Purchase Now
    <i class="fa-solid fa-arrow-right ml-2"></i>
</a>
            

        </div>

    </div>

</div>
    {{-- what is service section --}}
    <section class="lg:py-20 md:py-10 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-8 md:gap-12">
            <div class="flex flex-col justify-center">
                <p class="text-sm text-[#4eb86a] font-semibold mb-2">Bulk Email Marketing</p>
                <h2 class="lg:text-4xl sm:text-3xl text-2xl font-bold leading-snug mb-4">
                    What Exactly Is Bulk Email Marketing?

                </h2>

                <p class="text-gray-600 mb-3">Think of it as the modern-day upgrade to the mass email—but without the
                    "ignored" folder. Bulk Email Marketing is a strategy that lets businesses chat with thousands of
                    customers at once, all while keeping that personal, one-on-one feel. </p>
                <p class="text-gray-600 mb-8">
                    Instead of being tied down by the limitations of the regular Emails  (like those tiny broadcast
                    list caps), you use a professional provider to send out your Emails to the masses in one go.
                </p>
            </div>
            <img src="{{ URL::asset('images/email.jpg') }}" alt="">
        </div>


        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-8 md:gap-12 mt-12">

            <img src="{{ URL::asset('images/bulk-email.jpg') }}" alt=""
                class="order-2 md:order-1">
            <div class="flex flex-col justify-center order-1 md:order-2">

                <h2 class="lg:text-4xl sm:text-3xl text-2xl font-bold leading-snug mb-4 ">
                    Expand Your Business with Bulk Email Campaign

                </h2>

                <p class="text-gray-600 mb-3"> Bulk Email Marketing is the most effective way for Indian businesses to
                    communicate directly with their customers. Our Bulk Email Sender Tool allows you to send text,
                    images, and videos to thousands of users instantly, bypassing the 256-contact limits of personal
                    accounts. Unlike traditional Bulk Email Campaigns offers a 98% open rate, ensuring your
                    brand message is seen and read by your target audience immediately. </p>

            </div>

        </div>
    </section>

    <!-- ===================== WHY WABA ===================== -->
    <section class="lg:py-20 md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto md:mb-16 mb-10">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">Bulk Email
                    Service</span>
                <h2 class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                    Why Email Marketing is the Secret Sauce for Business Growth
                </h2>
                <p class="text-center text-gray-600 max-w-2xl mx-auto mb-16 mt-2">
                    Let’s be real: email inboxes are crowded and social media feeds are noisy. If you want your business
                    to grow, you need to be where people actually look. Bulk Email Campaigns isn't just about sending
                    texts; it’s about starting conversations in the most popular app on the planet.
                </p>
            </div>

            <div class="grid md:grid-cols-3 lg:gap-10 ma:gap-6 gap-4 text-center">

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition group hover:text-white hover:bg-black">
                    <i
                        class="fa-solid fa-bullhorn md:text-4xl sm:text-3xl text-2xl text-green-600 mb-3 group-hover:text-white"></i>
                    <h3 class="text-xl font-semibold">A Massive Playground</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">You’re tapping into a network of over 3 billion
                        active users. Your customers are already there—you just need to join them.</p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition group hover:text-white hover:bg-black">
                    <i
                        class="fa-solid fa-photo-film md:text-4xl sm:text-3xl text-2xl text-green-600 mb-3 group-hover:text-white"></i>
                    <h3 class="text-xl font-semibold">The "5-Minute" Rule</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">With a 98% open rate, most Emails are read
                        within five minutes. That’s five times more effective than email.</p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition group hover:text-white hover:bg-black">
                    <i
                        class="fa-solid fa-shield md:text-4xl sm:text-3xl text-2xl text-green-600 mb-3 group-hover:text-white"></i>
                    <h3 class="text-xl font-semibold">More Than Just Words</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white"> Don't just tell them about your product—show
                        them. Send high-def videos, browseable catalogs, or PDF brochures with clickable buttons that
                        lead straight to a sale.
                    </p>
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
                    Pro-Level Email Campaign Software Built for Your Success

                </h2>
                <p class="text-center text-gray-600 max-w-2xl mx-auto md:mb-16 mb-6 mt-2">
                    Managing a large-scale outreach doesn't have to be a headache. Our platform is designed to handle
                    the heavy lifting so you can focus on the "big picture" strategy.
                </p>
            </div>

            <div class="grid md:grid-cols-3 lg:gap-10 ma:gap-6 gap-4">
                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <h3 class="font-semibold text-xl">Limitless Reach</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Blast out updates to your entire contact list
                        at once without hitting a wall.

                    </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <h3 class="font-semibold text-xl">Command Center</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Use a sleek dashboard to track your campaigns
                        and see what's working in real-time.</p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <h3 class="font-semibold text-xl">High Deliverability</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">We use professional virtual routing to ensure
                        your Email actually land in the inbox, not in limbo.
                    </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <h3 class="font-semibold text-xl">Rich Content</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Send long-form text (up to 1500 characters)
                        plus images and files—all in one go.
                    </p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <h3 class="font-semibold text-xl">Smart Safety</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Our intelligent gateway is built to protect
                        your Email id, allowing you to scale up to 100,000 Emails safely.</p>
                </div>

                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 rounded-2xl shadow-xl business-feature-card relative group hover:text-white">
                    <h3 class="font-semibold text-xl">Full Transparency</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white">Check your logs to see exactly who received
                        your Emails and when.
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
                    Turn Conversations into Revenue with Email Marketing
                </h2>

                <p class="text-gray-600 mb-8">
                    At the end of the day, marketing is about ROI. Emails allows you to build a direct bridge to your
                    customers that feels personal, not "salesy."
                </p>

                <a href="{{ url('pricing-web') }}"
                    class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white font-semibold px-6 py-3 rounded-lg flex items-center gap-2 w-fit">
                    View Bulk Email Pricing
                    <span class="text-xl">→</span>
                </a>
            </div>

            <div class="grid sm:grid-cols-2 md:gap-6 gap-4">

                <!-- Boost Customer Engagement -->
                <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fa-solid fa-comments-dollar text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl"></i>
                    <h4 class="font-semibold text-lg mb-2">Talk, Don’t Just Broadcast</h4>
                    <p class="text-gray-600 text-sm">
                        Use two-way messaging to answer questions and close deals faster.
                    </p>
                </div>

                <!-- Save Time and Resources -->
                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl lg:mt-5 mt-0 hover:border-green-700">
                    <i class="fa-solid fa-robot text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl"></i>
                    <h4 class="font-semibold text-lg mb-2">Keep Your Budget Happy</h4>
                    <p class="text-gray-600 text-sm">
                        Stop overspending on ads that get scrolled past. Email is a cost-effective way to get better
                        results.
                    </p>
                </div>

                <!-- Enhance Customer Support -->
                <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fa-solid fa-headset text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl"></i>
                    <h4 class="font-semibold text-lg mb-2">Information at Their Fingertips</h4>
                    <p class="text-gray-600 text-sm">
                        Send price lists or seasonal catalogs instantly so your customers have everything they need to
                        say "yes."

                    </p>
                </div>

                <!-- Increase Conversions -->
                <div
                    class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl lg:mt-3 mt-0 hover:border-green-700">
                    <i class="fa-solid fa-cart-arrow-down text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl"></i>
                    <h4 class="font-semibold text-lg mb-2">Convert Faster </h4>
                    <p class="text-gray-600 text-sm">
                        When you reach someone directly on their phone with a clear call-to-action, "browsers" become
                        "buyers" in record time.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20  bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Heading -->
            <div class="text-center mb-14">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">How It
                    Works</span>
                <h2
                    class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight mb-4">
                    Launch Your Bulk Email Marketing Campaign in 5 Simple Steps

                </h2>
                <p class="text-gray-600 mb-8">
                    Getting your message out shouldn't feel like rocket science. We’ve streamlined the process so you
                    can go from "idea" to "inbox" in just a few minutes. Here is how it works:
                </p>
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
                            <h4 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Quick Sign-Up</h4>
                            <p class="text-gray-600">Create your account and get instant access to your new marketing
                                dashboard. It’s your new home base for everything Email.</p>
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
                                Craft Your Message
                            </h4>
                            <p class="text-gray-600">Write a message that sounds like you. Add a catchy image, a
                                helpful
                                video, or a PDF to make it pop and keep your audience engaged.
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
                                Upload Your Contacts
                            </h4>
                            <p class="text-gray-600"> No need to type numbers one by one. Simply drop in your existing
                                customer list from an Excel or CSV file, and you’re ready to go.</p>
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
                                Hit Send
                            </h4>
                            <p class="text-gray-600">With one click, our software takes over. It handles the heavy
                                lifting, delivering your broadcast to thousands of customers simultaneously.</p>
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
                                See What’s Working</h4>
                            <p class="text-gray-600">Don’t fly blind. Use your web panel to see exactly who received
                                your message and track your responses in real-time.</p>
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
                    Personalized Mass Bulk Email Campaigns for Every Sector

                </h2>
                <p class="text-center text-gray-600 max-w-2xl mx-auto mb-16 mt-2">
                    Reach customers instantly with rich, personalized Email notifications tailored for your
                    business—across multiple sectors and use cases.
                </p>
            </div>

            <!-- Grid : 3 x 2 -->
            <div class="grid md:grid-cols-3 gap-4">

                <!-- E-commerce & Retail -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-cart-shopping md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Retail & E-commerce</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Send flash sale alerts, new arrival photos, and order updates to your customers.
                    </p>
                </div>

                <!-- Healthcare -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-heart-pulse md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Healthcare</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Share health tips and informative brochures directly with your patients.

                    </p>
                </div>

                <!-- Education -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-graduation-cap md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Education</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Broadcast school news, fee reminders, and event invites to parents and students.

                    </p>
                </div>

                <!-- Banking & Finance -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-landmark md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Banking & Finance</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Deliver informational alerts and loan offer brochures via secure routing.

                    </p>
                </div>

                <!-- Events & Hospitality -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-house md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Real Estate</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Send site-visit invites and property PDF catalogs to potential leads instantly.
                    </p>
                </div>

                <!-- Event Management -->
                <div
                    class="bg-white shadow-md xl:p-8 lg:p-6 md:p-4 p-3 text-center rounded-lg border group hover:bg-black hover:text-white transition">
                    <i
                        class="fa-solid fa-layer-group md:text-4xl sm:text-3xl text-2xl text-green-600 mb-4 group-hover:text-white"></i>
                    <h3 class="font-semibold text-xl mb-2">Events & Hospitality</h3>
                    <p class="text-gray-600 group-hover:text-white">
                        Share event schedules, ticket images, and guest reminders.
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
            <h2 class="md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 text-center max-w-4xl mx-auto">
                India’s Most Reliable Best Bulk Email Messaging Service

            </h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-16 mt-2">
                Finding a reliable partner for your business shouldn't be a headache. We’ve built a platform that
                combines power with simplicity, helping Indian businesses connect with their customers where they
                actually hang out.
            </p>
            <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-8 text-center">

                <div
                    class="group bg-service-1 p-8 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">

                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-list-check text-2xl text-green-700"></i>
                        </div>
                    </div>

                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Everything You Need in One Place</h3>

                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>

                    <p class="text-gray-600">
                        From smart contact filters that keep your lists clean to full media support for your photos and
                        videos—we’ve got you covered.

                    </p>
                </div>

                <div
                    class="group bg-service-2 p-8 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-circle-check text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">A Community of Growth</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600">
                        You’re in good company. Join over 5,000 businesses who trust our software every day to reach
                        their goals.
                    </p>
                </div>

                <div
                    class="group bg-service-3 p-8 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-gear text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Pricing That Makes Sense</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600">
                        We believe in honest, competitive pricing. No hidden fees, no "gotchas"—just straightforward
                        plans that fit your budget.
                    </p>
                </div>

                <div
                    class="group bg-service-4 p-8 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-lock text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">We’ve Got Your Back, 24/7</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600">
                        Marketing doesn't stop, and neither do we. Our support team is always a message away whenever
                        you need a hand.
                    </p>
                </div>

                <div
                    class="group bg-service-5 p-8 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-life-ring text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Start Messaging in Minutes</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600">
                        You don't need to be a tech wizard. Our interface is so simple that you can send your first
                        campaign almost as soon as you sign up.
                    </p>
                </div>

                <div
                    class="group bg-service-6 p-8 rounded-xl shadow-lg border-b-4 border-b-white 
                        hover:border-b-green-700 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <div class="flex items-center justify-center w-full mb-6">
                        <div
                            class="flex items-center justify-center w-14 h-14 rounded-full bg-[#15803d0f] transition duration-300">
                            <i class="fa-solid fa-dollar-sign text-2xl text-green-700"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-xl text-gray-900 mb-2">Grows With You</h3>
                    <div class="w-10 h-0.5 bg-black mb-4 transition-all duration-300 group-hover:w-20 mx-auto"></div>
                    <p class="text-gray-600">
                        Whether you’re a local boutique or a national enterprise, our system scales to handle your
                        ambition.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- cta section --}}
    <section class="relative w-full lg:py-20 md:py-10 py-6 overflow-hidden comn-cta-section">
        <!-- Content -->
        <div class="relative z-10 max-w-4xl mx-auto text-center px-5">
            <h2 class="text-white md:md:text-4xl sm:text-3xl text-2xl font-semibold mb-4">
                Ready to Reach Millions with Bulk Email Marketing?
            </h2>

            <p class="text-white text-lg md:text-xl mb-8">
                Stop waiting. Use our fast and secure Bulk Email Sender Tool to grow your business revenue today.
            </p>

            <button id="ctaBtn" onclick="openModall()"
                class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] transition md:px-10 px-4 md:py-4 py-2 
           text-white font-semibold text-lg rounded shadow-lg">
                Request A Free Demo
            </button>
        </div>
    </section>


    <!-- ===================== FAQ ===================== -->
    <section class="lg:py-20 md:py-10 py-6">
        <div class="w-full md:max-w-6xl mx-auto px-6">
            <h2 class="md:text-4xl sm:text-3xl text-2xl font-bold text-center mb-12">Frequently Asked Questions (FAQs)
            </h2>
            <div class="grid grid-cols-12 lg:gap-10 ma:gap-6 gap-4">
                <div class="col-span-12 mb-10 md:mb-0">
                    <div class="space-y-4">
                        <!-- Accordion Item 1 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(1)"
                                class="w-full flex justify-between text-lg items-center py-5 text-slate-800">
                                <span class="text-left"> Is Bulk Email Marketing legal in India?</span>
                                <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-1"
                                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">
                                    Yes, it is a widely used marketing practice. Our Bulk Email Marketing Service
                                    provides a professional platform that allows you to send informational and
                                    promotional Emails to your opted-in customer base following standard business
                                    guidelines.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 2 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(2)"
                                class="w-full flex justify-between text-lg items-center py-5 text-slate-800">
                                <span class="text-left"> How can I send 100,000 Emails without getting
                                    blocked?
                                </span>
                                <span id="icon-2" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-2"
                                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">
                                    Using a professional Bulk Email Sender Tool is key. Our platform uses advanced
                                    routing and virtual numbers to manage high volumes safely, ensuring your primary
                                    business number remains protected while you reach a massive audience.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 3 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(3)"
                                class="w-full flex justify-between text-lg items-center py-5 text-slate-800">
                                <span class="text-left"> Do I need to save the Emails id in my sytem to send bulk
                                    Email? </span>
                                <span id="icon-3" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-3"
                                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">
                                    No. Our Bulk Email Broadcast Software allows you to upload thousands of Emails  via
                                    Excel or CSV. You can send Emails to both saved and unsaved contacts directly from
                                    our online web panel.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 4 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(4)"
                                class="w-full flex justify-between text-lg items-center py-5 text-slate-800">
                                <span class="text-left">What kind of media can I send in a bulk Email
                                    broadcast?</span>
                                <span id="icon-4" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-4"
                                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">You can send Email up to 20000
                                    characters along with media files like images, videos, and PDF documents (up to 2MB
                                    each). This makes it the best Bulk Email messaging service for sharing catalogs
                                    and brochures.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 5 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(5)"
                                class="w-full flex justify-between text-lg items-center py-5 text-slate-800">
                                <span class="text-left">How long does it take for Emails to be delivered?
                                </span>
                                <span id="icon-4" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-5"
                                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">Delivery usually happens within minutes. For
                                    very large volumes, our Bulk Email Notifications system ensures completion within
                                    1 to 4 hours, maintaining a steady flow to maximize delivery success.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 6 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(6)"
                                class="w-full flex justify-between text-lg items-center py-5 text-slate-800">
                                <span class="text-left">Can I see who received my Emails?
                                </span>
                                <span id="icon-4" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-6"
                                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">Yes. Our dashboard provides a real-time
                                    history
                                    and delivery logs. You can track which Email were successfully delivered to your
                                    audience through our EmailCampaign Management interface.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 7 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(7)"
                                class="w-full flex justify-between text-lg items-center py-5 text-slate-800">
                                <span class="text-left">Does your platform support regional Indian languages?

                                </span>
                                <span id="icon-4" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-7"
                                class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">Yes. Our Email Campaign Software supports
                                    Unicode, allowing you to send Email in Hindi, Kannada, Tamil, Telugu, and other
                                    regional languages to connect with your local audience more effectively.
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
