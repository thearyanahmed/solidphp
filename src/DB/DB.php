<?php

namespace Thearyanahmed\SolidPHP\DB;


class DB
{
    private string $table;

    public function on(string $table): static
    {
        $this->table = $table;

        return $this;
    }

    public function execute()
    {
        echo "running on table: " . $this->table;
    }
}