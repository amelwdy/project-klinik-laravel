<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->string('idPasien',10)->primary();
            $table->string('noDaftar',10);
            $table->string('nmPasien',50);
            $table->string('tmptLahir',10);
            $table->date('tgl_lahir');
            $table->enum( 'jk', ["PRIA", "WANITA"]);
            $table->string('almtPasien',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
