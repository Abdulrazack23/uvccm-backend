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
        Schema::create('s_m_s_templates', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->unique();
            $table->foreignId('template_category_id')->constrained('s_m_s_template_categories', 'id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('message');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_m_s_templates');
    }
};
