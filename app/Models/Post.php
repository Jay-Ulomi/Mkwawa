<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content1',
        'content2',
        'note',
        'content3',
        'subtitle1',
        'image1',
        'content4',
        'subtitle2',
        'image2',
        'content5',
        'image3',
    ];

    public function category()
{
    return $this->belongsTo(Category::class);
}
}

