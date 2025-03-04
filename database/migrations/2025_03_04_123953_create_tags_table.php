<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(table: 'tags', callback: function (Blueprint $table): void {
            $table->id();
            $table->string(column: 'name');
            $table->timestamps();
        });

        // pivot table for job_tag
        Schema::create(table: 'job_tag', callback: function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(model: \App\Models\Job::class, column: 'job_listing_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(model: \App\Models\Tag::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'tags');
        Schema::dropIfExists(table: 'job_tag');
    }
};
