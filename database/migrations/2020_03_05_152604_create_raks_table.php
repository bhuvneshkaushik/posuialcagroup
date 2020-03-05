<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('no_rak')->nullable()->default(12);
            $table->string('name', 100)->nullable()->default('text');
            $table->string('description', 100)->nullable()->default('text');
            $table->enum('status', ['y', 'n'])->nullable();
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
        Schema::dropIfExists('raks');
    }
}
