<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
        	'name' => 'BurgerKing',
        	'price' => 15000,

        ]);
        $product->save();

        $product = new Product([
        	'name' => 'Lavash',
        	'price' => 12000,

        ]);
        $product->save();

        $product = new Product([
        	'name' => 'Pizza',
        	'price' => 40000,

        ]);
        $product->save();
    }
}
