<?php

namespace App\Interfaces;

interface MovieServiceInterface
{

    public function MoviesCurrentlyShowing();

    public function MovieShortCode($movie_name);

    public function MovieId($movie_name);
}
