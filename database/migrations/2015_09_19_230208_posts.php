<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //posts table
        Schema::create('posts', function(Blueprint $table){
            $table->increments('id');
            $table->integer('author_id')->unsigned()->default(0);
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('synopsis');
            $table->string('orginal_title');
            $table->string('direction');
            $table->string('screenplay');
            $table->string('productor');
            $table->text('cast');
            $table->string('country');
            $table->string('duration');
            $table->text('cover');
            $table->integer('view');
            $table->string('iframe');
            $table->boolean('active');
            $table->text('other');
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
        //
        Schema::drop('posts');
    }
}
