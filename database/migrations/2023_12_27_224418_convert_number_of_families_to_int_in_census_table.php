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
        Schema::table('census', function (Blueprint $table) {
            DB::statement('UPDATE census SET number_of_families = 0 WHERE number_of_families IS NULL OR number_of_families NOT SIMILAR TO \'%[0-9]%\'');

            DB::statement('ALTER TABLE census ALTER COLUMN number_of_families TYPE INTEGER USING number_of_families::integer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('census', function (Blueprint $table) {
            $table->string('number_of_families')->change();
        });
    }
};
