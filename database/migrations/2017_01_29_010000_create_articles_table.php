<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id')->unsigned();
            $table->string('author')->nullable();
            $table->string('title')->nullable()->unique();
            $table->string('description')->nullable()->unique();
            $table->string('url', 255)->nullable()->unique();
            $table->string('url_to_image', 255)->nullable();
            $table->timestampTz('published_at')->nullable();
            $table->timestamps();
            // Foreign Key Constraint for User Articles with delete.
            $table->foreign('author_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
