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
}
