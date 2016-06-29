<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // We gonna store all our types
        Schema::create('filetypes', function(Blueprint $table){
            $table->increments('id');
            $table->string('type');
            $table->string('mediatype');
        });

        //Here We store all our users files
        Schema::create('files', function(Blueprint $table){
            $table->increments('id');
            $table->string('filename');
            $table->string('type')->references('id')->on('filetypes')->onUpdate('cascade');
            $table->integer('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop Table Files
        Schema::drop('files');

        //Drop Table FileTypes
        Schema::drop('filetypes');
    }
}
