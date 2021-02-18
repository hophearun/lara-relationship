<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'custom_post_type_id', 
        'user_id', 
        'title', 
        'content',
        'excerpt',
        'trans_fileds',
        'extras_fields',
        'media',
        'seo_meta',
        'featured_image',
        'featured',
        'password',
        'parent_id',
        'post_ordering',
        'post_created_at',
        'post_expire_at',
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
        'excerpt' => 'array',
        'trans_fileds' => 'array',
        'extras_fields' => 'array',
        'media' => 'array',
        'seo_meta' => 'array',
        'post_created_at' => 'datetime',
        'post_expire_at' => 'datetime',
    ];

}
