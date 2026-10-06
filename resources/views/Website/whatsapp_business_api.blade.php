<x-master-page title="Official WhatsApp Business API Solution | Textora"
    description="Scale growth with Textora’s WhatsApp Business API Solution. Automate marketing with AI chatbots, bulk messaging, and multi-agent inbox. Get your Green Tick today!">
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
      "name": "WhatsApp Business API Solution",
      "serviceType": "WhatsApp Marketing & Automation",
      "provider": {
        "@type": "Organization",
        "name": "Textora WhatsApp Business API",
        "url": "https://textorasms.com/whatsapp-business-api"
      },
      "description": "Official WhatsApp Business API platform for enterprise growth. Features include AI chatbots, bulk messaging, multi-agent shared inbox, and real-time analytics with a 98% open rate.",
      "offers": {
        "@type": "Offer",
        "availability": "https://schema.org/InStock",
        "areaServed": "IN"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "WhatsApp API Features",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "WhatsApp Chatbot for Business"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Multi-Agent Shared Team Inbox"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Interactive WhatsApp Flows & Catalogs"
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
          "name": "What is the WhatsApp Business API and how does it benefit my business?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The WhatsApp Business API is an enterprise-level interface designed for scalable, automated customer communication. It supports unlimited agents, AI chatbots, and bulk messaging with 98% open rates."
          }
        },
        {
          "@type": "Question",
          "name": "How do I get a WhatsApp Business API account for a small business?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "To get the API, a small business must partner with an official Business Solution Provider (BSP) like Textora. The process involves verifying your Meta Business Manager and linking a dedicated phone number."
          }
        },
        {
          "@type": "Question",
          "name": "Can I send bulk marketing messages on WhatsApp without getting banned?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, but only through the Official WhatsApp Business API. Using the API allows you to send bulk messages to opted-in users via approved templates, which complies with Meta's anti-spam policies."
          }
        }
      ]
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Home",
    "item": "https://textorasms.com/"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "WhatsApp Business API",
    "item": "https://textorasms.com/whatsapp-business-api"
  }]
}
</script>


       @endpush


    <!-- ===================== HERO SECTION ===================== -->
    <section class="relative overflow-hidden whatsapp-api-banner md:block hidden">
        <div class="relative max-w-7xl mx-auto xl:px-6 text-white">
            <h1 class="xl:text-4xl lg:text-3xl text-2xl font-bold drop-shadow-lg max-w-2xl">
                Official WhatsApp Business API Platform for Enterprise Growth
            </h1>

            <p class="mt-4 lg:text-base text-sm  opacity-90 max-w-2xl">
                The WhatsApp Business API is a powerful communication interface that allows businesses to automate
                customer engagement at scale. Unlike the standard app, the API supports unlimited agents, AI chatbots,
                and bulk messaging with a 98% open rate, making it the premier choice for WhatsApp marketing automation.
            </p>

            <a href="{{ url('pricing-web') }}"
                class="mt-8 inline-block border border-white text-white xl:px-8 px-4 py-3 rounded-xl shadow-lg xl:text-lg text-sm lg:text-base font-semibold hover:scale-105 transition">
                Get Started Today <i class="fa-solid fa-arrow-right"></i>
            </a>
            <button onclick="openModall()"
                class="border border-white text-white md:w-auto w-fit px-4 xl:px-8 py-3 mx-auto xl:mt-0 mt-3 md:ms-5 rounded-lg xl:text-lg lg:text-base text-sm font-semibold hover:bg-white hover:text-black transition duration-300 shadow-lg transform hover:scale-105">
                Book a Free Demo
            </button>
        </div>
    </section>

    {{-- mob banner section --}}
    <div class="mob-banner block md:hidden relative bg-cover bg-center"
        style="background-image: url('{{ URL::asset('/images/banners/whatsapp-api-mob.jpg') }}');height: 100vh;">
        <div class="relative z-10 h-full flex flex-col items-center justify-start pt-[115px] px-4 text-center">
            <h6 class="text-white text-3xl md:text-4xl font-bold drop-shadow-lg">
                Official WhatsApp Business API Platform for Enterprise Growth
            </h6>
            <p class="mt-2 text-md text-white opacity-90 line-clamp-2">
                The WhatsApp Business API is a powerful communication interface that allows businesses to automate
                customer engagement at scale. Unlike the standard app, the API supports unlimited agents, AI chatbots,
                and bulk messaging with a 98% open rate, making it the premier choice for WhatsApp marketing automation.
            </p>
            <a href="{{ url('pricing-web') }}"
                class="mt-4 inline-block border border-white text-white px-4 py-2 rounded-xl shadow-lg text-sm font-semibold hover:scale-105 transition">
                Get Started Today <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>

    <!-- ===================== WHY WABA ===================== -->
    <section class="md:py-16 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="md:text-4xl sm:text-3xl text-2xl font-bold text-center mb-4">Why Choose Us as for WhatsApp
                Marketing Automation?
            </h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mg:mb-16 mb-6">
                Experience enterprise-grade messaging with automation, verified delivery, and powerful integrations.
            </p>

            <div class="grid md:grid-cols-3 lg:gap-10 ma:gap-6 gap-4 text-center">

                <div
                    class="group xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition hover:bg-black hover:text-white">
                    <i class="fa-solid fa-circle-check md:text-4xl sm:text-3xl text-2xl text-green-600 mb-3"></i>

                    <h3 class="text-xl font-semibold"> Message Templates</h3>

                    <p class="text-gray-600 mt-2 group-hover:text-white md:text-md text-sm">
                        Send high-volume WhatsApp OTPs, shipping alerts, and appointment reminders using pre-approved
                        WhatsApp message templates that bypass spam filters and ensure 100% delivery.
                    </p>
                </div>


                <div
                    class="group xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition hover:bg-black hover:text-white">
                    <i class="fa-solid fa-circle-check md:text-4xl sm:text-3xl text-2xl text-green-600 mb-3"></i>
                    <h3 class="text-xl font-semibold">Cloud API Integration</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white md:text-md text-sm">Seamlessly integrate
                        messaging into your existing software. Our WhatsApp API integration offers low latency, high
                        throughput, and secure REST APIs for global scalability.</p>
                </div>

                <div
                    class="group xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition hover:bg-black hover:text-white">
                    <i class="fa-solid fa-circle-check md:text-4xl sm:text-3xl text-2xl text-green-600 mb-3"></i>
                    <h3 class="text-xl font-semibold">WhatsApp Chatbot for Business</h3>
                    <p class="text-gray-600 mt-2 group-hover:text-white md:text-md text-sm">Reduce support costs by 40%
                        with AI-powered chatbots. Automate lead qualification, FAQs, and booking flows without writing a
                        single line of code.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================ Campaign Control ============================ -->
    <section class="md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="md:text-4xl sm:text-3xl text-2xl font-bold text-center mb-4">Key Service Modules
            </h2>
            <p class="text-center text-gray-600 mb-16">
                Empower your business with fast, scalable, and reliable WhatsApp communication.
            </p>
        </div>

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div>
                <h2 class="md:text-3xl text-2xl font-bold mb-4">Total Control Over Your WhatsApp Marketing Campaigns
                </h2>

                <p class="text-gray-600 leading-relaxed">
                    Don't just send messages—build relationships. Our dashboard gives you a bird's-eye view of your
                    WhatsApp bulk messaging service performance.
                </p>

                <ul class="mt-6 space-y-3 text-gray-700">
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Automated Broadcasts:</strong> Schedule marketing messages to reach thousands of
                            opted-in customers instantly.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Real-time Analytics:</strong> Track delivered, read, and replied-to statuses to
                            measure ROI.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Smart Segmentation: </strong> Tag and filter your audience for highly personalized
                            automated WhatsApp messaging.
                        </span>
                    </li>
                </ul>
            </div>
            <div>
                <img src="{{ URL::asset('images/wa-service-img.png') }}" alt="Broadcast Campaigns" class="rounded-xl">
            </div>

        </div>
    </section>


    <!-- ============================ Chatbots ============================ -->
    <section class="md:py-10 py-6 bg-[#f6f6f6]">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div class="lg:order-1 order-2">
                <img src="{{ URL::asset('images/wa-chatbot.png') }}" class="rounded-xl"
                    alt="WhatsApp Chat Support Software">
            </div>

            <div class="md:order-2 order-1">
                <h2 class="md:text-3xl text-2xl font-bold mb-4">AI Chatbots</h2>
                <p class="text-gray-600"> Engage customers 24/7 with an Official WhatsApp Business API chatbot. Our
                    no-code bot builder allows you to automate FAQ responses, qualify leads, and process orders
                    instantly, ensuring your business never misses a message.
                </p>
                <ul class="mt-6 space-y-3 text-gray-700">
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong> 24/7 Support:</strong> Provide instant answers to FAQs even when your team is
                            offline.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Lead Qualification:</strong> Automatically capture and segment leads through
                            interactive chat flows.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Smart Handoff:</strong> Seamlessly transfer complex queries to live agents in your
                            shared inbox.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Order Tracking:</strong> Allow customers to check delivery status and WhatsApp OTPs
                            in real-time.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Interactive UI:</strong> Use quick-reply buttons and list menus to reduce user
                            effort.
                        </span>
                    </li>
                </ul>

            </div>

        </div>
    </section>


    <!-- ============================ Team Inbox ============================ -->
    <section class="md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div>
                <h2 class="md:text-3xl text-2xl font-bold mb-4">Collaborative Shared Team Inbox</h2>

                <p class="text-gray-600">
                    One Official Number, Unlimited Agents.A WhatsApp shared inbox is a centralized dashboard that allows
                    multiple team members to manage customer conversations from a single official WhatsApp number. It
                    eliminates message overlaps by allowing agents to view, assign, and resolve chats in real-time,
                    ensuring zero missed queries and faster response times.
                </p>

                <ul class="mt-6 space-y-3 text-gray-700">
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Multi-Agent Access:</strong> Connect from 5 to 100+ agents using a single account on
                            any device.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Smart Chat Assignment:</strong> Automatically route queries to the right department
                            or agent based on expertise.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Internal Collaboration:</strong> Use private notes and @mentions to collaborate
                            behind the scenes without the customer seeing.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Performance Analytics:</strong> Track response times and resolution rates to
                            optimize your team's efficiency.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>CRM Data Sync:</strong> View full customer history alongside live chats for
                            personalized, context-rich support.
                        </span>
                    </li>
                </ul>
            </div>

            <div>
                <img src="{{ URL::asset('images/team-index.png') }}" class="rounded-xl h-[400px] mx-auto"
                    alt="WhatsApp Business API with multi-agent shared inbox">
            </div>

        </div>
    </section>


    <!-- ============================ Message Insights ============================ -->
    <section class="md:py-10 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div class="lg:order-1 order-2">
                <img src="{{ URL::asset('images/wa-chat-img.png') }}" class="rounded-xl h-[400px] mx-auto"
                    alt="Official WhatsApp API for Business analytics with WhatsApp CRM Integration for Business Messaging and WhatsApp Automation using WhatsApp Business API Solution">
            </div>

            <div class="md:order-2 order-1">
                <h2 class="md:text-3xl text-2xl font-bold mb-4">Advanced Messaging Analytics</h2>

                <p class="text-gray-600">
                    WhatsApp Business API insights provide real-time data on message delivery, open rates, and customer
                    engagement. By tracking metrics like average response time and conversion rates, businesses can
                    optimize their messaging strategy, improve agent performance, and drive higher ROI through
                    data-driven decisions.
                </p>

                <ul class="mt-6 space-y-3 text-gray-700">
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Real-Time Delivery Tracking:</strong> Monitor exact delivery, read, and failure
                            statuses with message read receipts for every campaign.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Engagement Analytics:</strong> View click-through rates (CTR) on interactive buttons
                            to identify which offers resonate with your audience.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Chatbot Efficiency:</strong> Track self-resolution versus escalation rates to refine
                            your automated WhatsApp messaging flows.

                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Agent Performance:</strong> Measure first response time (FRT) and resolution speed
                            to ensure your support team meets 2026 customer expectations.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong> Conversion Tracking:</strong>Link WhatsApp interactions to business outcomes like
                            purchases or lead sign-ups.
                        </span>
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <!-- ============================ Interactive Buttons ============================ -->
    <section class="md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div>
                <h2 class="md:text-3xl text-2xl font-bold mb-4">One-Tap Interactive Buttons</h2>

                <p class="text-gray-600">
                    WhatsApp interactive buttons replace manual typing with structured, one-click actions that increase
                    response rates by over 60%. Whether for lead qualification, payment links, or scheduling, these
                    buttons streamline the customer journey, making it faster and more intuitive for users to engage
                    with your brand.
                </p>

                <ul class="mt-6 space-y-3 text-gray-700">
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Quick Reply Buttons:</strong> Offer up to three predefined responses (e.g., "Yes,"
                            "No," "Not Now") for instant decision-making and higher engagement.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Call-to-Action (CTA) Buttons:</strong> Direct users to a specific URL or trigger a
                            phone call with a single tap, perfect for "Buy Now" or "Contact Support".
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Copy Offer Code:</strong> Boost marketing ROI by allowing customers to copy coupon
                            codes directly from the message with one click.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>List Menus:</strong> Present up to 10 scrollable options in a clean menu format,
                            ideal for FAQ categories, store locations, or product menus.
                        </span>
                    </li>
                </ul>
            </div>

            <div>
                <img src="{{ URL::asset('images/interactive-buttons.png') }}" class="mx-auto rounded-xl"
                    alt="Click-to-WhatsApp Ads">
            </div>

        </div>
    </section>


    <!-- ============================ Flow ============================ -->
    <section class="md:py-10 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div class="lg:order-1 order-2">
                <img src="{{ URL::asset('images/wa-flow.png') }}" class="mx-auto  rounded-xl"
                    alt="WhatsApp Enterprise Solution with API Integration using WhatsApp Business API Solution and WhatsApp Gateway for Developers">
            </div>

            <div class="md:order-2 order-1">
                <h2 class="md:text-3xl text-2xl font-bold mb-4">Interactive WhatsApp Flows</h2>

                <p class="text-gray-600">
                    WhatsApp Flows are structured, multi-step journeys that let users complete tasks like booking,
                    shopping, or form-filling without ever leaving the chat. By replacing external links with native
                    in-app experiences, Flows reduce drop-offs and boost conversion rates by up to 158%.
                </p>

                <ul class="mt-6 space-y-3 text-gray-700">
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Guided Lead Capture:</strong> Replace boring web forms with interactive,
                            step-by-step questions to qualify leads instantly.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Instant Appointment Booking:</strong> Let users check availability and book time
                            slots through a native calendar interface.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>In-Chat Product Discovery:</strong> Guide shoppers through size guides and product
                            selections for a frictionless checkout.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Post-Purchase Surveys:</strong> Collect structured feedback with a 90% higher
                            completion rate than email-based surveys.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Account Management:</strong> Allow users to update delivery addresses or view order
                            status with a single tap.
                        </span>
                    </li>
                </ul>
            </div>

        </div>
    </section>


    <!-- ============================ Catalog ============================ -->
    <section class="md:py-10 py-6">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div>
                <h2 class="md:text-3xl text-2xl font-bold mb-4">WhatsApp Catalogs</h2>

                <p class="text-gray-600">
                    A WhatsApp Catalog is a built-in mobile storefront that lets customers browse products, view prices,
                    and see descriptions directly in the chat. It eliminates the need for external websites, allowing
                    users to "Add to Cart" and complete purchases within the app for a frictionless e-commerce
                    experience.
                </p>

                <ul class="mt-6 space-y-3 text-gray-700">
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Visual Showcasing:</strong> Upload up to 500 products with high-resolution images
                            and clear, keyword-rich titles.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Dynamic Collections:</strong> Group your inventory into categories like "New
                            Arrivals" or "Bestsellers" to help customers find what they need in seconds.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Real-Time Syncing:</strong> Integrate with your existing Shopify or WooCommerce
                            store to automatically update stock levels and pricing.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>Direct Sharing:</strong> Send specific product cards or your entire catalog link to
                            customers with a single tap during live chats.
                        </span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                        <span>
                            <strong>In-Chat Shopping Cart:</strong> Allow customers to select multiple items and send a
                            consolidated order list directly to your team.
                        </span>
                    </li>
                </ul>
            </div>

            <div>
                <img src="{{ URL::asset('images/wa-catalog.png') }}" class="mx-auto  rounded-xl"
                    alt="WhatsApp Business API Solution for Business Messaging">
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
                    Engage Smarter, Sell Faster with WhatsApp Business API

                </h2>

                <p class="text-gray-600 mb-8">
                    Our messaging infrastructure is built to support enterprises with high-volume WhatsApp automation
                    and engagement capabilities.
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
                    <h4 class="font-semibold text-lg mb-2">Wider Reach</h4>
                    <p class="text-gray-600 text-sm">Connect using WhatsApp with over 2 billion active users.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fas fa-shield-halved text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl mb-3"></i>
                    <h4 class="font-semibold text-lg mb-2">Higher Response Rates</h4>
                    <p class="text-gray-600 text-sm">Get more opens and replies from a daily-used channel compared to
                        traditional email.</p>
                </div>

                <!-- Card 3 -->
                <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fas fa-chart-line text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl mb-3"></i>
                    <h4 class="font-semibold text-lg mb-2">Personalized Communication</h4>
                    <p class="text-gray-600 text-sm">Send tailored messages for better customer experiences and higher
                        conversion.</p>
                </div>

                <!-- Card 4 -->
                <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">
                    <i class="fas fa-coins text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl mb-3"></i>
                    <h4 class="font-semibold text-lg mb-2">Cost Effective</h4>
                    <p class="text-gray-600 text-sm">Significantly cut support and marketing costs through automated
                        WhatsApp messaging.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- How It Works Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Heading -->
            <div class="text-center mb-14">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">How It
                    Works</span>
                <h2 class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                    Your WhatsApp API Provider Setup Starts With 3 Easy Steps
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
                            <h4 class="lg:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                                Create Meta Business Account</h4>
                            <p class="text-gray-600">Sign up or log in to Meta Business Suite to begin your official
                                verification.</p>
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
                                Verify & Link Your Number</h4>
                            <p class="text-gray-600">Securely connect your business number through Textora’s API
                                gateway.</p>
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
                                Start WhatsApp Campaigns</h4>
                            <p class="text-gray-600">Log in to your dashboard and launch your first WhatsApp marketing
                                automation campaign instantly.</p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>


    {{-- cta section --}}
    <section class="relative w-full lg:py-20 md:py-10 py-6 overflow-hidden comn-cta-section">

        <!-- Background overlay icons (optional) -->
        <div class="absolute inset-0 opacity-20">
            <img src="your-background-image.png" alt="How to get WhatsApp Business API for small business"
                class="w-full h-full object-cover">
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-4xl mx-auto text-center px-5">
            <h2 class="text-white md:text-4xl sm:text-3xl text-2xl font-semibold mb-4">
                Ready to Transform Your Business with WhatsApp Business API?
            </h2>

            <p class="text-white text-base md:text-lg lg:text-xl mb-8">
                Automate conversations, send real-time notifications, and engage customers at scale with a secure and
                powerful WhatsApp API platform.
            </p>

            <button id="ctaBtn" onclick="openModall()" class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] transition md:px-10 px-4 md:py-4 py-2 
               text-white font-semibold text-lg rounded shadow-lg">
                Request A Free Demo
            </button>
        </div>
    </section>

    <!-- ===================== FAQ ===================== -->
    <section class="lg:py-20 md:py-10 py-6">
        <div class="w-full md:max-w-6xl mx-auto px-6">
            <h2 class="md:text-4xl sm:text-3xl text-2xl font-bold text-center md:mb-12 mb-6">Do you have any Questions
            </h2>
            <div class="grid grid-cols-12 lg:gap-10 ma:gap-6 gap-4">
                <div class="col-span-12 mb-10 md:mb-0">
                    <div class="space-y-4">

                        <!-- Accordion Item 1 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(1)"
                                class="w-full flex justify-between text-base md:text-lg items-center py-5 text-slate-800">
                                <span class="text-left">What is the WhatsApp Business API and how does it benefit my
                                    business? </span>
                                <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">The WhatsApp Business API is an
                                    enterprise-level interface designed for scalable, automated customer communication.
                                    Unlike the standard app, it supports unlimited agents, AI chatbots, and bulk
                                    messaging. It helps businesses increase engagement with 98% open rates, automate
                                    24/7 support, and integrate messaging directly into CRM systems for a unified
                                    customer experience.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 2 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(2)"
                                class="w-full flex justify-between text-base md:text-lg items-center py-5 text-slate-800">
                                <span class="text-left">How do I get a WhatsApp Business API account for a small
                                    business?</span>
                                <span id="icon-2" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">
                                    To get the API, a small business must partner with an official Business Solution
                                    Provider (BSP) like Textora. The process involves verifying your Meta Business
                                    Manager, linking a dedicated phone number, and choosing a messaging platform. Unlike
                                    the free app, the API requires approval from Meta but offers professional features
                                    like the Green Tick and advanced automation.

                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 3 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(3)"
                                class="w-full flex justify-between text-base md:text-lg items-center py-5 text-slate-800">
                                <span class="text-left"> What is the WhatsApp Business API pricing in India for 2026?
                                </span>
                                <span id="icon-3" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">
                                    As of January 2026, Meta uses a per-message pricing model for template messages,
                                    categorized into Marketing, Utility, and Authentication. Service conversations
                                    (customer-initiated) within a 24-hour window remain free. In India, local billing in
                                    INR is available, and businesses can benefit from volume-based discounts for
                                    high-volume utility and authentication messaging.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 4 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(4)"
                                class="w-full flex justify-between text-base md:text-lg items-center py-5 text-slate-800">
                                <span class="text-left"> Can I send bulk marketing messages on WhatsApp without getting
                                    banned? </span>
                                <span id="icon-3" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-4" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">
                                    Yes, but only through the Official WhatsApp Business API. Using the API allows you
                                    to send bulk messages to opted-in users via approved templates. This method complies
                                    with Meta’s anti-spam policies. Unlike unofficial "broadcast" tools, the API
                                    protects your number from being banned while providing detailed delivery and read
                                    analytics.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 5 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(5)"
                                class="w-full flex justify-between text-base md:text-lg items-center py-5 text-slate-800">
                                <span class="text-left">How do I get the Green Tick (Verified Badge) on WhatsApp?</span>
                                <span id="icon-3" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-5" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">To get the Green Tick, you must use the
                                    WhatsApp Business API and have a verified Meta Business Manager. Your brand must be
                                    "notable," meaning it appears in organic news articles or has significant public
                                    interest. Once these criteria are met, you can apply through your BSP dashboard for
                                    Meta to review and grant the verified status.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 6 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(6)"
                                class="w-full flex justify-between text-base md:text-lg items-center py-5 text-slate-800">
                                <span class="text-left"> Is it possible to integrate WhatsApp API with my existing CRM?
                                </span>
                                <span id="icon-3" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-6" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">Absolutely. The primary advantage of the
                                    WhatsApp Cloud API is its ability to integrate with CRMs like Zoho, HubSpot, and
                                    Salesforce via Webhooks and REST APIs. This allows for automated order updates,
                                    instant WhatsApp OTP delivery, and synchronized customer data across your sales and
                                    support departments.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 7 -->
                        <div class="border-b px-5 bg-white rounded-xl border-slate-200">
                            <button onclick="toggleAccordion(7)"
                                class="w-full flex justify-between text-base md:text-lg items-center py-5 text-slate-800">
                                <span class="text-left">Are AI chatbots allowed on the WhatsApp Business Platform in
                                    2026?</span>
                                <span id="icon-3" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-7" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">Yes, Meta encourages the use of AI chatbots for
                                    specific business functions such as customer support, lead qualification, and
                                    booking appointments. However, general-purpose conversational AI is restricted. To
                                    stay compliant, your chatbot must focus on resolving customer queries or
                                    facilitating transactions while providing a clear path to a human agent.
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