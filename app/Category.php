<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'custom_post_type_id', 'name', 'description', 'extras_fields', 'featured_image'
    ];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'extras_fields' => 'array',
    ];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function childrenCategories()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('categories');
    }
}
