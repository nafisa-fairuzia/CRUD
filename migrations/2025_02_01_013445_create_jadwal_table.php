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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dokter_id')->constrained('dokter');
            $table->string('hari');
            $table->string('jam', 5);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
    };