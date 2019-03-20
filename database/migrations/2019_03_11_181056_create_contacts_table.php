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
            $table->string('code',36)->primary();
            $table->string('contact_address',100);
            $table->string('contact_email',30);
            $table->string('contact_phone',25);
            $table->string('contact_facebook',50)->nullable();
            $table->string('contact_twitter',50)->nullable();
            $table->string('contact_instagram',50)->nullable();
            $table->string('contact_linkedin',50)->nullable();
            $table->string('contact_pinterest',50)->nullable();
            $table->string('contact_google_plus',50)->nullable();
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
