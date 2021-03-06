<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('photo_id')->nullable()->index()->unsigned();
            $table->integer('category_id')->nullable()->index()->unsigned();
            $table->string('title');
            $table->string('description');
            $table->text('brief');
            $table->integer('price')->default(0);
            $table->integer('brand_id')->unsigned()->nullable();
            $table->integer('rating')->unsigned()->nullable();
            $table->integer('stock')->unsigned()->nullable()->default(0);
            $table->boolean('is_active')->unsigned()->default(0);
            $table->boolean('featured')->unsigned()->default(0);
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
