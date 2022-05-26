<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStructure2405 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structure', function (Blueprint $table) {
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
    
    
            $table->text("structureTitle_en")->nullable();
            $table->text("structureTitle_ru")->nullable();
            $table->text("structureTitle_oz")->nullable();

          

            $table->longText("structureImg_ru")->nullable();
            $table->longText("structureImg_en")->nullable();
            $table->longText("structureImg_oz")->nullable();
    
            $table->longText("structureContent_en")->nullable();
            $table->longText("structureContent_ru")->nullable();
            $table->longText("structureContent_oz")->nullable();
    

        
    
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
        Schema::drop('structure');
    }
}
