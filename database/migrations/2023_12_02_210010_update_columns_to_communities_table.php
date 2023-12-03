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
            if (Schema::hasColumn('communities', 'type_community_id')) {
                $table->dropForeign('communities_type_community_id_foreign');
                $table->dropColumn('type_community_id');
            }

            if (!Schema::hasColumn('communities', 'collective_title')) {
                $table->tinyInteger('collective_title')->after('name')->comment('1: Si', '0: No')->nullable();;
            }

            if (!Schema::hasColumn('communities', 'name_community_council')) {
                $table->string('name_community_council')->after('name')->nullable();
            }

            if (!Schema::hasColumn('communities', 'reservation_name')) {
                $table->string('reservation_name')->after('name');
            }

            if (!Schema::hasColumn('communities', 'town_name')) {
                $table->string('town_name')->after('name');
            }

            if (!Schema::hasColumn('communities', 'type_of_area_id')) {
                $table->foreignId('type_of_area_id')->after('name')->constrained('types_of_areas')->cascadeOnDelete()->cascadeOnUpdate();
            }

            if (!Schema::hasColumn('communities', 'occupied_area')) {
                $table->string('occupied_area')->after('name');
            }

            if (!Schema::hasColumn('communities', 'coordinates')) {
                $table->string('coordinates')->after('name');
            }

            if (!Schema::hasColumn('communities', 'territorial_id')) {
                $table->foreignId('territorial_id')->after('name')->constrained('territorials')->cascadeOnDelete()->cascadeOnUpdate();
            }

            if (!Schema::hasColumn('communities', 'subregion_id')) {
                $table->foreignId('subregion_id')->after('name')->constrained('subregions')->cascadeOnDelete()->cascadeOnUpdate();
            }

            if (!Schema::hasColumn('communities', 'hamlet_id')) {
                $table->foreignId('hamlet_id')->after('name')->constrained('hamlets')->cascadeOnDelete()->cascadeOnUpdate();
            }

            if (!Schema::hasColumn('communities', 'district_id')) {
                $table->foreignId('district_id')->after('name')->constrained('districts')->cascadeOnDelete()->cascadeOnUpdate();
            }

            if (!Schema::hasColumn('communities', 'municipality_id')) {
                $table->foreignId('municipality_id')->after('name')->constrained('municipalities')->cascadeOnDelete()->cascadeOnUpdate();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('communities', function (Blueprint $table) {
            if (Schema::hasColumn('communities', 'collective_title')) {
                $table->dropColumn('collective_title');
            }

            if (Schema::hasColumn('communities', 'name_community_council')) {
                $table->dropColumn('name_community_council');
            }

            if (Schema::hasColumn('communities', 'type_of_area_id')) {
                $table->dropForeign('communities_type_of_area_id_foreign');
                $table->dropColumn('type_of_area_id');
            }

            if (Schema::hasColumn('communities', 'occupied_area')) {
                $table->dropColumn('occupied_area');
            }

            if (Schema::hasColumn('communities', 'coordinates')) {
                $table->dropColumn('coordinates');
            }

            if (Schema::hasColumn('communities', 'territorial_id')) {
                $table->dropForeign('communities_territorial_id_foreign');
                $table->dropColumn('territorial_id');
            }

            if (Schema::hasColumn('communities', 'subregion_id')) {
                $table->dropForeign('communities_subregion_id_foreign');
                $table->dropColumn('subregion_id');
            }

            if (Schema::hasColumn('communities', 'hamlet_id')) {
                $table->dropForeign('communities_hamlet_id_foreign');
                $table->dropColumn('hamlet_id');
            }
            
            if (Schema::hasColumn('communities', 'district_id')) {
                $table->dropForeign('communities_district_id_foreign');
                $table->dropColumn('district_id');
            }

            if (Schema::hasColumn('communities', 'municipality_id')) {
                $table->dropForeign('communities_municipality_id_foreign');
                $table->dropColumn('municipality_id');
            }
        });
    }
};
