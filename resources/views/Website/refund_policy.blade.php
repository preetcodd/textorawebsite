<x-master-page title="Refund Policy | Textora SMS">
    @php
        function activeNav($path)
        {
            return Request::path() === $path ? 'text-green-700 font-semibold' : 'text-gray-700';
        }
    @endphp

    <main class="pt-20 bg-white font-roboto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 md:py-12 py-5">
            <div class="text-center md:mb-12 mb-4">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">Our Refund
                    Policy</span>
                <h1 class="mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight mb-5">
                    Refund Policy – Textora Technologies Pvt. Ltd
                </h1>
            </div>


            <div class="max-w-7xl mx-auto text-gray-700 space-y-8">
                <section>
                    <p class="mb-4 font-semibold">Last Updated: [08-12-2025] Textora Technologies Pvt. Ltd. provides
                        reliable Bulk SMS, WhatsApp
                        API, Voice Call, RCS, and other communication services. All our services are prepaid and
                        usage-based. Please read this Refund Policy carefully before making any purchase</p>

                    <h2 class="text-xl font-bold mb-0">1. No Refund on Prepaid / Usage-Based Services</h2>
                    <p class="mb-4">Since services are delivered instantly and are consumption-based, no refund will be
                        provided once
                        the credits are purchased or service is activated. This includes: Bulk SMS, WhatsApp API, RCS
                        Messaging, Voice/IVR Minutes, Sender ID Charges, Template Approval Fees, and Wallet
                        Recharges.
                    </p>
                    <h3 class="text-xl font-bold text-gray-900 mb-0">2. When Refunds Are Allowed</h3>
                    <p class="mb-4">Refunds are allowed only in: - Duplicate/Double Payment (refund in 3–7 working
                        days) - Technical
                        failure from our side (unused credits will be refunded to wallet or replaced). </p>

                    <h2 class="text-xl font-bold mb-0">3. No Refund Will Be Provided In Following Cases</h2>

                    <p class="mb-4">Refund is not applicable for: invalid numbers, DLT rejections, wrong content, user
                        mistakes, spam
                        issues, account suspension, change of mind, partially used credits, and violations. </p>


                    <h3 class="text-xl font-bold text-gray-900 mb-0">4. Refund Processing Time</h3>
                    <p class="mb-4">Refund approval: 24–48 hours Bank processing: 3–7 working days </p>

                    <h3 class="text-xl font-bold text-gray-900 mb-0">5. Chargebacks</h3>
                    <p class="mb-4">If a chargeback is filed without contacting us: account suspension,
                        legal/processing fees, and
                        remaining credits forfeited. </p>

                    <h2 class="text-xl font-bold mb-0">6. How to Request a Refund</h2>

                    <p class="mb-4">Email: <a href="mailto:support@textorasms.com   " target="_blank"
                            class="font-bold">support@textorasms.com</a> Include payment screenshot, transaction ID,
                        registered number,
                        and reason. </p>

                    <h3 class="text-xl font-bold text-gray-900 mt-3">7. Policy Changes</h3>
                    <p class="mb-4">Textora Technologies Pvt. Ltd. may update this Refund Policy anytime without prior
                        notice. </p>


                </section>

            </div>
        </div>
    </main>

</x-master-page>