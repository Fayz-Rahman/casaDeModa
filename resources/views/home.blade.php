@extends('layouts.app')

@section('title', 'Luxury Watches & Fine Accessories')

@section('content')
@php
	$categoryBackgrounds = [
		'from-amber-50 via-white to-white',
		'from-gray-50 via-white to-white',
		'from-stone-100 via-white to-white',
		'from-slate-100 via-white to-white',
		'from-zinc-100 via-white to-white',
		'from-neutral-100 via-white to-white',
	];
@endphp

<div class="bg-white">
	<section class="relative overflow-hidden">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
			<div class="space-y-6">
				<p class="text-xs tracking-[0.35em] uppercase text-gray-500">Casa De Moda Curated Edit</p>
				<h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight text-gray-900">
					Discover Timepieces Crafted For The Modern Collector
				</h1>
				<p class="text-gray-600 text-base sm:text-lg leading-relaxed">
					From limited releases to everyday icons, explore a hand-selected assortment of luxury watches delivered with concierge-level service. Each piece is authenticated and includes comprehensive manufacturer warranties.
				</p>
				<div class="flex flex-col sm:flex-row gap-3">
					<a href="{{ route('shop') }}" class="inline-flex items-center justify-center rounded-full bg-gray-900 text-white px-8 py-3 text-sm font-semibold uppercase tracking-widest hover:bg-gray-700">Shop Latest Drops</a>
					<a href="{{ route('collections') }}" class="inline-flex items-center justify-center rounded-full border border-gray-900 text-gray-900 px-8 py-3 text-sm font-semibold uppercase tracking-widest hover:bg-gray-50">Explore Collections</a>
				</div>
				<div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-sm text-gray-600">
					<div>
						<p class="font-semibold text-gray-900">04h</p>
						<p class="text-xs uppercase tracking-[0.25em]">Concierge</p>
					</div>
					<div>
						<p class="font-semibold text-gray-900">Authentic</p>
						<p class="text-xs uppercase tracking-[0.25em]">Certified</p>
					</div>
					<div>
						<p class="font-semibold text-gray-900">72h</p>
						<p class="text-xs uppercase tracking-[0.25em]">Dispatch</p>
					</div>
					<div>
						<p class="font-semibold text-gray-900">Global</p>
						<p class="text-xs uppercase tracking-[0.25em]">Shipping</p>
					</div>
				</div>
			</div>
			<div class="relative">
				<div class="relative rounded-[3rem] bg-gradient-to-br from-gray-900 via-gray-800 to-black p-8 text-white shadow-2xl">
					<div class="aspect-[4/5] rounded-[2rem] overflow-hidden border border-white/10">
						<img src="{{ asset('images/watch.webp') }}" alt="Hero watch" class="h-full w-full object-cover">
					</div>
					<div class="absolute -bottom-8 left-1/2 -translate-x-1/2 w-[90%] bg-white text-gray-900 rounded-3xl shadow-xl px-6 py-4 grid grid-cols-3 gap-4" aria-hidden="true">
						<div>
							<p class="text-xs uppercase tracking-[0.3em] text-gray-400">Movement</p>
							<p class="text-sm font-semibold">Self-winding HUB1280</p>
						</div>
						<div>
							<p class="text-xs uppercase tracking-[0.3em] text-gray-400">Power Reserve</p>
							<p class="text-sm font-semibold">72 Hours</p>
						</div>
						<div>
							<p class="text-xs uppercase tracking-[0.3em] text-gray-400">Water Resistance</p>
							<p class="text-sm font-semibold">100 m</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="border-y border-gray-200 bg-white">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 grid grid-cols-2 md:grid-cols-4 gap-8 text-sm">
			<div class="flex items-center gap-3">
				<span class="h-12 w-12 rounded-full bg-gray-900 text-white grid place-items-center"><i class="fa-solid fa-truck-fast"></i></span>
				<div>
					<p class="font-semibold text-gray-900">Global Priority Shipping</p>
					<p class="text-gray-500 text-xs">Insured and trackable delivery on every order.</p>
				</div>
			</div>
			<div class="flex items-center gap-3">
				<span class="h-12 w-12 rounded-full bg-gray-900 text-white grid place-items-center"><i class="fa-solid fa-shield-halved"></i></span>
				<div>
					<p class="font-semibold text-gray-900">Authenticity Verified</p>
					<p class="text-gray-500 text-xs">Manufacturer warranties & secure provenance.</p>
				</div>
			</div>
			<div class="flex items-center gap-3">
				<span class="h-12 w-12 rounded-full bg-gray-900 text-white grid place-items-center"><i class="fa-solid fa-arrows-rotate"></i></span>
				<div>
					<p class="font-semibold text-gray-900">7-Day Returns</p>
					<p class="text-gray-500 text-xs">Concierge-managed exchanges & returns.</p>
				</div>
			</div>
			<div class="flex items-center gap-3">
				<span class="h-12 w-12 rounded-full bg-gray-900 text-white grid place-items-center"><i class="fa-solid fa-headset"></i></span>
				<div>
					<p class="font-semibold text-gray-900">Dedicated Concierge</p>
					<p class="text-gray-500 text-xs">Expert advisors available 24/7.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="py-16 sm:py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6">
				<div>
					<p class="text-xs uppercase tracking-[0.3em] text-gray-500">Curated Categories</p>
					<h2 class="text-3xl sm:text-4xl font-bold text-gray-900">Explore By Universe</h2>
				</div>
				<a href="{{ route('categories') }}" class="text-sm font-semibold uppercase tracking-[0.35em] text-gray-900">View all</a>
			</div>
			<div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
				@foreach ($featuredCategories as $category)
					<article class="bg-gradient-to-br {{ $categoryBackgrounds[$loop->index % count($categoryBackgrounds)] }} rounded-3xl border border-gray-200 overflow-hidden p-8 flex flex-col justify-between">
						<div class="space-y-4">
							<p class="text-xs uppercase tracking-[0.35em] text-gray-400">{{ $loop->iteration < 10 ? '0'.$loop->iteration : $loop->iteration }}</p>
							<h3 class="text-2xl font-semibold text-gray-900">{{ $category->name }}</h3>
							<p class="text-gray-600 text-sm leading-relaxed">{{ $category->description }}</p>
						</div>
						<div class="mt-8 flex items-center justify-between text-sm font-semibold">
							<a href="{{ route('categories') }}" class="uppercase tracking-[0.35em] text-gray-900">Shop now</a>
							<span class="h-10 w-10 rounded-full border border-gray-900 grid place-items-center"><i class="fa-solid fa-arrow-up-right"></i></span>
						</div>
					</article>
				@endforeach
			</div>
		</div>
	</section>

	<section class="bg-gray-50 py-16 sm:py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6">
				<div>
					<p class="text-xs uppercase tracking-[0.3em] text-gray-500">Featured Edit</p>
					<h2 class="text-3xl sm:text-4xl font-bold text-gray-900">The Collector’s Showcase</h2>
				</div>
				<a href="{{ route('shop') }}" class="text-sm font-semibold uppercase tracking-[0.35em] text-gray-900">View collection</a>
			</div>
			<div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
				@foreach ($featuredProducts as $product)
					<article class="bg-white rounded-3xl border border-gray-200 overflow-hidden flex flex-col shadow-sm">
						<div class="relative overflow-hidden">
							@if ($product->badge)
								<span class="absolute left-4 top-4 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-gray-900">{{ $product->badge }}</span>
							@endif
							<img src="{{ asset($product->hero_image) }}" alt="{{ $product->name }}" class="aspect-[4/5] w-full object-cover">
						</div>
						<div class="flex-1 px-6 py-6 space-y-4">
							<div>
								<p class="text-xs uppercase tracking-[0.35em] text-gray-400">{{ $product->brand->name ?? 'Casa De Moda' }}</p>
								<h3 class="text-lg font-semibold text-gray-900 mt-2">{{ $product->name }}</h3>
							</div>
							<p class="text-sm text-gray-600 leading-relaxed">{{ Str::limit($product->excerpt, 110) }}</p>
						</div>
						<div class="px-6 pb-6">
							<div class="flex items-center justify-between text-sm font-semibold text-gray-900">
								<div>
									<p>${{ number_format($product->price, 2) }}</p>
									@if ($product->compare_at_price)
										<p class="text-xs text-gray-400 line-through">${{ number_format($product->compare_at_price, 2) }}</p>
									@endif
								</div>
								<form action="{{ route('cart.add') }}" method="POST">
									@csrf
									<input type="hidden" name="product_id" value="{{ $product->id }}">
									<button type="submit" class="rounded-full bg-gray-900 text-white px-5 py-2 text-xs font-semibold uppercase tracking-[0.4em] hover:bg-gray-700">
										Add
									</button>
								</form>
							</div>
						</div>
					</article>
				@endforeach
			</div>
		</div>
	</section>

	<section class="py-16 sm:py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6">
				<div>
					<p class="text-xs uppercase tracking-[0.3em] text-gray-500">House Favorites</p>
					<h2 class="text-3xl sm:text-4xl font-bold text-gray-900">Bestsellers Curated by Collectors</h2>
				</div>
				<a href="{{ route('collections') }}" class="text-sm font-semibold uppercase tracking-[0.35em] text-gray-900">Discover more</a>
			</div>
			<div class="mt-10 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
				@foreach ($bestSellers as $product)
					<article class="rounded-3xl border border-gray-200 bg-white p-6 flex flex-col gap-4">
						<div class="flex items-start gap-4">
							<div class="h-28 w-24 rounded-2xl overflow-hidden bg-gray-100 flex-shrink-0">
								<img src="{{ asset($product->thumbnail_image ?? $product->hero_image) }}" alt="{{ $product->name }}" class="h-full w-full object-cover">
							</div>
							<div class="space-y-2">
								<p class="text-xs uppercase tracking-[0.35em] text-gray-400">{{ $product->brand->name ?? 'Casa De Moda' }}</p>
								<h3 class="text-lg font-semibold text-gray-900 leading-snug">{{ $product->name }}</h3>
								<p class="text-sm text-gray-600">{{ Str::limit($product->excerpt, 80) }}</p>
							</div>
						</div>
						<div class="flex items-center justify-between pt-2">
							<div class="text-sm font-semibold text-gray-900">
								<p>${{ number_format($product->price, 2) }}</p>
								@if ($product->compare_at_price)
									<p class="text-xs text-gray-400 line-through">${{ number_format($product->compare_at_price, 2) }}</p>
								@endif
							</div>
							<form action="{{ route('cart.add') }}" method="POST">
								@csrf
								<input type="hidden" name="product_id" value="{{ $product->id }}">
								<button type="submit" class="text-xs font-semibold uppercase tracking-[0.35em] text-gray-900 hover:text-gray-500">Add to cart</button>
							</form>
						</div>
					</article>
				@endforeach
			</div>
		</div>
	</section>

	<section class="py-16 sm:py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="grid lg:grid-cols-[2fr,1fr] gap-10 items-start">
				<div class="bg-gray-900 text-white rounded-[3rem] p-10 relative overflow-hidden">
					<div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-black to-gray-800 opacity-70"></div>
					<div class="relative z-10 space-y-6">
						<p class="text-xs uppercase tracking-[0.35em] text-gray-400">Journal</p>
						<h3 class="text-3xl font-semibold">Inside The Atelier: Crafting Horological Icons</h3>
						<p class="text-sm leading-relaxed text-gray-200">
							Experience a behind-the-scenes look at the artistry, engineering, and heritage that define each limited edition release. Our maison partners share insights from concept sketch to final inspection.
						</p>
						<a href="{{ route('collections') }}" class="inline-flex items-center gap-3 text-sm font-semibold uppercase tracking-[0.35em] text-white">
							Read story <i class="fa-solid fa-arrow-up-right"></i>
						</a>
					</div>
					<div class="absolute -right-16 bottom-0 w-64 opacity-70">
						<img src="{{ asset('images/watch.webp') }}" alt="Editorial watch" class="w-full object-contain">
					</div>
				</div>
				<div class="space-y-6">
					<h4 class="text-sm uppercase tracking-[0.35em] text-gray-500">New Arrivals</h4>
					<div class="space-y-6">
						@foreach ($newArrivals as $product)
							<article class="flex gap-4 items-center border border-gray-200 rounded-3xl p-4">
								<div class="h-20 w-20 rounded-2xl overflow-hidden bg-gray-100 flex-shrink-0">
									<img src="{{ asset($product->hero_image) }}" alt="{{ $product->name }}" class="h-full w-full object-cover">
								</div>
								<div class="flex-1">
									<p class="text-xs uppercase tracking-[0.3em] text-gray-400">{{ $product->brand->name ?? 'Casa De Moda' }}</p>
									<h5 class="text-sm font-semibold text-gray-900">{{ $product->name }}</h5>
								</div>
								<div class="text-sm font-semibold text-gray-900 text-right">
									<p>${{ number_format($product->price, 2) }}</p>
									<form action="{{ route('cart.add') }}" method="POST" class="mt-2">
										@csrf
										<input type="hidden" name="product_id" value="{{ $product->id }}">
										<button type="submit" class="text-xs uppercase tracking-[0.35em] text-gray-500 hover:text-gray-900">Add</button>
									</form>
								</div>
							</article>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-gray-50 py-16 sm:py-20">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6">
				<div>
					<p class="text-xs uppercase tracking-[0.3em] text-gray-500">Maison Partners</p>
					<h2 class="text-3xl sm:text-4xl font-bold text-gray-900">Featured Brands</h2>
				</div>
				<a href="{{ route('brands') }}" class="text-sm font-semibold uppercase tracking-[0.35em] text-gray-900">View all</a>
			</div>
			<div class="mt-10 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6">
				@foreach ($featuredBrands as $brand)
					<div class="rounded-3xl border border-gray-200 bg-white px-6 py-8 flex items-center justify-center">
						<img src="{{ asset($brand->logo_path ?? 'images/Hublot-logo.png') }}" alt="{{ $brand->name }}" class="h-10 w-auto object-contain">
					</div>
				@endforeach
			</div>
		</div>
	</section>

	<section class="py-16 sm:py-20">
		<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
			<p class="text-xs uppercase tracking-[0.35em] text-gray-500">Casa Concierge</p>
			<h2 class="text-3xl sm:text-4xl font-bold text-gray-900">Join The Collector Circle</h2>
			<p class="text-gray-600 text-base sm:text-lg leading-relaxed">Gain early access to capsule drops, bespoke sourcing, and horology events hosted in our ateliers worldwide.</p>
			<form action="#" method="GET" class="flex flex-col sm:flex-row items-center justify-center gap-3 max-w-2xl mx-auto">
				<input type="email" required placeholder="Email address" class="w-full sm:flex-1 rounded-full border border-gray-200 px-6 py-3 text-sm placeholder-gray-400 focus:outline-none focus:border-gray-900">
				<button type="submit" class="rounded-full bg-gray-900 text-white px-8 py-3 text-sm font-semibold uppercase tracking-[0.35em] hover:bg-gray-700">Sign Up</button>
			</form>
		</div>
	</section>
</div>
@endsection
