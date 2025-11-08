<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Luxury Watches',
                'description' => 'Swiss-made icons with meticulous craftsmanship for collectors and connoisseurs alike.',
                'is_featured' => true,
                'position' => 1,
            ],
            [
                'name' => 'Limited Editions',
                'description' => 'Numbered releases and special collaborations available in extremely limited quantities.',
                'is_featured' => true,
                'position' => 2,
            ],
            [
                'name' => 'Everyday Essentials',
                'description' => 'Reliable daily companions that blend understated elegance with practical engineering.',
                'is_featured' => true,
                'position' => 3,
            ],
            [
                'name' => 'High Complications',
                'description' => 'Tourbillons, perpetual calendars, and minute repeaters for the mechanically curious.',
                'is_featured' => true,
                'position' => 4,
            ],
            [
                'name' => 'Smart & Hybrid',
                'description' => 'Connected timepieces with wellness tracking, notifications, and hybrid mechanics.',
                'is_featured' => true,
                'position' => 5,
            ],
            [
                'name' => 'Heritage Revival',
                'description' => 'Archives-inspired silhouettes and re-editions drawn from iconic design eras.',
                'is_featured' => true,
                'position' => 6,
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => Str::slug($category['name'])],
                array_merge($category, [
                    'slug' => Str::slug($category['name']),
                    'hero_image' => 'images/watch.webp',
                    'thumbnail_image' => 'images/watch.webp',
                ])
            );
        }
    }
}
