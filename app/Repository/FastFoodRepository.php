<?php

namespace App\Repository;

use App\Interfaces\FastFoodRepositoryInterface;
use App\Models\FastFood;

class FastFoodRepository implements FastFoodRepositoryInterface
{

    public function FindAllFastFoods(): \Illuminate\Database\Eloquent\Collection
    {
        return FastFood::all();
    }
}
