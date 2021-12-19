<?php

namespace Database\Seeders;

use App\Models\Librarian;
use Illuminate\Database\Seeder;

class LibrarianSeeder extends Seeder
{
    public function run()
    {
        Librarian::insert([
            [
                'name' => 'Librarian',
                'surname' => 'Librarian',
                'email' => 'librarian@mail.com',
                'password' => \Hash::make('123456'),
                'working_days' => '1,3,5,7'
            ],
            [
                'name' => 'Librarian 2',
                'surname' => 'Librarian 2',
                'email' => 'librarian2@mail.com',
                'password' => \Hash::make('123456'),
                'working_days' => '2,4,6'
            ]
        ]);
    }
}
