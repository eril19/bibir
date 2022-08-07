<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class detailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            [
                'book_id' => 1,
                'author' => 'Abah lala',
                'publisher' => 'Agung Wijaya inc',
                'year' => 2019,
                'description' => 'Kisah ini sangatlah seram.'
            ],
            [
                'book_id' => 2,
                'author' => 'Zainal Gunawan',
                'publisher' => 'PT. Sunaryo',
                'year' => 2001,
                'description' => 'Kisah ini sangatlah romantis.'
            ],
            [
                'book_id' => 3,
                'author' => 'Supriyanto Supriyono',
                'publisher' => 'Gunung Lembah',
                'year' => 2022,
                'description' => 'Kisah ini sangatlah seru dan menegangkan.'
            ],
            [
                'book_id' => 4,
                'author' => 'Heri Heru',
                'publisher' => 'Bara Biri Production',
                'year' => 1990,
                'description' => 'Kisah ini sangatlah membingungkan dan bikin penasaran.'
            ],
            [
                'book_id' => 5,
                'author' => 'Naufal Purnomo',
                'publisher' => 'Rusa Publisher',
                'year' => 2009,
                'description' => 'Kisah ini sangatlah mendebarkan.'
            ],
            [
                'book_id' => 6,
                'author' => 'Kace Rifki Pratama',
                'publisher' => 'Agung Wijaya inc',
                'year' => 2004,
                'description' => 'Kisah ini sangatlah Seru.'
            ],
            [
                'book_id' => 7,
                'author' => 'Rifdah Nadria',
                'publisher' => 'Agung Wijaya inc',
                'year' => 2021,
                'description' => 'Kisah ini sangatlah lucu.'
            ],
            [
                'book_id' => 8,
                'author' => 'Faldian yandika',
                'publisher' => 'Rusa Publisher',
                'year' => 2008,
                'description' => 'Kisah ini sangatlah mengharukan.'
            ],
            [
                'book_id' => 9,
                'author' => 'Abah lala',
                'publisher' => 'Agung Wijaya inc',
                'year' => 2020,
                'description' => 'Berdasarkan pengalaman nyata.'
            ],
            [
                'book_id' => 10,
                'author' => 'Faldian yandika',
                'publisher' => 'PT Sunaryo',
                'year' => 1991,
                'description' => 'Kisah ini membawa fantasi yang seru bagi pembaca.'
            ],
        ]);
    }
}
