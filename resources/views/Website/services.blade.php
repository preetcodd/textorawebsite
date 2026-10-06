<x-master-page
title="Messaging Services | Bulk SMS, WhatsApp API, RCS | Textora SMS"
description="Explore Textora SMS messaging services including Bulk SMS, WhatsApp Business API, Bulk WhatsApp, Voice Calls, RCS Messaging, SMS API, Email Marketing and Website Development.">
    @php
        function activeNav($path)
        {
            return Request::path() === $path ? 'text-green-700 font-semibold' : 'text-gray-700';
        }
    @endphp

    <main class="pt-20 bg-white font-roboto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-10 text-center">
                Messaging & API Services
            </h1>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto">
                Explore our comprehensive suite of communication APIs designed for high performance, scale, and
                deliverability.
            </p>

            <section class="mb-16">
                <h2 class="text-3xl font-bold text-[#049a3d] mb-6 flex items-center">
                    <span class="mr-2">🟢</span> WhatsApp Services
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">WhatsApp Business API</h3>
                        <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                            <li>Official Integration</li>
                            <li>**Cloud API** ready</li>
                            <li>Interactive Message Support</li>
                        </ul>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">Bulk WhatsApp & Chatbot</h3>
                        <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                            <li>High-volume messaging</li>
                            <li>Templated message support</li>
                            <li>No-code Chatbot builder</li>
                        </ul>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">Media & Gateway</h3>
                        <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                            <li>**Anti-Block Gateway** routing</li>
                            <li>Rich Media Support (Images, Video, Docs)</li>
                            <li>Message Template Management</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="mb-16">
                <h2 class="text-3xl font-bold text-[#049a3d] mb-6 flex items-center">
                    <span class="mr-2">💬</span> SMS Services
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">Bulk SMS & API</h3>
                        <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                            <li>Global SMS API</li>
                            <li>High-speed DLT-compliant routes</li>
                            <li>Delivery reports and analytics</li>
                        </ul>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">Transactional SMS</h3>
                        <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                            <li>**OTP Delivery** (Dedicated channels)</li>
                            <li>System alerts and notifications</li>
                            <li>Highest delivery priority</li>
                        </ul>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">Promotional SMS</h3>
                        <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                            <li>Marketing campaigns</li>
                            <li>Scheduled sending</li>
                            <li>Easy contact management</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="mb-16">
                <h2 class="text-3xl font-bold text-[#049a3d] mb-6 flex items-center">
                    <span class="mr-2">✨</span> RCS Messaging
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">Rich Interactive Features</h3>
                        <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                            <li>Send **Rich Cards** (carousels)</li>
                            <li>Suggest Replies and Action **Buttons**</li>
                            <li>High-resolution media and branding</li>
                        </ul>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">RCS API Integration</h3>
                        <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                            <li>Single API for RCS and fallback SMS</li>
                            <li>Real-time read receipts</li>
                            <li>In-depth conversational reporting</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-3xl font-bold text-[#049a3d] mb-6 flex items-center">
                    <span class="mr-2">📞</span> Voice Services
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">Voice API & Alerts</h3>
                        <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                            <li>Programmatic call initiation</li>
                            <li>Automated voice alerts (e.g., fraud, stock updates)</li>
                            <li>Text-to-Speech (TTS) support</li>
                        </ul>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">IVR & OTP API</h3>
                        <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                            <li>Interactive Voice Response (IVR) setup</li>
                            <li>Reliable **Voice OTP** delivery</li>
                            <li>Call tracking and recording options</li>
                        </ul>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <h3 class="font-semibold text-xl text-gray-900 mb-2">Priority & Speed</h3>
                        <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                            <li>**Priority Routing** for critical calls</li>
                            <li>Ultra-**Fast Delivery** initiation</li>
                            <li>Geographic routing optimization</li>
                        </ul>
                    </div>
                </div>
            </section>

        </div>
    </main>

</x-master-page>