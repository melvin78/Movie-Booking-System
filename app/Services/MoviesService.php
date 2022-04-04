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
}
