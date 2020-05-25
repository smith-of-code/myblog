<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_id')->unsigned()->comment('id категории');
            $table->timestamps();
            $table->string('title')->comment('заголовок');
            $table->text('desc')->comment('описание новости');
            $table->text('content')->comment('текст новости');
            $table->text('image')->nullable(true)->comment('картинка новости');
            $table->boolean('is_private')->default(true)->comment('Приватность новости');
            $table->boolean('published')->default(false)->comment('Опубликованна или нет');


            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
