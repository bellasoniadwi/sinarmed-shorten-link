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
        Schema::create('thumbnail_active', function (Blueprint $table) {
            $table->id();
            $table->string('judul_thumbnail');
            $table->text('link_thumbnail');
            $table->string('gambar_thumbnail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thumbnail_active');
    }
};
