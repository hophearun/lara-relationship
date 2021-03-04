<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class JsonString implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return array
     */
    public function get($model, $key, $value, $attributes)
    {
        $isJson = is_string($value) && is_array(json_decode($value, true)) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
        if(!$isJson)
            return $value;
        return json_decode($value, true);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  array  $value
     * @param  array  $attributes
     * @return string
     */
    public function set($model, $key, $value, $attributes)
    {
        $isJson = is_string($value) && is_array(json_decode($value, true)) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
        if(!$isJson)
            return $value;
        return json_encode($value);
    }
}