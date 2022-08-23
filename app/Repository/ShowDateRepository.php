<?php

namespace App\Repository;

use App\Interfaces\ShowDatesRepositoryInterface;
use App\Models\ShowDates;

class ShowDateRepository implements ShowDatesRepositoryInterface
{

    public function FindAllShowDates(): \Illuminate\Database\Eloquent\Collection
    {
        return ShowDates::all();
    }
}
