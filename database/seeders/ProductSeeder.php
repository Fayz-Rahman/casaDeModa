<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::orderBy('position')->get();
        $brands = Brand::orderBy('position')->get();

        if ($categories->isEmpty() || $brands->isEmpty()) {
            return;
        }

        $specTemplate = [
            'Case Diameter' => '42 mm',
            'Movement' => 'Automatic calibre HUB1280',
            'Power Reserve' => '72 hours',
            'Water Resistance' => '100 m',
            'Bracelet' => 'Black rubber strap',
        ];

        $productIndex = 1;

        foreach ($categories as $category) {
            foreach ($brands->take(4) as $brand) {
                Product::updateOrCreate(
                    ['slug' => Str::slug($brand->name.' '.$category->name.' '.$productIndex)],
                    [
                        'category_id' => $category->id,
                        'brand_id' => $brand->id,
                        'name' => $brand->name.' '.$category->name.' '.$productIndex,
                        'sku' => 'SKU-'.str_pad((string)$productIndex, 5, '0', STR_PAD_LEFT),
                        'hero_image' => 'images/watch.webp',
                        'thumbnail_image' => 'images/watch.webp',
                        'badge' => $productIndex % 3 === 0 ? 'New' : ($productIndex % 2 === 0 ? 'Hot' : null),
                        'price' => 14999 + ($productIndex * 125),
                        'compare_at_price' => 16999 + ($productIndex * 150),
                        'inventory' => 25 - ($productIndex % 5),
                        'display_order' => $productIndex,
                        'is_featured' => $productIndex <= 8,
                        'is_new_arrival' => $productIndex <= 6,
                        'is_best_seller' => $productIndex % 2 === 0,
                        'strap_material' => 'Rubber',
                        'dial_color' => 'Black',
                        'specifications' => $specTemplate,
                        'excerpt' => 'Skeleton dial, integrated strap, and flyback chronograph engineered for modern luxury.',
                        'description' => 'Meticulously finished case paired with an in-house movement. Designed for enthusiasts who value innovation and style in equal measure.',
                    ]
                );

                $productIndex++;
            }
        }
    }
}
