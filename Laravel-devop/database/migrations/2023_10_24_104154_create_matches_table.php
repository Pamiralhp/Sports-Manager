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
        Schema::create('matches', function (Blueprint $table) {
            $table->id()->unique();
            $table->unsignedBigInteger('local_Team');
            $table->unsignedBigInteger('guest_Team');
            $table->string('city', 20);
            $table->date('date');
            $table->timestamps();
        
            $table->foreign('local_Team')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('guest_Team')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
