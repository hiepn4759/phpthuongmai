<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('danhmuc_name');
            $table->integer('danhmuc_id');
            $table->integer('nhan_id');
            $table->longText('product_short_mieuta');
            $table->longText('product_long_mieuta');
            $table->float('product_gia');
            $table->string('product_anh');
            $table->string('product_size');
            $table->string('product_color');
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
        Schema::dropIfExists('tbl_products');
    }
}
