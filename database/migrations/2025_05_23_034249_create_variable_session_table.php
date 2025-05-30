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
        Schema::create('variable_session_table', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->string('appName');
            $table->string('packageName');
            $table->integer('secondsLeft');
            $table->bigInteger('coolDownDuration')->nullable(); 
            $table->bigInteger('coolDownEndTime')->nullable()->default(null); 
            $table->boolean('isOnCoolDown');
            $table->boolean('isActive')->default(true);
            $table->boolean('isParental')->default(false);
            $table->boolean('isSynced')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variable_session_table');
    }
};
