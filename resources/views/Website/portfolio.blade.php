<x-master-page
    title="Delivered Client Case Studies & Portfolio | Textora Technologies"
    description="Explore real-world web applications, custom CRM platforms, and high-throughput messaging engines engineered and delivered by Textora Technologies for leading businesses across India."
    keywords="Textora portfolio, delivered web solutions, custom CRM case studies, WhatsApp API integration projects, HRMS systems India, software development portfolio Bengaluru"
>

@push('head-scripts')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "@id": "https://textorasms.com/portfolio/#webpage",
  "url": "https://textorasms.com/portfolio",
  "name": "Delivered Client Case Studies & Digital Solutions Portfolio | Textora Technologies",
  "description": "Showcase of delivered enterprise software, custom CRMs, HRMS, and CPaaS communication platforms.",
  "publisher": {
    "@type": "Organization",
    "name": "Textora Technologies Pvt. Ltd.",
    "logo": "https://textorasms.com/images/textorasms-svg-logo.svg",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "5a, 1A Cross Rd, Dollar Scheme Colony, 1st Stage, BTM 1st Stage",
      "addressLocality": "Bengaluru",
      "addressRegion": "Karnataka",
      "postalCode": "560068",
      "addressCountry": "IN"
    }
  }
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
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
  }
  .hover-card-elevate:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
  }
</style>
@endpush

<main class="min-h-screen bg-white">

<!-- =========================================================
     HERO SECTION: DELIVERED DIGITAL & SOFTWARE SOLUTIONS
========================================================= -->
<section class="relative pt-10 pb-16 sm:pt-14 sm:pb-20 lg:pt-16 lg:pb-24 bg-gradient-to-b from-[#f2f8f4] via-[#fbfcfa] to-white overflow-hidden border-b border-slate-100">
    <!-- Ambient Backdrop Glows -->
    <div class="absolute -top-32 left-1/4 w-[500px] h-[500px] bg-emerald-200/25 rounded-full blur-[140px] pointer-events-none"></div>
    <div class="absolute top-12 right-10 w-[420px] h-[420px] bg-blue-100/25 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Breadcrumb Navigation -->
        <nav class="flex items-center gap-2 text-xs text-slate-500 mb-6 sm:mb-8" aria-label="Breadcrumb">
            <a href="{{ url('/') }}" class="hover:text-emerald-700 transition flex items-center gap-1.5 font-medium">
                <i class="fa-solid fa-house text-[11px] text-slate-400"></i> Home
            </a>
            <i class="fa-solid fa-chevron-right text-[8px] text-slate-300"></i>
            <span class="text-slate-800 font-bold">Portfolio</span>
        </nav>

        <div class="text-center max-w-3xl mx-auto">
            
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-50 text-emerald-800 text-xs font-bold border border-emerald-200/80 mb-5 shadow-xs">
                <span class="w-2 h-2 rounded-full bg-[#049a3d] animate-pulse"></span>
                <span>ENGINEERED &amp; DELIVERED FOR 500+ ENTERPRISES</span>
            </div>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-[1.2]">
                Transforming Real Businesses with <br class="hidden sm:inline">
                <span class="text-[#049a3d]">Scalable Digital &amp; Web Solutions</span>
            </h1>

            <p class="mt-5 text-sm sm:text-base lg:text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto">
                Explore our portfolio of high-impact web portals, custom multi-agent CRM engines, automated HRMS suites, and carrier-grade CPaaS architectures built by Textora Technologies.
            </p>

            <!-- Key Delivery Metrics -->
            <div class="mt-10 pt-8 border-t border-slate-200/80 grid grid-cols-2 sm:grid-cols-4 gap-6 max-w-4xl mx-auto">
                <div>
                    <div class="text-2xl sm:text-3xl font-black text-[#049a3d] tracking-tight">500+</div>
                    <div class="text-xs font-semibold text-slate-500 mt-1">Delivered Projects</div>
                </div>
                <div>
                    <div class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">&lt; 2.4s</div>
                    <div class="text-xs font-semibold text-slate-500 mt-1">Real-Time Latency</div>
                </div>
                <div>
                    <div class="text-2xl sm:text-3xl font-black text-[#049a3d] tracking-tight">99.98%</div>
                    <div class="text-xs font-semibold text-slate-500 mt-1">Uptime SLA</div>
                </div>
                <div>
                    <div class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">100%</div>
                    <div class="text-xs font-semibold text-slate-500 mt-1">DLT &amp; Meta Verified</div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     PORTFOLIO FILTER & CASE STUDIES GRID
========================================================= -->
<section class="py-14 sm:py-18 bg-[#fafcfb] border-b border-slate-100" id="projects">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Filter Bar -->
        <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-12">
            <button type="button" onclick="filterPortfolio('all')" data-filter="all" 
                    class="port-filter-btn px-4 sm:px-5 py-2.5 rounded-full text-xs sm:text-sm font-bold bg-[#049a3d] text-white shadow-xs transition duration-200">
                All Projects
            </button>
            <button type="button" onclick="filterPortfolio('crm')" data-filter="crm" 
                    class="port-filter-btn px-4 sm:px-5 py-2.5 rounded-full text-xs sm:text-sm font-bold bg-white text-slate-700 hover:bg-slate-100 border border-slate-200 shadow-xs transition duration-200">
                Custom CRM &amp; HRMS
            </button>
            <button type="button" onclick="filterPortfolio('web')" data-filter="web" 
                    class="port-filter-btn px-4 sm:px-5 py-2.5 rounded-full text-xs sm:text-sm font-bold bg-white text-slate-700 hover:bg-slate-100 border border-slate-200 shadow-xs transition duration-200">
                Web &amp; Portal Development
            </button>
            <button type="button" onclick="filterPortfolio('cpaas')" data-filter="cpaas" 
                    class="port-filter-btn px-4 sm:px-5 py-2.5 rounded-full text-xs sm:text-sm font-bold bg-white text-slate-700 hover:bg-slate-100 border border-slate-200 shadow-xs transition duration-200">
                CPaaS &amp; WhatsApp Bots
            </button>
            <button type="button" onclick="filterPortfolio('healthcare')" data-filter="healthcare" 
                    class="port-filter-btn px-4 sm:px-5 py-2.5 rounded-full text-xs sm:text-sm font-bold bg-white text-slate-700 hover:bg-slate-100 border border-slate-200 shadow-xs transition duration-200">
                Healthcare &amp; FinTech
            </button>
        </div>

        <!-- Case Studies Cards Grid (Dynamic from Admin Panel) -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
            @if(isset($portfolios) && $portfolios->count() > 0)
                @foreach($portfolios as $item)
                    <div class="port-item flex flex-col justify-between bg-white rounded-3xl border border-slate-200 p-7 shadow-xs hover-card-elevate hover:border-emerald-500 transition duration-300" data-category="{{ e($item->category) }}">
                        <div>
                            <!-- Client Logo Header -->
                            <div class="flex items-center justify-between pb-5 border-b border-slate-100">
                                <div class="h-10 flex items-center">
                                    <img src="{{ $item->logo_url }}" alt="{{ $item->client_name }}" class="h-8 max-h-9 w-auto max-w-[120px] object-contain">
                                </div>
                                <span class="text-[10px] font-extrabold uppercase tracking-wider text-emerald-800 bg-emerald-50 border border-emerald-200 px-2.5 py-1 rounded-full">
                                    {{ $item->badge }}
                                </span>
                            </div>

                            <h3 class="text-lg font-black text-slate-900 mt-5 leading-snug">
                                {{ $item->title }}
                            </h3>
                            <p class="mt-2.5 text-xs sm:text-sm text-slate-600 leading-relaxed">
                                {{ $item->description }}
                            </p>

                            <!-- Impact Chips -->
                            <div class="mt-5 p-3.5 rounded-2xl bg-emerald-50/70 border border-emerald-100 space-y-1.5 text-xs text-emerald-950">
                                <div class="flex items-center gap-2 font-bold">
                                    <i class="fa-solid fa-arrow-trend-up text-[#049a3d]"></i>
                                    <span>{{ $item->impact_highlight }}</span>
                                </div>
                                <div class="text-[11px] text-emerald-800">{{ $item->impact_desc }}</div>
                            </div>

                            <!-- Tech Stack Tags -->
                            <div class="mt-5 flex flex-wrap gap-1.5">
                                @foreach($item->tech_tags as $tag)
                                    <span class="text-[10px] font-semibold bg-slate-100 text-slate-700 px-2.5 py-0.5 rounded">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="mt-6 pt-5 border-t border-slate-100 flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-medium">Delivered Solution</span>
                            @if(!empty($item->project_url))
                                <a href="{{ $item->project_url }}" target="_blank" rel="noopener" class="text-[#049a3d] font-bold hover:underline flex items-center gap-1">
                                    <span>View Project &rarr;</span>
                                </a>
                            @else
                                <button type="button" onclick="openModall()" class="text-[#049a3d] font-bold hover:underline flex items-center gap-1">
                                    <span>Request Similar System &rarr;</span>
                                </button>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-span-full py-16 text-center text-slate-500">
                    <p class="text-lg font-semibold">No portfolio case studies published yet.</p>
                </div>
            @endif
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
     ENGINEERING & DELIVERY TIMELINE
========================================================= -->
<section class="py-16 lg:py-20 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold uppercase tracking-wider mb-3">
                <i class="fa-solid fa-code-branch text-[#049a3d]"></i>
                Our Execution Framework
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                From Architecture to Production in <br>
                <span class="text-[#049a3d]">Four Seamless Phases</span>
            </h2>
            <p class="mt-3 text-sm sm:text-base text-slate-600">
                How Textora Technologies scopes, engineers, stress-tests, and deploys scalable enterprise platforms.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="p-6 rounded-2xl bg-[#fafcfb] border border-slate-200 shadow-xs hover-card-elevate">
                <span class="text-3xl font-black text-emerald-200 block mb-2">01</span>
                <h3 class="font-extrabold text-base text-slate-900 mb-2">Architectural Discovery</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    We map data models, telecom throughput requirements, CRM pipelines, and regulatory compliance (DLT &amp; Meta) to draft an immutable spec.
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-[#fafcfb] border border-slate-200 shadow-xs hover-card-elevate">
                <span class="text-3xl font-black text-blue-200 block mb-2">02</span>
                <h3 class="font-extrabold text-base text-slate-900 mb-2">Agile Engineering</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Senior architects write clean, scalable modular code with real-time webhooks, caching layers, and responsive UI components.
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-[#fafcfb] border border-slate-200 shadow-xs hover-card-elevate">
                <span class="text-3xl font-black text-emerald-200 block mb-2">03</span>
                <h3 class="font-extrabold text-base text-slate-900 mb-2">Telecom &amp; Stress Testing</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Simulating 100,000+ simultaneous requests across operator pipes to guarantee sub-2.4-second OTP latency and zero packet drop.
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-[#fafcfb] border border-slate-200 shadow-xs hover-card-elevate">
                <span class="text-3xl font-black text-purple-200 block mb-2">04</span>
                <h3 class="font-extrabold text-base text-slate-900 mb-2">Deployment &amp; 24/7 NOC</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Live production rollout with proactive 24/7 NOC monitoring, automated carrier failover, and dedicated SLA governance from Bengaluru HQ.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     PROJECT INQUIRY CONVERSION BANNER
========================================================= -->
<section class="bg-gradient-to-br from-slate-950 via-slate-900 to-emerald-950 py-16 text-white relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <span class="text-xs font-bold uppercase tracking-wider text-emerald-400 bg-emerald-500/10 px-4 py-1.5 rounded-full border border-emerald-500/20">
            Custom Software &bull; CPaaS &bull; Web Platforms
        </span>

        <h2 class="text-2xl sm:text-3xl md:text-4xl font-black text-white mt-4 mb-3 tracking-tight leading-tight">
            Have a Web, CRM or Messaging Project in Mind?
        </h2>

        <p class="text-slate-300 text-xs sm:text-sm md:text-base max-w-xl mx-auto mb-8 leading-relaxed">
            Let our senior software architects design, build, and deploy your custom enterprise platform with guaranteed scalability and 24/7 dedicated support.
        </p>

        <div class="flex flex-col sm:flex-row gap-3.5 justify-center items-center">
            <button type="button" onclick="openModall()"
                class="w-full sm:w-auto px-8 py-3.5 bg-[#049a3d] hover:bg-[#037f32] text-white font-bold rounded-xl shadow-lg shadow-emerald-900/50 hover:scale-[1.02] transition duration-200 text-xs sm:text-sm">
                <i class="fa-solid fa-calendar-check mr-2"></i> Request Architecture Consultation
            </button>

            <a href="{{ url('contact-us') }}"
                class="w-full sm:w-auto px-8 py-3.5 bg-white/10 hover:bg-white/15 text-white font-semibold rounded-xl border border-white/20 transition duration-200 text-xs sm:text-sm">
                <i class="fa-solid fa-location-dot mr-1.5 text-emerald-400"></i> Contact Bengaluru Office
            </a>
        </div>
    </div>
</section>

</main>

<script>
function filterPortfolio(cat) {
    const items = document.querySelectorAll('.port-item');
    const buttons = document.querySelectorAll('.port-filter-btn');

    buttons.forEach(btn => {
        if (btn.getAttribute('data-filter') === cat) {
            btn.classList.add('bg-[#049a3d]', 'text-white');
            btn.classList.remove('bg-white', 'text-slate-700', 'hover:bg-slate-100');
        } else {
            btn.classList.remove('bg-[#049a3d]', 'text-white');
            btn.classList.add('bg-white', 'text-slate-700', 'hover:bg-slate-100');
        }
    });

    items.forEach(item => {
        if (cat === 'all') {
            item.style.display = 'flex';
        } else {
            const categories = (item.getAttribute('data-category') || '').split(' ');
            if (categories.includes(cat)) {
                item.style.display = 'flex';
            } else {
                item.style.display = 'none';
            }
        }
    });
}
</script>

</x-master-page>
