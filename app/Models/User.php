<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int id
 * @property string username
 * @property string internal_name
 * @property string role
 *
 */
class User extends Authenticatable
{
    use SoftDeletes;

    const ROLE_USER = 'user';
    const ROLE_ADMIN = 'admin';

    protected $fillable = [
        'username', 'password',
    ];

    protected $hidden = [
        'internal_name', 'password', 'remember_token',
    ];

    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public function isUser(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }
}
