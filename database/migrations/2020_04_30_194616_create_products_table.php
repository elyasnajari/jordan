<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->nullable();
            $table->integer('collection');
            $table->string('Special');
            $table->integer('reed');
            $table->integer('density');
            $table->integer('style');
            $table->integer('texture');
            $table->integer('yarn');
            $table->string('pile', 4)->nullable();
            $table->string('ncolor', 4)->nullable();
            $table->string('weight', 20)->nullable();
            $table->integer('price');
            $table->integer('offprice');
            $table->string('tag', 30);
            $table->text('description');
                   $table->string('slug')->unique();
            $table->integer('user');
        
            $table->string('image')->nullable();
            $table->string('decor')->nullable();
            $table->integer('order')->nullable();
            $table->integer('hit')->default('0');
            $table->tinyInteger('active');
            $table->string('lang', 3);
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
        Schema::dropIfExists('products');
    }
}
