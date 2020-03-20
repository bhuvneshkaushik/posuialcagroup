<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesDetailTrxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_detail_trxes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('detailCode')->nullable();
            $table->bigInteger('sales_trx_id')->unsigned();
            // $table->foreign('sales_trx_id')->references('id')->on('sales_trxes');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('Qty');
            $table->integer('detailPrice');
            $table->integer('dicTotal');
            $table->integer('dicsPercent');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('sales_detail_trxes');
       
    }
}
