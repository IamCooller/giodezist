<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOptions2305 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            $table->text('tel1_en')->nullable();
            $table->text('tel1_ru')->nullable();
            $table->text('tel1_oz')->nullable();

            $table->text('tel2_en')->nullable();
            $table->text('tel2_ru')->nullable();
            $table->text('tel2_oz')->nullable();


            $table->text('email_en')->nullable();
            $table->text('email_ru')->nullable();
            $table->text('email_oz')->nullable();

            $table->text('email2_en')->nullable();
            $table->text('email2_ru')->nullable();
            $table->text('email2_oz')->nullable();

            $table->string('email_form')->nullable();

            $table->text('logo_en')->nullable();
            $table->text('logo_ru')->nullable();
            $table->text('logo_oz')->nullable();

            $table->text('address_ru')->nullable();
            $table->text('address_en')->nullable();
            $table->text('address_oz')->nullable();
            
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
        Schema::table('options', function (Blueprint $table) {
            //
        });
    }
}
