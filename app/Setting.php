<?php

namespace App;

use App\Casts\JsonString;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'value'
    ];

    protected $casts = [
        'name' => 'string',
        'value' => JsonString::class,
    ];
}
