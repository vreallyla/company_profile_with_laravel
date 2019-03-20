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
            $table->string('code',36)->primary();
            $table->string('art_title',50);
            $table->string('art_img',100);
            $table->string('art_by');
            $table->foreign('art_by')->references('code')->on('users');
            $table->text('art_desc');
            $table->string('art_category_id',36);
            $table->foreign('art_category_id')->references('code')->on('category_articles')->onDelete('cascade');
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
