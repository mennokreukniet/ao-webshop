<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Dell',
            'description' => 'description here',
            'price' => '50.00'
        ]);

        DB::table('products')->insert([
            'name' => 'HP',
            'description' => 'description here',
            'price' => '52.99',
        ]);

        DB::table('products')->insert([
            'name' => 'Asus',
            'description' => 'description here',
            'price' => '5.00'
        ]);

        DB::table('products')->insert([
            'name' => 'Lenovo',
            'description' => 'description here',
            'price' => '60.00'
        ]);

        DB::table('products')->insert([
            'name' => 'Acer',
            'description' => 'description here',
            'price' => '50.00'
        ]);
    }
}
