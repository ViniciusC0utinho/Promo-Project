<?php

use App\Models\ActivityCategory;
use App\Models\ActivityPriority;
use App\Models\ActivityStatus;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table): void {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->foreignIdFor(User::class, 'responsible_id')->constrained();
            $table->foreignIdFor(ActivityCategory::class)->constrained();
            $table->foreignIdFor(ActivityPriority::class)->constrained();
            $table->foreignIdFor(ActivityStatus::class)->constrained();
            $table->morphs('relatable');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
