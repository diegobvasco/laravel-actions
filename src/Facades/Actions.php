<?php

declare(strict_types=1);

namespace DiegoVasconcelos\Actions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DiegoVasconcelos\Actions\Actions
 */
class Actions extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \DiegoVasconcelos\Actions\Actions::class;
    }
}
