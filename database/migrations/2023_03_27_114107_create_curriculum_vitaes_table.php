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
        Schema::create('curriculum_vitaes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('description')->nullable();
            $table->text('essay')->nullable();
            $table->string('education')->nullable();
            $table->string('career')->nullable();
            $table->string('hobby')->nullable();
            $table->string('vission')->nullable();
            $table->text('mission')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('marriage_prep')->nullable();
            $table->integer('marriage_target')->nullable();
            $table->string('family_info')->nullable();
            $table->string('religion_status')->nullable();
            $table->string('mahdzab')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculum_vitaes');
    }
};
