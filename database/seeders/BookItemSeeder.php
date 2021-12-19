<?php

namespace Database\Seeders;

use App\Models\BookItem;
use Illuminate\Database\Seeder;

class BookItemSeeder extends Seeder
{
    public function run()
    {
        BookItem::insert([
            [
                'book_id' => 1,
                'barcode' => \Str::uuid()
            ],
            [
                'book_id' => 1,
                'barcode' => \Str::uuid()
            ],
            [
                'book_id' => 2,
                'barcode' => \Str::uuid()
            ],
            [
                'book_id' => 2,
                'barcode' => \Str::uuid()
            ]
        ]);
    }
}
