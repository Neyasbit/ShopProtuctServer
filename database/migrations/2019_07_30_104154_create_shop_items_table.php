<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index()->nullable(false);
            $table->float('price')->index()->nullable(false);
            $table->string('bar_code')->unique()->nullable(false);
            $table->unsignedBigInteger('book_category_id')->index()->nullable();
            $table->string('type')->index()->nullable(false);
            $table->timestamps();

            $table->foreign('book_category_id')->references('id')->on('book_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_items');
    }
}
