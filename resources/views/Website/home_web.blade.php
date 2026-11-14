<x-master-page
    title="Official WhatsApp Business API, Bulk SMS Gateway & Enterprise CRM | Textora"
    description="Textora Technologies provides Enterprise WhatsApp Business API, Bulk SMS Gateway, RCS Messaging, Voice OBD, and in-house Textora CRM & HRMS suites. 100% TRAI DLT compliant with multi-operator routing."
    keywords="WhatsApp Business API, Bulk SMS Gateway, RCS Messaging, OTP SMS, Voice OBD, DLT Registration, Textora CRM, Textora HRMS, CPaaS India"
>

@push('head-scripts')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://textorasms.com/#organization",
      "name": "Textora Technologies Pvt. Ltd.",
      "url": "https://textorasms.com",
      "logo": "https://textorasms.com/images/textorasms-svg-logo.svg",
      "sameAs": [
        "https://www.facebook.com/profile.php?id=61584312038555",
        "https://www.instagram.com/textora_sms/",
        "https://www.linkedin.com/company/textora-technologies/"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-9187054466",
        "contactType": "sales",
        "areaServed": "IN",
        "availableLanguage": ["en", "hi"]
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://textorasms.com/#website",
      "url": "https://textorasms.com",
      "name": "Textora Technologies",
      "publisher": {
        "@id": "https://textorasms.com/#organization"
      }
    }
  ]
}
</script>
<style>
  /* Smooth infinite marquee for partner logos */
  @keyframes logoTicker {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  .animate-logo-ticker {
    display: flex;
    width: max-content;
    animation: logoTicker 32s linear infinite;
  }
  .animate-logo-ticker:hover {
    animation-play-state: paused;
  }
</style>
@endpush

<main class="text-slate-900 bg-white">

<!-- =========================================================
     HERO SECTION
     Tighter top padding, reduced gap with header, outcome-focused
========================================================= -->
<section class="relative pt-28 pb-16 sm:pt-32 sm:pb-20 lg:pt-32 lg:pb-24 bg-[#fafafa] border-b border-slate-200/80 overflow-hidden">



    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            
            <!-- Left: Hero Copy & Value Proposition -->
            <div class="lg:col-span-7 text-center lg:text-left space-y-6">
                
                <!-- Trust Badge Pill -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-100 border border-slate-200 text-slate-700 text-xs font-medium">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#049a3d]"></span>
                    <span>Official Meta Tech Partner &middot; 100% TRAI DLT Compliant</span>
                </div>

                <!-- Primary Headline -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[48px] font-semibold tracking-tight text-slate-900 leading-[1.15]">
                    Enterprise messaging infrastructure for <br class="hidden sm:inline">
                    <span class="text-[#049a3d]">
                        WhatsApp, SMS & RCS
                    </span>
                </h1>

                <!-- Outcome-Oriented Subhead -->
                <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto lg:mx-0 font-normal leading-relaxed">
                    Direct telecom routes, sub-2.4s OTP dispatch, and high-throughput campaign broadcasting with smart multi-operator failover across Airtel, Jio, and Vi.
                </p>

                <!-- Dual Action CTAs -->
                <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start pt-1">
                    <a href="{{ url('pricing-web') }}" 
                        class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-lg bg-[#049a3d] text-white font-medium text-sm hover:bg-[#038334] transition">
                        <span>Explore Pricing & Plans</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                    
                    <button type="button" onclick="openModall()" 
                        class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-lg bg-white text-slate-700 font-medium text-sm border border-slate-200 hover:border-slate-300 hover:bg-slate-50 transition">
                        <i class="fa-regular fa-calendar text-slate-500"></i>
                        <span>Book 15-Min Live Demo</span>
                    </button>
                </div>

                <!-- Core Proof Points -->
                <div class="pt-6 border-t border-slate-200 grid grid-cols-3 gap-4 text-center lg:text-left">
                    <div>
                        <div class="text-xl sm:text-2xl font-semibold text-slate-900 font-mono tracking-tight">10M+</div>
                        <div class="text-xs text-slate-500 mt-0.5">Daily messages routed</div>
                    </div>
                    <div>
                        <div class="text-xl sm:text-2xl font-semibold text-slate-900 font-mono tracking-tight">&lt; 2.4s</div>
                        <div class="text-xs text-slate-500 mt-0.5">Average OTP latency</div>
                    </div>
                    <div>
                        <div class="text-xl sm:text-2xl font-semibold text-slate-900 font-mono tracking-tight">99.98%</div>
                        <div class="text-xs text-slate-500 mt-0.5">Platform uptime SLA</div>
                    </div>
                </div>

            </div>

            <!-- Right: Textora Telecom Gateway & Campaign Dispatch Terminal -->
            <div class="lg:col-span-5 flex justify-center relative pt-2 lg:pt-0">
                <div class="w-full max-w-lg bg-slate-900 rounded-2xl border border-slate-800 shadow-xl overflow-hidden font-sans">
                    <!-- Terminal Window Header -->
                    <div class="bg-slate-950/80 px-4 py-3 border-b border-slate-800 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-slate-700 inline-block"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-slate-700 inline-block"></span>
                            <span class="w-2.5 h-2.5 rounded-full bg-slate-700 inline-block"></span>
                            <span class="text-xs font-mono text-slate-400 ml-2">gateway // cluster-mumbai-01</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            <span class="text-[11px] font-mono text-emerald-400">ONLINE</span>
                        </div>
                    </div>

                    <!-- Telemetry Strip -->
                    <div class="bg-slate-900/90 px-4 py-2 border-b border-slate-800/80 grid grid-cols-3 gap-2 text-[11px] font-mono">
                        <div class="text-slate-400">
                            <span class="text-slate-500 block text-[10px]">META CLOUD API</span>
                            <span class="text-emerald-400 font-semibold">200 OK &middot; 1.2s</span>
                        </div>
                        <div class="text-slate-400 border-x border-slate-800 px-2">
                            <span class="text-slate-500 block text-[10px]">TRAI DLT</span>
                            <span class="text-emerald-400 font-semibold">SCRUBBED &middot; 0% DROP</span>
                        </div>
                        <div class="text-slate-400 text-right">
                            <span class="text-slate-500 block text-[10px]">CARRIER BIND</span>
                            <span class="text-slate-200 font-semibold">AIRTEL / JIO / VI</span>
                        </div>
                    </div>

                    <!-- Live Dispatch Streams Container -->
                    <div class="p-4 space-y-3 bg-slate-950/50">
                        <!-- Dispatch Stream 1: Verified WhatsApp Broadcast -->
                        <div class="bg-slate-900 rounded-xl p-3 border border-slate-800 space-y-2">
                            <div class="flex items-center justify-between text-xs">
                                <div class="flex items-center gap-2">
                                    <div class="w-6 h-6 rounded-md bg-[#049a3d]/20 flex items-center justify-center text-[#049a3d]">
                                        <i class="fa-brands fa-whatsapp text-xs"></i>
                                    </div>
                                    <span class="font-medium text-slate-200">WhatsApp Business API</span>
                                    <span class="text-[10px] bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 px-1.5 py-0.5 rounded font-mono">VERIFIED</span>
                                </div>
                                <span class="text-[11px] font-mono text-slate-400">14s ago</span>
                            </div>

                            <div class="bg-slate-950 rounded-lg p-2.5 border border-slate-800/80 space-y-1 text-xs">
                                <div class="flex items-center justify-between text-[11px] text-slate-400">
                                    <span class="font-mono text-slate-300">Campaign: Festive Flash Sale</span>
                                    <span class="text-emerald-400 font-mono font-medium">98.4% delivered</span>
                                </div>
                                <p class="text-slate-300 text-xs leading-relaxed">
                                    50,000 messages dispatched via Meta Cloud API with instant interactive CTA buttons.
                                </p>
                            </div>

                            <div class="flex items-center justify-between pt-1 text-[11px] font-mono text-slate-400">
                                <span>Payload: TEMPLATE_INTERACTIVE</span>
                                <span class="text-emerald-400">Latency: 1,420ms</span>
                            </div>
                        </div>

                        <!-- Dispatch Stream 2: Mission-Critical SMS OTP Failover -->
                        <div class="bg-slate-900 rounded-xl p-3 border border-slate-800 space-y-2">
                            <div class="flex items-center justify-between text-xs">
                                <div class="flex items-center gap-2">
                                    <div class="w-6 h-6 rounded-md bg-blue-500/15 flex items-center justify-center text-blue-400">
                                        <i class="fa-solid fa-tower-broadcast text-xs"></i>
                                    </div>
                                    <span class="font-medium text-slate-200">Telecom SMPP Gateway</span>
                                    <span class="text-[10px] bg-blue-500/10 text-blue-400 border border-blue-500/20 px-1.5 py-0.5 rounded font-mono">PRIORITY 1</span>
                                </div>
                                <span class="text-[11px] font-mono text-slate-400">just now</span>
                            </div>

                            <div class="bg-slate-950 rounded-lg p-2.5 border border-slate-800/80 space-y-1 text-xs">
                                <div class="flex items-center justify-between text-[11px]">
                                    <span class="font-mono text-slate-400">DLT ID: 110148920192 &middot; OTP Login</span>
                                    <span class="text-emerald-400 font-mono font-medium">DELIVRD (1.8s)</span>
                                </div>
                                <p class="text-slate-400 text-xs font-mono">
                                    Your Textora verification code is <span class="text-slate-100 font-bold bg-slate-800 px-1.5 py-0.5 rounded">482910</span>. Valid for 10 minutes.
                                </p>
                            </div>

                            <div class="flex items-center justify-between pt-1 text-[11px] font-mono text-slate-400">
                                <span>Route: AIRTEL_DLT_DIRECT</span>
                                <span class="text-emerald-400">Smart Failover: READY</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Status Bar -->
                    <div class="bg-slate-950 px-4 py-2.5 border-t border-slate-800 flex items-center justify-between text-[11px] font-mono text-slate-400">
                        <span class="flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            <span>Throughput: 4,820 msg/sec</span>
                        </span>
                        <span class="text-slate-500">Uptime: 99.98%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
     DIRECT TELECOM & META CLOUD GATEWAYS (ENLARGED & PROMINENT)
========================================================= -->
<section class="border-y border-slate-200/90 bg-white py-8 shadow-xs relative z-10" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
            
            <div class="text-center lg:text-left shrink-0">
                <span class="text-xs font-black text-emerald-700 uppercase tracking-widest block mb-1">
                    <i class="fa-solid fa-tower-broadcast mr-1"></i> ENTERPRISE MULTI-OPERATOR INFRASTRUCTURE
                </span>
                <h2 class="text-xl sm:text-2xl font-black text-slate-900 tracking-tight">Direct Telecom & Meta Cloud Gateways</h2>
                <p class="text-xs text-slate-500 font-medium mt-0.5">Direct carrier SMPP binds & cloud tier-1 telecom connectivity with &lt; 2.4s latency</p>
            </div>

            <!-- Operator & Platform Badges with Authentic Original Logos -->
            <div class="flex flex-wrap items-center justify-center gap-3.5 sm:gap-4">
                
                <!-- Airtel -->
                <div class="flex items-center justify-center h-16 sm:h-20 w-28 sm:w-32 px-3 py-2 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:shadow-md hover:border-red-500 transition duration-200 hover:-translate-y-0.5" title="Bharti Airtel Direct Telecom Gateway">
                    <img src="{{ asset('images/operators/airtel.png') }}" 
                         alt="Bharti Airtel" 
                         class="h-10 sm:h-12 w-auto max-w-[95px] object-contain">
                </div>

                <!-- Jio Reliance -->
                <div class="flex items-center justify-center h-16 sm:h-20 w-28 sm:w-32 px-3 py-2 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:shadow-md hover:border-blue-500 transition duration-200 hover:-translate-y-0.5" title="Reliance Jio Direct Telecom Gateway">
                    <img src="{{ asset('images/operators/jio.png') }}" 
                         alt="Reliance Jio" 
                         class="h-10 sm:h-12 w-auto max-w-[95px] object-contain">
                </div>

                <!-- Vodafone Idea (Vi) -->
                <div class="flex items-center justify-center h-16 sm:h-20 w-28 sm:w-32 px-3 py-2 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:shadow-md hover:border-red-600 transition duration-200 hover:-translate-y-0.5" title="Vodafone Idea (Vi) Direct Telecom Gateway">
                    <img src="{{ asset('images/operators/vi.png') }}" 
                         alt="Vodafone Idea (Vi)" 
                         class="h-10 sm:h-12 w-auto max-w-[95px] object-contain">
                </div>

                <!-- BSNL -->
                <div class="flex items-center justify-center h-16 sm:h-20 w-28 sm:w-32 px-3 py-2 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:shadow-md hover:border-blue-600 transition duration-200 hover:-translate-y-0.5" title="BSNL Direct Telecom Gateway">
                    <img src="{{ asset('images/operators/bsnl.png') }}" 
                         alt="BSNL Telecom" 
                         class="h-10 sm:h-12 w-auto max-w-[95px] object-contain">
                </div>

                <!-- Meta Cloud API Partner -->
                <div class="flex items-center justify-center h-16 sm:h-20 px-5 py-2 rounded-2xl bg-white border border-slate-200/90 shadow-xs hover:shadow-md hover:border-emerald-500 transition duration-200 hover:-translate-y-0.5 min-w-[130px]" title="Official Meta Cloud API Business Partner">
                    <img src="{{ asset('images/operators/meta.png') }}" 
                         alt="Official Meta Business Partner" 
                         class="h-8 sm:h-10 w-auto max-w-[125px] object-contain">
                </div>

                <!-- TRAI DLT Compliant Badge -->
                <div class="flex items-center gap-2 text-emerald-800 bg-emerald-50 px-5 py-3.5 rounded-2xl text-xs font-bold border border-emerald-200 shadow-xs">
                    <i class="fa-solid fa-circle-check text-emerald-600 text-base"></i>
                    <div>
                        <div class="leading-none">100% TRAI DLT</div>
                        <div class="text-[10px] text-emerald-700 font-semibold mt-0.5">Compliant Binds</div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- =========================================================
     OUR TRUSTED PARTNERS CAROUSEL (BEST-IN-CLASS, PROMINENT & FULL COLOR)
========================================================= -->
<section class="py-14 sm:py-20 bg-white border-b border-slate-100 overflow-hidden" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-10 sm:mb-14">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-50 text-emerald-800 text-xs sm:text-sm font-bold border border-emerald-200/90 shadow-xs mb-3">
            <i class="fa-solid fa-handshake-angle text-[#049a3d]"></i>
            OUR TRUSTED PARTNERS
        </span>
        <h2 class="mt-2 text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight">
            Trusted by Businesses <span class="text-[#049a3d]">Across Industries</span>
        </h2>
        <p class="mt-3 text-sm sm:text-base md:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Organizations trust Textora Technologies for secure, scalable and reliable business communication.
        </p>
    </div>

    <!-- Infinite Auto-scrolling Ticker Track with Full Color & Large Logos -->
    <div class="relative w-full overflow-hidden [mask-image:linear-gradient(to_right,transparent,white_8%,white_92%,transparent)] py-4">
        <div class="animate-logo-ticker py-2">
            
            <!-- Repeat 1 of Logos (Full Authentic Color & Sized for Maximum Clarity) -->
            <div class="flex items-center gap-6 sm:gap-8 md:gap-10 shrink-0 px-4 sm:px-6">
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/reliable.png') }}" alt="Reliable Properties" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[140px] sm:max-w-[170px] md:max-w-[190px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/tax.png') }}" alt="Tax Safar" class="h-14 sm:h-18 md:h-20 max-h-20 w-auto max-w-[180px] sm:max-w-[220px] md:max-w-[250px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/surabhi.png') }}" alt="Surabhi Medical Science" class="h-16 sm:h-20 md:h-24 max-h-24 w-auto max-w-[130px] sm:max-w-[160px] md:max-w-[180px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/sahyogi.png') }}" alt="Sahyogi" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[140px] sm:max-w-[170px] md:max-w-[190px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/aimt.png') }}" alt="AIMT Leadership School" class="h-14 sm:h-18 md:h-20 max-h-20 w-auto max-w-[180px] sm:max-w-[220px] md:max-w-[250px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/btm.png') }}" alt="BTM Vet Clinic" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[150px] sm:max-w-[180px] md:max-w-[200px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/dexam.png') }}" alt="Design Exam" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[140px] sm:max-w-[170px] md:max-w-[190px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/parkway.png') }}" alt="Parkway" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[150px] sm:max-w-[180px] md:max-w-[200px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/shreeji.png') }}" alt="Shreeji" class="h-14 sm:h-18 md:h-20 max-h-20 w-auto max-w-[180px] sm:max-w-[220px] md:max-w-[250px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/jablipuram.png') }}" alt="Jabalipuram" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[160px] sm:max-w-[190px] md:max-w-[220px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/arihant.png') }}" alt="Arihant Enterprises" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[140px] sm:max-w-[170px] md:max-w-[190px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/rapiddrop.png') }}" alt="Rapid Drop" class="h-14 sm:h-18 md:h-20 max-h-20 w-auto max-w-[160px] sm:max-w-[200px] md:max-w-[230px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/nari.png') }}" alt="Nari" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[140px] sm:max-w-[170px] md:max-w-[190px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
            </div>

            <!-- Repeat 2 of Logos (For seamless infinite loop) -->
            <div class="flex items-center gap-6 sm:gap-8 md:gap-10 shrink-0 px-4 sm:px-6">
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/reliable.png') }}" alt="Reliable Properties" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[140px] sm:max-w-[170px] md:max-w-[190px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/tax.png') }}" alt="Tax Safar" class="h-14 sm:h-18 md:h-20 max-h-20 w-auto max-w-[180px] sm:max-w-[220px] md:max-w-[250px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/surabhi.png') }}" alt="Surabhi Medical Science" class="h-16 sm:h-20 md:h-24 max-h-24 w-auto max-w-[130px] sm:max-w-[160px] md:max-w-[180px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/sahyogi.png') }}" alt="Sahyogi" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[140px] sm:max-w-[170px] md:max-w-[190px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/aimt.png') }}" alt="AIMT Leadership School" class="h-14 sm:h-18 md:h-20 max-h-20 w-auto max-w-[180px] sm:max-w-[220px] md:max-w-[250px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/btm.png') }}" alt="BTM Vet Clinic" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[150px] sm:max-w-[180px] md:max-w-[200px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/dexam.png') }}" alt="Design Exam" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[140px] sm:max-w-[170px] md:max-w-[190px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/parkway.png') }}" alt="Parkway" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[150px] sm:max-w-[180px] md:max-w-[200px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/shreeji.png') }}" alt="Shreeji" class="h-14 sm:h-18 md:h-20 max-h-20 w-auto max-w-[180px] sm:max-w-[220px] md:max-w-[250px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/jablipuram.png') }}" alt="Jabalipuram" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[160px] sm:max-w-[190px] md:max-w-[220px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/arihant.png') }}" alt="Arihant Enterprises" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[140px] sm:max-w-[170px] md:max-w-[190px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/rapiddrop.png') }}" alt="Rapid Drop" class="h-14 sm:h-18 md:h-20 max-h-20 w-auto max-w-[160px] sm:max-w-[200px] md:max-w-[230px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
                <div class="h-20 sm:h-24 md:h-28 flex items-center justify-center shrink-0 px-1">
                    <img src="{{ asset('images/client-logo/nari.png') }}" alt="Nari" class="h-16 sm:h-20 md:h-22 max-h-24 w-auto max-w-[140px] sm:max-w-[170px] md:max-w-[190px] object-contain transition duration-300 transform hover:scale-110 drop-shadow-xs">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
     SECTION 1: UNIFIED BUSINESS MESSAGING<!-- =========================================================
     SECTION 1: UNIFIED BUSINESS MESSAGING (ENTERPRISE CPAAS SUITE)
     FIXED: 100% Balanced, Sorted & Structured 3x2 Grid (No empty slots!)
========================================================= -->
<section class="py-12 lg:py-16 bg-white" id="cpaas-solutions" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-100/70 text-emerald-800 text-xs font-bold uppercase tracking-wider">
                <i class="fa-solid fa-layer-group text-emerald-600"></i>
                Enterprise CPaaS Suite
            </span>
            <h2 class="mt-3 text-3xl sm:text-4xl font-black text-slate-900 tracking-tight leading-tight">
                Unified Business Messaging <span class="text-[#049a3d]">Engineered to Scale</span>
            </h2>
            <p class="mt-3 text-sm sm:text-base text-slate-600 leading-relaxed">
                Empower your marketing, transactional alerts, and customer support with official APIs, verified delivery, and zero telecom bottlenecks.
            </p>
        </div>

        <!-- The Structured 3x2 Grid (6 Balanced Cards) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- CARD 1: WhatsApp Business API -->
            <div class="group bg-white rounded-2xl p-7 border border-slate-200/90 shadow-xs hover:shadow-xl hover:border-emerald-500 transition duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-2xl group-hover:bg-[#049a3d] group-hover:text-white transition duration-200">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <span class="text-[11px] font-bold uppercase tracking-wider bg-emerald-50 text-emerald-800 px-3 py-1 rounded-full border border-emerald-200">
                            Meta Cloud API
                        </span>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-[#049a3d] transition">
                        Official WhatsApp Business API
                    </h3>
                    <p class="mt-2.5 text-slate-600 text-xs sm:text-sm leading-relaxed">
                        Send automated broadcasts, deploy 24/7 AI chatbots, and manage customer inquiries with a multi-agent shared team inbox. Zero unauthorized markups.
                    </p>

                    <ul class="mt-4 space-y-2 text-xs text-slate-600 font-medium border-t border-slate-100 pt-4">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600"></i> Blue Tick verification assistance</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600"></i> 98% open rates with rich media catalogs</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600"></i> Multi-agent shared team inbox</li>
                    </ul>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between">
                    <a href="{{ url('/whatsapp-business-api') }}" class="inline-flex items-center gap-1.5 font-bold text-xs sm:text-sm text-[#049a3d] hover:text-emerald-800 transition">
                        <span>Explore WhatsApp API</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                    <button type="button" onclick="openModall()" class="text-[11px] font-semibold text-slate-500 hover:text-slate-800">
                        Book Demo &rarr;
                    </button>
                </div>
            </div>

            <!-- CARD 2: Bulk SMS Gateway & OTP Engine -->
            <div class="group bg-white rounded-2xl p-7 border border-slate-200/90 shadow-xs hover:shadow-xl hover:border-emerald-500 transition duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl group-hover:bg-[#049a3d] group-hover:text-white transition duration-200">
                            <i class="fa-solid fa-comment-sms"></i>
                        </div>
                        <span class="text-[11px] font-bold uppercase tracking-wider bg-slate-100 text-slate-700 px-3 py-1 rounded-full">
                            &lt; 2.4s Latency
                        </span>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-[#049a3d] transition">
                        Bulk SMS Gateway & OTPs
                    </h3>
                    <p class="mt-2.5 text-slate-600 text-xs sm:text-sm leading-relaxed">
                        100% TRAI DLT compliant promotional, transactional, and OTP SMS routing. Intelligent multi-operator routing prevents delivery bottlenecks.
                    </p>

                    <ul class="mt-4 space-y-2 text-xs text-slate-600 font-medium border-t border-slate-100 pt-4">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600"></i> DND scrubbing with live delivery reports</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600"></i> Custom 6-character sender ID support</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600"></i> Free DLT registration & template approval</li>
                    </ul>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-100">
                    <a href="{{ url('/bulk-sms') }}" class="inline-flex items-center gap-1.5 font-bold text-xs sm:text-sm text-[#049a3d] hover:text-emerald-800 transition">
                        <span>View SMS Gateway</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- CARD 3: RCS Business Messaging -->
            <div class="group bg-white rounded-2xl p-7 border border-slate-200/90 shadow-xs hover:shadow-xl hover:border-emerald-500 transition duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl group-hover:bg-blue-600 group-hover:text-white transition duration-200">
                            <i class="fa-solid fa-message"></i>
                        </div>
                        <span class="text-[11px] font-bold uppercase tracking-wider bg-blue-50 text-blue-700 px-3 py-1 rounded-full border border-blue-200">
                            Next-Gen SMS
                        </span>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition">
                        RCS Business Messaging
                    </h3>
                    <p class="mt-2.5 text-slate-600 text-xs sm:text-sm leading-relaxed">
                        Upgrade standard SMS into verified, interactive experiences inside Android Messages inbox with rich cards, carousel sliders, and action buttons.
                    </p>

                    <ul class="mt-4 space-y-2 text-xs text-slate-600 font-medium border-t border-slate-100 pt-4">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-blue-600"></i> Verified brand logo & business badge</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-blue-600"></i> Interactive CTA chips, carousels & maps</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-blue-600"></i> Native Android inbox delivery without app installs</li>
                    </ul>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-100">
                    <a href="{{ url('/rcs-messaging') }}" class="inline-flex items-center gap-1.5 font-bold text-xs sm:text-sm text-blue-600 hover:text-blue-800 transition">
                        <span>Discover RCS Solutions</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- CARD 4: Developer APIs & Webhook Engine -->
            <div class="group bg-white rounded-2xl p-7 border border-slate-200/90 shadow-xs hover:shadow-xl hover:border-emerald-500 transition duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-slate-100 text-slate-700 flex items-center justify-center text-xl group-hover:bg-slate-900 group-hover:text-white transition duration-200">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <span class="text-[11px] font-bold uppercase tracking-wider bg-slate-100 text-slate-700 px-3 py-1 rounded-full">
                            REST APIs & Webhooks
                        </span>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-[#049a3d] transition">
                        Developer APIs & SDKs
                    </h3>
                    <p class="mt-2.5 text-slate-600 text-xs sm:text-sm leading-relaxed">
                        Integrate enterprise SMS, OTP verification, and WhatsApp messaging in minutes with multi-language SDKs, real-time webhooks, and 99.98% SLA.
                    </p>

                    <ul class="mt-4 space-y-2 text-xs text-slate-600 font-medium border-t border-slate-100 pt-4">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600"></i> Multi-language SDKs (Node, Python, PHP, Java)</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600"></i> Sub-second API response latency</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600"></i> Real-time DLR webhooks & retry queue</li>
                    </ul>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-100">
                    <a href="{{ url('/contact-us') }}" class="inline-flex items-center gap-1.5 font-bold text-xs sm:text-sm text-[#049a3d] hover:text-emerald-800 transition">
                        <span>Read API Documentation</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- CARD 5: Voice Call OBD & Smart IVR -->
            <div class="group bg-white rounded-2xl p-7 border border-slate-200/90 shadow-xs hover:shadow-xl hover:border-emerald-500 transition duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl group-hover:bg-[#049a3d] group-hover:text-white transition duration-200">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <span class="text-[11px] font-bold uppercase tracking-wider bg-slate-100 text-slate-700 px-3 py-1 rounded-full">
                            Automated OBD
                        </span>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-[#049a3d] transition">
                        Voice Call OBD & Voice SMS
                    </h3>
                    <p class="mt-2.5 text-slate-600 text-xs sm:text-sm leading-relaxed">
                        Automate mass voice broadcasts, dynamic IVR reminders, and political/event campaign calls with customizable audio clips and instant retry logic.
                    </p>

                    <ul class="mt-4 space-y-2 text-xs text-slate-600 font-medium border-t border-slate-100 pt-4">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600"></i> 10,000+ simultaneous call channels</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600"></i> Real-time call pickup & listen-duration analytics</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-600"></i> DTMF touch-tone response capture</li>
                    </ul>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-100">
                    <a href="{{ url('/voice-call') }}" class="inline-flex items-center gap-1.5 font-bold text-xs sm:text-sm text-[#049a3d] hover:text-emerald-800 transition">
                        <span>Explore Voice OBD</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- CARD 6: In-House Products â€” Textora CRM & HRMS -->
            <div class="group bg-gradient-to-br from-slate-900 to-slate-950 rounded-2xl p-7 text-white shadow-lg border border-slate-800 hover:border-emerald-500 transition duration-300 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/10 rounded-full blur-2xl pointer-events-none"></div>

                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xl">
                            <i class="fa-solid fa-cubes"></i>
                        </div>
                        <span class="text-[11px] font-bold uppercase tracking-wider bg-emerald-500/20 text-emerald-300 px-3 py-1 rounded-full border border-emerald-500/30">
                            Our In-House Products
                        </span>
                    </div>

                    <h3 class="text-xl font-bold text-white group-hover:text-emerald-400 transition">
                        Textora CRM & HRMS Suites
                    </h3>
                    <p class="mt-2.5 text-slate-300 text-xs sm:text-sm leading-relaxed">
                        Proprietary enterprise software built by Textora. Available for your company to purchase, customize, or deploy on your dedicated private cloud.
                    </p>

                    <ul class="mt-4 space-y-2 text-xs text-slate-300 font-medium border-t border-slate-800 pt-4">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-400"></i> <strong>Textora CRM:</strong> WhatsApp lead pipeline & multi-agent inbox</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-400"></i> <strong>Textora HRMS:</strong> Attendance, payroll & WhatsApp payslips</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-400"></i> One-time purchase or enterprise cloud SaaS</li>
                    </ul>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-800 flex items-center justify-between relative z-10">
                    <a href="#enterprise-products" class="inline-flex items-center gap-1.5 font-bold text-xs sm:text-sm text-emerald-400 hover:text-emerald-300 transition">
                        <span>Explore Products</span>
                        <i class="fa-solid fa-arrow-down text-xs"></i>
                    </a>
                    <button type="button" onclick="openModall()" class="px-3 py-1 rounded-md bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs transition">
                        Request Product Demo
                    </button>
                </div>
            </div>

        </div>

        <!-- Interactive Developer Code Playground -->
        <div class="mt-10 bg-slate-950 rounded-2xl p-6 sm:p-8 border border-slate-800 text-white shadow-xl relative overflow-hidden">
            <div class="flex flex-wrap items-center justify-between gap-4 pb-4 border-b border-slate-800 mb-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-emerald-400">REST API Integration</span>
                    <h3 class="text-lg font-bold text-white">Send your first message in 3 lines of code</h3>
                </div>
                <div class="flex items-center gap-2 bg-slate-900 p-1 rounded-lg border border-slate-800 text-xs font-medium">
                    <button type="button" onclick="switchSnippet('curl')" id="tab-curl" class="snippet-tab px-3 py-1.5 rounded-md bg-emerald-600 text-white font-bold transition">cURL</button>
                    <button type="button" onclick="switchSnippet('node')" id="tab-node" class="snippet-tab px-3 py-1.5 rounded-md text-slate-400 hover:text-white transition">Node.js</button>
                    <button type="button" onclick="switchSnippet('python')" id="tab-python" class="snippet-tab px-3 py-1.5 rounded-md text-slate-400 hover:text-white transition">Python</button>
                    <button type="button" onclick="switchSnippet('php')" id="tab-php" class="snippet-tab px-3 py-1.5 rounded-md text-slate-400 hover:text-white transition">PHP</button>
                </div>
            </div>

            <!-- Snippets -->
            <div class="font-mono text-xs overflow-x-auto text-emerald-300 bg-slate-900/80 p-4 rounded-xl border border-slate-800/80">
                <div id="snippet-curl" class="snippet-block leading-relaxed">
                    <span class="text-slate-500"># Send WhatsApp OTP via Textora Cloud API</span><br>
                    curl -X POST https://api.textorasms.com/v1/whatsapp/send \<br>
                    &nbsp;&nbsp;-H <span class="text-amber-300">"Authorization: Bearer YOUR_API_KEY"</span> \<br>
                    &nbsp;&nbsp;-H <span class="text-amber-300">"Content-Type: application/json"</span> \<br>
                    &nbsp;&nbsp;-d '{<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-300">"to"</span>: <span class="text-amber-300">"+919876543210"</span>,<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-300">"template"</span>: <span class="text-amber-300">"auth_otp_code"</span>,<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-300">"params"</span>: [<span class="text-amber-300">"482910"</span>]<br>
                    &nbsp;&nbsp;}'
                </div>
                <div id="snippet-node" class="snippet-block hidden leading-relaxed">
                    <span class="text-slate-500">// Node.js Axios Example</span><br>
                    const axios = require('axios');<br><br>
                    await axios.post('https://api.textorasms.com/v1/whatsapp/send', {<br>
                    &nbsp;&nbsp;to: '+919876543210',<br>
                    &nbsp;&nbsp;template: 'auth_otp_code',<br>
                    &nbsp;&nbsp;params: ['482910']<br>
                    }, { headers: { Authorization: `Bearer ${process.env.TEXTORA_KEY}` } });
                </div>
                <div id="snippet-python" class="snippet-block hidden leading-relaxed">
                    <span class="text-slate-500"># Python Requests Example</span><br>
                    import requests<br><br>
                    payload = {"to": "+919876543210", "template": "auth_otp_code", "params": ["482910"]}<br>
                    headers = {"Authorization": "Bearer YOUR_API_KEY"}<br>
                    res = requests.post("https://api.textorasms.com/v1/whatsapp/send", json=payload, headers=headers)
                </div>
                <div id="snippet-php" class="snippet-block hidden leading-relaxed">
                    <span class="text-slate-500">// PHP cURL Example</span><br>
                    $ch = curl_init("https://api.textorasms.com/v1/whatsapp/send");<br>
                    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Bearer YOUR_API_KEY", "Content-Type: application/json"]);<br>
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(["to" => "+919876543210", "template" => "auth_otp_code", "params" => ["482910"]]));<br>
                    curl_exec($ch);
                </div>
            </div>

            <div class="mt-4 pt-4 border-t border-slate-800 flex flex-wrap items-center justify-between text-xs text-slate-400">
                <div class="flex items-center gap-4">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-circle text-emerald-400 text-[8px]"></i> 99.98% Gateway SLA</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-shield-halved text-emerald-400 text-[10px]"></i> AES-256 Encrypted</span>
                </div>
                <a href="{{ url('/contact-us') }}" class="font-bold text-emerald-400 hover:text-emerald-300">Browse Full API Reference &rarr;</a>
            </div>
        </div>

    </div>
</section>

<!-- =========================================================
     NEW DEDICATED SECTION: IN-HOUSE ENTERPRISE PRODUCTS (CRM & HRMS)
     Prominently showcase Textora CRM & HRMS available for client purchase
========================================================= -->
<section class="py-12 lg:py-16 bg-[#fafcfb] border-t border-slate-100" id="enterprise-products" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-100/70 text-emerald-800 text-xs font-bold uppercase tracking-wider">
                <i class="fa-solid fa-box-open text-emerald-600"></i>
                Proprietary In-House Solutions
            </span>
            <h2 class="mt-3 text-3xl sm:text-4xl font-black text-slate-900 tracking-tight leading-tight">
                Textora Enterprise Products: <br class="hidden sm:inline">
                <span class="text-[#049a3d]">CRM & HRMS Business Suites</span>
            </h2>
            <p class="mt-3 text-sm sm:text-base text-slate-600 leading-relaxed">
                Engineered internally to run our own high-scale operations. We are now offering these battle-tested platforms for external enterprise deployment, licensing, and purchase.
            </p>
        </div>

        <!-- 2 Side-by-Side Product Cards -->
        <div class="grid lg:grid-cols-2 gap-8">
            
            <!-- PRODUCT 1: TEXTORA CRM -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl transition duration-300 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 bg-emerald-100/40 rounded-full blur-2xl pointer-events-none"></div>

                <div>
                    <!-- Badge & Icon -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-[#049a3d] flex items-center justify-center text-2xl font-black">
                            <i class="fa-solid fa-users-gear"></i>
                        </div>
                        <span class="text-xs font-bold uppercase tracking-wider bg-emerald-50 text-emerald-800 px-3.5 py-1 rounded-full border border-emerald-200">
                            Available For Purchase / SaaS
                        </span>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900">
                        Textora CRM & Sales Pipeline Hub
                    </h3>
                    <p class="mt-3 text-slate-600 text-sm leading-relaxed">
                        An omnichannel lead conversion engine directly integrated with WhatsApp Business API, SMS, and Voice OBD. Track leads from first inquiry to closed revenue without manual data entry.
                    </p>

                    <!-- Key Capabilities -->
                    <div class="mt-6 space-y-3 pt-6 border-t border-slate-100">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-md bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-slate-800">Unified WhatsApp & Multi-Agent Team Chat</h4>
                                <p class="text-xs text-slate-500">Distribute inbound WhatsApp leads to sales agents with round-robin auto-assignment and live chat monitor.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-md bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-slate-800">Visual Kanban Pipeline & Deal Stages</h4>
                                <p class="text-xs text-slate-500">Drag and drop leads through stages, set auto-followups, and calculate forecast revenue in real time.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-md bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-slate-800">Native CPaaS Triggering</h4>
                                <p class="text-xs text-slate-500">Trigger DLT SMS, RCS rich cards, or WhatsApp templates directly from any lead profile with 1 click.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-md bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-slate-800">Flexible Deployment Options</h4>
                                <p class="text-xs text-slate-500">Ready for cloud subscription, dedicated private cloud hosting, or customized on-premise installation.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-100 flex flex-col sm:flex-row gap-3 items-center justify-between">
                    <button type="button" onclick="openModall()" class="w-full sm:w-auto px-6 py-3 rounded-xl bg-gradient-to-r from-[#049a3d] to-[#038334] text-white font-bold text-xs shadow-md hover:shadow-lg transition">
                        Schedule CRM Demo & Pricing
                    </button>
                    <span class="text-xs font-semibold text-slate-500">Ready to Deploy in 24 Hours</span>
                </div>
            </div>

            <!-- PRODUCT 2: TEXTORA HRMS -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl transition duration-300 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 bg-blue-100/40 rounded-full blur-2xl pointer-events-none"></div>

                <div>
                    <!-- Badge & Icon -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center text-2xl font-black">
                            <i class="fa-solid fa-id-card-clip"></i>
                        </div>
                        <span class="text-xs font-bold uppercase tracking-wider bg-blue-50 text-blue-800 px-3.5 py-1 rounded-full border border-blue-200">
                            Available For Purchase / SaaS
                        </span>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900">
                        Textora HRMS & Workforce Payroll Suite
                    </h3>
                    <p class="mt-3 text-slate-600 text-sm leading-relaxed">
                        Complete employee lifecycle management from biometric attendance to automated salary slip dispatch via WhatsApp. Eliminates HR paperwork and compliance headaches.
                    </p>

                    <!-- Key Capabilities -->
                    <div class="mt-6 space-y-3 pt-6 border-t border-slate-100">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-md bg-blue-100 text-blue-700 flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-slate-800">Smart Attendance & Geo-Fencing</h4>
                                <p class="text-xs text-slate-500">Biometric machine sync and GPS mobile app clock-in for remote or field staff with shift roster management.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-md bg-blue-100 text-blue-700 flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-slate-800">Automated Indian Payroll & Tax Deductions</h4>
                                <p class="text-xs text-slate-500">1-click salary generation calculating PF, ESIC, Professional Tax, TDS, and overtime with bank export files.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-md bg-blue-100 text-blue-700 flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-slate-800">WhatsApp Automated Payslip Delivery</h4>
                                <p class="text-xs text-slate-500">Employees receive password-protected PDF payslips directly on WhatsApp every month automatically.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-md bg-blue-100 text-blue-700 flex items-center justify-center shrink-0 mt-0.5 text-xs">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-slate-800">Employee Self-Service Portal</h4>
                                <p class="text-xs text-slate-500">Leave applications, approval hierarchies, expense claims, and company announcements in one clean dashboard.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-100 flex flex-col sm:flex-row gap-3 items-center justify-between">
                    <button type="button" onclick="openModall()" class="w-full sm:w-auto px-6 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-700 text-white font-bold text-xs shadow-md hover:shadow-lg transition">
                        Schedule HRMS Demo & Quote
                    </button>
                    <span class="text-xs font-semibold text-slate-500">Custom Brand White-Labeling</span>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     NEW SECTION: DELIVERED DIGITAL & WEB SOLUTIONS PORTFOLIO
     Showcase 6 real-world delivered enterprise web & digital projects
========================================================= -->
<section class="py-12 lg:py-16 bg-white border-t border-slate-100" id="portfolio" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-100 text-blue-800 text-xs font-bold uppercase tracking-wider">
                <i class="fa-solid fa-briefcase text-blue-600"></i>
                Delivered Solutions Portfolio
            </span>
            <h2 class="mt-3 text-3xl sm:text-4xl font-black text-slate-900 tracking-tight leading-tight">
                Digital & Web Engineering <span class="text-[#049a3d]">Case Studies</span>
            </h2>
            <p class="mt-3 text-sm sm:text-base text-slate-600 leading-relaxed">
                Explore custom web applications, SaaS dashboards, and automated messaging portals designed and delivered by Textora Technologies for enterprise clients.
            </p>
        </div>

        <!-- 6 Project Showcase Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- PROJECT 1 -->
            <div class="group bg-[#fafcfb] rounded-2xl border border-slate-200 overflow-hidden hover:shadow-xl hover:border-emerald-500 transition duration-300 flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[11px] font-bold uppercase tracking-wider bg-emerald-100 text-emerald-800 px-3 py-0.5 rounded-full">Logistics & Supply</span>
                        <span class="text-xs font-bold text-slate-400">Web Portal + API</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 group-hover:text-[#049a3d] transition">
                        Apex Fleet Logistics & Dispatch Portal
                    </h3>
                    <p class="mt-2 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Full-stack cloud portal with real-time driver tracking, delivery proof uploads, and automated WhatsApp delivery confirmation OTPs to consignees.
                    </p>

                    <!-- Tech Badges -->
                    <div class="flex flex-wrap gap-1.5 mt-4 pt-4 border-t border-slate-200/70">
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">Laravel 11</span>
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">Vue.js</span>
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">WhatsApp API</span>
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">Redis</span>
                    </div>
                </div>

                <div class="px-6 py-3 bg-emerald-50/60 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-emerald-900">
                    <span>Outcome: +310% Delivery Speed</span>
                    <button type="button" onclick="openModall()" class="text-[#049a3d] hover:underline font-bold">Inquire &rarr;</button>
                </div>
            </div>

            <!-- PROJECT 2 -->
            <div class="group bg-[#fafcfb] rounded-2xl border border-slate-200 overflow-hidden hover:shadow-xl hover:border-emerald-500 transition duration-300 flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[11px] font-bold uppercase tracking-wider bg-blue-100 text-blue-800 px-3 py-0.5 rounded-full">Healthcare</span>
                        <span class="text-xs font-bold text-slate-400">Clinic ERP</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition">
                        Surabhi Diagnostic Management ERP
                    </h3>
                    <p class="mt-2 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        End-to-end diagnostic ERP managing patient test bookings, doctor sample allocations, and automated WhatsApp delivery of verified PDF lab test reports.
                    </p>

                    <div class="flex flex-wrap gap-1.5 mt-4 pt-4 border-t border-slate-200/70">
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">PHP 8.3</span>
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">Tailwind CSS</span>
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">PDF Engine</span>
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">SMS OTP</span>
                    </div>
                </div>

                <div class="px-6 py-3 bg-blue-50/60 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-blue-900">
                    <span>Outcome: Zero Patient Wait Queues</span>
                    <button type="button" onclick="openModall()" class="text-blue-700 hover:underline font-bold">Inquire &rarr;</button>
                </div>
            </div>

            <!-- PROJECT 3 -->
            <div class="group bg-[#fafcfb] rounded-2xl border border-slate-200 overflow-hidden hover:shadow-xl hover:border-emerald-500 transition duration-300 flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[11px] font-bold uppercase tracking-wider bg-amber-100 text-amber-800 px-3 py-0.5 rounded-full">Real Estate</span>
                        <span class="text-xs font-bold text-slate-400">Custom CRM</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 group-hover:text-amber-600 transition">
                        Reliable Properties Sales CRM & Portal
                    </h3>
                    <p class="mt-2 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Meta Ads lead integration engine that instantly engages home buyers via WhatsApp with 360-degree site walkthroughs, automated broker distribution, and site visit scheduling.
                    </p>

                    <div class="flex flex-wrap gap-1.5 mt-4 pt-4 border-t border-slate-200/70">
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">Laravel Livewire</span>
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">Meta Webhooks</span>
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">MySQL</span>
                    </div>
                </div>

                <div class="px-6 py-3 bg-amber-50/60 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-amber-900">
                    <span>Outcome: 3.4x Lead Conversion</span>
                    <button type="button" onclick="openModall()" class="text-amber-700 hover:underline font-bold">Inquire &rarr;</button>
                </div>
            </div>

            <!-- PROJECT 4 -->
            <div class="group bg-[#fafcfb] rounded-2xl border border-slate-200 overflow-hidden hover:shadow-xl hover:border-emerald-500 transition duration-300 flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[11px] font-bold uppercase tracking-wider bg-purple-100 text-purple-800 px-3 py-0.5 rounded-full">FinTech & Tax</span>
                        <span class="text-xs font-bold text-slate-400">Web App</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 group-hover:text-purple-600 transition">
                        Tax Safar Client Compliance Portal
                    </h3>
                    <p class="mt-2 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Cloud accounting and ITR client filing repository with automated GST due date alerts, document request bots, and 100% TRAI DLT compliant transactional reminders.
                    </p>

                    <div class="flex flex-wrap gap-1.5 mt-4 pt-4 border-t border-slate-200/70">
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">React.js</span>
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">Node API</span>
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">DLT SMS</span>
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">AWS S3</span>
                    </div>
                </div>

                <div class="px-6 py-3 bg-purple-50/60 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-purple-900">
                    <span>Outcome: 99.2% On-Time Filings</span>
                    <button type="button" onclick="openModall()" class="text-purple-700 hover:underline font-bold">Inquire &rarr;</button>
                </div>
            </div>

            <!-- PROJECT 5 -->
            <div class="group bg-[#fafcfb] rounded-2xl border border-slate-200 overflow-hidden hover:shadow-xl hover:border-emerald-500 transition duration-300 flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[11px] font-bold uppercase tracking-wider bg-rose-100 text-rose-800 px-3 py-0.5 rounded-full">Education & LMS</span>
                        <span class="text-xs font-bold text-slate-400">Academy Hub</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 group-hover:text-rose-600 transition">
                        Design Exam Academy Student Portal
                    </h3>
                    <p class="mt-2 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Online learning portal with mock exam modules, fee installment payment reminders via SMS/WhatsApp, and automated attendance notifications to parents.
                    </p>

                    <div class="flex flex-wrap gap-1.5 mt-4 pt-4 border-t border-slate-200/70">
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">Laravel</span>
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">Payment Gateway</span>
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">WhatsApp Bot</span>
                    </div>
                </div>

                <div class="px-6 py-3 bg-rose-50/60 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-rose-900">
                    <span>Outcome: 42% Fewer Fee Defaults</span>
                    <button type="button" onclick="openModall()" class="text-rose-700 hover:underline font-bold">Inquire &rarr;</button>
                </div>
            </div>

            <!-- PROJECT 6 -->
            <div class="group bg-[#fafcfb] rounded-2xl border border-slate-200 overflow-hidden hover:shadow-xl hover:border-emerald-500 transition duration-300 flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[11px] font-bold uppercase tracking-wider bg-teal-100 text-teal-800 px-3 py-0.5 rounded-full">B2B E-Commerce</span>
                        <span class="text-xs font-bold text-slate-400">Wholesale Platform</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 group-hover:text-teal-600 transition">
                        Rapid Drop Next Wholesale Ordering Hub
                    </h3>
                    <p class="mt-2 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        B2B distributor ordering platform with inventory syncing, automated GST invoice generation, and RCS rich-card dispatched notifications for retailer orders.
                    </p>

                    <div class="flex flex-wrap gap-1.5 mt-4 pt-4 border-t border-slate-200/70">
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">Next.js</span>
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">PostgreSQL</span>
                        <span class="text-[10px] font-mono font-medium px-2 py-0.5 rounded bg-white border border-slate-200 text-slate-700">RCS Messaging</span>
                    </div>
                </div>

                <div class="px-6 py-3 bg-teal-50/60 border-t border-slate-100 flex items-center justify-between text-xs font-semibold text-teal-900">
                    <span>Outcome: 10,000+ Orders Processed/Mo</span>
                    <button type="button" onclick="openModall()" class="text-teal-700 hover:underline font-bold">Inquire &rarr;</button>
                </div>
            </div>

        </div>

        <div class="mt-10 text-center">
            <button type="button" onclick="openModall()" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs sm:text-sm shadow-md transition">
                <span>Have a Web or Software Project? Request a Free Consultation</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </button>
        </div>

    </div>
</section>

<!-- =========================================================
     COMPETITOR BENCHMARK COMPARISON MATRIX
========================================================= -->
<section class="py-12 lg:py-16 bg-[#fafcfb] border-t border-slate-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-10">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-200/80 text-slate-800 text-xs font-bold uppercase tracking-wider">
                <i class="fa-solid fa-scale-balanced text-[#049a3d]"></i>
                Market Comparison
            </span>
            <h2 class="mt-3 text-3xl sm:text-4xl font-black text-slate-900 tracking-tight leading-tight">
                Why Industry Leaders Choose <span class="text-[#049a3d]">Textora</span>
            </h2>
            <p class="mt-2 text-sm text-slate-600">
                Compare direct enterprise-grade infrastructure against generic, unregulated SMS resellers.
            </p>
        </div>

        <div class="overflow-x-auto bg-white rounded-2xl border border-slate-200 shadow-sm">
            <table class="w-full text-left border-collapse text-xs sm:text-sm">
                <thead>
                    <tr class="border-b border-slate-200 bg-slate-50 text-slate-700">
                        <th class="py-4 px-6 font-bold">Capabilities & Infrastructure</th>
                        <th class="py-4 px-6 font-black text-[#049a3d] bg-emerald-50/80 border-x border-emerald-100">
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-[#049a3d]"></span>
                                <span>Textora Enterprise CPaaS</span>
                            </div>
                        </th>
                        <th class="py-4 px-6 font-bold text-slate-500">Unregistered Resellers / Grey Routes</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-slate-700">
                    <tr>
                        <td class="py-3.5 px-6 font-semibold">Meta WhatsApp Business API Integration</td>
                        <td class="py-3.5 px-6 font-bold text-emerald-800 bg-emerald-50/40 border-x border-emerald-100 flex items-center gap-2">
                            <i class="fa-solid fa-circle-check text-emerald-600"></i> Official Meta Cloud API (Zero Ban Risk)
                        </td>
                        <td class="py-3.5 px-6 text-slate-500">QR-code scraper scripts (Frequent account bans)</td>
                    </tr>
                    <tr>
                        <td class="py-3.5 px-6 font-semibold">TRAI DLT Compliance & Sender IDs</td>
                        <td class="py-3.5 px-6 font-bold text-emerald-800 bg-emerald-50/40 border-x border-emerald-100">
                            <i class="fa-solid fa-circle-check text-emerald-600"></i> 100% Registered Entity & Header Guidance
                        </td>
                        <td class="py-3.5 px-6 text-slate-500">Shared headers without compliance guarantee</td>
                    </tr>
                    <tr>
                        <td class="py-3.5 px-6 font-semibold">OTP Delivery Latency</td>
                        <td class="py-3.5 px-6 font-bold text-emerald-800 bg-emerald-50/40 border-x border-emerald-100">
                            <i class="fa-solid fa-circle-check text-emerald-600"></i> &lt; 2.4 seconds average via Tier-1 Telco pipes
                        </td>
                        <td class="py-3.5 px-6 text-slate-500">15â€“90 seconds delay with heavy message drops</td>
                    </tr>
                    <tr>
                        <td class="py-3.5 px-6 font-semibold">In-House Business Software</td>
                        <td class="py-3.5 px-6 font-bold text-emerald-800 bg-emerald-50/40 border-x border-emerald-100">
                            <i class="fa-solid fa-circle-check text-emerald-600"></i> Native Textora CRM & HRMS Suites
                        </td>
                        <td class="py-3.5 px-6 text-slate-500">No software, strictly resale of SMS credits</td>
                    </tr>
                    <tr>
                        <td class="py-3.5 px-6 font-semibold">Dedicated Customer Success & SLAs</td>
                        <td class="py-3.5 px-6 font-bold text-emerald-800 bg-emerald-50/40 border-x border-emerald-100">
                            <i class="fa-solid fa-circle-check text-emerald-600"></i> 24/7 Priority Support & WhatsApp Account Manager
                        </td>
                        <td class="py-3.5 px-6 text-slate-500">Email ticket queue or unassisted bots</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

<!-- =========================================================
     INDUSTRY BLUEPRINTS & USE CASES
========================================================= -->
<section class="py-12 lg:py-16 bg-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-100/70 text-emerald-800 text-xs font-bold uppercase tracking-wider">
                <i class="fa-solid fa-industry text-emerald-600"></i>
                Sector Solutions
            </span>
            <h2 class="mt-3 text-3xl sm:text-4xl font-black text-slate-900 tracking-tight leading-tight">
                Tailored for High-Performing <span class="text-[#049a3d]">Industries</span>
            </h2>
            <p class="mt-2 text-sm text-slate-600">
                Pre-configured communication blueprints designed for specific regulatory, operational, and customer journey needs.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="p-6 rounded-2xl bg-[#fafcfb] border border-slate-200 hover:border-emerald-500 transition duration-200">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 text-[#049a3d] flex items-center justify-center text-lg mb-4">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <h3 class="text-base font-bold text-slate-900">E-Commerce & Retail</h3>
                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                    Abandoned cart recovery, COD confirmation bots, real-time shipment updates, and WhatsApp catalog checkout.
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-[#fafcfb] border border-slate-200 hover:border-emerald-500 transition duration-200">
                <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center text-lg mb-4">
                    <i class="fa-solid fa-building-columns"></i>
                </div>
                <h3 class="text-base font-bold text-slate-900">FinTech & NBFC</h3>
                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                    Instant sub-second authentication OTPs, KYC document collectors, and automated loan repayment alerts.
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-[#fafcfb] border border-slate-200 hover:border-emerald-500 transition duration-200">
                <div class="w-10 h-10 rounded-xl bg-teal-100 text-teal-600 flex items-center justify-center text-lg mb-4">
                    <i class="fa-solid fa-house-chimney"></i>
                </div>
                <h3 class="text-base font-bold text-slate-900">Real Estate & Developers</h3>
                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                    Auto-qualify property leads from Facebook/Google ads, dispatch brochures, and schedule site inspections instantly.
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-[#fafcfb] border border-slate-200 hover:border-emerald-500 transition duration-200">
                <div class="w-10 h-10 rounded-xl bg-rose-100 text-rose-600 flex items-center justify-center text-lg mb-4">
                    <i class="fa-solid fa-user-doctor"></i>
                </div>
                <h3 class="text-base font-bold text-slate-900">Healthcare & Clinics</h3>
                <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                    Doctor appointment confirmations, digital lab report delivery over WhatsApp, and automated prescription reminders.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     TESTIMONIALS SECTION
========================================================= -->
<section class="py-12 lg:py-16 bg-[#fafcfb] border-t border-slate-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-100/70 text-emerald-800 text-[11px] font-bold uppercase tracking-wider">
                <i class="fa-solid fa-star text-emerald-600"></i>
                Client Feedback
            </span>
            <h2 class="mt-2 text-3xl font-black text-slate-900 tracking-tight">
                Trusted by 500+ Indian Businesses
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs flex flex-col justify-between">
                <div>
                    <div class="flex text-amber-400 text-xs mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic">
                        "Textora Technologies has been a trusted partner for our Bulk SMS and WhatsApp communication needs. Their service quality and support are truly outstanding."
                    </p>
                </div>
                <div class="mt-4 pt-4 border-t border-slate-100">
                    <div class="font-bold text-slate-900 text-sm">Ankit Jain</div>
                    <div class="text-xs text-slate-500">Arham Enterprises</div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs flex flex-col justify-between">
                <div>
                    <div class="flex text-amber-400 text-xs mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic">
                        "We are highly satisfied with Textora Technologies WhatsApp API and Transactional OTP services. Reliable platform and prompt support."
                    </p>
                </div>
                <div class="mt-4 pt-4 border-t border-slate-100">
                    <div class="font-bold text-slate-900 text-sm">Shivam Trivedi</div>
                    <div class="text-xs text-slate-500">Rapid Drop Next Distributor Pvt. Ltd.</div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-xs flex flex-col justify-between">
                <div>
                    <div class="flex text-amber-400 text-xs mb-3">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic">
                        "Textora Technologies WhatsApp API service transformed our property marketing. We connect with buyers instantly and share brochures with zero lag."
                    </p>
                </div>
                <div class="mt-4 pt-4 border-t border-slate-100">
                    <div class="font-bold text-slate-900 text-sm">Shyam Kadam</div>
                    <div class="text-xs text-slate-500">Reliable Properties</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
     FREQUENTLY ASKED QUESTIONS (ACCORDION)
========================================================= -->
<section class="py-12 lg:py-16 bg-white border-t border-slate-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-10">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-100 text-slate-700 text-xs font-bold uppercase tracking-wider">
                <i class="fa-solid fa-circle-question text-[#049a3d]"></i>
                Clear Answers
            </span>
            <h2 class="mt-3 text-3xl font-black text-slate-900 tracking-tight">
                Frequently Asked Questions
            </h2>
        </div>

        <div class="space-y-3">
            
            <div class="border border-slate-200 px-5 py-2 bg-white rounded-xl shadow-xs">
                <button onclick="toggleAccordion(1)" class="w-full flex justify-between text-sm sm:text-base font-bold items-center py-3 text-slate-800 text-left">
                    <span>What is the difference between standard WhatsApp Business and the WhatsApp API?</span>
                    <span id="icon-1" class="text-slate-400 text-lg font-bold ml-4">+</span>
                </button>
                <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <p class="pb-4 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        The regular WhatsApp Business app is limited to 1 smartphone and 4 web sessions, making it unsuitable for teams and high-volume broadcasts. The official <strong>WhatsApp Business API</strong> connects directly to Meta Cloud servers, allowing unlimited team agents on a shared inbox, AI chatbot automation, CRM integrations, verified Green Tick badges, and broadcasting to tens of thousands of opted-in customers with zero ban risk.
                    </p>
                </div>
            </div>

            <div class="border border-slate-200 px-5 py-2 bg-white rounded-xl shadow-xs">
                <button onclick="toggleAccordion(2)" class="w-full flex justify-between text-sm sm:text-base font-bold items-center py-3 text-slate-800 text-left">
                    <span>How does DLT compliance work for Bulk SMS in India?</span>
                    <span id="icon-2" class="text-slate-400 text-lg font-bold ml-4">+</span>
                </button>
                <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <p class="pb-4 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Under TRAI telecom guidelines, every business in India sending commercial SMS must register their Entity, Sender Header (Sender ID), and Consent Templates on a Distributed Ledger Technology (DLT) portal (like Airtel, Jio, or Vodafone). Textora provides free, full-service DLT onboarding assistance to get your templates whitelisted within 24â€“48 hours.
                    </p>
                </div>
            </div>

            <div class="border border-slate-200 px-5 py-2 bg-white rounded-xl shadow-xs">
                <button onclick="toggleAccordion(3)" class="w-full flex justify-between text-sm sm:text-base font-bold items-center py-3 text-slate-800 text-left">
                    <span>Can we purchase or license Textora CRM and HRMS for our company?</span>
                    <span id="icon-3" class="text-slate-400 text-lg font-bold ml-4">+</span>
                </button>
                <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <p class="pb-4 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Yes! Both Textora CRM and Textora HRMS are proprietary products that we develop and operate. We offer flexible options: monthly/annual SaaS cloud subscriptions, dedicated private cloud deployments, or custom white-labeled software configured specifically for your workflows and company branding.
                    </p>
                </div>
            </div>

            <div class="border border-slate-200 px-5 py-2 bg-white rounded-xl shadow-xs">
                <button onclick="toggleAccordion(4)" class="w-full flex justify-between text-sm sm:text-base font-bold items-center py-3 text-slate-800 text-left">
                    <span>How fast are Textora's OTP SMS APIs?</span>
                    <span id="icon-4" class="text-slate-400 text-lg font-bold ml-4">+</span>
                </button>
                <div id="content-4" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <p class="pb-4 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Our high-priority transactional SMS pipes feature an average delivery latency under 2.4 seconds across major Indian telecom operators (Jio, Airtel, Vi, BSNL). If an operator route encounters latency, our gateway automatically falls back to an alternate carrier instantly.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     FINAL CONVERSION CTA BANNER
========================================================= -->
<section class="bg-gradient-to-br from-slate-950 via-slate-900 to-emerald-950 py-14 text-white relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <span class="text-xs font-bold uppercase tracking-wider text-emerald-400 bg-emerald-500/10 px-4 py-1.5 rounded-full border border-emerald-500/20">
            Get Started Today
        </span>

        <h2 class="text-2xl sm:text-3xl md:text-4xl font-black text-white mt-4 mb-3 tracking-tight leading-tight">
            Stop Losing Customers to Missed Messages.
        </h2>

        <p class="text-slate-300 text-sm sm:text-base max-w-xl mx-auto mb-7 leading-relaxed">
            Join hundreds of enterprises and high-growth brands that rely on Textora for high-speed OTP delivery, WhatsApp automation, and in-house CRM/HRMS solutions.
        </p>

        <div class="flex flex-col sm:flex-row gap-3.5 justify-center items-center">
            <button type="button" onclick="openModall()"
                class="w-full sm:w-auto px-7 py-3.5 bg-[#049a3d] hover:bg-[#037f32] text-white font-bold rounded-xl shadow-lg shadow-emerald-900/50 hover:scale-[1.02] transition duration-200 text-sm">
                Book a Free Consultation & Demo
            </button>

            <a href="{{ url('pricing-web') }}"
                class="w-full sm:w-auto px-7 py-3.5 bg-white/10 hover:bg-white/15 text-white font-semibold rounded-xl border border-white/20 transition duration-200 text-sm">
                View Pricing & Plans
            </a>
        </div>
    </div>
</section>

</main>

<script>
    // Tabbed Code Snippet Switcher
    function switchSnippet(lang) {
        document.querySelectorAll('.snippet-block').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('.snippet-tab').forEach(el => {
            el.classList.remove('bg-emerald-600', 'text-white', 'font-bold');
            el.classList.add('text-slate-400', 'font-medium');
        });
        
        const target = document.getElementById('snippet-' + lang);
        const tab = document.getElementById('tab-' + lang);
        if (target && tab) {
            target.classList.remove('hidden');
            tab.classList.add('bg-emerald-600', 'text-white', 'font-bold');
            tab.classList.remove('text-slate-400', 'font-medium');
        }
    }

    // Accordion Toggle
    function toggleAccordion(id) {
        const content = document.getElementById('content-' + id);
        const icon = document.getElementById('icon-' + id);
        if (!content || !icon) return;

        if (content.style.maxHeight && content.style.maxHeight !== '0px') {
            content.style.maxHeight = '0px';
            icon.textContent = '+';
        } else {
            for (let i = 1; i <= 4; i++) {
                const c = document.getElementById('content-' + i);
                const ic = document.getElementById('icon-' + i);
                if (c) c.style.maxHeight = '0px';
                if (ic) ic.textContent = '+';
            }
            content.style.maxHeight = content.scrollHeight + 'px';
            icon.textContent = 'âˆ’';
        }
    }
</script>

</x-master-page>