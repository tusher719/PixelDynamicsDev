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
        Schema::create('team_carousels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('industry')->nullable();
            $table->string('area')->nullable();
            $table->string('industry_experience')->nullable();
            $table->string('area_experience')->nullable();
            $table->string('member_img')->nullable();
            $table->string('description')->nullable();
            $table->string('description2')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_carousels');
    }
};
