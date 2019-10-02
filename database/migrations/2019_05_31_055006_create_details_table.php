<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('about_info')->nullable(); //abt
            $table->string('about_title')->nullable(); //abt
            $table->string('about_title2')->nullable(); //abt
            $table->string('key1')->nullable(); //abt
            $table->string('key2')->nullable(); //abt
            $table->string('key3')->nullable(); //abt
            $table->longText('about_image')->nullable(); //abt
            $table->longText('map')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->text('phone')->nullable();


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
        Schema::dropIfExists('details');
    }
}
