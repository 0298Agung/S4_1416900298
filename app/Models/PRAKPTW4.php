<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PRAKPTW4 extends model
{
    use hasfactory;
    protected $fillable = [
        'title',
        'url',
        'category',
        'description'
    ];
}

