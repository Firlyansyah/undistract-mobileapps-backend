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
        Schema::create('block_schedules_table', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->string('appName');
            $table->string('packageName');
            $table->string('daysOfWeek');
            $table->boolean('isAllDay');
            $table->string('startTime')->nullable();
            $table->string('endTime')->nullable();
            $table->boolean('isActive')->default(true);
            $table->boolean('isParental')->default(false);
            $table->boolean('isSynced')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('block_schedules_table');
    }
};
