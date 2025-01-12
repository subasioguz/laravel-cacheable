<?php

namespace Fowitech\Cacheable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fowitech\Cacheable\Cacheable
 */
class Cacheable extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Fowitech\Cacheable\Cacheable::class;
    }
}
