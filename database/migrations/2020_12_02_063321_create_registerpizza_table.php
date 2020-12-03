<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterpizzaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerpizza', function (Blueprint $table) {
            $table->increments('id');
            $table->string("Username");
            $table->string("Email");
            $table->string("Password");
            $table->string("Confirm-Password");
            $table->string("Adress");
            $table->string("Phone-Number");
            $table->string("Gender");
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
        Schema::dropIfExists('registerpizza');
    }
}
