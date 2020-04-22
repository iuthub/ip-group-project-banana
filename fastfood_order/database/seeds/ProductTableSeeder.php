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
        	'name' => 'Toster',
            'imagePath' => 'src/pics/1.jpg',
        	'price' => 13000,

        ]);
        $product->save();

        $product = new Product([
        	'name' => 'Combo',
            'imagePath' => 'src/pics/3.jpg',
        	'price' => 18000,

        ]);
        $product->save();

        $product = new Product([
        	'name' => 'Donar',
            'imagePath' => 'src/pics/4.jpg',
        	'price' => 12000,

        ]);
        $product->save();

        $product = new Product([
            'name' => 'King Burger',
            'imagePath' => 'src/pics/king_burger.jpg',
            'price' => 16000,

        ]);
        $product->save();

        $product = new Product([
            'name' => 'Mega Burger',
            'imagePath' => 'src/pics/mega_burger.jpg',
            'price' => 20000,

        ]);
        $product->save();

        $product = new Product([
            'name' => 'Chicken Burger',
            'imagePath' => 'src/pics/chicken_burger.jpg',
            'price' => 15000,

        ]);
        $product->save();

        $product = new Product([
            'name' => 'Cheese Burger',
            'imagePath' => 'src/pics/double_cheese.jpg',
            'price' => 14000,

        ]);
        $product->save();

        $product = new Product([
            'name' => 'HotDog',
            'imagePath' => 'src/pics/6.jpg',
            'price' => 13000,

        ]);
        $product->save();

        $product = new Product([
            'name' => 'Mix',
            'imagePath' => 'src/pics/5.jpg',
            'price' => 35000,

        ]);
        $product->save();

        $product = new Product([
            'name' => 'Fanta',
            'imagePath' => 'src/pics/fanta1.jpg',
            'price' => 8000,

        ]);
        $product->save();

        $product = new Product([
            'name' => 'Cola',
            'imagePath' => 'src/pics/cola.jpg',
            'price' => 8000,

        ]);
        $product->save();

        $product = new Product([
            'name' => 'Juice',
            'imagePath' => 'src/pics/juice.jpg',
            'price' => 10000,

        ]);
        $product->save();
    }
}
