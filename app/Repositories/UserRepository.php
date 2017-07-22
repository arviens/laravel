<?php

namespace App\Repositories;


use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UserRepository extends BaseRepository
{
    protected function query(): Builder
    {
        return User::query();
    }

    public function getByUsername(string $username): User
    {
        return $this->query()->where([
            'username' => $username
        ])
            ->first();
    }
}