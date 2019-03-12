<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->string('address',100);
            $table->string('email',30);
            $table->string('phone',25);
            $table->string('facebook',50);
            $table->string('twitter',50);
            $table->string('instagram',50);
            $table->string('linkedin',50);
            $table->string('pinterest',50);
            $table->string('google_plus',50);

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
        Schema::dropIfExists('contacts');
    }
}
