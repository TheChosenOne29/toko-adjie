<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Nasi Goreng',
            'price' => 15000,
            'category' => 'Main Course',
            'desc' => 'fried rice with prawn crackers'
        ]);
        Product::create([
            'name' => 'Es Jeruk',
            'price' => 6500,
            'category' => 'Drinks',
            'desc' => 'fresh orange with iced and sugar'
        ]);
        Product::create([
            'name' => 'Seblak Ceker',
            'price' => 8000,
            'category' => 'Appetizer',
            'desc' => 'boiled crackers with chickens feet'
        ]);
        Product::create([
            'name' => 'Tenderloin Steak',
            'price' => 95000,
            'category' => 'Main Course',
            'desc' => 'premium imported australian beef'
        ]);
        Product::create([
            'name' => 'Teh manis',
            'price' => 3000,
            'category' => 'Drinks',
            'desc' => 'iced sweet tea'
        ]);
        Product::create([
            'name' => 'Vanilla Gelato',
            'price' => 18000,
            'category' => 'Dessert',
            'desc' => 'homemade vanilla gelato with choco chips'
        ]);
    }
}
