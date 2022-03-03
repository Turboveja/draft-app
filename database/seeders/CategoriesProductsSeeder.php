<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CategoriesProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$categories and $products
        $categories = Category::factory()->count(50)->create();
        $products = Product::factory()->count(50)->create();
        $categories_roulette = $categories->pluck('id');

        foreach($products as $product){
            $product->categories()->sync([$categories_roulette->random()]); //asign categories
        }
    }
}
