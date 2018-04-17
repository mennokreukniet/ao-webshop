<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Computers',
        ]);

        DB::table('categories')->insert([
            'name' => 'Auto',
        ]);

        DB::table('categories')->insert([
            'name' => 'Boot',
        ]);

        DB::table('categories')->insert([
            'name' => 'Bestek',
        ]);

        DB::table('categories')->insert([
            'name' => 'Pokemon',
        ]);
    }
}
