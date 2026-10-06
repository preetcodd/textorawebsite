<x-master-page title="Blogs | Textora SMS">
    @php
        function activeNav($path)
        {
            return Request::path() === $path ? 'text-green-700 font-semibold' : 'text-gray-700';
        }
    @endphp

    <div class="bg-gray-100 pt-16">
        <div class="container mx-auto p-4 md:p-8">
            {{-- <span
                class="text-[#049a3d] font-semibold text-center mx-auto tracking-wide uppercase md:text-sm text-xs">Our
                Blogs</span>
            <h1 class="md:text-4xl sm:text-3xl text-2xl font-bold text-gray-800 mb-8 text-center">Latest Blog Posts</h1>
            --}}

            <div class="text-center md:mb-12 mb-4">
                <span class="text-[#049a3d] font-semibold tracking-wide uppercase md:text-sm text-xs">Our Blogs</span>
                <h2
                    class="md:mt-2 mt-0 md:text-4xl sm:text-3xl text-2xl font-extrabold text-gray-900 tracking-tight mb-5">
                    Latest Blog Posts
                </h2>

            </div>


            <div id="blog-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($vlogMasters as $vlogMaster)
                    @if ($vlogMaster->is_published)
                        <a href="{{ url('blog_details/' . $vlogMaster->id) }}"
                            class="blog-card block bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                            <img class="w-full h-64 md:object-cover object-contain rounded-t-lg"
                                src="{{ URL::asset('storage/' . $vlogMaster->image) }}" alt="{{ $vlogMaster->title }}">
                            <div class="p-3 xl:p-5">
                                <p class="text-sm text-gray-900 mb-2">
                                    <i class="fa fa-calendar text-green-600" aria-hidden="true"></i>
                                    {{ \Carbon\Carbon::parse($vlogMaster->date)->format('F j, Y') }}
                                </p>
                                <h2 class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2">
                                    {{ $vlogMaster->title }}
                                </h2>
                                <p class="text-gray-600 line-clamp-2">
                                    {{ $vlogMaster->description }}
                                </p>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-master-page>