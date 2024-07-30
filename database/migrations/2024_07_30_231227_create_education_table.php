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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->string('degree', 150);
            $table->string("school", 150);
            $table->string("school_url", 300);
            $table->string("location", 100);
            $table->string("type", 25);
            $table->string('time_frame', 50);
            $table->text('bullet_points');
            $table->string('tags', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
