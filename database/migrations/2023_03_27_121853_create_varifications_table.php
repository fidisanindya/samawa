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
        Schema::create('varifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('ktp');
            $table->string('face_with_ktp');
            $table->string('bornplace');
            $table->string('bornday');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('address');
            $table->string('rt');
            $table->string('rw');
            $table->string('province');
            $table->string('city');
            $table->string('subdistrict');
            $table->string('urban_village');
            $table->string('postal_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('varifications');
    }
};
