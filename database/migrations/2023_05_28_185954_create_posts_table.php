<?php

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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('Content');
            $table->string('type');
            $table->morphs('location');
            $table->bigInteger('likes_counts')->nullable();
            $table->bigInteger('dislikes_counts')->nullable();
            $table->bigInteger('reports_number')->nullable()->default(0);

            $table->foreignId('user_id') // مشان نعرف مين نشر
            ->constrained('users')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
