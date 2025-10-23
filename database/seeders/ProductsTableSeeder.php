<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Product 1',
                'description' => 'Description for product 1',
                'price' => 10.99,
                'stock' => 100,
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description for product 2',
                'price' => 15.49,
                'stock' => 50,
            ],
            [
                'name' => 'Product 3',
                'description' => 'Description for product 3',
                'price' => 7.99,
                'stock' => 200,
            ],
        ]);
    }
}
