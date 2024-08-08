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
        Schema::create('jobsaved', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('job_id');
            $table->integer('user_id');
            $table->string('job_title');
            $table->string('company');
            $table->string('job_region')->nullable();
            $table->string('job_type')->nullable();
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobsaved');
    }
};
