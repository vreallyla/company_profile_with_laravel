<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->string('code',36)->primary();
            $table->string('company_img',100);
            $table->string('company_logo',100);
            $table->string('company_name',50);
            $table->string('company_quote',60);
            $table->string('company_short_info');
            $table->text('company_history');
            $table->text('company_intro');
            $table->text('company_vision');
            $table->text('company_mission');

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
        Schema::dropIfExists('abouts');
    }
}
