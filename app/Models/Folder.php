<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Folder extends Model
{
    /**
     * Get all of the tree views for the folder.
     */
    public function treeViews(): MorphMany
    {
        return $this->morphMany(TreeView::class, 'relatable');
    }

    /**
     * Get all of the activities for the folder.
     */
    public function activities(): MorphMany
    {
        return $this->morphMany(Activity::class, 'relatable');
    }
}
