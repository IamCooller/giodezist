<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContacts2505 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
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

            $table->text("Contacttitle_en")->nullable();
            $table->text("Contacttitle_oz")->nullable();
            $table->text("Contacttitle_ru")->nullable();


            $table->text("Contacttel_en")->nullable();
            $table->text("Contacttel_oz")->nullable();
            $table->text("Contacttel_ru")->nullable();


            $table->text("Contactgraphs_en")->nullable();
            $table->text("Contactgraphs_ru")->nullable();
            $table->text("Contactgraphs_oz")->nullable();

            $table->text("Contactaddress_en")->nullable();
            $table->text("Contactaddress_ru")->nullable();
            $table->text("Contactaddress_oz")->nullable();

            $table->text("Contactmap_en")->nullable();
            $table->text("Contactmap_ru")->nullable();
            $table->text("Contactmap_oz")->nullable();

            $table->timestamp('publish_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            
        });    //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            //
        });
    }
}
