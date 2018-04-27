<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('nim')->unique();
            $table->string('email')->unique();
            $table->string('nama');
            $table->integer('prodi_id')->unsigned();
      			$table->enum('kelas', ['Reguler', 'Non-Reguler']);
      			$table->string('alamat');
      			$table->integer('angkatan')->unsigned();
      			$table->string('nohp');
      			$table->enum('jenis_kelamin', ['L', 'P']);
      			$table->string('nama_ayah');
      			$table->string('nama_ibu');
      			$table->string('alamat_ortu');
      			$table->string('nohp_ortu');
      			$table->string('jurusan')->default('Teknologi Informasi');

      			$table->string('password')->nullable($value = true);
      			$table->tinyInteger('status')->default(0);

            $table->timestamps();


      			$table->primary('nim');
      			$table->foreign('prodi_id','fk_program_study')->references('id')->on('prodis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
