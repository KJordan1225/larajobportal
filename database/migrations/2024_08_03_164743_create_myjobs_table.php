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
        Schema::create('myjobs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('job_title');
            $table->string('company');
            $table->string('job_region')->nullable();
            $table->string('job_city')->nullable();
            $table->string('job_state')->nullable();
            $table->string('job_type')->nullable();
            $table->string('job_location')->nullable();
            $table->integer('vacancy')->nullable();
            $table->string('experience')->nullable();
            $table->string('salary')->nullable();
            $table->string('application_deadline')->nullable();
            $table->string('job_description')->nullable();            
            $table->string('responsibilities')->nullable();
            $table->string('education_experience')->nullable();
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('myjobs');
    }
};
