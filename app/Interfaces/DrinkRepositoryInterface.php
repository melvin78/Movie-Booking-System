<?php

namespace App\Interfaces;

interface DrinkRepositoryInterface
{

    public function FindAllDrinks();

    public function FindDrinkPrice($drink_name);

    public function  FindDrinkId($drink_name);
}
