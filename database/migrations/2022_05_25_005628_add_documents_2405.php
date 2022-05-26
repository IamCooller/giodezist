<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDocuments2405 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');

            $table->string('tab_ru')->nullable();
            $table->string('tab_en')->nullable();
            $table->string('tab_oz')->nullable();

            $table->longText("file_en")->nullable();
            $table->longText("file_ru")->nullable();
            $table->longText("file_oz")->nullable();

            $table->text("title_en")->nullable();
            $table->text("title_ru")->nullable();
            $table->text("title_oz")->nullable();

            $table->text("number_en")->nullable();
            $table->text("number_ru")->nullable();
            $table->text("number_oz")->nullable();


            $table->text("regist_en")->nullable();
            $table->text("regist_ru")->nullable();
            $table->text("regist_oz")->nullable();

            $table->text("count")->nullable();
        
    
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
        Schema::drop('documents');
    }

}
