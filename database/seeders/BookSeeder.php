<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::insert([
            [
                'ISBN' => '000-0-00-000000-0',
                'title' => 'Lorem ipsum',
                'description' => 'Lorem ipsum dolor sit amet',
                'year' => 2021,
                'language' => 'az',
                'num_of_pages' => 200,
                'author_id' => 1,
                'subject_id' => 1,
            ],
            [
                'ISBN' => '111-1-11-111111-1',
                'title' => 'Lorem ipsum 2',
                'description' => 'Lorem ipsum dolor sit amet 2',
                'year' => 2020,
                'language' => 'ru',
                'num_of_pages' => 170,
                'author_id' => 2,
                'subject_id' => 2,
            ]
        ]);
    }
}
