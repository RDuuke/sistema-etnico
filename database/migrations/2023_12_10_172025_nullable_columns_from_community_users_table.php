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
        Schema::table('community_users', function (Blueprint $table) {
            if (Schema::hasColumn('community_users', 'age')) {
                $table->string('age')->nullable()->change();
            }
            if (Schema::hasColumn('community_users', 'phone_1')) {
                $table->string('phone_1')->nullable()->change();
            }
            if (Schema::hasColumn('community_users', 'phone_2')) {
                $table->string('phone_2')->nullable()->change();
            }

            if (Schema::hasColumn('community_users', 'gender_id')) {
                $table->foreignId('gender_id')->nullable()->change();
            }

            if (Schema::hasColumn('community_users', 'community_id')) {
                $table->foreignId('community_id')->nullable()->change();    
            }

            if (Schema::hasColumn('community_users', 'educational_level_id')) {
                $table->foreignId('educational_level_id')->nullable()->change();    
            }

            if (Schema::hasColumn('community_users', 'training_area_id')) {
                $table->foreignId('training_area_id')->nullable()->change();    
            }

            if (Schema::hasColumn('community_users', 'occupation_id')) {
                $table->foreignId('occupation_id')->nullable()->change();    
            }

            if (Schema::hasColumn('community_users', 'strategy_id')) {
                $table->foreignId('strategy_id')->nullable()->change();    
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('community_users', function (Blueprint $table) {
            if (Schema::hasColumn('community_users', 'age')) {
                $table->string('age')->nullable(false)->change();
            }

            if (Schema::hasColumn('community_users', 'phone_1')) {
                $table->string('phone_1')->nullable(false)->change();
            }

            if (Schema::hasColumn('community_users', 'phone_2')) {
                $table->string('phone_2')->nullable(false)->change();
            }
        });
    }
};
