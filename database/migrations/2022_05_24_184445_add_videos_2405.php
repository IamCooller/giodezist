<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVideos2405 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
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
    
    
            $table->text("VideosTitle_en")->nullable();
            $table->text("VideosTitle_ru")->nullable();
            $table->text("VideosTitle_oz")->nullable();
    
            $table->longText("VideosContent_en")->nullable();
            $table->longText("VideosContent_ru")->nullable();
            $table->longText("VideosContent_oz")->nullable();
    
            $table->text("VideosImg_ru")->nullable();
            $table->text("VideosImg_en")->nullable();
            $table->text("VideosImg_oz")->nullable();
            
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
        Schema::drop('videos');
    }
}
