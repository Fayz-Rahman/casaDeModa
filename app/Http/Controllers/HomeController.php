<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $featuredCategories = Category::query()
            ->where('is_featured', true)
            ->orderBy('position')
            ->take(6)
            ->get();

        $featuredProducts = Product::query()
            ->with('brand')
            ->where('is_featured', true)
            ->orderBy('display_order')
            ->take(8)
            ->get();

        $newArrivals = Product::query()
            ->with('brand')
            ->where('is_new_arrival', true)
            ->orderByDesc('created_at')
            ->take(4)
            ->get();

        $bestSellers = Product::query()
            ->with('brand')
            ->where('is_best_seller', true)
            ->orderBy('display_order')
            ->take(4)
            ->get();

        $featuredBrands = Brand::query()
            ->where('is_featured', true)
            ->orderBy('position')
            ->take(12)
            ->get();

        return view('home', [
            'featuredCategories' => $featuredCategories,
            'featuredProducts' => $featuredProducts,
            'newArrivals' => $newArrivals,
            'bestSellers' => $bestSellers,
            'featuredBrands' => $featuredBrands,
        ]);
    }
}
