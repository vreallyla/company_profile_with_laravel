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
            $table->string('code',100)->primary();
            $table->string('brand_id',36);
            $table->foreign('brand_id')->references('code')->on('brands');
            $table->string('product_id',36);
            $table->foreign('product_id')->references('code')->on('products');
            $table->string('list_title',50)->unique();
            $table->string('list_img',100);
            $table->text('list_desc');
            $table->string('link_catalogue');

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
