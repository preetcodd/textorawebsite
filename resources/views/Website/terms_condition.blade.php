<x-master-page title="Terms and Conditions | Textora SMS">
    @php
        function activeNav($path)
        {
            return Request::path() === $path ? 'text-green-700 font-semibold' : 'text-gray-700';
        }
    @endphp

    <main class="pt-20 bg-white font-roboto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 md:py-12 py-6">
            <div class="text-center md:mb-12 mb-4">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">T&C</span>
                <h1 class="mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight mb-5">
                    Terms & Conditions
                </h1>
            </div>

            <div class="max-w-7xl mx-auto text-gray-700 space-y-8">
                <section>
                    <h2 class="text-xl font-bold text-[#000] mb-2">1. General Terms of Service</h2>
                    <p class="mb-4">
                        Welcome to Textora Technologies Private Limited. By accessing or using our bulk messaging services (SMS, WhatsApp, Voice,
                        RCS, and APIs), you agree to comply with and be bound by these Terms and Conditions. These terms
                        govern your use of our platform, services, and APIs.
                    </p>
                    <h3 class="text-xl font-bold text-gray-900 mt-2">Account Registration</h3>
                    <p>
                        You must provide accurate and complete information when registering an account. You are
                        responsible for maintaining the confidentiality of your account password and for all activities
                        that occur under your account.
                    </p>
                </section>

                <section id="platform-usage">
                    <h2 class="text-xl font-bold text-[#000] mb-2">2. Platform Usage Terms</h2>
                    <h3 class="text-xl font-bold text-gray-900 mt-2">Permitted Use</h3>
                    <p class="mb-4">
                        Our platform is intended for legitimate business communications, including transactional alerts,
                        customer service, and compliant marketing messages. Any unauthorized use is strictly prohibited.
                    </p>
                    <h3 class="text-xl font-bold text-gray-900 mt-2">Prohibited Content</h3>
                    <p class="mb-4">
                        You agree not to use our services to transmit any content that is illegal, defamatory,
                        harassing, abusive, fraudulent, or promotes violence, or is related to hate speech, gambling, or
                        non-compliant pharma. Violation will result in immediate service termination.
                    </p>
                    <h3 class="text-xl font-bold text-gray-900 mt-2">Anti-Spam Policy</h3>
                    <p>
                        All users must comply with all applicable anti-spam laws, including obtaining proper consent
                        from recipients before sending any promotional messages. We have a zero-tolerance policy for
                        spamming.
                    </p>
                </section>

                <section id="compliance">
                    <h2 class="text-xl font-bold text-[#000] mb-2">3. Regulatory Compliance</h2>
                    <h3 class="text-xl font-bold text-gray-900 mt-2">DLT and Telco Regulations</h3>
                    <p>
                        Users are solely responsible for compliance with country-specific telecom regulations (e.g., DLT
                        in India, TCPA in the US). Textora Technologies Private Limited provides the tools for compliance but cannot guarantee your
                        adherence to all local laws.
                    </p>
                    <h3 class="text-xl font-bold text-gray-900 mt-2">WhatsApp/Meta Policy</h3>
                    <p>
                        Use of the WhatsApp Business API is subject to Meta’s latest policies and guidelines. Messaging
                        templates are subject to their review and approval.
                    </p>
                </section>

                <section id="privacy">
                    <h2 class="text-xl font-bold text-[#000] mb-2">4. Privacy Policy Summary</h2>
                    <p class="mb-4">
                        We are committed to protecting your privacy. This section summarizes our Privacy Policy. For
                        full details, please refer to the dedicated Privacy Policy link in the footer.
                    </p>
                    <h3 class="text-xl font-bold text-gray-900 mt-2"> Data Processing</h3>
                    <p>
                        We process personal data only to the extent necessary to provide the services, including message
                        routing and delivery reporting. We do not sell or share customer contact data with third-party
                        marketers.
                    </p>
                    <h3 class="text-xl font-bold text-gray-900 mt-2">Security Measures</h3>
                    <p>
                        We employ industry-standard encryption and security protocols (including TLS/SSL) to protect
                        data both in transit and at rest.
                    </p>
                </section>

            </div>
        </div>
    </main>
</x-master-page>