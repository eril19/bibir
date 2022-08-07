<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['category' => 'Horror'],
            ['category' => 'Romance'],
            ['category' => 'Sci-fi'],
            ['category' => 'Mystery'],
            ['category' => 'Thriller'],
            ['category' => 'Action'],
            ['category' => 'Comedy'],
            ['category' => 'Drama'],
            ['category' => 'History'],
            ['category' => 'Fantasy']
         ]);
    }
}
