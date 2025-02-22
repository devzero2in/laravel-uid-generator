<?php

namespace Devzero2in\LaravelUidGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class UniqueIdGenerator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'unique-id-generator';
    }
}
