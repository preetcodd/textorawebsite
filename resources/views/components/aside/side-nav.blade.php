@php
    $user = Auth::guard('web')->user();

    //  dd($user);

    if ($user->role == 'Customer') {
        $navs = [
            [
                'title' => 'Dashboard',
                'icon' => 'fa-solid fa-shapes',
                'activeWhen' => Route::is('dashboard'),
                'url' => route('dashboard'),
            ],
            [
                'title' => 'Services (Coming Soon)',
                'icon' => 'fa-solid fa-tools',
                'activeWhen' => '',
                'url' => '',
            ],
        ];
    } else {
        $navs = [
            [
                'title' => 'Dashboard',
                'icon' => 'fa-solid fa-shapes',
                'activeWhen' => Route::is('dashboard'),
                'url' => route('dashboard'),
            ],
            // [
            //     'title' => 'Master',
            //     'icon' => 'fa-solid fa-layer-group',
            //     'items' => [
            //         [
            //             'title' => 'Category',
            //             'activeWhen' => false,
            //             'url' => '#',
            //         ],
            //         [
            //             'title' => 'Sub Category',
            //             'activeWhen' => false,
            //             'url' => '#',
            //         ],
            //         [
            //             'title' => 'Product',
            //             'activeWhen' => false,
            //             'url' => '#',
            //         ],
            //     ],
            // ],
            // [
            //     'title' => 'Users',
            //     'icon' => 'fa-solid fa-users',
            //     'activeWhen' => Route::is('users.*'),
            //     'url' => route('users.index'),
            // ],
            [
                'title' => 'Clients',
                'icon' => 'fa-solid fa-users',
                'activeWhen' => Route::is('clients.*'),
                'url' => route('clients.index'),
            ],
            [
                'title' => 'Pricing',
                'icon' => 'fa-solid fa-dollar-sign',
                'activeWhen' => Route::is('pricing.*'),
                'url' => route('pricing.index'),
            ],
            [
                'title' => 'Blog',
                'icon' => 'fa-solid fa-blog',
                'activeWhen' => Route::is('blog.*'),
                'url' => route('blog.index'),
            ],
            [
                'title' => 'Enquiry',
                'icon' => 'fa-solid fa-blog',   
                'activeWhen' => Route::is('enquiry.*'),
                'url' => route('enquiry.index'),
            ],
        ];
    }

@endphp

<aside id="logo-sidebar" style="
        --c-400: var(--primary-400);
        --c-500: var(--primary-500);
    "
    class="fixed top-0 left-0 z-20 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            @foreach ($navs as $nav)
                @if (isset($nav['url']))
                    <li>
                        <a href="{{ $nav['url'] }}"
                            class="flex items-center p-2 rounded-lg hover:bg-custom-400/10 group pl-3.5 {{ $nav['activeWhen'] ? 'text-custom-500 bg-custom-500/10' : 'text-gray-900 dark:text-white' }}">
                            <i
                                class="{{ $nav['icon'] }} transition duration-75 text-xl {{ !$nav['activeWhen'] ? 'text-gray-500 dark:text-gray-400' : '' }}"></i>
                            <span class="ms-3">{{ $nav['title'] }}</span>
                        </a>
                    </li>
                @else
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group dark:text-white hover:bg-custom-400/10 pl-3.5"
                            aria-controls="nav-{{ strtolower($nav['title']) }}-dropdown-{{ $loop->index }}"
                            data-collapse-toggle="nav-{{ strtolower($nav['title']) }}-dropdown-{{ $loop->index }}">
                            <i
                                class="{{ $nav['icon'] }} text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"></i>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Master</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        @php
                            $isOpenedDropdown =
                                count(
                                    array_filter($nav['items'], function ($ele) {
                                        return $ele['activeWhen'] === true;
                                    }),
                                ) > 0;
                        @endphp
                        <ul id="nav-{{ strtolower($nav['title']) }}-dropdown-{{ $loop->index }}"
                            class="{{ $isOpenedDropdown ? '' : 'hidden' }} py-2 space-y-2">
                            @foreach ($nav['items'] as $item)
                                <li>
                                    <a href="{{ $item['url'] }}"
                                        class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-custom-400/10 {{ $item['activeWhen'] ? 'text-custom-500 bg-custom-500/10' : 'text-gray-900 dark:text-white' }}">{{ $item['title'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</aside>
