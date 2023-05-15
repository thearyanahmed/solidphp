<?php

namespace Thearyanahmed\SolidPHP;

class User
{
    public function hasPermission(string $permission) : bool
    {
        return false;
    }

    public function hasRole(string $role) : bool
    {
        return false;
    }
}