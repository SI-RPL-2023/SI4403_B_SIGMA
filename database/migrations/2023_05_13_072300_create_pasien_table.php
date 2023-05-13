<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->string('no_rekam_medis')->primary();
            $table->string('nik')->unique();
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pekerjaan');
            $table->char('golongan_darah');
            $table->string('no_telp');
            $table->string('email');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->text('alamat');
            $table->text('foto_ktp')->nullable();
            // Wali
            $table->string('nama_lengkap_wali')->nullable();
            $table->string('jenis_kelamin_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('hubungan_keluarga')->nullable();
            $table->string('no_telp_wali')->nullable();
            $table->string('email_wali')->nullable();
            $table->string('provinsi_wali')->nullable();
            $table->string('kabupaten_wali')->nullable();
            $table->string('kecamatan_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            // id user
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
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
