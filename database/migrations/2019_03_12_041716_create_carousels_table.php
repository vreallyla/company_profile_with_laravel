<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarouselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousels', function (Blueprint $table) {
            $table->string('code',36)->primary();
            $table->string('car_title',80);
            $table->string('car_img',100);
            $table->string('car_desc');
            $table->string('fill_btn_primary');
            $table->string('fill_btn_secondary')->nullable();
            $table->string('url_btn_primary')->nullable();
            $table->string('url_btn_secondary')->nullable();
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
        Schema::dropIfExists('carousels');
    }
}
