<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class booksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'category_id' => 1,
                'title' =>'KKN di Desa Sukamaju'
            ],
            [
                'category_id' => 2,
                'title' =>'Pacarku adalah istriku'
            ],
            [
                'category_id' => 3,
                'title' =>'Perang Bintang III'
            ],
            [
                'category_id' => 4,
                'title' =>'Orang Misterius'
            ],
            [
                'category_id' => 5,
                'title' =>'Saturday the 15th'
            ],
            [
                'category_id' => 6,
                'title' =>'Die Eazy'
            ],
            [
                'category_id' => 7,
                'title' =>'HahaHihi'
            ],
            [
                'category_id' => 8,
                'title' =>'Abah x Umi'
            ],
            [
                'category_id' => 9,
                'title' =>'Sejarah durian runtuh'
            ],
            [
                'category_id' => 10,
                'title' =>'Peri nolife'
            ],
        ]);
    }
}
