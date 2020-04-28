<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('code',10)->nullable();
            $table->string('sex',10)->nullable();
            $table->string('name');
            $table->string('name_shop');
            $table->string('level',15);
            $table->string('state',50);
            $table->string('city',50);
            $table->text('address');
            $table->string('mob',11);
            $table->string('tel',15);
            $table->string('fax',15);
            $table->string('image')->nullable();
            $table->integer('order')->nullable();
            $table->tinyInteger('active');
            $table->string('lang',3);




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
        Schema::dropIfExists('agents');
    }
}
