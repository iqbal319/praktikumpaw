<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_mahasiswa', function (Blueprint $table) {
            $table->char("nrp",12)->unique()->primary();
            $table->string("nama");
            $table->string("email")->unique();
            $table->text("alamat");
            $table->enum("status",["lulus","belum lulus"])->default("belum lulus");
            $table->decimal("ipk",8,2)->default(4.0);
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
        Schema::dropIfExists('mahasiswa');
    }
}
