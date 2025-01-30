<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ActivityStatus extends Model
{
    /**
     * Get all of the activities for the ActivityStatus
     */
    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }
}
