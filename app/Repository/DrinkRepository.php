<?php

namespace App\Repository;

use App\Interfaces\DrinkRepositoryInterface;
use App\Models\Drink;

class DrinkRepository implements DrinkRepositoryInterface
{

    public function FindAllDrinks(): \Illuminate\Database\Eloquent\Collection
    {

        return Drink::all();
    }

    public function FindDrinkPrice($drink_name)
    {
        return Drink::where('description','=',$drink_name)->value('price');
    }

    public function FindDrinkId($drink_name)
    {
        return Drink::where('description','=',$drink_name)->value('id');
    }
}
