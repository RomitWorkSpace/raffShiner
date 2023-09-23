<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $product = [
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