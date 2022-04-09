<?php

namespace App\Interfaces;

interface MovieRepositoryInterface
{

    public function FindAllMovies();

    public function FindMovieShortCode($movie_name);

    public function FindMovieId($movie_name);
}

