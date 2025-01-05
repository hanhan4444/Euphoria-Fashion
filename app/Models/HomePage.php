<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $fillable = [
        'name',
        'tagline',
        'banner_photo_url',
        'title_1',
        'description',
        'cta_photo_url',
        'about_us',
    ];
}
