database/migrations/2023_09_30_070720_create_thumbnail_active_table.php<?php

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
        Schema::create('thumbnail_inbox', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('telepon');
            $table->text('pesan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thumbnail_inbox');
    }
};
