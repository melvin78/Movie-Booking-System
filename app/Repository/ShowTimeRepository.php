<?php

namespace App\Repository;

use App\Interfaces\ShowTimeRepositoryInterface;
use App\Models\ShowTime;

class ShowTimeRepository implements ShowTimeRepositoryInterface
{

    public function FindAllShowTimes(): \Illuminate\Database\Eloquent\Collection
    {

        return ShowTime::all();
    }
}
