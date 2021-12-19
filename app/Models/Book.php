<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    protected $fillable = ['ISBN', 'title', 'description', 'year', 'language', 'num_of_pages', 'author_id', 'subject_id', 'status'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class)->withDefault();
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class)->withDefault();
    }
}
