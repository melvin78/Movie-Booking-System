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
}
