<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Casa De Moda') }} - @yield('title', 'Fashion E-commerce')</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="font-sans antialiased bg-white text-gray-900">
    <!-- Header Component -->
    <x-header />
    
    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>
    
    <!-- Footer Component -->
    <x-footer />

    <!-- Cart Drawer Component -->
    <x-cart-drawer />

    @if (session('cart_added'))
        <div class="fixed left-1/2 top-6 z-[90] -translate-x-1/2">
            <div class="rounded-full bg-gray-900 text-white px-6 py-3 text-sm font-medium shadow-lg" data-cart-toast>
                {{ session('cart_added') }}
            </div>
        </div>
    @endif
    
    @stack('scripts')

    @if (session('cart_added'))
        <script>window.__openCartOnLoad = true;</script>
    @endif
</body>
</html>
