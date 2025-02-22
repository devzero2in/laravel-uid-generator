<?php

namespace Devzero2in\LaravelUidGenerator;

use Illuminate\Support\Str;

class UniqueIdGenerator
{
    public function generate($model, $field = 'custom_id', $length = 8, $prefix = '')
    {
        do {
            $id = $prefix . strtoupper(Str::random($length));
        } while ($model::where($field, $id)->exists());

        return $id;
    }
}
