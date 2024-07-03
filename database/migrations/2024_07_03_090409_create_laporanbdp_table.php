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
        Schema::create('laporanbdp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->string('title',100);
            $table->text('description')->nullable();
            $table->string('document_pdf')->nullable();
            $table->string('document_word')->nullable();
            $table->timestamps();
        });

        Schema::table('laporanbdp', function (Blueprint $table) {
            $table->foreign('siswa_id')->references('id')->on('siswa')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporanbdp');
    }
};
