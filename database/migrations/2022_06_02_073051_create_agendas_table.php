<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('namaguru');
            $table->string('matapelajaran');
            $table->string('materipelajaran');
            $table->string('mulai');
            $table->string('selesai');
            $table->string('ketsiswa');
            $table->string('kelas');
            $table->enum('jenispembelajaran', ['ptm', 'bdr']);
            $table->string('linkpembelajaran');
            $table->string('dokumentasi');
            $table->string('keterangan');
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
        Schema::dropIfExists('agendas');
    }
};
