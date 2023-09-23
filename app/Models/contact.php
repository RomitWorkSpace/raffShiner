<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $contact = [
        'id',
        'name',
        'email',
        'mobile',
        'message'
    ];
}