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
        Schema::table('users', function (Blueprint $table) {
            //
            if (Schema::hasColumn('users', 'cv')) {						
            } else {
                $table->string('cv')->default('No cv');
            }
            
            if (Schema::hasColumn('users', 'job_title')) {						
            } else {
                $table->string('job_title')->default('No job title');
            }
            
            if (Schema::hasColumn('users', 'bio')) {						
            } else {
                $table->string('bio')->default('No bio');
            }
            
            if (Schema::hasColumn('users', 'twitter')) {						
            } else {
                $table->string('twitter')->default('No twitter');
            }
            
            if (Schema::hasColumn('users', 'facebook')) {						
            } else {
                $table->string('facebook')->default('No facebook');
            }
            
            if (Schema::hasColumn('users', 'linkedin')) {						
            } else {
                $table->string('linkedin')->default('No linkedin');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            if (Schema::hasColumn('users', 'cv')) {
                $table->dropColumn('cv');
            }
            if (Schema::hasColumn('users', 'bio')) {
                $table->dropColumn('bio');
            }
            if (Schema::hasColumn('users', 'job_title')) {
                $table->dropColumn('job_title');
            }
            if (Schema::hasColumn('users', 'twitter')) {
                $table->dropColumn('twitter');
            }
            if (Schema::hasColumn('users', 'facebook')) {
                $table->dropColumn('facebook');
            }
            if (Schema::hasColumn('users', 'linkedin')) {
                $table->dropColumn('linkedin');
            }
        
        });
    }
};
