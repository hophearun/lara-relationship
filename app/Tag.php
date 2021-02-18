<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'custom_post_type_id', 'name',
    ];

    protected $casts = [
        'name' => 'array',
    ];
}
