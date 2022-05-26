<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormCallback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formscallback', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tel')->nullable();
            $table->string('email')->nullable();
            $table->text('subject')->nullable();
            $table->string('name')->nullable();
            $table->string('vacancy')->nullable();
            $table->text('file')->nullable();
            $table->string('form')->nullable();
            $table->timestamp('publish_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->text("service")->nullable();
            $table->text("index")->nullable();
            $table->integer('status')->default(0);
        });    //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formscallback', function (Blueprint $table) {
            //
        });
}

}