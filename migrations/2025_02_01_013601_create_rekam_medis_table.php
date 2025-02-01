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
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id')->constrained('pasien');
            $table->foreignId('dokter_id')->constrained('dokter');
            $table->date('tanggal');
            $table->text('diagnosa');
            $table->foreignId('obat_id')->constrained('obat');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rekam_medis');
    }
    };
