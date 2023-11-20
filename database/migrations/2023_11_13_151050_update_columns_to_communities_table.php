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
             if(! Schema::hasColumn('communities', 'type_community_id')) {
                $table->foreignId('type_community_id')->after('id')->constrained('type_of_communities')->cascadeOnDelete()->cascadeOnUpdate();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('communities', function (Blueprint $table) {
            if(Schema::hasColumn('communities', 'type_community_id')) {
                $table->dropForeign('communities_type_community_id_foreign');
                $table->dropColumn('type_community_id');
            }
        });
    }
};
