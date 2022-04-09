<?php

namespace App\Interfaces;

interface DrinkServiceInterface
{

    public function AvailableDrinks();

    public function GetDrinkPrice($drink_name);

    public function GetDrinkId($drink_name);
}
