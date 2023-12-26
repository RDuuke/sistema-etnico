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
        Schema::table('programs', function (Blueprint $table) {
            if (!Schema::hasColumn('programs', 'year')) {
                $table->string('year')->after('type_program_id')->nullable();
            }
            if (!Schema::hasColumn('programs', 'observations')) {
                $table->string('observations')->after('type_program_id')->nullable();
            }
            if (Schema::hasColumn('programs', 'unit_of_measurement')) {
                $table->string('unit_of_measurement')->nullable()->change();
            }
            if (Schema::hasColumn('programs', 'amount_of_participants')) {
                $table->string('amount_of_participants')->nullable()->change();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('programs', function (Blueprint $table) {
            if (Schema::hasColumn('programs', 'year')) {
                $table->dropColumn('year');
            }
            if (Schema::hasColumn('programs', 'observations')) {
                $table->dropColumn('observations');
            }
        });
    }
};
