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
        Schema::create('community_users', function (Blueprint $table) {
            $table->id();
            $table->string('names');
            $table->string('surnames');
            $table->foreignId('type_document_id')->constrained('type_of_documents')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('document');
            $table->string('age');
            $table->foreignId('gender_id')->constrained('genders')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('phone_1');
            $table->string('phone_2');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('community_id')->constrained('communities')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('educational_level_id')->constrained('educational_levels')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('training_area_id')->constrained('training_areas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('occupation_id')->constrained('occupations')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('strategy_id')->constrained('strategies')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('community_users');
    }
};
