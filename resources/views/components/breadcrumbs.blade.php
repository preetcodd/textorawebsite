@props(['breadcrumbs'])

<nav class="flex mb-4 pl-1" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="{{ route('dashboard') }}"
                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <i class="fa-solid fa-house mr-1.5 pb-0.5"></i>
                Home
            </a>
        </li>
        @forelse ($breadcrumbs as $url => $breadcrumb)
            <li>
                <div class="flex items-center">
                    <i class="fa-solid fa-chevron-right text-gray-400 mx-1"></i>
                    @if (!$loop->last)
                        <a href="{{ $breadcrumb }}"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">{{ $breadcrumb }}</a>
                    @else
                        <span
                            class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">{{ $breadcrumb }}</span>
                    @endif
                </div>
            </li>
        @empty
        @endforelse
    </ol>
</nav>
