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
        Schema::create('community_community_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('community_id')->constrained('communities')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('community_name', 255);
            $table->foreignId('user_id')->constrained('community_users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('user_name', 255);
            $table->string('user_document', 255);
            $table->string('user_email', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('community_community_user');
    }
};
