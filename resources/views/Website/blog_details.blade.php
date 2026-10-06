<x-master-page :title="$blog_details->title . ' | Textora SMS'">
    @php
        function activeNav($path)
        {
            return Request::path() === $path ? 'text-green-700 font-semibold' : 'text-gray-700';
        }
    @endphp

    <div class="container mx-auto p-4 md:p-8">
        <div class="flex flex-col lg:flex-row md:gap-6 gap-4 pt-16">

            {{-- MAIN BLOG DETAILS --}}
            <main class="w-full lg:w-3/4 bg-white rounded-lg shadow-lg p-4 md:p-6">

                {{-- Title --}}
                <h1 id="detail-title" class="md:text-4xl sm:text-3xl text-2xl font-bold text-gray-900 mb-2">
                    {{ $blog_details->title }}
                </h1>

                {{-- Date --}}
                <p id="detail-date" class="md:text-lg text-md text-green-600 mb-6">
                    Published on:
                    <span class="text-black">
                        {{ \Carbon\Carbon::parse($blog_details->date)->format('F d, Y') }}
                    </span>
                </p>
                <div class="grid md:grid-cols-12 grid-cols-1 gap-4">
                    <div class="col-span-5">
                        {{-- Image --}}
                        <img id="detail-image"
                            class="w-full md:h-96 h-auto md:object-left-top object-contain rounded-lg mb-8 object-top"
                            src="{{ asset('storage/' . $blog_details->image) }}"
                            alt="Transactional SMS API for e-commerce websites">
                    </div>
                    <div class="col-span-7">
                        {{-- Description --}}
                        <div id="detail-content" class="prose max-w-none text-gray-700 space-y-6">
                            {!! nl2br($blog_details->description) !!}
                        </div>
                    </div>
                </div>

            </main>

            {{-- SIDEBAR RECENT BLOGS --}}
            <aside class="w-full lg:w-1/4">
                <div class="bg-white rounded-lg shadow-lg p-4 sticky top-16">
                    <h3 class="md:text-2xl text-lg font-semibold text-gray-800 border-b pb-3 mb-4">Recent Blogs</h3>

                    {{-- Dynamic Recent Blogs --}}
                    @foreach ($recent_blog as $blog)
                        <a href="{{ url('blog_details/' . $blog->id) }}"
                            class="recent-item flex items-start space-x-4 mb-4 hover:bg-gray-50 p-2 rounded transition duration-200">

                            <img class="w-16 h-16 object-cover rounded" src="{{ asset('storage/' . $blog->image) }}"
                                alt="How to send bulk SMS without DLT registration">

                            <div>
                                <p class="text-sm font-medium text-gray-900 line-clamp-2">
                                    {{ $blog->title }}
                                </p>

                                <p class="text-xs text-green-600 pt-2">
                                    {{ \Carbon\Carbon::parse($blog->date)->format('M d, Y') }}
                                </p>
                            </div>
                        </a>
                    @endforeach

                </div>
            </aside>

        </div>
    </div>

</x-master-page>