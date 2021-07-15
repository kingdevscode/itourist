<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->string('url');
            $table->unsignedBigInteger('imgUser')->nullable();
            $table->unsignedBigInteger('imgArticle')->nullable();
            $table->unsignedBigInteger('imgSite')->nullable();
            $table->unsignedBigInteger('imgLogement')->nullable();
            $table->foreign('imgUser')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('imgArticle')->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('imgSite')->references('id')->on('sites')->onDelete('cascade');
            $table->foreign('imgLogement')->references('id')->on('logements')->onDelete('cascade');
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
        Schema::dropIfExists('images');
    }
}
