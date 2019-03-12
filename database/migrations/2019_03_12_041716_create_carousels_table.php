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
            $table->string('id',36)->primary();
            $table->string('title',50);
            $table->string('img',100);
            $table->string('desc');
            $table->string('fill_btn_primary');
            $table->string('fill_btn_secondary');
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
