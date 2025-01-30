<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Activity extends Model
{
    /**
     * Get the category that owns the Activity
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(ActivityCategory::class);
    }

    /**
     * Get the priority that owns the Activity
     */
    public function priority(): BelongsTo
    {
        return $this->belongsTo(ActivityPriority::class);
    }

    /**
     * Get the status that owns the Activity
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(ActivityStatus::class);
    }

    /**
     * Get the responsible that owns the Activity
     */
    public function responsible(): BelongsTo
    {
        return $this->belongsTo(User::class, 'responsible_id');
    }

    /**
     * Get the relatable that owns the Activity
     */
    public function relatable(): MorphTo
    {
        return $this->morphTo();
    }
}
