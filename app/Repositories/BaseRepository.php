<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;

abstract class BaseRepository
{
    abstract protected function query(): Builder;

    public function find(int $id)
    {
        return $this->query()->find($id);
    }
}