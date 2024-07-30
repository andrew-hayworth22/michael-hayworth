<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'degree',
        'school',
        'school_url',
        'location',
        'type',
        'time_frame',
        'bullet_points',
        'tags',
    ];
}
