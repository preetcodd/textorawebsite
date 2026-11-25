<x-master-page
    title="Business Messaging & Technology Blogs | Textora"
    description="Explore Textora blogs for expert insights on WhatsApp Business API, Bulk SMS, RCS messaging, SMS marketing, automation and business communication solutions."
>

    @php
        $publishedBlogs = $vlogMasters->where('is_published', 1);

        $blogSchemaItems = [];

        foreach ($publishedBlogs->values() as $index => $blog) {
            $blogSchemaItems[] = [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'url' => url('blog_details/' . $blog->id),
                'name' => $blog->title,
            ];
        }

        $blogSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'CollectionPage',
            '@id' => url('/blog') . '#webpage',
            'url' => url('/blog'),
            'name' => 'Business Messaging & Technology Blogs | Textora',
            'description' => 'Explore expert insights on WhatsApp Business API, Bulk SMS, RCS messaging, SMS marketing and business communication.',
            'isPartOf' => [
                '@type' => 'WebSite',
                '@id' => 'https://textorasms.com/#website',
                'name' => 'Textora',
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
            'mainEntity' => [
                '@type' => 'ItemList',
                'name' => 'Latest Business Messaging and Technology Articles',
                'numberOfItems' => count($blogSchemaItems),
                'itemListElement' => $blogSchemaItems,
            ],
        ];
    @endphp


    @push('head-scripts')

        {{-- BLOG COLLECTION STRUCTURED DATA --}}
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


        <style>
            .textora-blog-page {
                --textora-green: #087849;
                --textora-light: #effaf3;
            }

            .textora-blog-page .blog-card {
                border: 1px solid #e8eee9;
                box-shadow: 0 5px 24px rgba(15, 23, 42, 0.045);
                transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
            }

            .textora-blog-page .blog-card:hover {
                transform: translateY(-5px);
                border-color: #cce8d5;
                box-shadow: 0 16px 35px rgba(8, 120, 73, 0.09);
            }

            .textora-blog-page .blog-image-wrap {
                overflow: hidden;
                background: #f1f5f2;
            }

            .textora-blog-page .blog-image {
                transition: transform .45s ease;
            }

            .textora-blog-page .blog-card:hover .blog-image {
                transform: scale(1.045);
            }

            .textora-blog-page .blog-title {
                transition: color .2s ease;
            }

            .textora-blog-page .blog-card:hover .blog-title {
                color: var(--textora-green);
            }

            .textora-blog-page img {
                max-width: 100%;
            }
        </style>

    @endpush


    <section class="textora-blog-page bg-slate-50 min-h-screen pt-24 pb-16">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


            {{-- PAGE HEADING --}}
            <header class="text-center max-w-3xl mx-auto mb-10 md:mb-14">

                <div class="inline-flex items-center gap-2 bg-green-50 border border-green-100 text-green-700 rounded-full px-4 py-2 mb-5">

                    <span class="w-2 h-2 rounded-full bg-green-600"></span>

                    <span class="text-xs font-semibold tracking-wider uppercase">
                        Our Blogs
                    </span>

                </div>


                <h1 class="text-3xl sm:text-4xl md:text-5xl font-semibold tracking-tight text-slate-900 leading-tight">

                    Insights That Help Your
                    <span class="text-green-700">Business Grow</span>

                </h1>


                <p class="text-gray-500 text-sm sm:text-base leading-relaxed mt-5 max-w-2xl mx-auto">

                    Explore expert insights, industry updates and practical guides
                    on WhatsApp Business API, Bulk SMS, RCS messaging,
                    customer engagement and digital communication.

                </p>


                <div class="w-16 h-1 bg-green-600 rounded-full mx-auto mt-7"></div>

            </header>



            {{-- BLOG GRID --}}
            <div
                id="blog-list"
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8"
            >

                @forelse ($publishedBlogs as $vlogMaster)

                    <article class="blog-card group bg-white rounded-2xl overflow-hidden">

                        <a
                            href="{{ url('blog_details/' . $vlogMaster->id) }}"
                            class="block"
                            aria-label="Read article: {{ $vlogMaster->title }}"
                        >

                            {{-- BLOG IMAGE --}}
                            <div class="blog-image-wrap relative">

                                @if($vlogMaster->image)

                                    <img
                                        class="blog-image w-full aspect-[16/10] object-cover"
                                        src="{{ asset('storage/' . $vlogMaster->image) }}"
                                        alt="{{ $vlogMaster->title }}"
                                        loading="lazy"
                                        decoding="async"
                                    >

                                @else

                                    <div class="w-full aspect-[16/10] flex items-center justify-center bg-green-50">

                                        <svg
                                            class="w-12 h-12 text-green-700"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.5"
                                                d="M4 5h16v14H4zM4 15l4-4 4 4 3-3 5 5"
                                            />
                                        </svg>

                                    </div>

                                @endif


                                {{-- IMAGE LABEL --}}
                                <div class="absolute top-4 left-4">

                                    <span class="inline-flex items-center bg-white/95 backdrop-blur-sm text-green-800 text-xs font-semibold px-3 py-1.5 rounded-full shadow-sm">

                                        Textora Insights

                                    </span>

                                </div>

                            </div>


                            {{-- BLOG CONTENT --}}
                            <div class="p-5 sm:p-6">


                                {{-- DATE --}}
                                <div class="flex items-center gap-2 text-xs sm:text-sm text-gray-500 mb-3">

                                    <svg
                                        class="w-4 h-4 text-green-700 flex-shrink-0"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="1.8"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                        />
                                    </svg>

                                    @if($vlogMaster->date)

                                        <time datetime="{{ \Carbon\Carbon::parse($vlogMaster->date)->format('Y-m-d') }}">

                                            {{ \Carbon\Carbon::parse($vlogMaster->date)->format('F j, Y') }}

                                        </time>

                                    @endif

                                </div>


                                {{-- BLOG TITLE --}}
                                <h2 class="blog-title text-lg sm:text-xl font-semibold text-slate-900 leading-snug mb-3 line-clamp-2">

                                    {{ $vlogMaster->title }}

                                </h2>


                                {{-- BLOG DESCRIPTION --}}
                                <p class="text-sm text-gray-500 leading-relaxed line-clamp-3">

                                    {{ \Illuminate\Support\Str::limit(strip_tags($vlogMaster->description), 150) }}

                                </p>


                                {{-- READ MORE --}}
                                <div class="flex items-center justify-between mt-6 pt-4 border-t border-gray-100">

                                    <span class="text-sm font-medium text-green-700">

                                        Read Article

                                    </span>


                                    <span class="w-9 h-9 rounded-full bg-green-50 text-green-700 flex items-center justify-center group-hover:bg-green-700 group-hover:text-white transition duration-300">

                                        <svg
                                            class="w-4 h-4"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M5 12h14m-6-6l6 6-6 6"
                                            />
                                        </svg>

                                    </span>

                                </div>

                            </div>

                        </a>

                    </article>


                @empty

                    {{-- NO BLOGS --}}
                    <div class="col-span-full text-center bg-white border border-gray-100 rounded-2xl p-10">

                        <div class="w-16 h-16 bg-green-50 rounded-2xl flex items-center justify-center mx-auto mb-4">

                            <svg
                                class="w-8 h-8 text-green-700"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M5 4h14v16H5zM8 8h8M8 12h8M8 16h5"
                                />
                            </svg>

                        </div>


                        <h2 class="text-xl font-semibold text-slate-900 mb-2">

                            No Blogs Available

                        </h2>


                        <p class="text-sm text-gray-500">

                            New articles and insights will be published soon.
                            Please check back later.

                        </p>

                    </div>

                @endforelse

            </div>

        </div>

    </section>

</x-master-page>
