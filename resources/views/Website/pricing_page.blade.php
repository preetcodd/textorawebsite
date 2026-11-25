<x-master-page
    title="Bulk SMS & WhatsApp API Pricing in India | Textora"
    description="Check Bulk SMS, WhatsApp API, RCS and Bulk WhatsApp pricing in India. Explore Textora plans for business messaging and communication."
>    @php
        function activeNav($path)
        {
            return Request::path() === $path
                ? 'text-green-700 font-semibold'
                : 'text-gray-700';
        }

        $pricingLabels = [
            'SMS' => 'Bulk SMS',
            'Whatsapp' => 'WhatsApp API',
            'Bulk Whatsapp' => 'Bulk WhatsApp',
            'Voice' => 'Voice Calls',
            'RCS' => 'RCS Messaging',
            'Email' => 'Email Marketing',
        ];

        $pricingIcons = [
            'SMS' => 'fa-comment-sms',
            'Whatsapp' => 'fa-brands fa-whatsapp',
            'Bulk Whatsapp' => 'fa-paper-plane',
            'Voice' => 'fa-phone-volume',
            'RCS' => 'fa-message',
            'Email' => 'fa-envelope',
        ];
    @endphp

   
@push('head-scripts')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "WebPage",
            "@id": "https://textorasms.com/pricing-web#webpage",
            "url": "https://textorasms.com/pricing-web",
            "name": "Bulk SMS & WhatsApp API Pricing in India | Textora",
            "description": "Explore Textora pricing for Bulk SMS, WhatsApp Business API, Bulk WhatsApp, RCS, Voice SMS and Email Marketing. Compare plans for your business.",
            "breadcrumb": {
                "@id": "https://textorasms.com/pricing-web#breadcrumb"
            }
        },
        {
            "@type": "BreadcrumbList",
            "@id": "https://textorasms.com/pricing-web#breadcrumb",
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
                    "name": "Pricing",
                    "item": "https://textorasms.com/pricing-web"
                }
            ]
        }
    ]
}
</script>
@endpush

    <style>
        .pricing-page {
            --textora-green: #087849;
            --textora-bright: #049a3d;
            --textora-light: #effaf3;
        }

        /* ================= SERVICE TABS ================= */

        .pricing-page .product-tab,
        .pricing-page .pricing-tab {
            font-weight: 600 !important;
            letter-spacing: -0.01em;
            font-family: inherit;
            background: #ffffff;
            color: #475569;
            border-color: #e5e7eb;
            transition: all .25s ease;
        }

        .pricing-page .product-tab:hover,
        .pricing-page .pricing-tab:hover {
            color: #087849;
            background: #f0faf4;
            border-color: #ccebd7;
        }

        .pricing-page .product-tab.active,
        .pricing-page .pricing-tab.active {
            font-weight: 650 !important;
            color: #ffffff !important;
            background: #087849 !important;
            border-color: #087849 !important;
            box-shadow: 0 5px 14px rgba(8, 120, 73, .13);
        }

        /* ================= SUBCATEGORY TABS ================= */

        .pricing-page .subcat-tab {
            font-weight: 600 !important;
            letter-spacing: -0.01em;
            color: #64748b;
            background: #ffffff;
            border-color: #e2e8f0;
            transition: all .25s ease;
        }

        .pricing-page .subcat-tab:hover {
            color: #087849;
            background: #f0faf4;
            border-color: #ccebd7;
        }

        .pricing-page .subcat-tab.active {
            font-weight: 600 !important;
            color: #087849 !important;
            background: #eaf7ef !important;
            border-color: #b8e2c7 !important;
            box-shadow: none;
        }

        .pricing-page #mobileServiceDropdown {
            font-weight: 600 !important;
            color: #087849;
        }

        /* ================= PRICING CARDS ================= */

        .pricing-page .pricing-card {
            position: relative;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 20px;
            transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
        }

        .pricing-page .pricing-card:hover {
            transform: translateY(-5px);
            border-color: #a7dabb;
            box-shadow: 0 18px 40px rgba(8, 120, 73, .09);
        }

        .pricing-page .pricing-card.recommended {
            border: 1.5px solid #087849;
            box-shadow: 0 12px 35px rgba(8, 120, 73, .09);
        }

        .pricing-page .pricing-card h3 {
            font-weight: 700;
            letter-spacing: -0.035em;
            line-height: 1.25;
        }

        .pricing-page .pricing-card .price-value {
            color: #087849;
            letter-spacing: -0.045em;
        }

        .pricing-page .pricing-card .pricing-check {
            color: #049a3d;
        }

        .pricing-page .choose-plan-btn {
            background: linear-gradient(135deg, #087849, #049a3d);
            transition: all .25s ease;
        }

        .pricing-page .choose-plan-btn:hover {
            background: linear-gradient(135deg, #065e39, #087849);
            box-shadow: 0 8px 20px rgba(8, 120, 73, .17);
            transform: translateY(-1px);
        }

        .pricing-page .calc-plan-btn.selected {
            border: 1.5px solid #087849;
            background: #effaf3;
        }

        .pricing-page .calc-plan-btn {
            transition: all .2s ease;
        }

        .pricing-page .calc-plan-btn:hover {
            border-color: #8bd2a5;
        }

        .pricing-page .calculator-result {
            background: linear-gradient(145deg, #f0faf4, #ffffff);
        }

        .pricing-page .pricing-input:focus {
            outline: none;
            border-color: #049a3d;
            box-shadow: 0 0 0 3px rgba(4, 154, 61, .10);
        }

        @media(max-width:767px) {
            .pricing-page .pricing-card.recommended {
                transform: none !important;
            }
        }
    </style>

    <main class="pricing-page bg-white md:pt-20 pt-8">

        {{-- HERO SECTION INTENTIONALLY HIDDEN --}}

        <!-- ================= PRICING SECTION ================= -->

        <section class="py-10 lg:py-16 bg-[#f8fbf9] border-y border-gray-100">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="text-center mb-8 lg:mb-10">

                    <span class="inline-flex items-center gap-2 text-[#087849] font-semibold tracking-widest uppercase text-xs">
                        <span class="w-6 h-px bg-[#087849]"></span>
                        Our Pricing
                        <span class="w-6 h-px bg-[#087849]"></span>
                    </span>

                  <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900 mt-3 tracking-tight">
    Bulk SMS, WhatsApp API & RCS Messaging Pricing in India
</h1>

                    <p class="text-gray-500 mt-3 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
    Explore Textora SMS pricing for Bulk SMS, WhatsApp Business API,
    Bulk WhatsApp, RCS Messaging, Voice Calls and Email Marketing.
    Compare plans and choose the right messaging solution for your business.
</p>

                </div>

                <!-- DESKTOP PRODUCT TABS -->

                <div class="hidden md:flex flex-wrap justify-center gap-2 p-2 bg-white border border-gray-200 rounded-2xl shadow-sm mb-8">

                    @foreach ($services as $service)
                        @php
                            $serviceDisplay = $pricingLabels[$service] ?? ucwords($service);
                            $targetId = 'service-' . strtolower(str_replace(' ', '-', $service));
                            $isActive = $service === $firstService;
                        @endphp

                        <button
                            type="button"
                            data-target="{{ $targetId }}"
                            class="product-tab pricing-tab px-5 py-3 rounded-xl border text-sm lg:text-base font-semibold whitespace-nowrap
                            {{ $isActive ? 'active' : 'border-transparent text-gray-600 hover:bg-green-50 hover:text-[#087849]' }}">

                            {{ $serviceDisplay }}
                        </button>
                    @endforeach

                </div>

                <!-- MOBILE PRODUCT DROPDOWN -->

                <div class="md:hidden mb-6">

                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">
                        Select Communication Service
                    </label>

                    <select
                        id="mobileServiceDropdown"
                        class="w-full bg-white border border-gray-200 rounded-xl py-3 px-4 text-gray-800 font-semibold shadow-sm focus:outline-none focus:ring-2 focus:ring-green-100 focus:border-green-500"
                        onchange="changeServiceTab(this.value)">

                        @foreach ($services as $service)
                            @php
                                $serviceDisplay = $pricingLabels[$service] ?? ucwords($service);
                                $targetId = 'service-' . strtolower(str_replace(' ', '-', $service));
                                $isActive = $service === $firstService;
                            @endphp

                            <option value="{{ $targetId }}" {{ $isActive ? 'selected' : '' }}>
                                {{ $serviceDisplay }}
                            </option>
                        @endforeach

                    </select>

                </div>

                <!-- SERVICE CONTENT -->

                <div id="pricing-content-container">

                    @foreach ($services as $service)

                        @php
                            $serviceSubcats = $pricings->get($service, collect());

                            $directPlans = collect();

                            if ($service === 'Bulk Whatsapp') {
                                $whatsappSubcats = $pricings->get('Whatsapp', collect());
                                $directPlans = $whatsappSubcats->get('bulk_whatsapp', collect());
                                $serviceSubcats = collect();
                            }

                            $serviceId = 'service-' . strtolower(str_replace(' ', '-', $service));
                            $isServiceHidden = $service !== $firstService;
                            $skipBulkWhatsappSubcat = $service === 'Whatsapp';

                            $serviceName = strtolower($service);

                            if (stripos($serviceName, 'email') !== false) {
                                $unitLabel = 'Emails';
                            } elseif (stripos($serviceName, 'rcs') !== false) {
                                $unitLabel = 'RCS Messages';
                            } elseif (stripos($serviceName, 'whatsapp') !== false) {
                                $unitLabel = 'Messages';
                            } elseif (stripos($serviceName, 'voice') !== false) {
                                $unitLabel = 'Units';
                            } else {
                                $unitLabel = 'SMS';
                            }
                        @endphp

                        <div id="{{ $serviceId }}" class="service-section {{ $isServiceHidden ? 'hidden' : '' }}">

                            <!-- SUBCATEGORY TABS -->

                            @if ($serviceSubcats->isNotEmpty())

                                <div class="flex flex-wrap justify-center gap-2 mb-8 mt-5">

                                    @foreach ($serviceSubcats as $subcat => $subcatPlans)

                                        @if ($skipBulkWhatsappSubcat && $subcat === 'bulk_whatsapp')
                                            @continue
                                        @endif

                                        @php
                                            $label = match ($subcat) {
                                                'business_marketing' => 'WhatsApp Marketing',
                                                'business_utility' => 'WhatsApp Utility',
                                                'promotional' => 'Promotional SMS',
                                                'transactional' => 'Transactional SMS',
                                                'sim_base' => 'SIM Base SMS',
                                                'voice_sms' => 'Voice SMS',
                                                'voice' => 'Voice Calls',
                                                default => ucwords(str_replace('_', ' ', $subcat)),
                                            };

                                            $subcatId = 'subcat-' . $service . '-' . $subcat;
                                            $isFirst = $loop->first && !$isServiceHidden;
                                        @endphp

                                        <button
                                            type="button"
                                            data-target="{{ $subcatId }}"
                                            class="subcat-tab px-4 py-2.5 rounded-xl border text-sm font-semibold transition
                                            {{ $isFirst ? 'active' : 'border-gray-200 bg-white text-gray-600 hover:border-green-200 hover:text-[#087849]' }}">

                                            {{ $label }}

                                        </button>

                                    @endforeach

                                </div>

                            @endif

                            <!-- SUBCATEGORY PLANS -->

                            @foreach ($serviceSubcats as $subcat => $subcatPlans)

                                @php
                                    if ($service === 'Voice' && $subcat === 'voice_sms') {
                                        $subcatPlans = $subcatPlans
                                            ->unique(function ($plan) {
                                                $attributes = $plan->getAttributes();

                                                unset(
                                                    $attributes['id'],
                                                    $attributes['created_at'],
                                                    $attributes['updated_at']
                                                );

                                                ksort($attributes);

                                                return md5(json_encode($attributes));
                                            })
                                            ->values();
                                    }
                                @endphp

                                @if ($skipBulkWhatsappSubcat && $subcat === 'bulk_whatsapp')
                                    @continue
                                @endif

                                @php
                                    $subcatId = 'subcat-' . $service . '-' . $subcat;
                                    $isSubcatHidden = !($loop->first && !$isServiceHidden);
                                @endphp

                                <div id="{{ $subcatId }}" class="subcat-section {{ $isSubcatHidden ? 'hidden' : '' }}">

                                    @if ($subcatPlans->isEmpty())

                                        <div class="bg-white border border-gray-200 rounded-2xl p-12 text-center">
                                            <div class="w-14 h-14 rounded-2xl bg-green-50 flex items-center justify-center mx-auto mb-4">
                                                <i class="fa-solid fa-tags text-xl text-[#087849]"></i>
                                            </div>

                                            <p class="text-gray-500 font-medium">
                                                No pricing plans available at the moment.
                                            </p>
                                        </div>

                                    @else

                                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-7 items-stretch all-pricing-card">

                                            @foreach ($subcatPlans as $index => $plan)

                                                @php
                                                    $isRecommended = $index === 1;

                                                    /*
                                                     * Avoid repeating the plan category.
                                                     * If title or subtitle is the same as category,
                                                     * it will not be displayed again.
                                                     */

                                                    $categoryName = trim((string) $plan->category);
                                                    $planTitle = trim((string) ($plan->title ?? ''));
                                                    $planSubtitle = trim((string) ($plan->sub_title ?? ''));

                                                    $showPlanTitle = $planTitle !== ''
                                                        && strcasecmp($planTitle, $categoryName) !== 0;

                                                    $showPlanSubtitle = $planSubtitle !== ''
                                                        && strcasecmp($planSubtitle, $categoryName) !== 0
                                                        && strcasecmp($planSubtitle, $planTitle) !== 0;
                                                @endphp

                                                <div class="pricing-card {{ $isRecommended ? 'recommended' : '' }} relative bg-white rounded-2xl border border-gray-200 p-5 sm:p-6 flex flex-col justify-between">

                                                    <div>

                                                        @if ($isRecommended)
                                                            <div class="flex justify-center mb-5">
                                                                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-green-50 border border-green-200 text-[#087849] text-xs font-semibold uppercase tracking-wide">
                                                                    <i class="fa-solid fa-star text-[10px]"></i>
                                                                    Recommended
                                                                </span>
                                                            </div>
                                                        @else
                                                            <div class="h-8 mb-3"></div>
                                                        @endif

                                                        @if($plan->service == 'Whatsapp' && in_array($plan->subcategory, ['business_marketing', 'business_utility']))

                                                            <!-- WHATSAPP API PRICING -->

                                                            <div class="mb-5">

                                                                <div class="text-xs font-semibold uppercase tracking-widest text-[#087849] mb-2">
                                                                    {{ $plan->subcategory == 'business_marketing' ? 'WhatsApp Marketing' : 'WhatsApp Utility' }}
                                                                </div>

                                                                <h3 class="text-2xl font-bold text-slate-900">
                                                                    {{ $plan->category }}
                                                                </h3>

                                                                @if($showPlanSubtitle)
                                                                    <p class="text-sm text-gray-500 mt-2 leading-relaxed">
                                                                        {{ $plan->sub_title }}
                                                                    </p>
                                                                @endif

                                                            </div>

                                                            <div class="rounded-xl bg-[#f8fbf9] border border-gray-100 p-4 space-y-3 mb-5">

                                                                <div class="flex justify-between items-center gap-3 text-sm">
                                                                    <span class="text-gray-500">Setup Cost</span>
                                                                    <strong class="text-slate-900 font-semibold">
                                                                        ₹{{ number_format((float)$plan->setup_cost, 2) }}
                                                                    </strong>
                                                                </div>

                                                                <div class="flex justify-between items-center gap-3 text-sm">
                                                                    <span class="text-gray-500">Billing</span>
                                                                    <strong class="text-slate-900 font-semibold">
                                                                        {{ $plan->billing_type }}
                                                                    </strong>
                                                                </div>

                                                                <div class="h-px bg-gray-200"></div>

                                                                <div class="flex justify-between items-center gap-3 text-sm">
                                                                    <span class="text-gray-600">Marketing</span>
                                                                    <strong class="text-[#087849] font-semibold">
                                                                        ₹{{ number_format((float)$plan->marketing_price, 2) }}
                                                                    </strong>
                                                                </div>

                                                                <div class="flex justify-between items-center gap-3 text-sm">
                                                                    <span class="text-gray-600">Utility</span>
                                                                    <strong class="text-[#087849] font-semibold">
                                                                        ₹{{ number_format((float)$plan->utility_price, 2) }}
                                                                    </strong>
                                                                </div>

                                                                @if(!is_null($plan->authentication_price))
                                                                    <div class="flex justify-between items-center gap-3 text-sm">
                                                                        <span class="text-gray-600">Authentication / OTP</span>
                                                                        <strong class="text-slate-900 font-semibold">
                                                                            ₹{{ number_format((float)$plan->authentication_price, 2) }}
                                                                        </strong>
                                                                    </div>
                                                                @endif

                                                                @if(!is_null($plan->service_price))
                                                                    <div class="flex justify-between items-center gap-3 text-sm">
                                                                        <span class="text-gray-600">Service</span>
                                                                        <strong class="text-slate-900 font-semibold">
                                                                            ₹{{ number_format((float)$plan->service_price, 2) }}
                                                                        </strong>
                                                                    </div>
                                                                @endif

                                                                @if(!empty($plan->extra_costs) && is_array($plan->extra_costs))
                                                                    @foreach ($plan->extra_costs as $extra)
                                                                        @if(!empty(trim($extra['label'] ?? '')) && !empty(trim($extra['price'] ?? '')))
                                                                            <div class="flex justify-between items-center gap-3 text-sm">
                                                                                <span class="text-gray-600">{{ $extra['label'] }}</span>
                                                                                <strong class="text-slate-900 font-semibold">
                                                                                    {{ str_starts_with(trim($extra['price']), '₹') || str_starts_with(trim($extra['price']), '$')
                                                                                        ? $extra['price']
                                                                                        : (is_numeric(trim($extra['price'])) ? '₹' . number_format((float)$extra['price'], 2) : $extra['price']) }}
                                                                                </strong>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                @endif

                                                                <p class="text-[11px] text-gray-400 pt-1">
                                                                    Per conversation
                                                                </p>

                                                            </div>

                                                        @elseif($plan->subcategory == 'rcs')

                                                            <!-- RCS PRICING -->

                                                            <div class="mb-5">

                                                                <div class="text-xs font-semibold uppercase tracking-widest text-[#087849] mb-2">
                                                                    RCS Messaging
                                                                </div>

                                                                <h3 class="text-2xl font-bold text-slate-900">
                                                                    {{ $plan->category }}
                                                                </h3>

                                                                @if($showPlanSubtitle)
                                                                    <p class="text-sm text-gray-500 mt-2">
                                                                        {{ $plan->sub_title }}
                                                                    </p>
                                                                @endif

                                                            </div>

                                                            <div class="mb-5 p-4 rounded-xl bg-[#f8fbf9] border border-gray-100">

                                                                <div class="text-sm text-gray-500 mb-1">
                                                                    Plan Price
                                                                </div>

                                                                <div class="flex items-baseline gap-1">
                                                                    <span class="text-xl font-medium text-gray-500">₹</span>
                                                                    <span class="text-4xl font-bold price-value">
                                                                        {{ number_format((float)$plan->monthly_price) }}
                                                                    </span>
                                                                </div>

                                                                <div class="text-sm font-semibold text-slate-700 mt-2">
                                                                    {{ number_format($plan->monthly_total_messages) }}
                                                                    {{ $unitLabel }}
                                                                </div>

                                                            </div>

                                                        @else

                                                            <!-- STANDARD PRICING -->

                                                            <div class="mb-5">

                                                                <div class="text-xs font-semibold uppercase tracking-widest text-[#087849] mb-2">
                                                                    {{ $pricingLabels[$service] ?? ucwords($service) }}
                                                                </div>

                                                                <h3 class="text-2xl font-bold text-slate-900">
                                                                    {{ $plan->category }}
                                                                </h3>

                                                                @if($showPlanTitle)
                                                                    <p class="text-sm font-medium text-gray-600 mt-2">
                                                                        {{ $plan->title }}
                                                                    </p>
                                                                @endif

                                                                @if($showPlanSubtitle)
                                                                    <p class="text-sm text-gray-500 mt-2 leading-relaxed">
                                                                        {{ $plan->sub_title }}
                                                                    </p>
                                                                @endif

                                                            </div>

                                                            <div class="mb-5 p-4 rounded-xl bg-[#f8fbf9] border border-gray-100">

                                                                <div class="text-sm text-gray-500 mb-1">
                                                                    Plan Price
                                                                </div>

                                                                <div class="flex items-baseline gap-1">
                                                                    <span class="text-xl font-medium text-gray-500">₹</span>
                                                                    <span class="text-4xl font-bold price-value">
                                                                        {{ number_format((float)$plan->monthly_price) }}
                                                                    </span>
                                                                </div>

                                                                <div class="text-sm font-semibold text-slate-700 mt-2">
                                                                    {{ number_format($plan->monthly_total_messages) }}
                                                                    {{ $unitLabel }}
                                                                </div>

                                                            </div>

                                                            @if(!empty($plan->extra_costs) && is_array($plan->extra_costs))
                                                                <div class="space-y-2 mb-5 text-sm">

                                                                    @foreach ($plan->extra_costs as $extra)
                                                                        @if(!empty(trim($extra['label'] ?? '')) && !empty(trim($extra['price'] ?? '')))
                                                                            <div class="flex justify-between items-center gap-3">
                                                                                <span class="text-gray-500">{{ $extra['label'] }}</span>

                                                                                <strong class="text-slate-800 font-semibold">
                                                                                    {{ str_starts_with(trim($extra['price']), '₹') || str_starts_with(trim($extra['price']), '$')
                                                                                        ? $extra['price']
                                                                                        : (is_numeric(trim($extra['price'])) ? '₹' . number_format((float)$extra['price'], 2) : $extra['price']) }}
                                                                                </strong>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach

                                                                </div>
                                                            @endif

                                                        @endif

                                                        <!-- FEATURES -->

                                                        @if(!empty($plan->features))

                                                            <div class="border-t border-gray-100 pt-4 mt-4 mb-6">

                                                                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">
                                                                    What's Included
                                                                </p>

                                                                <ul class="space-y-3">

                                                                    @foreach ($plan->features ?? [] as $feature)
                                                                        @if (!empty(trim($feature)))
                                                                            <li class="flex items-start gap-2.5 text-sm text-gray-600 leading-relaxed">
                                                                                <i class="fa-solid fa-circle-check pricing-check mt-0.5"></i>
                                                                                <span>{{ $feature }}</span>
                                                                            </li>
                                                                        @endif
                                                                    @endforeach

                                                                </ul>

                                                            </div>

                                                        @endif

                                                    </div>

                                                    <button
                                                        type="button"
                                                        onclick="openModall()"
                                                        class="choose-plan-btn w-full py-3 px-5 text-white font-semibold text-sm rounded-xl shadow-sm flex items-center justify-center gap-2">

                                                        Choose Plan
                                                        <i class="fa-solid fa-arrow-right text-xs"></i>

                                                    </button>

                                                </div>

                                            @endforeach

                                        </div>

                                    @endif

                                </div>

                            @endforeach

                            <!-- BULK WHATSAPP SPECIAL PLANS -->

                            @if ($service === 'Bulk Whatsapp')

                                @if ($directPlans->isNotEmpty())

                                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-7 items-stretch all-pricing-card mt-5">

                                        @foreach ($directPlans as $index => $plan)

                                            @php
                                                $isRecommended = $index === 1;

                                                $categoryName = trim((string) $plan->category);
                                                $planTitle = trim((string) ($plan->title ?? ''));
                                                $planSubtitle = trim((string) ($plan->sub_title ?? ''));

                                                $showPlanTitle = $planTitle !== ''
                                                    && strcasecmp($planTitle, $categoryName) !== 0;

                                                $showPlanSubtitle = $planSubtitle !== ''
                                                    && strcasecmp($planSubtitle, $categoryName) !== 0
                                                    && strcasecmp($planSubtitle, $planTitle) !== 0;
                                            @endphp

                                            <div class="pricing-card {{ $isRecommended ? 'recommended' : '' }} relative bg-white rounded-2xl border border-gray-200 p-5 sm:p-6 flex flex-col justify-between">

                                                <div>

                                                    @if ($isRecommended)
                                                        <div class="flex justify-center mb-5">
                                                            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-green-50 border border-green-200 text-[#087849] text-xs font-semibold uppercase">
                                                                <i class="fa-solid fa-star text-[10px]"></i>
                                                                Recommended
                                                            </span>
                                                        </div>
                                                    @else
                                                        <div class="h-8 mb-3"></div>
                                                    @endif

                                                    <div class="text-xs font-semibold uppercase tracking-widest text-[#087849] mb-2">
                                                        Bulk WhatsApp
                                                    </div>

                                                    <h3 class="text-2xl font-bold text-slate-900">
                                                        {{ $plan->category }}
                                                    </h3>

                                                    @if($showPlanTitle)
                                                        <p class="text-sm font-medium text-gray-600 mt-2">
                                                            {{ $plan->title }}
                                                        </p>
                                                    @endif

                                                    @if($showPlanSubtitle)
                                                        <p class="text-sm text-gray-500 mt-2 mb-5">
                                                            {{ $plan->sub_title }}
                                                        </p>
                                                    @endif

                                                    <div class="p-4 rounded-xl bg-[#f8fbf9] border border-gray-100 mb-5">

                                                        <div class="text-sm text-gray-500 mb-1">
                                                            Plan Price
                                                        </div>

                                                        <div class="flex items-baseline gap-1">
                                                            <span class="text-xl font-medium text-gray-500">₹</span>
                                                            <span class="text-4xl font-bold price-value">
                                                                {{ number_format((float)$plan->monthly_price) }}
                                                            </span>
                                                        </div>

                                                        <div class="text-sm font-semibold text-slate-700 mt-2">
                                                            {{ number_format($plan->monthly_total_messages) }} Messages
                                                        </div>

                                                    </div>

                                                    @if(!empty($plan->extra_costs) && is_array($plan->extra_costs))
                                                        <div class="space-y-2 mb-5 text-sm">

                                                            @foreach ($plan->extra_costs as $extra)
                                                                @if(!empty(trim($extra['label'] ?? '')) && !empty(trim($extra['price'] ?? '')))
                                                                    <div class="flex justify-between items-center gap-3">
                                                                        <span class="text-gray-500">{{ $extra['label'] }}</span>

                                                                        <strong class="text-slate-800 font-semibold">
                                                                            {{ str_starts_with(trim($extra['price']), '₹') || str_starts_with(trim($extra['price']), '$')
                                                                                ? $extra['price']
                                                                                : (is_numeric(trim($extra['price'])) ? '₹' . number_format((float)$extra['price'], 2) : $extra['price']) }}
                                                                        </strong>
                                                                    </div>
                                                                @endif
                                                            @endforeach

                                                        </div>
                                                    @endif

                                                    @if(!empty($plan->features))

                                                        <div class="border-t border-gray-100 pt-4 mt-4 mb-6">

                                                            <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3">
                                                                What's Included
                                                            </p>

                                                            <ul class="space-y-3">

                                                                @foreach ($plan->features ?? [] as $feature)
                                                                    @if (!empty(trim($feature)))
                                                                        <li class="flex items-start gap-2.5 text-sm text-gray-600">
                                                                            <i class="fa-solid fa-circle-check pricing-check mt-0.5"></i>
                                                                            <span>{{ $feature }}</span>
                                                                        </li>
                                                                    @endif
                                                                @endforeach

                                                            </ul>

                                                        </div>

                                                    @endif

                                                </div>

                                                <button
                                                    type="button"
                                                    onclick="openModall()"
                                                    class="choose-plan-btn w-full py-3 px-5 text-white font-semibold text-sm rounded-xl shadow-sm flex items-center justify-center gap-2">

                                                    Choose Plan
                                                    <i class="fa-solid fa-arrow-right text-xs"></i>

                                                </button>

                                            </div>

                                        @endforeach

                                    </div>

                                @else

                                    <div class="bg-white border border-gray-200 rounded-2xl p-12 text-center mt-5">

                                        <div class="w-14 h-14 rounded-2xl bg-green-50 flex items-center justify-center mx-auto mb-4">
                                            <i class="fa-solid fa-tags text-xl text-[#087849]"></i>
                                        </div>

                                        <p class="text-gray-500 font-medium">
                                            No pricing plans available at the moment.
                                        </p>

                                    </div>

                                @endif

                            @endif

                        </div>

                    @endforeach

                </div>

                <!-- CUSTOM REQUIREMENT STRIP -->

                <div class="mt-12 bg-white border border-green-100 rounded-2xl p-5 sm:p-7 flex flex-col md:flex-row items-center justify-between gap-5 shadow-sm">

                    <div class="flex items-center gap-4">

                        <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-headset text-xl text-[#087849]"></i>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900">
                                Need a Custom Enterprise Solution?
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Talk to our team for custom volumes, integrations and business requirements.
                            </p>
                        </div>

                    </div>

                    <button
                        type="button"
                        onclick="window.open('https://wa.me/919187054466', '_blank')"
                        class="shrink-0 px-6 py-3 rounded-xl bg-[#087849] text-white text-sm font-semibold hover:bg-[#065e39] transition">

                        Talk to Our Team
                        <i class="fa-brands fa-whatsapp ml-2 text-sm"></i>

                    </button>

                </div>

            </div>

        </section>

        <!-- ================= WHATSAPP CALCULATOR DATA ================= -->

        @php
            $marketingPlans = $pricings->get('Whatsapp', collect())->get('business_marketing', collect());

            $whatsappPlans = [
                'starter' => [
                    'setup' => $marketingPlans[0]->setup_cost ?? 0,
                    'marketing' => $marketingPlans[0]->marketing_price ?? 0,
                    'utility' => $marketingPlans[0]->utility_price ?? 0,
                ],
                'business' => [
                    'setup' => $marketingPlans[1]->setup_cost ?? 0,
                    'marketing' => $marketingPlans[1]->marketing_price ?? 0,
                    'utility' => $marketingPlans[1]->utility_price ?? 0,
                ],
                'enterprise' => [
                    'setup' => $marketingPlans[2]->setup_cost ?? 0,
                    'marketing' => $marketingPlans[2]->marketing_price ?? 0,
                    'utility' => $marketingPlans[2]->utility_price ?? 0,
                ],
            ];
        @endphp

        <script>
            window.whatsappPlans = @json($whatsappPlans);
        </script>

        <!-- ================= WHATSAPP CALCULATOR ================= -->

        <section id="whatsapp-calculator" class="scroll-mt-24 md:scroll-mt-28 bg-white py-12 lg:py-16">

            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="text-center mb-9">

                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-green-50 border border-green-100 text-[#087849] text-xs font-semibold tracking-wider uppercase">
                        <i class="fa-solid fa-calculator"></i>
                        Interactive Pricing Tool
                    </span>

                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900 mt-4 tracking-tight">
                        WhatsApp Pricing
                        <span class="text-[#087849]">Calculator</span>
                    </h2>

                    <p class="text-sm sm:text-base text-gray-500 max-w-2xl mx-auto mt-3 leading-relaxed">
                        Estimate your monthly WhatsApp Business API costs.
                        Select a plan and enter your expected conversation volume.
                    </p>

                </div>

                <div class="bg-white border border-gray-200 rounded-3xl shadow-xl overflow-hidden">

                    <div class="h-1.5 bg-gradient-to-r from-[#087849] via-[#049a3d] to-emerald-300"></div>

                    <div class="grid grid-cols-1 lg:grid-cols-12">

                        <!-- LEFT: INPUTS -->

                        <div class="lg:col-span-7 p-5 sm:p-8 space-y-7">

                            <!-- PLAN SELECTION -->

                            <div>

                                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-500 mb-3">
                                    01. Select Your Plan
                                </label>

                                <select id="whatsappPlan" class="hidden">
                                    <option value="starter" selected>Starter Plan</option>
                                    <option value="business">Business Plan</option>
                                    <option value="enterprise">Enterprise Plan</option>
                                </select>

                                <div class="grid grid-cols-3 gap-2.5">

                                    <button
                                        type="button"
                                        onclick="setCalcPlan('starter')"
                                        id="calcPlanBtn-starter"
                                        class="calc-plan-btn selected p-3 rounded-xl border text-left flex flex-col justify-between">

                                        <div class="flex items-center justify-between gap-1">
                                            <span class="text-xs sm:text-sm font-semibold text-slate-900">Starter</span>
                                            <i class="fa-solid fa-circle-check text-[#087849] text-xs calc-plan-check"></i>
                                        </div>

                                        <span class="text-[11px] text-gray-500 mt-2">Getting Started</span>

                                    </button>

                                    <button
                                        type="button"
                                        onclick="setCalcPlan('business')"
                                        id="calcPlanBtn-business"
                                        class="calc-plan-btn p-3 rounded-xl border border-gray-200 text-left flex flex-col justify-between">

                                        <div class="flex items-center justify-between gap-1">
                                            <span class="text-xs sm:text-sm font-semibold text-slate-900">Business</span>
                                            <span class="text-[9px] bg-green-100 text-[#087849] px-1.5 py-1 rounded-full font-semibold">POPULAR</span>
                                        </div>

                                        <span class="text-[11px] text-gray-500 mt-2">Growing Business</span>

                                    </button>

                                    <button
                                        type="button"
                                        onclick="setCalcPlan('enterprise')"
                                        id="calcPlanBtn-enterprise"
                                        class="calc-plan-btn p-3 rounded-xl border border-gray-200 text-left flex flex-col justify-between">

                                        <div class="flex items-center justify-between gap-1">
                                            <span class="text-xs sm:text-sm font-semibold text-slate-900">Enterprise</span>
                                            <i class="fa-solid fa-building text-gray-400 text-xs"></i>
                                        </div>

                                        <span class="text-[11px] text-gray-500 mt-2">Large Scale</span>

                                    </button>

                                </div>

                            </div>

                            <!-- MARKETING INPUT -->

                            <div>

                                <div class="flex flex-wrap items-center justify-between gap-2 mb-2">

                                    <label for="marketingCount" class="text-sm font-semibold text-slate-800 flex items-center gap-2">
                                        <span class="w-2 h-2 rounded-full bg-[#049a3d]"></span>
                                        Marketing Conversations
                                    </label>

                                    <span class="text-xs text-gray-400">
                                        Promotions, offers & sales
                                    </span>

                                </div>

                                <div class="relative">

                                    <i class="fa-solid fa-bullhorn absolute left-4 top-1/2 -translate-y-1/2 text-[#087849]"></i>

                                    <input
                                        id="marketingCount"
                                        type="number"
                                        min="0"
                                        step="500"
                                        value="5000"
                                        class="pricing-input w-full rounded-xl border border-gray-200 bg-gray-50 py-3 pl-11 pr-20 text-slate-900 font-medium"
                                        placeholder="Enter volume">

                                    <span class="absolute right-4 top-1/2 -translate-y-1/2 text-xs text-gray-400">
                                        msgs/mo
                                    </span>

                                </div>

                                <div class="flex flex-wrap items-center gap-2 mt-3">

                                    <span class="text-xs text-gray-400">Quick select:</span>

                                    @foreach ([1000, 5000, 10000, 25000, 50000] as $volume)
                                        <button
                                            type="button"
                                            onclick="setVolume('marketingCount', {{ $volume }})"
                                            class="px-3 py-1.5 rounded-lg bg-gray-100 hover:bg-green-50 hover:text-[#087849] text-xs font-medium text-gray-600 transition">

                                            {{ $volume >= 1000 ? ($volume / 1000) . 'k' : $volume }}

                                        </button>
                                    @endforeach

                                </div>

                            </div>

                            <!-- UTILITY INPUT -->

                            <div>

                                <div class="flex flex-wrap items-center justify-between gap-2 mb-2">

                                    <label for="utilityCount" class="text-sm font-semibold text-slate-800 flex items-center gap-2">
                                        <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                                        Utility Conversations
                                    </label>

                                    <span class="text-xs text-gray-400">
                                        OTPs, alerts & order updates
                                    </span>

                                </div>

                                <div class="relative">

                                    <i class="fa-solid fa-bell absolute left-4 top-1/2 -translate-y-1/2 text-blue-600"></i>

                                    <input
                                        id="utilityCount"
                                        type="number"
                                        min="0"
                                        step="500"
                                        value="5000"
                                        class="pricing-input w-full rounded-xl border border-gray-200 bg-gray-50 py-3 pl-11 pr-20 text-slate-900 font-medium"
                                        placeholder="Enter volume">

                                    <span class="absolute right-4 top-1/2 -translate-y-1/2 text-xs text-gray-400">
                                        msgs/mo
                                    </span>

                                </div>

                                <div class="flex flex-wrap items-center gap-2 mt-3">

                                    <span class="text-xs text-gray-400">Quick select:</span>

                                    @foreach ([1000, 5000, 10000, 25000, 50000] as $volume)
                                        <button
                                            type="button"
                                            onclick="setVolume('utilityCount', {{ $volume }})"
                                            class="px-3 py-1.5 rounded-lg bg-gray-100 hover:bg-blue-50 hover:text-blue-700 text-xs font-medium text-gray-600 transition">

                                            {{ $volume >= 1000 ? ($volume / 1000) . 'k' : $volume }}

                                        </button>
                                    @endforeach

                                </div>

                            </div>

                            <!-- CATEGORY INFORMATION -->

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">

                                <div class="p-4 rounded-xl bg-green-50 border border-green-100">

                                    <div class="flex items-center gap-2 text-[#087849] text-sm font-semibold mb-2">
                                        <i class="fa-solid fa-bullhorn"></i>
                                        Marketing
                                    </div>

                                    <p class="text-xs text-gray-600 leading-relaxed">
                                        Promotional offers, product launches, campaigns and customer engagement.
                                    </p>

                                </div>

                                <div class="p-4 rounded-xl bg-blue-50 border border-blue-100">

                                    <div class="flex items-center gap-2 text-blue-700 text-sm font-semibold mb-2">
                                        <i class="fa-solid fa-shield-halved"></i>
                                        Utility
                                    </div>

                                    <p class="text-xs text-gray-600 leading-relaxed">
                                        Order updates, booking confirmations, transactional alerts and notifications.
                                    </p>

                                </div>

                            </div>

                            <p class="text-[11px] text-gray-400 leading-relaxed">
                                * This calculator provides an estimate based on the configured plan rates. Actual billing may vary according to applicable Meta charges and your final commercial agreement.
                            </p>

                        </div>

                        <!-- RIGHT: RESULT -->

                        <div class="lg:col-span-5 p-5 sm:p-8 calculator-result border-t lg:border-t-0 lg:border-l border-gray-100 flex flex-col justify-between">

                            <div>

                                <div class="flex items-center justify-between pb-5 border-b border-green-100 gap-3">

                                    <div>

                                        <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">
                                            Total Monthly Volume
                                        </span>

                                        <div class="text-3xl font-bold text-slate-900 mt-1" id="totalMessages">
                                            10,000
                                        </div>

                                        <span class="text-xs text-gray-500">Conversations</span>

                                    </div>

                                    <span id="selectedPlanName" class="px-3 py-2 rounded-lg bg-white border border-green-100 text-[#087849] text-xs font-semibold">
                                        Starter Plan
                                    </span>

                                </div>

                                <div class="py-6 space-y-5">

                                    <div class="flex justify-between items-center gap-3">
                                        <div>
                                            <p class="text-sm text-gray-600 font-medium">One-Time Setup Fee</p>
                                        </div>

                                        <strong id="setupFee" class="text-slate-900 text-sm font-semibold">₹0</strong>
                                    </div>

                                    <div class="flex justify-between items-center gap-3">
                                        <div>
                                            <p class="text-sm text-gray-600 font-medium">Marketing Cost</p>
                                            <span id="marketingInfo" class="text-xs text-gray-400">5,000 × ₹0.00</span>
                                        </div>

                                        <strong id="marketingCost" class="text-[#087849] text-base font-semibold">₹0</strong>
                                    </div>

                                    <div class="flex justify-between items-center gap-3">
                                        <div>
                                            <p class="text-sm text-gray-600 font-medium">Utility Cost</p>
                                            <span id="utilityInfo" class="text-xs text-gray-400">5,000 × ₹0.00</span>
                                        </div>

                                        <strong id="utilityCost" class="text-blue-600 text-base font-semibold">₹0</strong>
                                    </div>

                                    <div class="border-t border-green-100 pt-4 flex justify-between items-center">
                                        <span class="text-sm text-gray-600">Subtotal</span>
                                        <strong id="subTotal" class="text-slate-900 font-semibold">₹0</strong>
                                    </div>

                                    <div class="flex justify-between items-center">
                                        <span class="text-sm text-gray-600">GST (18%)</span>
                                        <strong id="gstAmount" class="text-slate-900 font-semibold">₹0</strong>
                                    </div>

                                </div>

                            </div>

                            <div class="bg-white border border-green-100 rounded-2xl p-5 shadow-sm">

                                <div class="flex items-end justify-between gap-3 mb-5">

                                    <div>
                                        <span class="text-xs text-gray-500 font-semibold">
                                            Estimated Total
                                        </span>

                                        <p class="text-xs text-gray-400 mt-1">
                                            Including 18% GST
                                        </p>
                                    </div>

                                    <div id="finalAmount" class="text-2xl sm:text-3xl font-bold text-[#087849]">
                                        ₹0
                                    </div>

                                </div>

                                <button
                                    type="button"
                                    onclick="sendWhatsappQuote()"
                                    class="w-full py-3.5 px-4 rounded-xl bg-[#087849] hover:bg-[#065e39] text-white font-semibold text-sm shadow-lg shadow-green-900/10 transition flex items-center justify-center gap-2">

                                    <i class="fa-brands fa-whatsapp text-lg"></i>
                                    Get Instant Quote on WhatsApp

                                </button>

                                <div class="flex flex-wrap justify-center gap-4 mt-4 text-[11px] text-gray-400">

                                    <span class="flex items-center gap-1">
                                        <i class="fa-solid fa-lock text-[#087849]"></i>
                                        Secure
                                    </span>

                                    <span class="flex items-center gap-1">
                                        <i class="fa-solid fa-file-invoice text-[#087849]"></i>
                                        GST Invoice
                                    </span>

                                    <span class="flex items-center gap-1">
                                        <i class="fa-solid fa-headset text-[#087849]"></i>
                                        Expert Support
                                    </span>

                                </div>

                            </div>

                            <!-- BACKWARD COMPATIBILITY -->

                            <div class="hidden" aria-hidden="true">
                                <span id="summaryPlan">Starter Plan</span>
                                <span id="summaryTotal">10,000</span>
                                <span id="summaryMarketing">5,000</span>
                                <span id="summaryUtility">5,000</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>

    <!-- ================= JAVASCRIPT ================= -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            /* ================= CALCULATOR ================= */

            window.setCalcPlan = function(planKey) {

                const planDropdown = document.getElementById('whatsappPlan');

                if (!planDropdown) return;

                planDropdown.value = planKey;

                const planNameEl = document.getElementById('selectedPlanName');

                if (planNameEl && planDropdown.options[planDropdown.selectedIndex]) {
                    planNameEl.innerText = planDropdown.options[planDropdown.selectedIndex].text;
                }

                ['starter', 'business', 'enterprise'].forEach(function(key) {

                    const btn = document.getElementById('calcPlanBtn-' + key);

                    if (!btn) return;

                    const icon = btn.querySelector('.calc-plan-check');

                    if (key === planKey) {

                        btn.classList.add('selected');
                        btn.classList.remove('border-gray-200');

                        if (icon) {
                            icon.className = 'fa-solid fa-circle-check text-[#087849] text-xs calc-plan-check';
                        }

                    } else {

                        btn.classList.remove('selected');

                        if (icon) {
                            icon.className = 'fa-regular fa-circle text-gray-300 text-xs calc-plan-check';
                        }

                    }

                });

                calculateWhatsappPrice();
            };


            window.setVolume = function(inputId, val) {

                const el = document.getElementById(inputId);

                if (el) {
                    el.value = val;
                    calculateWhatsappPrice();
                }

            };


            function toggleCalculator(target) {

                const calculator = document.getElementById('whatsapp-calculator');

                if (!calculator) return;

                if (target === 'service-whatsapp') {
                    calculator.classList.remove('hidden');
                } else {
                    calculator.classList.add('hidden');
                }

            }


            function calculateWhatsappPrice() {

                const planSelect = document.getElementById('whatsappPlan');

                if (!planSelect || !window.whatsappPlans) return;

                const selectedPlan = planSelect.value;
                const plan = window.whatsappPlans[selectedPlan];

                if (!plan) return;

                const marketingRate = Number(plan.marketing) || 0;
                const utilityRate = Number(plan.utility) || 0;
                const setupCost = Number(plan.setup) || 0;

                const marketing = Math.max(0, parseInt(document.getElementById('marketingCount')?.value) || 0);
                const utility = Math.max(0, parseInt(document.getElementById('utilityCount')?.value) || 0);

                const marketingCost = marketing * marketingRate;
                const utilityCost = utility * utilityRate;

                const subtotal = marketingCost + utilityCost + setupCost;
                const gst = subtotal * 0.18;
                const grandTotal = subtotal + gst;

                const formatCurrency = function(value) {
                    return '₹' + value.toLocaleString('en-IN', {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    });
                };

                const setText = function(id, value) {
                    const element = document.getElementById(id);
                    if (element) element.innerText = value;
                };

                setText('totalMessages', (marketing + utility).toLocaleString('en-IN'));

                setText('setupFee', '₹' + setupCost.toLocaleString('en-IN'));

                setText(
                    'marketingInfo',
                    marketing.toLocaleString('en-IN') + ' × ₹' + marketingRate.toFixed(2)
                );

                setText(
                    'utilityInfo',
                    utility.toLocaleString('en-IN') + ' × ₹' + utilityRate.toFixed(2)
                );

                setText('marketingCost', formatCurrency(marketingCost));
                setText('utilityCost', formatCurrency(utilityCost));
                setText('subTotal', formatCurrency(subtotal));
                setText('gstAmount', formatCurrency(gst));
                setText('finalAmount', formatCurrency(grandTotal));

                setText('summaryPlan', planSelect.options[planSelect.selectedIndex].text);
                setText('summaryTotal', (marketing + utility).toLocaleString('en-IN'));
                setText('summaryMarketing', marketing.toLocaleString('en-IN'));
                setText('summaryUtility', utility.toLocaleString('en-IN'));

            }


            const marketingInput = document.getElementById('marketingCount');
            const utilityInput = document.getElementById('utilityCount');

            marketingInput?.addEventListener('input', calculateWhatsappPrice);
            utilityInput?.addEventListener('input', calculateWhatsappPrice);


            const planDropdown = document.getElementById('whatsappPlan');

            if (planDropdown) {

                planDropdown.addEventListener('change', function() {

                    const nameElement = document.getElementById('selectedPlanName');

                    if (nameElement) {
                        nameElement.innerText = this.options[this.selectedIndex].text;
                    }

                    calculateWhatsappPrice();

                });

            }

            calculateWhatsappPrice();


            /* ================= PRODUCT TABS ================= */

            const productTabs = document.querySelectorAll('.product-tab');
            const serviceSections = document.querySelectorAll('.service-section');

            productTabs.forEach(tab => {

                tab.addEventListener('click', () => {

                    const target = tab.getAttribute('data-target');

                    serviceSections.forEach(section => section.classList.add('hidden'));

                    document.getElementById(target)?.classList.remove('hidden');

                    toggleCalculator(target);

                    productTabs.forEach(t => {
                        t.classList.remove('active');
                    });

                    tab.classList.add('active');

                    const firstSubcatTab = document.querySelector(`#${target} .subcat-tab`);

                    if (firstSubcatTab) {
                        firstSubcatTab.click();
                    }

                    const mobileDropdown = document.getElementById('mobileServiceDropdown');

                    if (mobileDropdown) {
                        mobileDropdown.value = target;
                    }

                });

            });


            /* ================= SUBCATEGORY TABS ================= */

            const subcatTabs = document.querySelectorAll('.subcat-tab');

            subcatTabs.forEach(tab => {

                tab.addEventListener('click', () => {

                    const target = tab.getAttribute('data-target');
                    const parentService = tab.closest('.service-section');

                    if (!parentService) return;

                    parentService.querySelectorAll('.subcat-section').forEach(section => {
                        section.classList.add('hidden');
                    });

                    document.getElementById(target)?.classList.remove('hidden');

                    parentService.querySelectorAll('.subcat-tab').forEach(t => {
                        t.classList.remove('active');
                    });

                    tab.classList.add('active');

                });

            });


            /* ================= MOBILE DROPDOWN ================= */

            window.changeServiceTab = function(targetId) {

                serviceSections.forEach(section => section.classList.add('hidden'));

                document.getElementById(targetId)?.classList.remove('hidden');

                toggleCalculator(targetId);

                productTabs.forEach(btn => {
                    btn.classList.toggle('active', btn.dataset.target === targetId);
                });

                const firstSubcatTab = document.querySelector(`#${targetId} .subcat-tab`);

                if (firstSubcatTab) {
                    firstSubcatTab.click();
                }

            };


            /* ================= INITIAL LOAD ================= */

            const whatsappTab = document.querySelector('[data-target="service-whatsapp"]');

            if (whatsappTab) {
                whatsappTab.click();
            } else {

                const defaultTab = document.querySelector('.product-tab');

                if (defaultTab) {
                    defaultTab.click();
                }

            }


            /* ================= CALCULATOR DEEP LINK ================= */

            function handleCalculatorScroll() {

                const hash = window.location.hash;

                if (
                    hash === '#whatsapp-calculator' ||
                    hash === '#calculator' ||
                    hash === '#pricing-calculator'
                ) {

                    if (whatsappTab) {
                        whatsappTab.click();
                    }

                    setTimeout(function() {

                        const calcEl = document.getElementById('whatsapp-calculator');

                        if (calcEl) {
                            calcEl.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }

                    }, 250);

                }

            }

            handleCalculatorScroll();

            window.addEventListener('hashchange', handleCalculatorScroll);

        });


        /* ================= WHATSAPP QUOTE ================= */

        function sendWhatsappQuote() {

            const plan = document.getElementById('summaryPlan')?.innerText || '';
            const total = document.getElementById('summaryTotal')?.innerText || '';
            const marketing = document.getElementById('summaryMarketing')?.innerText || '';
            const utility = document.getElementById('summaryUtility')?.innerText || '';
            const amount = document.getElementById('finalAmount')?.innerText || '';

            const message =
`Hello Textora,

I am interested in WhatsApp Business API.

*Selected Plan:* ${plan}
*Marketing Conversations:* ${marketing}
*Utility Conversations:* ${utility}
*Total Conversations:* ${total}
*Estimated Cost:* ${amount}

Please contact me with more details.`;

            const phone = "919187054466";

            window.open(
                `https://wa.me/${phone}?text=${encodeURIComponent(message)}`,
                "_blank"
            );

        }
    </script>

</x-master-page>