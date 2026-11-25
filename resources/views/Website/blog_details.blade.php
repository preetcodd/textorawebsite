
<x-master-page
    :title="$blog_details->title . ' | Textora SMS'"
    :description="\Illuminate\Support\Str::limit(trim(strip_tags($blog_details->description)), 155)"
>

    @php
        $blogUrl = url('blog_details/' . $blog_details->id);

        $blogDate = $blog_details->date
            ? \Carbon\Carbon::parse($blog_details->date)->format('Y-m-d')
            : null;

        $blogFormattedDate = $blog_details->date
            ? \Carbon\Carbon::parse($blog_details->date)->format('F d, Y')
            : '';

        $blogDescription = \Illuminate\Support\Str::limit(
            trim(strip_tags($blog_details->description)),
            155
        );

        $blogSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'BlogPosting',
            '@id' => $blogUrl . '#article',
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => $blogUrl,
            ],
            'headline' => $blog_details->title,
            'description' => $blogDescription,
            'url' => $blogUrl,
            'datePublished' => $blogDate,
            'author' => [
                '@type' => 'Organization',
                'name' => 'Textora Technologies Pvt Ltd',
                'url' => 'https://textorasms.com/',
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Textora Technologies Pvt Ltd',
                'url' => 'https://textorasms.com/',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('images/textorasms-svg-logo.svg'),
                ],
            ],
            'isPartOf' => [
                '@type' => 'Blog',
                'name' => 'Textora Blog',
                'url' => url('/blog'),
            ],
        ];

        if ($blog_details->image) {
            $blogSchema['image'] = [
                asset('storage/' . $blog_details->image)
            ];
        }

        if ($blogDate) {
            $blogSchema['datePublished'] = $blogDate;
        } else {
            unset($blogSchema['datePublished']);
        }

        $breadcrumbSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => url('/'),
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'Blog',
                    'item' => url('/blog'),
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 3,
                    'name' => $blog_details->title,
                    'item' => $blogUrl,
                ],
            ],
        ];
    @endphp


    @push('head-scripts')

        {{-- BLOG POSTING SCHEMA --}}
        <script type="application/ld+json">
            {!! json_encode(
                $blogSchema,
                JSON_UNESCAPED_SLASHES |
                JSON_UNESCAPED_UNICODE |
                JSON_HEX_TAG |
                JSON_HEX_AMP |
                JSON_HEX_APOS |
                JSON_HEX_QUOT
            ) !!}
        </script>

        {{-- BREADCRUMB SCHEMA --}}
        <script type="application/ld+json">
            {!! json_encode(
                $breadcrumbSchema,
                JSON_UNESCAPED_SLASHES |
                JSON_UNESCAPED_UNICODE |
                JSON_HEX_TAG |
                JSON_HEX_AMP |
                JSON_HEX_APOS |
                JSON_HEX_QUOT
            ) !!}
        </script>


        <style>
            .blog-details-page {
                --textora-green: #087849;
                --textora-light: #effaf3;
            }

            .blog-details-page .blog-main-card {
                border: 1px solid #e8eee9;
                box-shadow: 0 8px 35px rgba(15, 23, 42, 0.045);
            }

            .blog-details-page .blog-image {
                transition: transform .4s ease;
            }

            .blog-details-page .recent-blog {
                transition: all .25s ease;
            }

            .blog-details-page .recent-blog:hover {
                background: #f0faf4;
                border-color: #d4eddd;
                transform: translateY(-2px);
            }

            .blog-details-page .recent-blog img {
                transition: transform .3s ease;
            }

            .blog-details-page .recent-blog:hover img {
                transform: scale(1.04);
            }

            .blog-details-page .blog-content {
                color: #475569;
                font-size: 16px;
                line-height: 1.85;
                overflow-wrap: anywhere;
                word-break: normal;
            }

            .blog-details-page .blog-content h2,
            .blog-details-page .blog-content h3,
            .blog-details-page .blog-content h4 {
                color: #172b23;
                font-weight: 650;
                line-height: 1.35;
                margin-top: 1.8rem;
                margin-bottom: .8rem;
            }

            .blog-details-page .blog-content h2 {
                font-size: 1.65rem;
            }

            .blog-details-page .blog-content h3 {
                font-size: 1.3rem;
            }

            .blog-details-page .blog-content p {
                margin-bottom: 1rem;
            }

            .blog-details-page .blog-content ul,
            .blog-details-page .blog-content ol {
                padding-left: 1.5rem;
                margin: 1rem 0;
            }

            .blog-details-page .blog-content ul {
                list-style: disc;
            }

            .blog-details-page .blog-content ol {
                list-style: decimal;
            }

            .blog-details-page .blog-content a {
                color: var(--textora-green);
                text-decoration: underline;
                text-underline-offset: 3px;
                overflow-wrap: anywhere;
            }

            .blog-details-page .blog-content img {
                max-width: 100%;
                height: auto;
                border-radius: 14px;
                margin: 1.25rem 0;
            }

            .blog-details-page .blog-content table {
                display: block;
                max-width: 100%;
                overflow-x: auto;
            }

            @media (max-width: 767px) {
                .blog-details-page .blog-content {
                    font-size: 15px;
                    line-height: 1.8;
                }

                .blog-details-page .blog-content h2 {
                    font-size: 1.4rem;
                }

                .blog-details-page .blog-content h3 {
                    font-size: 1.2rem;
                }
            }
        </style>

    @endpush


    <div class="blog-details-page bg-slate-50 min-h-screen">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-14">

            {{-- BREADCRUMB --}}
            <nav aria-label="Breadcrumb"
                class="flex items-center flex-wrap gap-2 text-sm text-gray-500 mb-6">

                <a href="{{ url('/') }}"
                    class="hover:text-green-700 transition">
                    Home
                </a>

                <span aria-hidden="true">/</span>

                <a href="{{ url('/blog') }}"
                    class="hover:text-green-700 transition">
                    Blog
                </a>

                <span aria-hidden="true">/</span>

                <span class="text-green-700 font-medium line-clamp-1"
                    aria-current="page">
                    {{ $blog_details->title }}
                </span>

            </nav>


            <div class="grid grid-cols-1 lg:grid-cols-12 gap-7 items-start">


                {{-- MAIN BLOG DETAILS --}}
                <main class="lg:col-span-8 min-w-0">

                    <article class="blog-main-card bg-white rounded-2xl md:rounded-3xl overflow-hidden">

                        <div class="p-5 sm:p-7 md:p-9">


                            {{-- BLOG CATEGORY --}}
                            <div class="inline-flex items-center gap-2 bg-green-50 text-green-700 text-xs font-semibold tracking-wide px-3 py-2 rounded-full mb-5">

                                <span class="w-2 h-2 rounded-full bg-green-600"></span>

                                TEXTORA INSIGHTS

                            </div>


                            {{-- BLOG TITLE --}}
                            <h1 id="detail-title"
                                class="text-2xl sm:text-3xl md:text-4xl font-semibold tracking-tight text-slate-900 leading-tight mb-5">

                                {{ $blog_details->title }}

                            </h1>


                            {{-- PUBLISH DATE --}}
                            <div class="flex items-center flex-wrap gap-3 text-sm text-gray-500 mb-7">

                                @if($blogDate)

                                    <div class="flex items-center gap-2">

                                        <svg class="w-4 h-4 text-green-700 flex-shrink-0"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            aria-hidden="true">

                                            <path stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.8"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />

                                        </svg>

                                        <span>Published on</span>

                                        <time datetime="{{ $blogDate }}"
                                            id="detail-date"
                                            class="font-medium text-slate-800">

                                            {{ $blogFormattedDate }}

                                        </time>

                                    </div>

                                @endif

                                <span class="hidden sm:block text-gray-300">|</span>

                                <div class="flex items-center gap-2">

                                    <svg class="w-4 h-4 text-green-700 flex-shrink-0"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                        aria-hidden="true">

                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.8"
                                            d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />

                                    </svg>

                                    <span>Textora SMS</span>

                                </div>

                            </div>


                            {{-- FEATURED IMAGE --}}
                            @if($blog_details->image)

                                <div class="mb-8 rounded-2xl overflow-hidden bg-slate-100 border border-gray-100">

                                    <img
                                        id="detail-image"
                                        class="blog-image w-full aspect-[16/9] object-contain"
                                        src="{{ asset('storage/' . $blog_details->image) }}"
                                        alt="{{ $blog_details->title }}"
                                        width="1200"
                                        height="675"
                                        loading="eager"
                                        fetchpriority="high"
                                        decoding="async">

                                </div>

                            @endif


                            {{-- BLOG CONTENT --}}
                            <div id="detail-content"
                                class="blog-content prose prose-slate max-w-none">

                                {!! nl2br(e($blog_details->description)) !!}

                            </div>


                            {{-- BRAND CTA --}}
                            <div class="mt-10 pt-7 border-t border-gray-100">

                                <div class="bg-gradient-to-r from-green-50 to-white border border-green-100 rounded-2xl p-5 sm:p-6">

                                    <p class="text-xs uppercase tracking-wider font-semibold text-green-700 mb-2">

                                        Connect. Grow. Succeed.

                                    </p>

                                    <h2 class="text-lg sm:text-xl font-semibold text-slate-900 mb-2">

                                        Looking for reliable business messaging solutions?

                                    </h2>

                                    <p class="text-sm text-gray-600 leading-relaxed mb-5">

                                        Explore Textora SMS solutions for WhatsApp Business API,
                                        Bulk SMS, RCS messaging, Voice SMS and Email Marketing.

                                    </p>

                                    <a href="{{ url('/contact-us') }}"
                                        class="inline-flex items-center justify-center gap-2 bg-green-700 hover:bg-green-800 text-white text-sm font-medium px-5 py-3 rounded-xl transition shadow-sm">

                                        Talk to Our Team

                                        <svg class="w-4 h-4"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            aria-hidden="true">

                                            <path stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M5 12h14m-6-6l6 6-6 6" />

                                        </svg>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </article>

                </main>



                {{-- SIDEBAR RECENT BLOGS --}}
                <aside class="lg:col-span-4">

                    <div class="bg-white border border-gray-100 rounded-2xl md:rounded-3xl p-5 sm:p-6 shadow-sm lg:sticky lg:top-24">


                        {{-- SIDEBAR HEADING --}}
                        <div class="flex items-center justify-between border-b border-gray-100 pb-4 mb-5">

                            <div>

                                <p class="text-xs uppercase tracking-wider text-green-700 font-semibold mb-1">

                                    Explore More

                                </p>

                                <h2 class="text-xl font-semibold text-slate-900">

                                    Recent Blogs

                                </h2>

                            </div>

                            <div class="w-10 h-10 bg-green-50 rounded-xl flex items-center justify-center">

                                <svg class="w-5 h-5 text-green-700"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true">

                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.8"
                                        d="M12 6.5v11m-5.5-5.5h11M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z" />

                                </svg>

                            </div>

                        </div>


                        {{-- RECENT BLOG LIST --}}
                        <div class="space-y-3">

                            @forelse ($recent_blog as $blog)

                                <a href="{{ url('blog_details/' . $blog->id) }}"
                                    class="recent-blog flex items-start gap-3 p-3 rounded-xl border border-transparent"
                                    aria-label="Read article: {{ $blog->title }}">


                                    {{-- THUMBNAIL --}}
                                    <div class="w-20 h-20 flex-shrink-0 rounded-xl overflow-hidden bg-slate-100">

                                        @if($blog->image)

                                            <img
                                                class="w-full h-full object-cover"
                                                src="{{ asset('storage/' . $blog->image) }}"
                                                alt="{{ $blog->title }}"
                                                width="80"
                                                height="80"
                                                loading="lazy"
                                                decoding="async">

                                        @else

                                            <div class="w-full h-full flex items-center justify-center text-green-700 bg-green-50">

                                                <svg class="w-7 h-7"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    viewBox="0 0 24 24"
                                                    aria-hidden="true">

                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="1.7"
                                                        d="M4 5h16v14H4zM4 15l4-4 4 4 3-3 5 5" />

                                                </svg>

                                            </div>

                                        @endif

                                    </div>


                                    {{-- BLOG INFORMATION --}}
                                    <div class="flex-1 min-w-0 pt-1">

                                        <h3 class="text-sm font-medium text-slate-800 leading-snug line-clamp-3 hover:text-green-700 transition">

                                            {{ $blog->title }}

                                        </h3>

                                        @if($blog->date)

                                            <p class="flex items-center gap-1.5 text-xs text-gray-500 mt-2">

                                                <svg class="w-3.5 h-3.5 text-green-700 flex-shrink-0"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    viewBox="0 0 24 24"
                                                    aria-hidden="true">

                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="1.8"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />

                                                </svg>

                                                {{ \Carbon\Carbon::parse($blog->date)->format('M d, Y') }}

                                            </p>

                                        @endif

                                    </div>


                                    <svg class="w-4 h-4 text-gray-400 mt-2 flex-shrink-0"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                        aria-hidden="true">

                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 5l7 7-7 7" />

                                    </svg>

                                </a>

                            @empty

                                <div class="text-center py-8">

                                    <p class="text-sm text-gray-500">
                                        No recent blogs available.
                                    </p>

                                </div>

                            @endforelse

                        </div>


                        {{-- VIEW ALL BLOGS --}}
                        <div class="mt-5 pt-4 border-t border-gray-100">

                            <a href="{{ url('/blog') }}"
                                class="flex items-center justify-center gap-2 w-full bg-green-50 hover:bg-green-100 text-green-800 text-sm font-medium py-3 rounded-xl transition">

                                View All Blogs

                                <svg class="w-4 h-4"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true">

                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 12h14m-6-6l6 6-6 6" />

                                </svg>

                            </a>

                        </div>

                    </div>

                </aside>

            </div>

        </div>

    </div>

</x-master-page>
