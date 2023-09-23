<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $about = [
        'id',
        'title',
        'name',
        'slug',
        'banner',
        'image',
        'short_desc',
        'description'
    ];
}