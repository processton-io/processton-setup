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
        Schema::create('operational_settings', function (Blueprint $table) {
            $table->id();
            $table->string('group_name');
            $table->string('sub_group');
            $table->string('title');
            $table->string('key');
            $table->string('type')->default('string');
            $table->string('value_string')->nullable();
            $table->json('value_json')->nullable();
            $table->text('value_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operational_settings');
    }
};
