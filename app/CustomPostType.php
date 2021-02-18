<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomPostType extends Model
{
    protected $fillable = [
        'name', 'title', 'description', 'extras_fields', 'custom_fields'
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'extras_fields' => 'array',
        'custom_fields' => 'array',
    ];
}
