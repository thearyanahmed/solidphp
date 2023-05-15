<?php

namespace Thearyanahmed\SolidPHP;

use JetBrains\PhpStorm\Pure;

class Auth
{
    public static function check() : bool
    {
        return false;
    }

    #[Pure]
    public static function user(): User
    {
        return new User();
    }
}