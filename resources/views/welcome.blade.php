@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Welcome to Casa De Moda</h1>
            <p class="text-xl text-gray-600 mb-8">Discover the latest fashion trends and styles</p>
            <a href="{{ route('shop') }}" class="inline-block bg-gray-900 text-white px-8 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                Shop Now
            </a>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Featured Categories</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Category cards will go here -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                        <i class="fas fa-tshirt text-6xl text-gray-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Men's Fashion</h3>
                    <p class="text-gray-600 mb-4">Explore our collection</p>
                    <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Shop Now →</a>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                        <i class="fas fa-female text-6xl text-gray-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Women's Fashion</h3>
                    <p class="text-gray-600 mb-4">Discover latest trends</p>
                    <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Shop Now →</a>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                    <div class="h-48 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
                        <i class="fas fa-gem text-6xl text-gray-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Accessories</h3>
                    <p class="text-gray-600 mb-4">Complete your look</p>
                    <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Shop Now →</a>
                </div>
            </div>
        @extends('layouts.app')

        @section('title', 'Home')

        @section('content')
        <div class="bg-white">
            <!-- Hero -->
            <section class="bg-gradient-to-b from-gray-50 to-white">
                <div class="max-w-7xl mx-auto px-4 py-12 md:py-20 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                    <div>
                        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">Elevate Your Everyday Style</h1>
                        <p class="mt-4 text-lg text-gray-600">Discover curated collections, trending brands, and essential pieces for every moment.</p>
                        <div class="mt-6 flex gap-3">
                            <a href="{{ route('shop') }}" class="inline-flex items-center justify-center rounded-md bg-gray-900 text-white px-6 py-3 text-sm font-semibold hover:bg-gray-700">Shop Now</a>
                            <a href="{{ route('categories') }}" class="inline-flex items-center justify-center rounded-md border border-gray-900 text-gray-900 px-6 py-3 text-sm font-semibold hover:bg-gray-50">Browse Categories</a>
                        </div>
                        <div class="mt-8">
                            <form action="{{ route('search') }}" method="GET" class="flex items-center gap-2 max-w-xl">
                                <input name="search" class="w-full border border-gray-300 rounded-full px-4 py-3 text-sm focus:outline-none focus:border-gray-900" placeholder="Search product..." />
                                <button class="rounded-full bg-gray-900 text-white px-5 py-3 text-sm font-semibold hover:bg-gray-700"><i class="fa fa-search mr-2"></i>Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="aspect-[4/3] rounded-2xl bg-gray-100 flex items-center justify-center text-gray-400 text-6xl">
                            <i class="fa-regular fa-image"></i>
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-white shadow-lg rounded-xl px-4 py-3 hidden md:flex items-center gap-3">
                            <i class="fa-solid fa-truck-fast text-gray-900"></i>
                            <span class="text-sm font-medium text-gray-900">Fast shipping</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features bar -->
            <section class="border-y border-gray-100 bg-white">
                <div class="max-w-7xl mx-auto px-4 py-6 grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="flex items-center gap-3">
                        <span class="h-10 w-10 rounded-full bg-gray-900 text-white grid place-items-center"><i class="fa-solid fa-hand-holding-dollar"></i></span>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Cash On Delivery</p>
                            <p class="text-xs text-gray-500">Pay when you receive</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="h-10 w-10 rounded-full bg-gray-900 text-white grid place-items-center"><i class="fa-solid fa-shield-halved"></i></span>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">100% Authentic</p>
                            <p class="text-xs text-gray-500">Original brands only</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="h-10 w-10 rounded-full bg-gray-900 text-white grid place-items-center"><i class="fa-solid fa-rotate-left"></i></span>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">7-Day Returns</p>
                            <p class="text-xs text-gray-500">Hassle-free policy</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="h-10 w-10 rounded-full bg-gray-900 text-white grid place-items-center"><i class="fa-solid fa-headset"></i></span>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Support 24/7</p>
                            <p class="text-xs text-gray-500">We’re here to help</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Featured Categories -->
            <section class="bg-white">
                <div class="max-w-7xl mx-auto px-4 py-14">
                    <div class="flex items-end justify-between">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Featured Categories</h2>
                        <a href="{{ route('categories') }}" class="text-sm font-semibold text-gray-900 hover:opacity-70">View all</a>
                    </div>
                    <div class="mt-8 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                        @foreach(['Men','Women','Kids','Shoes','Bags','Accessories'] as $cat)
                        <a href="{{ route('categories') }}" class="group">
                            <div class="aspect-square rounded-xl bg-gray-100 grid place-items-center text-4xl text-gray-400 group-hover:shadow-md transition">
                                <i class="fa-regular fa-image"></i>
                            </div>
                            <p class="mt-2 text-sm font-semibold text-gray-900">{{ $cat }}</p>
                        </a>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- Feature Collections / Best Sellers -->
            <section class="bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 py-14">
                    <div class="flex items-end justify-between">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Feature Collections</h2>
                        <a href="{{ route('shop') }}" class="text-sm font-semibold text-gray-900 hover:opacity-70">See more</a>
                    </div>
                    <div class="mt-8 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @for($i=1;$i<=8;$i++)
                        <div class="bg-white rounded-xl border border-gray-100 overflow-hidden hover:shadow-md transition">
                            <div class="aspect-[4/5] bg-gray-100 grid place-items-center text-4xl text-gray-300">
                                <i class="fa-regular fa-image"></i>
                            </div>
                            <div class="p-4">
                                <p class="text-sm text-gray-500">Category</p>
                                <h3 class="mt-1 text-sm font-semibold text-gray-900">Elegant Item #{{ $i }}</h3>
                                <div class="mt-3 flex items-center justify-between">
                                    <span class="text-gray-900 font-bold">${{ number_format(29.99 + $i, 2) }}</span>
                                    <button class="text-sm px-3 py-2 rounded-md bg-gray-900 text-white hover:bg-gray-700">Add</button>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </section>

            <!-- Featured Brands -->
            <section class="bg-white">
                <div class="max-w-7xl mx-auto px-4 py-14">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Featured Brands</h2>
                    <div class="mt-8 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                        @for($i=1;$i<=12;$i++)
                        <div class="h-20 rounded-xl border border-gray-100 bg-gray-50 grid place-items-center text-gray-400">Logo</div>
                        @endfor
                    </div>
                </div>
            </section>

            <!-- Newsletter -->
            <section class="bg-gray-900">
                <div class="max-w-7xl mx-auto px-4 py-16 md:py-20 grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <h3 class="text-2xl md:text-3xl font-bold text-white">Join our newsletter</h3>
                        <p class="mt-2 text-gray-300">Get updates on new arrivals and exclusive offers.</p>
                    </div>
                    <form action="#" method="GET" class="flex gap-3">
                        <input type="email" required placeholder="Email address" class="w-full md:w-auto flex-1 rounded-md px-4 py-3 text-sm text-gray-900 placeholder-gray-500" />
                        <button class="rounded-md bg-white text-gray-900 px-6 py-3 text-sm font-semibold hover:bg-gray-100">Subscribe</button>
                    </form>
                </div>
            </section>
        </div>
        @endsection
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#4B0600"/>
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="round"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#4B0600"/>
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                    </svg>
                    <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
                </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
