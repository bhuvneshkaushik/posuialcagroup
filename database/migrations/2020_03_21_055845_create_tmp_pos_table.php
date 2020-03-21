<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmpPosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmp_pos', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->bigInteger('member_id')->unsigned();
            // $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            $table->bigInteger('product_id')->unsigned();
            $table->integer('qty')->unsigned();
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
        Schema::dropIfExists('tmp_pos');
    }
}
