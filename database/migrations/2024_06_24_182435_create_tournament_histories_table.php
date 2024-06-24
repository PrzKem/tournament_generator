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
        Schema::create('tournament_histories', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('team_1_id');
          $table->unsignedBigInteger('team_2_id');
          $table->integer('team_1_score');
          $table->integer('team_2_score');
          $table->timestamps();

          $table->foreign('team_1_id')->references('id')->on('teams');
          $table->foreign('team_2_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournament_histories');
    }
};
