<?php

namespace App\Repository;

use App\Interfaces\MovieRepositoryInterface;
use App\Models\Movies;

class MovieRepository implements MovieRepositoryInterface
{

    public function FindAllMovies(): \Illuminate\Database\Eloquent\Collection
    {

        return Movies::all();
    }

    public function FindMovieShortCode($movie_name)
    {
        return Movies::where('movie_name','=',$movie_name)->value('short_code');
    }

    public function FindMovieId($movie_name)
    {
        return Movies::where('movie_name','=',$movie_name)->value('id');
    }

    public function FindMoviePlotAndRuntime($movie_id)
    {
        return Movies::where('id',$movie_id)->get();
    }

    public function FindMoviePrice($movie_id)
    {
        return Movies::where('id',$movie_id)->value('price');
    }

    public function FindMoviePath($movie_id)
    {
        return Movies::where('id',$movie_id)->value('image_location');
    }
}
