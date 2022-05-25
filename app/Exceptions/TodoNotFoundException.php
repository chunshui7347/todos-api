<?php

declare(strict_types=1);

namespace App\Exceptions;

use Exception;

class TodoNotFoundException extends Exception
{
    public function __construct(public readonly string $queryScope, $queryValue)
    {
    }
}
