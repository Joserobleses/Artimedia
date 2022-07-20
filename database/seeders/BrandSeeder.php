<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'Marca1'
        ]);
        Brand::create([
             'name' => 'Marca2'
        ]);
        Brand::create([
            'name' => 'Marca3'
        ]);
        Brand::create([
            'name' => 'Marca4'
        ]);
        Brand::create([
            'name' => 'Marca5'
        ]);
    }
}
