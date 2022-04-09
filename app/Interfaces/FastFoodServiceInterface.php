<?php

namespace App\Interfaces;

interface FastFoodServiceInterface
{

    public function FastFoodsAvailable();

    public function GetFastFoodPrice($fast_food_name);

    public function GetFastFoodId($fast_food_name);
}
