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
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jadwal_kerja_id');
            $table->unsignedBigInteger('employee_id');
            $table->date('tanggal_absensi');
            $table->time('jam_datang');
            $table->time('jam_pulang');
            $table->string('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('jadwal_kerja_id')->references('id')->on('jadwal_kerjas');
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensis');
    }
};
