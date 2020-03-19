<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('productCode');
            $table->string('no_sku');
            $table->string('name')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('supplier_id')->unsigned();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('stock');
            $table->integer('diskon_1');
            $table->integer('diskon_2');
            $table->integer('diskon_3');
            $table->integer('harga_beli');
            $table->integer('harga_jual_1');
            $table->integer('harga_jual_2');
            $table->integer('harga_jual_3');
            $table->string('ppn_beli')->nullable();
            $table->string('ppn_jual')->nullable();
            $table->date('expired_date')->nullable();
            $table->string('satuan')->nullable();
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
        Schema::dropIfExists('table_products');
    }
}
