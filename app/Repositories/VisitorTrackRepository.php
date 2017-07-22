<?php

namespace App\Repositories;

use App\Models\VisitorTrack;
use Illuminate\Database\Eloquent\Builder;

class VisitorTrackRepository extends BaseRepository
{
    protected function query(): Builder
    {
        return VisitorTrack::query();
    }
}