<?php

namespace App\Services;

use App\Interfaces\MovieRepositoryInterface;
use App\Interfaces\MovieServiceInterface;

class MoviesService implements MovieServiceInterface
{

    private MovieRepositoryInterface $movieRepository;

    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function MoviesCurrentlyShowing()
    {

        return $this->movieRepository->FindAllMovies();
    }

    public function MovieShortCode($movie_name)
    {
        return $this->movieRepository->FindMovieShortCode($movie_name);
    }

    public function MovieId($movie_name)
    {
        return $this->movieRepository->FindMovieId($movie_name);
    }

    public function MovieRuntimeAndPlot($movie_id)
    {
       return $this->movieRepository->FindMoviePlotAndRuntime($movie_id);
    }

    public function MoviePrice($movie_id)
    {
        return $this->movieRepository->FindMoviePrice($movie_id);
    }

    public function MoviePathLocation($movie_id)
    {
        return $this->movieRepository->FindMoviePath($movie_id);
    }
}
