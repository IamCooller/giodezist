<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddServicessingle2305 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('servicesingle', function (Blueprint $table) {
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


        $table->text("MainService_en")->nullable();
        $table->text("MainService_ru")->nullable();
        $table->text("MainService_oz")->nullable();

        $table->text("TitleService_en")->nullable();
        $table->text("TitleService_ru")->nullable();
        $table->text("TitleService_oz")->nullable();

        $table->text("SubTitleService_en")->nullable();
        $table->text("SubTitleService_ru")->nullable();
        $table->text("SubTitleService_oz")->nullable();

        $table->text("ServiceImg_ru")->nullable();
        $table->text("ServiceImg_en")->nullable();
        $table->text("ServiceImg_oz")->nullable();

        $table->text("ServiceNumber_ru")->nullable();
        $table->text("ServiceNumber_en")->nullable();
        $table->text("ServiceNumber_oz")->nullable();

        $table->text("BlockOneService_en")->nullable();
        $table->text("BlockOneService_ru")->nullable();
        $table->text("BlockOneService_oz")->nullable();

        $table->text("BlockTwoService_en")->nullable();
        $table->text("BlockTwoService_ru")->nullable();
        $table->text("BlockTwoService_oz")->nullable();

        $table->text("BlockTwoImgService_en")->nullable();
        $table->text("BlockTwoImgService_ru")->nullable();
        $table->text("BlockTwoImgService_oz")->nullable();

        $table->text("BlockThreeService_en")->nullable();
        $table->text("BlockThreeService_ru")->nullable();
        $table->text("BlockThreeService_oz")->nullable();

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
    Schema::drop('homepage');
}
}
