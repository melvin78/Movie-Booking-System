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

    public function FindShowTimeByShowTimeStartDateAndShowTimeEndDate($time_from, $time_to)
    {
        return ShowTime::whereTime('time_from','=',$time_from)
                        ->whereTime('time_to','=',$time_to)
                        ->value('id');
    }

    public function FindPriceByShowTimeStartDateAndShowTimeEndDate($time_from, $time_to)
    {
        return ShowTime::whereTime('time_from','=',$time_from)
            ->whereTime('time_to','=',$time_to)
            ->value('price');
    }
}
