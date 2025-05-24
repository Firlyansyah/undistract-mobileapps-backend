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
        Schema::create('daily_limits_table', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->string('appName');
            $table->string('packageName');
            $table->string('icon');
            $table->integer('timeLimitMinutes');
            $table->boolean('isActive')->default(true);
            $table->boolean('isParental')->default(false);
            $table->string('notificationType')->default('Head Nofitication');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_limits_table');
    }
};
