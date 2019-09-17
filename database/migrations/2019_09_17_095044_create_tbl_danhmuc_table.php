<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblDanhmucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_danhmuc', function (Blueprint $table) {
            $table->increments('danhmuc_id');
            $table->string('danhmuc_ten');
            $table->string('danhmuc_mieuta');
            $table->integer('tinhtrang_danhmuc');
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
        Schema::dropIfExists('tbl_danhmuc');
    }
}
