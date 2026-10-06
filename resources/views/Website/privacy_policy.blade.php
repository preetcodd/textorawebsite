<x-master-page title="Privacy Policy | Textora SMS">
    @php
        function activeNav($path)
        {
            return Request::path() === $path ? 'text-green-700 font-semibold' : 'text-gray-700';
        }
    @endphp

    <main class="pt-20 bg-white font-roboto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 md:py-12 py-5">
            <div class="text-center md:mb-12 mb-4">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">Our Privacy
                    Policy</span>
                <h1 class="mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight mb-5">
                    Privacy Policy
                </h1>
            </div>


            <div class="max-w-7xl mx-auto text-gray-700 space-y-8">
                <section>
                    <h2 class="text-xl font-bold mb-0">1. Introduction</h2>
                    <p class="mb-4">Textora Technologies Private Limited (“we”, “us”, “our”) prioritizes user privacy,
                        data protection, and compliance. By interacting with our platform, products, or services, you
                        accept the terms of this policy.
                    </p>
                    <h3 class="text-xl font-bold text-gray-900 mb-0">2. Deceptive Content Advisory</h3>
                    <p class="mb-4">We caution all users that scammers and criminal entities may misuse SMS or messaging
                        channels to distribute fake prize claims, fraudulent inheritance notices, job scams, or other
                        misleading content.
                        Such misuse is illegal and may prompt investigation by regulatory authorities.
                        Textora Technologies Private Limited fully cooperates with law enforcement agencies and may
                        share user information when required by law. </p>

                    <h2 class="text-xl font-bold mb-0">3. Pre-Approved Sender IDs</h2>

                    <p class="mb-4">All sender names/headers must be pre-approved before use.
                        Using unapproved or misleading sender IDs may result in message delivery issues, sender
                        blocking, or account restrictions.
                    </p>
                    <h3 class="text-xl font-bold text-gray-900 mb-0">4. Communications to DND Users</h3>
                    <p class="mb-4">If you send communications to numbers registered under Do-Not-Disturb (DND) without
                        using DND-compliant routes, the responsibility for disputes or penalties lies solely with you.
                        We strongly recommend using compliant routes to avoid regulatory actions.
                    </p>
                    <h3 class="text-xl font-bold text-gray-900 mb-0">5. Non-Compliance Consequences</h3>
                    <p class="mb-4">If you violate any of the provisions in this policy, we may suspend, limit, or
                        terminate your access to our services.
                        Textora Technologies Private Limited shall not be liable for any loss arising due to such
                        actions.
                    </p>

                    <h2 class="text-xl font-bold mb-0">6. Promotional Communication Consent</h2>

                    <p class="mb-4">By registering on our platform, you grant explicit consent to receive promotional
                        messages, product updates, service notifications, or alerts on the contact details provided by
                        you.
                    </p>

                    <h3 class="text-xl font-bold text-gray-900 mt-3">7. Force Majeure</h3>
                    <p class="mb-4">We are not responsible for delays, downtime, or service interruptions caused by
                        circumstances beyond our control, including natural disasters, network failures, government
                        restrictions, or technical issues affecting third-party providers.
                    </p>

                    <h2 class="text-xl font-bold mb-0">8. Right to Refuse or Terminate Service</h2>
                    <p class="mb-4">We reserve the right to refuse service, apply usage limits, withdraw features,
                        suspend accounts, relocate data, or delete stored information—with or without prior notice—if we
                        determine a violation of this agreement.
                        Post-termination, stored data may no longer be retrievable.
                    </p>
                    <h3 class="text-xl font-bold text-gray-900 mb-0">9. Eligibility</h3>
                    <p>Users must be at least 18 years old or operating under lawful guardian supervision.
                        Unless stated otherwise, all prices, fees, and transactions are denominated in Indian Rupees
                        (INR).
                    </p>
                    <h3 class="text-xl font-bold text-gray-900 mt-3">10. Pricing Modifications</h3>
                    <p>We reserve the right to revise, update, or introduce new fees and charges at any time, even if
                        current charges are low or waived.
                    </p>

                    <h3 class="text-xl font-bold text-gray-900 mt-3">11. Reporting Partial Service Delivery</h3>
                    <p>If any part of a purchased service is not provided, you must notify us within 10 days so we can
                        take corrective action. </p>

                </section>

            </div>
        </div>
    </main>

</x-master-page>