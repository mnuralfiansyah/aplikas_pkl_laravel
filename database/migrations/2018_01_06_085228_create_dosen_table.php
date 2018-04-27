<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->integer('kd_dosen')->unique();
      			$table->string('email')->unique();
            $table->string('nip');//boleh kosong
      			$table->string('nama');
            $table->string('pangkat');
      			$table->string('alamat');
      			$table->string('nohp');
      			$table->string('password');
      			$table->tinyInteger('status');


            $table->timestamps();

			$table->primary('nip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen');
    }
}
