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
            if (!Schema::hasColumn('communities', 'type_community')) {
                $table->tinyInteger('type_community')->after('name')->comment('1: Indígena', '2: Afro');
            }

            if (Schema::hasColumn('communities', 'name_community_council')) {
                $table->dropColumn('name_community_council');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('communities', function (Blueprint $table) {
            if (Schema::hasColumn('communities', 'type_community')) {
                $table->dropColumn('type_community');
            }
        });
    }
};
