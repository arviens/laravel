<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string username
 * @property string password
 * @property float points
 */
class Account extends Model
{
    protected $fillable = [
        'username', 'password', 'points',
    ];
}