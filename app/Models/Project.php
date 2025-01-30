<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Project extends Model
{
    /**
     * Get all of the tree views for the project.
     */
    public function treeViews(): MorphMany
    {
        return $this->morphMany(TreeView::class, 'relatable');
    }

    /**
     * Get the owner that owns the project.
     */
    public function onwer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    /**
     * Get all of the activities for the folder.
     */
    public function activities(): MorphMany
    {
        return $this->morphMany(Activity::class, 'relatable');
    }
}
