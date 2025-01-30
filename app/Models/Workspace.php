<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Workspace extends Model
{
    /**
     * Get the organizations that belong to the workspace.
     */
    public function organizations(): BelongsToMany
    {
        return $this->belongsToMany(Organization::class, 'organization_workspaces');
    }

    /**
     * Get the users that belong to the workspace.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'workspace_users');
    }

    /**
     * Get the tree views that belong to the workspace.
     */
    public function treeViews(): HasMany
    {
        return $this->hasMany(TreeView::class);
    }
}
