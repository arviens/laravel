<?php

namespace App\Models;

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
    const ROLE_USER = 'user';
    const ROLE_ADMIN = 'admin';

    protected $fillable = [
        'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'internal_name', 'password', 'remember_token',
    ];

    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }
}
