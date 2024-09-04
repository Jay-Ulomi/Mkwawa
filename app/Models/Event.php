<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'content1', 'content2', 'note', 'content3', 'subtitle',
        'image1', 'content4', 'subtitle2', 'image2', 'content5', 'image3',
        'additional_images'
    ];

    public $timestamps = true;

}
