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
             if(! Schema::hasColumn('communities', 'indigenous_village_id')) {
                $table->foreignId('indigenous_village_id')->after('id')->constrained('indigenous_villages')->cascadeOnDelete()->cascadeOnUpdate();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('communities', function (Blueprint $table) {
            if(Schema::hasColumn('communities', 'indigenous_village_id')) {
                $table->dropForeign('communities_indigenous_village_id_foreign');
                $table->dropColumn('indigenous_village_id');
            }
        });
    }
};
