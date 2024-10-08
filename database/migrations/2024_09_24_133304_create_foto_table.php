<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoTable extends Migration
{
    public function up()
    {
        Schema::create('foto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi dengan tabel users
            $table->string('path'); // Menyimpan path foto
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('foto');
    }
}

