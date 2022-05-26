<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTablicense2405 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('tablicense', function (Blueprint $table) {
        $table->increments('id');
    
        $table->text("TablicenseTitle_en")->nullable();
        $table->text("TablicenseTitle_ru")->nullable();
        $table->text("TablicenseTitle_oz")->nullable();


        $table->text("TablicenseNumber_ru")->nullable();
        $table->text("TablicenseNumber_en")->nullable();
        $table->text("TablicenseNumber_oz")->nullable();

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
    Schema::drop('tablicense');
}
}
