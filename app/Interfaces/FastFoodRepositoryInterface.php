<?php

namespace App\Interfaces;

interface FastFoodRepositoryInterface
{

    public function FindAllFastFoods();

    public function FindPriceByFastFoodName($fast_food_name);

    public function FindIdByFastFoodName($fast_food_name);
}
