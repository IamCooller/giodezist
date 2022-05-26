<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTasks2405 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
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
    
    
            $table->text("tasksTitle_en")->nullable();
            $table->text("tasksTitle_ru")->nullable();
            $table->text("tasksTitle_oz")->nullable();

            $table->longText("tasksSubTitle_en")->nullable();
            $table->longText("tasksSubTitle_ru")->nullable();
            $table->longText("tasksSubTitle_oz")->nullable();

            $table->text("tasksImg_ru")->nullable();
            $table->text("tasksImg_en")->nullable();
            $table->text("tasksImg_oz")->nullable();
    
            $table->longText("tasksContent_en")->nullable();
            $table->longText("tasksContent_ru")->nullable();
            $table->longText("tasksContent_oz")->nullable();
    

        
    
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
        Schema::drop('tasks');
    }
}
