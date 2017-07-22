<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string ip
 * @property string user_agent
 *
 */
class VisitorTrack extends Model
{
    protected $fillable = [
        'ip', 'user_agent'
    ];
}