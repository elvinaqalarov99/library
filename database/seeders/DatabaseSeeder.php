<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            LibrarianSeeder::class,
            AuthorSeeder::class,
            SubjectSeeder::class,
            BookSeeder::class,
            BookItemSeeder::class,
        ]);
    }
}
