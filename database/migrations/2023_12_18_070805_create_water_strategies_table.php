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
        Schema::create('water_strategies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('community_id')->constrained('communities')->cascadeOnDelete()->cascadeOnUpdate();
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
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('water_strategies');
    }
};
