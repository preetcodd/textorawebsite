
<x-master-page
    title="Free WhatsApp Link Generator & QR Code | Textora Technologies"
    description="Create a free WhatsApp link and QR code with a pre-filled message using Textora's WhatsApp Link Generator. Generate, copy, share and download your WhatsApp QR code instantly."
>

@push('head-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
@endpush

@push('head')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "name": "Free WhatsApp Link Generator & QR Code",
      "url": "https://textorasms.com/whatsapp-link-generator",
      "description": "Create WhatsApp links and QR codes with pre-filled messages."
    },
    {
      "@type": "SoftwareApplication",
      "name": "Textora WhatsApp Link Generator",
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
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is a WhatsApp Link Generator?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A WhatsApp Link Generator creates a clickable link that opens a WhatsApp conversation with a specified phone number."
          }
        },
        {
          "@type": "Question",
          "name": "Can I create a WhatsApp QR code?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. You can generate and download a QR code for your WhatsApp link."
          }
        },
        {
          "@type": "Question",
          "name": "Can I add a pre-filled WhatsApp message?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. You can add a message that appears automatically when someone opens your WhatsApp link."
          }
        },
        {
          "@type": "Question",
          "name": "Is the WhatsApp Link Generator free?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. You can generate WhatsApp links and QR codes using this free tool."
          }
        },
        {
          "@type": "Question",
          "name": "Does Textora store my WhatsApp number or message?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The QR code is generated in your browser. When you request a branded short link, your number and message are sent to Textora's link-generation endpoint."
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
          "item": "https://textorasms.com"
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

<style>
.wa-page {
    color: #172033;
    overflow: hidden;
}

.wa-container {
    max-width: 1240px;
    margin: auto;
    padding-left: 24px;
    padding-right: 24px;
}

.wa-green { color: #087849; }

.wa-gradient-text {
    background: linear-gradient(110deg, #087849, #16a36a);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.wa-hero {
    position: relative;
    background: #fff;
    padding: 76px 0 66px;
}

.wa-hero:before {
    content: "";
    position: absolute;
    width: 430px;
    height: 430px;
    top: -240px;
    right: -100px;
    background: radial-gradient(circle, rgba(22,163,106,.10), transparent 70%);
    pointer-events: none;
}

.wa-hero:after {
    content: "";
    position: absolute;
    width: 350px;
    height: 350px;
    bottom: -240px;
    left: -120px;
    background: radial-gradient(circle, rgba(8,120,73,.07), transparent 70%);
    pointer-events: none;
}

.wa-hero-inner {
    position: relative;
    z-index: 1;
}

.wa-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 9px 16px;
    border: 1px solid #d8eee2;
    border-radius: 50px;
    background: #f1faf5;
    color: #087849;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1.2px;
}

.wa-hero h1 {
    font-size: clamp(36px, 5vw, 58px);
    line-height: 1.12;
    font-weight: 850;
    letter-spacing: -1.8px;
    color: #14221d;
    max-width: 850px;
    margin: 24px auto 18px;
}

.wa-hero-description {
    max-width: 720px;
    margin: auto;
    color: #64748b;
    font-size: 17px;
    line-height: 1.8;
}

.wa-hero-pills {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 27px;
}

.wa-hero-pills span {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 15px;
    border: 1px solid #e5eee8;
    border-radius: 50px;
    color: #475569;
    font-size: 13px;
    font-weight: 600;
    background: #fff;
}

.wa-hero-pills i { color: #0b9b5b; }

.wa-section { padding: 76px 0; }

.wa-soft-section { background: #f7faf8; }

.wa-section-heading {
    text-align: center;
    max-width: 740px;
    margin: 0 auto 42px;
}

.wa-section-heading .eyebrow {
    color: #087849;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    font-size: 12px;
    font-weight: 800;
}

.wa-section-heading h2 {
    margin-top: 12px;
    color: #172033;
    font-size: clamp(27px, 3.5vw, 39px);
    line-height: 1.2;
    font-weight: 800;
    letter-spacing: -.8px;
}

.wa-section-heading p {
    margin-top: 13px;
    color: #64748b;
    line-height: 1.8;
    font-size: 15px;
}

.wa-generator-card {
    background: #fff;
    border: 1px solid #e6eee9;
    border-radius: 24px;
    box-shadow: 0 16px 50px rgba(15, 50, 32, .055);
    overflow: hidden;
}

.wa-card-heading {
    padding: 25px 28px;
    border-bottom: 1px solid #edf2ee;
    display: flex;
    align-items: center;
    gap: 14px;
}

.wa-card-icon {
    width: 46px;
    height: 46px;
    border-radius: 14px;
    background: #eaf8f0;
    color: #087849;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.wa-card-heading h3 {
    font-size: 18px;
    font-weight: 800;
    color: #172033;
}

.wa-card-heading p {
    color: #94a3b8;
    font-size: 12px;
    margin-top: 3px;
}

.wa-card-body { padding: 28px; }

.wa-label {
    display: block;
    color: #334155;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 9px;
}

.wa-input,
.wa-select,
.wa-textarea {
    width: 100%;
    border: 1px solid #dce7e0;
    border-radius: 12px;
    padding: 13px 15px;
    font-size: 14px;
    color: #172033;
    background: #fff;
    outline: none;
    transition: .2s ease;
}

.wa-input:focus,
.wa-select:focus,
.wa-textarea:focus {
    border-color: #16a36a;
    box-shadow: 0 0 0 4px rgba(22,163,106,.09);
}

.wa-textarea {
    min-height: 125px;
    resize: vertical;
}

.wa-form-group { margin-bottom: 22px; }

.wa-phone-row {
    display: grid;
    grid-template-columns: 130px 1fr;
    gap: 10px;
}

.wa-generate-btn {
    width: 100%;
    border: 0;
    padding: 16px 22px;
    border-radius: 12px;
    color: #fff;
    background: linear-gradient(110deg, #087849, #10a568);
    font-size: 15px;
    font-weight: 800;
    cursor: pointer;
    transition: .25s ease;
    box-shadow: 0 9px 20px rgba(8,120,73,.18);
}

.wa-generate-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 13px 25px rgba(8,120,73,.24);
}

.wa-generate-btn:disabled {
    opacity: .7;
    cursor: wait;
    transform: none;
}

.wa-privacy-note {
    display: flex;
    gap: 8px;
    color: #94a3b8;
    font-size: 12px;
    line-height: 1.6;
    margin-top: 17px;
}

.wa-privacy-note i {
    color: #0b9b5b;
    margin-top: 2px;
}

/* QR PREVIEW */

.wa-preview-panel {
    height: 100%;
    background: linear-gradient(145deg, #f4fbf6, #fff);
    border: 1px solid #e2efe6;
    border-radius: 20px;
    padding: 28px;
}

.wa-preview-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    margin-bottom: 22px;
}

.wa-preview-top h3 {
    font-size: 17px;
    font-weight: 800;
    color: #172033;
}

.wa-live-badge {
    color: #087849;
    background: #e3f6eb;
    border-radius: 30px;
    padding: 6px 10px;
    font-size: 10px;
    font-weight: 800;
}

.wa-qr-placeholder {
    width: 220px;
    min-height: 220px;
    max-width: 100%;
    margin: 0 auto;
    background: #fff;
    border: 1px dashed #c8dfd0;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #94a3b8;
    text-align: center;
    padding: 20px;
}

.wa-qr-placeholder i {
    font-size: 36px;
    color: #a6cbb5;
    margin-bottom: 12px;
}

#waInlineQrCode {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 220px;
    background: #fff;
    border-radius: 16px;
    padding: 12px;
    overflow: hidden;
}

#waInlineQrCode canvas,
#waInlineQrCode img {
    max-width: 100%;
    height: auto;
    display: block;
}

.wa-customize {
    margin-top: 25px;
    padding-top: 22px;
    border-top: 1px solid #e4eee7;
}

.wa-customize h4 {
    font-size: 14px;
    color: #334155;
    font-weight: 800;
    margin-bottom: 17px;
}

.wa-color-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
}

.wa-color-control label {
    display: block;
    font-size: 12px;
    font-weight: 700;
    color: #64748b;
    margin-bottom: 8px;
}

.wa-color-control input[type="color"] {
    width: 100%;
    height: 43px;
    border: 1px solid #dce7e0;
    border-radius: 9px;
    padding: 4px;
    background: #fff;
    cursor: pointer;
}

.wa-size-control { margin-top: 18px; }

.wa-size-control input {
    width: 100%;
    accent-color: #087849;
    cursor: pointer;
}

.wa-reset-btn {
    margin-top: 15px;
    color: #087849;
    font-size: 12px;
    font-weight: 800;
    cursor: pointer;
    background: none;
    border: 0;
}

/* FEATURES */

.wa-feature-card {
    background: #fff;
    border: 1px solid #e8efea;
    border-radius: 18px;
    padding: 25px;
    height: 100%;
    transition: .25s ease;
}

.wa-feature-card:hover {
    transform: translateY(-5px);
    border-color: #b8dfc7;
    box-shadow: 0 14px 30px rgba(15,50,32,.06);
}

.wa-feature-icon {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    background: #eaf8f0;
    color: #087849;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 19px;
    margin-bottom: 18px;
}

.wa-feature-card h3 {
    color: #172033;
    font-size: 16px;
    font-weight: 800;
    margin-bottom: 9px;
}

.wa-feature-card p {
    color: #64748b;
    font-size: 13px;
    line-height: 1.8;
}

.wa-step-card {
    display: flex;
    gap: 17px;
    align-items: flex-start;
    padding: 22px;
    border: 1px solid #e5eee8;
    border-radius: 16px;
    background: #fff;
}

.wa-step-number {
    flex-shrink: 0;
    width: 42px;
    height: 42px;
    border-radius: 13px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #eaf8f0;
    color: #087849;
    font-weight: 900;
}

.wa-step-card h3 {
    color: #172033;
    font-weight: 800;
    font-size: 15px;
    margin-bottom: 6px;
}

.wa-step-card p {
    color: #64748b;
    font-size: 13px;
    line-height: 1.7;
}

.wa-use-card {
    padding: 23px;
    border: 1px solid #e5eee8;
    border-radius: 16px;
    background: #fff;
}

.wa-use-card i {
    color: #087849;
    font-size: 22px;
    margin-bottom: 13px;
}

.wa-use-card h3 {
    color: #172033;
    font-weight: 800;
    font-size: 15px;
    margin-bottom: 7px;
}

.wa-use-card p {
    color: #64748b;
    font-size: 13px;
    line-height: 1.7;
}

/* FAQ */

.wa-faq {
    max-width: 850px;
    margin: auto;
}

.wa-faq details {
    background: #fff;
    border: 1px solid #e5eee8;
    border-radius: 14px;
    margin-bottom: 12px;
    overflow: hidden;
}

.wa-faq summary {
    padding: 19px 21px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    list-style: none;
    color: #172033;
    font-size: 14px;
    font-weight: 800;
}

.wa-faq summary::-webkit-details-marker { display: none; }

.wa-faq summary i {
    color: #087849;
    transition: .2s ease;
}

.wa-faq details[open] summary i { transform: rotate(45deg); }

.wa-faq-answer {
    padding: 0 21px 19px;
    color: #64748b;
    font-size: 13px;
    line-height: 1.8;
}

/* CTA */

.wa-cta {
    background: linear-gradient(120deg, #effaf3, #f7fcf8);
    border: 1px solid #dcefe2;
    border-radius: 24px;
    padding: 44px 25px;
    text-align: center;
}

.wa-cta h2 {
    font-size: clamp(25px, 3vw, 34px);
    color: #172033;
    font-weight: 850;
}

.wa-cta p {
    color: #64748b;
    font-size: 14px;
    margin: 12px auto 22px;
    max-width: 620px;
    line-height: 1.8;
}

.wa-cta-buttons {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
}

.wa-btn-primary,
.wa-btn-secondary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    padding: 13px 22px;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 800;
    text-decoration: none;
    transition: .2s ease;
}

.wa-btn-primary {
    background: #087849;
    color: #fff;
}

.wa-btn-primary:hover {
    background: #06633c;
    color: #fff;
    transform: translateY(-2px);
}

.wa-btn-secondary {
    background: #fff;
    color: #087849;
    border: 1px solid #cde5d5;
}

.wa-btn-secondary:hover {
    border-color: #087849;
    color: #087849;
}

/* RESULT MODAL */

.wa-modal {
    position: fixed;
    inset: 0;
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 18px;
    background: rgba(15,23,42,.62);
    backdrop-filter: blur(7px);
    opacity: 1;
    visibility: visible;
    transition: .25s ease;
}

.wa-modal.hidden {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
}

.wa-modal-dialog {
    position: relative;
    width: 100%;
    max-width: 510px;
    max-height: 92vh;
    overflow-y: auto;
    background: #fff;
    border-radius: 24px;
    box-shadow: 0 25px 80px rgba(0,0,0,.22);
    transform: translateY(0);
    transition: .25s ease;
}

.wa-modal.hidden .wa-modal-dialog { transform: translateY(20px); }

.wa-modal-header {
    position: relative;
    padding: 28px 28px 20px;
    text-align: center;
    border-bottom: 1px solid #edf2ee;
}

.wa-modal-close {
    position: absolute;
    top: 16px;
    right: 17px;
    width: 35px;
    height: 35px;
    border: 1px solid #e5eee8;
    border-radius: 50%;
    background: #fff;
    color: #64748b;
    cursor: pointer;
}

.wa-success-icon {
    width: 56px;
    height: 56px;
    margin: 0 auto 13px;
    border-radius: 18px;
    background: #e8f8ee;
    color: #087849;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 25px;
}

.wa-modal-header h3 {
    color: #172033;
    font-size: 22px;
    font-weight: 850;
}

.wa-modal-header p {
    color: #64748b;
    font-size: 13px;
    margin-top: 7px;
}

.wa-modal-body { padding: 23px 28px 28px; }

.wa-modal-linkbox {
    display: flex;
    gap: 8px;
    padding: 7px;
    border: 1px solid #dce7e0;
    border-radius: 12px;
    background: #f8fbf9;
}

.wa-modal-linkbox input {
    width: 100%;
    min-width: 0;
    border: 0;
    outline: none;
    background: transparent;
    padding: 7px;
    color: #334155;
    font-size: 12px;
}

.wa-copy-btn {
    flex-shrink: 0;
    border: 0;
    background: #087849;
    color: #fff;
    padding: 10px 14px;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 800;
    cursor: pointer;
}

.wa-modal-qr-wrap {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 23px 0;
}

#waModalQrCode {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 190px;
    min-width: 190px;
    padding: 12px;
    border: 1px solid #e5eee8;
    border-radius: 16px;
    background: #fff;
}

#waModalQrCode canvas,
#waModalQrCode img {
    max-width: 100%;
    height: auto;
    display: block;
}

.wa-modal-qr-wrap p {
    color: #94a3b8;
    font-size: 11px;
    margin-top: 10px;
}

.wa-modal-actions {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
}

.wa-modal-action {
    border: 1px solid #dce7e0;
    background: #fff;
    color: #334155;
    padding: 13px 10px;
    border-radius: 10px;
    font-size: 12px;
    font-weight: 800;
    cursor: pointer;
    transition: .2s ease;
}

.wa-modal-action:hover {
    border-color: #087849;
    color: #087849;
    background: #f5fbf7;
}

.wa-modal-action.primary {
    background: #087849;
    border-color: #087849;
    color: #fff;
}

.wa-modal-action.primary:hover { background: #06633c; }

.wa-error {
    display: none;
    color: #dc2626;
    font-size: 12px;
    margin-top: 8px;
}

@media(max-width:767px) {
    .wa-hero { padding: 52px 0 48px; }

    .wa-hero h1 { letter-spacing: -1px; }

    .wa-section { padding: 55px 0; }

    .wa-container {
        padding-left: 17px;
        padding-right: 17px;
    }

    .wa-card-body,
    .wa-preview-panel { padding: 21px; }

    .wa-card-heading { padding: 21px; }

    .wa-modal-body { padding: 20px; }

    .wa-modal-header { padding: 25px 20px 18px; }

    .wa-phone-row { grid-template-columns: 105px 1fr; }
}
</style>

<div class="wa-page">

    <!-- HERO SECTION -->
    <section class="wa-hero">
        <div class="wa-container wa-hero-inner text-center">

            <span class="wa-eyebrow">
                <i class="fas fa-bolt"></i>
                FREE WHATSAPP TOOL
            </span>

            <h1>
                Create Your WhatsApp
                <span class="wa-gradient-text">Link & QR Code</span>
            </h1>

            <p class="wa-hero-description">
                Make it easier for customers to connect with your business.
                Generate a WhatsApp link with a pre-filled message and a
                shareable QR code in just a few clicks.
            </p>

            <div class="wa-hero-pills">
                <span><i class="fas fa-check-circle"></i> Instant Link Generation</span>
                <span><i class="fas fa-qrcode"></i> QR Code Customization</span>
                <span><i class="fas fa-gift"></i> Free to Use</span>
            </div>

        </div>
    </section>


    <!-- GENERATOR SECTION -->
    <section class="wa-section wa-soft-section" id="generator">
        <div class="wa-container">

            <div class="wa-section-heading">
                <span class="eyebrow">WHATSAPP LINK GENERATOR</span>
                <h2>Generate Your WhatsApp Link in Seconds</h2>
                <p>
                    Enter your WhatsApp number, add an optional message
                    and create your personal WhatsApp link with a QR code.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-7">

                <!-- FORM -->
                <div class="wa-generator-card">

                    <div class="wa-card-heading">
                        <div class="wa-card-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div>
                            <h3>Create Your WhatsApp Link</h3>
                            <p>Enter your details below to get started</p>
                        </div>
                    </div>

                    <div class="wa-card-body">

                        <form id="waGeneratorForm">

                            <div class="wa-form-group">
                                <label class="wa-label" for="waCountryCode">
                                    Country Code
                                </label>

                                <select id="waCountryCode" class="wa-select">
                                    <option value="+91" selected>India (+91)</option>
                                    <option value="+1">United States (+1)</option>
                                    <option value="+44">United Kingdom (+44)</option>
                                    <option value="+61">Australia (+61)</option>
                                    <option value="+971">UAE (+971)</option>
                                    <option value="+65">Singapore (+65)</option>
                                    <option value="+60">Malaysia (+60)</option>
                                    <option value="+94">Sri Lanka (+94)</option>
                                    <option value="+880">Bangladesh (+880)</option>
                                    <option value="+27">South Africa (+27)</option>
                                    <option value="+49">Germany (+49)</option>
                                    <option value="+33">France (+33)</option>
                                    <option value="+81">Japan (+81)</option>
                                    <option value="+82">South Korea (+82)</option>
                                </select>
                            </div>

                            <div class="wa-form-group">
                                <label class="wa-label" for="waPhoneNumber">
                                    WhatsApp Phone Number
                                </label>

                                <input
                                    type="tel"
                                    id="waPhoneNumber"
                                    class="wa-input"
                                    placeholder="Enter your WhatsApp number"
                                    maxlength="15"
                                    autocomplete="tel"
                                    required
                                >

                                <p id="waPhoneError" class="wa-error">
                                    Please enter a valid phone number between 6 and 15 digits.
                                </p>
                            </div>

                            <div class="wa-form-group">
                                <div class="flex justify-between items-center mb-2">
                                    <label class="wa-label mb-0" for="waMessage">
                                        Pre-filled Message
                                        <span class="font-normal text-slate-400">(Optional)</span>
                                    </label>

                                    <span class="text-xs text-slate-400" id="waCharCount">0/500</span>
                                </div>

                                <textarea
                                    id="waMessage"
                                    class="wa-textarea"
                                    maxlength="500"
                                    placeholder="Hi! I would like to know more about your products and services."
                                ></textarea>
                            </div>

                            <button type="submit" id="waGenerateBtn" class="wa-generate-btn">
                                <i class="fas fa-magic mr-2"></i>
                                Generate WhatsApp Link
                            </button>

                            <div class="wa-privacy-note">
                                <i class="fas fa-shield-alt"></i>
                                <span>
                                    Your QR code is generated in your browser.
                                    A request is sent to Textora when creating a branded short link.
                                </span>
                            </div>

                        </form>

                    </div>
                </div>


                <!-- QR PREVIEW AND CUSTOMIZATION -->
                <div class="wa-preview-panel">

                    <div class="wa-preview-top">
                        <h3>QR Code Preview</h3>
                        <span class="wa-live-badge">LIVE PREVIEW</span>
                    </div>

                    <div id="waInlineQrCode" class="wa-qr-placeholder">
                        <div id="waQrPlaceholderContent">
                            <i class="fas fa-qrcode block"></i>
                            <p class="text-sm font-semibold text-slate-500">
                                Your QR code will appear here
                            </p>
                            <p class="text-xs mt-2 text-slate-400">
                                Generate your WhatsApp link to get started
                            </p>
                        </div>
                    </div>

                    <div class="wa-customize">

                        <h4>
                            <i class="fas fa-sliders-h wa-green mr-2"></i>
                            Customize Your QR Code
                        </h4>

                        <div class="wa-color-row">

                            <div class="wa-color-control">
                                <label for="waQrColor">QR Code Color</label>
                                <input type="color" id="waQrColor" value="#111827">
                            </div>

                            <div class="wa-color-control">
                                <label for="waQrBgColor">Background Color</label>
                                <input type="color" id="waQrBgColor" value="#ffffff">
                            </div>

                        </div>

                        <div class="wa-size-control">
                            <div class="flex justify-between mb-2">
                                <label class="text-xs font-bold text-slate-600" for="waQrSize">
                                    QR Code Size
                                </label>

                                <span class="text-xs font-bold wa-green" id="waQrSizeValue">220 px</span>
                            </div>

                            <input
                                type="range"
                                id="waQrSize"
                                min="160"
                                max="320"
                                step="20"
                                value="220"
                            >
                        </div>

                        <button type="button" id="waResetQr" class="wa-reset-btn">
                            <i class="fas fa-undo mr-1"></i>
                            Reset QR Customization
                        </button>

                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- FEATURES -->
    <section class="wa-section">
        <div class="wa-container">

            <div class="wa-section-heading">
                <span class="eyebrow">WHY USE OUR TOOL</span>
                <h2>A Simpler Way to Connect on WhatsApp</h2>
                <p>
                    Make customer communication easier with a ready-to-share
                    WhatsApp link and customizable QR code.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">

                <div class="wa-feature-card">
                    <div class="wa-feature-icon"><i class="fas fa-link"></i></div>
                    <h3>Instant WhatsApp Link</h3>
                    <p>Create a clickable link that takes customers directly to your WhatsApp conversation.</p>
                </div>

                <div class="wa-feature-card">
                    <div class="wa-feature-icon"><i class="fas fa-qrcode"></i></div>
                    <h3>Downloadable QR Code</h3>
                    <p>Generate a QR code that customers can scan to start a WhatsApp conversation.</p>
                </div>

                <div class="wa-feature-card">
                    <div class="wa-feature-icon"><i class="fas fa-comment-dots"></i></div>
                    <h3>Pre-filled Messages</h3>
                    <p>Add a ready-made message so customers can start conversations more easily.</p>
                </div>

                <div class="wa-feature-card">
                    <div class="wa-feature-icon"><i class="fas fa-palette"></i></div>
                    <h3>QR Code Customization</h3>
                    <p>Choose QR code colors and sizes to suit your brand and promotional materials.</p>
                </div>

                <div class="wa-feature-card">
                    <div class="wa-feature-icon"><i class="fas fa-share-alt"></i></div>
                    <h3>Easy to Share</h3>
                    <p>Copy your WhatsApp link or share it across websites, social media and campaigns.</p>
                </div>

                <div class="wa-feature-card">
                    <div class="wa-feature-icon"><i class="fas fa-laptop"></i></div>
                    <h3>Simple Online Tool</h3>
                    <p>Generate your link and QR code directly from your browser without installing software.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- HOW IT WORKS -->
    <section class="wa-section wa-soft-section">
        <div class="wa-container">

            <div class="wa-section-heading">
                <span class="eyebrow">HOW IT WORKS</span>
                <h2>Get Your WhatsApp Link in 3 Easy Steps</h2>
                <p>No complicated setup. Just enter your details and generate your link.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-5">

                <div class="wa-step-card">
                    <div class="wa-step-number">01</div>
                    <div>
                        <h3>Enter Your Number</h3>
                        <p>Select your country code and enter the WhatsApp number you want customers to contact.</p>
                    </div>
                </div>

                <div class="wa-step-card">
                    <div class="wa-step-number">02</div>
                    <div>
                        <h3>Add Your Message</h3>
                        <p>Enter an optional pre-filled message that customers can use when starting a conversation.</p>
                    </div>
                </div>

                <div class="wa-step-card">
                    <div class="wa-step-number">03</div>
                    <div>
                        <h3>Generate & Share</h3>
                        <p>Generate your WhatsApp link, download its QR code and share it with your audience.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- USE CASES -->
    <section class="wa-section">
        <div class="wa-container">

            <div class="wa-section-heading">
                <span class="eyebrow">BUSINESS APPLICATIONS</span>
                <h2>Where Can You Use Your WhatsApp QR Code?</h2>
                <p>Bring your customers closer to your business across multiple touchpoints.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">

                <div class="wa-use-card">
                    <i class="fas fa-globe"></i>
                    <h3>Business Websites</h3>
                    <p>Add your WhatsApp link to your website and landing pages.</p>
                </div>

                <div class="wa-use-card">
                    <i class="fas fa-print"></i>
                    <h3>Posters & Brochures</h3>
                    <p>Print your QR code on marketing materials for easy customer access.</p>
                </div>

                <div class="wa-use-card">
                    <i class="fas fa-box-open"></i>
                    <h3>Product Packaging</h3>
                    <p>Place your WhatsApp QR code on product boxes and labels.</p>
                </div>

                <div class="wa-use-card">
                    <i class="fas fa-store"></i>
                    <h3>Retail Stores</h3>
                    <p>Display your QR code at counters and in-store promotional displays.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- FAQ -->
    <section class="wa-section wa-soft-section">
        <div class="wa-container">

            <div class="wa-section-heading">
                <span class="eyebrow">FREQUENTLY ASKED QUESTIONS</span>
                <h2>Everything You Need to Know</h2>
                <p>Find answers to common questions about WhatsApp links and QR codes.</p>
            </div>

            <div class="wa-faq">

                <details>
                    <summary>
                        What is a WhatsApp Link Generator?
                        <i class="fas fa-plus"></i>
                    </summary>
                    <div class="wa-faq-answer">
                        A WhatsApp Link Generator creates a clickable link that opens a WhatsApp conversation with a specified phone number. You can share the link with customers so they can contact your business directly.
                    </div>
                </details>

                <details>
                    <summary>
                        Can I create a WhatsApp QR code?
                        <i class="fas fa-plus"></i>
                    </summary>
                    <div class="wa-faq-answer">
                        Yes. Once you generate your WhatsApp link, a QR code is created for it. You can customize its colors and size, then download it for use on posters, packaging, websites and other materials.
                    </div>
                </details>

                <details>
                    <summary>
                        Can I add a pre-filled WhatsApp message?
                        <i class="fas fa-plus"></i>
                    </summary>
                    <div class="wa-faq-answer">
                        Yes. You can enter an optional message while generating your link. The message will appear automatically in the WhatsApp chat when someone opens the link.
                    </div>
                </details>

                <details>
                    <summary>
                        Is the WhatsApp Link Generator free?
                        <i class="fas fa-plus"></i>
                    </summary>
                    <div class="wa-faq-answer">
                        Yes. You can use this tool to generate WhatsApp links and QR codes without paying a tool usage fee.
                    </div>
                </details>

                <details>
                    <summary>
                        Does Textora store my WhatsApp number or message?
                        <i class="fas fa-plus"></i>
                    </summary>
                    <div class="wa-faq-answer">
                        The QR code is generated in your browser. When you request a branded short link, your phone number and message are sent to Textora's link-generation endpoint to create that short link.
                    </div>
                </details>

            </div>
        </div>
    </section>


    <!-- CTA -->
    <section class="wa-section">
        <div class="wa-container">

            <div class="wa-cta">

                <span class="wa-eyebrow">
                    <i class="fas fa-comments"></i>
                    GROW YOUR BUSINESS
                </span>

                <h2 class="mt-5">Need More Than a WhatsApp Link?</h2>

                <p>
                    Take your business communication further with WhatsApp Business API,
                    bulk messaging and intelligent customer engagement solutions from Textora.
                </p>

                <div class="wa-cta-buttons">

                    <a href="/whatsapp-business-api" class="wa-btn-primary">
                        Explore WhatsApp Business API
                        <i class="fas fa-arrow-right"></i>
                    </a>

                    <a href="/contact-us" class="wa-btn-secondary">
                        Talk to Our Team
                        <i class="fas fa-headset"></i>
                    </a>

                </div>

            </div>
        </div>
    </section>

</div>


<!-- RESULT POPUP -->
<div
    id="waResultModal"
    class="wa-modal hidden"
    role="dialog"
    aria-modal="true"
    aria-labelledby="waModalTitle"
    aria-hidden="true"
>
    <div class="wa-modal-dialog">

        <div class="wa-modal-header">

            <button
                type="button"
                id="waModalClose"
                class="wa-modal-close"
                aria-label="Close popup"
            >
                <i class="fas fa-times"></i>
            </button>

            <div class="wa-success-icon">
                <i class="fas fa-check"></i>
            </div>

            <h3 id="waModalTitle">Your WhatsApp Link Is Ready!</h3>

            <p>Your link and QR code are ready to share with customers.</p>

        </div>

        <div class="wa-modal-body">

            <label class="wa-label" for="waModalLink">
                Your Generated WhatsApp Link
            </label>

            <div class="wa-modal-linkbox">
                <input type="text" id="waModalLink" readonly>

                <button type="button" id="waCopyLink" class="wa-copy-btn">
                    <i class="fas fa-copy mr-1"></i> Copy
                </button>
            </div>

            <div class="wa-modal-qr-wrap">
                <div id="waModalQrCode"></div>
                <p>Scan this QR code to open WhatsApp</p>
            </div>

            <div class="wa-modal-actions">

                <button type="button" id="waDownloadQr" class="wa-modal-action">
                    <i class="fas fa-download mr-1"></i>
                    Download QR
                </button>

                <button type="button" id="waOpenWhatsapp" class="wa-modal-action primary">
                    <i class="fab fa-whatsapp mr-1"></i>
                    Open WhatsApp
                </button>

                <button
                    type="button"
                    id="waShareLink"
                    class="wa-modal-action"
                    style="grid-column:1/-1;"
                >
                    <i class="fas fa-share-alt mr-1"></i>
                    Share Link
                </button>

            </div>

        </div>
    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('waGeneratorForm');
    const countryCode = document.getElementById('waCountryCode');
    const phoneInput = document.getElementById('waPhoneNumber');
    const messageInput = document.getElementById('waMessage');
    const charCount = document.getElementById('waCharCount');
    const generateBtn = document.getElementById('waGenerateBtn');
    const phoneError = document.getElementById('waPhoneError');

    const qrColor = document.getElementById('waQrColor');
    const qrBgColor = document.getElementById('waQrBgColor');
    const qrSize = document.getElementById('waQrSize');
    const qrSizeValue = document.getElementById('waQrSizeValue');
    const resetQr = document.getElementById('waResetQr');

    const inlineQr = document.getElementById('waInlineQrCode');

    const modal = document.getElementById('waResultModal');
    const modalClose = document.getElementById('waModalClose');
    const modalLink = document.getElementById('waModalLink');
    const modalQr = document.getElementById('waModalQrCode');

    const copyBtn = document.getElementById('waCopyLink');
    const downloadBtn = document.getElementById('waDownloadQr');
    const openWhatsappBtn = document.getElementById('waOpenWhatsapp');
    const shareBtn = document.getElementById('waShareLink');

    let generatedLink = '';
    let generatedPhone = '';
    let lastFocusedElement = null;

    function getCsrfToken() {
        const token = document.querySelector('meta[name="csrf-token"]');
        return token ? token.getAttribute('content') : '';
    }

    function getCleanPhone() {
        return phoneInput.value.replace(/\D/g, '');
    }

    function getFullPhone() {
        return countryCode.value.replace(/\D/g, '') + getCleanPhone();
    }

    messageInput.addEventListener('input', function () {
        charCount.textContent = messageInput.value.length + '/500';
    });

    phoneInput.addEventListener('input', function () {
        phoneInput.value = phoneInput.value.replace(/\D/g, '').slice(0, 15);
        phoneError.style.display = 'none';
        phoneInput.classList.remove('border-red-500');
    });

    /* QR GENERATION */

    function renderQr(target, text) {

        if (!target || !text) return;

        if (typeof QRCode === 'undefined') {
            console.error('QRCodeJS library is not loaded.');
            alert('QR Code library load nahi hui. Please page refresh karein.');
            return;
        }

        target.innerHTML = '';

        const size = parseInt(qrSize.value, 10) || 220;

        new QRCode(target, {
            text: text,
            width: size,
            height: size,
            colorDark: qrColor.value,
            colorLight: qrBgColor.value,
            correctLevel: QRCode.CorrectLevel.H
        });
    }

    function renderAllQr() {

        if (!generatedLink) return;

        renderQr(inlineQr, generatedLink);

        if (!modal.classList.contains('hidden')) {
            renderQr(modalQr, generatedLink);
        }
    }

    /* MODAL */

    function openModal() {

        lastFocusedElement = document.activeElement;

        modal.classList.remove('hidden');
        modal.setAttribute('aria-hidden', 'false');

        document.body.style.overflow = 'hidden';

        requestAnimationFrame(function () {
            renderQr(modalQr, generatedLink);
        });

        modalClose.focus();
    }

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
        if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeModal();
        }
    });

    /* COPY LINK */

    function fallbackCopy(text) {

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

    async function copyText(text) {

        try {
            if (navigator.clipboard && window.isSecureContext) {
                await navigator.clipboard.writeText(text);
                return true;
            }
        } catch (error) {}

        return fallbackCopy(text);
    }

    function showCopySuccess(button) {

        const original = button.innerHTML;

        button.innerHTML = '<i class="fas fa-check mr-1"></i> Copied!';

        setTimeout(function () {
            button.innerHTML = original;
        }, 1800);
    }

    copyBtn.addEventListener('click', async function () {

        if (!generatedLink) return;

        const success = await copyText(generatedLink);

        if (success) {
            showCopySuccess(copyBtn);
        } else {
            alert('Unable to copy automatically. Please select and copy the link.');
        }
    });

    /* DOWNLOAD QR */

    function downloadQr() {

        const canvas = modalQr.querySelector('canvas');
        const image = modalQr.querySelector('img');

        let imageUrl = '';

        if (canvas) {
            imageUrl = canvas.toDataURL('image/png');
        } else if (image && image.src) {
            imageUrl = image.src;
        }

        if (!imageUrl) {
            alert('QR code is not ready yet. Please try again.');
            return;
        }

        const link = document.createElement('a');

        link.href = imageUrl;
        link.download = 'textora-whatsapp-qr.png';

        document.body.appendChild(link);
        link.click();
        link.remove();
    }

    downloadBtn.addEventListener('click', downloadQr);

    /* OPEN WHATSAPP */

    openWhatsappBtn.addEventListener('click', function () {

        if (!generatedLink) return;

        window.open(generatedLink, '_blank', 'noopener,noreferrer');
    });

    /* SHARE LINK */

    shareBtn.addEventListener('click', async function () {

        if (!generatedLink) return;

        if (navigator.share) {

            try {
                await navigator.share({
                    title: 'Connect with me on WhatsApp',
                    text: 'Start a WhatsApp conversation with me.',
                    url: generatedLink
                });

            } catch (error) {

                if (error.name !== 'AbortError') {
                    const success = await copyText(generatedLink);

                    if (success) {
                        showCopySuccess(shareBtn);
                    }
                }
            }

        } else {

            const success = await copyText(generatedLink);

            if (success) {
                showCopySuccess(shareBtn);
            } else {
                alert('Unable to share. Please copy the link manually.');
            }
        }
    });

    /* DIRECT WHATSAPP LINK */

    function directWhatsappLink(phone, message) {

        return 'https://wa.me/' + phone +
            (message ? '?text=' + encodeURIComponent(message) : '');
    }

    /* BACKEND SHORT LINK */

    async function createBrandedLink(phone, message) {

        const response = await fetch('/whatsapp-links/generate', {
            method: 'POST',

            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': getCsrfToken()
            },

            body: JSON.stringify({
                country_code: countryCode.value,
                phone_number: phone,
                message: message
            })
        });

        if (!response.ok) {
            throw new Error('Unable to generate branded link');
        }

        const data = await response.json();

        if (data.status === 'success' && data.short_url) {
            return data.short_url;
        }

        throw new Error('Branded short link not returned');
    }

    /* GENERATE BUTTON */

    form.addEventListener('submit', async function (event) {

        event.preventDefault();

        const phone = getCleanPhone();
        const message = messageInput.value.trim();

        if (phone.length < 6 || phone.length > 15) {

            phoneError.style.display = 'block';
            phoneInput.classList.add('border-red-500');
            phoneInput.focus();

            return;
        }

        if (!getCsrfToken()) {
            alert('Security token is missing. Please refresh the page and try again.');
            return;
        }

        generateBtn.disabled = true;

        generateBtn.innerHTML =
            '<i class="fas fa-spinner fa-spin mr-2"></i> Generating...';

        generatedPhone = getFullPhone();

        // Fallback link, used if the branded link endpoint fails.
        generatedLink = directWhatsappLink(generatedPhone, message);

        try {

            generatedLink = await createBrandedLink(phone, message);

        } catch (error) {

            console.warn('Using direct WhatsApp link:', error);
        }

        modalLink.value = generatedLink;

        // Generate inline QR with current customization.
        renderQr(inlineQr, generatedLink);

        // Open popup and render its QR.
        openModal();

        generateBtn.disabled = false;

        generateBtn.innerHTML =
            '<i class="fas fa-magic mr-2"></i> Generate WhatsApp Link';
    });

    /* LIVE QR CUSTOMIZATION */

    function refreshQrIfGenerated() {

        qrSizeValue.textContent = qrSize.value + ' px';

        if (generatedLink) {
            renderAllQr();
        }
    }

    qrColor.addEventListener('input', refreshQrIfGenerated);
    qrColor.addEventListener('change', refreshQrIfGenerated);

    qrBgColor.addEventListener('input', refreshQrIfGenerated);
    qrBgColor.addEventListener('change', refreshQrIfGenerated);

    qrSize.addEventListener('input', refreshQrIfGenerated);
    qrSize.addEventListener('change', refreshQrIfGenerated);

    /* RESET CUSTOMIZATION */

    resetQr.addEventListener('click', function () {

        qrColor.value = '#111827';
        qrBgColor.value = '#ffffff';
        qrSize.value = '220';

        refreshQrIfGenerated();
    });

    /* FAQ ACCORDION */

    document.querySelectorAll('.wa-faq details').forEach(function (detail) {

        detail.addEventListener('toggle', function () {

            if (!detail.open) return;

            document.querySelectorAll('.wa-faq details').forEach(function (other) {

                if (other !== detail) {
                    other.open = false;
                }
            });
        });
    });

});
</script>

</x-master-page>
