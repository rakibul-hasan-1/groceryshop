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
            $table->string('slug')->unique();
            $table->string('short_description_1')->nullable();
            $table->string('short_description_2')->nullable();
            $table->string('short_description_3')->nullable();
            $table->string('short_description_4')->nullable();
            $table->decimal('regular_price');
            $table->decimal('sale_price')->nullable();
            $table->enum('returnable_status',['returnable','nonreturnable']);
            $table->enum('cod_status',['cod','payfirst']);
            $table->enum('stock_status',['instock','outofstock']);
            $table->unsignedInteger('quantity')->default(0);
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
