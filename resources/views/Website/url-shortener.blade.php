<x-master-page
    title="Free URL Shortener | Create Short Links | Textora"
    description="Shorten long URLs instantly with Textora Free URL Shortener. Create clean, shareable short links with QR codes and click counting."
>

@php
    $shortUrl = session('short_url');
    $originalUrl = session('original_url');
@endphp

@push('head-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
@endpush
@push('head-scripts')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "WebPage",
            "@id": "https://textorasms.com/url-shortener#webpage",
            "url": "https://textorasms.com/url-shortener",
            "name": "Free URL Shortener | Create Short Links | Textora",
            "description": "Shorten long URLs instantly with Textora Free URL Shortener. Create clean, shareable short links with QR codes and click counting.",
            "isPartOf": {
                "@id": "https://textorasms.com/#website"
            },
            "breadcrumb": {
                "@id": "https://textorasms.com/url-shortener#breadcrumb"
            },
            "mainEntity": {
                "@id": "https://textorasms.com/url-shortener#software"
            }
        },
        {
            "@type": "SoftwareApplication",
            "@id": "https://textorasms.com/url-shortener#software",
            "name": "Textora URL Shortener",
            "url": "https://textorasms.com/url-shortener",
            "description": "A free online URL shortening tool to create short, shareable links with QR code generation and basic redirect counting.",
            "applicationCategory": "UtilitiesApplication",
            "operatingSystem": "Web",
            "offers": {
                "@type": "Offer",
                "price": "0",
                "priceCurrency": "INR"
            }
        },
        {
            "@type": "FAQPage",
            "@id": "https://textorasms.com/url-shortener#faq",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What is a URL Shortener?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "A URL Shortener converts a long website address into a shorter link that is easier to share through messages, emails and social media."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Is Textora URL Shortener free to use?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. You can use the Textora URL Shortener to create short links without paying for basic link generation."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I create a QR code for my short link?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. After generating your short URL, you can create and download a QR code that points to your shortened link."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I share short links on WhatsApp and SMS?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. You can copy your short URL and share it through WhatsApp, SMS, email and other communication channels."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Does Textora track clicks?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The current version records total redirects for generated short links. Unique visitor, device and geographic analytics are not included in this basic version."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I shorten any website URL?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "You can submit valid HTTP and HTTPS URLs. Links should lead to legitimate destinations. Malicious, phishing and abusive links should not be submitted."
                    }
                }
            ]
        },
        {
            "@type": "BreadcrumbList",
            "@id": "https://textorasms.com/url-shortener#breadcrumb",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "https://textorasms.com"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "URL Shortener",
                    "item": "https://textorasms.com/url-shortener"
                }
            ]
        }
    ]
}
</script>
@endpush

<style>
/* =====================================================
   TEXTORA URL SHORTENER - PREMIUM SAAS DESIGN
===================================================== */

.url-page {
    color: #172033;
    background: #ffffff;
    overflow: hidden;
    --url-green: #087849;
    --url-bright: #12a568;
    --url-dark: #064e35;
    --url-muted: #64748b;
    --url-border: #e5eee8;
}

.url-page * {
    box-sizing: border-box;
}

.url-container {
    max-width: 1200px;
    margin: auto;
    padding: 0 24px;
}

.url-green { color: var(--url-green); }

.url-gradient-text {
    background: linear-gradient(110deg, #087849, #16a36a);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.url-hero {
    position: relative;
    padding: 85px 0 75px;
    background:
        radial-gradient(circle at 85% 10%, rgba(22,163,106,.11), transparent 28%),
        radial-gradient(circle at 10% 90%, rgba(8,120,73,.07), transparent 28%),
        #ffffff;
}

.url-hero-inner {
    position: relative;
    z-index: 1;
    text-align: center;
}

.url-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 10px 17px;
    border: 1px solid #d8eee2;
    border-radius: 50px;
    background: #f1faf5;
    color: #087849;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.3px;
}

.url-hero h1 {
    max-width: 850px;
    margin: 25px auto 18px;
    color: #14221d;
    font-size: clamp(36px, 5vw, 60px);
    font-weight: 900;
    letter-spacing: -2px;
    line-height: 1.12;
}

.url-hero-description {
    max-width: 700px;
    margin: auto;
    color: #64748b;
    font-size: 16px;
    line-height: 1.9;
}

.url-hero-pills {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 28px;
}

.url-hero-pills span {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 15px;
    border: 1px solid #e5eee8;
    border-radius: 50px;
    background: #fff;
    color: #475569;
    font-size: 12px;
    font-weight: 700;
}

.url-hero-pills i { color: #0b9b5b; }

.url-section { padding: 76px 0; }

.url-soft-section { background: #f6faf7; }

.url-section-heading {
    max-width: 740px;
    margin: 0 auto 42px;
    text-align: center;
}

.url-section-heading .eyebrow {
    color: #087849;
    font-size: 11px;
    font-weight: 900;
    letter-spacing: 1.6px;
}

.url-section-heading h2 {
    margin-top: 12px;
    color: #172033;
    font-size: clamp(27px, 3.5vw, 40px);
    font-weight: 850;
    line-height: 1.2;
    letter-spacing: -.9px;
}

.url-section-heading p {
    margin-top: 13px;
    color: #64748b;
    font-size: 14px;
    line-height: 1.9;
}

/* GENERATOR */

.url-generator-card {
    height: 100%;
    overflow: hidden;
    border: 1px solid #e4eee7;
    border-radius: 23px;
    background: #fff;
    box-shadow: 0 15px 45px rgba(15,50,32,.055);
}

.url-card-heading {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 25px 27px;
    border-bottom: 1px solid #edf2ee;
}

.url-card-icon {
    display: flex;
    width: 48px;
    height: 48px;
    flex-shrink: 0;
    align-items: center;
    justify-content: center;
    border-radius: 15px;
    background: #eaf8f0;
    color: #087849;
    font-size: 20px;
}

.url-card-heading h3 {
    color: #172033;
    font-size: 17px;
    font-weight: 850;
}

.url-card-heading p {
    margin-top: 4px;
    color: #94a3b8;
    font-size: 12px;
}

.url-card-body { padding: 28px; }

.url-label {
    display: block;
    margin-bottom: 9px;
    color: #334155;
    font-size: 13px;
    font-weight: 800;
}

.url-input {
    width: 100%;
    min-width: 0;
    padding: 14px 15px;
    border: 1px solid #dce7e0;
    border-radius: 11px;
    outline: none;
    background: #fff;
    color: #172033;
    font-size: 13px;
    transition: .2s ease;
}

.url-input:focus {
    border-color: #16a36a;
    box-shadow: 0 0 0 4px rgba(22,163,106,.09);
}

.url-form-group { margin-bottom: 22px; }

.url-generate-btn {
    width: 100%;
    padding: 16px 20px;
    border: 0;
    border-radius: 11px;
    background: linear-gradient(110deg, #087849, #10a568);
    box-shadow: 0 8px 20px rgba(8,120,73,.18);
    color: #fff;
    font-size: 14px;
    font-weight: 850;
    cursor: pointer;
    transition: .25s ease;
}

.url-generate-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 25px rgba(8,120,73,.25);
}

.url-generate-btn:disabled {
    opacity: .7;
    cursor: wait;
    transform: none;
}

.url-privacy-note {
    display: flex;
    gap: 9px;
    margin-top: 17px;
    color: #94a3b8;
    font-size: 11px;
    line-height: 1.7;
}

.url-privacy-note i {
    margin-top: 2px;
    color: #0b9b5b;
}

/* PREVIEW PANEL */

.url-preview-panel {
    height: 100%;
    padding: 27px;
    border: 1px solid #dfeee4;
    border-radius: 23px;
    background: linear-gradient(145deg, #f0faf4, #ffffff 75%);
    box-shadow: 0 15px 45px rgba(15,50,32,.04);
}

.url-preview-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    margin-bottom: 20px;
}

.url-preview-top h3 {
    color: #172033;
    font-size: 17px;
    font-weight: 850;
}

.url-live-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 7px 11px;
    border-radius: 50px;
    background: #e3f6eb;
    color: #087849;
    font-size: 10px;
    font-weight: 900;
    white-space: nowrap;
}

.url-preview-box {
    display: flex;
    min-height: 245px;
    align-items: center;
    justify-content: center;
    padding: 23px;
    border: 1px dashed #c8dfd0;
    border-radius: 16px;
    background: rgba(255,255,255,.9);
    text-align: center;
}

.url-preview-empty i {
    margin-bottom: 15px;
    color: #a6cbb5;
    font-size: 42px;
}

.url-preview-empty h4 {
    color: #334155;
    font-size: 14px;
    font-weight: 850;
}

.url-preview-empty p {
    margin-top: 8px;
    color: #94a3b8;
    font-size: 12px;
    line-height: 1.7;
}

.url-preview-result {
    width: 100%;
    text-align: left;
}

.url-preview-success-icon {
    margin-bottom: 12px;
    color: #0b9b5b;
    font-size: 32px;
    text-align: center;
}

.url-preview-result h4 {
    margin-bottom: 16px;
    color: #172033;
    font-size: 16px;
    font-weight: 850;
    text-align: center;
}

.url-preview-link-row {
    display: flex;
    align-items: center;
    gap: 8px;
}

.url-preview-link-row .url-input {
    color: #087849;
    font-weight: 800;
}

.url-copy-btn {
    flex-shrink: 0;
    padding: 12px 14px;
    border: 0;
    border-radius: 9px;
    background: #087849;
    color: #fff;
    font-size: 12px;
    font-weight: 800;
    cursor: pointer;
}

.url-copy-btn:hover { background: #06633c; }

.url-original-url {
    margin-top: 13px;
    overflow-wrap: anywhere;
    color: #94a3b8;
    font-size: 11px;
    line-height: 1.7;
}

.url-preview-open {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    margin-top: 12px;
    color: #087849;
    font-size: 12px;
    font-weight: 850;
    text-decoration: none;
}

.url-preview-open:hover { color: #064e35; }

.url-preview-points {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 13px;
    margin-top: 20px;
}

.url-preview-point {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #64748b;
    font-size: 11px;
    font-weight: 700;
}

.url-preview-point i { color: #087849; }

/* FEATURE CARDS */

.url-feature-card {
    height: 100%;
    padding: 25px;
    border: 1px solid #e6eee8;
    border-radius: 18px;
    background: #fff;
    transition: .25s ease;
}

.url-feature-card:hover {
    transform: translateY(-5px);
    border-color: #b8dfc7;
    box-shadow: 0 14px 30px rgba(15,50,32,.07);
}

.url-feature-icon {
    display: flex;
    width: 49px;
    height: 49px;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
    border-radius: 15px;
    background: #eaf8f0;
    color: #087849;
    font-size: 19px;
}

.url-feature-card h3 {
    margin-bottom: 9px;
    color: #172033;
    font-size: 15px;
    font-weight: 850;
}

.url-feature-card p {
    color: #64748b;
    font-size: 12px;
    line-height: 1.9;
}

/* STEPS */

.url-step-card {
    display: flex;
    height: 100%;
    align-items: flex-start;
    gap: 16px;
    padding: 23px;
    border: 1px solid #e5eee8;
    border-radius: 17px;
    background: #fff;
    transition: .2s ease;
}

.url-step-card:hover {
    border-color: #b8dfc7;
    transform: translateY(-3px);
}

.url-step-number {
    display: flex;
    width: 43px;
    height: 43px;
    flex-shrink: 0;
    align-items: center;
    justify-content: center;
    border-radius: 13px;
    background: #eaf8f0;
    color: #087849;
    font-weight: 900;
}

.url-step-card h3 {
    margin-bottom: 6px;
    color: #172033;
    font-size: 14px;
    font-weight: 850;
}

.url-step-card p {
    color: #64748b;
    font-size: 12px;
    line-height: 1.8;
}

/* FAQ */

.url-faq {
    max-width: 850px;
    margin: auto;
}

.url-faq details {
    overflow: hidden;
    margin-bottom: 12px;
    border: 1px solid #e5eee8;
    border-radius: 14px;
    background: #fff;
    transition: .2s ease;
}

.url-faq details[open] {
    border-color: #b8dfc7;
    box-shadow: 0 5px 20px rgba(15,50,32,.04);
}

.url-faq summary {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    padding: 19px 21px;
    color: #172033;
    font-size: 13px;
    font-weight: 850;
    cursor: pointer;
    list-style: none;
}

.url-faq summary::-webkit-details-marker { display: none; }

.url-faq summary i {
    color: #087849;
    transition: .2s ease;
}

.url-faq details[open] summary i { transform: rotate(45deg); }

.url-faq-answer {
    padding: 0 21px 19px;
    color: #64748b;
    font-size: 12px;
    line-height: 1.9;
}

/* CTA */

.url-cta {
    padding: 45px 25px;
    border: 1px solid #dcefe2;
    border-radius: 24px;
    background: linear-gradient(120deg, #effaf3, #f7fcf8);
    text-align: center;
}

.url-cta h2 {
    color: #172033;
    font-size: clamp(25px, 3vw, 35px);
    font-weight: 900;
}

.url-cta p {
    max-width: 620px;
    margin: 12px auto 22px;
    color: #64748b;
    font-size: 13px;
    line-height: 1.9;
}

.url-btn-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    padding: 13px 22px;
    border-radius: 10px;
    background: #087849;
    color: #fff;
    font-size: 13px;
    font-weight: 850;
    text-decoration: none;
    transition: .2s ease;
}

.url-btn-primary:hover {
    transform: translateY(-2px);
    background: #06633c;
    color: #fff;
}

/* RESULT MODAL */

.url-modal {
    position: fixed;
    z-index: 99999;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 18px;
    background: rgba(15,23,42,.65);
    backdrop-filter: blur(7px);
    opacity: 1;
    visibility: visible;
    transition: .25s ease;
}

.url-modal.hidden {
    pointer-events: none;
    opacity: 0;
    visibility: hidden;
}

.url-modal-dialog {
    position: relative;
    width: 100%;
    max-width: 490px;
    max-height: 92vh;
    overflow-y: auto;
    border-radius: 23px;
    background: #fff;
    box-shadow: 0 25px 80px rgba(0,0,0,.22);
    transform: translateY(0);
    transition: .25s ease;
}

.url-modal.hidden .url-modal-dialog {
    transform: translateY(20px);
}

.url-modal-header {
    position: relative;
    padding: 27px 25px 20px;
    border-bottom: 1px solid #edf2ee;
    text-align: center;
}

.url-modal-close {
    position: absolute;
    top: 15px;
    right: 16px;
    display: flex;
    width: 35px;
    height: 35px;
    align-items: center;
    justify-content: center;
    border: 1px solid #e5eee8;
    border-radius: 50%;
    background: #fff;
    color: #64748b;
    cursor: pointer;
}

.url-success-icon {
    display: flex;
    width: 55px;
    height: 55px;
    align-items: center;
    justify-content: center;
    margin: 0 auto 13px;
    border-radius: 18px;
    background: #e8f8ee;
    color: #087849;
    font-size: 24px;
}

.url-modal-header h3 {
    color: #172033;
    font-size: 21px;
    font-weight: 900;
}

.url-modal-header p {
    margin-top: 7px;
    color: #64748b;
    font-size: 12px;
}

.url-modal-body { padding: 23px 26px 27px; }

.url-modal-linkbox {
    display: flex;
    gap: 8px;
    padding: 7px;
    border: 1px solid #dce7e0;
    border-radius: 12px;
    background: #f8fbf9;
}

.url-modal-linkbox input {
    width: 100%;
    min-width: 0;
    padding: 7px;
    border: 0;
    outline: none;
    background: transparent;
    color: #087849;
    font-size: 12px;
    font-weight: 800;
}

.url-modal-qr-wrap {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 22px 0;
}

#urlModalQrCode {
    display: flex;
    min-width: 190px;
    min-height: 190px;
    align-items: center;
    justify-content: center;
    padding: 12px;
    border: 1px solid #e5eee8;
    border-radius: 15px;
    background: #fff;
}

#urlModalQrCode canvas,
#urlModalQrCode img {
    display: block;
    max-width: 100%;
    height: auto;
}

.url-modal-qr-wrap p {
    margin-top: 10px;
    color: #94a3b8;
    font-size: 11px;
}

.url-modal-actions {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
}

.url-modal-action {
    padding: 13px 10px;
    border: 1px solid #dce7e0;
    border-radius: 10px;
    background: #fff;
    color: #334155;
    font-size: 11px;
    font-weight: 850;
    cursor: pointer;
    transition: .2s ease;
}

.url-modal-action:hover {
    border-color: #087849;
    background: #f5fbf7;
    color: #087849;
}

.url-modal-action.primary {
    border-color: #087849;
    background: #087849;
    color: #fff;
}

.url-modal-action.primary:hover { background: #06633c; }

@media(max-width: 767px) {
    .url-hero { padding: 55px 0 50px; }

    .url-hero h1 { letter-spacing: -1px; }

    .url-section { padding: 55px 0; }

    .url-container { padding: 0 17px; }

    .url-card-body,
    .url-preview-panel { padding: 21px; }

    .url-card-heading { padding: 21px; }

    .url-modal-body { padding: 20px; }

    .url-modal-header { padding: 25px 20px 18px; }
}
</style>


<div class="url-page">

    <!-- HERO -->
    <section class="url-hero">
        <div class="url-container url-hero-inner">

            <span class="url-eyebrow">
                <i class="fas fa-bolt"></i>
                FREE URL SHORTENER TOOL
            </span>

            <h1>
                Shorten Your Links
                <span class="url-gradient-text">& Share Smarter</span>
            </h1>

            <p class="url-hero-description">
                Turn long and complicated URLs into short, clean and shareable links.
                Simplify your business communication with Textora's free URL Shortener.
            </p>

            <div class="url-hero-pills">
                <span><i class="fas fa-check-circle"></i> Instant Link Generation</span>
                <span><i class="fas fa-qrcode"></i> QR Code Ready</span>
                <span><i class="fas fa-gift"></i> Free to Use</span>
            </div>

        </div>
    </section>


    <!-- GENERATOR -->
    <section class="url-section url-soft-section" id="url-generator">

        <div class="url-container">

            <div class="url-section-heading">
                <span class="eyebrow">URL SHORTENER</span>
                <h2>Create Your Short Link in Seconds</h2>
                <p>
                    Paste your long website URL below and generate a clean,
                    shareable short link instantly.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-7">

                <!-- FORM -->
                <div class="url-generator-card">

                    <div class="url-card-heading">
                        <div class="url-card-icon">
                            <i class="fas fa-link"></i>
                        </div>

                        <div>
                            <h3>Create Your Short Link</h3>
                            <p>Enter your destination URL below</p>
                        </div>
                    </div>

                    <div class="url-card-body">

                        @if ($errors->any())
                            <div class="mb-5 rounded-xl border border-red-200 bg-red-50 p-4">
                                <div class="mb-2 text-sm font-bold text-red-700">
                                    Unable to generate your link
                                </div>

                                @foreach ($errors->all() as $error)
                                    <p class="mt-1 text-xs text-red-600">
                                        {{ $error }}
                                    </p>
                                @endforeach
                            </div>
                        @endif

                        <form
                            id="urlGeneratorForm"
                            method="POST"
                            action="{{ route('url-shortener.generate') }}"
                        >
                            @csrf

                            <div class="url-form-group">
                                <label class="url-label" for="destination_url">
                                    Paste Your Long URL
                                </label>

                                <input
                                    type="url"
                                    name="destination_url"
                                    id="destination_url"
                                    class="url-input"
                                    placeholder="https://www.example.com/your-long-url"
                                    value="{{ old('destination_url') }}"
                                    maxlength="2048"
                                    required
                                >

                                <p class="mt-2 text-xs text-slate-400">
                                    Enter a valid website address starting with https:// or http://
                                </p>
                            </div>

                            <button
                                type="submit"
                                id="urlGenerateBtn"
                                class="url-generate-btn"
                            >
                                <i class="fas fa-wand-magic-sparkles mr-2"></i>
                                Generate Short Link
                            </button>

                            <div class="url-privacy-note">
                                <i class="fas fa-shield-alt"></i>
                                <span>
                                    Your URL is processed securely to create a unique short link.
                                    Do not shorten suspicious or malicious destinations.
                                </span>
                            </div>
                        </form>

                    </div>
                </div>


                <!-- LIVE PREVIEW -->
                <div class="url-preview-panel">

                    <div class="url-preview-top">
                        <h3>Link Preview</h3>

                        @if($shortUrl)
                            <span class="url-live-badge">
                                <i class="fas fa-check-circle"></i>
                                LINK GENERATED
                            </span>
                        @else
                            <span class="url-live-badge">
                                <i class="fas fa-circle text-[7px]"></i>
                                READY TO GENERATE
                            </span>
                        @endif
                    </div>

                    <div class="url-preview-box">

                        @if($shortUrl)

                            <div class="url-preview-result">

                                <div class="url-preview-success-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>

                                <h4>Your Short Link Is Ready!</h4>

                                <label class="url-label">
                                    Generated Short URL
                                </label>

                                <div class="url-preview-link-row">
                                    <input
                                        type="text"
                                        id="urlPreviewLink"
                                        class="url-input"
                                        value="{{ $shortUrl }}"
                                        readonly
                                    >

                                    <button
                                        type="button"
                                        id="urlPreviewCopyBtn"
                                        class="url-copy-btn"
                                        title="Copy short link"
                                    >
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </div>

                                @if($originalUrl)
                                    <div class="url-original-url">
                                        <strong>Original URL:</strong>
                                        {{ $originalUrl }}
                                    </div>
                                @endif

                                <a
                                    href="{{ $shortUrl }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="url-preview-open"
                                >
                                    Open Short Link
                                    <i class="fas fa-external-link-alt"></i>
                                </a>

                            </div>

                        @else

                            <div class="url-preview-empty">
                                <i class="fas fa-link"></i>

                                <h4>Your Short Link Will Appear Here</h4>

                                <p>
                                    Paste your original URL and click Generate Short Link
                                    to get started.
                                </p>
                            </div>

                        @endif

                    </div>

                    <div class="url-preview-points">

                        <div class="url-preview-point">
                            <i class="fas fa-check-circle"></i>
                            Easy to share
                        </div>

                        <div class="url-preview-point">
                            <i class="fas fa-check-circle"></i>
                            Unique short URL
                        </div>

                        <div class="url-preview-point">
                            <i class="fas fa-check-circle"></i>
                            QR code support
                        </div>

                        <div class="url-preview-point">
                            <i class="fas fa-check-circle"></i>
                            Click counting
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- FEATURES -->
    <section class="url-section">
        <div class="url-container">

            <div class="url-section-heading">
                <span class="eyebrow">WHY USE TEXTORA</span>
                <h2>
                    Everything You Need for
                    <span class="url-green">Better Links</span>
                </h2>
                <p>
                    Make your links easier to manage, share and use
                    across your business communication channels.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">

                <div class="url-feature-card">
                    <div class="url-feature-icon"><i class="fas fa-bolt"></i></div>
                    <h3>Instant Link Generation</h3>
                    <p>Convert long URLs into short, clean links within seconds.</p>
                </div>

                <div class="url-feature-card">
                    <div class="url-feature-icon"><i class="fas fa-qrcode"></i></div>
                    <h3>QR Code Generation</h3>
                    <p>Create a scannable QR code for your short link and download it for sharing.</p>
                </div>

                <div class="url-feature-card">
                    <div class="url-feature-icon"><i class="fas fa-copy"></i></div>
                    <h3>Easy Copy & Share</h3>
                    <p>Copy your generated URL and share it across WhatsApp, SMS, email and social media.</p>
                </div>

                <div class="url-feature-card">
                    <div class="url-feature-icon"><i class="fas fa-mobile-screen-button"></i></div>
                    <h3>Mobile Friendly</h3>
                    <p>Create and share short links from mobile, tablet and desktop devices.</p>
                </div>

                <div class="url-feature-card">
                    <div class="url-feature-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Click Counting</h3>
                    <p>Keep track of total redirects received by your generated short links.</p>
                </div>

                <div class="url-feature-card">
                    <div class="url-feature-icon"><i class="fas fa-shield-halved"></i></div>
                    <h3>Secure Redirects</h3>
                    <p>Short links redirect visitors to the destination URL saved during generation.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- HOW IT WORKS -->
    <section class="url-section url-soft-section">
        <div class="url-container">

            <div class="url-section-heading">
                <span class="eyebrow">HOW IT WORKS</span>
                <h2>Three Simple Steps to Shorten Your URL</h2>
                <p>No complicated setup. Create your short link in just a few simple steps.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-5">

                <div class="url-step-card">
                    <div class="url-step-number">01</div>
                    <div>
                        <h3>Paste Your Long URL</h3>
                        <p>Copy your original website link and paste it into the URL input field.</p>
                    </div>
                </div>

                <div class="url-step-card">
                    <div class="url-step-number">02</div>
                    <div>
                        <h3>Generate Short Link</h3>
                        <p>Click the generate button and Textora creates a unique short URL.</p>
                    </div>
                </div>

                <div class="url-step-card">
                    <div class="url-step-number">03</div>
                    <div>
                        <h3>Copy & Share</h3>
                        <p>Copy your new short link, download its QR code and share it anywhere.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- USE CASES -->
    <section class="url-section">
        <div class="url-container">

            <div class="url-section-heading">
                <span class="eyebrow">BUILT FOR EVERYDAY SHARING</span>
                <h2>One Short Link. Multiple Possibilities.</h2>
                <p>
                    Use shorter URLs across different digital communication
                    and marketing channels.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">

                <div class="url-feature-card">
                    <div class="url-feature-icon"><i class="fab fa-whatsapp"></i></div>
                    <h3>WhatsApp Sharing</h3>
                    <p>Share clean links with customers through WhatsApp conversations.</p>
                </div>

                <div class="url-feature-card">
                    <div class="url-feature-icon"><i class="fas fa-comment-sms"></i></div>
                    <h3>SMS Campaigns</h3>
                    <p>Use shorter URLs in SMS messages to keep your communication concise.</p>
                </div>

                <div class="url-feature-card">
                    <div class="url-feature-icon"><i class="fas fa-envelope"></i></div>
                    <h3>Email Marketing</h3>
                    <p>Add clean links to your marketing emails and customer notifications.</p>
                </div>

                <div class="url-feature-card">
                    <div class="url-feature-icon"><i class="fas fa-bullhorn"></i></div>
                    <h3>Digital Campaigns</h3>
                    <p>Share short URLs across social media, promotional posts and campaigns.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- FAQ -->
    <section class="url-section url-soft-section">
        <div class="url-container">

            <div class="url-section-heading">
                <span class="eyebrow">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Everything You Need to Know</h2>
                <p>Find answers to common questions about Textora URL Shortener.</p>
            </div>

            <div class="url-faq">

                <details>
                    <summary>
                        What is a URL Shortener?
                        <i class="fas fa-plus"></i>
                    </summary>
                    <div class="url-faq-answer">
                        A URL Shortener converts a long website address into a shorter link
                        that is easier to share through messages, emails and social media.
                    </div>
                </details>

                <details>
                    <summary>
                        Is Textora URL Shortener free to use?
                        <i class="fas fa-plus"></i>
                    </summary>
                    <div class="url-faq-answer">
                        Yes. You can use the Textora URL Shortener to create short links
                        without paying for basic link generation.
                    </div>
                </details>

                <details>
                    <summary>
                        Can I create a QR code for my short link?
                        <i class="fas fa-plus"></i>
                    </summary>
                    <div class="url-faq-answer">
                        Yes. After generating your short URL, you can create and download
                        a QR code that points to your shortened link.
                    </div>
                </details>

                <details>
                    <summary>
                        Can I share short links on WhatsApp and SMS?
                        <i class="fas fa-plus"></i>
                    </summary>
                    <div class="url-faq-answer">
                        Yes. You can copy your short URL and share it through WhatsApp,
                        SMS, email and other communication channels.
                    </div>
                </details>

                <details>
                    <summary>
                        Does Textora track clicks?
                        <i class="fas fa-plus"></i>
                    </summary>
                    <div class="url-faq-answer">
                        The current version records total redirects for generated short links.
                        Unique visitor, device and geographic analytics are not included
                        in this basic version.
                    </div>
                </details>

                <details>
                    <summary>
                        Can I shorten any website URL?
                        <i class="fas fa-plus"></i>
                    </summary>
                    <div class="url-faq-answer">
                        You can submit valid HTTP and HTTPS URLs. Links should lead to
                        legitimate destinations. Malicious, phishing and abusive links
                        should not be submitted.
                    </div>
                </details>

            </div>
        </div>
    </section>


    <!-- CTA -->
    <section class="url-section">
        <div class="url-container">

            <div class="url-cta">

                <div class="url-feature-icon mx-auto">
                    <i class="fas fa-link"></i>
                </div>

                <h2>Make Every Link Count.</h2>

                <p>
                    Create shorter, cleaner and more shareable links
                    with Textora's free URL Shortener.
                </p>

                <a href="#url-generator" class="url-btn-primary">
                    Create Your Short Link
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>

        </div>
    </section>


    <!-- RESULT MODAL -->
    <div
        class="url-modal hidden"
        id="urlResultModal"
        aria-hidden="true"
        role="dialog"
        aria-modal="true"
        aria-labelledby="urlModalTitle"
    >

        <div class="url-modal-dialog">

            <div class="url-modal-header">

                <button
                    type="button"
                    class="url-modal-close"
                    id="urlModalClose"
                    aria-label="Close popup"
                >
                    <i class="fas fa-times"></i>
                </button>

                <div class="url-success-icon">
                    <i class="fas fa-check"></i>
                </div>

                <h3 id="urlModalTitle">Your Short Link Is Ready!</h3>

                <p>Your long URL has been successfully shortened.</p>

            </div>

            <div class="url-modal-body">

                <label class="url-label" for="urlGeneratedLink">
                    Your Short URL
                </label>

                <div class="url-modal-linkbox">

                    <input
                        type="text"
                        id="urlGeneratedLink"
                        readonly
                    >

                    <button
                        type="button"
                        class="url-copy-btn"
                        id="urlCopyBtn"
                    >
                        <i class="far fa-copy mr-1"></i>
                        Copy
                    </button>

                </div>

                <div class="url-modal-qr-wrap">

                    <div id="urlModalQrCode"></div>

                    <p>Scan this QR code to open your short link.</p>

                </div>

                <div class="url-modal-actions">

                    <button
                        type="button"
                        class="url-modal-action"
                        id="urlDownloadQr"
                    >
                        <i class="fas fa-download mr-1"></i>
                        Download QR
                    </button>

                    <button
                        type="button"
                        class="url-modal-action primary"
                        id="urlOpenLink"
                    >
                        <i class="fas fa-external-link-alt mr-1"></i>
                        Open Link
                    </button>

                </div>

            </div>

        </div>

    </div>

</div>


<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('urlGeneratorForm');
    const generateBtn = document.getElementById('urlGenerateBtn');

    const modal = document.getElementById('urlResultModal');
    const modalClose = document.getElementById('urlModalClose');

    const generatedInput = document.getElementById('urlGeneratedLink');
    const modalQr = document.getElementById('urlModalQrCode');

    const copyBtn = document.getElementById('urlCopyBtn');
    const downloadBtn = document.getElementById('urlDownloadQr');
    const openBtn = document.getElementById('urlOpenLink');

    const previewCopyBtn = document.getElementById('urlPreviewCopyBtn');
    const previewLinkInput = document.getElementById('urlPreviewLink');

    const generatedLink = @json($shortUrl);
    let lastFocusedElement = null;


    /* COPY TEXT */

    async function copyText(text) {

        try {

            if (navigator.clipboard && window.isSecureContext) {

                await navigator.clipboard.writeText(text);
                return true;

            }

        } catch (error) {}


        const temp = document.createElement('textarea');

        temp.value = text;
        temp.style.position = 'fixed';
        temp.style.opacity = '0';

        document.body.appendChild(temp);
        temp.select();

        let success = false;

        try {
            success = document.execCommand('copy');
        } catch (error) {
            success = false;
        }

        temp.remove();

        return success;
    }


    /* COPY BUTTON SUCCESS STATE */

    function showCopySuccess(button) {

        const original = button.innerHTML;

        button.innerHTML =
            '<i class="fas fa-check mr-1"></i> Copied!';

        setTimeout(function () {
            button.innerHTML = original;
        }, 1800);
    }


    /* PREVIEW COPY */

    if (previewCopyBtn && previewLinkInput) {

        previewCopyBtn.addEventListener('click', async function () {

            const success = await copyText(previewLinkInput.value);

            if (success) {
                showCopySuccess(previewCopyBtn);
            } else {
                alert('Unable to copy. Please copy the link manually.');
            }

        });

    }


    /* OPEN RESULT MODAL */

    function openModal() {

        if (!generatedLink || !modal) return;

        lastFocusedElement = document.activeElement;

        modal.classList.remove('hidden');
        modal.setAttribute('aria-hidden', 'false');

        document.body.style.overflow = 'hidden';

        generatedInput.value = generatedLink;

        modalQr.innerHTML = '';

        if (typeof QRCode !== 'undefined') {

            new QRCode(modalQr, {
                text: generatedLink,
                width: 190,
                height: 190,
                colorDark: '#087849',
                colorLight: '#ffffff',
                correctLevel: QRCode.CorrectLevel.H
            });

        } else {

            modalQr.innerHTML =
                '<p style="font-size:12px;color:#dc2626;">QR code library could not be loaded.</p>';

        }

        modalClose.focus();
    }


    /* CLOSE MODAL */

    function closeModal() {

        modal.classList.add('hidden');
        modal.setAttribute('aria-hidden', 'true');

        document.body.style.overflow = '';

        if (lastFocusedElement) {
            lastFocusedElement.focus();
        }
    }


    modalClose.addEventListener('click', closeModal);


    modal.addEventListener('click', function (event) {

        if (event.target === modal) {
            closeModal();
        }

    });


    document.addEventListener('keydown', function (event) {

        if (
            event.key === 'Escape' &&
            !modal.classList.contains('hidden')
        ) {
            closeModal();
        }

    });


    /* MODAL COPY */

    copyBtn.addEventListener('click', async function () {

        if (!generatedLink) return;

        const success = await copyText(generatedLink);

        if (success) {
            showCopySuccess(copyBtn);
        } else {
            alert('Unable to copy. Please copy the link manually.');
        }

    });


    /* DOWNLOAD QR */

    downloadBtn.addEventListener('click', function () {

        const canvas = modalQr.querySelector('canvas');
        const image = modalQr.querySelector('img');

        let imageUrl = '';

        if (canvas) {
            imageUrl = canvas.toDataURL('image/png');
        } else if (image && image.src) {
            imageUrl = image.src;
        }

        if (!imageUrl) {
            alert('QR code is not ready yet.');
            return;
        }

        const link = document.createElement('a');

        link.href = imageUrl;
        link.download = 'textora-short-url-qr.png';

        document.body.appendChild(link);
        link.click();
        link.remove();

    });


    /* OPEN GENERATED LINK */

    openBtn.addEventListener('click', function () {

        if (!generatedLink) return;

        window.open(generatedLink, '_blank', 'noopener,noreferrer');

    });


    /* GENERATE BUTTON LOADING */

    if (form) {

        form.addEventListener('submit', function () {

            if (!form.checkValidity()) return;

            generateBtn.disabled = true;

            generateBtn.innerHTML =
                '<i class="fas fa-spinner fa-spin mr-2"></i> Generating...';

        });

    }


    /* SHOW RESULT AFTER LARAVEL REDIRECT */

    if (generatedLink) {

        openModal();

        const resultSection = document.getElementById('url-generator');

        if (resultSection) {

            setTimeout(function () {

                resultSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });

            }, 350);

        }

    }

});
</script>

</x-master-page>
