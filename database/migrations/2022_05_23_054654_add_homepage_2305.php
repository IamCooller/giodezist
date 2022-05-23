<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHomepage2305 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('homepage', function (Blueprint $table) {
        $table->string("title_en")->nullable();
        $table->string("title_oz")->nullable();
        $table->string("title_ru")->nullable();
        $table->string("description_en")->nullable();
        $table->string("description_ru")->nullable();
        $table->string("description_oz")->nullable();
        $table->text("keywords_en")->nullable();
        $table->text("keywords_ru")->nullable();
        $table->text("keywords_oz")->nullable();


        $table->text("MainTitle_en")->nullable();
        $table->text("MainTitle_ru")->nullable();
        $table->text("MainTitle_oz")->nullable();

        $table->text("achievement_ru")->nullable();
        $table->text("achievement_en")->nullable();
        $table->text("achievement_oz")->nullable();
        
        $table->text("servicesTitle_ru")->nullable();
        $table->text("servicesTitle_en")->nullable();
        $table->text("servicesTitle_oz")->nullable();

        $table->text("about_ru")->nullable();
        $table->text("about_en")->nullable();
        $table->text("about_oz")->nullable();
        $table->text("aboutImg_ru")->nullable();
        $table->text("aboutImg_en")->nullable();
        $table->text("aboutImg_oz")->nullable();

        $table->text("ProjectsTitle_en")->nullable();
        $table->text("ProjectsTitle_ru")->nullable();
        $table->text("ProjectsTitle_oz")->nullable();

        $table->text("NewsTitle_en")->nullable();
        $table->text("NewsTitle_ru")->nullable();
        $table->text("NewsTitle_oz")->nullable();

        $table->text("ContactTitle_en")->nullable();
        $table->text("ContactTitle_ru")->nullable();
        $table->text("ContactTitle_oz")->nullable();

        $table->text("ContactPhone_en")->nullable();
        $table->text("ContactPhone_ru")->nullable();
        $table->text("ContactPhone_oz")->nullable();

        $table->text("ContactGraph_en")->nullable();
        $table->text("ContactGraph_ru")->nullable();
        $table->text("ContactGraph_oz")->nullable();

        $table->text("ContactAddress_en")->nullable();
        $table->text("ContactAddress_ru")->nullable();
        $table->text("ContactAddress_oz")->nullable();

        $table->text("ContactMap_en")->nullable();
        $table->text("ContactMap_ru")->nullable();
        $table->text("ContactMap_oz")->nullable();
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
