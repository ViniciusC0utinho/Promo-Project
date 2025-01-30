<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class TreeView extends Model
{
    /**
     * Get the workspace that owns the tree view.
     */
    public function workspace(): BelongsTo
    {
        return $this->belongsTo(Workspace::class);
    }

    /**
     * Get the relatable that owns the tree view.
     */
    public function relatable(): MorphTo
    {
        return $this->morphTo();
    }
}
