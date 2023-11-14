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
             if(! Schema::hasColumn('community_users', 'enable')) {
                $table->tinyInteger('enable')->after('id')->comment('1: Verdadero', '0: Falso');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('community_users', function (Blueprint $table) {
            if(Schema::hasColumn('community_users', 'enable')) {
                $table->dropColumn('enable');
            }
        });
    }
};
