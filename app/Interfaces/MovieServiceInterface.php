<?php

namespace App\Interfaces;

interface MovieServiceInterface
{

    public function MoviesCurrentlyShowing();

    public function MovieShortCode($movie_name);

    public function MovieId($movie_name);

    public function MovieRuntimeAndPlot ($movie_id);

    public function MoviePrice ($movie_id);

    public function MoviePathLocation ($movie_id);
}
