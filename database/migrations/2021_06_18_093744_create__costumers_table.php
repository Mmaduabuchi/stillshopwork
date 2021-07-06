<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_costumers', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('surName');
            $table->string('email');
            $table->integer('number');
            $table->string('password');
            $table->string('REpassword');
            $table->string('country');
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
        Schema::dropIfExists('_costumers');
    }
}
