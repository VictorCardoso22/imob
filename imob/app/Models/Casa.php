<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    use HasFactory;

    protected $casts = [
        'endereco' => 'array',
        'caracteristicas' => 'array',
        'galeria' => 'array',
    ];

    protected $dates = ['date'];
    
    protected $guarded = [];
}
