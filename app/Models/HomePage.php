<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $fillable = [
        'meta_title',
        'meta_description',
        'robot',
        'headline',
        'sub-headline',
        'description',
        'button1_text',
        'button1_link',
        'button2_text',
        'button2_link',
        'hero-image'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
