@php
    $navigationLinks = [
        ['label' => 'New Arrivals', 'route' => 'shop'],
        ['label' => 'Best Sellers', 'route' => 'collections'],
        ['label' => 'Limited Editions', 'route' => 'collections'],
        ['label' => 'Brands', 'route' => 'brands'],
        ['label' => 'Accessories', 'route' => 'categories'],
        ['label' => 'Support', 'route' => 'contact'],
    ];
@endphp

<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-xl border-b border-gray-200">
    <div class="hidden md:block bg-gray-900 text-gray-100 text-xs">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 py-2 text-center lg:text-left">
                <p class="tracking-wide uppercase">Complimentary worldwide shipping on orders over $2,500</p>
                <p class="tracking-wide uppercase hidden lg:block">Authenticity guaranteed with manufacturer warranty</p>
                <p class="tracking-wide uppercase hidden lg:block text-right">Dedicated concierge support 24/7</p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex items-center justify-between gap-3 h-20">
            <div class="flex items-center gap-3">
                <button type="button" class="lg:hidden h-10 w-10 rounded-full border border-gray-200 grid place-items-center text-lg" data-mobile-toggle aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2">
                    <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name', 'Casa De Moda') }}" class="h-10 w-auto">
                </a>
            </div>

            <nav class="hidden lg:flex items-center gap-8 text-sm font-semibold tracking-wide">
                @foreach ($navigationLinks as $link)
                    <a href="{{ route($link['route']) }}" class="uppercase transition-colors {{ request()->routeIs($link['route'].'*') ? 'text-gray-900' : 'text-gray-500 hover:text-gray-900' }}">
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </nav>

            <div class="hidden xl:block w-80">
                <form action="{{ route('search') }}" method="GET" class="relative">
                    <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="search" name="search" value="{{ request('search') }}" class="w-full rounded-full border border-gray-200 bg-gray-50 pl-11 pr-4 py-2.5 text-sm focus:outline-none focus:border-gray-900 focus:bg-white" placeholder="Search for timepieces, collections, or brands">
                </form>
            </div>

            <div class="flex items-center gap-4">
                <button type="button" class="xl:hidden h-10 w-10 rounded-full border border-gray-200 grid place-items-center text-lg" data-mobile-search aria-label="Open search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>

                <a href="{{ route('wishlist') }}" class="hidden md:flex h-10 w-10 rounded-full border border-gray-200 items-center justify-center text-lg hover:border-gray-900 transition" aria-label="Wishlist">
                    <i class="fa-regular fa-heart"></i>
                </a>

                <button type="button" class="relative h-10 w-10 rounded-full border border-gray-200 hover:border-gray-900 transition grid place-items-center" data-cart-toggle aria-label="Open cart">
                    <i class="fa-solid fa-bag-shopping text-lg"></i>
                    <span class="absolute -top-1.5 -right-1 bg-gray-900 text-white text-[10px] font-semibold rounded-full px-1.5 py-0.5">
                        {{ str_pad((string) count(session('cart', [])), 2, '0', STR_PAD_LEFT) }}
                    </span>
                </button>

                <a href="{{ route('account') }}" class="hidden md:flex items-center gap-2 text-sm font-semibold text-gray-700 hover:text-gray-900">
                    <i class="fa-regular fa-user text-lg"></i>
                    <span class="uppercase tracking-wide">Account</span>
                </a>
            </div>
        </div>
    </div>

    <div class="lg:hidden border-t border-gray-200" data-mobile-nav hidden>
        <div class="px-4 py-6 space-y-6">
            <form action="{{ route('search') }}" method="GET" class="relative">
                <span class="absolute inset-y-0 left-4 flex items-center text-gray-400">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <input type="search" name="search" value="{{ request('search') }}" class="w-full rounded-full border border-gray-200 bg-gray-50 pl-11 pr-4 py-3 text-sm focus:outline-none focus:border-gray-900 focus:bg-white" placeholder="Search the collection">
            </form>

            <nav class="space-y-4 text-sm font-semibold uppercase tracking-wide">
                @foreach ($navigationLinks as $link)
                    <a href="{{ route($link['route']) }}" class="block text-gray-700">{{ $link['label'] }}</a>
                @endforeach
            </nav>

            <div class="border-t border-gray-200 pt-4 space-y-3">
                <a href="{{ route('wishlist') }}" class="block text-sm font-semibold uppercase tracking-wide text-gray-700">Wishlist</a>
                <a href="{{ route('account') }}" class="block text-sm font-semibold uppercase tracking-wide text-gray-700">Account</a>
                <a href="{{ route('contact') }}" class="block text-sm font-semibold uppercase tracking-wide text-gray-700">Concierge</a>
            </div>
        </div>
    </div>
</header>
