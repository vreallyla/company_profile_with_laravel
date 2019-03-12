<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->string('title',50);
            $table->string('img',100);
            $table->string('by');
            $table->foreign('by')->references('id')->on('users');
            $table->text('desc');
            $table->string('category_id',36);
            $table->foreign('category_id')->references('id')->on('category_articles');
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
        Schema::dropIfExists('articles');
    }
}
