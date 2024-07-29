<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'title',
        'company',
        'company_url',
        'location',
        'type',
        'time_frame',
        'bullet_points',
        'tags',
    ];
}
