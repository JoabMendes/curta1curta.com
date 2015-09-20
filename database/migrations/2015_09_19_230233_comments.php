<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('comments', function(Blueprint $table){
            $table->increments('id');
            $table -> integer('on_post')->unsigned()->default(0);
            $table->foreign('on_post')->references('id')->on('posts')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->text('body');
            $table->integer('stars');
            $table->string('filmow');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        // drop comment
        Schema::drop('comments');
    }
}
