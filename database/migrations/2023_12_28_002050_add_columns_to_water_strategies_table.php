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
        Schema::table('water_strategies', function (Blueprint $table) {
            if (!Schema::hasColumn('water_strategies', 'types_water_strategy_id')) {
                $table->foreignId('types_water_strategy_id')->after('id')->constrained('types_of_water_strategies')->cascadeOnDelete()->cascadeOnUpdate();
            }
            if (!Schema::hasColumn('water_strategies', 'year')) {
                $table->string('year');
            }
            if (!Schema::hasColumn('water_strategies', 'state')) {
                $table->string('state');
            }
            if (!Schema::hasColumn('water_strategies', 'housing_with_service')) {
                $table->string('housing_with_service');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('water_strategies', function (Blueprint $table) {
            if (Schema::hasColumn('water_strategies', 'types_water_strategy_id')) {
                $table->dropForeign('water_strategies_types_water_strategy_id_foreign');
                $table->dropColumn('types_water_strategy_id');
            }
            if (Schema::hasColumn('water_strategies', 'year')) {
                $table->dropColumn('year');
            }
            if (Schema::hasColumn('water_strategies', 'state')) {
                $table->dropColumn('state');
            }
            if (Schema::hasColumn('water_strategies', 'housing_with_service')) {
                $table->dropColumn('housing_with_service');
            }
        });
    }
};
