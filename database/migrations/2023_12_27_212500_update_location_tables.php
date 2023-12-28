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
        Schema::table('hamlets', function (Blueprint $table) {
            if (!Schema::hasColumn('hamlets', 'municipality_id')) {
                $table->foreignId('municipality_id')->constrained('municipalities')->cascadeOnDelete()->cascadeOnUpdate();
            }
        });

        Schema::table('subregions', function (Blueprint $table) {
            if (!Schema::hasColumn('subregions', 'municipality_id')) {
                $table->foreignId('municipality_id')->constrained('municipalities')->cascadeOnDelete()->cascadeOnUpdate();
            }
        });

        Schema::table('territorials', function (Blueprint $table) {
            if (!Schema::hasColumn('territorials', 'municipality_id')) {
                $table->foreignId('municipality_id')->constrained('municipalities')->cascadeOnDelete()->cascadeOnUpdate();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hamlets', function (Blueprint $table) {
            if (Schema::hasColumn('hamlets', 'municipality_id')) {
                $table->dropForeign('hamlets_municipality_id_foreign');
                $table->dropColumn('municipality_id');
            }
        });

        Schema::table('subregions', function (Blueprint $table) {
            if (Schema::hasColumn('subregions', 'municipality_id')) {
                $table->dropForeign('subregions_municipality_id_foreign');
                $table->dropColumn('municipality_id');
            }
        });
        Schema::table('territorials', function (Blueprint $table) {
            if (Schema::hasColumn('territorials', 'municipality_id')) {
                $table->dropForeign('territorials_municipality_id_foreign');
                $table->dropColumn('municipality_id');
            }
        });
    }
};
