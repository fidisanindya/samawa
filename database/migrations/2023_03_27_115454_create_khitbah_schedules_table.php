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
        Schema::create('khitbah_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('khitbah_id');
            $table->foreignId('ustadz_id');
            $table->string('guardian_name');
            $table->string('guardian_phone');
            $table->string('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khitbah_schedules');
    }
};
