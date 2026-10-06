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
<div id="whatsapp-calculator"
    class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
<div class="text-center mb-10">
    

    <h2 class="text-5xl font-extrabold mt-5">
        <span class="text-green-600">WhatsApp</span>
        Pricing Calculator
    </h2>

    <p class="mt-4 text-gray-500 text-xl">
        Calculate Marketing & Utility conversation pricing instantly.
    </p>

</div>

<div class="relative overflow-hidden rounded-[32px]
bg-white/90 backdrop-blur-xl
border border-green-100
shadow-[0_25px_80px_rgba(0,0,0,.12)]
p-10 ">

<div class="absolute -top-20 -left-20 w-72 h-72 bg-green-200 rounded-full blur-3xl opacity-30"></div>
<div class="absolute -bottom-20 -right-20 w-72 h-72 bg-yellow-200 rounded-full blur-3xl opacity-30"></div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
<div class="relative overflow-hidden rounded-[32px]
bg-white/90 backdrop-blur-xl
border border-green-100
shadow-[0_25px_80px_rgba(0,0,0,.12)]
p-10 pb-22">

    <div class="space-y-6">


        <!-- Select Plan -->
        <div>

<label
    for="whatsappPlan"
    class="block mb-3 text-lg md:text-xl font-bold text-gray-900">
    Select Plan
</label>

   <select
    id="whatsappPlan"
    class="w-full h-16 text-lg font-semibold rounded-2xl border-2 border-green-200 bg-white px-5 shadow-md transition duration-300 hover:border-green-500 focus:ring-2 focus:ring-green-500 focus:border-green-500">
    <option value="starter">Starter Plan</option>
    <option value="business">Business Plan</option>
    <option value="enterprise">Enterprise Plan</option>
</select>

        </div>
        <!-- Marketing Input -->
        <div>

            <label class="font-semibold text-gray-800">
                Marketing Conversations
            </label>
<input
                id="marketingCount"
                type="number"
                value="5000"
                class="w-full mt-2 rounded-xl border border-gray-300 p-4 focus:ring-2 focus:ring-green-500">
 </div>
  <!-- Utility Input -->
        <div>

            <label class="font-semibold text-gray-800">
                Utility Conversations
            </label>
              <input
                id="utilityCount"
                type="number"
                value="5000"
                class="w-full mt-2 rounded-xl border border-gray-300 p-4 focus:ring-2 focus:ring-green-500">
   </div>
     <!-- WhatsApp Conversation Types -->

        <div class="mt-6 bg-white rounded-2xl shadow-md border border-gray-100 p-3 md:p-5">


            <div class="flex items-start md:items-center justify-between gap-2 mb-4">


                <h3 class="text-lg font-bold text-gray-900">
                    Understand WhatsApp Pricing
                </h3>


                <span class="text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full">
                    Meta
                </span>


            </div>
 <!-- Marketing Conversation -->

            <div class="bg-green-50 rounded-xl p-3 md:p-4 mb-3 md:mb-4">


                <div class="flex items-center">


                    <div class="w-10 h-10 rounded-full bg-green-600 text-white flex items-center justify-center text-lg">
                        📢
                    </div>


                    <div class="ml-3">

                        <h4 class="font-bold text-green-700">
                            Marketing Conversation
                        </h4>


                        <p class="text-xs text-gray-600">
                            Promote business & generate sales
                        </p>

                    </div>


                </div>




                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mt-3 text-xs md:text-sm">


                    <div class="bg-white rounded-lg px-3 py-2 text-xs md:text-sm">
                        ✔ Offers
                    </div>


                    <div class="bg-white rounded-lg px-3 py-2 text-xs md:text-sm"">
                        ✔ Discounts
                    </div>


                    <div class="bg-white rounded-lg px-3 py-2 text-xs md:text-sm">
                        ✔ Product Launch
                    </div>


                    <div class="bg-white rounded-lg px-3 py-2 text-xs md:text-sm">
                        ✔ Lead Generation
                    </div>


                </div>



            </div>






            <!-- Utility Conversation -->


            <div class="bg-blue-50 rounded-xl p-3 md:p-4">


                <div class="flex items-center">


                    <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center text-lg">
                        🔔
                    </div>


                    <div class="ml-3">

                        <h4 class="font-bold text-blue-700">
                            Utility Conversation
                        </h4>


                        <p class="text-xs text-gray-600">
                            Transaction & customer updates
                        </p>

                    </div>


                </div>





                <div class="grid grid-cols-2 gap-2 mt-3 text-sm">


                    <div class="bg-white rounded-lg px-3 py-2 text-xs md:text-sm">
                        ✔ OTP
                    </div>


                    <div class="bg-white rounded-lg px-3 py-2 text-xs md:text-sm">
                        ✔ Order Updates
                    </div>


                    <div class="bg-white rounded-lg px-3 py-2 text-xs md:text-sm">
                        ✔ Payment Alerts
                    </div>


                    <div class="bg-white rounded-lg px-3 py-2 text-xs md:text-sm">
                        ✔ Appointment
                    </div>


                </div>



            </div>





            <!-- Note -->

            <div class="mt-3 bg-yellow-50 border border-yellow-200 rounded-xl p-2.5 md:p-3">


                <p class="text-[11px] md:text-xs text-gray-700 leading-5">

                    <b>Note:</b>
                    WhatsApp pricing depends on Marketing and Utility conversation volume.
                    Charges are calculated according to Meta conversation categories.

                </p>


            </div>




        </div>



    </div>



</div>
<!-- RIGHT PANEL -->
<div class="p-6 lg:p-10 bg-gradient-to-br from-slate-50 to-white rounded-r-3xl">

    <div class="sticky top-6">

        <!-- Main Card -->
        <div class="rounded-3xl bg-white shadow-2xl border border-gray-200 overflow-hidden">

            <!-- Header -->
            <div class="bg-gradient-to-r from-green-600 to-emerald-700 text-white p-6">

                <div class="flex justify-between items-center">

                    <div>
                        <p class="text-sm opacity-80">
                            Total Conversations
                        </p>

                        <h2 id="totalMessages"
                            class="text-5xl font-extrabold mt-2">
                            10,000
                        </h2>
                    </div>

                    <div>
                        <span id="selectedPlanName"
                              class="bg-white/20 backdrop-blur px-4 py-2 rounded-full text-sm font-semibold">
                            Starter Plan
                        </span>
                    </div>

                </div>

            </div>

            <!-- Pricing -->
            <div class="p-4">

                <h3 class="text-lg font-bold mb-4">
                    Cost Breakdown
                </h3>

                <div class="space-y-2.5">

                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">
                            Setup Fee
                        </span>

                        <strong id="setupFee"
                                class="text-base font-semibold"">
                            ₹0
                        </strong>
                    </div>

                    <div class="flex justify-between items-start">

                        <div>

                            <div class="font-medium">
                                Marketing
                            </div>

                            <small id="marketingInfo"
                                   class="text-gray-500">
                            </small>

                        </div>

                        <strong id="marketingCost"
                                class="text-lg text-green-700">
                            ₹0
                        </strong>

                    </div>

                    <div class="flex justify-between items-start">

                        <div>

                            <div class="font-medium">
                                Utility
                            </div>

                            <small id="utilityInfo"
                                   class="text-gray-500">
                            </small>

                        </div>

                        <strong id="utilityCost"
                                class="text-lg text-blue-700">
                            ₹0
                        </strong>

                    </div>

                    <hr class="my-2">

                    <div class="flex justify-between">

                        <span class="font-semibold">
                            Subtotal
                        </span>

                        <strong id="subTotal"
                                class="text-lg">
                            ₹0
                        </strong>

                    </div>

                    <div class="flex justify-between">

                        <span class="font-semibold">
                            GST (18%)
                        </span>

                        <strong id="gstAmount"
                                class="text-orange-600">
                            ₹0
                        </strong>

                    </div>

                </div>

            </div>
<!-- Final Amount -->
<div class="relative bg-gradient-to-r from-green-600 via-green-700 to-emerald-700 text-white rounded-b-3xl overflow-hidden">

    <!-- Left Content -->
    <div class="p-4 md:p-7 pr-24 md:pr-48">

        <div class="text-xs md:text-base opacity-90">
            Total Payable
        </div>

        <div id="finalAmount"
            class="mt-1 md:mt-2 text-xl sm:text-2xl md:text-4xl font-extrabold leading-tight whitespace-nowrap">
            ₹0
        </div>

        <div class="mt-1 md:mt-2 text-[11px] md:text-sm opacity-80">
            Including GST
        </div>

    </div>

    <!-- Right Images -->
    <div
        class="absolute right-1 bottom-0 md:right-4 md:bottom-0 flex items-end pointer-events-none">

        <!-- Coins -->
        <img src="{{ asset('images/coins.png') }}"
            class="w-7 md:w-12 relative left-1 md:left-3 z-10">

        <!-- Calculator -->
        <img src="{{ asset('images/calculator.png') }}"
            class="w-14 md:w-24 z-20">

        <!-- WhatsApp -->
        <img src="{{ asset('images/whatsapp-icon.png') }}"
            class="w-7 md:w-12 relative -left-1 md:-left-3 z-30">

    </div>

</div>
<!-- Summary -->
            <div class="p-6 bg-gray-50 border-t">

                <h4 class="font-bold text-lg mb-5">
                    Summary
                </h4>

                <div class="space-y-3">

                    <div class="flex justify-between">
                        <span>Plan</span>
                        <strong id="summaryPlan">
                            Starter Plan
                        </strong>
                    </div>

                    <div class="flex justify-between">
                        <span>Total</span>
                        <strong id="summaryTotal">
                            10,000
                        </strong>
                    </div>

                    <div class="flex justify-between">
                        <span>Marketing</span>
                        <strong id="summaryMarketing">
                            5,000
                        </strong>
                    </div>

                    <div class="flex justify-between">
                        <span>Utility</span>
                        <strong id="summaryUtility">
                            5,000
                        </strong>
                    </div>

                </div>

                <button
                    onclick="sendWhatsappQuote()"
                    class="w-full mt-7 py-4 rounded-2xl bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-bold text-lg shadow-xl transition duration-300">

                    🚀 Get Instant Quote

                </button>

                <div class="mt-5 flex justify-center gap-4 text-xs text-gray-500">

                    <span>🔒 Secure</span>

                    <span>✔ GST Invoice</span>

                    <span>⚡ Instant Setup</span>

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
    