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
        Schema::table('communities', function (Blueprint $table) {
            if (!Schema::hasColumn('communities', 'latitude')) {
                $table->string('latitude')->after('longitude');
            }
            if (Schema::hasColumn('communities', 'coordinates')) {
                $table->renameColumn('coordinates', 'longitude');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('communities', function (Blueprint $table) {
            if (Schema::hasColumn('communities', 'latitude')) {
                $table->dropColumn('latitude');
            }
            if (Schema::hasColumn('communities', 'longitude')) {
                $table->renameColumn('longitude', 'coordinates');
            }
        });
    }
};
