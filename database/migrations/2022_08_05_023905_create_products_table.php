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
            $table->string('product_name', 100)->comment('商品名');
            $table->integer('price')->unsigned()->comment('価格');
            $table->integer('stock')->unsigned()->comment('在庫');
            $table->integer('category_id')->unsigned()->comment('カテゴリ');
            $table->text('comment')->comment('コメント');
            $table->string('img_path')->nullable()->comment('画像パス');
            $table->softDeletes();
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
