<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookItem extends Model
{
    use SoftDeletes;

    protected $fillable = ['book_id', 'barcode', 'borrowed'];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class)->withDefault();
    }
}
