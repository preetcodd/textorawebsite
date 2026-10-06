<x-master-page title="Contact Us | Textora SMS">
    @push('head-scripts')
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BreadcrumbList",
          "itemListElement": [{
            "@type": "ListItem",
            "position": 1, 
            "name": "Home",
            "item": "https://www.textorasms.com/"
          },{
            "@type": "ListItem",
            "position": 2,
            "name": "Contact Us",
            "item": "https://www.textorasms.com/contact-us"
          }]
        }
        </script>
    @endpush
    @php
        function activeNav($path)
        {
            return Request::path() === $path ? 'text-green-700 font-semibold' : 'text-gray-700';
        }
    @endphp
   {{-- =========================
    HERO SECTION START
========================= --}}

<section class="relative overflow-hidden bg-gradient-to-br from-white via-green-50 to-white">

    <!-- Background Effects -->
    <div class="absolute top-[-120px] right-[-120px] w-96 h-96 bg-green-200/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-[-120px] left-[-120px] w-80 h-80 bg-emerald-200/20 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-20 relative z-10">

        <div class="grid lg:grid-cols-2 gap-14 items-center">

            {{-- Left Content --}}
            <div>

                <span
                    class="inline-flex items-center px-5 py-2 rounded-full bg-green-100 text-[#049A3D] font-semibold mb-6">
                    🚀 Trusted Business Communication Platform
                </span>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight">

                    Let's Build Your

                    <span class="text-[#049A3D]">
                        Business Communication
                    </span>

                    Together

                </h1>

                <p class="mt-6 text-xl text-gray-600 leading-9 max-w-xl">

                    Whether you're looking for Bulk SMS, WhatsApp Business API,
                    RCS Messaging or Voice Solutions, our experts are here to
                    help you choose the perfect communication platform.

                </p>

                <div class="flex flex-wrap gap-4 mt-10">

                    <a href="#contact-form"
                        class="bg-[#049A3D] hover:bg-[#037b31] text-white px-8 py-4 rounded-xl font-semibold shadow-lg transition">

                        Schedule Free Demo

                    </a>

                    <a href="https://wa.me/919187054466"
                        target="_blank"
                        class="border-2 border-[#049A3D] text-[#049A3D] hover:bg-green-50 px-8 py-4 rounded-xl font-semibold transition">

                        WhatsApp Us

                    </a>

                </div>

                {{-- Stats --}}
                <div class="grid grid-cols-3 gap-5 mt-14">

                    <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6 text-center">

                        <h3 class="text-3xl font-bold text-[#049A3D]">
                            30 Min
                        </h3>

                        <p class="text-gray-500 mt-2 text-sm">
                            Average Response
                        </p>

                    </div>

                    <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6 text-center">

                        <h3 class="text-3xl font-bold text-[#049A3D]">
                            24×7
                        </h3>

                        <p class="text-gray-500 mt-2 text-sm">
                            Customer Support
                        </p>

                    </div>

                    <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6 text-center">

                        <h3 class="text-3xl font-bold text-[#049A3D]">
                            10K+
                        </h3>

                        <p class="text-gray-500 mt-2 text-sm">
                            Happy Clients
                        </p>

                    </div>

                </div>

            </div>

            {{-- Right Image --}}
            <div class="relative">

                <div
                    class="bg-white rounded-3xl p-4 shadow-2xl border border-gray-100">

                    <img
                        src="{{ asset('images/contact-hero.png') }}"
                        alt="Contact Us"
                        class="w-full h-auto rounded-2xl object-cover">

                </div>

            </div>

        </div>

    </div>

</section>

{{-- =========================
    HERO SECTION END
========================= --}}
{{-- =======================================
        PREMIUM CONTACT INFO CARDS
======================================= --}}

<section class="relative -mt-8 z-20 pb-12">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-5">


            {{-- Call Sales --}}
            <div
                class="group bg-white/90 backdrop-blur rounded-2xl border border-gray-100 shadow-md hover:shadow-xl transition-all duration-300 p-6 hover:-translate-y-1">

                <div
                    class="w-12 h-12 rounded-xl bg-gradient-to-br from-green-400 to-green-600 text-white flex items-center justify-center text-xl shadow-lg mb-4 group-hover:scale-110 transition">

                    <i class="fas fa-phone-alt"></i>

                </div>


                <h3 class="text-lg font-bold text-gray-900">
                    Call Sales
                </h3>

                <p class="text-sm text-gray-500 mt-1">
                    Speak with our experts.
                </p>


                <a href="tel:+919187054466"
                    class="inline-flex items-center gap-2 mt-4 text-green-600 font-semibold text-sm hover:text-green-700">

                    +91 9187054466
                    <span>→</span>

                </a>

            </div>




            {{-- Email --}}
            <div
                class="group bg-white/90 backdrop-blur rounded-2xl border border-gray-100 shadow-md hover:shadow-xl transition-all duration-300 p-6 hover:-translate-y-1">


                <div
                    class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-400 to-blue-600 text-white flex items-center justify-center text-xl shadow-lg mb-4 group-hover:scale-110 transition">

                    <i class="fas fa-envelope"></i>

                </div>


                <h3 class="text-lg font-bold text-gray-900">
                    Email Us
                </h3>


                <p class="text-sm text-gray-500 mt-1">
                    Send your enquiry anytime.
                </p>


                <a href="mailto:support@textorasms.com"
                    class="inline-flex mt-4 text-blue-600 font-semibold text-sm hover:text-blue-700">

                    support@textorasms.com

                </a>


            </div>




            {{-- WhatsApp --}}
            <div
                class="group bg-white/90 backdrop-blur rounded-2xl border border-gray-100 shadow-md hover:shadow-xl transition-all duration-300 p-6 hover:-translate-y-1">


                <div
                    class="w-12 h-12 rounded-xl bg-gradient-to-br from-green-400 to-emerald-600 text-white flex items-center justify-center text-xl shadow-lg mb-4 group-hover:scale-110 transition">

                    <i class="fab fa-whatsapp"></i>

                </div>


                <h3 class="text-lg font-bold text-gray-900">
                    WhatsApp
                </h3>


                <p class="text-sm text-gray-500 mt-1">
                    Instant team support.
                </p>


                <a href="https://wa.me/919187054466"
                    target="_blank"
                    class="inline-flex items-center gap-2 mt-4 text-green-600 font-semibold text-sm">

                    Start Chat
                    <span>→</span>

                </a>


            </div>




            {{-- Office --}}
            <div
                class="group bg-white/90 backdrop-blur rounded-2xl border border-gray-100 shadow-md hover:shadow-xl transition-all duration-300 p-6 hover:-translate-y-1">


                <div
                    class="w-12 h-12 rounded-xl bg-gradient-to-br from-orange-400 to-orange-600 text-white flex items-center justify-center text-xl shadow-lg mb-4 group-hover:scale-110 transition">


                    <i class="fas fa-map-marker-alt"></i>


                </div>


                <h3 class="text-lg font-bold text-gray-900">
                    Visit Office
                </h3>


                <p class="text-sm text-gray-500 mt-1">
                    BTM Layout, Bengaluru
                </p>


                <a href="https://maps.app.goo.gl/YZ6g564PG73fUGuq7"
                    target="_blank"
                    class="inline-flex items-center gap-2 mt-4 text-orange-600 font-semibold text-sm">

                    Get Directions
                    <span>→</span>

                </a>


            </div>


        </div>

    </div>

</section>

{{-- =======================================
        PREMIUM CONTACT INFO CARDS END
======================================= --}}
{{-- ===========================
    PREMIUM CONTACT SECTION START
=========================== --}}

<section id="contact-form" class="py-24 bg-gradient-to-b from-[#F8FBF9] via-white to-[#F8FBF9]">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        {{-- Heading --}}
        <div class="text-center mb-14">

            <span
                class="inline-flex items-center rounded-full bg-green-100 px-5 py-2 text-sm font-semibold text-green-700">
                Contact Us
            </span>

            <h2 class="mt-5 text-4xl lg:text-5xl font-bold text-gray-900">
                We'd Love To Hear From You
            </h2>

            <p class="mt-4 text-lg text-gray-500 max-w-3xl mx-auto">
                Whether you need Bulk SMS, WhatsApp Business API, RCS Messaging,
                Voice SMS or Email Marketing, our team is here to help.
            </p>

        </div>

        <div class="grid lg:grid-cols-3 gap-8 items-start">

            {{-- ==========================================
                CONTACT FORM
            =========================================== --}}

            <div
                class="lg:col-span-2 bg-white rounded-[28px] border border-gray-100 shadow-xl p-6 lg:p-8 h-fit">

                <div class="mb-5">

                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900">
                        Send Us A Message
                    </h3>

                <p class="text-sm text-gray-500 mt-2">
                        Fill in the form below and our team will get back to you shortly.
                    </p>

                </div>

                <form method="POST"
                    action="{{ url('enquiry-web') }}"
                    id="contact-frm"
                    onsubmit="return validateContactForm(event)"
                    class="space-y-4"

                    @csrf

                    <input
                        type="hidden"
                        name="isFormType"
                        value="Contact">

                    {{-- Row 1 --}}

                    <div class="grid md:grid-cols-2 gap-5">

                        <input
                            type="text"
                            name="name"
                            required
                            minlength="2"
                            maxlength="50"
                            placeholder="Full Name*"
                            class="w-full rounded-xl border border-gray-200 px-5 py-3.5 focus:border-green-500 focus:ring-green-500">

                        <input
                            type="text"
                            name="company"
                            placeholder="Company Name"
                            class="w-full rounded-xl border border-gray-200 px-5 py-3.5 focus:border-green-500 focus:ring-green-500">

                    </div>

                    {{-- Row 2 --}}

                    <div class="grid md:grid-cols-2 gap-5">

                        <input
                            type="email"
                            name="email"
                            required
                            placeholder="Email Address*"
                            class="w-full rounded-xl border border-gray-200 px-5 py-3.5 focus:border-green-500 focus:ring-green-500">

                        <input
                            type="tel"
                            name="contact"
                            required
                            minlength="10"
                            maxlength="15"
                            pattern="[0-9]{10,15}"
                            placeholder="Phone Number*"
                            class="w-full rounded-xl border border-gray-200 px-5 py-3.5 focus:border-green-500 focus:ring-green-500">

                    </div>

                    {{-- Service --}}

                    <div>

                        <select
                            name="service"
                            class="w-full rounded-xl border border-gray-200 px-5 py-3.5 focus:border-green-500 focus:ring-green-500">

                            <option value="">
                                Service Interested In*
                            </option>

                            <option>
                                Bulk SMS
                            </option>

                            <option>
                                WhatsApp Business API
                            </option>

                            <option>
                                RCS Messaging
                            </option>

                            <option>
                                Voice SMS
                            </option>

                            <option>
                                Email Marketing
                            </option>

                            <option>
                                Website Development
                            </option>

                        </select>

                    </div>

                    {{-- Message --}}

                    <div>

                        <textarea
                            rows="5"
                            name="message"
                            required
                            placeholder="Your Message*"
                            class="w-full rounded-xl border border-gray-200 px-5 py-4 focus:border-green-500 focus:ring-green-500"></textarea>

                    </div>
{{-- Checkbox --}}
<div class="flex items-start mt-6">

    <input
        type="checkbox"
        id="terms"
        name="terms"
        required
        class="mt-1 h-5 w-5 rounded border-gray-300 text-[#049A3D] focus:ring-[#049A3D]">

    <div class="ml-3 text-sm">

        <label for="terms" class="text-gray-600 leading-relaxed cursor-pointer">

            I agree to Textora
            <a href="{{ url('/privacy-policy') }}"
               class="text-[#049A3D] font-medium hover:underline">
                Privacy Policy
            </a>
            and consent to receive marketing and transactional updates via
            RCS, SMS, WhatsApp and email.

        </label>

    </div>

</div>
                    {{-- Button --}}

                    <button
                        type="submit"
                        class="w-full rounded-xl bg-gradient-to-r from-green-600 to-green-500 py-4 text-white font-semibold text-lg shadow-lg transition duration-300 hover:scale-[1.01] hover:shadow-xl">

                        Send Message 🚀

                    </button>

                </form>

            </div>

            {{-- RIGHT SIDEBAR STARTS IN PART 2 --}}
                        {{-- ==========================================
                RIGHT SIDEBAR
            =========================================== --}}
<div class="bg-gradient-to-br from-[#F8FCF9] to-white rounded-[28px] border border-green-100 shadow-lg p-6">


    {{-- Top Section --}}
    <div class="relative">


        {{-- Heading --}}
        <h3 class="text-[22px] font-bold text-gray-900 leading-tight max-w-[220px]">

            Need Immediate
            Assistance?

        </h3>


        <p class="mt-2 text-xs text-gray-500 leading-5 max-w-[230px]">

            Our team is available to help you with all your business communication requirements.

        </p>



        {{-- Headphone Image --}}
        <div class="absolute right-0 top-0">

            <img 
                src="{{ asset('images/headphone.png') }}"
                class="w-32 xl:w-36 object-contain"
                alt="Support">

        </div>



    </div>




    {{-- Contact Details --}}
    <div class="mt-8 space-y-4">


        {{-- Item --}}
        <div class="flex items-center gap-3">

            <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center text-lg">
                📞
            </div>


            <div>
                <p class="text-[11px] font-bold text-gray-500 uppercase">
                    Sales Team
                </p>

                <p class="text-sm font-bold text-gray-900">
                    +91 9187054466
                </p>
            </div>

        </div>




        <div class="flex items-center gap-3">

            <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center text-lg">
                ✉️
            </div>


            <div>

                <p class="text-[11px] font-bold text-gray-500 uppercase">
                    Support Email
                </p>

                <p class="text-sm font-bold text-gray-900">
                    support@textorasms.com
                </p>

            </div>

        </div>





        <div class="flex items-center gap-3">

            <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center text-lg">
                🕒
            </div>


            <div>

                <p class="text-[11px] font-bold text-gray-500 uppercase">
                    Business Hours
                </p>

                <p class="text-sm font-bold text-gray-900">
                    Mon - Sat | 10 AM - 7 PM
                </p>

            </div>

        </div>





        <div class="flex items-center gap-3">

            <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center text-lg">
                ⚡
            </div>


            <div>

                <p class="text-[11px] font-bold text-gray-500 uppercase">
                    Response Time
                </p>

                <p class="text-sm font-bold text-green-600">
                    Less than 30 Minutes
                </p>

            </div>

        </div>


    </div>




    {{-- Divider --}}
    <div class="border-t border-gray-200 my-6"></div>




    {{-- Why Contact --}}
    <h3 class="text-xl font-bold text-gray-900 mb-4">

        Why Contact Textora?

    </h3>




    <div class="grid grid-cols-4 gap-2">


        <div class="rounded-xl border border-gray-200 p-3 text-center">

            <div class="text-lg">
                🚀
            </div>

            <p class="text-xs font-bold mt-1">
                Fast
            </p>

            <span class="text-[10px] text-gray-500">
                Onboarding
            </span>

        </div>



        <div class="rounded-xl border border-gray-200 p-3 text-center">

            <div class="text-lg">
                🛡️
            </div>

            <p class="text-xs font-bold mt-1">
                Enterprise
            </p>

            <span class="text-[10px] text-gray-500">
                Security
            </span>

        </div>




        <div class="rounded-xl border border-gray-200 p-3 text-center">

            <div class="text-lg">
                👨‍💼
            </div>

            <p class="text-xs font-bold mt-1">
                Dedicated
            </p>

            <span class="text-[10px] text-gray-500">
                Manager
            </span>

        </div>




        <div class="rounded-xl border border-gray-200 p-3 text-center">

            <div class="text-lg">
                ⚙️
            </div>

            <p class="text-xs font-bold mt-1">
                Custom
            </p>

            <span class="text-[10px] text-gray-500">
                Solutions
            </span>

        </div>


    </div>


</div>
</section>
<!-- Company Info Section -->
<section class="company-info" style="padding:70px 20px;background:#f8f9fa;">

    <div style="
        max-width:1200px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:70px;
        flex-wrap:wrap;
    ">

        <!-- Company -->
        <div style="flex:1;min-width:280px;">

            <h2 style="
                font-size:32px;
                font-weight:700;
                color:#111;
                line-height:1.3;
                margin:0 0 20px;
            ">
                Textora Technologies <br> Pvt Ltd
            </h2>

            <p style="
                color:#666;
                font-size:17px;
                line-height:1.8;
                margin:0;
            ">
                Business Communication &
                Digital Solutions Platform
            </p>

        </div>

        <!-- Registered Office -->
        <div style="flex:1;min-width:280px;">

            <h3 style="
                font-size:28px;
                font-weight:700;
                color:#111;
                margin:0 0 20px;
            ">
                Registered Office
            </h3>

            <p style="
                color:#666;
                font-size:17px;
                line-height:1.9;
                margin:0;
            ">
               5a, 1A Cross Rd, near Silk Board Metro Station, Dollar Scheme Colony, 1st Stage, <br>BTM 1st Stage, Bengaluru, Karnataka 560068
            </p>

        </div>

        <!-- Social Media -->
        <div style="flex:1;min-width:280px;">

            <h3 style="
                font-size:28px;
                font-weight:700;
                color:#111;
                margin:0 0 20px;
            ">
                Connect With Us
            </h3>

            <div style="display:flex;gap:16px;">

                <a href="https://www.linkedin.com/company/textora-technologies-pvt-ltd"
                   target="_blank"
                   style="
                        width:52px;
                        height:52px;
                        border-radius:50%;
                        background:#0A66C2;
                        color:#fff;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        text-decoration:none;
                        font-size:22px;
                        transition:.3s;
                        box-shadow:0 8px 18px rgba(0,0,0,.15);
                   ">
                    <i class="fab fa-linkedin-in"></i>
                </a>

                <a href="https://www.instagram.com/textoratech/"
                   target="_blank"
                   style="
                        width:52px;
                        height:52px;
                        border-radius:50%;
                        background:#E4405F;
                        color:#fff;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        text-decoration:none;
                        font-size:22px;
                        transition:.3s;
                        box-shadow:0 8px 18px rgba(0,0,0,.15);
                   ">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="https://www.facebook.com/people/Textora-Technologies-Pvt-Ltd/61584312038555/"
                   target="_blank"
                   style="
                        width:52px;
                        height:52px;
                        border-radius:50%;
                        background:#1877F2;
                        color:#fff;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        text-decoration:none;
                        font-size:22px;
                        transition:.3s;
                        box-shadow:0 8px 18px rgba(0,0,0,.15);
                   ">
                    <i class="fab fa-facebook-f"></i>
                </a>

            </div>

        </div>

    </div>

</section>{{-- ===========================
    GOOGLE MAP SECTION START
=========================== --}}

<section class="py-10 bg-white">

    <div class="w-full">

        <!-- Heading -->
        <div class="text-center mb-6 px-6">

            <h2 class="text-4xl md:text-5xl font-bold text-gray-900">
                Visit Our Office
            </h2>

            <p class="mt-3 text-lg text-gray-600">
                Textora Technologies Pvt Ltd, Bengaluru
            </p>

        </div>

        <!-- Google Map -->
        <div class="overflow-hidden shadow-xl border-t border-b border-gray-200">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.8548946956325!2d77.6163425751674!3d12.9170462873933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae14fa06a2f323%3A0x9c377e39a4deeada!2s5a%2C%201A%20Cross%20Rd%2C%20Dollar%20Scheme%20Colony%2C%20Stage%202%2C%20BTM%20Layout%2C%20Bengaluru%2C%20Karnataka%20560068!5e0!3m2!1sen!2sin!4v1765187783058!5m2!1sen!2sin"
                class="w-full h-[450px] md:h-[500px] lg:h-[550px]"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Textora Technologies Pvt Ltd Location">
            </iframe>

        </div>

    </div>

</section>

{{-- ===========================
    GOOGLE MAP SECTION END
=========================== --}}
{{-- ===========================
    FAQ SECTION START
=========================== --}}

<section class="py-20 bg-gray-50">

    <div class="max-w-5xl mx-auto px-6">

        <div class="text-center mb-12">

            <span class="inline-block px-4 py-2 bg-green-100 text-[#049A3D] rounded-full font-semibold text-sm">
                FAQ
            </span>

            <h2 class="text-4xl md:text-5xl font-bold mt-5 text-gray-900">
                Frequently Asked Questions
            </h2>

            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Get quick answers to common questions about WhatsApp Business API,
                Bulk SMS, RCS Messaging and our communication solutions.
            </p>

        </div>

        <div class="space-y-4">

            <!-- FAQ 1 -->
            <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">

                <button
                    class="faq-btn w-full flex justify-between items-center p-6 text-left">

                    <span class="font-semibold text-lg text-gray-900">
                        What services does Textora Technologies provide?
                    </span>

                    <span class="faq-icon text-3xl font-light text-[#049A3D]">+</span>

                </button>

                <div class="faq-content hidden px-6 pb-6 text-gray-600 leading-8">
                    We provide WhatsApp Business API, Bulk SMS, RCS Messaging,
                    Voice OBD, OTP SMS, Promotional SMS and complete business
                    communication solutions.
                </div>

            </div>

            <!-- FAQ 2 -->
            <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">

                <button
                    class="faq-btn w-full flex justify-between items-center p-6 text-left">

                    <span class="font-semibold text-lg text-gray-900">
                        Can I get a free demo before purchasing?
                    </span>

                    <span class="faq-icon text-3xl font-light text-[#049A3D]">+</span>

                </button>

                <div class="faq-content hidden px-6 pb-6 text-gray-600 leading-8">
                    Yes. We offer a free product demo to help you understand our
                    platform and choose the best communication solution for your
                    business.
                </div>

            </div>

            <!-- FAQ 3 -->
            <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">

                <button
                    class="faq-btn w-full flex justify-between items-center p-6 text-left">

                    <span class="font-semibold text-lg text-gray-900">
                        How long does WhatsApp API setup take?
                    </span>

                    <span class="faq-icon text-3xl font-light text-[#049A3D]">+</span>

                </button>

                <div class="faq-content hidden px-6 pb-6 text-gray-600 leading-8">
                    The setup time depends on Meta verification and business
                    documents. In most cases, activation is completed within a
                    few business days after approval.
                </div>

            </div>

            <!-- FAQ 4 -->
            <div class="faq-item bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">

                <button
                    class="faq-btn w-full flex justify-between items-center p-6 text-left">

                    <span class="font-semibold text-lg text-gray-900">
                        Do you provide technical support after setup?
                    </span>

                    <span class="faq-icon text-3xl font-light text-[#049A3D]">+</span>

                </button>

                <div class="faq-content hidden px-6 pb-6 text-gray-600 leading-8">
                    Yes. Our technical team provides support for API integration,
                    campaign management, troubleshooting and onboarding.
                </div>

            </div>

        </div>

    </div>

</section>

{{-- ===========================
    FAQ SECTION END
=========================== --}}


{{-- ===========================
    PREMIUM BOTTOM CTA
=========================== --}}

<section class="relative py-16 overflow-hidden bg-[#0F172A]">

    <!-- Background -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#0D3D2C] via-[#145A40] to-[#0D3D2C] opacity-100"></div>

    <!-- Glow -->
    <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[520px] h-[520px] bg-green-500/20 rounded-full blur-[170px]"></div>
    <div class="absolute bottom-[-180px] right-[-120px] w-96 h-96 bg-emerald-400/10 rounded-full blur-[150px]"></div>
    <div class="absolute top-[-120px] left-[-100px] w-80 h-80 bg-green-300/10 rounded-full blur-[120px]"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

        <div class="rounded-[36px] border border-white/10 bg-white/5 backdrop-blur-xl shadow-2xl px-8 md:px-14 py-14 text-center">

            <!-- Badge -->
            <span class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-green-500/10 border border-green-400/20 text-green-300 text-sm font-semibold">

                <i class="fas fa-rocket"></i>
                Let's Connect

            </span>

            <!-- Heading -->
            <h2 class="mt-6 text-4xl lg:text-5xl font-black text-white leading-tight">

                Ready To Grow Your

                <span class="text-green-400">
                    Business With Textora?
                </span>

            </h2>

            <!-- Description -->
            <p class="mt-5 max-w-3xl mx-auto text-lg text-gray-300 leading-8">

                Connect with our experts and launch powerful
                <strong class="text-white">
                    WhatsApp Business API, Bulk SMS, RCS Messaging,
                    Email Marketing and Voice Solutions
                </strong>
                for your business.

            </p>

            <!-- Buttons -->
            <div class="mt-10 flex flex-col sm:flex-row justify-center gap-5">

                <a href="#contact-form"
                    class="px-9 py-4 rounded-xl bg-green-500 hover:bg-green-600 text-white font-semibold shadow-xl transition duration-300">

                    Get Free Demo

                </a>

                <a href="https://wa.me/919187054466"
                    target="_blank"
                    class="px-9 py-4 rounded-xl border border-white/20 bg-white/5 hover:bg-white hover:text-green-700 text-white font-semibold transition duration-300">

                    Chat on WhatsApp

                </a>

            </div>

        </div>

    </div>

</section>

{{-- ===========================
    PREMIUM BOTTOM CTA END
=========================== --}}
<script>
document.addEventListener("DOMContentLoaded", function () {

    /* ==========================
       FAQ Accordion
    ========================== */
    const faqButtons = document.querySelectorAll(".faq-btn");

    faqButtons.forEach(button => {

        button.addEventListener("click", function () {

            const item = this.closest(".faq-item");
            const content = item.querySelector(".faq-content");
            const icon = item.querySelector(".faq-icon");

            const isOpen = !content.classList.contains("hidden");

            // Close all FAQs
            document.querySelectorAll(".faq-item").forEach(faq => {
                faq.querySelector(".faq-content").classList.add("hidden");
                faq.querySelector(".faq-icon").textContent = "+";
            });

            // Open clicked FAQ
            if (!isOpen) {
                content.classList.remove("hidden");
                icon.textContent = "−";
            }

        });

    });

});


/* ==========================
   Contact Form Validation
========================== */
function validateContactForm(event) {

    const form = document.getElementById("contact-frm");

    if (!form.checkValidity()) {

        event.preventDefault();
        event.stopPropagation();

        alert("Please fill in all required fields correctly.");

        form.reportValidity();

        return false;
    }

    return true;
}
</script>

</x-master-page>