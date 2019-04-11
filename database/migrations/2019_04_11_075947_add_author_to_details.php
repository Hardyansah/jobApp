<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAuthorToDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('details', function (Blueprint $table) {
            $table->bigInteger('no_telp')->nullable();
            $table->string('jk')->nullable();
            $table->string('sekolah')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('alamat_sekolah')->nullable();
            $table->string('poto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('details', function (Blueprint $table) {
            $table->dropColumn('no_telp');
            $table->dropColumn('jk');
            $table->dropColumn('sekolah');
            $table->dropColumn('jurusan');
            $table->dropColumn('alamat_sekolah');
            $table->dropColumn('poto');
        });
    }
}
