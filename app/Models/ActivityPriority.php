<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ActivityPriority extends Model
{
    /**
     * Get all of the activities for the ActivityPriority
     */
    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }
}
