<x-master-page
    title="Free WhatsApp Link Generator & QR Code | Textora Technologies"
    description="Create a free WhatsApp link and QR code with a pre-filled message using Textora's WhatsApp Link Generator. Generate, copy, share and download your WhatsApp QR code instantly."
>

    {{-- =========================================================
        QR CODE LIBRARY + SEO SCHEMA
    ========================================================== --}}

    @push('head-scripts')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://textorasms.com/whatsapp-link-generator#webpage",
                    "url": "https://textorasms.com/whatsapp-link-generator",
                    "name": "Free WhatsApp Link Generator & QR Code",
                    "description": "Create a free WhatsApp link and QR code with a pre-filled message using Textora's WhatsApp Link Generator.",
                    "isPartOf": {
                        "@type": "WebSite",
                        "name": "Textora Technologies",
                        "url": "https://textorasms.com"
                    }
                },
                {
                    "@type": "SoftwareApplication",
                    "name": "Textora WhatsApp Link Generator",
                    "applicationCategory": "BusinessApplication",
                    "operatingSystem": "Web Browser",
                    "url": "https://textorasms.com/whatsapp-link-generator",
                    "description": "Free online WhatsApp link and QR code generator with pre-filled messages.",
                    "offers": {
                        "@type": "Offer",
                        "price": "0",
                        "priceCurrency": "INR"
                    }
                },
                {
                    "@type": "FAQPage",
                    "mainEntity": [
                        {
                            "@type": "Question",
                            "name": "What is a WhatsApp Link Generator?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "A WhatsApp Link Generator creates a clickable WhatsApp chat link that allows customers to start a conversation with a WhatsApp number instantly."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "Can I create a WhatsApp QR code?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Yes. Textora's WhatsApp Link Generator automatically creates a QR code for your WhatsApp chat link. You can download the QR code as a PNG image."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "Can I add a pre-filled WhatsApp message?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Yes. You can enter a custom message before generating the WhatsApp link. The message will automatically appear in the WhatsApp chat box when the link is opened."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "Is the WhatsApp Link Generator free?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Yes. Textora's WhatsApp Link Generator is free to use and does not require an account to generate a WhatsApp link or QR code."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "Can I download the WhatsApp QR code?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Yes. You can download the generated WhatsApp QR code as a PNG image and use it on websites, posters, brochures, packaging and marketing materials."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "Does Textora store my WhatsApp number or message?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "The WhatsApp link and QR code are generated directly in your browser. The generator does not need to send your number or message to a server to create the link."
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
                            "name": "WhatsApp Link Generator",
                            "item": "https://textorasms.com/whatsapp-link-generator"
                        }
                    ]
                }
            ]
        }
        </script>

    @endpush


    {{-- =========================================================
        CUSTOM STYLES
    ========================================================== --}}

    <style>

        .wa-generator-page {
            font-family: inherit;
        }

        .wa-gradient-text {
            background: linear-gradient(
                135deg,
                #0b8f3c 0%,
                #16a34a 50%,
                #087f35 100%
            );
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .wa-glow {
            position: absolute;
            border-radius: 9999px;
            filter: blur(80px);
            pointer-events: none;
        }

        .wa-input {
            transition: all 0.25s ease;
        }

        .wa-input:focus {
            border-color: #16a34a !important;
            box-shadow: 0 0 0 4px rgba(22, 163, 74, 0.10);
            outline: none;
        }

        .wa-primary-btn {
            transition: all 0.25s ease;
        }

        .wa-primary-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(22, 163, 74, 0.25);
        }

        .wa-primary-btn:active {
            transform: translateY(0);
        }

        .wa-result-card {
            animation: waResultShow 0.45s ease forwards;
        }

        @keyframes waResultShow {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .wa-feature-card {
            transition: all 0.3s ease;
        }

        .wa-feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 45px rgba(15, 23, 42, 0.08);
        }

        .wa-step-card {
            transition: all 0.3s ease;
        }

        .wa-step-card:hover {
            transform: translateY(-5px);
        }

        .wa-step-number {
            transition: all 0.3s ease;
        }

        .wa-step-card:hover .wa-step-number {
            transform: scale(1.08);
        }

        .wa-faq-item {
            transition: all 0.25s ease;
        }

        .wa-faq-item[open] {
            border-color: rgba(22, 163, 74, 0.30);
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
        }

        .wa-faq-icon {
            transition: all 0.25s ease;
        }

        .wa-faq-item[open] .wa-faq-icon {
            background: #dcfce7;
            color: #15803d;
            transform: rotate(180deg);
        }

        .wa-faq-answer {
            animation: faqAnswer 0.25s ease;
        }

        @keyframes faqAnswer {
            from {
                opacity: 0;
                transform: translateY(-5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        summary::-webkit-details-marker {
            display: none;
        }

        summary {
            list-style: none;
        }

        #waQrCode canvas,
        #waQrCode img {
            display: block;
            max-width: 100%;
            height: auto !important;
            margin: auto;
        }

        .wa-copy-success {
            background: #16a34a !important;
            color: white !important;
        }

        .wa-action-btn {
            transition: all 0.2s ease;
        }

        .wa-action-btn:hover {
            transform: translateY(-2px);
        }

        .wa-security-pill {
            background: rgba(22, 163, 74, 0.08);
            border: 1px solid rgba(22, 163, 74, 0.15);
        }

        @media (max-width: 640px) {

            .wa-hero-title {
                font-size: 2.35rem !important;
                line-height: 1.1 !important;
            }

            .wa-generator-box {
                border-radius: 22px !important;
            }

        }

    </style>


    {{-- =========================================================
        MAIN PAGE
    ========================================================== --}}

    <div class="wa-generator-page">


        {{-- =====================================================
            HERO
        ====================================================== --}}

        <section class="relative overflow-hidden bg-[#06151f] text-white">

            <div class="wa-glow w-96 h-96 bg-green-500/20 -top-40 -left-40"></div>

            <div class="wa-glow w-96 h-96 bg-emerald-400/10 top-20 right-0"></div>

            <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

                <div class="pt-32 pb-16 lg:pt-36 lg:pb-20 text-center">

                    {{-- Badge --}}

                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-green-400/20 bg-green-400/10 text-green-300 text-sm font-semibold mb-7">

                        <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>

                        Free WhatsApp Tool

                    </div>


                    {{-- Heading --}}

                    <h1 class="wa-hero-title text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight leading-tight max-w-5xl mx-auto">

                        WhatsApp Link
                        <span class="text-green-400">Generator</span>

                    </h1>


                    <p class="mt-6 text-lg md:text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed">

                        Create a WhatsApp chat link and QR code in seconds.
                        Add a pre-filled message, customize your QR code and
                        share it anywhere.

                    </p>


                    {{-- Hero mini features --}}

                    <div class="mt-8 flex flex-wrap justify-center gap-3">

                        <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-sm text-slate-300">
                            <i class="fa-solid fa-link text-green-400 mr-2"></i>
                            WhatsApp Link
                        </span>

                        <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-sm text-slate-300">
                            <i class="fa-solid fa-qrcode text-green-400 mr-2"></i>
                            QR Code
                        </span>

                        <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-sm text-slate-300">
                            <i class="fa-solid fa-message text-green-400 mr-2"></i>
                            Pre-filled Message
                        </span>

                        <span class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-sm text-slate-300">
                            <i class="fa-solid fa-bolt text-green-400 mr-2"></i>
                            Instant
                        </span>

                    </div>

                </div>

            </div>

        </section>


        {{-- =====================================================
            GENERATOR
        ====================================================== --}}

        <section class="relative bg-slate-50 py-16 lg:py-20">

            <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

                <div class="grid lg:grid-cols-12 gap-8 items-start">


                    {{-- =================================================
                        LEFT GENERATOR CARD
                    ================================================== --}}

                    <div class="lg:col-span-7">

                        <div class="wa-generator-box bg-white rounded-[28px] border border-slate-200 shadow-xl overflow-hidden">

                            {{-- Card Header --}}

                            <div class="px-6 md:px-8 py-6 border-b border-slate-100 bg-gradient-to-r from-white to-green-50/50">

                                <div class="flex items-center gap-4">

                                    <div class="w-12 h-12 rounded-2xl bg-green-100 text-green-600 flex items-center justify-center text-xl">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </div>

                                    <div>

                                        <h2 class="text-xl md:text-2xl font-bold text-slate-900">
                                            Create Your WhatsApp Link
                                        </h2>

                                        <p class="text-sm text-slate-500 mt-1">
                                            Enter your number and optional message
                                        </p>

                                    </div>

                                </div>

                            </div>


                            {{-- Form --}}

                            <div class="p-6 md:p-8">


                                {{-- WhatsApp Number --}}

                                <div>

                                    <label
                                        for="waPhoneNumber"
                                        class="block text-sm font-bold text-slate-800 mb-2"
                                    >
                                        WhatsApp Number
                                    </label>


                                    <div class="flex gap-2">

                                        <select
                                            id="waCountryCode"
                                            class="wa-input w-[105px] sm:w-[120px] px-3 py-3.5 rounded-xl border border-slate-300 bg-white text-slate-800 font-semibold cursor-pointer"
                                        >

                                            <option value="+91">🇮🇳 +91</option>
                                            <option value="+1">🇺🇸 +1</option>
                                            <option value="+44">🇬🇧 +44</option>
                                            <option value="+61">🇦🇺 +61</option>
                                            <option value="+971">🇦🇪 +971</option>
                                            <option value="+65">🇸🇬 +65</option>
                                            <option value="+60">🇲🇾 +60</option>
                                            <option value="+94">🇱🇰 +94</option>
                                            <option value="+880">🇧🇩 +880</option>
                                            <option value="+27">🇿🇦 +27</option>
                                            <option value="+49">🇩🇪 +49</option>
                                            <option value="+33">🇫🇷 +33</option>
                                            <option value="+81">🇯🇵 +81</option>
                                            <option value="+82">🇰🇷 +82</option>
                                        </select>


                                        <input
                                            type="tel"
                                            id="waPhoneNumber"
                                            maxlength="15"
                                            inputmode="numeric"
                                            autocomplete="tel"
                                            placeholder="Enter WhatsApp number"
                                            class="wa-input flex-1 min-w-0 px-4 py-3.5 rounded-xl border border-slate-300 text-slate-800 placeholder-slate-400"
                                        >

                                    </div>


                                    <p
                                        id="waPhoneError"
                                        class="hidden text-red-600 text-sm mt-2"
                                    >
                                        Please enter a valid WhatsApp number.
                                    </p>


                                    <p class="text-xs text-slate-500 mt-2">
                                        Enter the number without spaces, brackets or dashes.
                                    </p>

                                </div>


                                {{-- Message --}}

                                <div class="mt-6">

                                    <div class="flex justify-between items-center mb-2">

                                        <label
                                            for="waMessage"
                                            class="block text-sm font-bold text-slate-800"
                                        >
                                            Pre-filled Message
                                            <span class="font-normal text-slate-400">
                                                (Optional)
                                            </span>
                                        </label>

                                        <span
                                            id="waMessageCount"
                                            class="text-xs font-medium text-slate-400"
                                        >
                                            0 / 1000
                                        </span>

                                    </div>


                                    <textarea
                                        id="waMessage"
                                        rows="5"
                                        maxlength="1000"
                                        placeholder="Hello! I would like to know more about your services."
                                        class="wa-input w-full px-4 py-3.5 rounded-xl border border-slate-300 text-slate-800 placeholder-slate-400 resize-none"
                                    ></textarea>


                                    <p class="text-xs text-slate-500 mt-2">
                                        This message will appear automatically in the WhatsApp chat box.
                                    </p>

                                </div>


                                {{-- Generate Button --}}

                                <button
                                    type="button"
                                    id="waGenerateBtn"
                                    class="wa-primary-btn mt-7 w-full py-4 px-6 rounded-xl bg-gradient-to-r from-[#16a34a] to-[#0d8f3f] text-white font-bold text-base flex items-center justify-center gap-3 shadow-lg"
                                >

                                    <i class="fa-solid fa-wand-magic-sparkles"></i>

                                    Generate WhatsApp Link

                                </button>


                                {{-- Privacy --}}

                                <div class="wa-security-pill mt-5 rounded-xl px-4 py-3 flex items-start gap-3">

                                    <i class="fa-solid fa-shield-halved text-green-600 mt-0.5"></i>

                                    <p class="text-xs text-slate-600 leading-relaxed">

                                        <strong class="text-slate-800">
                                            Branded Short Link & QR Code.
                                        </strong>

                                        Generates a clean <span class="font-semibold text-green-700">w.textorasms.com</span> short link with instant WhatsApp redirection and high-resolution QR code.

                                    </p>

                                </div>


                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                        RIGHT QR CUSTOMIZATION
                    ================================================== --}}

                    <div class="lg:col-span-5">

                        <div
                            id="waQrWrapper"
                            class="bg-white rounded-[28px] border border-slate-200 shadow-xl overflow-hidden"
                        >

                            <div class="px-6 py-6 border-b border-slate-100">

                                <div class="flex items-center justify-between">

                                    <div>

                                        <h2 class="text-xl font-bold text-slate-900">
                                            QR Code
                                        </h2>

                                        <p class="text-sm text-slate-500 mt-1">
                                            Customize your QR code
                                        </p>

                                    </div>

                                    <div class="w-11 h-11 rounded-xl bg-slate-100 flex items-center justify-center text-slate-700">

                                        <i class="fa-solid fa-qrcode text-xl"></i>

                                    </div>

                                </div>

                            </div>


                            <div class="p-6">


                                {{-- QR Preview --}}

                                <div
                                    id="waQrPreview"
                                    class="min-h-[280px] rounded-2xl bg-slate-50 border border-slate-200 flex items-center justify-center p-6"
                                >

                                    <div
                                        id="waQrPlaceholder"
                                        class="text-center"
                                    >

                                        <div class="w-20 h-20 rounded-2xl bg-white shadow-sm border border-slate-200 flex items-center justify-center mx-auto mb-4">

                                            <i class="fa-solid fa-qrcode text-4xl text-slate-300"></i>

                                        </div>

                                        <p class="font-semibold text-slate-700">
                                            Your QR code will appear here
                                        </p>

                                        <p class="text-sm text-slate-400 mt-1">
                                            Generate your WhatsApp link first
                                        </p>

                                    </div>


                                    <div
                                        id="waQrCode"
                                        class="hidden bg-white p-4 rounded-2xl shadow-sm"
                                    ></div>

                                </div>


                                {{-- QR Customization --}}

                                <div class="mt-6">

                                    <h3 class="font-bold text-slate-900 mb-4">
                                        Customize QR
                                    </h3>


                                    <div class="grid sm:grid-cols-2 gap-4">


                                        {{-- QR Color --}}

                                        <div>

                                            <label
                                                for="waQrColor"
                                                class="block text-sm font-semibold text-slate-700 mb-2"
                                            >
                                                QR Color
                                            </label>

                                            <div class="flex items-center gap-3">

                                                <input
                                                    type="color"
                                                    id="waQrColor"
                                                    value="#111827"
                                                    class="w-12 h-11 rounded-lg border border-slate-300 cursor-pointer p-1 bg-white"
                                                >

                                                <span
                                                    id="waQrColorValue"
                                                    class="text-sm text-slate-500 font-mono"
                                                >
                                                    #111827
                                                </span>

                                            </div>

                                        </div>


                                        {{-- Background Color --}}

                                        <div>

                                            <label
                                                for="waBgColor"
                                                class="block text-sm font-semibold text-slate-700 mb-2"
                                            >
                                                Background
                                            </label>

                                            <div class="flex items-center gap-3">

                                                <input
                                                    type="color"
                                                    id="waBgColor"
                                                    value="#ffffff"
                                                    class="w-12 h-11 rounded-lg border border-slate-300 cursor-pointer p-1 bg-white"
                                                >

                                                <span
                                                    id="waBgColorValue"
                                                    class="text-sm text-slate-500 font-mono"
                                                >
                                                    #ffffff
                                                </span>

                                            </div>

                                        </div>


                                    </div>


                                    {{-- Size --}}

                                    <div class="mt-5">

                                        <label
                                            for="waQrSize"
                                            class="block text-sm font-semibold text-slate-700 mb-2"
                                        >
                                            QR Code Size
                                        </label>

                                        <select
                                            id="waQrSize"
                                            class="wa-input w-full px-4 py-3 rounded-xl border border-slate-300 bg-white text-slate-800"
                                        >

                                            <option value="180">Small — 180 × 180</option>
                                            <option value="220" selected>Medium — 220 × 220</option>
                                            <option value="280">Large — 280 × 280</option>
                                            <option value="350">Extra Large — 350 × 350</option>

                                        </select>

                                    </div>


                                    {{-- Reset --}}

                                    <button
                                        type="button"
                                        id="waResetQr"
                                        class="mt-4 text-sm font-semibold text-slate-500 hover:text-green-600 transition"
                                    >

                                        <i class="fa-solid fa-rotate-left mr-1"></i>

                                        Reset QR Settings

                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                    RESULT
                ================================================== --}}

                <div
                    id="waResultArea"
                    class="hidden mt-8"
                >

                    <div class="wa-result-card bg-white rounded-[28px] border border-green-200 shadow-xl overflow-hidden">


                        {{-- Result Header --}}

                        <div class="px-6 md:px-8 py-6 bg-gradient-to-r from-green-50 to-white border-b border-green-100">

                            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                                <div class="flex items-center gap-4">

                                    <div class="w-12 h-12 rounded-2xl bg-green-100 text-green-600 flex items-center justify-center">

                                        <i class="fa-solid fa-circle-check text-xl"></i>

                                    </div>

                                    <div>

                                        <h2 class="text-xl md:text-2xl font-bold text-slate-900">
                                            Your WhatsApp Link Is Ready
                                        </h2>

                                        <p class="text-sm text-slate-500 mt-1">
                                            Copy, open, share or use your QR code.
                                        </p>

                                    </div>

                                </div>


                                <span class="inline-flex items-center gap-2 text-sm font-semibold text-green-700 bg-green-100 px-4 py-2 rounded-full">

                                    <i class="fa-solid fa-check"></i>

                                    Generated Successfully

                                </span>

                            </div>

                        </div>


                        {{-- Result Content --}}

                        <div class="p-6 md:p-8">


                            <label
                                for="waGeneratedLink"
                                class="block text-sm font-bold text-slate-800 mb-2"
                            >
                                Your WhatsApp Link
                            </label>


                            <div class="flex gap-2">

                                <input
                                    type="text"
                                    id="waGeneratedLink"
                                    readonly
                                    class="wa-input flex-1 min-w-0 px-4 py-3.5 rounded-xl border border-slate-300 bg-slate-50 text-slate-700 text-sm"
                                >


                                <button
                                    type="button"
                                    id="waCopyBtn"
                                    title="Copy Link"
                                    class="wa-action-btn shrink-0 w-12 h-12 mt-0.5 rounded-xl bg-slate-900 text-white flex items-center justify-center hover:bg-green-600"
                                >

                                    <i class="fa-regular fa-copy"></i>

                                </button>

                            </div>


                            {{-- Actions --}}

                            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-3 mt-5">


                                <button
                                    type="button"
                                    id="waOpenBtn"
                                    class="wa-action-btn flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-semibold"
                                >

                                    <i class="fa-brands fa-whatsapp"></i>

                                    Open WhatsApp

                                </button>


                                <button
                                    type="button"
                                    id="waDownloadBtn"
                                    class="wa-action-btn flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-semibold"
                                >

                                    <i class="fa-solid fa-download"></i>

                                    Download QR

                                </button>


                                <button
                                    type="button"
                                    id="waShareBtn"
                                    class="wa-action-btn flex items-center justify-center gap-2 px-4 py-3 rounded-xl border border-slate-300 bg-white hover:border-green-500 hover:text-green-600 text-slate-700 font-semibold"
                                >

                                    <i class="fa-solid fa-share-nodes"></i>

                                    Share

                                </button>


                                <button
                                    type="button"
                                    id="waRegenerateBtn"
                                    class="wa-action-btn flex items-center justify-center gap-2 px-4 py-3 rounded-xl border border-slate-300 bg-white hover:border-green-500 hover:text-green-600 text-slate-700 font-semibold"
                                >

                                    <i class="fa-solid fa-rotate"></i>

                                    Regenerate

                                </button>


                            </div>


                            {{-- Small note --}}

                            <div class="mt-5 flex items-start gap-2 text-xs text-slate-500">

                                <i class="fa-solid fa-circle-info mt-0.5"></i>

                                <p>
                                    Anyone with this link can start a WhatsApp conversation with the number associated with it.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =====================================================
            FEATURES
        ====================================================== --}}

        <section class="py-20 bg-white">

            <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">


                <div class="text-center max-w-3xl mx-auto">

                    <span class="text-green-600 font-bold text-sm uppercase tracking-wider">
                        Simple. Fast. Powerful.
                    </span>

                    <h2 class="mt-3 text-3xl md:text-4xl font-extrabold text-slate-900">
                        Everything You Need to Share WhatsApp
                    </h2>

                    <p class="mt-4 text-slate-600 text-lg">
                        Create professional WhatsApp links and QR codes without complicated software or technical setup.
                    </p>

                </div>


                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">


                    {{-- Feature 1 --}}

                    <div class="wa-feature-card p-7 rounded-3xl border border-slate-200 bg-white">

                        <div class="w-14 h-14 rounded-2xl bg-green-100 text-green-600 flex items-center justify-center text-xl">

                            <i class="fa-solid fa-link"></i>

                        </div>

                        <h3 class="mt-6 text-xl font-bold text-slate-900">
                            Instant WhatsApp Link
                        </h3>

                        <p class="mt-3 text-slate-600 leading-relaxed">
                            Generate a direct WhatsApp chat link that opens a conversation instantly.
                        </p>

                    </div>


                    {{-- Feature 2 --}}

                    <div class="wa-feature-card p-7 rounded-3xl border border-slate-200 bg-white">

                        <div class="w-14 h-14 rounded-2xl bg-blue-100 text-blue-600 flex items-center justify-center text-xl">

                            <i class="fa-solid fa-qrcode"></i>

                        </div>

                        <h3 class="mt-6 text-xl font-bold text-slate-900">
                            QR Code Generator
                        </h3>

                        <p class="mt-3 text-slate-600 leading-relaxed">
                            Automatically generate a scannable WhatsApp QR code and download it as PNG.
                        </p>

                    </div>


                    {{-- Feature 3 --}}

                    <div class="wa-feature-card p-7 rounded-3xl border border-slate-200 bg-white">

                        <div class="w-14 h-14 rounded-2xl bg-purple-100 text-purple-600 flex items-center justify-center text-xl">

                            <i class="fa-solid fa-message"></i>

                        </div>

                        <h3 class="mt-6 text-xl font-bold text-slate-900">
                            Pre-filled Messages
                        </h3>

                        <p class="mt-3 text-slate-600 leading-relaxed">
                            Add a ready-made message so customers know exactly what to ask when they contact you.
                        </p>

                    </div>


                    {{-- Feature 4 --}}

                    <div class="wa-feature-card p-7 rounded-3xl border border-slate-200 bg-white">

                        <div class="w-14 h-14 rounded-2xl bg-orange-100 text-orange-600 flex items-center justify-center text-xl">

                            <i class="fa-solid fa-palette"></i>

                        </div>

                        <h3 class="mt-6 text-xl font-bold text-slate-900">
                            QR Customization
                        </h3>

                        <p class="mt-3 text-slate-600 leading-relaxed">
                            Change QR color, background color and size to match your marketing material.
                        </p>

                    </div>


                    {{-- Feature 5 --}}

                    <div class="wa-feature-card p-7 rounded-3xl border border-slate-200 bg-white">

                        <div class="w-14 h-14 rounded-2xl bg-pink-100 text-pink-600 flex items-center justify-center text-xl">

                            <i class="fa-solid fa-share-nodes"></i>

                        </div>

                        <h3 class="mt-6 text-xl font-bold text-slate-900">
                            Share Anywhere
                        </h3>

                        <p class="mt-3 text-slate-600 leading-relaxed">
                            Copy your link or use the native share option on supported mobile and desktop browsers.
                        </p>

                    </div>


                    {{-- Feature 6 --}}

                    <div class="wa-feature-card p-7 rounded-3xl border border-slate-200 bg-white">

                        <div class="w-14 h-14 rounded-2xl bg-cyan-100 text-cyan-600 flex items-center justify-center text-xl">

                            <i class="fa-solid fa-shield-halved"></i>

                        </div>

                        <h3 class="mt-6 text-xl font-bold text-slate-900">
                            Browser-Based
                        </h3>

                        <p class="mt-3 text-slate-600 leading-relaxed">
                            The link is created directly in your browser without requiring a database or server-side generation.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        {{-- =====================================================
            HOW IT WORKS
        ====================================================== --}}

        <section class="py-20 bg-slate-50">

            <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">


                <div class="text-center max-w-3xl mx-auto">

                    <span class="text-green-600 font-bold text-sm uppercase tracking-wider">
                        How It Works
                    </span>

                    <h2 class="mt-3 text-3xl md:text-4xl font-extrabold text-slate-900">
                        Create Your WhatsApp Link in 3 Steps
                    </h2>

                </div>


                <div class="grid md:grid-cols-3 gap-8 mt-12">


                    {{-- Step 1 --}}

                    <div class="wa-step-card relative text-center bg-white rounded-3xl p-8 border border-slate-200">

                        <div class="wa-step-number mx-auto w-16 h-16 rounded-2xl bg-green-600 text-white flex items-center justify-center text-2xl font-extrabold shadow-lg">
                            1
                        </div>

                        <h3 class="mt-6 text-xl font-bold text-slate-900">
                            Enter Number
                        </h3>

                        <p class="mt-3 text-slate-600">
                            Select the country code and enter your WhatsApp number.
                        </p>

                    </div>


                    {{-- Step 2 --}}

                    <div class="wa-step-card relative text-center bg-white rounded-3xl p-8 border border-slate-200">

                        <div class="wa-step-number mx-auto w-16 h-16 rounded-2xl bg-green-600 text-white flex items-center justify-center text-2xl font-extrabold shadow-lg">
                            2
                        </div>

                        <h3 class="mt-6 text-xl font-bold text-slate-900">
                            Add Message
                        </h3>

                        <p class="mt-3 text-slate-600">
                            Add an optional pre-filled message for your customers.
                        </p>

                    </div>


                    {{-- Step 3 --}}

                    <div class="wa-step-card relative text-center bg-white rounded-3xl p-8 border border-slate-200">

                        <div class="wa-step-number mx-auto w-16 h-16 rounded-2xl bg-green-600 text-white flex items-center justify-center text-2xl font-extrabold shadow-lg">
                            3
                        </div>

                        <h3 class="mt-6 text-xl font-bold text-slate-900">
                            Generate & Share
                        </h3>

                        <p class="mt-3 text-slate-600">
                            Generate your link and QR code, then share it anywhere.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        {{-- =====================================================
            USE CASES
        ====================================================== --}}

        <section class="py-20 bg-white">

            <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">


                <div class="grid lg:grid-cols-2 gap-12 items-center">


                    <div>

                        <span class="text-green-600 font-bold text-sm uppercase tracking-wider">
                            Business Use Cases
                        </span>

                        <h2 class="mt-3 text-3xl md:text-4xl font-extrabold text-slate-900 leading-tight">
                            Turn Every Customer Touchpoint Into a WhatsApp Conversation
                        </h2>

                        <p class="mt-5 text-lg text-slate-600 leading-relaxed">
                            Use your WhatsApp link and QR code across your digital and offline marketing channels.
                        </p>


                        <div class="mt-8 space-y-4">


                            <div class="flex items-start gap-4">

                                <div class="w-10 h-10 rounded-xl bg-green-100 text-green-600 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-globe"></i>
                                </div>

                                <div>
                                    <h3 class="font-bold text-slate-900">
                                        Websites & Landing Pages
                                    </h3>

                                    <p class="text-sm text-slate-600 mt-1">
                                        Add a direct WhatsApp CTA to your website.
                                    </p>
                                </div>

                            </div>


                            <div class="flex items-start gap-4">

                                <div class="w-10 h-10 rounded-xl bg-green-100 text-green-600 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-print"></i>
                                </div>

                                <div>
                                    <h3 class="font-bold text-slate-900">
                                        Posters & Brochures
                                    </h3>

                                    <p class="text-sm text-slate-600 mt-1">
                                        Print your QR code on brochures, banners and flyers.
                                    </p>
                                </div>

                            </div>


                            <div class="flex items-start gap-4">

                                <div class="w-10 h-10 rounded-xl bg-green-100 text-green-600 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-box"></i>
                                </div>

                                <div>
                                    <h3 class="font-bold text-slate-900">
                                        Product Packaging
                                    </h3>

                                    <p class="text-sm text-slate-600 mt-1">
                                        Let customers scan your packaging and contact your business.
                                    </p>
                                </div>

                            </div>


                            <div class="flex items-start gap-4">

                                <div class="w-10 h-10 rounded-xl bg-green-100 text-green-600 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-store"></i>
                                </div>

                                <div>
                                    <h3 class="font-bold text-slate-900">
                                        Shops & Retail Stores
                                    </h3>

                                    <p class="text-sm text-slate-600 mt-1">
                                        Display your QR code at counters, reception desks and stores.
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Visual Card --}}

                    <div>

                        <div class="relative rounded-[32px] bg-gradient-to-br from-[#06151f] to-[#0b3825] p-8 md:p-12 overflow-hidden">

                            <div class="absolute w-64 h-64 bg-green-400/20 rounded-full blur-3xl -top-20 -right-20"></div>

                            <div class="relative text-center">

                                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 text-green-300 text-sm font-semibold">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    Connect on WhatsApp
                                </div>


                                <div class="mt-8 bg-white rounded-3xl p-7 max-w-sm mx-auto shadow-2xl">

                                    <div class="w-14 h-14 rounded-full bg-green-100 text-green-600 flex items-center justify-center mx-auto">

                                        <i class="fa-brands fa-whatsapp text-2xl"></i>

                                    </div>

                                    <h3 class="mt-5 text-xl font-bold text-slate-900">
                                        Start a Conversation
                                    </h3>

                                    <p class="text-sm text-slate-500 mt-2">
                                        Scan the QR code or click the WhatsApp link.
                                    </p>

                                    <div class="mt-6 rounded-2xl bg-slate-100 p-5">

                                        <i class="fa-solid fa-qrcode text-7xl text-slate-800"></i>

                                    </div>

                                    <div class="mt-5 py-3 rounded-xl bg-green-600 text-white font-bold">
                                        Chat on WhatsApp
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =====================================================
            FAQ
        ====================================================== --}}

        <section class="py-20 bg-slate-50">

            <div class="max-w-4xl mx-auto px-5 sm:px-6 lg:px-8">


                <div class="text-center">

                    <span class="text-green-600 font-bold text-sm uppercase tracking-wider">
                        FAQ
                    </span>

                    <h2 class="mt-3 text-3xl md:text-4xl font-extrabold text-slate-900">
                        Frequently Asked Questions
                    </h2>

                    <p class="mt-4 text-slate-600">
                        Everything you need to know about WhatsApp links and QR codes.
                    </p>

                </div>


                <div class="mt-10 space-y-4">


                    {{-- FAQ 1 --}}

                    <details class="wa-faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden">

                        <summary class="cursor-pointer px-5 md:px-6 py-5 flex items-center justify-between gap-5">

                            <span class="font-bold text-slate-900">
                                What is a WhatsApp Link Generator?
                            </span>

                            <span class="wa-faq-icon shrink-0 w-9 h-9 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center font-bold">
                                +
                            </span>

                        </summary>

                        <div class="wa-faq-answer px-5 md:px-6 pb-5">

                            <p class="text-slate-600 leading-relaxed">
                                A WhatsApp Link Generator creates a clickable WhatsApp chat link that allows customers to start a conversation with a WhatsApp number instantly.
                            </p>

                        </div>

                    </details>


                    {{-- FAQ 2 --}}

                    <details class="wa-faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden">

                        <summary class="cursor-pointer px-5 md:px-6 py-5 flex items-center justify-between gap-5">

                            <span class="font-bold text-slate-900">
                                Can I create a WhatsApp QR code?
                            </span>

                            <span class="wa-faq-icon shrink-0 w-9 h-9 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center font-bold">
                                +
                            </span>

                        </summary>

                        <div class="wa-faq-answer px-5 md:px-6 pb-5">

                            <p class="text-slate-600 leading-relaxed">
                                Yes. Textora's WhatsApp Link Generator automatically creates a QR code for your WhatsApp chat link. You can download the QR code as a PNG image.
                            </p>

                        </div>

                    </details>


                    {{-- FAQ 3 --}}

                    <details class="wa-faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden">

                        <summary class="cursor-pointer px-5 md:px-6 py-5 flex items-center justify-between gap-5">

                            <span class="font-bold text-slate-900">
                                Can I add a pre-filled WhatsApp message?
                            </span>

                            <span class="wa-faq-icon shrink-0 w-9 h-9 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center font-bold">
                                +
                            </span>

                        </summary>

                        <div class="wa-faq-answer px-5 md:px-6 pb-5">

                            <p class="text-slate-600 leading-relaxed">
                                Yes. Enter your custom message before generating the link. The message will automatically appear in the WhatsApp chat box when the link is opened.
                            </p>

                        </div>

                    </details>


                    {{-- FAQ 4 --}}

                    <details class="wa-faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden">

                        <summary class="cursor-pointer px-5 md:px-6 py-5 flex items-center justify-between gap-5">

                            <span class="font-bold text-slate-900">
                                Is the WhatsApp Link Generator free?
                            </span>

                            <span class="wa-faq-icon shrink-0 w-9 h-9 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center font-bold">
                                +
                            </span>

                        </summary>

                        <div class="wa-faq-answer px-5 md:px-6 pb-5">

                            <p class="text-slate-600 leading-relaxed">
                                Yes. Textora's WhatsApp Link Generator is free to use and does not require an account to generate a WhatsApp link or QR code.
                            </p>

                        </div>

                    </details>


                    {{-- FAQ 5 --}}

                    <details class="wa-faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden">

                        <summary class="cursor-pointer px-5 md:px-6 py-5 flex items-center justify-between gap-5">

                            <span class="font-bold text-slate-900">
                                Can I download the WhatsApp QR code?
                            </span>

                            <span class="wa-faq-icon shrink-0 w-9 h-9 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center font-bold">
                                +
                            </span>

                        </summary>

                        <div class="wa-faq-answer px-5 md:px-6 pb-5">

                            <p class="text-slate-600 leading-relaxed">
                                Yes. You can download the generated QR code as a PNG image and use it on websites, posters, brochures, packaging and marketing materials.
                            </p>

                        </div>

                    </details>


                    {{-- FAQ 6 --}}

                    <details class="wa-faq-item bg-white border border-slate-200 rounded-2xl overflow-hidden">

                        <summary class="cursor-pointer px-5 md:px-6 py-5 flex items-center justify-between gap-5">

                            <span class="font-bold text-slate-900">
                                Does Textora store my WhatsApp number or message?
                            </span>

                            <span class="wa-faq-icon shrink-0 w-9 h-9 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center font-bold">
                                +
                            </span>

                        </summary>

                        <div class="wa-faq-answer px-5 md:px-6 pb-5">

                            <p class="text-slate-600 leading-relaxed">
                                The WhatsApp link and QR code are generated directly in your browser. The generator does not need to send your number or message to a server to create the link.
                            </p>

                        </div>

                    </details>


                </div>

            </div>

        </section>


        {{-- =====================================================
            CTA
        ====================================================== --}}

        <section class="relative overflow-hidden bg-[#06151f] text-white py-20">

            <div class="absolute w-96 h-96 rounded-full bg-green-500/10 blur-3xl -top-40 left-1/4"></div>

            <div class="relative max-w-5xl mx-auto px-5 text-center">

                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-green-400/10 border border-green-400/20 text-green-300 text-sm font-semibold">

                    <i class="fa-brands fa-whatsapp"></i>

                    Grow Your Business With WhatsApp

                </div>


                <h2 class="mt-6 text-3xl md:text-5xl font-extrabold leading-tight">

                    Need More Than a WhatsApp Link?

                </h2>


                <p class="mt-5 text-lg text-slate-300 max-w-2xl mx-auto">

                    Explore Textora's WhatsApp Business API solutions for business messaging, automation, templates, customer engagement and more.

                </p>


                <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">

                    <a
                        href="{{ url('/whatsapp-business-api') }}"
                        class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-xl bg-green-600 hover:bg-green-700 text-white font-bold transition"
                    >

                        Explore WhatsApp API

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>


                    <a
                        href="{{ url('/contact-us') }}"
                        class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-xl border border-white/20 bg-white/5 hover:bg-white/10 text-white font-bold transition"
                    >

                        Talk to Textora

                        <i class="fa-solid fa-headset"></i>

                    </a>

                </div>

            </div>

        </section>


    </div>


    {{-- =========================================================
        JAVASCRIPT
    ========================================================== --}}

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            /* =====================================================
               ELEMENTS
            ====================================================== */

            const countryCode =
                document.getElementById('waCountryCode');

            const phoneNumber =
                document.getElementById('waPhoneNumber');

            const message =
                document.getElementById('waMessage');

            const messageCount =
                document.getElementById('waMessageCount');

            const generateBtn =
                document.getElementById('waGenerateBtn');

            const phoneError =
                document.getElementById('waPhoneError');

            const qrCode =
                document.getElementById('waQrCode');

            const qrPlaceholder =
                document.getElementById('waQrPlaceholder');

            const resultArea =
                document.getElementById('waResultArea');

            const generatedLink =
                document.getElementById('waGeneratedLink');

            const copyBtn =
                document.getElementById('waCopyBtn');

            const openBtn =
                document.getElementById('waOpenBtn');

            const downloadBtn =
                document.getElementById('waDownloadBtn');

            const shareBtn =
                document.getElementById('waShareBtn');

            const regenerateBtn =
                document.getElementById('waRegenerateBtn');

            const qrColor =
                document.getElementById('waQrColor');

            const bgColor =
                document.getElementById('waBgColor');

            const qrSize =
                document.getElementById('waQrSize');

            const resetQr =
                document.getElementById('waResetQr');

            const qrColorValue =
                document.getElementById('waQrColorValue');

            const bgColorValue =
                document.getElementById('waBgColorValue');


            let currentWhatsappLink = '';


            /* =====================================================
               MESSAGE COUNTER
            ====================================================== */

            function updateMessageCount() {

                const length = message.value.length;

                messageCount.textContent =
                    length + ' / 1000';

            }

            message.addEventListener(
                'input',
                updateMessageCount
            );

            updateMessageCount();


            /* =====================================================
               PHONE INPUT
            ====================================================== */

            phoneNumber.addEventListener(
                'input',
                function () {

                    this.value =
                        this.value.replace(/\D/g, '');

                    phoneError.classList.add('hidden');

                }
            );


            /* =====================================================
               CREATE WHATSAPP LINK
            ====================================================== */

            function createWhatsappLink() {

                const code =
                    countryCode.value;

                const number =
                    phoneNumber.value.trim();

                const text =
                    message.value.trim();


                if (!number || number.length < 6) {

                    phoneError.classList.remove('hidden');

                    phoneNumber.focus();

                    return null;

                }


                phoneError.classList.add('hidden');


                const fullNumber =
                    code.replace(/\D/g, '') +
                    number;


                let link =
                    'https://wa.me/' +
                    fullNumber;


                if (text.length > 0) {

                    link +=
                        '?text=' +
                        encodeURIComponent(text);

                }


                return link;

            }


            /* =====================================================
               GENERATE QR CODE
            ====================================================== */

            function generateQRCode(link) {

                if (!link) {
                    return;
                }


                if (typeof QRCode === 'undefined') {

                    alert(
                        'QR Code library could not be loaded. Please refresh the page and try again.'
                    );

                    return;

                }


                qrCode.innerHTML = '';

                qrCode.classList.remove('hidden');

                qrPlaceholder.classList.add('hidden');


                const size =
                    parseInt(qrSize.value, 10);


                new QRCode(qrCode, {

                    text: link,

                    width: size,

                    height: size,

                    colorDark: qrColor.value,

                    colorLight: bgColor.value,

                    correctLevel:
                        QRCode.CorrectLevel.H

                });

            }


            /* =====================================================
               GENERATE (BRANDED SHORT LINK)
            ====================================================== */

            async function generate() {

                const code =
                    countryCode.value;

                const number =
                    phoneNumber.value.trim();

                const text =
                    message.value.trim();

                if (!number || number.length < 6) {

                    phoneError.classList.remove('hidden');

                    phoneNumber.focus();

                    return;

                }

                phoneError.classList.add('hidden');

                const originalBtnContent =
                    generateBtn.innerHTML;

                generateBtn.disabled = true;
                generateBtn.innerHTML =
                    '<i class="fa-solid fa-circle-notch fa-spin"></i> Generating Short Link...';

                const csrfToken =
                    document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

                try {

                    const response = await fetch('/whatsapp-links/generate', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            country_code: code,
                            phone_number: number,
                            message: text
                        })
                    });

                    const data = await response.json();

                    if (response.ok && data.status === 'success') {

                        currentWhatsappLink =
                            data.short_url;

                        generatedLink.value =
                            data.short_url;

                        resultArea.classList.remove(
                            'hidden'
                        );

                        generateQRCode(data.short_url);

                        setTimeout(function () {
                            resultArea.scrollIntoView({
                                behavior: 'smooth',
                                block: 'center'
                            });
                        }, 100);

                    } else {
                        // Fallback to client-side direct link if backend error
                        console.warn('Backend returned error, falling back to direct link:', data);
                        const fallbackLink = createWhatsappLink();
                        if (fallbackLink) {
                            currentWhatsappLink = fallbackLink;
                            generatedLink.value = fallbackLink;
                            resultArea.classList.remove('hidden');
                            generateQRCode(fallbackLink);
                            setTimeout(function () {
                                resultArea.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'center'
                                });
                            }, 100);
                        }
                    }

                } catch (err) {
                    console.error('Fetch error, falling back to direct link:', err);
                    const fallbackLink = createWhatsappLink();
                    if (fallbackLink) {
                        currentWhatsappLink = fallbackLink;
                        generatedLink.value = fallbackLink;
                        resultArea.classList.remove('hidden');
                        generateQRCode(fallbackLink);
                        setTimeout(function () {
                            resultArea.scrollIntoView({
                                behavior: 'smooth',
                                block: 'center'
                            });
                        }, 100);
                    }
                } finally {
                    generateBtn.disabled = false;
                    generateBtn.innerHTML = originalBtnContent;
                }

            }


            generateBtn.addEventListener(
                'click',
                generate
            );


            /* =====================================================
               ENTER KEY
            ====================================================== */

            phoneNumber.addEventListener(
                'keydown',
                function (event) {

                    if (event.key === 'Enter') {

                        event.preventDefault();

                        generate();

                    }

                }
            );


            /* =====================================================
               COPY LINK
            ====================================================== */

            copyBtn.addEventListener(
                'click',
                async function () {

                    if (!currentWhatsappLink) {
                        return;
                    }


                    const original =
                        copyBtn.innerHTML;


                    try {

                        if (
                            navigator.clipboard &&
                            window.isSecureContext
                        ) {

                            await navigator.clipboard.writeText(
                                currentWhatsappLink
                            );

                        } else {

                            generatedLink.select();

                            document.execCommand('copy');

                        }


                        copyBtn.innerHTML =
                            '<i class="fa-solid fa-check"></i>';

                        copyBtn.classList.add(
                            'wa-copy-success'
                        );


                        setTimeout(function () {

                            copyBtn.innerHTML =
                                original;

                            copyBtn.classList.remove(
                                'wa-copy-success'
                            );

                        }, 1600);


                    } catch (error) {

                        generatedLink.select();

                        document.execCommand('copy');

                        alert('WhatsApp link copied.');

                    }

                }
            );


            /* =====================================================
               OPEN WHATSAPP
            ====================================================== */

            openBtn.addEventListener(
                'click',
                function () {

                    if (!currentWhatsappLink) {
                        return;
                    }


                    window.open(
                        currentWhatsappLink,
                        '_blank',
                        'noopener,noreferrer'
                    );

                }
            );


            /* =====================================================
               DOWNLOAD QR
            ====================================================== */

            downloadBtn.addEventListener(
                'click',
                function () {

                    const canvas =
                        qrCode.querySelector('canvas');

                    const image =
                        qrCode.querySelector('img');


                    if (!canvas && !image) {

                        alert(
                            'Please generate the QR code first.'
                        );

                        return;

                    }


                    const downloadLink =
                        document.createElement('a');


                    downloadLink.download =
                        'textora-whatsapp-qr.png';


                    if (canvas) {

                        downloadLink.href =
                            canvas.toDataURL('image/png');

                    } else {

                        downloadLink.href =
                            image.src;

                    }


                    document.body.appendChild(
                        downloadLink
                    );


                    downloadLink.click();


                    document.body.removeChild(
                        downloadLink
                    );

                }
            );


            /* =====================================================
               SHARE
            ====================================================== */

            shareBtn.addEventListener(
                'click',
                async function () {

                    if (!currentWhatsappLink) {
                        return;
                    }


                    if (navigator.share) {

                        try {

                            await navigator.share({

                                title:
                                    'Chat with us on WhatsApp',

                                text:
                                    'Connect with us on WhatsApp',

                                url:
                                    currentWhatsappLink

                            });

                        } catch (error) {

                            // User cancelled share

                        }

                    } else {

                        try {

                            if (
                                navigator.clipboard &&
                                window.isSecureContext
                            ) {

                                await navigator.clipboard.writeText(
                                    currentWhatsappLink
                                );

                                const original =
                                    shareBtn.innerHTML;


                                shareBtn.innerHTML =
                                    '<i class="fa-solid fa-check"></i> Link Copied';


                                setTimeout(function () {

                                    shareBtn.innerHTML =
                                        original;

                                }, 1600);

                            } else {

                                generatedLink.select();

                                document.execCommand('copy');

                                alert(
                                    'WhatsApp link copied.'
                                );

                            }

                        } catch (error) {

                            alert(
                                'Please copy the WhatsApp link manually.'
                            );

                        }

                    }

                }
            );


            /* =====================================================
               REGENERATE
            ====================================================== */

            regenerateBtn.addEventListener(
                'click',
                function () {

                    generate();

                }
            );


            /* =====================================================
               QR CUSTOMIZATION
            ====================================================== */

            function regenerateQrIfAvailable() {

                qrColorValue.textContent =
                    qrColor.value;

                bgColorValue.textContent =
                    bgColor.value;


                if (currentWhatsappLink) {

                    generateQRCode(
                        currentWhatsappLink
                    );

                }

            }


            qrColor.addEventListener(
                'input',
                regenerateQrIfAvailable
            );


            bgColor.addEventListener(
                'input',
                regenerateQrIfAvailable
            );


            qrSize.addEventListener(
                'change',
                regenerateQrIfAvailable
            );


            /* =====================================================
               RESET QR
            ====================================================== */

            resetQr.addEventListener(
                'click',
                function () {

                    qrColor.value =
                        '#111827';

                    bgColor.value =
                        '#ffffff';

                    qrSize.value =
                        '220';


                    qrColorValue.textContent =
                        '#111827';

                    bgColorValue.textContent =
                        '#ffffff';


                    if (currentWhatsappLink) {

                        generateQRCode(
                            currentWhatsappLink
                        );

                    }

                }
            );


            /* =====================================================
               FAQ ACCORDION
            ====================================================== */

            const faqItems =
                document.querySelectorAll(
                    '.wa-faq-item'
                );


            faqItems.forEach(function (item) {

                item.addEventListener(
                    'toggle',
                    function () {

                        const icon =
                            item.querySelector(
                                '.wa-faq-icon'
                            );


                        if (item.open) {


                            faqItems.forEach(
                                function (otherItem) {

                                    if (
                                        otherItem !== item &&
                                        otherItem.open
                                    ) {

                                        otherItem.open =
                                            false;

                                    }

                                }
                            );


                            if (icon) {

                                icon.textContent =
                                    '−';

                            }


                        } else {

                            if (icon) {

                                icon.textContent =
                                    '+';

                            }

                        }

                    }
                );

            });


        });

    </script>


</x-master-page>