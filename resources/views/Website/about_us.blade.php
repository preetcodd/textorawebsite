<x-master-page 
    title="About Us | Textora Technologies Pvt. Ltd. - Enterprise CPaaS & Software Solutions"
    description="Learn about Textora Technologies Pvt. Ltd., headquartered in Bengaluru, Karnataka. Founded by Praveen Kumar Dubey and Abhilasha Dubey, powering official WhatsApp API, Bulk SMS, RCS, custom CRM & HRMS."
    keywords="About Textora, Textora Technologies Bengaluru, Praveen Kumar Dubey, Abhilasha Dubey, CPaaS company India, WhatsApp Business API provider Bengaluru, Textora CRM, Textora HRMS"
>

@push('head-scripts')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "AboutPage",
      "@id": "https://textorasms.com/about-us/#webpage",
      "url": "https://textorasms.com/about-us",
      "name": "About Textora Technologies Pvt. Ltd. | Leadership, Vision & Infrastructure",
      "description": "Founded by Praveen Kumar Dubey (Founder & CEO) and Abhilasha Dubey (Co-Founder & Director), Textora Technologies Pvt. Ltd. provides enterprise WhatsApp Business API, Bulk SMS, RCS, custom CRM and HRMS systems headquartered in Bengaluru.",
      "publisher": {
        "@type": "Organization",
        "name": "Textora Technologies Pvt. Ltd.",
        "logo": {
          "@type": "ImageObject",
          "url": "https://textorasms.com/images/textorasms-svg-logo.svg"
        },
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "5a, 1A Cross Rd, Dollar Scheme Colony, 1st Stage, BTM 1st Stage",
          "addressLocality": "Bengaluru",
          "addressRegion": "Karnataka",
          "postalCode": "560068",
          "addressCountry": "IN"
        }
      },
      "founder": [
        {
          "@type": "Person",
          "name": "Praveen Kumar Dubey",
          "jobTitle": "Founder & CEO"
        },
        {
          "@type": "Person",
          "name": "Abhilasha Dubey",
          "jobTitle": "Co-Founder & Director"
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
          "name": "About Us",
          "item": "https://textorasms.com/about-us"
        }
      ]
    }
  ]
}
</script>
<style>
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
  .hover-card-elevate {
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }
  .hover-card-elevate:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
  }
</style>
@endpush

<main class="min-h-screen bg-white">

<!-- =========================================================
     HERO SECTION: ENTERPRISE CPaaS & IN-HOUSE SOFTWARE
========================================================= -->
<section class="relative pt-10 pb-16 sm:pt-14 sm:pb-20 lg:pt-16 lg:pb-24 bg-gradient-to-b from-[#f2f8f4] via-[#fbfcfa] to-white overflow-hidden border-b border-slate-100">
    <!-- Subtle Ambient Glows -->
    <div class="absolute -top-32 left-1/4 w-[500px] h-[500px] bg-emerald-200/25 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="absolute top-12 right-10 w-[420px] h-[420px] bg-blue-100/25 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Breadcrumb Navigation -->
        <nav class="flex items-center gap-2 text-xs text-slate-500 mb-6 sm:mb-8" aria-label="Breadcrumb">
            <a href="{{ url('/') }}" class="hover:text-emerald-700 transition flex items-center gap-1.5 font-medium">
                <i class="fa-solid fa-house text-[11px] text-slate-400"></i> Home
            </a>
            <i class="fa-solid fa-chevron-right text-[8px] text-slate-300"></i>
            <span class="text-slate-800 font-bold">About Us</span>
        </nav>

        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Column: Story, Title & CTAs (col-span-7) -->
            <div class="lg:col-span-7">
                
                <!-- Pill Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-50 text-emerald-800 text-xs font-bold border border-emerald-200/80 mb-5 shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-[#049a3d] animate-pulse"></span>
                    <span>Official Meta Tech Partner &bull; TRAI DLT Registered</span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-3xl sm:text-4xl lg:text-[44px] font-black text-slate-900 tracking-tight leading-[1.2]">
                    Architecting Enterprise <br class="hidden sm:inline">
                    <span class="text-[#049a3d]">Communication Infrastructure</span> <br class="hidden sm:inline">
                    &amp; In-House Software Systems
                </h1>

                <!-- Clear Subtitle -->
                <p class="mt-5 text-sm sm:text-base text-slate-600 leading-relaxed max-w-2xl">
                    Headquartered in <strong class="text-slate-900 font-bold">Bengaluru, Karnataka</strong>, Textora Technologies Pvt. Ltd. powers mission-critical WhatsApp Business API, Bulk SMS, and RCS pipelines directly bound to India&rsquo;s tier-1 telecom carriers. Beyond CPaaS, our engineering team designs and delivers production-grade <strong class="text-slate-900 font-bold">Textora CRM</strong> and <strong class="text-slate-900 font-bold">Textora HRMS</strong> platforms built for enterprise scale.
                </p>

                <!-- Primary Action Buttons -->
                <div class="mt-8 flex flex-wrap items-center gap-4">
                    <a href="#products" class="inline-flex items-center gap-2.5 px-6 py-3.5 rounded-xl bg-[#049a3d] hover:bg-[#037f32] text-white font-bold text-xs sm:text-sm shadow-md shadow-emerald-700/20 transition duration-200 hover:-translate-y-0.5">
                        <i class="fa-solid fa-server text-xs"></i>
                        <span>Explore In-House Products</span>
                    </a>
                    <a href="#leadership" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-white hover:bg-slate-50 text-slate-800 font-bold text-xs sm:text-sm border border-slate-200 shadow-xs transition duration-200 hover:-translate-y-0.5">
                        <i class="fa-solid fa-users text-[#049a3d] text-xs"></i>
                        <span>Executive Leadership</span>
                    </a>
                    <a href="{{ url('contact-us') }}" class="inline-flex items-center gap-1.5 px-3 py-3 text-xs sm:text-sm font-semibold text-slate-600 hover:text-[#049a3d] transition">
                        <span>Bengaluru HQ Desk &rarr;</span>
                    </a>
                </div>

                <!-- Sleek Minimalist Stats Strip (Clean, Spacious, Not Crammed in a Box!) -->
                <div class="mt-10 pt-8 border-t border-slate-200/80 grid grid-cols-2 sm:grid-cols-4 gap-6">
                    <div>
                        <div class="text-2xl sm:text-3xl font-black text-[#049a3d] tracking-tight">10M+</div>
                        <div class="text-[11px] font-semibold text-slate-500 mt-1">Daily Messages</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">&lt; 2.4s</div>
                        <div class="text-[11px] font-semibold text-slate-500 mt-1">Avg. OTP Latency</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-black text-[#049a3d] tracking-tight">99.98%</div>
                        <div class="text-[11px] font-semibold text-slate-500 mt-1">Platform SLA</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">500+</div>
                        <div class="text-[11px] font-semibold text-slate-500 mt-1">Enterprise Clients</div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Clean, Modern Enterprise Architecture Visual (col-span-5) -->
            <div class="lg:col-span-5">
                <div class="relative rounded-3xl bg-white border border-slate-200/90 shadow-xl p-6 sm:p-7 overflow-hidden">
                    
                    <!-- Decorative Gradient Accent -->
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-emerald-500 via-[#049a3d] to-blue-500"></div>

                    <!-- Header -->
                    <div class="flex items-center justify-between pb-5 border-b border-slate-100">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-2xl bg-emerald-50 border border-emerald-200 text-[#049a3d] flex items-center justify-center font-black text-lg shadow-xs">
                                <i class="fa-solid fa-layer-group"></i>
                            </div>
                            <div>
                                <h3 class="font-black text-slate-900 text-sm tracking-tight">Textora Technology Core</h3>
                                <p class="text-[11px] text-slate-500 font-medium">Enterprise CPaaS &amp; Software Hub</p>
                            </div>
                        </div>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-50 text-[#049a3d] text-[11px] font-extrabold border border-emerald-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#049a3d] animate-ping"></span> Live
                        </span>
                    </div>

                    <!-- Three Well-Spaced Infrastructure Pillars -->
                    <div class="mt-5 space-y-3.5">
                        
                        <!-- Tier-1 Telecom -->
                        <div class="p-4 rounded-2xl bg-[#fafcfb] border border-slate-200/80 hover:border-emerald-300 transition duration-200">
                            <div class="flex items-start justify-between gap-3">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">
                                        <i class="fa-solid fa-tower-broadcast"></i>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900">Direct Telecom Carrier Binds</div>
                                        <p class="text-[11px] text-slate-500 mt-0.5 leading-snug">SMPP connectivity with Airtel, Jio, Vi &amp; BSNL for instant failover.</p>
                                    </div>
                                </div>
                                <span class="text-[10px] font-extrabold text-emerald-800 bg-emerald-100/70 px-2.5 py-0.5 rounded-md shrink-0">Tier-1</span>
                            </div>
                        </div>

                        <!-- Meta Cloud API Node -->
                        <div class="p-4 rounded-2xl bg-[#fafcfb] border border-slate-200/80 hover:border-blue-300 transition duration-200">
                            <div class="flex items-start justify-between gap-3">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">
                                        <i class="fa-brands fa-whatsapp text-sm"></i>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-slate-900">Official Meta Cloud API Node</div>
                                        <p class="text-[11px] text-slate-500 mt-0.5 leading-snug">Verified Business Partner with end-to-end encryption &amp; bots.</p>
                                    </div>
                                </div>
                                <span class="text-[10px] font-extrabold text-blue-800 bg-blue-100/70 px-2.5 py-0.5 rounded-md shrink-0">Meta Partner</span>
                            </div>
                        </div>

                        <!-- In-House CRM & HRMS Suites -->
                        <div class="p-4 rounded-2xl bg-emerald-50/60 border border-emerald-200 hover:border-emerald-400 transition duration-200">
                            <div class="flex items-start justify-between gap-3">
                                <div class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-xl bg-[#049a3d] text-white flex items-center justify-center text-xs font-bold shrink-0 mt-0.5 shadow-xs">
                                        <i class="fa-solid fa-laptop-code"></i>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-emerald-950">In-House CRM &amp; HRMS Platforms</div>
                                        <p class="text-[11px] text-emerald-800 mt-0.5 leading-snug">Proprietary enterprise SaaS suites available for corporate licensing.</p>
                                    </div>
                                </div>
                                <span class="text-[10px] font-extrabold text-white bg-[#049a3d] px-2.5 py-0.5 rounded-md shrink-0 shadow-xs">Proprietary</span>
                            </div>
                        </div>

                    </div>

                    <!-- Bottom Corporate Badge -->
                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-600">
                        <span class="flex items-center gap-1.5 font-medium">
                            <i class="fa-solid fa-location-dot text-[#049a3d]"></i>
                            <span>BTM 1st Stage, Bengaluru HQ</span>
                        </span>
                        <a href="https://maps.app.goo.gl/YZ6g564PG73fUGuq7" target="_blank" rel="noopener noreferrer" class="text-[#049a3d] font-bold hover:underline flex items-center gap-1">
                            <span>Open Map &rarr;</span>
                        </a>
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
     EXECUTIVE LEADERSHIP: AUTHENTIC FOUNDERS & DIRECTORS
========================================================= -->
<section class="py-16 lg:py-22 bg-[#fafcfb] border-b border-slate-100" id="leadership">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold uppercase tracking-wider mb-3">
                <i class="fa-solid fa-users text-[#049a3d]"></i>
                Executive Leadership
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                Guided by Proven Telecom &amp; <br>
                <span class="text-[#049a3d]">Software Architects</span>
            </h2>
            <p class="mt-3 text-sm sm:text-base text-slate-600">
                Meet the founders leading Textora Technologies with relentless commitment to client success, engineering integrity, and telecom compliance.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 lg:gap-10 max-w-5xl mx-auto">
            
            <!-- FOUNDER 1: PRAVEEN KUMAR DUBEY -->
            <div class="group bg-white rounded-3xl border border-slate-200 shadow-sm hover:shadow-xl hover:border-emerald-500 transition duration-300 p-7 sm:p-9 flex flex-col justify-between">
                
                <div>
                    <!-- Header with Authentic Photo -->
                    <div class="flex items-center gap-5 mb-6">
                        <div class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-2xl overflow-hidden border-2 border-emerald-500 shadow-md shrink-0 bg-slate-50">
                            <img src="{{ asset('images/praveen.png') }}" 
                                 onerror="this.onerror=null; this.src='{{ asset('images/praveendubey.png') }}';" 
                                 alt="Praveen Kumar Dubey - Founder & CEO" 
                                 class="w-full h-full object-cover object-top transition duration-300 group-hover:scale-105">
                        </div>
                        <div>
                            <span class="inline-block px-3 py-1 rounded-full bg-emerald-50 text-[#049a3d] font-bold text-[11px] uppercase tracking-wider border border-emerald-200">
                                Founder &amp; CEO
                            </span>
                            <h3 class="text-xl sm:text-2xl font-black text-slate-900 mt-2">
                                Praveen Kumar Dubey
                            </h3>
                            <p class="text-xs font-bold text-slate-500 mt-0.5">
                                Vision &bull; Telecom Architecture &bull; Engineering
                            </p>
                        </div>
                    </div>

                    <!-- Leadership Bio -->
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        A visionary entrepreneur and telecom architect, Praveen has steered Textora Technologies from inception to an enterprise messaging powerhouse processing millions of mission-critical customer interactions daily across India.
                    </p>

                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-3">
                        Under his guidance, Textora established direct carrier links with Airtel, Jio, Vi, and BSNL, obtained official Meta Business Partner recognition, and developed proprietary custom CRM and HRMS engines tailored for scale.
                    </p>

                    <!-- Authentic Quote -->
                    <div class="mt-5 p-4 rounded-xl bg-slate-50 border-l-4 border-[#049a3d] text-xs text-slate-700 italic">
                        &ldquo;Our commitment is absolute reliability &mdash; when an enterprise sends a customer an OTP or a WhatsApp update, it must arrive in seconds with zero failover risk.&rdquo;
                    </div>
                </div>

                <!-- Footer with Designation & Location -->
                <div class="mt-6 pt-5 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                    <span class="flex items-center gap-1.5 font-medium"><i class="fa-solid fa-location-dot text-[#049a3d]"></i> Bengaluru HQ</span>
                    <a href="{{ url('contact-us') }}" class="text-[#049a3d] font-bold hover:underline flex items-center gap-1">
                        <span>Consult Executive Team &rarr;</span>
                    </a>
                </div>

            </div>

            <!-- FOUNDER 2: ABHILASHA DUBEY -->
            <div class="group bg-white rounded-3xl border border-slate-200 shadow-sm hover:shadow-xl hover:border-blue-500 transition duration-300 p-7 sm:p-9 flex flex-col justify-between">
                
                <div>
                    <!-- Header with Authentic Photo -->
                    <div class="flex items-center gap-5 mb-6">
                        <div class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-2xl overflow-hidden border-2 border-blue-500 shadow-md shrink-0 bg-slate-50">
                            <img src="{{ asset('images/abhilasha.png') }}" 
                                 alt="Abhilasha Dubey - Co-Founder & Director" 
                                 class="w-full h-full object-cover object-top transition duration-300 group-hover:scale-105">
                        </div>
                        <div>
                            <span class="inline-block px-3 py-1 rounded-full bg-blue-50 text-blue-700 font-bold text-[11px] uppercase tracking-wider border border-blue-200">
                                Co-Founder &amp; Director
                            </span>
                            <h3 class="text-xl sm:text-2xl font-black text-slate-900 mt-2">
                                Abhilasha Dubey
                            </h3>
                            <p class="text-xs font-bold text-slate-500 mt-0.5">
                                Corporate Strategy &bull; Operations &bull; Governance
                            </p>
                        </div>
                    </div>

                    <!-- Leadership Bio -->
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Leading corporate strategy, operational governance, and client relationship management, Abhilasha oversees Textora&rsquo;s day-to-day business expansion and nationwide partner ecosystem.
                    </p>

                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-3">
                        Her focus on customer-centric service delivery, compliance adherence, and rapid SLA fulfillment has made Textora a trusted technology provider for institutions spanning healthcare, finance, logistics, and real estate.
                    </p>

                    <!-- Authentic Quote -->
                    <div class="mt-5 p-4 rounded-xl bg-slate-50 border-l-4 border-blue-500 text-xs text-slate-700 italic">
                        &ldquo;Sustainable business relationships are built on honesty, rapid support, and transparent execution. Every client is a long-term partner in our journey.&rdquo;
                    </div>
                </div>

                <!-- Footer with Designation & Location -->
                <div class="mt-6 pt-5 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                    <span class="flex items-center gap-1.5 font-medium"><i class="fa-solid fa-location-dot text-blue-600"></i> Bengaluru HQ</span>
                    <a href="{{ url('contact-us') }}" class="text-blue-600 font-bold hover:underline flex items-center gap-1">
                        <span>Consult Executive Team &rarr;</span>
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     IN-HOUSE ENTERPRISE PRODUCTS & TECHNOLOGY ECOSYSTEM
========================================================= -->
<section class="py-16 lg:py-20 bg-white border-b border-slate-100" id="products">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold uppercase tracking-wider mb-3">
                <i class="fa-solid fa-server text-[#049a3d]"></i>
                Proprietary Products
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                Software Suites Developed In-House &amp; <br>
                <span class="text-[#049a3d]">Available for Enterprise Licensing</span>
            </h2>
            <p class="mt-3 text-sm sm:text-base text-slate-600">
                We don&rsquo;t just route messages &mdash; we design, build, and deploy production-grade software that companies can use or purchase as their own product.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            
            <!-- PRODUCT 1: TEXTORA CRM -->
            <div class="p-8 rounded-3xl bg-[#fbfdfc] border border-emerald-200/90 shadow-sm hover:shadow-xl transition duration-300 flex flex-col justify-between hover-card-elevate">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 flex items-center justify-center text-[#049a3d] text-xl font-black mb-5">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <span class="text-[11px] font-extrabold uppercase tracking-wider bg-emerald-100/60 text-emerald-800 px-3 py-1 rounded-full">In-House SaaS</span>
                    <h3 class="text-xl font-bold text-slate-900 mt-3">Textora CRM Suite</h3>
                    <p class="mt-2.5 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Multi-agent sales pipeline hub with direct WhatsApp Business API sync, Kanban boards, automated lead routing, and 1-click broadcast triggers.
                    </p>
                    <ul class="mt-4 space-y-2 text-xs text-slate-700">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#049a3d]"></i> Shared Team WhatsApp Inbox</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#049a3d]"></i> Automated Follow-Up Sequences</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-[#049a3d]"></i> Available for Licensing or Purchase</li>
                    </ul>
                </div>
                <div class="mt-6 pt-5 border-t border-slate-200/80">
                    <button type="button" onclick="openModall()" class="w-full py-2.5 rounded-xl bg-[#049a3d] hover:bg-[#037f32] text-white font-bold text-xs shadow-sm transition">
                        Schedule CRM Walkthrough
                    </button>
                </div>
            </div>

            <!-- PRODUCT 2: TEXTORA HRMS -->
            <div class="p-8 rounded-3xl bg-[#f8fbfe] border border-blue-200/90 shadow-sm hover:shadow-xl transition duration-300 flex flex-col justify-between hover-card-elevate">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-blue-100 flex items-center justify-center text-blue-600 text-xl font-black mb-5">
                        <i class="fa-solid fa-users-gear"></i>
                    </div>
                    <span class="text-[11px] font-extrabold uppercase tracking-wider bg-blue-100/60 text-blue-800 px-3 py-1 rounded-full">In-House SaaS</span>
                    <h3 class="text-xl font-bold text-slate-900 mt-3">Textora HRMS Suite</h3>
                    <p class="mt-2.5 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Complete employee lifecycle system with biometric attendance sync, mobile geo-fencing, automated statutory payroll, and WhatsApp PDF payslips.
                    </p>
                    <ul class="mt-4 space-y-2 text-xs text-slate-700">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-blue-600"></i> Automated PF, ESIC &amp; TDS Compliance</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-blue-600"></i> WhatsApp Payslip Delivery</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-blue-600"></i> Available for Enterprise White-Label</li>
                    </ul>
                </div>
                <div class="mt-6 pt-5 border-t border-slate-200/80">
                    <button type="button" onclick="openModall()" class="w-full py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs shadow-sm transition">
                        Schedule HRMS Walkthrough
                    </button>
                </div>
            </div>

            <!-- PRODUCT 3: HIGH-THROUGHPUT CPAAS ENGINE -->
            <div class="p-8 rounded-3xl bg-slate-900 text-white border border-slate-800 shadow-xl hover:shadow-2xl transition duration-300 flex flex-col justify-between hover-card-elevate">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xl font-black mb-5">
                        <i class="fa-solid fa-tower-broadcast"></i>
                    </div>
                    <span class="text-[11px] font-extrabold uppercase tracking-wider bg-emerald-500/20 text-emerald-300 px-3 py-1 rounded-full border border-emerald-500/30">Core CPaaS</span>
                    <h3 class="text-xl font-bold text-white mt-3">Messaging &amp; OTP Engine</h3>
                    <p class="mt-2.5 text-xs sm:text-sm text-slate-300 leading-relaxed">
                        High-throughput telecom engine with SMPP binds, REST APIs, WhatsApp Cloud bots, and RCS rich-cards handling 10M+ daily events.
                    </p>
                    <ul class="mt-4 space-y-2 text-xs text-slate-300">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-400"></i> &lt; 2.4s Average OTP Latency</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-400"></i> Multi-Operator Automatic Failover</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-400"></i> Ready REST &amp; Webhook APIs</li>
                    </ul>
                </div>
                <div class="mt-6 pt-5 border-t border-slate-800">
                    <a href="{{ url('pricing-web') }}" class="block text-center w-full py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs shadow-sm transition">
                        View Gateway Pricing
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     OFFICIAL HEAD & CORPORATE OFFICE (BENGALURU HEADQUARTERS)
========================================================= -->
<section class="py-16 lg:py-20 bg-[#fafcfb] border-b border-slate-100" id="office">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold uppercase tracking-wider mb-3">
                <i class="fa-solid fa-location-dot text-[#049a3d]"></i>
                Official Head Office
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                Headquartered in <span class="text-[#049a3d]">Bengaluru, India</span>
            </h2>
            <p class="mt-3 text-sm sm:text-base text-slate-600">
                Visit our corporate headquarters for enterprise consultations, API architectural planning, and custom solution demos.
            </p>
        </div>

        <div class="grid lg:grid-cols-12 gap-8 items-stretch">
            
            <!-- Left: Headquarters Details Card -->
            <div class="lg:col-span-5 bg-white p-7 sm:p-9 rounded-3xl border border-slate-200 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 text-emerald-800 text-xs font-bold mb-4">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        <span>Registered Corporate Headquarters</span>
                    </div>

                    <h3 class="text-2xl font-black text-slate-900 mb-2">Textora Technologies Pvt. Ltd.</h3>
                    <p class="text-xs text-slate-500 font-medium mb-6">Official Meta Tech Partner &bull; TRAI DLT Registered Entity</p>

                    <div class="space-y-4 text-xs sm:text-sm text-slate-700">
                        <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-slate-50 border border-slate-100">
                            <div class="w-9 h-9 rounded-xl bg-emerald-100 flex items-center justify-center text-[#049a3d] shrink-0">
                                <i class="fa-solid fa-map-location-dot"></i>
                            </div>
                            <div>
                                <span class="font-bold text-slate-900 block">Head &amp; Corporate Office Address:</span>
                                <span class="text-slate-600 leading-relaxed block mt-0.5">
                                    5a, 1A Cross Rd, Dollar Scheme Colony, 1st Stage, BTM 1st Stage, Bengaluru, Karnataka 560068
                                </span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-slate-50 border border-slate-100">
                            <div class="w-9 h-9 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600 shrink-0">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div>
                                <span class="font-bold text-slate-900 block">Direct Enterprise Line:</span>
                                <a href="tel:+919187054466" class="text-slate-600 hover:text-[#049a3d] font-semibold transition block mt-0.5">
                                    +91 91870 54466
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-slate-50 border border-slate-100">
                            <div class="w-9 h-9 rounded-xl bg-emerald-100 flex items-center justify-center text-[#049a3d] shrink-0">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <span class="font-bold text-slate-900 block">Official Inquiries:</span>
                                <a href="mailto:support@textorasms.com" class="text-slate-600 hover:text-[#049a3d] font-semibold transition block mt-0.5">
                                    support@textorasms.com / sales@textorasms.com
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-slate-50 border border-slate-100">
                            <div class="w-9 h-9 rounded-xl bg-purple-100 flex items-center justify-center text-purple-600 shrink-0">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div>
                                <span class="font-bold text-slate-900 block">Operational Hours:</span>
                                <span class="text-slate-600 block mt-0.5">Monday &ndash; Saturday &bull; 9:30 AM &ndash; 7:00 PM IST (24/7 NOC Support)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 pt-5 border-t border-slate-100 flex flex-col sm:flex-row gap-3">
                    <a href="https://maps.app.goo.gl/YZ6g564PG73fUGuq7" target="_blank" rel="noopener noreferrer" class="flex-1 inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-[#049a3d] hover:bg-[#037f32] text-white font-bold text-xs shadow-md transition">
                        <i class="fa-solid fa-location-arrow"></i>
                        <span>Get Directions on Google Maps</span>
                    </a>
                    <a href="{{ url('contact-us') }}" class="inline-flex items-center justify-center px-4 py-3 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs transition">
                        <span>Contact Desk</span>
                    </a>
                </div>

            </div>

            <!-- Right: Interactive Google Maps Embed (Bengaluru BTM Layout) -->
            <div class="lg:col-span-7 rounded-3xl overflow-hidden border border-slate-200 shadow-sm min-h-[380px] relative">
                <iframe 
                    title="Textora Technologies Bengaluru Corporate Office Map"
                    src="https://maps.google.com/maps?q=5a,+1A+Cross+Rd,+Dollar+Scheme+Colony,+1st+Stage,+BTM+1st+Stage,+Bengaluru,+Karnataka+560068&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                    class="w-full h-full min-h-[400px] border-0" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                
                <div class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-md p-3.5 rounded-2xl shadow-lg border border-slate-200 flex items-center justify-between text-xs">
                    <div class="flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span class="font-bold text-slate-800">Dollar Scheme Colony, BTM 1st Stage, Bengaluru</span>
                    </div>
                    <a href="https://maps.app.goo.gl/YZ6g564PG73fUGuq7" target="_blank" rel="noopener noreferrer" class="text-[#049a3d] font-bold hover:underline">
                        Open Full Map &rarr;
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     CORE PILLARS: WHY ENTERPRISES CHOOSE TEXTORA
========================================================= -->
<section class="py-16 lg:py-20 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold uppercase tracking-wider mb-3">
                <i class="fa-solid fa-award text-[#049a3d]"></i>
                Engineering Integrity
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                Why Industry Leaders Choose <br>
                <span class="text-[#049a3d]">Textora Technologies</span>
            </h2>
            <p class="mt-3 text-sm sm:text-base text-slate-600">
                We combine tier-1 telecom infrastructure, proprietary software development, and transparent SLAs to deliver unrivaled communication speed.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="p-6 rounded-2xl bg-[#fafcfb] border border-slate-200 shadow-xs hover-card-elevate">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 flex items-center justify-center text-[#049a3d] text-lg font-bold mb-4">
                    <i class="fa-solid fa-bolt-lightning"></i>
                </div>
                <h3 class="font-extrabold text-base text-slate-900 mb-2">Zero-Middleman Routing</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Direct SMPP carrier binds eliminate multi-hop relay latency, delivering transactional OTPs with under 2.4-second guaranteed delivery.
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-[#fafcfb] border border-slate-200 shadow-xs hover-card-elevate">
                <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600 text-lg font-bold mb-4">
                    <i class="fa-solid fa-shield-virus"></i>
                </div>
                <h3 class="font-extrabold text-base text-slate-900 mb-2">TRAI DLT &amp; Meta Verified</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Full regulatory compliance across all telecom circles, automated scrubbing, official Meta Cloud green ticks, and zero compliance penalties.
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-[#fafcfb] border border-slate-200 shadow-xs hover-card-elevate">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 flex items-center justify-center text-[#049a3d] text-lg font-bold mb-4">
                    <i class="fa-solid fa-code"></i>
                </div>
                <h3 class="font-extrabold text-base text-slate-900 mb-2">In-House Software Suites</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    We develop complete CRM and HRMS systems that seamlessly connect with our messaging backbones, available for outright white-label or licensing.
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-[#fafcfb] border border-slate-200 shadow-xs hover-card-elevate">
                <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center text-purple-600 text-lg font-bold mb-4">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <h3 class="font-extrabold text-base text-slate-900 mb-2">24/7 Dedicated NOC</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Our Bengaluru Network Operations Center monitors latency, throughput, and failover 24/7 with dedicated enterprise relationship managers.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     FREQUENTLY ASKED QUESTIONS (ABOUT TEXTORA)
========================================================= -->
<section class="py-16 bg-[#fafcfb] border-b border-slate-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-12">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-50 text-emerald-800 text-xs font-bold uppercase tracking-wider mb-2">
                <i class="fa-solid fa-circle-question text-[#049a3d]"></i> Common Inquiries
            </span>
            <h2 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                Frequently Asked Questions
            </h2>
        </div>

        <div class="space-y-3.5">
            
            <details class="group bg-white rounded-2xl border border-slate-200 shadow-xs p-5 transition duration-200">
                <summary class="flex items-center justify-between font-bold text-sm text-slate-900 cursor-pointer list-none">
                    <span>Where is Textora Technologies headquartered and registered?</span>
                    <i class="fa-solid fa-chevron-down text-slate-400 group-open:rotate-180 transition duration-200"></i>
                </summary>
                <p class="mt-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Textora Technologies Pvt. Ltd. is headquartered in Bengaluru, Karnataka, India at 5a, 1A Cross Rd, Dollar Scheme Colony, 1st Stage, BTM 1st Stage (PIN 560068). We are an official Meta Business Partner and registered TRAI DLT CPaaS provider.
                </p>
            </details>

            <details class="group bg-white rounded-2xl border border-slate-200 shadow-xs p-5 transition duration-200">
                <summary class="flex items-center justify-between font-bold text-sm text-slate-900 cursor-pointer list-none">
                    <span>Can we purchase or license the Textora CRM and HRMS software?</span>
                    <i class="fa-solid fa-chevron-down text-slate-400 group-open:rotate-180 transition duration-200"></i>
                </summary>
                <p class="mt-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Yes. Textora CRM and Textora HRMS were developed in-house by our engineering team. We use them for our own operations, and we license them to enterprises as a ready cloud service, white-label instance, or customized corporate deployment.
                </p>
            </details>

            <details class="group bg-white rounded-2xl border border-slate-200 shadow-xs p-5 transition duration-200">
                <summary class="flex items-center justify-between font-bold text-sm text-slate-900 cursor-pointer list-none">
                    <span>What makes Textora&rsquo;s messaging latency faster than aggregators?</span>
                    <i class="fa-solid fa-chevron-down text-slate-400 group-open:rotate-180 transition duration-200"></i>
                </summary>
                <p class="mt-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Unlike brokers who resell third-party queues, Textora holds direct SMPP binds with Airtel, Jio, Vodafone Idea, and BSNL, alongside Meta Cloud API direct connections. When traffic spikes or a telecom route experiences latency, our intelligent load balancer fails over in milliseconds.
                </p>
            </details>

            <details class="group bg-white rounded-2xl border border-slate-200 shadow-xs p-5 transition duration-200">
                <summary class="flex items-center justify-between font-bold text-sm text-slate-900 cursor-pointer list-none">
                    <span>How can I schedule a live walkthrough with Textora architects?</span>
                    <i class="fa-solid fa-chevron-down text-slate-400 group-open:rotate-180 transition duration-200"></i>
                </summary>
                <p class="mt-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    You can click &ldquo;Book Demo&rdquo; in the header, call our direct line at +91 91870 54466, or visit our Bengaluru corporate office. We conduct personalized 15-minute architectural walkthroughs and sandbox trials.
                </p>
            </details>

        </div>

    </div>
</section>

<!-- =========================================================
     BOTTOM CALL TO ACTION: BENGALURU HQ CONNECT
========================================================= -->
<section class="bg-gradient-to-br from-slate-950 via-slate-900 to-emerald-950 py-16 text-white relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <span class="text-xs font-bold uppercase tracking-wider text-emerald-400 bg-emerald-500/10 px-4 py-1.5 rounded-full border border-emerald-500/20">
            Enterprise Architecture &bull; Bengaluru, India
        </span>

        <h2 class="text-2xl sm:text-3xl md:text-4xl font-black text-white mt-4 mb-3 tracking-tight leading-tight">
            Ready to Build Next-Generation <br>
            <span class="text-emerald-400">Communication Workflows?</span>
        </h2>

        <p class="text-slate-300 text-xs sm:text-sm md:text-base max-w-xl mx-auto mb-8 leading-relaxed">
            Whether you need enterprise WhatsApp Business API, high-throughput Bulk SMS routes, or our proprietary in-house CRM &amp; HRMS suites, our architects are ready to assist.
        </p>

        <div class="flex flex-col sm:flex-row gap-3.5 justify-center items-center">
            <button type="button" onclick="openModall()"
                class="w-full sm:w-auto px-8 py-3.5 bg-[#049a3d] hover:bg-[#037f32] text-white font-bold rounded-xl shadow-lg shadow-emerald-900/50 hover:scale-[1.02] transition duration-200 text-xs sm:text-sm">
                <i class="fa-solid fa-calendar-check mr-2"></i> Schedule 15-Min Live Demo
            </button>

            <a href="{{ url('contact-us') }}"
                class="w-full sm:w-auto px-8 py-3.5 bg-white/10 hover:bg-white/15 text-white font-semibold rounded-xl border border-white/20 transition duration-200 text-xs sm:text-sm">
                <i class="fa-solid fa-location-dot mr-1.5 text-emerald-400"></i> Contact Bengaluru Office
            </a>
        </div>
    </div>
</section>

</main>

</x-master-page>
