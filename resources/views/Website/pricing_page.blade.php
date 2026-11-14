<x-master-page title="Pricing | Textora SMS">
    @php
        function activeNav($path)
        {
            return Request::path() === $path ? 'text-green-700 font-semibold' : 'text-gray-700';
        }
    @endphp

    @push('head-scripts')
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://textorasms.com/pricing-web/#webpage",
      "url": "https://textorasms.com/pricing-web",
      "name": "Textora SMS Pricing - WhatsApp API, Bulk SMS & RCS Plans",
      "description": "Explore transparent and tiered pricing for WhatsApp Business API, Bulk SMS, RCS Messaging, and Voice Call services."
    },
    {
      "@type": "ItemList",
      "name": "Textora SMS Service Plans",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@type": "Product",
            "name": "WhatsApp Business API - Starter Plan",
            "image": "https://textorasms.com/images/textorasms-svg-logo.svg",
            "description": "10,000 Marketing messages with Blue Tick Verification and Chatbot Builder.",
            "sku": "WABA-STARTER",
            "brand": {
              "@type": "Brand",
              "name": "Textora"
            },
            "offers": {
              "@type": "Offer",
              "url": "https://textorasms.com/pricing-web",
              "price": "9999.00",
              "priceCurrency": "INR",
              "availability": "https://schema.org/InStock",
              "priceValidUntil": "2026-12-31"
            }
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@type": "Product",
            "name": "Bulk SMS Promotional - Starter Plan",
            "image": "https://textorasms.com/images/textorasms-svg-logo.svg",
            "description": "10,000 Promotional SMS with DND-safe delivery and web panel access.",
            "sku": "SMS-PROM-STARTER",
            "brand": {
              "@type": "Brand",
              "name": "Textora"
            },
            "offers": {
              "@type": "Offer",
              "url": "https://textorasms.com/pricing-web",
              "price": "1999.00",
              "priceCurrency": "INR",
              "availability": "https://schema.org/InStock",
              "priceValidUntil": "2026-12-31"
            }
          }
        },
        {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@type": "Product",
            "name": "RCS Messaging - Starter Plan",
            "image": "https://textorasms.com/images/textorasms-svg-logo.svg",
            "description": "10,000 RCS messages with Rich Cards, Images & Carousels.",
            "sku": "RCS-STARTER",
            "brand": {
              "@type": "Brand",
              "name": "Textora"
            },
            "offers": {
              "@type": "Offer",
              "url": "https://textorasms.com/pricing-web",
              "price": "2999.00",
              "priceCurrency": "INR",
              "availability": "https://schema.org/InStock",
              "priceValidUntil": "2026-12-31"
            }
          }
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which plan is best for startups?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our Starter Plans are perfect for startups and small businesses, offering 10,000 messages with full access to our cloud dashboard and basic features."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer custom pricing for enterprises?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our Enterprise Plans provide custom solutions for large agencies and corporations needing high-volume messaging, dedicated support, and advanced analytics."
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
          "name": "Pricing",
          "item": "https://textorasms.com/pricing-web"
        }
      ]
    }
  ]
}
</script>
    @endpush

    <main class="md:pt-20 pt-10 bg-white">
        <section class="xl:py-16 py-8 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Header -->
                <div class="text-center md:mb-12 mb-4">
                    <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">
                        Pricing</span>
                    <h2
                        class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight mb-5">
                        Tiered Pricing by Product
                    </h2>
                    <p class="md:text-lg text-md text-gray-500 mt-3">Choose the communication channel and scale that
                        fits
                        your business needs.</p>
                </div>

                <!-- ==================== PRODUCT TABS (DESKTOP) ==================== -->
                <div class="hidden md:flex border-b border-gray-200 justify-center overflow-x-auto mb-4">
                    @foreach ($services as $service)
                        @php
                            $serviceDisplay = match ($service) {
                                'SMS' => 'Bulk SMS',
                                'Whatsapp' => 'WhatsApp API',
                                'Bulk Whatsapp' => 'Bulk Whatsapp',
                                'Voice' => 'Voice Calls',
                                'RCS' => 'RCS Messaging',
                                'Email' => 'Email Marketing',
                                // 'Reseller' => 'Reseller Plans',
                                default => ucwords($service),
                            };

                            $isActive = $service === $firstService;
                            $targetId = 'service-' . strtolower(str_replace(' ', '-', $service));
                        @endphp

                        <button data-target="{{ $targetId }}"
                            class="product-tab lg:px-6 lg:py-3 md:px-3 p-2 lg:text-xl text-md font-semibold border-b-4 transition-all duration-200 whitespace-nowrap
                                                                            {{ $isActive ? 'border-[#049a3d] text-[#049a3d]' : 'border-transparent text-gray-600 hover:text-[#049a3d]' }}">
                            {{ $serviceDisplay }}
                        </button>
                    @endforeach
                </div>

                <!-- ==================== PRODUCT TABS (MOBILE DROPDOWN) ==================== -->
                <div class="md:hidden mb-4">
                    <select id="mobileServiceDropdown"
                        class="w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-700"
                        onchange="changeServiceTab(this.value)">


                        @foreach ($services as $service)
                            @php
                                $serviceDisplay = match ($service) {
                                    'SMS' => 'Bulk SMS',
                                    'Whatsapp' => 'WhatsApp API',
                                    'Voice' => 'Voice Calls',
                                    'RCS' => 'RCS Messaging',
                                     'Email' => 'Email Marketing',
                                    // 'Reseller' => 'Reseller Plans',
                                    default => ucwords($service),
                                };

                                $targetId = 'service-' . strtolower(str_replace(' ', '-', $service));
                                $isActive = $service === $firstService;
                            @endphp

                            <option value="{{ $targetId }}" {{ $isActive ? 'selected' : '' }}>
                                {{ $serviceDisplay }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- ==================== SERVICE CONTENT AREA ==================== -->
                <div id="pricing-content-container">
                    @foreach ($services as $service)
                        @php
    $serviceSubcats = $pricings->get($service, collect());

    // Special handling for 'Bulk Whatsapp': pull plans from 'Whatsapp' -> 'bulk_whatsapp'
    $directPlans = collect();
    if ($service === 'Bulk Whatsapp') {
        $whatsappSubcats = $pricings->get('Whatsapp', collect());
        $directPlans = $whatsappSubcats->get('bulk_whatsapp', collect());
        $serviceSubcats = collect(); // No subcats for Bulk Whatsapp
    }

    $serviceId = 'service-' . strtolower(str_replace(' ', '-', $service));
    $isServiceHidden = $service !== $firstService;
    $skipBulkWhatsappSubcat = $service === 'Whatsapp';

    // Unit label for pricing quantity
    $serviceName = strtolower($service);

    if (stripos($serviceName, 'email') !== false) {
        $unitLabel = 'Emails';
    } elseif (stripos($serviceName, 'rcs') !== false) {
        $unitLabel = 'RCS Messages';
    } elseif (stripos($serviceName, 'whatsapp') !== false) {
        $unitLabel = 'Messages';
    } else {
        $unitLabel = 'SMS';
    }
@endphp

                        <div id="{{ $serviceId }}" class="service-section {{ $isServiceHidden ? 'hidden' : '' }}">

                            <!-- SUB CATEGORY TABS -->
                            @if ($serviceSubcats->isNotEmpty())
                                <div
                                    class="md:flex grid grid-cols-2 justify-center overflow-x-auto md:mb-12 md:mt-10 my-5">
                                    @foreach ($serviceSubcats as $subcat => $subcatPlans)
                                        @if ($skipBulkWhatsappSubcat && $subcat === 'bulk_whatsapp')
                                            @continue
                                        @endif
                                        @php
                                            $label = match ($subcat) {
                                                'business_marketing' => 'Business Whatsapp - Marketing',
                                                'business_utility' => 'Business Whatsapp - Utility',
                                                'promotional' => 'Promotional SMS',
                                                'transactional' => 'Transactional',
                                                'sim_base' => 'Sim Base SMS',
                                                'voice_sms' => 'Voice SMS',
                                                default => ucwords(str_replace('_', ' ', $subcat)),
                                            };

                                            $subcatId = 'subcat-' . $service . '-' . $subcat;
                                            $isFirst = $loop->first && !$isServiceHidden;
                                        @endphp

                                        <button data-target="{{ $subcatId }}"
                                            class="subcat-tab px-5 py-2.5 text-lg font-medium transition-all duration-200 whitespace-nowrap
                                                                                                                                                                                            {{ $isFirst ? 'border-[#049a3d] text-[#049a3d]' : 'border-transparent text-gray-600 hover:text-[#049a3d]' }}">
                                            {{ $label }}
                                        </button>
                                    @endforeach
                                </div>
                            @endif

                            <!-- SUB CATEGORY CONTENT -->
                            @foreach ($serviceSubcats as $subcat => $subcatPlans)
                                @if ($skipBulkWhatsappSubcat && $subcat === 'bulk_whatsapp')
                                    @continue
                                @endif
                                @php
                                    $subcatId = 'subcat-' . $service . '-' . $subcat;
                                    $isSubcatHidden = !($loop->first && !$isServiceHidden);
                                @endphp

                                <div id="{{ $subcatId }}"
                                    class="subcat-section {{ $isSubcatHidden ? 'hidden' : '' }}">

                                    @if ($subcatPlans->isEmpty())
                                        <div class="text-center py-16">
                                            <p class="text-gray-500 text-lg">No pricing plans available at the moment.
                                            </p>
                                        </div>
                                    @else
                                        <div
                                            class="grid grid-cols-1 md:grid-cols-3 xl:gap-10 lg:gap-6 gap-4 items-stretch all-pricing-card">
                                            @foreach ($subcatPlans as $index => $plan)
                                                @php
                                                    $isRecommended = $index === 1;
                                                    $borderColor = '#049a3d';
                                                @endphp

                                                <div
                                                    class="{{ $isRecommended ? 'xl:p-6 p-4 rounded-2xl shadow-xl border-2 border-[#c7a007] bg-white transform md:scale-105 -translate-y-4' : 'xl:p-6 p-4 rounded-xl border-2 mb-5 shadow-xl border-[#c7a007]' }} transition-all duration-300 flex flex-col justify-between">
                                                  

                                                  
                                                  
                                                  
                                                    @if($plan->service == 'Whatsapp' && in_array($plan->subcategory,['business_marketing','business_utility']))

    {{-- WhatsApp API Card --}}
    <div>

        @if ($isRecommended)
            <div class="text-center mb-4">
                <span class="inline-block bg-gradient-to-r from-[#c7a007] to-[#a99648] text-white text-xs font-bold uppercase px-4 py-1.5 rounded-full">
                    Recommended
                </span>
            </div>
        @endif

        <h4 class="xl:text-2xl text-lg font-bold text-gray-900 mb-1">
            {{ $plan->category }}
        </h4>

        <p class="text-gray-600 mb-3">
            {{ $plan->sub_title }}
        </p>

        <div class="space-y-2 border-t-2 border-gray-100 pt-4">

            <div class="flex justify-between">
                <span>Setup Cost</span>
                <strong>₹{{ number_format($plan->setup_cost) }}</strong>
            </div>

            <div class="flex justify-between">
                <span>Billing</span>
                <strong>{{ $plan->billing_type }}</strong>
            </div>

            <div class="flex justify-between">
                <span>Marketing</span>
                <strong>₹{{ number_format($plan->marketing_price,2) }}/Conversation</strong>
            </div>

            <div class="flex justify-between">
                <span>Utility</span>
                <strong>₹{{ number_format($plan->utility_price,2) }}/Conversation</strong>
            </div>

            @if(!is_null($plan->authentication_price))
            <div class="flex justify-between">
                <span>OTP</span>
                <strong>₹{{ number_format((float)$plan->authentication_price, 2) }}/Conversation</strong>
            </div>
            @endif

            @if(!is_null($plan->service_price))
            <div class="flex justify-between">
                <span>Service</span>
                <strong>₹{{ number_format((float)$plan->service_price, 2) }}/Conversation</strong>
            </div>
            @endif

            @if(!empty($plan->extra_costs) && is_array($plan->extra_costs))
                @foreach ($plan->extra_costs as $extra)
                    @if(!empty(trim($extra['label'] ?? '')) && !empty(trim($extra['price'] ?? '')))
                        <div class="flex justify-between">
                            <span>{{ $extra['label'] }}</span>
                            <strong>{{ str_starts_with(trim($extra['price']), '₹') || str_starts_with(trim($extra['price']), '$') ? $extra['price'] : (is_numeric(trim($extra['price'])) ? '₹' . number_format((float)$extra['price'], 2) : $extra['price']) }}</strong>
                        </div>
                    @endif
                @endforeach
            @endif

        </div>

        <ul class="lg:space-y-2 space-y-1 mb-4 border-t-2 border-gray-100 py-3">
            @foreach ($plan->features ?? [] as $feature)
                @if (!empty(trim($feature)))
                    <li class="flex items-center text-gray-700 text-sm xl:text-md">
                        <span class="text-[#0c963c] mr-3">✔</span>
                        {{ $feature }}
                    </li>
                @endif
            @endforeach
        </ul>

    </div>

@elseif($plan->subcategory == 'rcs')
                                                        <div>
                                                            @if ($isRecommended)
                                                                <div class="text-center mb-4">
                                                                    <span
                                                                        class="inline-block bg-gradient-to-r from-[#c7a007] to-[#a99648] text-white text-xs font-bold uppercase px-4 py-1.5 rounded-full">Recommended</span>
                                                                </div>
                                                            @endif

                                                            <h4
                                                                class="xl:text-2xl text-lg font-bold text-gray-900 mb-1">
                                                                {{ $plan->category }}
                                                            </h4>

                                                            <p class="text-gray-600 mb-3 md:text-md text-sm">
                                                                {{ $plan->sub_title ?? '' }}
                                                            </p>

                                                            <div class="mb-2">
                                                                <span class="text-2xl font-medium text-gray-500"><i
                                                                        class="fa fa-inr" aria-hidden="true"></i></span>
                                                                <span
                                                                    class="text-4xl font-bold text-[#c7a007]">{{ number_format($plan->monthly_price) }}</span>
                                                                <span class="text-lg text-gray-700"> / Per
                                                                </span>
                                                                <div class="text-md font-bold text-gray-700">
                                                                    {{ number_format($plan->monthly_total_messages) }}
                                                                    {{ $unitLabel }}
                                                                </div>
                                                            </div>

                                                            <ul
                                                                class="lg:space-y-2 space-y-1 mb-4 border-t-2 border-gray-100 py-3">
                                                                @foreach ($plan->features ?? [] as $feature)
                                                                    @if (!empty(trim($feature)))
                                                                        <li
                                                                            class="flex items-center text-gray-700 text-sm xl:text-md">
                                                                            <span class="text-[#0c963c] mr-3">✔</span>
                                                                            {{ $feature }}
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>

                                                        </div>
                                                    @else
                                                        <div>
                                                            @if ($isRecommended)
                                                                <div class="text-center mb-4">
                                                                    <span
                                                                        class="inline-block bg-gradient-to-r from-[#c7a007] to-[#a99648] text-white text-xs font-bold uppercase px-4 py-1.5 rounded-full">Recommended</span>
                                                                </div>
                                                            @endif

                                                            <h4
                                                                class="xl:text-2xl text-lg font-bold text-gray-900 mb-1">
                                                                {{ $plan->category }}
                                                            </h4>

                                                            <div class="mb-2">
                                                                <span class="text-2xl font-medium text-gray-500"><i
                                                                        class="fa fa-inr" aria-hidden="true"></i></span>
                                                                <span
                                                                    class="text-4xl font-bold text-[#c7a007]">{{ number_format($plan->monthly_price) }}</span>
                                                                <div class="text-md font-bold text-gray-700 mt-1">
                                                                    {{ number_format($plan->monthly_total_messages) }}
                                                                    {{ $unitLabel }}
                                                                </div>
                                                            </div>

                                                            @if(!empty($plan->extra_costs) && is_array($plan->extra_costs))
                                                                <div class="space-y-1 my-2 text-sm text-gray-600">
                                                                    @foreach ($plan->extra_costs as $extra)
                                                                        @if(!empty(trim($extra['label'] ?? '')) && !empty(trim($extra['price'] ?? '')))
                                                                            <div class="flex justify-between">
                                                                                <span>{{ $extra['label'] }}:</span>
                                                                                <strong class="text-gray-800">{{ str_starts_with(trim($extra['price']), '₹') || str_starts_with(trim($extra['price']), '$') ? $extra['price'] : (is_numeric(trim($extra['price'])) ? '₹' . number_format((float)$extra['price'], 2) : $extra['price']) }}</strong>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            @endif

                                                            <ul
                                                                class="lg:space-y-2 space-y-1 mb-4 border-t-2 border-gray-100 py-3">
                                                                @foreach ($plan->features ?? [] as $feature)
                                                                    @if (!empty(trim($feature)))
                                                                        <li
                                                                            class="flex items-center text-gray-700 text-sm xl:text-md">
                                                                            <span class="text-[#0c963c] mr-3">✔</span>
                                                                            {{ $feature }}
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>

                                                        </div>
                                                    @endif


                                                    <button onclick="openModall()"
                                                        class="w-full py-2 px-6 bg-gradient-to-r from-[#c7a007] to-[#9a873c] text-white font-bold rounded-lg shadow-lg hover:from-[#035720] hover:to-[#1d8b41] transition">
                                                        Choose Plan
                                                    </button>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                                </div>
                            @endforeach

                            <!-- Special direct content for Bulk Whatsapp -->
                            @if ($service === 'Bulk Whatsapp')
                                @if ($directPlans->isNotEmpty())
                                    <div class="subcat-section relative top-[70px]">
                                        <div
                                            class="grid grid-cols-1 md:grid-cols-3 xl:gap-10 lg:gap-6 gap-4 items-stretch all-pricing-card">
                                            @foreach ($directPlans as $index => $plan)
                                                @php
                                                    $isRecommended = $index === 1;
                                                    $borderColor = '#049a3d';
                                                @endphp

                                                <div
                                                    class="{{ $isRecommended ? 'xl:p-6 p-4 rounded-2xl shadow-xl border-2 border-[#c7a007] bg-white transform md:scale-105 -translate-y-4' : 'xl:p-6 p-4 rounded-xl border-2 mb-5 shadow-xl border-[#c7a007]' }} transition-all duration-300 flex flex-col justify-between">

                                                    <div>
                                                        @if ($isRecommended)
                                                            <div class="text-center mb-4">
                                                                <span
                                                                    class="inline-block bg-gradient-to-r from-[#c7a007] to-[#a99648] text-white text-xs font-bold uppercase px-4 py-1.5 rounded-full">Recommended</span>
                                                            </div>
                                                        @endif

                                                        <h4 class="xl:text-2xl text-lg font-bold text-gray-900 mb-1">
                                                            {{ $plan->category }}
                                                        </h4>

                                                        <p class="text-gray-600 mb-3 md:text-md text-sm">
                                                            {{ $plan->title ?? '' }}
                                                        </p>
                                                        <p class="text-gray-600 mb-3 md:text-md text-sm">
                                                            {{ $plan->sub_title ?? '' }}
                                                        </p>

                                                        <div class="mb-2">
                                                            <span class="text-2xl font-medium text-gray-500"><i
                                                                    class="fa fa-inr" aria-hidden="true"></i></span>
                                                            <span
                                                                class="text-4xl font-bold text-[#c7a007]">{{ number_format($plan->monthly_price) }}</span>
                                                            <span class="text-lg text-gray-700"> / Per
                                                            </span>
                                                            <div class="text-md font-bold text-gray-700">
                                                                {{ number_format($plan->monthly_total_messages) }}
                                                                {{ $unitLabel }}
                                                            </div>
                                                        </div>

                                                        @if(!empty($plan->extra_costs) && is_array($plan->extra_costs))
                                                            <div class="space-y-1 my-2 text-sm text-gray-600">
                                                                @foreach ($plan->extra_costs as $extra)
                                                                    @if(!empty(trim($extra['label'] ?? '')) && !empty(trim($extra['price'] ?? '')))
                                                                        <div class="flex justify-between">
                                                                            <span>{{ $extra['label'] }}:</span>
                                                                            <strong class="text-gray-800">{{ str_starts_with(trim($extra['price']), '₹') || str_starts_with(trim($extra['price']), '$') ? $extra['price'] : (is_numeric(trim($extra['price'])) ? '₹' . number_format((float)$extra['price'], 2) : $extra['price']) }}</strong>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        @endif

                                                        <ul
                                                            class="lg:space-y-2 space-y-1 mb-4 border-t-2 border-gray-100 py-3">
                                                            @foreach ($plan->features ?? [] as $feature)
                                                                @if (!empty(trim($feature)))
                                                                    <li
                                                                        class="flex items-center text-gray-700 text-sm xl:text-md">
                                                                        <span class="text-[#0c963c] mr-3">✔</span>
                                                                        {{ $feature }}
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>

                                                    <button onclick="openModall()"
                                                        class="w-full py-2 px-6 bg-gradient-to-r from-[#c7a007] to-[#9a873c] text-white font-bold rounded-lg shadow-lg hover:from-[#035720] hover:to-[#1d8b41] transition">
                                                        Choose Plan
                                                    </button>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <div class="text-center py-16">
                                        <p class="text-gray-500 text-lg">No pricing plans available at the moment.</p>
                                    </div>
                                @endif
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

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
   
 {{-- WhatsApp Pricing Calculator --}}
<div id="whatsapp-calculator" class="scroll-mt-24 md:scroll-mt-28 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="text-center mb-6">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold tracking-wide mb-2 shadow-xs">
            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
            <span>INTERACTIVE ROI ESTIMATOR</span>
        </div>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">
            <span class="text-[#049a3d]">WhatsApp</span> Pricing Calculator
        </h2>
        <p class="text-xs sm:text-sm text-slate-500 max-w-xl mx-auto mt-1.5">
            Instant transparent pricing for Marketing &amp; Utility conversations with official Meta category rates.
        </p>
    </div>

    <!-- Unified Compact Card Container -->
    <div class="bg-white rounded-3xl border border-slate-200/90 shadow-xl overflow-hidden">
        <!-- Top accent gradient strip -->
        <div class="h-1.5 w-full bg-gradient-to-r from-emerald-500 via-teal-500 to-green-600"></div>

        <div class="grid grid-cols-1 lg:grid-cols-12 divide-y lg:divide-y-0 lg:divide-x divide-slate-100">

            <!-- LEFT COLUMN: Inputs & Plan Selection (7 cols) -->
            <div class="lg:col-span-7 p-5 sm:p-7 space-y-5 bg-white">

                <!-- 1. Select Plan Tier -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-500 mb-2">
                        1. Select Plan Tier
                    </label>

                    <!-- Hidden select for full JS compatibility -->
                    <select id="whatsappPlan" class="hidden">
                        <option value="starter" selected>Starter Plan</option>
                        <option value="business">Business Plan</option>
                        <option value="enterprise">Enterprise Plan</option>
                    </select>

                    <!-- 3 Segmented Interactive Cards -->
                    <div class="grid grid-cols-3 gap-2 sm:gap-2.5">
                        <button type="button" onclick="setCalcPlan('starter')" id="calcPlanBtn-starter"
                            class="calc-plan-btn p-2.5 sm:p-3 rounded-xl border-2 border-[#049a3d] bg-emerald-50/70 text-left transition duration-150 flex flex-col justify-between cursor-pointer">
                            <div class="flex items-center justify-between w-full">
                                <span class="text-xs sm:text-sm font-bold text-slate-900">Starter</span>
                                <i class="fa-solid fa-circle-check text-xs text-[#049a3d] calc-plan-check"></i>
                            </div>
                            <span class="text-[11px] text-[#049a3d] font-semibold mt-1">₹0 Setup</span>
                        </button>

                        <button type="button" onclick="setCalcPlan('business')" id="calcPlanBtn-business"
                            class="calc-plan-btn p-2.5 sm:p-3 rounded-xl border border-slate-200 bg-white hover:border-emerald-300 text-left transition duration-150 flex flex-col justify-between cursor-pointer">
                            <div class="flex items-center justify-between w-full">
                                <span class="text-xs sm:text-sm font-bold text-slate-900">Business</span>
                                <span class="text-[9px] bg-emerald-100 text-emerald-800 font-bold px-1.5 py-0.5 rounded-full">POPULAR</span>
                            </div>
                            <span class="text-[11px] text-slate-500 mt-1">High Volume</span>
                        </button>

                        <button type="button" onclick="setCalcPlan('enterprise')" id="calcPlanBtn-enterprise"
                            class="calc-plan-btn p-2.5 sm:p-3 rounded-xl border border-slate-200 bg-white hover:border-emerald-300 text-left transition duration-150 flex flex-col justify-between cursor-pointer">
                            <div class="flex items-center justify-between w-full">
                                <span class="text-xs sm:text-sm font-bold text-slate-900">Enterprise</span>
                                <i class="fa-solid fa-crown text-[10px] text-amber-500"></i>
                            </div>
                            <span class="text-[11px] text-slate-500 mt-1">Custom SLA</span>
                        </button>
                    </div>
                </div>

                <!-- 2. Marketing Conversations Input -->
                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="marketingCount" class="text-xs font-bold uppercase tracking-wider text-slate-700 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                            <span>Marketing Conversations</span>
                        </label>
                        <span class="text-[11px] text-slate-400 hidden sm:inline">Promotions, Offers &amp; Sales</span>
                    </div>

                    <div class="relative rounded-xl border border-slate-200 shadow-xs focus-within:ring-2 focus-within:ring-emerald-500 focus-within:border-emerald-500 bg-slate-50/50">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-emerald-600">
                            <i class="fa-solid fa-bullhorn text-xs"></i>
                        </div>
                        <input
                            id="marketingCount"
                            type="number"
                            min="0"
                            step="500"
                            value="5000"
                            class="block w-full pl-9 pr-16 py-2.5 text-sm sm:text-base font-semibold text-slate-900 bg-transparent rounded-xl focus:outline-none"
                            placeholder="0">
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3.5 text-xs text-slate-400 font-medium">
                            msgs/mo
                        </div>
                    </div>

                    <!-- Quick Preset Chips -->
                    <div class="flex items-center gap-1.5 mt-2 overflow-x-auto pb-0.5">
                        <span class="text-[11px] text-slate-400 shrink-0 font-medium">Presets:</span>
                        <button type="button" onclick="setVolume('marketingCount', 1000)" class="px-2 py-0.5 rounded-md bg-slate-100 hover:bg-emerald-100 hover:text-emerald-700 text-[11px] font-medium text-slate-600 transition cursor-pointer">1k</button>
                        <button type="button" onclick="setVolume('marketingCount', 5000)" class="px-2 py-0.5 rounded-md bg-slate-100 hover:bg-emerald-100 hover:text-emerald-700 text-[11px] font-medium text-slate-600 transition cursor-pointer">5k</button>
                        <button type="button" onclick="setVolume('marketingCount', 10000)" class="px-2 py-0.5 rounded-md bg-slate-100 hover:bg-emerald-100 hover:text-emerald-700 text-[11px] font-medium text-slate-600 transition cursor-pointer">10k</button>
                        <button type="button" onclick="setVolume('marketingCount', 25000)" class="px-2 py-0.5 rounded-md bg-slate-100 hover:bg-emerald-100 hover:text-emerald-700 text-[11px] font-medium text-slate-600 transition cursor-pointer">25k</button>
                        <button type="button" onclick="setVolume('marketingCount', 50000)" class="px-2 py-0.5 rounded-md bg-slate-100 hover:bg-emerald-100 hover:text-emerald-700 text-[11px] font-medium text-slate-600 transition cursor-pointer">50k</button>
                    </div>
                </div>

                <!-- 3. Utility Conversations Input -->
                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="utilityCount" class="text-xs font-bold uppercase tracking-wider text-slate-700 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                            <span>Utility Conversations</span>
                        </label>
                        <span class="text-[11px] text-slate-400 hidden sm:inline">OTPs, Order Status &amp; Alerts</span>
                    </div>

                    <div class="relative rounded-xl border border-slate-200 shadow-xs focus-within:ring-2 focus-within:ring-blue-500 focus-within:border-blue-500 bg-slate-50/50">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-blue-600">
                            <i class="fa-solid fa-bell text-xs"></i>
                        </div>
                        <input
                            id="utilityCount"
                            type="number"
                            min="0"
                            step="500"
                            value="5000"
                            class="block w-full pl-9 pr-16 py-2.5 text-sm sm:text-base font-semibold text-slate-900 bg-transparent rounded-xl focus:outline-none"
                            placeholder="0">
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3.5 text-xs text-slate-400 font-medium">
                            msgs/mo
                        </div>
                    </div>

                    <!-- Quick Preset Chips -->
                    <div class="flex items-center gap-1.5 mt-2 overflow-x-auto pb-0.5">
                        <span class="text-[11px] text-slate-400 shrink-0 font-medium">Presets:</span>
                        <button type="button" onclick="setVolume('utilityCount', 1000)" class="px-2 py-0.5 rounded-md bg-slate-100 hover:bg-blue-100 hover:text-blue-700 text-[11px] font-medium text-slate-600 transition cursor-pointer">1k</button>
                        <button type="button" onclick="setVolume('utilityCount', 5000)" class="px-2 py-0.5 rounded-md bg-slate-100 hover:bg-blue-100 hover:text-blue-700 text-[11px] font-medium text-slate-600 transition cursor-pointer">5k</button>
                        <button type="button" onclick="setVolume('utilityCount', 10000)" class="px-2 py-0.5 rounded-md bg-slate-100 hover:bg-blue-100 hover:text-blue-700 text-[11px] font-medium text-slate-600 transition cursor-pointer">10k</button>
                        <button type="button" onclick="setVolume('utilityCount', 25000)" class="px-2 py-0.5 rounded-md bg-slate-100 hover:bg-blue-100 hover:text-blue-700 text-[11px] font-medium text-slate-600 transition cursor-pointer">25k</button>
                        <button type="button" onclick="setVolume('utilityCount', 50000)" class="px-2 py-0.5 rounded-md bg-slate-100 hover:bg-blue-100 hover:text-blue-700 text-[11px] font-medium text-slate-600 transition cursor-pointer">50k</button>
                    </div>
                </div>
                <!-- 4. Compact Category Guide Strip -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 pt-1">
                    <div class="p-3 rounded-xl bg-emerald-50/70 border border-emerald-100 text-xs">
                        <div class="font-bold text-emerald-800 flex items-center gap-1.5 mb-1">
                            <i class="fa-solid fa-bullhorn text-[11px]"></i>
                            <span>Marketing Category</span>
                        </div>
                        <p class="text-[11px] text-slate-600 leading-snug">
                            Promotional offers, seasonal broadcasts, cart recovery &amp; product launches.
                        </p>
                    </div>

                    <div class="p-3 rounded-xl bg-blue-50/70 border border-blue-100 text-xs">
                        <div class="font-bold text-blue-800 flex items-center gap-1.5 mb-1">
                            <i class="fa-solid fa-shield-halved text-[11px]"></i>
                            <span>Utility Category</span>
                        </div>
                        <p class="text-[11px] text-slate-600 leading-snug">
                            Mission-critical OTPs, transactional alerts, booking &amp; order status updates.
                        </p>
                    </div>
                </div>

            </div>
            <!-- RIGHT COLUMN: Cost Breakdown & WhatsApp Quote (5 cols) -->
            <div class="lg:col-span-5 bg-gradient-to-br from-slate-900 via-slate-900 to-[#062c19] text-white p-5 sm:p-7 flex flex-col justify-between">
                <div>
                    <!-- Top Bar: Total Volume & Selected Plan -->
                    <div class="flex items-center justify-between pb-3.5 border-b border-white/10">
                        <div>
                            <span class="text-[11px] uppercase tracking-wider text-slate-400 font-semibold block">Total Volume</span>
                            <div class="flex items-baseline gap-1.5 mt-0.5">
                                <span id="totalMessages" class="text-2xl sm:text-3xl font-black text-white font-mono">10,000</span>
                                <span class="text-xs text-slate-400">conversations</span>
                            </div>
                        </div>

                        <span id="selectedPlanName" class="px-3 py-1 rounded-full text-xs font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">
                            Starter Plan
                        </span>
                    </div>

                    <!-- Itemized Cost Breakdown -->
                    <div class="py-3.5 space-y-2.5 text-xs sm:text-sm">
                        <div class="flex justify-between items-center text-slate-300">
                            <span>One-Time Setup Fee</span>
                            <strong id="setupFee" class="font-semibold text-white">₹0</strong>
                        </div>

                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-slate-300">Marketing Cost</span>
                                <span id="marketingInfo" class="block text-[11px] text-slate-400 font-mono">5,000 × ₹0.00</span>
                            </div>
                            <strong id="marketingCost" class="text-emerald-400 font-bold text-sm sm:text-base">₹0</strong>
                        </div>

                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-slate-300">Utility Cost</span>
                                <span id="utilityInfo" class="block text-[11px] text-slate-400 font-mono">5,000 × ₹0.00</span>
                            </div>
                            <strong id="utilityCost" class="text-cyan-400 font-bold text-sm sm:text-base">₹0</strong>
                        </div>

                        <div class="pt-2 border-t border-white/10 flex justify-between items-center text-slate-300">
                            <span>Subtotal</span>
                            <strong id="subTotal" class="font-semibold text-white">₹0</strong>
                        </div>

                        <div class="flex justify-between items-center text-slate-300">
                            <span>GST (18%)</span>
                            <strong id="gstAmount" class="font-semibold text-amber-400">₹0</strong>
                        </div>
                    </div>
                </div>

                <!-- Bottom: Total Payable & Primary Quote Button -->
                <div class="pt-3.5 border-t border-white/10 space-y-3">
                    <div class="flex items-baseline justify-between">
                        <div>
                            <span class="text-xs text-slate-300 block font-medium">Estimated Monthly Payable</span>
                            <span class="text-[10px] text-emerald-400">Includes Meta API fees &amp; 18% GST</span>
                        </div>
                        <div id="finalAmount" class="text-2xl sm:text-3xl font-black text-white font-mono tracking-tight">
                            ₹0
                        </div>
                    </div>

                    <button
                        type="button"
                        onclick="sendWhatsappQuote()"
                        class="w-full py-3 px-4 rounded-xl bg-gradient-to-r from-emerald-500 to-[#049a3d] hover:from-emerald-400 hover:to-[#038334] text-white font-bold text-sm sm:text-base shadow-lg shadow-emerald-950/60 hover:-translate-y-0.5 transition duration-200 flex items-center justify-center gap-2 cursor-pointer">
                        <i class="fa-brands fa-whatsapp text-lg"></i>
                        <span>Get Instant Quote on WhatsApp</span>
                    </button>

                    <div class="flex items-center justify-center gap-3 text-[11px] text-slate-400 pt-0.5">
                        <span class="flex items-center gap-1"><i class="fa-solid fa-lock text-emerald-400 text-[9px]"></i> Meta Partner</span>
                        <span>&bull;</span>
                        <span class="flex items-center gap-1"><i class="fa-solid fa-file-invoice text-emerald-400 text-[9px]"></i> GST Invoice</span>
                        <span>&bull;</span>
                        <span class="flex items-center gap-1"><i class="fa-solid fa-bolt text-emerald-400 text-[9px]"></i> 24h Setup</span>
                    </div>

                    <!-- Hidden summary spans for sendWhatsappQuote backwards compatibility -->
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
</div>
    </main>

    <!-- ==================== JAVASCRIPT ==================== -->
    <script>
       document.addEventListener('DOMContentLoaded', function () {

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
            if (btn) {
                if (key === planKey) {
                    btn.className = 'calc-plan-btn p-2.5 sm:p-3 rounded-xl border-2 border-[#049a3d] bg-emerald-50/70 text-left transition duration-150 flex flex-col justify-between cursor-pointer';
                    const icon = btn.querySelector('.calc-plan-check');
                    if (icon) icon.className = 'fa-solid fa-circle-check text-xs text-[#049a3d] calc-plan-check';
                } else {
                    btn.className = 'calc-plan-btn p-2.5 sm:p-3 rounded-xl border border-slate-200 bg-white hover:border-emerald-300 text-left transition duration-150 flex flex-col justify-between cursor-pointer';
                    const icon = btn.querySelector('.calc-plan-check');
                    if (icon) icon.className = 'fa-regular fa-circle text-xs text-slate-300 calc-plan-check';
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

    if(!planSelect || !window.whatsappPlans){
        return;
    }

    const selectedPlan = planSelect.value;

    const plan = window.whatsappPlans[selectedPlan];

    if(!plan){
        return;
    }


    const marketingRate = Number(plan.marketing);
    const utilityRate   = Number(plan.utility);
    const setupCost     = Number(plan.setup);


    const marketing = parseInt(document.getElementById('marketingCount').value) || 0;
    const utility   = parseInt(document.getElementById('utilityCount').value) || 0;


    const marketingCost = marketing * marketingRate;
    const utilityCost   = utility * utilityRate;


    const subtotal = marketingCost + utilityCost + setupCost;

    const gst = subtotal * 0.18;

    const grandTotal = subtotal + gst;



    document.getElementById('totalMessages').innerText =
        (marketing + utility).toLocaleString();



    document.getElementById('setupFee').innerText =
        '₹' + setupCost.toLocaleString('en-IN');



    document.getElementById('marketingInfo').innerText =
        marketing.toLocaleString('en-IN') 
        + ' × ₹' + marketingRate.toFixed(2);



    document.getElementById('utilityInfo').innerText =
        utility.toLocaleString('en-IN') 
        + ' × ₹' + utilityRate.toFixed(2);



    document.getElementById('marketingCost').innerText =
        '₹' + marketingCost.toLocaleString('en-IN',{
            minimumFractionDigits:2
        });



    document.getElementById('utilityCost').innerText =
        '₹' + utilityCost.toLocaleString('en-IN',{
            minimumFractionDigits:2
        });



    document.getElementById('subTotal').innerText =
        '₹' + subtotal.toLocaleString('en-IN',{
            minimumFractionDigits:2
        });



    document.getElementById('gstAmount').innerText =
        '₹' + gst.toLocaleString('en-IN',{
            minimumFractionDigits:2
        });



    document.getElementById('finalAmount').innerText =
        '₹' + grandTotal.toLocaleString('en-IN',{
            minimumFractionDigits:2
        });

// Summary
document.getElementById('summaryPlan').innerText =
    planSelect.options[planSelect.selectedIndex].text;

document.getElementById('summaryTotal').innerText =
    (marketing + utility).toLocaleString('en-IN');

document.getElementById('summaryMarketing').innerText =
    marketing.toLocaleString('en-IN');

document.getElementById('summaryUtility').innerText =
    utility.toLocaleString('en-IN');

}

  const marketingInput = document.getElementById('marketingCount');
const utilityInput = document.getElementById('utilityCount');

marketingInput?.addEventListener('input', calculateWhatsappPrice);
utilityInput?.addEventListener('input', calculateWhatsappPrice);


const planDropdown = document.getElementById('whatsappPlan');

if(planDropdown){

    planDropdown.addEventListener('change', function(){

        document.getElementById('selectedPlanName').innerText =
        this.options[this.selectedIndex].text;

        calculateWhatsappPrice();

    });

}


calculateWhatsappPrice();

    // YAHI SE TUMHARA EXISTING CODE CONTINUE HOGA
            /* ---------------------- 1. PRODUCT TABS (DESKTOP) ---------------------- */
            const productTabs = document.querySelectorAll('.product-tab');
            const serviceSections = document.querySelectorAll('.service-section');

            productTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const target = tab.getAttribute('data-target');

                    // Hide all service sections
                    serviceSections.forEach(s => s.classList.add('hidden'));

                    // Show selected service
                    document.getElementById(target)?.classList.remove('hidden');
                    toggleCalculator(target);


// Reset styles
                    productTabs.forEach(t => {
                        t.classList.remove('border-[#049a3d]', 'text-[#049a3d]');
                        t.classList.add('border-transparent', 'text-gray-600');
                    });

                    // Active tab state
                    tab.classList.add('border-[#049a3d]', 'text-[#049a3d]');
                    tab.classList.remove('border-transparent', 'text-gray-600');

                    // Activate first sub-category inside the selected service
                    const firstSubcatTab = document.querySelector(`#${target} .subcat-tab`);
                    if (firstSubcatTab) firstSubcatTab.click();

                    // Sync mobile dropdown
                    document.getElementById('mobileServiceDropdown').value = target;
                });
            });


            /* ---------------------- 2. SUB-CATEGORY TABS ---------------------- */
            const subcatTabs = document.querySelectorAll('.subcat-tab');

            subcatTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const target = tab.getAttribute('data-target');
                    const parentService = tab.closest('.service-section');

                    // Hide subcategories inside current service
                    parentService.querySelectorAll('.subcat-section')
                        .forEach(s => s.classList.add('hidden'));

                    // Show selected
                    document.getElementById(target)?.classList.remove('hidden');

                    // Reset styles
                    parentService.querySelectorAll('.subcat-tab').forEach(t => {
                        t.classList.remove('border-[#049a3d]', 'text-[#049a3d]');
                        t.classList.add('border-transparent', 'text-gray-600');
                    });

                    // Active state
                    tab.classList.add('border-[#049a3d]', 'text-[#049a3d]');
                    tab.classList.remove('border-transparent', 'text-gray-600');
                });
            });


            /* ---------------------- 3. MOBILE DROPDOWN ---------------------- */
            window.changeServiceTab = function(targetId) {

                // Hide all
                serviceSections.forEach(s => s.classList.add('hidden'));

                // Show selected
                document.getElementById(targetId)?.classList.remove('hidden');
                toggleCalculator(targetId);
                // Update desktop tabs
                productTabs.forEach(btn => {
                    if (btn.dataset.target === targetId) {
                        btn.classList.add('border-[#049a3d]', 'text-[#049a3d]');
                        btn.classList.remove('border-transparent', 'text-gray-600');
                    } else {
                        btn.classList.remove('border-[#049a3d]', 'text-[#049a3d]');
                        btn.classList.add('border-transparent', 'text-gray-600');
                    }
                });

                // Activate first sub-category automatically
                const firstSubcatTab = document.querySelector(`#${targetId} .subcat-tab`);
                if (firstSubcatTab) firstSubcatTab.click();
            };


           /* ---------------------- 4. INITIAL LOAD → Default WhatsApp ---------------------- */

const whatsappTab = document.querySelector('[data-target="service-whatsapp"]');

if (whatsappTab) {
    whatsappTab.click();
} else {
    const defaultTab = document.querySelector('.product-tab');
    if (defaultTab) defaultTab.click();
}

/* Deep link scroll directly to calculator if #whatsapp-calculator or #calculator is in URL */
function handleCalculatorScroll() {
    const hash = window.location.hash;
    if (hash === '#whatsapp-calculator' || hash === '#calculator' || hash === '#pricing-calculator') {
        if (whatsappTab) whatsappTab.click();
        setTimeout(function() {
            const calcEl = document.getElementById('whatsapp-calculator');
            if (calcEl) {
                calcEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }, 200);
    }
}
handleCalculatorScroll();
window.addEventListener('hashchange', handleCalculatorScroll);

        });
        function sendWhatsappQuote() {

    const plan = document.getElementById('summaryPlan').innerText;
    const total = document.getElementById('summaryTotal').innerText;
    const marketing = document.getElementById('summaryMarketing').innerText;
    const utility = document.getElementById('summaryUtility').innerText;
    const amount = document.getElementById('finalAmount').innerText;

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
    