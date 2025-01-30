<?php

declare(strict_types=1);

use App\Models\Organization;
use App\Models\Workspace;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('organization_workspaces', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Organization::class)->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(Workspace::class)->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organization_workspaces');
    }
};
