@php
    $cartItems = collect(session('cart', []));
    $cartTotal = $cartItems->sum(fn ($item) => (float) $item['price'] * (int) $item['quantity']);
@endphp

<div data-cart-overlay class="fixed inset-0 bg-black/40 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 z-[70]"></div>

<aside data-cart-drawer class="fixed inset-y-0 right-0 w-full max-w-md bg-white shadow-2xl transform translate-x-full transition-transform duration-300 z-[80] flex flex-col">
    <div class="flex items-center justify-between border-b border-gray-200 px-6 py-5">
        <div>
            <p class="text-xs uppercase tracking-widest text-gray-400">Your Selection</p>
            <h2 class="text-xl font-semibold text-gray-900">Shopping Cart</h2>
        </div>
        <button type="button" class="h-10 w-10 rounded-full border border-gray-200 grid place-items-center text-lg text-gray-500 hover:text-gray-900" data-cart-close aria-label="Close cart">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <div class="flex-1 overflow-y-auto px-6 py-4 space-y-4">
        @forelse ($cartItems as $id => $item)
            <div class="flex gap-4 border border-gray-100 rounded-2xl p-4">
                <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-xl bg-gray-50">
                    <img src="{{ $item['image'] ?? asset('images/watch.webp') }}" alt="{{ $item['name'] }}" class="h-full w-full object-cover">
                </div>
                <div class="flex-1"> 
                    <div class="flex items-start justify-between gap-3">
                        <div>
                            <p class="text-xs uppercase text-gray-400 tracking-widest">{{ $item['brand'] ?? 'Casa De Moda' }}</p>
                            <h3 class="text-sm font-semibold text-gray-900 leading-snug">{{ $item['name'] }}</h3>
                        </div>
                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm text-gray-400 hover:text-gray-900" aria-label="Remove item">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </form>
                    </div>
                    <div class="mt-3 flex items-center justify-between text-sm text-gray-600">
                        <span>Qty: {{ $item['quantity'] }}</span>
                        <span class="font-semibold text-gray-900">${{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                    </div>
                </div>
            </div>
        @empty
            <div class="flex flex-col items-center justify-center text-center py-16 text-gray-500">
                <i class="fa-regular fa-clock text-4xl mb-4"></i>
                <p class="text-sm font-medium">Your cart is currently empty.</p>
                <p class="text-xs text-gray-400 mt-2">Explore the latest arrivals and curated collections to add pieces here.</p>
            </div>
        @endforelse
    </div>

    <div class="border-t border-gray-200 px-6 py-5 space-y-4">
        <div class="flex items-center justify-between text-base font-semibold text-gray-900">
            <span>Total</span>
            <span>${{ number_format($cartTotal, 2) }}</span>
        </div>
        <div class="space-y-3">
            <a href="{{ route('checkout') }}" class="block text-center rounded-full bg-gray-900 text-white text-sm font-semibold tracking-wide uppercase py-3 hover:bg-gray-700">Secure Checkout</a>
            <a href="{{ route('cart') }}" class="block text-center rounded-full border border-gray-900 text-gray-900 text-sm font-semibold tracking-wide uppercase py-3 hover:bg-gray-50">View Detailed Cart</a>
        </div>
        <p class="text-xs text-gray-400 text-center">Need assistance? <a href="{{ route('contact') }}" class="underline">Contact our concierge team</a>.</p>
    </div>
</aside>
