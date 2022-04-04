<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('movie_name');
            $table->integer('running_time');
            $table->json('cast')->nullable();
            $table->json('show_time')->nullable();
            $table->string('imdb_rating');
            $table->string('tomato_meter');
            $table->date('show_date');
            $table->integer('parent_id')->nullable();
            $table->string('age_limit_id');
            $table->integer('genre_id');
            $table->integer('cinema_id');
            $table->integer('offer_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
