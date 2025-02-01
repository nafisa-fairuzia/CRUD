<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('nomor_telepon', 15);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
    };
