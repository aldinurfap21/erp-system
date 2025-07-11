<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categoryIds = Category::pluck('id')->toArray();
        for ($i = 1; $i <= 50; $i++) {
            Product::create([
                'name'  => 'Produk ' . $i,
                'sku'   => 'SKU' . Str::upper(Str::random(6)),
                'stock' => rand(10, 100),
                'price' => rand(10000, 100000),
                'category_id' => Arr::random($categoryIds),
            ]);
        }
    }
}
