<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddnewpizzaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addnewpizza', function (Blueprint $table) {
            $table->id();
            $table->string("Pizza_name");
            $table->string("Pizza_desc");
            $table->string("Pizza_price");
            $table->string("Pizza_photo");
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
        Schema::dropIfExists('addnewpizza');
    }
}
