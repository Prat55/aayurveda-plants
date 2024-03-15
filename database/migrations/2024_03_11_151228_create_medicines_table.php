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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();

            $table->string('token');
            $table->string('tablet_name');
            $table->text('use');
            $table->text('ingrediency')->nullable();
            $table->text('where_to_get')->nullable();
            $table->text('medicine_img');
            $table->text('note')->nullable();
            $table->string('lang', 50)->default('eng');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
