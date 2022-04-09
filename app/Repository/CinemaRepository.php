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

    public function FindCinemaByName($cinema_name)
    {
        return Cinemas::where('cinema','=',$cinema_name)->value('short_code');
    }

    public function FindCinemaById($cinema_name)
    {
        return Cinemas::where('cinema','=',$cinema_name)->value('id');
    }
}
