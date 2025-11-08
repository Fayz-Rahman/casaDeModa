<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            'Hublot',
            'Rolex',
            'Omega',
            'Audemars Piguet',
            'Patek Philippe',
            'Tag Heuer',
            'Breitling',
            'Cartier',
            'Vacheron Constantin',
            'IWC Schaffhausen',
            'Richard Mille',
            'Jaeger-LeCoultre',
        ];

        foreach ($brands as $index => $name) {
            Brand::updateOrCreate(
                ['slug' => Str::slug($name)],
                [
                    'name' => $name,
                    'slug' => Str::slug($name),
                    'logo_path' => 'images/Hublot-logo.png',
                    'hero_image' => 'images/watch.webp',
                    'description' => 'Iconic manufacture known for exceptional watchmaking and enduring design codes.',
                    'website_url' => 'https://horaoriginals.com',
                    'is_featured' => $index < 8,
                    'position' => $index + 1,
                ]
            );
        }
    }
}
