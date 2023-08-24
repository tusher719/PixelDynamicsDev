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
        Schema::create('service_offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('offer')->nullable();
            $table->string('offer2')->nullable();
            $table->string('offer3')->nullable();
            $table->string('offer4')->nullable();
            $table->string('offer5')->nullable();
            $table->string('offer6')->nullable();
            $table->string('offer7')->nullable();
            $table->string('offer8')->nullable();
            $table->string('offer9')->nullable();
            $table->string('offer10')->nullable();
            $table->string('offer11')->nullable();
            $table->string('offer12')->nullable();
            $table->string('offer13')->nullable();
            $table->string('offer14')->nullable();
            $table->string('offer15')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_offers');
    }
};
