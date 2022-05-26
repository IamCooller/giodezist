<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDepartaments2405 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departaments', function (Blueprint $table) {
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
    
    
            $table->text("departamentsTitle_en")->nullable();
            $table->text("departamentsTitle_ru")->nullable();
            $table->text("departamentsTitle_oz")->nullable();

            $table->text("departamentsSubTitle_en")->nullable();
            $table->text("departamentsSubTitle_ru")->nullable();
            $table->text("departamentsSubTitle_oz")->nullable();

            $table->longText("departamentsImg_ru")->nullable();
            $table->longText("departamentsImg_en")->nullable();
            $table->longText("departamentsImg_oz")->nullable();
    
            $table->longText("departamentsContent_en")->nullable();
            $table->longText("departamentsContent_ru")->nullable();
            $table->longText("departamentsContent_oz")->nullable();
    
            $table->text("departamentsPhotos_en")->nullable();
            $table->text("departamentsPhotos_ru")->nullable();
            $table->text("departamentsPhotos_oz")->nullable();
        
    
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
        Schema::drop('departaments');
    }
}
