<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('books', function (Blueprint $table) {
        $table->bigIncrements('id');
            $table->string('phone_name');
            $table->string('description');
            $table->string('price');
            $table->string('display');
            $table->string('battery');
            $table->string('storage');
            $table->string('processor');
            $table->string('camera');
            $table->string('network');
            $table->string('waterproof');
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
        Schema::dropIfExists('books');
    }
}
