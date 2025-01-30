<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ActivityCategory extends Model
{
    /**
     * Get all of the activities for the ActivityCategory
     */
    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }
}
