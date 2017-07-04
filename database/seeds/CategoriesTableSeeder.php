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
            'title'         => 'Wedding',
            'filter_name'   => 'Свадьба',
        ]);
        DB::table('categories')->insert([
            'title'         => 'Triumph',
            'filter_name'   => 'Торжество',
        ]);
        DB::table('categories')->insert([
            'title'         => 'School',
            'filter_name'   => 'Выпускной клип',
        ]);
    }
}
