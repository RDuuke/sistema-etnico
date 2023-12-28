<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('communities', function (Blueprint $table) {
            if (Schema::hasColumn('communities', 'district_id')) {
                $table->foreignId('district_id')->nullable()->change();
            }
            if (Schema::hasColumn('communities', 'hamlet_id')) {
                $table->foreignId('hamlet_id')->nullable()->change();
            }
            if (Schema::hasColumn('communities', 'name')) {
                $table->dropUnique(['name']);
                $table->string('name')->nullable()->change();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('communities', function (Blueprint $table) {
            if (Schema::hasColumn('communities', 'district_id')) {
                $table->string('district_id')->nullable(false)->change();
            }
            if (Schema::hasColumn('communities', 'hamlet_id')) {
                $table->string('hamlet_id')->nullable(false)->change();
            }
            if (Schema::hasColumn('communities', 'name')) {
                $table->string('name')->nullable(false)->change();
            }
        });
    }
};
