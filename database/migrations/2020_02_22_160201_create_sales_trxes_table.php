<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTrxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_trxes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('saleCode');
            $table->bigInteger('member_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('members')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->date('trx_at')->nullable();
            // $table->integer('trxTotalModal');
            // $table->integer('trxsubTotal');
            // $table->integer('trxTotal')->nullable();
            // $table->integer('trxPay')->nullable();
            // $table->integer('trxPPN');
            // $table->integer('trxDiscount');
            $table->string('trxStatus');
            // $table->string('trxChange');
            $table->date('termin_at')->nullable();
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
        Schema::dropIfExists('sales_trxes');
    }
}
