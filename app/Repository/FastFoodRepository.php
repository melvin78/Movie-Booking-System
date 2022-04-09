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

    public function FindPriceByFastFoodName($fast_food_name)
    {
        return FastFood::where('description','=',$fast_food_name)
            ->value('price');
    }

    public function FindIdByFastFoodName($fast_food_name)
    {
        return FastFood::where('description','=',$fast_food_name)
            ->value('id');
    }
}
