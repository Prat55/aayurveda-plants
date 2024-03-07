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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();

            $table->string('token')->nullable();
            $table->string('scientific_name');
            $table->string('local_name');
            $table->string('place')->nullable();
            $table->string('root')->nullable();
            $table->string('stem')->nullable();
            $table->string('leaves')->nullable();
            $table->string('flower')->nullable();
            $table->text('plant_img');
            $table->text('uses');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
