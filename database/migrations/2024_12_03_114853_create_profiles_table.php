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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id('id_profil');
            $table->unsignedBigInteger('id_user');
            $table->string('nama', 255);
            $table->string('bio', 255)->nullable();
            $table->binary('foto_profil')->nullable();
            $table->integer('jmlh_pengikut')->default(0);
            $table->integer('jmlh_mengikuti')->default(0);
            $table->integer('jmlh_post')->default(0);
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
