<?php

namespace App\Repository;

use App\Interfaces\CinemaRepositoryInterface;
use App\Models\Cinemas;

class CinemaRepository implements CinemaRepositoryInterface
{

    public function FindCinemas(): \Illuminate\Database\Eloquent\Collection
    {
         return Cinemas::all();
    }
}
