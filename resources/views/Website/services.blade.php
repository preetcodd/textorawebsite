<x-master-page
    title="Messaging Services | Bulk SMS, WhatsApp API & RCS | Textora"
    description="Explore Textora's business messaging services including WhatsApp Business API, Bulk WhatsApp, Bulk SMS, Transactional SMS, Promotional SMS, RCS Messaging and Voice API solutions."
>

@push('head-scripts')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "CollectionPage",
            "@id": "https://textorasms.com/messaging-services#webpage",
            "url": "https://textorasms.com/messaging-services",
            "name": "Messaging & API Services",
            "description": "Explore business messaging solutions from Textora, including WhatsApp Business API, Bulk SMS, RCS Messaging and Voice API services.",
            "isPartOf": {
                "@id": "https://textorasms.com/#website"
            },
            "about": {
                "@type": "Organization",
                "name": "Textora Technologies Pvt Ltd",
                "url": "https://textorasms.com/"
            },
            "mainEntity": {
                "@id": "https://textorasms.com/messaging-services#services"
            }
        },
        {
            "@type": "ItemList",
            "@id": "https://textorasms.com/messaging-services#services",
            "name": "Textora Business Messaging Services",
            "itemListOrder": "https://schema.org/ItemListUnordered",
            "numberOfItems": 4,
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "item": {
                        "@type": "Service",
                        "name": "WhatsApp Business API",
                        "url": "https://textorasms.com/whatsapp-business-api",
                        "provider": {
                            "@type": "Organization",
                            "name": "Textora Technologies Pvt Ltd"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "item": {
                        "@type": "Service",
                        "name": "Bulk SMS Services",
                        "url": "https://textorasms.com/bulk-sms",
                        "provider": {
                            "@type": "Organization",
                            "name": "Textora Technologies Pvt Ltd"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "item": {
                        "@type": "Service",
                        "name": "RCS Business Messaging",
                        "url": "https://textorasms.com/rcs-messaging",
                        "provider": {
                            "@type": "Organization",
                            "name": "Textora Technologies Pvt Ltd"
                        }
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 4,
                    "item": {
                        "@type": "Service",
                        "name": "Voice Messaging Services",
                        "url": "https://textorasms.com/voice-sms",
                        "provider": {
                            "@type": "Organization",
                            "name": "Textora Technologies Pvt Ltd"
                        }
                    }
                }
            ]
        },
        {
            "@type": "BreadcrumbList",
            "@id": "https://textorasms.com/messaging-services#breadcrumb",
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
                    "name": "Messaging Services",
                    "item": "https://textorasms.com/messaging-services"
                }
            ]
        }
    ]
}
</script>
@endpush

<main class="pt-20 bg-white font-roboto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- PAGE INTRODUCTION -->
        <header class="mb-16">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 text-center">
                Business Messaging & API Services
            </h1>

            <p class="text-xl text-gray-600 text-center mb-4 max-w-3xl mx-auto">
                Explore business communication solutions from Textora, including WhatsApp Business API, Bulk SMS,
                RCS Messaging and Voice API services.
            </p>

            <p class="text-base text-gray-500 text-center max-w-3xl mx-auto">
                Connect with customers through reliable messaging channels, interactive communication tools
                and scalable business messaging APIs.
            </p>
        </header>

        <!-- WHATSAPP SERVICES -->
        <section class="mb-16" aria-labelledby="whatsapp-services">
            <h2 id="whatsapp-services" class="text-3xl font-bold text-[#049a3d] mb-6 flex items-center">
                <span class="mr-2" aria-hidden="true">🟢</span>
                WhatsApp Business Messaging Services
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <article class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="font-semibold text-xl text-gray-900 mb-2">
                        WhatsApp Business API
                    </h3>

                    <p class="text-sm text-gray-600 mb-3">
                        Connect your business with customers using the official WhatsApp Business Platform.
                    </p>

                    <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                        <li>Official WhatsApp API integration</li>
                        <li>WhatsApp Cloud API support</li>
                        <li>Interactive message templates</li>
                        <li>Business messaging automation</li>
                    </ul>

                    <a href="{{ url('/whatsapp-business-api') }}"
                       class="inline-block mt-4 text-[#049a3d] font-semibold hover:underline">
                        Explore WhatsApp Business API →
                    </a>
                </article>

                <article class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="font-semibold text-xl text-gray-900 mb-2">
                        Bulk WhatsApp & Chatbot
                    </h3>

                    <p class="text-sm text-gray-600 mb-3">
                        Manage customer communication and approved WhatsApp campaigns through scalable messaging tools.
                    </p>

                    <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                        <li>High-volume WhatsApp messaging</li>
                        <li>Approved template messaging</li>
                        <li>Automated chatbot workflows</li>
                        <li>Customer engagement automation</li>
                    </ul>

                    <a href="{{ url('/bulk-whatsapp') }}"
                       class="inline-block mt-4 text-[#049a3d] font-semibold hover:underline">
                        Explore Bulk WhatsApp →
                    </a>
                </article>

                <article class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="font-semibold text-xl text-gray-900 mb-2">
                        WhatsApp Automation & Integration
                    </h3>

                    <p class="text-sm text-gray-600 mb-3">
                        Simplify business communication with WhatsApp integrations and automated customer interactions.
                    </p>

                    <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                        <li>WhatsApp API integration</li>
                        <li>Images, videos and document support</li>
                        <li>Message template management</li>
                        <li>Business workflow automation</li>
                    </ul>

                    <a href="{{ url('/whatsapp-business-api') }}"
                       class="inline-block mt-4 text-[#049a3d] font-semibold hover:underline">
                        Discover WhatsApp Solutions →
                    </a>
                </article>

            </div>
        </section>

        <!-- SMS SERVICES -->
        <section class="mb-16" aria-labelledby="sms-services">
            <h2 id="sms-services" class="text-3xl font-bold text-[#049a3d] mb-6 flex items-center">
                <span class="mr-2" aria-hidden="true">💬</span>
                Bulk SMS & SMS API Services
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <article class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="font-semibold text-xl text-gray-900 mb-2">
                        Bulk SMS & SMS API
                    </h3>

                    <p class="text-sm text-gray-600 mb-3">
                        Send business notifications and large-scale SMS campaigns through an integrated SMS platform.
                    </p>

                    <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                        <li>Bulk SMS API integration</li>
                        <li>DLT-compliant messaging support</li>
                        <li>Delivery reports and analytics</li>
                        <li>High-volume SMS campaigns</li>
                    </ul>

                    <a href="{{ url('/bulk-sms') }}"
                       class="inline-block mt-4 text-[#049a3d] font-semibold hover:underline">
                        Explore Bulk SMS →
                    </a>
                </article>

                <article class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="font-semibold text-xl text-gray-900 mb-2">
                        Transactional SMS
                    </h3>

                    <p class="text-sm text-gray-600 mb-3">
                        Deliver important business notifications, account updates and authentication messages.
                    </p>

                    <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                        <li>OTP and authentication messages</li>
                        <li>System alerts and notifications</li>
                        <li>Order and account updates</li>
                        <li>DLT-compliant message templates</li>
                    </ul>

                    <a href="{{ url('/bulk-sms') }}"
                       class="inline-block mt-4 text-[#049a3d] font-semibold hover:underline">
                        Explore SMS Solutions →
                    </a>
                </article>

                <article class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="font-semibold text-xl text-gray-900 mb-2">
                        Promotional SMS
                    </h3>

                    <p class="text-sm text-gray-600 mb-3">
                        Promote products, offers and business announcements through SMS marketing campaigns.
                    </p>

                    <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                        <li>Promotional SMS campaigns</li>
                        <li>Scheduled message delivery</li>
                        <li>Customer contact management</li>
                        <li>Campaign delivery tracking</li>
                    </ul>

                    <a href="{{ url('/bulk-sms') }}"
                       class="inline-block mt-4 text-[#049a3d] font-semibold hover:underline">
                        Explore Promotional SMS →
                    </a>
                </article>

            </div>
        </section>

        <!-- RCS MESSAGING -->
        <section class="mb-16" aria-labelledby="rcs-services">
            <h2 id="rcs-services" class="text-3xl font-bold text-[#049a3d] mb-6 flex items-center">
                <span class="mr-2" aria-hidden="true">✨</span>
                RCS Business Messaging
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <article class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="font-semibold text-xl text-gray-900 mb-2">
                        Rich Media & Interactive Messaging
                    </h3>

                    <p class="text-sm text-gray-600 mb-3">
                        Create engaging business communication experiences with Rich Communication Services.
                    </p>

                    <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                        <li>Rich cards and product carousels</li>
                        <li>Suggested replies and action buttons</li>
                        <li>High-resolution images and media</li>
                        <li>Branded business messaging profiles</li>
                    </ul>
                </article>

                <article class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="font-semibold text-xl text-gray-900 mb-2">
                        RCS API Integration
                    </h3>

                    <p class="text-sm text-gray-600 mb-3">
                        Integrate RCS messaging into your business communication workflows through API-based solutions.
                    </p>

                    <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                        <li>RCS API integration</li>
                        <li>Fallback SMS where configured and supported</li>
                        <li>Delivery and read receipts where available</li>
                        <li>Campaign and engagement reporting</li>
                    </ul>
                </article>

            </div>

            <a href="{{ url('/rcs-messaging') }}"
               class="inline-block mt-5 text-[#049a3d] font-semibold hover:underline">
                Explore RCS Messaging Services →
            </a>
        </section>

        <!-- VOICE SERVICES -->
        <section aria-labelledby="voice-services">
            <h2 id="voice-services" class="text-3xl font-bold text-[#049a3d] mb-6 flex items-center">
                <span class="mr-2" aria-hidden="true">📞</span>
                Voice Messaging & Voice API Services
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <article class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="font-semibold text-xl text-gray-900 mb-2">
                        Voice API & Alerts
                    </h3>

                    <p class="text-sm text-gray-600 mb-3">
                        Automate voice-based notifications and customer communication using API-driven calling solutions.
                    </p>

                    <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                        <li>Programmatic call initiation</li>
                        <li>Automated voice alerts</li>
                        <li>Text-to-Speech (TTS) support</li>
                        <li>Business notification calls</li>
                    </ul>
                </article>

                <article class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="font-semibold text-xl text-gray-900 mb-2">
                        IVR & Voice OTP
                    </h3>

                    <p class="text-sm text-gray-600 mb-3">
                        Support customer verification and automated call interactions through voice-based communication.
                    </p>

                    <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                        <li>Interactive Voice Response (IVR)</li>
                        <li>Voice OTP delivery</li>
                        <li>Automated call workflows</li>
                        <li>Call tracking options</li>
                    </ul>
                </article>

                <article class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <h3 class="font-semibold text-xl text-gray-900 mb-2">
                        Voice Campaign Management
                    </h3>

                    <p class="text-sm text-gray-600 mb-3">
                        Manage automated voice campaigns for customer notifications and business communication.
                    </p>

                    <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                        <li>Automated voice campaigns</li>
                        <li>Campaign scheduling</li>
                        <li>Call delivery tracking</li>
                        <li>Business communication workflows</li>
                    </ul>
                </article>

            </div>

            <a href="{{ url('/voice-sms') }}"
               class="inline-block mt-5 text-[#049a3d] font-semibold hover:underline">
                Explore Voice Messaging →
            </a>
        </section>

        <!-- FINAL CTA -->
        <section class="mt-16 bg-gray-50 border border-gray-100 rounded-2xl p-8 md:p-12 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                Find the Right Business Messaging Solution
            </h2>

            <p class="text-gray-600 max-w-2xl mx-auto mb-6">
                Connect with Textora to explore messaging APIs and communication solutions
                that match your business requirements.
            </p>

            <a href="{{ url('/contact-us') }}"
               class="inline-block bg-[#049a3d] hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-lg transition">
                Talk to Our Team
            </a>
        </section>

    </div>
</main>

</x-master-page>
