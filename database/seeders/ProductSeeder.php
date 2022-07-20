<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
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
            'brand_id' => 1,
            'name' => 'Producto1',
            'description' => 'Description1',
            'price' => '90'
           ]);
           Product::create([
            'brand_id' => 5,
            'name' => 'Producto2',
            'description' => 'Description2',
            'price' => '94'
           ]);
           Product::create([
            'brand_id' => 1,
            'name' => 'Producto3',
            'description' => 'Description3',
            'price' => '90'
           ]);
           Product::create([
            'brand_id' => 3,
            'name' => 'Producto4',
            'description' => 'Description4',
            'price' => '100'
           ]);
           Product::create([
            'brand_id' => 3,
            'name' => 'Producto5',
            'description' => 'Description 5',
            'price' => '100'
           ]);
           Product::create([
            'brand_id' => 3,
            'name' => 'Producto6',
            'description' => 'Description6',
            'price' => '200'
           ]);
           Product::create([
            'brand_id' => 3,
            'name' => 'Producto7',
            'description' => 'Description7',
            'price' => '55'
           ]);
           Product::create([
            'brand_id' => 3,
            'name' => 'Producto8',
            'description' => 'Description8',
            'price' => '2'
           ]);
           Product::create([
            'brand_id' => 3,
            'name' => 'Producto9',
            'description' => 'Description 9',
            'price' => '1200'
           ]);
           Product::create([
            'brand_id' => 3,
            'name' => 'Producto10',
            'description' => 'Description 10',
            'price' => '7200'
           ]);
           Product::create([
            'brand_id' => 3,
            'name' => 'Producto11',
            'description' => 'Description11',
            'price' => '200'
           ]);
           Product::create([
            'brand_id' => 4,
            'name' => 'Producto12',
            'description' => 'Description 12',
            'price' => '99'
           ]);
           Product::create([
            'brand_id' => 5,
            'name' => 'Producto13',
            'description' => 'Description13',
            'price' => '500'
           ]);
           Product::create([
            'brand_id' => 1,
            'name' => 'Producto14',
            'description' => 'Description 14',
            'price' => '18'
           ]);
           Product::create([
            'brand_id' => 1,
            'name' => 'Producto 15',
            'description' => 'Description 15',
            'price' => '23'
           ]);
           Product::create([
            'brand_id' => 3,
            'name' => 'Producto16',
            'description' => 'Description16',
            'price' => '157'
           ]);
           Product::create([
            'brand_id' => 2,
            'name' => 'Producto 17',
            'description' => 'Description 17',
            'price' => '5'
           ]);
           Product::create([
            'brand_id' => 1,
            'name' => 'Producto 18',
            'description' => 'Description 18',
            'price' => '3'
           ]);
           Product::create([
            'brand_id' => 2,
            'name' => 'Producto 19',
            'description' => 'Description 19',
            'price' => '20'
           ]);
           Product::create([
            'brand_id' => 3,
            'name' => 'Producto 20',
            'description' => 'Description 20',
            'price' => '1200'
           ]);
    }
}
