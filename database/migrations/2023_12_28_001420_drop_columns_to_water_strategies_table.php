<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('water_strategies', function (Blueprint $table) {
            $table->dropColumn('drinking_water');
            $table->dropColumn('drinking_water_date');
            $table->dropColumn('drinking_water_status');
            $table->dropColumn('water_purification_system');
            $table->dropColumn('water_purification_system_date');
            $table->dropColumn('water_purification_system_status');
            $table->dropColumn('families_with_drinking_water');
            $table->dropColumn('aqueduct');
            $table->dropColumn('aqueduct_date');
            $table->dropColumn('aqueduct_status');
            $table->dropColumn('families_with_aqueduct');
            $table->dropColumn('septic_tank_sewer');
            $table->dropColumn('septic_tank_date');
            $table->dropColumn('septic_tank_status');
            $table->dropColumn('families_with_sewer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('water_strategies', function (Blueprint $table) {
            $table->tinyInteger('drinking_water')->comment('1: Verdadero', '0: Falso');
            $table->string('drinking_water_date');
            $table->string('drinking_water_status');
            $table->tinyInteger('water_purification_system')->comment('1: Verdadero', '0: Falso');
            $table->string('water_purification_system_date');
            $table->string('water_purification_system_status');
            $table->string('families_with_drinking_water');
            $table->tinyInteger('aqueduct')->comment('1: Verdadero', '0: Falso');
            $table->string('aqueduct_date');
            $table->string('aqueduct_status');
            $table->string('families_with_aqueduct');
            $table->tinyInteger('septic_tank_sewer')->comment('1: Verdadero', '0: Falso');
            $table->string('septic_tank_date');
            $table->string('septic_tank_status');
            $table->string('families_with_sewer');
        });
    }
};
