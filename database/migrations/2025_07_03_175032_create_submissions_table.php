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
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('sector_id')->constrained('sectors')->onDelete('set null');
            $table->foreignId('district_id')->constrained('districts')->onDelete('set null');
            $table->foreignId('village_id')->constrained('villages')->onDelete('set null');
            $table->string('name');
            $table->string('contact');
            $table->string('category');
            $table->string('manager');
            $table->string('proof');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('location');
            $table->string('description');
            $table->string('note')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
