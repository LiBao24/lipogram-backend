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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id('id_notifikasi');
            $table->foreignId('id_post')->nullable();
            $table->foreignId('id_user');
            $table->string('isi_notifikasi', 255);
            $table->timestamp('wkt_notifikasi')->useCurrent();
            $table->timestamps();

            $table->foreign('id_post')->references('id_post')->on('posts')->onDelete('cascade');

            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
