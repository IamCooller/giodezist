<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNews2405 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('news', function (Blueprint $table) {
        $table->increments('id');
        $table->string("title_en")->nullable();
        $table->string("title_oz")->nullable();
        $table->string("title_ru")->nullable();
        $table->string("description_en")->nullable();
        $table->string("description_ru")->nullable();
        $table->string("description_oz")->nullable();
        $table->text("keywords_en")->nullable();
        $table->text("keywords_ru")->nullable();
        $table->text("keywords_oz")->nullable();


        $table->text("NewsTitle_en")->nullable();
        $table->text("NewsTitle_ru")->nullable();
        $table->text("NewsTitle_oz")->nullable();

        $table->text("NewsSubTitle_en")->nullable();
        $table->text("NewsSubTitle_ru")->nullable();
        $table->text("NewsSubTitle_oz")->nullable();

        $table->longText("NewsContent_en")->nullable();
        $table->longText("NewsContent_ru")->nullable();
        $table->longText("NewsContent_oz")->nullable();

        $table->text("NewsImg_ru")->nullable();
        $table->text("NewsImg_en")->nullable();
        $table->text("NewsImg_oz")->nullable();
        
        $table->text('published_ru')->nullable();
        $table->text('published_en')->nullable();
        $table->text('published_oz')->nullable();

        $table->timestamp('publish_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('created_at')->nullable();

    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::drop('news');
}
}
