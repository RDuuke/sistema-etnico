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
            if (!Schema::hasColumn('communities', 'indigenous_village_id')) {
                $table->foreignId('indigenous_village_id')->after('id')->nullable()->constrained('indigenous_villages')->cascadeOnDelete()->cascadeOnUpdate();
            }
            if (Schema::hasColumn('communities', 'town_name')) {
                $table->dropColumn('town_name');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('communities', function (Blueprint $table) {
            if (Schema::hasColumn('communities', 'indigenous_village_id')) {
                $table->dropForeign('communities_indigenous_village_id_foreign');
                $table->dropColumn('indigenous_village_id');
            }
            if (!Schema::hasColumn('communities', 'town_name')) {
                $table->string('name');
            }
        });
    }
};
