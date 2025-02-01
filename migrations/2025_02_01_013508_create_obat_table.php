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
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat');
            $table->decimal('harga', 10, 2);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('obat');
    }
    };
