<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAbout2405 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
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
    
    
            $table->text("aboutTitle_en")->nullable();
            $table->text("aboutTitle_ru")->nullable();
            $table->text("aboutTitle_oz")->nullable();

            $table->text("aboutSubTitle_en")->nullable();
            $table->text("aboutSubTitle_ru")->nullable();
            $table->text("aboutSubTitle_oz")->nullable();

            $table->text("aboutImg_ru")->nullable();
            $table->text("aboutImg_en")->nullable();
            $table->text("aboutImg_oz")->nullable();
    
            $table->longText("aboutContent_en")->nullable();
            $table->longText("aboutContent_ru")->nullable();
            $table->longText("aboutContent_oz")->nullable();
    
        
            $table->longText("aboutPhotos_en")->nullable();
            $table->longText("aboutPhotos_ru")->nullable();
            $table->longText("aboutPhotos_oz")->nullable();
        
    
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
        Schema::drop('about');
    }
}
