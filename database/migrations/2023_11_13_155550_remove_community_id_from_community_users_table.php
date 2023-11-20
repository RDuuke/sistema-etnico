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
        Schema::table('community_users', function (Blueprint $table) {
            if( Schema::hasColumn('community_users', 'community_id')) {
                $table->dropForeign('community_users_community_id_foreign');
                $table->dropColumn('community_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('community_users', function (Blueprint $table) {
            if(! Schema::hasColumn('community_users', 'community_id')) {
            }
        });
    }
};