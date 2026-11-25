<x-master-page
    title="WhatsApp Business API in India | Textora"
    description="Connect with customers using Textora's WhatsApp Business API in India. Automate campaigns, AI chatbots, shared team inbox and customer notifications."
>

@push('head-scripts')

{{-- ===================== SERVICE + FAQ SCHEMA ===================== --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://textorasms.com/whatsapp-business-api#service",
      "name": "WhatsApp Business API Solution",
      "serviceType": "WhatsApp Business Messaging and Automation",
      "url": "https://textorasms.com/whatsapp-business-api",
      "description": "WhatsApp Business Platform solutions for business messaging, automated notifications, chatbots, shared team inbox and customer engagement.",
      "provider": {
        "@type": "Organization",
        "name": "Textora Technologies Pvt Ltd",
        "url": "https://textorasms.com/"
      },
      "areaServed": {
        "@type": "Country",
        "name": "India"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "WhatsApp Business API Features",
        "itemListElement": [
          {
            "@type": "OfferCatalog",
            "name": "WhatsApp Business Messaging"
          },
          {
            "@type": "OfferCatalog",
            "name": "WhatsApp Chatbot Automation"
          },
          {
            "@type": "OfferCatalog",
            "name": "Multi-Agent Shared Team Inbox"
          },
          {
            "@type": "OfferCatalog",
            "name": "WhatsApp Interactive Flows and Catalogs"
          },
          {
            "@type": "OfferCatalog",
            "name": "WhatsApp Messaging Analytics"
          }
        ]
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://textorasms.com/whatsapp-business-api#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the WhatsApp Business API and how does it benefit my business?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The WhatsApp Business Platform is designed to help businesses manage customer communication at scale. It supports approved message templates, automated notifications, chatbot integrations, shared team inboxes and business system integrations."
          }
        },
        {
          "@type": "Question",
          "name": "How do I get a WhatsApp Business API account for a small business?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A business can get started by setting up its Meta business account, preparing an eligible phone number and connecting through a suitable WhatsApp Business Platform provider. The setup process may include business verification and phone number registration."
          }
        },
        {
          "@type": "Question",
          "name": "What is the WhatsApp Business API pricing in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "WhatsApp Business Platform charges depend on Meta's applicable pricing structure, message category, recipient country and the provider's platform or service fees. Contact Textora or visit the pricing page for current plan details."
          }
        },
        {
          "@type": "Question",
          "name": "Can I send bulk marketing messages on WhatsApp?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Businesses can send approved WhatsApp marketing template messages to customers who have provided the required opt-in. Businesses must follow WhatsApp's messaging policies, template requirements and quality guidelines."
          }
        },
        {
          "@type": "Question",
          "name": "How do I get the Green Tick or verified badge on WhatsApp?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The WhatsApp verified badge is subject to Meta's eligibility requirements and review process. Having a WhatsApp Business Platform account does not guarantee approval. Businesses should check the latest eligibility criteria before applying."
          }
        },
        {
          "@type": "Question",
          "name": "Can I integrate WhatsApp API with my existing CRM?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. WhatsApp Business Platform can be integrated with compatible CRM and business applications using APIs, webhooks or supported integrations. Integration options depend on your existing software and technical requirements."
          }
        },
        {
          "@type": "Question",
          "name": "Are AI chatbots allowed on the WhatsApp Business Platform?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Businesses can use automated chatbots for permitted customer support, lead qualification, notifications and other supported business use cases. Chatbot implementations must follow WhatsApp's current policies and provide an appropriate path to human support where required."
          }
        }
      ]
    }
  ]
}
</script>

{{-- ===================== BREADCRUMB SCHEMA ===================== --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "@id": "https://textorasms.com/whatsapp-business-api#breadcrumb",
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
      "name": "WhatsApp Business API",
      "item": "https://textorasms.com/whatsapp-business-api"
    }
  ]
}
</script>

@endpush


{{-- ===================== DESKTOP HERO SECTION ===================== --}}
<section class="relative overflow-hidden whatsapp-api-banner md:block hidden">
    <div class="relative max-w-7xl mx-auto xl:px-6 text-white">

        <h1 class="xl:text-4xl lg:text-3xl text-2xl font-bold drop-shadow-lg max-w-2xl">
            WhatsApp Business API Platform for Business Growth
        </h1>

        <p class="mt-4 lg:text-base text-sm opacity-90 max-w-2xl">
            Connect with customers at scale using WhatsApp Business API.
            Automate customer engagement with approved message templates,
            AI chatbot integrations, bulk messaging and a shared team inbox.
            Manage customer conversations and business communication from one platform.
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


{{-- ===================== MOBILE HERO SECTION ===================== --}}
<div class="mob-banner block md:hidden relative bg-cover bg-center"
    style="background-image: url('{{ URL::asset('/images/banners/whatsapp-api-mob.jpg') }}');height: 100vh;">

    <div class="relative z-10 h-full flex flex-col items-center justify-start pt-[115px] px-4 text-center">

        <h1 class="text-white text-3xl md:text-4xl font-bold drop-shadow-lg">
            WhatsApp Business API Platform for Business Growth
        </h1>

        <p class="mt-2 text-md text-white opacity-90 line-clamp-2">
            Connect with customers using WhatsApp Business API.
            Automate messaging, customer support and business communication
            with chatbot integrations and a shared team inbox.
        </p>

        <a href="{{ url('pricing-web') }}"
            class="mt-4 inline-block border border-white text-white px-4 py-2 rounded-xl shadow-lg text-sm font-semibold hover:scale-105 transition">
            Get Started Today <i class="fa-solid fa-arrow-right"></i>
        </a>

        <button onclick="openModall()"
            class="mt-3 border border-white text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-white hover:text-black transition">
            Book a Free Demo
        </button>

    </div>
</div>


{{-- ===================== WHY CHOOSE TEXTORA ===================== --}}
<section class="md:py-16 py-6 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <h2 class="md:text-4xl sm:text-3xl text-2xl font-bold text-center mb-4">
            Why Choose Textora for WhatsApp Business API?
        </h2>

        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-6">
            Manage business communication with WhatsApp messaging,
            automation capabilities, integrations and customer engagement tools.
        </p>

        <div class="grid md:grid-cols-3 lg:gap-10 gap-4 text-center">

            <div class="group xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition hover:bg-black hover:text-white">

                <i class="fa-solid fa-circle-check md:text-4xl sm:text-3xl text-2xl text-green-600 mb-3"></i>

                <h3 class="text-xl font-semibold">
                    Approved Message Templates
                </h3>

                <p class="text-gray-600 mt-2 group-hover:text-white md:text-md text-sm">
                    Send WhatsApp notifications, order updates, appointment reminders
                    and marketing messages using applicable approved message templates
                    and customer opt-in.
                </p>

            </div>


            <div class="group xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition hover:bg-black hover:text-white">

                <i class="fa-solid fa-circle-check md:text-4xl sm:text-3xl text-2xl text-green-600 mb-3"></i>

                <h3 class="text-xl font-semibold">
                    Cloud API Integration
                </h3>

                <p class="text-gray-600 mt-2 group-hover:text-white md:text-md text-sm">
                    Connect WhatsApp messaging with your existing business software
                    through supported APIs, webhooks and integration workflows.
                </p>

            </div>


            <div class="group xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-xl rounded-2xl transition hover:bg-black hover:text-white">

                <i class="fa-solid fa-circle-check md:text-4xl sm:text-3xl text-2xl text-green-600 mb-3"></i>

                <h3 class="text-xl font-semibold">
                    WhatsApp Chatbot for Business
                </h3>

                <p class="text-gray-600 mt-2 group-hover:text-white md:text-md text-sm">
                    Automate FAQs, lead enquiries, appointment requests and
                    customer support workflows using WhatsApp chatbot integrations.
                </p>

            </div>

        </div>
    </div>
</section>


{{-- ===================== CAMPAIGN CONTROL ===================== --}}
<section class="md:py-10 py-6">
    <div class="max-w-7xl mx-auto px-6">

        <h2 class="md:text-4xl sm:text-3xl text-2xl font-bold text-center mb-4">
            WhatsApp Business API Features
        </h2>

        <p class="text-center text-gray-600 mb-16">
            Manage business messaging, customer conversations and automated communication
            through a unified WhatsApp platform.
        </p>

    </div>

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div>

            <h3 class="md:text-3xl text-2xl font-bold mb-4">
                Manage Your WhatsApp Marketing Campaigns
            </h3>

            <p class="text-gray-600 leading-relaxed">
                Plan and manage WhatsApp messaging campaigns through a centralized
                dashboard. Organize customer communication and monitor campaign activity.
            </p>

            <ul class="mt-6 space-y-3 text-gray-700">

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Automated Broadcasts:</strong>
                        Send approved marketing messages to opted-in customers
                        using WhatsApp message templates.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Message Status Tracking:</strong>
                        Monitor available delivery, read and failure statuses
                        for your WhatsApp campaigns.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Smart Segmentation:</strong>
                        Organize customer lists using relevant tags and audience segments
                        for targeted communication.
                    </span>
                </li>

            </ul>

        </div>

        <div>
            <img src="{{ URL::asset('images/wa-service-img.png') }}"
                alt="WhatsApp Business API campaign management dashboard"
                class="rounded-xl"
                loading="lazy">
        </div>

    </div>
</section>


{{-- ===================== CHATBOTS ===================== --}}
<section class="md:py-10 py-6 bg-[#f6f6f6]">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div class="lg:order-1 order-2">
            <img src="{{ URL::asset('images/wa-chatbot.png') }}"
                class="rounded-xl"
                alt="WhatsApp chatbot automation for business customer support"
                loading="lazy">
        </div>

        <div class="md:order-2 order-1">

            <h2 class="md:text-3xl text-2xl font-bold mb-4">
                WhatsApp AI Chatbots
            </h2>

            <p class="text-gray-600">
                Engage customers with WhatsApp chatbot integrations.
                Automate frequently asked questions, qualify leads and manage
                routine customer enquiries through structured conversation flows.
            </p>

            <ul class="mt-6 space-y-3 text-gray-700">

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Automated Support:</strong>
                        Provide responses to frequently asked questions
                        through configured chatbot workflows.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Lead Qualification:</strong>
                        Collect enquiry details and organize leads through
                        interactive chat flows.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Human Agent Handoff:</strong>
                        Route customer conversations to available support
                        representatives when required.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Order Tracking:</strong>
                        Help customers request order updates and delivery information.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Interactive Conversations:</strong>
                        Use supported quick replies, buttons and list menus
                        to simplify customer interactions.
                    </span>
                </li>

            </ul>

        </div>

    </div>
</section>


{{-- ===================== TEAM INBOX ===================== --}}
<section class="md:py-10 py-6">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div>

            <h2 class="md:text-3xl text-2xl font-bold mb-4">
                WhatsApp Multi-Agent Shared Team Inbox
            </h2>

            <p class="text-gray-600">
                Manage customer conversations from a centralized WhatsApp shared inbox.
                Multiple team members can access assigned conversations, coordinate
                responses and manage customer support from one business communication platform.
            </p>

            <ul class="mt-6 space-y-3 text-gray-700">

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Multi-Agent Access:</strong>
                        Allow multiple authorized team members to manage conversations
                        through a shared inbox.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Smart Chat Assignment:</strong>
                        Assign customer conversations to relevant agents or departments.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Internal Collaboration:</strong>
                        Coordinate with team members using available internal notes
                        and collaboration features.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Performance Monitoring:</strong>
                        Review available response and conversation activity metrics.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>CRM Data Integration:</strong>
                        Connect customer information with compatible CRM systems
                        and business applications.
                    </span>
                </li>

            </ul>

        </div>

        <div>
            <img src="{{ URL::asset('images/team-index.png') }}"
                class="rounded-xl h-[400px] mx-auto"
                alt="WhatsApp shared team inbox for multiple customer support agents"
                loading="lazy">
        </div>

    </div>
</section>


{{-- ===================== MESSAGE INSIGHTS ===================== --}}
<section class="md:py-10 py-6 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div class="lg:order-1 order-2">
            <img src="{{ URL::asset('images/wa-chat-img.png') }}"
                class="rounded-xl h-[400px] mx-auto"
                alt="WhatsApp Business messaging analytics and delivery reports"
                loading="lazy">
        </div>

        <div class="md:order-2 order-1">

            <h2 class="md:text-3xl text-2xl font-bold mb-4">
                WhatsApp Messaging Analytics and Reports
            </h2>

            <p class="text-gray-600">
                Review WhatsApp messaging activity and customer engagement through
                available reporting features. Use campaign and conversation insights
                to understand communication performance and improve business workflows.
            </p>

            <ul class="mt-6 space-y-3 text-gray-700">

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Delivery Tracking:</strong>
                        Monitor available message delivery, read and failure statuses.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Campaign Insights:</strong>
                        Review campaign activity and available engagement metrics.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Chatbot Monitoring:</strong>
                        Review chatbot conversations and configured automation workflows.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Agent Performance:</strong>
                        Monitor available team activity and response metrics.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Conversion Tracking:</strong>
                        Connect messaging workflows with supported business
                        and CRM tracking systems.
                    </span>
                </li>

            </ul>

        </div>

    </div>
</section>


{{-- ===================== INTERACTIVE BUTTONS ===================== --}}
<section class="md:py-10 py-6">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div>

            <h2 class="md:text-3xl text-2xl font-bold mb-4">
                WhatsApp Interactive Buttons and Messages
            </h2>

            <p class="text-gray-600">
                WhatsApp interactive messages help customers respond to businesses
                using supported buttons and structured options. They can simplify
                lead enquiries, customer support and other business communication flows.
            </p>

            <ul class="mt-6 space-y-3 text-gray-700">

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Quick Reply Buttons:</strong>
                        Provide predefined response options for supported message formats.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Call-to-Action Buttons:</strong>
                        Direct customers to relevant websites or supported actions.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Product and Offer Communication:</strong>
                        Share relevant product information and promotional content
                        through approved message formats.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>List Messages:</strong>
                        Present supported selectable options for structured customer journeys.
                    </span>
                </li>

            </ul>

        </div>

        <div>
            <img src="{{ URL::asset('images/interactive-buttons.png') }}"
                class="mx-auto rounded-xl"
                alt="WhatsApp interactive message buttons and customer actions"
                loading="lazy">
        </div>

    </div>
</section>


{{-- ===================== WHATSAPP FLOWS ===================== --}}
<section class="md:py-10 py-6 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div class="lg:order-1 order-2">
            <img src="{{ URL::asset('images/wa-flow.png') }}"
                class="mx-auto rounded-xl"
                alt="WhatsApp Flows for interactive forms and business processes"
                loading="lazy">
        </div>

        <div class="md:order-2 order-1">

            <h2 class="md:text-3xl text-2xl font-bold mb-4">
                Interactive WhatsApp Flows
            </h2>

            <p class="text-gray-600">
                WhatsApp Flows provide structured in-chat experiences that help
                customers complete supported tasks such as submitting information,
                requesting services and interacting with business forms.
            </p>

            <ul class="mt-6 space-y-3 text-gray-700">

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Guided Lead Capture:</strong>
                        Collect customer details through structured interactive forms.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Appointment Requests:</strong>
                        Create supported appointment enquiry and booking workflows.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Product Enquiries:</strong>
                        Guide customers through product and service selection.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Customer Feedback:</strong>
                        Collect structured feedback using supported forms.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Customer Information:</strong>
                        Allow customers to submit relevant details through interactive flows.
                    </span>
                </li>

            </ul>

        </div>

    </div>
</section>


{{-- ===================== WHATSAPP CATALOG ===================== --}}
<section class="md:py-10 py-6">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div>

            <h2 class="md:text-3xl text-2xl font-bold mb-4">
                WhatsApp Business Catalog
            </h2>

            <p class="text-gray-600">
                WhatsApp Catalog helps businesses showcase product information
                directly within WhatsApp. Customers can browse available products,
                view descriptions and share product enquiries through chat.
            </p>

            <ul class="mt-6 space-y-3 text-gray-700">

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Product Showcase:</strong>
                        Display product images, descriptions and pricing information.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Product Collections:</strong>
                        Organize products into relevant categories.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Store Integration:</strong>
                        Explore compatible integrations with supported e-commerce platforms.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Product Sharing:</strong>
                        Share relevant product information with customers through chat.
                    </span>
                </li>

                <li class="flex items-start gap-2">
                    <span class="text-[#0c963c] flex-shrink-0 mt-1">✔</span>
                    <span>
                        <strong>Shopping Enquiries:</strong>
                        Help customers ask questions about products and available options.
                    </span>
                </li>

            </ul>

        </div>

        <div>
            <img src="{{ URL::asset('images/wa-catalog.png') }}"
                class="mx-auto rounded-xl"
                alt="WhatsApp Business product catalog for online product discovery"
                loading="lazy">
        </div>

    </div>
</section>


{{-- ===================== BENEFITS ===================== --}}
<section class="md:py-10 py-6 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12">

        <div class="flex flex-col justify-center">

            <p class="text-sm text-[#4eb86a] font-semibold mb-2">
                Benefits
            </p>

            <h2 class="md:text-4xl sm:text-3xl text-2xl font-bold leading-snug mb-4">
                Engage Customers with WhatsApp Business API
            </h2>

            <p class="text-gray-600 mb-8">
                Bring customer communication, business notifications and
                automated messaging workflows together through WhatsApp.
            </p>

            <a href="{{ url('pricing-web') }}"
                class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] text-white font-semibold px-6 py-3 rounded-lg flex items-center gap-2 w-fit">
                View WhatsApp Pricing
                <span class="text-xl">→</span>
            </a>

        </div>


        <div class="grid sm:grid-cols-2 gap-6">

            <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">

                <i class="fas fa-bolt text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl mb-3"></i>

                <h3 class="font-semibold text-lg mb-2">
                    Customer Reach
                </h3>

                <p class="text-gray-600 text-sm">
                    Connect with customers through a widely used messaging platform.
                </p>

            </div>


            <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">

                <i class="fas fa-shield-halved text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl mb-3"></i>

                <h3 class="font-semibold text-lg mb-2">
                    Business Communication
                </h3>

                <p class="text-gray-600 text-sm">
                    Manage business messaging using supported WhatsApp platform features.
                </p>

            </div>


            <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">

                <i class="fas fa-chart-line text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl mb-3"></i>

                <h3 class="font-semibold text-lg mb-2">
                    Personalized Messaging
                </h3>

                <p class="text-gray-600 text-sm">
                    Organize customer communication using relevant templates and audience segments.
                </p>

            </div>


            <div class="xl:p-8 lg:p-6 md:p-4 p-3 bg-white shadow-sm border rounded-xl hover:border-green-700">

                <i class="fas fa-coins text-[#4eb86a] md:text-4xl sm:text-3xl text-2xl mb-3"></i>

                <h3 class="font-semibold text-lg mb-2">
                    Workflow Automation
                </h3>

                <p class="text-gray-600 text-sm">
                    Automate repetitive communication tasks and customer support workflows.
                </p>

            </div>

        </div>

    </div>
</section>


{{-- ===================== HOW IT WORKS ===================== --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">

            <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">
                How It Works
            </span>

            <h2 class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight">
                Get Started with WhatsApp Business API in 3 Steps
            </h2>

        </div>


        <div class="relative">

            <div class="absolute inset-y-0 left-1/2 w-0.5 bg-gray-200 hidden md:block transform -translate-x-1/2"></div>

            <ul class="space-y-4">

                <li class="relative md:flex items-start md:justify-start">

                    <div class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                        01
                    </div>

                    <div class="group bg-service-1 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">

                        <h3 class="lg:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                            Set Up Your Meta Business Account
                        </h3>

                        <p class="text-gray-600">
                            Prepare your business details and Meta business account
                            to begin the WhatsApp Business Platform setup process.
                        </p>

                    </div>

                </li>


                <li class="relative md:flex items-start md:justify-end">

                    <div class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                        02
                    </div>

                    <div class="group bg-service-2 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">

                        <h3 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                            Verify and Connect Your Number
                        </h3>

                        <p class="text-gray-600">
                            Complete the applicable registration and verification
                            steps to connect your business phone number.
                        </p>

                    </div>

                </li>


                <li class="relative md:flex items-start md:justify-start">

                    <div class="md:absolute md:left-1/2 md:top-0 md:transform md:-translate-x-1/2 flex items-center justify-center w-12 h-12 rounded-full bg-[#157b42] text-white text-xl font-bold shadow-xl z-10 mx-auto md:mx-0">
                        03
                    </div>

                    <div class="group bg-service-3 lg:p-6 p-3 rounded-xl shadow-lg text-center md:text-left border border-gray-100 mt-4 md:mt-0 md:w-[45%] transition duration-500 ease-in-out hover:shadow-lg hover:border-gray-300">

                        <h3 class="md:text-2xl text-xl font-bold text-gray-900 mb-2 group-hover:text-green-700">
                            Start Your WhatsApp Messaging
                        </h3>

                        <p class="text-gray-600">
                            Configure your message templates, integrations and
                            customer communication workflows to get started.
                        </p>

                    </div>

                </li>

            </ul>

        </div>

    </div>
</section>


{{-- ===================== CTA SECTION ===================== --}}
<section class="relative w-full lg:py-20 md:py-10 py-6 overflow-hidden comn-cta-section">

    <div class="absolute inset-0 opacity-20" aria-hidden="true"></div>

    <div class="relative z-10 max-w-4xl mx-auto text-center px-5">

        <h2 class="text-white md:text-4xl sm:text-3xl text-2xl font-semibold mb-4">
            Ready to Grow Your Business with WhatsApp Business API?
        </h2>

        <p class="text-white text-base md:text-lg lg:text-xl mb-8">
            Automate customer conversations, manage business notifications
            and connect with customers through a WhatsApp messaging platform.
        </p>

        <button id="ctaBtn"
            onclick="openModall()"
            class="bg-gradient-to-r from-[#1d8b41] to-[#4eb86a] transition md:px-10 px-4 md:py-4 py-2 text-white font-semibold text-lg rounded shadow-lg">
            Request a Free Demo
        </button>

    </div>

</section>


{{-- ===================== FAQ SECTION ===================== --}}
<section class="lg:py-20 md:py-10 py-6">

    <div class="w-full md:max-w-6xl mx-auto px-6">

        <h2 class="md:text-4xl sm:text-3xl text-2xl font-bold text-center md:mb-12 mb-6">
            Frequently Asked Questions About WhatsApp Business API
        </h2>


        <div class="grid grid-cols-12 lg:gap-10 gap-4">

            <div class="col-span-12 mb-10 md:mb-0">

                <div class="space-y-4">


                    {{-- FAQ 1 --}}
                    <div class="border-b px-5 bg-white rounded-xl border-slate-200">

                        <button type="button"
                            onclick="toggleAccordion(1)"
                            aria-expanded="false"
                            aria-controls="content-1"
                            class="w-full flex justify-between text-base md:text-lg items-center py-5 text-slate-800">

                            <h3 class="text-left font-normal">
                                What is the WhatsApp Business API and how does it benefit my business?
                            </h3>

                            <span id="icon-1" class="text-slate-800 transition-transform duration-300" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                    <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                                </svg>
                            </span>

                        </button>

                        <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out" hidden>

                            <div class="pb-5 text-sm text-slate-500">
                                The WhatsApp Business Platform is designed to help businesses
                                manage customer communication at scale. It supports approved
                                message templates, automated notifications, chatbot integrations,
                                shared team inboxes and business system integrations.
                            </div>

                        </div>

                    </div>


                    {{-- FAQ 2 --}}
                    <div class="border-b px-5 bg-white rounded-xl border-slate-200">

                        <button type="button"
                            onclick="toggleAccordion(2)"
                            aria-expanded="false"
                            aria-controls="content-2"
                            class="w-full flex justify-between text-base md:text-lg items-center py-5 text-slate-800">

                            <h3 class="text-left font-normal">
                                How do I get a WhatsApp Business API account for a small business?
                            </h3>

                            <span id="icon-2" class="text-slate-800 transition-transform duration-300" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                    <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                                </svg>
                            </span>

                        </button>

                        <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out" hidden>

                            <div class="pb-5 text-sm text-slate-500">
                                A business can get started by setting up its Meta business account,
                                preparing an eligible phone number and connecting through a suitable
                                WhatsApp Business Platform provider. The setup process may include
                                business verification and phone number registration.
                            </div>

                        </div>

                    </div>


                    {{-- FAQ 3 --}}
                    <div class="border-b px-5 bg-white rounded-xl border-slate-200">

                        <button type="button"
                            onclick="toggleAccordion(3)"
                            aria-expanded="false"
                            aria-controls="content-3"
                            class="w-full flex justify-between text-base md:text-lg items-center py-5 text-slate-800">

                            <h3 class="text-left font-normal">
                                What is the WhatsApp Business API pricing in India?
                            </h3>

                            <span id="icon-3" class="text-slate-800 transition-transform duration-300" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                    <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                                </svg>
                            </span>

                        </button>

                        <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out" hidden>

                            <div class="pb-5 text-sm text-slate-500">
                                WhatsApp Business Platform charges depend on Meta's applicable
                                pricing structure, message category, recipient country and the
                                provider's platform or service fees. Contact Textora or visit our
                                <a href="{{ url('pricing-web') }}" class="text-green-700 underline">
                                    WhatsApp pricing page
                                </a>
                                for current plan details.
                            </div>

                        </div>

                    </div>


                    {{-- FAQ 4 --}}
                    <div class="border-b px-5 bg-white rounded-xl border-slate-200">

                        <button type="button"
                            onclick="toggleAccordion(4)"
                            aria-expanded="false"
                            aria-controls="content-4"
                            class="w-full flex justify-between text-base md:text-lg items-center py-5 text-slate-800">

                            <h3 class="text-left font-normal">
                                Can I send bulk marketing messages on WhatsApp?
                            </h3>

                            <span id="icon-4" class="text-slate-800 transition-transform duration-300" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                    <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                                </svg>
                            </span>

                        </button>

                        <div id="content-4" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out" hidden>

                            <div class="pb-5 text-sm text-slate-500">
                                Businesses can send approved WhatsApp marketing template messages
                                to customers who have provided the required opt-in. Businesses must
                                follow WhatsApp's messaging policies, template requirements and
                                quality guidelines.
                            </div>

                        </div>

                    </div>


                    {{-- FAQ 5 --}}
                    <div class="border-b px-5 bg-white rounded-xl border-slate-200">

                        <button type="button"
                            onclick="toggleAccordion(5)"
                            aria-expanded="false"
                            aria-controls="content-5"
                            class="w-full flex justify-between text-base md:text-lg items-center py-5 text-slate-800">

                            <h3 class="text-left font-normal">
                                How do I get the Green Tick or verified badge on WhatsApp?
                            </h3>

                            <span id="icon-5" class="text-slate-800 transition-transform duration-300" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                    <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                                </svg>
                            </span>

                        </button>

                        <div id="content-5" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out" hidden>

                            <div class="pb-5 text-sm text-slate-500">
                                The WhatsApp verified badge is subject to Meta's eligibility
                                requirements and review process. Having a WhatsApp Business
                                Platform account does not guarantee approval. Businesses should
                                check the latest eligibility criteria before applying.
                            </div>

                        </div>

                    </div>


                    {{-- FAQ 6 --}}
                    <div class="border-b px-5 bg-white rounded-xl border-slate-200">

                        <button type="button"
                            onclick="toggleAccordion(6)"
                            aria-expanded="false"
                            aria-controls="content-6"
                            class="w-full flex justify-between text-base md:text-lg items-center py-5 text-slate-800">

                            <h3 class="text-left font-normal">
                                Can I integrate WhatsApp API with my existing CRM?
                            </h3>

                            <span id="icon-6" class="text-slate-800 transition-transform duration-300" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                    <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                                </svg>
                            </span>

                        </button>

                        <div id="content-6" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out" hidden>

                            <div class="pb-5 text-sm text-slate-500">
                                Yes. WhatsApp Business Platform can be integrated with compatible
                                CRM and business applications using APIs, webhooks or supported
                                integrations. Integration options depend on your existing software
                                and technical requirements.
                            </div>

                        </div>

                    </div>


                    {{-- FAQ 7 --}}
                    <div class="border-b px-5 bg-white rounded-xl border-slate-200">

                        <button type="button"
                            onclick="toggleAccordion(7)"
                            aria-expanded="false"
                            aria-controls="content-7"
                            class="w-full flex justify-between text-base md:text-lg items-center py-5 text-slate-800">

                            <h3 class="text-left font-normal">
                                Are AI chatbots allowed on the WhatsApp Business Platform?
                            </h3>

                            <span id="icon-7" class="text-slate-800 transition-transform duration-300" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                                    <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                                </svg>
                            </span>

                        </button>

                        <div id="content-7" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out" hidden>

                            <div class="pb-5 text-sm text-slate-500">
                                Businesses can use automated chatbots for permitted customer
                                support, lead qualification, notifications and other supported
                                business use cases. Chatbot implementations must follow WhatsApp's
                                current policies and provide an appropriate path to human support
                                where required.
                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>


{{-- ===================== FAQ ACCORDION SCRIPT ===================== --}}
<script>
    function toggleAccordion(index) {

        const content = document.getElementById(`content-${index}`);
        const icon = document.getElementById(`icon-${index}`);
        const button = document.querySelector(
            `[aria-controls="content-${index}"]`
        );

        if (!content || !icon || !button) {
            return;
        }

        const isOpen = button.getAttribute('aria-expanded') === 'true';

        const minusSVG = `
            <svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 16 16"
                fill="currentColor"
                class="w-4 h-4">
                <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z"/>
            </svg>
        `;

        const plusSVG = `
            <svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 16 16"
                fill="currentColor"
                class="w-4 h-4">
                <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
            </svg>
        `;

        if (isOpen) {

            content.style.maxHeight = '0px';
            button.setAttribute('aria-expanded', 'false');
            icon.innerHTML = plusSVG;

            setTimeout(function () {
                if (button.getAttribute('aria-expanded') === 'false') {
                    content.hidden = true;
                }
            }, 300);

        } else {

            content.hidden = false;
            content.style.maxHeight = content.scrollHeight + 'px';

            button.setAttribute('aria-expanded', 'true');
            icon.innerHTML = minusSVG;

        }

    }
</script>


</x-master-page>
