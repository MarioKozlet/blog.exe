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
        Schema::create('aktivitas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_aktivitas');
            $table->date('tgl');
            $table->string('tempat');
            $table->enum('pj', [
                'Irman Aras S.Sos',
                'Inceh ashari S.Kom',
                'Yasir Sensei S.Kom',
                'Haedar Ridha SH'
            ]);
            $table->integer('biaya');
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
        Schema::dropIfExists('aktivitas');
    }
};
