<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'category_id',
        'question',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'correct'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
