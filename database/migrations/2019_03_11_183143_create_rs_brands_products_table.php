<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsBrandsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rs_brands_products', function (Blueprint $table) {
            $table->string('brand_id',36);
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->string('product_id',36);
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('title',50);
            $table->string('img',100);
            $table->text('desc');
            $table->string('link_catalogue',100);

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
        Schema::dropIfExists('rs_brands_products');
    }
}
