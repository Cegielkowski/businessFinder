<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('phone_number', 15);
            $table->string('adress', 140);
            $table->string('email', 140);
            $table->string('zip_code', 20);
            $table->string('city', 40);
            $table->string('state', 20);
            $table->string('description', 100);
            $table->string('category', 11);
            $table->softDeletes();
            $table->uuid('uuid');
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
        Schema::dropIfExists('companies');
    }
}
