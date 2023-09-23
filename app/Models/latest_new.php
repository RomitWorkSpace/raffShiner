<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class latest_new extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $latest_new = [
        'id',
        'title',
        'name',
        'slug',
        'image',
        'description'
    ];
}