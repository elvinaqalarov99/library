<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::insert([
            [
                'name' => 'John',
                'surname' => 'Doe',
                'email' => 'john.doe@mail.com',
                'card_number' => 'L8070',
                'api_token' => 'YHEt7CNf1SBmQs6JbTPf7qMK8FgnynI5SiPmyJELrbAO61heKy0eKuiXrxBJ',
                'password' => \Hash::make('123456'),
            ]
        ]);
    }
}
