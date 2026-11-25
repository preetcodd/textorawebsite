
<x-master-page title="FAQ | Textora SMS">

    @push('head-scripts')
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What services does Textora SMS provide?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Textora SMS is a comprehensive communication provider offering Bulk SMS (Promotional & Transactional), WhatsApp Business API, RCS Messaging, Voice Call solutions, and robust SMS APIs for seamless business integration."
              }
            },
            {
              "@type": "Question",
              "name": "How fast is the OTP delivery via Textora SMS?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our high-priority OTP SMS gateway is optimized for speed, ensuring that critical authentication codes and alerts are delivered to users in under 5 seconds with a 99.9% uptime guarantee."
              }
            },
            {
              "@type": "Question",
              "name": "Does Textora SMS assist with DLT registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, we provide end-to-end managed DLT support. Our team helps you navigate the registration process, approve your Header (Sender ID), and whitelist your SMS templates quickly to comply with TRAI regulations."
              }
            },
            {
              "@type": "Question",
              "name": "What are the benefits of using WhatsApp Business API through Textora?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "By using our WhatsApp Business API, businesses can send rich-media messages, automate customer support with AI chatbots, utilize verified 'Green Tick' profiles, and integrate directly with their existing CRM systems."
              }
            },
            {
              "@type": "Question",
              "name": "How does RCS Messaging differ from traditional Bulk SMS?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "RCS (Rich Communication Services) upgrades standard texting into an app-like experience. It supports high-res images, videos, interactive buttons, and carousels directly in the native messaging inbox, leading to 4x higher engagement than SMS."
              }
            },
            {
              "@type": "Question",
              "name": "Is there a reseller program available at Textora SMS?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, we offer a powerful White-Label Reseller Program. It includes a fully branded website setup, a dedicated admin panel, and competitive bulk pricing, allowing you to start your own messaging business immediately."
              }
            },
            {
              "@type": "Question",
              "name": "Can I integrate Textora SMS API with my website or application?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely. We provide developer-friendly HTTP/REST APIs with comprehensive documentation. You can integrate our messaging services into any platform using PHP, Java, Python, and other major languages in minutes."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Promotional and Transactional SMS?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Transactional SMS is used for critical alerts like OTPs and order updates (sent 24/7), while Promotional SMS is used for marketing offers and discounts (sent 9 AM - 9 PM) to non-DND numbers."
              }
            },
            {
              "@type": "Question",
              "name": "How can I get the Blue Tick/Green Tick verification for my WhatsApp Business account?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "As an official Meta Business Partner, Textora SMS guides you through the Meta Business Verification process. Once your business is verified and reaches a high messaging tier, we help you apply for the Official Business Account status."
              }
            },
            {
              "@type": "Question",
              "name": "Do you provide regional language support for SMS?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, our platform supports Unicode messaging, allowing you to send SMS in Hindi, Tamil, Telugu, Kannada, Bengali, and other regional languages to better connect with your local audience."
              }
            },
            {
              "@type": "Question",
              "name": "What is the pricing for Bulk SMS and WhatsApp API in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "We offer some of the most competitive rates in India with 'No Panel Charge' fees. Pricing is based on volume and specific routes (SMS vs WhatsApp). Contact our sales team at support@textorasms.com for a custom quote."
              }
            }
          ]
        }
        </script>
    @endpush

    <main class="pt-20 bg-white font-roboto w-full max-w-full overflow-x-clip">

        <div class="w-full max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-10 sm:py-12 box-border">

            <!-- PAGE HEADING -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 text-center leading-tight break-words">
                Frequently Asked Questions
            </h1>

            <p class="text-base sm:text-xl text-gray-600 text-center mb-10 sm:mb-12 max-w-3xl mx-auto leading-relaxed">
                Find quick answers to common questions about our platform, services, and policies.
            </p>

            <!-- FAQ CONTAINER -->
            <div class="w-full max-w-4xl mx-auto space-y-4 min-w-0 box-border">

                <!-- FAQ 1 -->
                <div class="w-full max-w-full min-w-0 border border-gray-200 rounded-lg overflow-hidden shadow-sm box-border">
                    <input type="checkbox" id="faq1" class="hidden peer">

                    <label for="faq1"
                        class="flex flex-row justify-between items-start gap-3 cursor-pointer p-4 sm:p-5 bg-teal-50 hover:bg-teal-100 transition duration-300 w-full min-w-0 box-border">

                        <span class="flex-1 min-w-0 whitespace-normal break-words text-base sm:text-lg font-semibold text-gray-900 leading-relaxed">
                            1. What is the difference between Transactional and Promotional SMS?
                        </span>

                        <span class="shrink-0 text-[#049a3d] text-2xl leading-none pt-0.5">
                            +
                        </span>
                    </label>

                    <div class="max-h-0 peer-checked:max-h-96 transition-all duration-500 overflow-hidden bg-white w-full min-w-0">
                        <p class="p-4 sm:p-5 text-sm sm:text-base text-gray-700 border-t border-gray-200 whitespace-normal break-words leading-relaxed">
                            <strong>Transactional SMS</strong> are non-marketing messages like OTPs, order confirmations, and system alerts. They have the highest priority and are sent 24/7.
                            <strong>Promotional SMS</strong> are marketing messages, subject to Do Not Disturb (DND) regulations and specific sending times.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="w-full max-w-full min-w-0 border border-gray-200 rounded-lg overflow-hidden shadow-sm box-border">
                    <input type="checkbox" id="faq2" class="hidden peer">

                    <label for="faq2"
                        class="flex flex-row justify-between items-start gap-3 cursor-pointer p-4 sm:p-5 bg-teal-50 hover:bg-teal-100 transition duration-300 w-full min-w-0 box-border">

                        <span class="flex-1 min-w-0 whitespace-normal break-words text-base sm:text-lg font-semibold text-gray-900 leading-relaxed">
                            2. Do I need approval for WhatsApp Business Message Templates?
                        </span>

                        <span class="shrink-0 text-[#049a3d] text-2xl leading-none pt-0.5">
                            +
                        </span>
                    </label>

                    <div class="max-h-0 peer-checked:max-h-96 transition-all duration-500 overflow-hidden bg-white w-full min-w-0">
                        <p class="p-4 sm:p-5 text-sm sm:text-base text-gray-700 border-t border-gray-200 whitespace-normal break-words leading-relaxed">
                            Yes, all Outbound (template-based) messages on the WhatsApp Business API require pre-approval from WhatsApp/Meta to ensure compliance with their commerce policy. Our platform simplifies the submission process significantly.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="w-full max-w-full min-w-0 border border-gray-200 rounded-lg overflow-hidden shadow-sm box-border">
                    <input type="checkbox" id="faq3" class="hidden peer">

                    <label for="faq3"
                        class="flex flex-row justify-between items-start gap-3 cursor-pointer p-4 sm:p-5 bg-teal-50 hover:bg-teal-100 transition duration-300 w-full min-w-0 box-border">

                        <span class="flex-1 min-w-0 whitespace-normal break-words text-base sm:text-lg font-semibold text-gray-900 leading-relaxed">
                            3. What is the Anti-Block Gateway and how does it work?
                        </span>

                        <span class="shrink-0 text-[#049a3d] text-2xl leading-none pt-0.5">
                            +
                        </span>
                    </label>

                    <div class="max-h-0 peer-checked:max-h-96 transition-all duration-500 overflow-hidden bg-white w-full min-w-0">
                        <p class="p-4 sm:p-5 text-sm sm:text-base text-gray-700 border-t border-gray-200 whitespace-normal break-words leading-relaxed">
                            Our <strong>Anti-Block Gateway</strong> is an intelligent routing layer that constantly monitors carrier and regulatory compliance signals, automatically switching message routes to maintain the highest possible delivery rates and minimize the risk of your number being blocked or throttled.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="w-full max-w-full min-w-0 border border-gray-200 rounded-lg overflow-hidden shadow-sm box-border">
                    <input type="checkbox" id="faq4" class="hidden peer">

                    <label for="faq4"
                        class="flex flex-row justify-between items-start gap-3 cursor-pointer p-4 sm:p-5 bg-teal-50 hover:bg-teal-100 transition duration-300 w-full min-w-0 box-border">

                        <span class="flex-1 min-w-0 whitespace-normal break-words text-base sm:text-lg font-semibold text-gray-900 leading-relaxed">
                            4. Is your platform fully compliant with GDPR and CCPA?
                        </span>

                        <span class="shrink-0 text-[#049a3d] text-2xl leading-none pt-0.5">
                            +
                        </span>
                    </label>

                    <div class="max-h-0 peer-checked:max-h-96 transition-all duration-500 overflow-hidden bg-white w-full min-w-0">
                        <p class="p-4 sm:p-5 text-sm sm:text-base text-gray-700 border-t border-gray-200 whitespace-normal break-words leading-relaxed">
                            Yes, our data handling, processing, and storage practices are fully compliant with major global data privacy regulations including GDPR (Europe) and CCPA (California). Refer to our Privacy Policy for details.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="w-full max-w-full min-w-0 border border-gray-200 rounded-lg overflow-hidden shadow-sm box-border">
                    <input type="checkbox" id="faq5" class="hidden peer">

                    <label for="faq5"
                        class="flex flex-row justify-between items-start gap-3 cursor-pointer p-4 sm:p-5 bg-teal-50 hover:bg-teal-100 transition duration-300 w-full min-w-0 box-border">

                        <span class="flex-1 min-w-0 whitespace-normal break-words text-base sm:text-lg font-semibold text-gray-900 leading-relaxed">
                            5. Do you offer an IVR setup for inbound calls?
                        </span>

                        <span class="shrink-0 text-[#049a3d] text-2xl leading-none pt-0.5">
                            +
                        </span>
                    </label>

                    <div class="max-h-0 peer-checked:max-h-96 transition-all duration-500 overflow-hidden bg-white w-full min-w-0">
                        <p class="p-4 sm:p-5 text-sm sm:text-base text-gray-700 border-t border-gray-200 whitespace-normal break-words leading-relaxed">
                            Our Voice API includes robust features for setting up and managing Interactive Voice Response (IVR) systems. You can configure menus, handle user input, and route calls programmatically via our panel or API.
                        </p>
                    </div>
                </div>

                <!-- CONTACT SUPPORT -->
                <div class="text-center pt-6 sm:pt-8 px-2 w-full min-w-0">
                    <p class="text-sm sm:text-base text-gray-600 whitespace-normal break-words">
                        Didn't find your answer?
                        <a href="{{ url('/contact-us') }}"
                           class="text-[#049a3d] font-semibold hover:underline">
                            Contact our support team
                        </a>.
                    </p>
                </div>

            </div>
        </div>
    </main>

</x-master-page>
