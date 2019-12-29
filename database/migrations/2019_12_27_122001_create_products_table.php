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
            $table->bigIncrements('id');
            $table->string('name');
            // $table->mediumText('slug');
            // $table->integer('origin_pirce');
            // $table->integer('sale_pirce');
            // $table->integer('discount_percent');
            // $table->text('content');
            // $table->integer('user_id');
            // $table->integer('category_id');
            $table->integer('status');
            // $table->dateTime('create_at');
            // $table->dateTime('update_at');
            // $table->dateTime('delete');




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
