<footer class="bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div>
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-auto" />
                </a>
                <p class="mt-4 text-sm text-gray-500">Curated fashion and lifestyle products. Crafted for everyday elegance.</p>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-gray-900">Shop</h4>
                <ul class="mt-4 space-y-3 text-sm">
                    <li><a href="{{ route('shop') }}" class="text-gray-600 hover:text-gray-900">All Products</a></li>
                    <li><a href="{{ route('categories') }}" class="text-gray-600 hover:text-gray-900">Categories</a></li>
                    <li><a href="{{ route('collections') }}" class="text-gray-600 hover:text-gray-900">Collections</a></li>
                    <li><a href="{{ route('brands') }}" class="text-gray-600 hover:text-gray-900">Brands</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-gray-900">Support</h4>
                <ul class="mt-4 space-y-3 text-sm">
                    <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-gray-900">Contact</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-900">Shipping & Returns</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-900">FAQ</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-900">Track Order</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-gray-900">Get in touch</h4>
                <ul class="mt-4 space-y-2 text-sm text-gray-600">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-envelope text-gray-400"></i> support@example.com</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-phone text-gray-400"></i> +1 (555) 000-0000</li>
                </ul>
                <div class="mt-4 flex items-center gap-3 text-gray-500">
                    <a href="#" class="hover:text-gray-900"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="hover:text-gray-900"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="hover:text-gray-900"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="mt-10 border-t border-gray-100 pt-6 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-gray-500">
            <p>© {{ date('Y') }} {{ config('app.name', 'Casa De Moda') }}. All rights reserved.</p>
            <div class="flex items-center gap-4">
                <a href="#" class="hover:text-gray-900">Privacy Policy</a>
                <span class="text-gray-300">|</span>
                <a href="#" class="hover:text-gray-900">Terms</a>
            </div>
        </div>
    </div>
</footer>
