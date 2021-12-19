<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        Author::insert([
            [
                'name' => 'Dan',
                'surname' => 'Brown',
                'description' => 'Dan Brown is the author of numerous #1 bestselling novels, including The Da Vinci Code,
                which has become one of the best selling novels of all time as well as the subject of intellectual debate
                among readers and scholars. Brown’s novels are published in 56 languages around the world with over 200
                million copies in print.'
            ],
            [
                'name' => 'Dan 2',
                'surname' => 'Brown 2',
                'description' => 'Dan Brown is the author of numerous #1 bestselling novels, including The Da Vinci Code,
                which has become one of the best selling novels of all time as well as the subject of intellectual debate
                among readers and scholars. Brown’s novels are published in 56 languages around the world with over 200
                million copies in print.'
            ]
        ]);
    }
}
