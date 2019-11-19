<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_perusahaan');
            $table->string('deskripsi');
            $table->string('nama_pekerjaan');
            $table->enum('Full Time', 'Part Time', 'Freelancer');
            $table->enum('jenis_klm');
            $table->enum('pendidikan');
            $table->string('kriteria');
            $table->string('syarat');
            $table->string('email');
            $table->string('nomor_tlp');
            $table->date('jangka_lamaran');
            $table->string('logo');
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
        Schema::dropIfExists('jobs');
    }
}
