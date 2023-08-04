<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateDataPerusahaansTable extends Migration
{
    use SoftDeletes;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_perusahaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users');
            $table->string('name');
            $table->text('alamat')->change();
            $table->string('no_telp')->nullable();
            $table->unsignedBigInteger('provinsi');
            $table->unsignedBigInteger('kota');
            $table->text('deskripsi')->change();
            $table->string('niptu')->nullable();
            $table->string('npwp')->nullable();
            $table->string('siup')->nullable();
            $table->string('akta')->nullable();
            $table->string('tdp')->nullable();
            $table->string('bank')->nullable();
            $table->string('rekening')->nullable();
            $table->string('pemilik_rek')->nullable();
            
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->foreign('users')->references('id')->on('users');
            $table->foreign('provinsi')->references('id')->on('provinsis');
            $table->foreign('kota')->references('id')->on('kotas');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('Updated_by')->references('id')->on('users');
            $table->foreign('deleted_by')->references('id')->on('users');

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_perusahaan');
    }
}
